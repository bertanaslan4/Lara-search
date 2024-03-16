<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Film;
class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function category($id)
    {
        $films = Film::where('category_id', $id)->get();
        return view('pages.category', compact('films'));
    }
}
