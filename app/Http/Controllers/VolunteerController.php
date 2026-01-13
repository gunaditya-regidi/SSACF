<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class VolunteerController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'area_of_interest' => 'required|string',
            'skills_availability' => 'required|string',
        ]);

        Volunteer::create($validatedData);

        return redirect()->route('support-us')->with('volunteer_success', 'Thanks for your interest in becoming a volunteer, we will get back to you in 2 working days.');
    }
}
