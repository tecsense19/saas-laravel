<?php

namespace App\Http\Controllers\App;

use App\Models\{
    Language,
    LanguageStringMaster
};
use App\Exports\EventReportExport;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Maatwebsite\Excel\Facades\Excel;

use Auth;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getAllLang = Language::get();
        $getSelectedLang = LanguageStringMaster::where('lang_key', 'app_master_lang')->first();
        return view('app.language.index', compact('getAllLang', 'getSelectedLang'));
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $month = $request->input('month_val');
        $year = $request->input('year_val');

        $perPage = env('PER_PAGE_RECORD_COUNT', 10);

        // Query to retrieve variants with variant options
        $languageData = LanguageStringMaster::whereNot('lang_key', 'app_master_lang')->orderBy('id', 'desc')->paginate($perPage);

        $getSelectedLang = LanguageStringMaster::where('lang_key', 'app_master_lang')->first();
        
        return view('app.language.list', compact('languageData', 'getSelectedLang'));
    }

    public function search(Request $request) 
    {
        echo "<pre>"    ;
        print_r($request->all());
        die;
    }
    
    public function store(Request $request) 
    {
        $input = $request->all();
        
        foreach ($input['lang'] as $array_key => $value) 
        {
            $lang_value = [];
            foreach ($value as $key => $val) 
            {
                $newObj = new \StdClass();
                $newObj->label = $key;
                $newObj->value = $val;
                $lang_value[] = $newObj;
            }

            LanguageStringMaster::where('lang_key', $array_key)->update(['lang_value' => json_encode($lang_value)]);
        }
        
        return redirect()->route('language.index')->withSuccess('Language updated successfully.');
    }

    public function appMasterLangStore(Request $request) 
    {
        $input = $request->all();

        $setLang = [];
        foreach ($input['app_master_lang'] as $key => $value) 
        {
            $checkLang = Language::where('code', $value)->first();

            $newObj = new \StdClass();
            $newObj->label = $checkLang->name;
            $newObj->value = $value;
            $setLang[] = $newObj;
        }

        LanguageStringMaster::updateOrCreate(
            ['lang_key' => 'app_master_lang'], // Search criteria
            ['lang_value' => json_encode($setLang)]   // Data to update or create
        );

        $response = [
            'status' => true,
            'message' => 'App languages set successfully.', // Add your additional data here
        ];
        return response()->json($response);
    }
}
