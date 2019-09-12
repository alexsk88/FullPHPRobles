<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('image.create');
    }   

    public function saveImg(Request $request)
    {
        $imagen = new Image();
        $id = \Auth::user()->id;
        $imagen_user = $request->file('imagen');
        $descripcion = $request->input('descripcion');

        $validate = $this->validate($request,[
            'descripcion'=> 'String|max:255|required',
            'imagen'=> 'required|image'
        ]);

        // Subir Imagen Al servidor
        if(is_object($imagen_user))
        {
            $newNameimg = time().$imagen_user->getClientOriginalName();
            
            \Storage::disk('images')->put($newNameimg, \File::get($imagen_user ));
        }

        $imagen->description = $descripcion;
        $imagen->user_id = $id;
        $imagen->image_path = $newNameimg;

        $imagen->save();

        return redirect()->route('home')
                    ->with(['messague'=> 'Imagen Subida Correctamente']);
    }

    public function getImage($filename)
    {
        $img =\Storage::disk('images')->get($filename);
        return new Response($img, 200);
    }

    public function detail($id)
    {
        $image = Image::find($id);

        return view('image.detail')
        ->with(['image'=> $image]);
    }
}
