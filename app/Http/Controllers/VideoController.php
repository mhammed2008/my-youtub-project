<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('video.index',[
            'videos' => Video::with(['user','comments'])->latest()->simplePaginate(30),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('video.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
            'video' => 'required',
            'thumbnail' => ['required']
        ]);
        $videoPath= $request->video->store('videos');
        $imagePath = $request->thumbnail->store('thumbnail');

        auth()->user()->videos()->create([
            'title' => request()['title'],
            'video' => $videoPath,
            'thumbnail_url' => $imagePath
        ]);

        return redirect('/')->with('success' , 'Video Uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        return view('video.show' , [
            'video' => $video
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return view('video.edit',['video' => $video]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Video $video)
    {
        request()->validate([
            'title' => ['required','min:3', 'max:255'],
            'video' => [File::types(['mp4', 'ts'])],
            'thumbnail' => [File::types(['png', 'jpg', 'svg'])],
        ]);
        if (request()->file('video') && request()->file('thumbnail')){
            $video->update([
                'title' => request()->title,
                'video' => request()->video->store('videos'),
                'thumbnail_url' => request()->video->store('thumbnail'),
            ]);
            return redirect()->back();
        }

        if (request()->file('video')){
            $video->update([
                'title' => request()->title,
                'video' => request()->video->store('videos'),
            ]);
            return redirect()->back();
        }

        if (request()->file('thumbnail')){
            $video->update([
                'title' => request()->title,
                'thumbnail_url' => request()->video->store('thumbnail'),
            ]);
            return redirect()->back();
        }
        $video->update([
           'title' => request()->title
        ]);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {

        $video->delete();

        return redirect("/channel/".$video->user->channel_slug);
    }
}
