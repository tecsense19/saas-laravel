<?php

namespace App\Http\Controllers\App;

use App\Models\{ User, State, City, Event };
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.event.index');
    }

    public function checkEventName(Request $request)
    {
        $eventTitle = $request->input('event_title');
        $eventId = $request->input('event_id') ? decrypt($request->input('event_id')) : '';
        
        // Check if a hsnsac with the given name exists
        if($eventId)
        {
            $eventExists = Event::where('event_title', $eventTitle)->where('id', '!=', $eventId)->exists();
        }
        else
        {
            $eventExists = Event::where('event_title', $eventTitle)->exists();
        }

        // Return JSON response indicating if hsnsac name is unique
        echo json_encode(!$eventExists);
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $searchQuery = $request->input('search');

        $eventList = Event::when($searchQuery !== null, function ($query) use ($searchQuery) {
            return $query->where('event_title', 'LIKE', '%' . $searchQuery . '%');
        })
        ->paginate(env('PER_PAGE_RECORD_COUNT'));
        
        return view('app.event.list', compact('eventList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $uuid = Str::uuid();
        $eventNumber = (string) $uuid;

        $eventId = $request->input('event_id') ? decrypt($request->input('event_id')) : '';

        $validatedData = $request->validate([
            'event_title' => ['required', 'string', 'max:255']
        ]);

        if($eventId)
        {
            Event::where('id', $eventId)->update([
                'event_title' => $request->event_title,
                'sort_description' => $request->sort_description,
                'description' => $request->description,
                'event_location' => $request->event_location,
                'state_id' => $request->state_id,
                'city_id' => $request->city_id,
                'event_date' => date('Y-m-d', strtotime($request->event_date)),
                'event_time' => date('H:i:s', strtotime($request->event_time)),
            ]);

            if($file = $request->file('event_image'))
            {
                $path = 'public/uploads/event/';

                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $filename);

                $img = 'public/uploads/event/' . $filename;

                if($eventId)
                {
                    $getDetails = Event::where('id', $eventId)->first();
                    if ($getDetails) {
                        $proFilePath = $getDetails->event_image;
                        $proPath = substr(strstr($proFilePath, 'public/'), strlen('public/'));
                        if (file_exists(public_path('/public/'.$proPath))) {
                            \File::delete(public_path('/public/'.$proPath));
                        }
                    }
                }
                
                Event::where('id', $eventId)->update([
                    'event_image' => $img,
                ]);
            }

            return redirect()->route('events.index')->withSuccess('Event updated successfully.');
        }
        else
        {
            $event = Event::create([
                'event_uuid' => $eventNumber,
                'event_title' => $request->event_title,
                'sort_description' => $request->sort_description,
                'description' => $request->description,
                'event_location' => $request->event_location,
                'state_id' => $request->state_id,
                'city_id' => $request->city_id,
                'event_date' => date('Y-m-d', strtotime($request->event_date)),
                'event_time' => date('H:i:s', strtotime($request->event_time)),
            ]);

            if($file = $request->file('event_image'))
            {
                $path = 'public/uploads/event/';

                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $filename);

                $img = 'public/uploads/event/' . $filename;
                
                Event::where('id', $event->id)->update([
                    'event_image' => $img,
                ]);
            }

            // Set QR code options
            $options = new QROptions([
                'outputType' => QRCode::OUTPUT_IMAGE_PNG,
                'eccLevel'   => QRCode::ECC_L,
                // Add more options as needed
            ]);

            // Generate QR code
            $qrcode = new QRCode($options);
            $qrPath = 'public/uploads/event_qr/' . $eventNumber . '.png';
            $qrcode->render($eventNumber, $qrPath);

            Event::where('id', $event->id)->update([
                'qr_code' => $qrPath,
            ]);

            return redirect()->route('events.index')->withSuccess('Event created successfully.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        try {
            $id = decrypt($request->event_id);
            $event = Event::findOrFail($id);
            if ($event) {
                $proFilePath = $event->event_image;
                $proPath = substr(strstr($proFilePath, 'public/'), strlen('public/'));
                if (file_exists(public_path('/public/'.$proPath))) {
                    \File::delete(public_path('/public/'.$proPath));
                }
                
                $proFilePath = $event->qr_code;
                $proPath = substr(strstr($proFilePath, 'public/'), strlen('public/'));
                if (file_exists(public_path('/public/'.$proPath))) {
                    \File::delete(public_path('/public/'.$proPath));
                }
            }
            $event->forceDelete();
            $response = [
                'status' => true,
                'message' => 'Event deleted successfully.', // Add your additional data here
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Failed to delete event.', // Add your additional data here
            ];
            return response()->json($response);
        }
    }
}
