<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\items;
class todo extends Controller
{
    public function savetodo(Request $request)
    {

        $content = new items();
        $content->whattodo = $request->input('todo');
        $content->userId = $request->input('id');                       //inserting into database
        $content->save();
        return back();
    }
}
