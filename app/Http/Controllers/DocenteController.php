<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Docente;

class DocenteController extends Controller
{
    public function index(){
        return view('dashboard.docente.index');
    }

    public function create(){
        return view('dashboard.docente.create');
    }

    public function store(Request $request){
        $docente = new Docente;
        $docente->iniciais = $request->iniciais;
        $docente->designac = $request->docente;
        $docente->data = $request->data;
        $docente->gender = $request->gender;
            
        //Upload de Imagem de Docente
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
  
            $extension = $requestImage -> extension();
  
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
  
            $request->image->move(public_path('img/events'), $imageName);
  
            $docente->image = $imageName;
        }

       

        $docente -> save();
        
        return redirect(route('docente.index'))->with('docente.create', "Docente adicionado com sucesso:" . $request->docente);
    }

    public function show(Docente $docente){
        return view('dashboard.docente.view')->with(compact('docente'));
    }

    public function edit(Docente $docente){
        return view('dashboard.docente.edit')->with(compact('docente'));
    }

    public function update(Request $request,Docente $docente){
        $docente = $request->all();

        return dd($request->all());

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage -> extension();

            $imageName =  md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/events'), $imageName);

            $data['image'] = $imageName;
        }
        return redirect(route('docente.index'));

        Docente::findOrFail($request->id)->update($data);


        return view('dashboard.docente.index');

        return redirect('/docente')->with('docente.update', "Docente actualizado com Sucesso:" . $request->docente);
    }

    public function destroy(Docente $docente){
        $nome = $docente->designac;
        $docente->delete();
        return redirect(route('docente.index'))->with('docente.delete', "Docente eliminado com Sucesso:" . $nome);
    }

        
}
