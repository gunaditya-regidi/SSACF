<?php

namespace App\Http\Controllers;

use App\Models\FormSubmission;
use Illuminate\Http\Request;

class FormSubmissionController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'form_type' => 'required|string|max:255',
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        FormSubmission::create([
            'form_type' => $validatedData['form_type'],
            'data' => $validatedData
        ]);

        return back()->with('success', 'Thank you for your submission!');
    }
}