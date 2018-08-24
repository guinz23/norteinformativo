<?php
 namespace App\Http\Controllers;
use App\videos;
use Illuminate\Http\Request;
use App\Http\Requests;
 class VideosController extends Controller{

    public function index(){

      $videos=videos::all()->toArray();

      return view('movie.index',compact('videos'));
    }
  public function create(){
      return view('movie.create');
  }
  
  public function store(Request $request)
  {
      $video = $this->validate(request(), [
        'descripcion' => 'required',
        'url' => 'required'
      ]);
      videos::create($video);
      return back()->with('success', 'Video has been added');
  }
  public function destroy($id)
  {
      $video = Videos::find($id);
      $video->delete();
      return redirect('/')->with('success', 'video has been  deleted');
  }

 }