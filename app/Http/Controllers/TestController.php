<?php

namespace App\Http\Controllers;

use App\Test;

class TestController extends Controller
{
  public function index()
  {
    $data = 'syoooooooooring';

    return view('test', ['data' => $data]);
  }
}