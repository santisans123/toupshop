<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
//import Model "Post
use App\Models\Post;
//return type View
use Illuminate\View\View;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('welcome', compact('items'));
    }
}
