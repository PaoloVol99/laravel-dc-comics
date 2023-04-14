<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index() {

        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic) {

        $comics = Comic::all();

        return view('comics.show', compact('comic'));
    }

    public function create() {

        return view('comics.create');
    }
}
