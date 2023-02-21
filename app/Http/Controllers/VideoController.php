<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'videos' => Video::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new Video;
        $video->title = $request->title;
        $video->description = $request->description;
        $video->url = $request->url;

        $video->save();

        return view('admin.videos.index');

        // return response()->json([
        //     'message' => 'Video added',
        //     'status' => 'Success',
        //     'data' => $video
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        return response()->json(['videos' => $video]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Video::find($id);
        $video->title = $request->title;
        $video->description = $request->description;
        $video->url = $request->url;

        $video->save();

        return view('admin.videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();
        return view('admin.videos.index');
    }
    //extra code
    //for video route
    public function videos()
    {
        return view('admin.videos.index');
    }
    //for add video route
    public function add()
    {
        return view('admin.videos.add_videos');
    }
    //for edit video route
    public function edit($id)
    {
        $videos = Video::find($id);
        return view('admin.videos.edit_videos', compact('videos'));
    }
}
