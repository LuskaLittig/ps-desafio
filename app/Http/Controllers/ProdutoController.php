<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();
        return view('produto.index', compact('produtos'));
    }


    public function create()
    {

        $categorias = Categoria::all();

        return view('produto.crud', compact('categorias'));

    }


    public function store(Request $request)
    {
        $rules =[
            'brand' => 'required|string|max:50',
            'expiration_date' => 'required|string|max:10',
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:50',
            'categoria_id' => 'required',
            
        ];
        $data = $request->validate($rules);

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('produtos', 'public');
        }
        Produto::create($data);
        return redirect()->route('produto.index')->with('success','Produto cadastrado com sucesso!');

    }


    public function show($id)
    {
        $produto = Produto::find($id);

        return response()->json($produto);
    }


    public function edit($id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::all();

        return view('produto.crud', compact('produto', 'categorias'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|string|max:100', 
            'expiration_date'=> 'required|string|max:8',
            'description' => 'required|string|max:100',
            'brand' => 'required|string|max:50',
            'categoria_id' => 'required',
        ];
        
        $data = $request->validate($rules);
        
        $produto = Produto::find($id);
        
        if($request->hasFile('image')){
            Storage::delete('public/' . $produto->image); 
            $data['image'] = $request->file('image')->store('produtos', 'public');
        }

        $produto->update($data);

        return redirect()->route('produto.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        if($produto->image)
            Storage::delete('public/'. $produto->imagem); 
        $produto->delete();
        
        return redirect()->route('produto.index')->with('success', 'Produto excluído com sucesso');
    }
}
