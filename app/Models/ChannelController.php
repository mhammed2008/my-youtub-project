<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChannelController extends Model
{
    use HasFactory;
    public function index(User $channel_slug)
    {

        return view('channel.index',[
            'videos' => $channel_slug->videos()->latest()->simplePaginate(30),
            'user' => $channel_slug
        ]);
    }
}
