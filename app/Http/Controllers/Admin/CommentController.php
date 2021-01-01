<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $data['comments'] = Comment::orderBy('created_at', 'DESC')->get();
        $data['serial']=1;
        return view('admin.comment.index',$data);
    }

    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        session()->flash('success','Comment Successfully Deleted');
        return redirect()->back();
    }
}
