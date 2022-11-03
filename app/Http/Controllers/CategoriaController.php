<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria.index', compact('categorias'));
    }


    public function create() //nessa função, ela retorna uma view que leva para um formulário pra criar os dados
    {
        return view("categoria.crud");
    }


    public function store(Request $request)
    {

        $rules = [
            'name' => 'required|string|max:100', 
            'description' => 'required|string|max:250',
        ];
        
        $data = $request->validate($rules); //vai transformar tudo em array, mas nn eh o ideal por questões de segurança
        $categoria = Categoria::create($data);
        return redirect()->route('categoria.index')->with('success', "Produto cadastrado com sucesso");
        
        //dd($data); dump and die
    }


    public function show($id){
        $categoria = Categoria::find($id);
        
        return response()->json($categoria);
        // return json_encode($categoria);
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);

        return view('categoria.crud', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|string|max:100', 
            'description' => 'required|string|max:100',
        ];
        
        $data = $request->validate($rules);
        
        $categoria = Categoria::find($id);
        
        $categoria->update($data);

        return redirect()->route('categoria.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categoria.index')->with('success', 'Categoria excluída com sucesso');
    }
}
