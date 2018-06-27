<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersFavoriteController extends Controller
{
    public function store(Request $request, $id)
    {
        // var_dump($id);
        // exit;
        \Auth::user()->favorite($id);
        return redirect()->back();
    }
    
    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        return redirect()->back();
    }
}
