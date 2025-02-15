<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showCorrectHomepage() {
       
        return view('homepage', ['title' => 'Sadorect Systems']);
       
    }

    public function homepage(Request $request) {
        
        return view('homepage', ['title' => 'Sadorect Systems']);
    }

    public function about() {
        return view('about');
    }

    public function service() {
        return view('service');
    }

    public function contact() {
        return view('contact');
    }

    public function portfolio()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('portfolio', compact('portfolios'));
    }
    public function pages() {
        return view('pages');
    }

    public function blogGrid() {
        return view('blog-grid');
    }

    public function blogDetail() {
        return view('blog-detail');
    }

    public function team() {
        return view('team');
    }

    public function quote() {
        return view('quote');
    }

    public function testimonial() {
        return view('testimonial');
    }


    public function feature() {
        return view('feature');
    }


}
