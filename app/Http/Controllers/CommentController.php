<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function saveComment(Request $request){
        $comment = new Comment();
        $comment->comentator_name = $request->comentator_name;
        $comment->comentator_email = $request->comentator_email;
        $comment->comentator_comment = $request->comentator_comment;
        $comment->save();

        return redirect('/successfully');
    }
    public function manageCommentInfo(){
        $comments = Comment::orderBy('id' , 'desc') -> get();
        return view('admin.comment.manage-comment',['comments'=> $comments]);
    }
    public function deleteComment($id){
        $commentInfoById = Comment::find($id);
        $commentInfoById->delete();

        return redirect('/comment/manage-comment')->with('message', 'Comment info deleted successfully !!!');
    }
    public function commentSaved(){
        return view('admin.comment.successfully');

    }
}
