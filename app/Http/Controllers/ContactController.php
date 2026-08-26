<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20|regex:/^[\+0-9]+$/',
            'subject' => 'required|string|min:3|max:255',
            'message' => 'required|string|min:10|max:5000',
        ], [
            'name.required' => 'Name is required',
            'name.min' => 'Name must be at least 2 characters',
            'name.max' => 'Name must not exceed 255 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Please provide a valid email address',
            'email.max' => 'Email must not exceed 255 characters',
            'phone.required' => 'Phone number is required',
            'phone.max' => 'Phone must not exceed 20 characters',
            'phone.regex' => 'Phone number can only contain numbers and +',
            'subject.required' => 'Subject is required',
            'subject.min' => 'Subject must be at least 3 characters',
            'subject.max' => 'Subject must not exceed 255 characters',
            'message.required' => 'Message is required',
            'message.min' => 'Message must be at least 10 characters',
            'message.max' => 'Message must not exceed 5000 characters',
        ]);

        if ($validator->fails()) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors(),
                ], 422);
            }

            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please fix the errors below.');
        }

        ContactMessage::create($validator->validated());

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully. We will get back to you within 24 hours.',
            ]);
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully. We will get back to you within 24 hours.');
    }
}
