<?php

namespace ky\helloworld;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class helloworldController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $message = 'Hello World';
    return view('helloworld::welcome', compact('message'));
  }
}
