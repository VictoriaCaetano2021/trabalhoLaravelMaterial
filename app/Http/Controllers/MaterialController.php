<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Material;

use Illuminate\Support\Facades\Storage;


class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::orderBy('id')->paginate(5);
        return view('menuMaterial', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materialCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $dataForm = $request->except('_token');

        //image temp path
        $dataForm['imagem'];
      
        $newName = uniqid(). $request->file('imagem')->getClientOriginalName();
        
        $request->file('imagem')->storeAs('img',$newName);

        $dataForm['imagem'] = Storage::Path($request->file('imagem')->storeAs('img',$newName));
       
        Material::create($dataForm);

        //return (Storage::Path($request->file('imagem')->storeAs('img',$newName)));
       
        return redirect()->route('material.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $material = Material::find($id);

       return view('updateMaterial', compact('material'));

      
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //
    }


    public function delete($id)
    {
        Material::destroy($id);
        return redirect()->route('material.index');
    }

    public function editar(Request $request, $id)
    {

        $material = Material::find($id);

        if($request->nome!=null)
        {
            $material->nome = $request->nome;
        }
        if($request->descricao!=null)
        {
            $material->descricao = $request->descricao;
        }
        if($request->setor!=null)
        {
            $material->setor = $request->setor;
        }
        if($request->descricao!=null)
        {
            $material->descricao = $request->descricao;
        }
        $material->save();

        return redirect()->route('material.index');
    }

}
