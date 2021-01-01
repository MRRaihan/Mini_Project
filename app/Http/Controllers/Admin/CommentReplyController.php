<?php

namespace App\Http\Controllers\Admin;

use App\CommentReply;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentReplyController extends Controller
{
    public function index()
    {
        $data['commentsreply'] = CommentReply::orderBy('created_at', 'DESC')->get();
        $data['serial']=1;
        return view('admin.commentreply.index',$data);
    }

    public function destroy($id)
    {
        CommentReply::findOrFail($id)->delete();
        session()->flash('success','CommentReply Successfully Deleted');
        return redirect()->back();
    }
}
