<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\BlogIndexData;
use App\Http\Requests;
use App\Tag;

use App\Http\Requests\ContactMeRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Show the form
     *
     * @return View
     */
    public function showForm(Request $request)
    {
        $tag = $request->get('tag');
        $data = $this->dispatch(new BlogIndexData(null));
        $posts = $data["posts"];
        $tags = Tag::all();

        return view('blog.contact', compact('posts', 'tags', 'tag'));
    }

    /**
     * Email the contact request
     *
     * @param ContactMeRequest $request
     * @return Redirect
     */
    public function sendContactInfo(ContactMeRequest $request)
    {
        $data = $request->only('name', 'email', 'phone');
        $data['messageLines'] = explode("\n", $request->get('message'));

        Mail::queue('emails.contact', $data, function ($message) use ($data) {
            $message->subject('Blog Contact Form: ' . $data['name'])
                ->to(config('blog.contact_email'))
                ->replyTo($data['email']);
        });

        return back()
            ->withSuccess("Obrigado por sua mensagem. Ela já fo enviada..");
    }
}