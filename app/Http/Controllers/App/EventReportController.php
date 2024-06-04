<?php

namespace App\Http\Controllers\App;

use App\Models\{
    Event
};
use App\Exports\EventReportExport;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Maatwebsite\Excel\Facades\Excel;

use Auth;

class EventReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getFirstEvent = Event::orderBy('id', 'asc')->first();
        $getYear = $getFirstEvent ? date('Y', strtotime($getFirstEvent->created_at)) : date('Y');
        return view('app.report.event.index', compact('getYear'));
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $month = $request->input('month_val');
        $year = $request->input('year_val');

        // Query to retrieve variants with variant options
        $query = Event::with(['states', 'cities', 'getEventUser']);

        // If search query is provided, apply search filters
        if ($month) {
            $query->whereMonth('created_at', $month);
        }
        
        if ($year) {
            $query->whereYear('created_at', $year);
        }

        // Paginate the results
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);
        $eventReportList = $query->orderBy('id', 'desc')->paginate($perPage);
        
        return view('app.report.event.list', compact('eventReportList'));
    }

    public function eventReportExport(Request $request)
    {
        // Retrieve search query parameter
        $month = $request->input('month_val');
        $year = $request->input('year_val');

        // Query to retrieve variants with variant options
        $query = Event::with(['states', 'cities', 'getEventUser']);

        // If search query is provided, apply search filters
        if ($month) {
            $query->whereMonth('created_at', $month);
        }
        
        if ($year) {
            $query->whereYear('created_at', $year);
        }
        $eventReportList = $query->orderBy('id', 'desc')->get();

        $filename = 'event_report_' . date('Y-m-d') . '.csv';

        return Excel::download(new EventReportExport($eventReportList), $filename);
    }
}
