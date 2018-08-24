<?php
namespace App\Http\Controllers;

use App\Galeria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{

    public function index()
    {
        $imagenes = Galeria::all()->toArray();
        return view('galeria.index', compact('imagenes'));
    }
    public function create()
    {
        return view('galeria.create');
    }

    public function store(Request $request)
    {
        $src = Storage::disk('public')->put('/', $request['img']);
        print_r($src);

        Galeria::create([
            'img'          => $src,
            'descripction' => $request['descripction'],
        ]);
        return back()->with('success', 'good');
    }

    public function destroy($id)
    {
        $imagen = Galeria::find($id);
        Storage::delete($imagen);
        $imagen->delete();
        return redirect('/')->with('success', 'Image has been  deleted');
    }

}
