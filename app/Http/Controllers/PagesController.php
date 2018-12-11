<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
      $title = 'Välkommen till min App';
      //return view('pages.index', compact('title'));
      return view('pages.index')->with('title', $title);
    }

    public function about(){
      $title = 'Om oss';
      return view('pages.about')->with('title', $title);
    }

    public function services(){
      $data = array(
        'title'=> 'Tjänster',
        'services'=> ['web design', 'Programming', 'seo']

      );
      return view('pages.services')->with($data);
    }
}
