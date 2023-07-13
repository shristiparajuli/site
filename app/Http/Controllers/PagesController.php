<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function welcome(){
        $testimonials = Testimonial::all();
        $services = Service::all();
        $teams = Team::all();
        return view ('general.index', compact('testimonials','services','teams'));
    }
    public function about(){
        return view ('general.about');
    }

    public function service(){
        return view ('general.service');
    }

    public function testimonial(){
        $testimonial = Testimonial::lastest()->get();
        return view ('general.testimonal')->withTestimonial($testimonial);
    }

    public function contact(){
        return view('general.contact');
    }

    public function team(){
        return view ('general.team');
    }


}
