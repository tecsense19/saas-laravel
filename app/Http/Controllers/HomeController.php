<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function showCustomerForm(Request $request, $planId): View
    {
        $input = $request->all();

        return view('front.customer.index', compact('planId'));
    }

    public function storeCustomer(Request $request)
    {
        $input = $request->all();
        session(['step1' => $input]);
        return redirect()->route('payment')->with('customer', $input);
    }

    public function payment(Request $request)
    {
        $input = $request->all();

        return view('front.customer.payment');
    }

    public function makePaymentRequest(Request $request)
    {
        $input = $request->all();
        echo "<pre>"; 
        print_r($input); 
        echo "<br>";
        print_r(session('step1'));
        die();

        $request->session()->forget(['step1']);
    }
}