<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request,$service)
    {
        $this->validate($request,[
            'comment' => 'required'
        ]);

        $comment = new Comment();
        $comment->service_id = $service;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();
        session()->flash('success', 'Negotiation Price Discuess');
        return redirect()->back();
    }
}
