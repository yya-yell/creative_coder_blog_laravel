<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberMail;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function create(Blog $blog)
    {
        request()->validate([
            'body' => ['required']
        ]);
        $blog->comments()->create([
            'user_id' => auth()->user()->id,
            'body' => request('body')
        ]);
        $subscribers = $blog->subscriber->filter(fn ($v) => auth()->id() !== $v->id);
        $subscribers->each(function($sub) use($blog){
            Mail::to($sub->email)->queue(new SubscriberMail($blog));
        });
        return redirect("/blog/$blog->slug");
    }
}
