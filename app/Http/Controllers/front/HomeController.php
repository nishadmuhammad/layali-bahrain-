<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Resources\view;
use App\News_feed;
use App\Portfolio;
use App\Post;
use App\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'Published')->OrderBy('id', 'DESC')->limit(4)->get();
        $portfolios = Portfolio::where([['status', 'Published'], ['width', 'half']])->OrderBy('odr', 'ASC')->get();
        $testimonials = Testimonial::all();
        $newses = News_feed::orderBy('created_at', 'desc')->get();

        return view('front.home', ['posts' => $posts, 'testimonials' => $testimonials, 'portfolios' => $portfolios, 'newses'=> $newses]);
    }

    public function showPortfolios()
    {
        $portfolios = Portfolio::where('status', 'Published')->OrderBy('odr', 'ASC')->get();
        return view('front.portfolio', ['portfolios' => $portfolios]);
    }
}
