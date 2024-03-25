<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Portfolio;

class HamidController extends Controller
{
    public function home(){
        $educations = Education::all();
        $experiences = Experience::all();
        $portfolios = Portfolio::all();

        return view('hamid.home' , compact('educations', 'experiences','portfolios'));
    }
}
