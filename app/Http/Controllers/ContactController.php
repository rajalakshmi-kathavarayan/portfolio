<?php

namespace App\Http\Controllers;
use App\Mail\ContactUs;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function show()
    {
        return view('index');
    }

    public function send()
    {
        set_time_limit(120);
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',

        ]);
        Mail::to('trajalakshmi272002@gmail.com')->send(new ContactUs($data));
        // dd('sent');
        return redirect()->back()->with('success','Message sent successfully');
    }

    public function downloadCV()
    {
        $filePath = 'resume/rajalakshmi_k_resume.pdf';

        if (Storage::exists($filePath)) {
            $fileContents = Storage::get($filePath);
            $headers = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="rajalakshmi_k_resume.pdf"'
            ];

            return response($fileContents, 200, $headers);
        } else {
            abort(404);
        }
    }

}
