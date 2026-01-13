<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'pan' => 'required|string|max:20',
            'phone' => 'required|string|max:20',
            'transaction_id' => 'required|string|max:255',
            'amount' => 'required|numeric',
        ]);

        Donation::create($validatedData);

        return redirect()->route('support-us')->with('donation_success', 'Thank you! Your donation remittance has been recorded successfully.');
    }
}
