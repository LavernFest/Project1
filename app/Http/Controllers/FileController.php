<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload(Request $request){
        $archivo = $request->file('archivo');
        $path = Storage::put('imagenes',$archivo);
        dd($request);
    }

    public function download(Request $request){
        return Storage::download($request->path);
    }
}
