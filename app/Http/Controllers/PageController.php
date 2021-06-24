<?php

namespace App\Http\Controllers;

use App\Travels;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index() {
    $travels = Travels::all();
    $data = [
      'travels' => $travels
    ];
    dump($data);
    return view('home', $data);
  }
}
