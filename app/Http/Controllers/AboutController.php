<?php

namespace App\Http\Controllers;
use App\About;
use App\AboutImage;
use Illuminate\Http\Request;
use App\Magazine_post;
class AboutController extends Controller
{
    public function show() {
        $jobs=About::all();
        $sliders=AboutImage::all();
        return view('About-Us')->with('jobs',$jobs)->with('sliders',$sliders);
    }
    public function showhome() {
        $chair="CHAIRMAN";
        $CHAIRMAN=About::where('job',$chair)->get();
        $vice="VICE CHAIR";
        $VICECHAIR=About::where('job',$vice)->get();
        $TREAS="TREASURER";
        $TREASURER=About::where('job',$TREAS)->get();
        $m1=Magazine_post::all()->random(3);;

        return view('Home')->with('CHAIRMAN',$CHAIRMAN)->with('VICECHAIR', $VICECHAIR)->with('TREASURER', $TREASURER)->with('m1',$m1);
    }
    //
}
