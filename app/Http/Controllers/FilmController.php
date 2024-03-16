<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\Session;
class FilmController extends Controller
{
    public function index(Request $request)
    {
        $films = Film::query();
        if ($request->filled('search')) {
            $films->where('name', 'like', '%' . $request->input('search') . '%')
                ->orWhereHas('category', function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->input('search') . '%');
                });
        }

        $films = $films->get();

        return view('pages.film', compact('films'));
    }
    public function delete($id)
    {
        $film = Film::find($id);
        $film->delete();
        Session::flash('success', 'Film başarıyla silindi.');
        return redirect()->route('home');
    }
}
