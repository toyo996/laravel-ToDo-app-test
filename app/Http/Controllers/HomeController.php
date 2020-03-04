<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\items;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $results = items::where('userId', '=', ((Auth()->user()->id)))
        ->where('status', '=', 0)->paginate();                                                  //showing TODO on home page  
        return view('home',['results'=>$results]);
    }

    public function done($id)
    {
        $results = items::where('id', $id)->update(array('status' => '1'));             //making finished TODO
        return back();
    }

    public function delete($id)
    {
        $results = items::where('id', $id)->delete();                       //deleting TODO
        return back();
    }

    public function finishedtodo()
    {
        $results = items::where('userId', '=', ((Auth()->user()->id)))
        ->where('status', '=', 1)->paginate();                              //showing finished TODO in FINISHED page
        return view('finishedtodo',['results'=>$results]);
    }
}
