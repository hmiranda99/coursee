<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Curso::simplePaginate(6);
        return view('admin.cursos.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salvar(Request $request)
    {
        $data = $request->all();

        if(isset($data['published'])){
            $data['published'] = 'yes';
        } else{
            $data['published'] = 'no';
        }

        if($request->hasFile('image')){
            $uploadImage = $request->file('image');
            $number = rand(1111, 9999);
            $path = "img/cursos";
            $extensionImage = $uploadImage->guessClientExtension(); 
            $nameImage = "imagem_" . $number . "." . $extensionImage;
            $uploadImage->move($path, $nameImage);
            $data['image'] = $path . "/" . $nameImage;
        }

        Curso::create($data);

        return redirect()->route('admin.cursos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $register = Curso::find($id);

        return view('admin.cursos.editar', compact('register'));
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function atualizar(Request $request, $id)
    {
        $data = $request->all();
        
        if(isset($data['published'])){
            $data['published'] = 'yes';
        } else{
            $data['published'] = 'no';
        }
        
        if($request->hasFile('image')){
            $uploadImage = $request->file('image');
            $number = rand(1111, 9999);
            $path = "img/cursos";
            $extensionImage = $uploadImage->guessClientExtension(); 
            $nameImage = "imagem_" . $number . "." . $extensionImage;
            $uploadImage->move($path, $nameImage);
            $data['image'] = $path . "/" . $nameImage;
        }
        
        Curso::find($id)->update($data);
        
        return redirect()->route('admin.cursos');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletar($id)
    {
        Curso::find($id)->delete();
        return redirect()->route('admin.cursos');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
