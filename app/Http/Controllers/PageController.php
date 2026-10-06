<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function heroVideo()
    {
        $path = storage_path('media/video/herovideo.mp4');

        abort_unless(is_file($path), 404);

        return response()->file($path, [
            'Content-Type' => 'video/mp4',
            'Content-Disposition' => 'inline',
        ]);
    }

    /**
     * Stream the ambient train sound used by the weekly-test section.
     * Served through a controller route (no static path, no download UI)
     * so the file cannot be fetched by casually browsing the site.
     */
    public function trainSound()
    {
        $path = storage_path('media/audio/train-sound.mp3');

        abort_unless(is_file($path), 404);

        return response()->file($path, [
            'Content-Type' => 'audio/mpeg',
            'Content-Disposition' => 'inline',
        ]);
    }

    public function mediaImage(string $image)
    {
        $images = [
            'section1' => 'section1.jpeg',
            'section2' => 'section2.jpeg',
        ];

        abort_unless(isset($images[$image]), 404);

        $path = storage_path('media/images/'.$images[$image]);

        abort_unless(is_file($path), 404);

        return response()->file($path, [
            'Content-Type' => 'image/jpeg',
            'Content-Disposition' => 'inline',
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function domains()
    {
        return view('domains');
    }

    public function services()
    {
        return view('services');
    }

    public function careers()
    {
        return view('careers');
    }

    public function creators()
    {
        return view('creators');
    }

    public function contact()
    {
        return view('contact');
    }

    public function terms()
    {
        return view('terms');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function returns()
    {
        return view('returns');
    }

    /**
     * Handle the contact form.
     * No SMTP is configured in this environment, so the enquiry is
     * validated, logged, and answered with a friendly flash message.
     */
    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name'     => ['required', 'string', 'max:120'],
            'email'    => ['required', 'email', 'max:160'],
            'org'      => ['nullable', 'string', 'max:160'],
            'phone'    => ['nullable', 'string', 'max:30'],
            'interest' => ['required', 'in:institution,educator,competition,publisher,other'],
            'message'  => ['required', 'string', 'min:10', 'max:3000'],
        ]);

        logger('[AvianEdu contact] '.json_encode($validated));

        return redirect()
            ->route('contact')
            ->with('success', "Thanks, {$validated['name']}! Your message is with our team — we usually reply within one working day.");
    }
}
