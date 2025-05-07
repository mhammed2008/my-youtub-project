<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        Comments::create([
            'comment' => $request->comment,
            'video_id' => $request->video,
            'user_id' => auth()->id()
        ]);
        return redirect()->back();
    }
}
