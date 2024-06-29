<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\LoginRecord;
use App\Models\Plan;
use App\Models\PlanOption;
use App\Services\ImageUploadService;

class PricingController extends Controller
{
    protected $imageUploadService;

    public function __construct(ImageUploadService $imageUploadService)
    {
        $this->imageUploadService = $imageUploadService;
    }

    /**
     * Display the user's profile form.
     */
    public function pricing(Request $request): View
    {
        $getAllPlan = Plan::where('plan_status', '1')->with('getPlanOptions')->get();
        return view('master.pricing.index', compact('getAllPlan'));
    }

    public function createPricing(Request $request)
    {
        return view('master.pricing.addedit');
    }

    public function pricingStore(Request $request)
    {
        $input = $request->all();
        
        $lastPlan = Plan::updateOrCreate(
            ['id' => $request->plan_id],
            [
                'plan_title' => $input['plan_title'],
                'plan_description' => $input['plan_description'],
                'plan_currency' => $input['plan_currency'],
                'plan_month_price' => $input['plan_month_price'],
                'plan_year_price' => $input['plan_year_price'],
                'plan_month_text' => $input['plan_month_text'],
                'plan_year_text' => $input['plan_year_text'],
                'plan_status' => $input['plan_status'],
                'button_string' => $input['button_string']
            ]
        );

        foreach ($input['kt_docs_repeater_advanced'] as $key => $option) {
            PlanOption::updateOrCreate(
                ['id' => $option['option_id'] ?? ''], // Use the null coalescing operator for readability
                [
                    'plan_id' => $lastPlan->id,
                    'option' => $option['option'],
                    'status' => isset($option['status']) ? 1 : 0
                ]
            );
        }

        $message = $lastPlan->wasRecentlyCreated ? 'Pricing plan added successfully.' : 'Pricing plan updated successfully';
        
        return redirect()->route('pricing')->with('success', $message);
    }

    public function pricingEdit(Request $request, $planId)
    {
        $id = decrypt($planId);
        $getPlan = Plan::with('getPlanOptions')->findOrFail($id);
        return view('master.pricing.addedit', compact('getPlan'));
    }

    public function pricingDelete(Request $request)
    {
        try {
            $id = decrypt($request->plan_id);
            $plan = Plan::findOrFail($id);
            $plan->forceDelete();
            $response = [
                'status' => true,
                'message' => 'Plan deleted successfully.', // Add your additional data here
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Failed to delete plan.', // Add your additional data here
            ];
            return response()->json($response);
        }
    }
}