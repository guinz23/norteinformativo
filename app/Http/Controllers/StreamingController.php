<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\streaming;
class StreamingController extends Controller
{
  public function index(){
      return response()->json(streaming::all(), 200);
  }
}
