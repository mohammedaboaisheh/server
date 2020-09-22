<?php

namespace App\Http\Controllers;

use App\Magazine;
use App\Magazine_post;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    //
    public function show() {
        $magazine=Magazine::all();
        $m1=Magazine_post::all()->random(3);
        return view('Magazine')->with('magazine',$magazine)->with('m1',$m1);
    }

    public function showissue($id) {
        $issue=Magazine_post::where('version_id',$id)->get();
        return view('issue')->with('issue',$issue);
    }
}
