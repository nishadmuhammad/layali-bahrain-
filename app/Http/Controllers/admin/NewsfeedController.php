<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\News_feed;
use Illuminate\Http\Request;


class NewsfeedController extends Controller
{

    // all new for new index
    public function all()
    {
      $newses =News_feed::orderBy('created_at','desc')
      ->get();

      return view('admin.news.index',['newses'=>$newses]);

    }

    // news feed for dashboard
    public function index()
    {

      $newses =News_feed::where('status','active')
      ->whereDate('starting_date','<=',now())
      ->whereDate('end_date','>=',now())
      ->orderBy('created_at','desc')
      ->get();

      return view('admin.dashboard',['newses' => $newses]);

    }

    public function create()
    {

      return view('admin.news.create');

    }


    public function store(Request $request)
    {

        $request->validate([
            'news' => 'required',
            'proirity' => 'required',
            'starting_date' => 'required',
            'end_date' => 'required',
        ]);
        $data = $request->all();
        $data['status'] = 'active';

        News_feed::create($data);

        return redirect(route('news.all'))->with('success','News added successfully!');;

    }
}
