<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchController extends Model
{
//    use HasFactory;
    public function __invoke()
    {
        $video = Video::query()
            ->with(['user','comments'])
            ->where('title', 'LIKE', '%'.request('q').'%')
            ->simplePaginate(30);

        return view('video.results' , ['videos' => $video]);
    }
}
