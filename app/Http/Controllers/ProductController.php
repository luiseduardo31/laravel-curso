<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    private $product;
    public $msg;

    public function __construct(Product $product)
    {
        //$this->middleware('auth')->only('create');
        $this->product = $product;
        
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index(Product $product)
    {
    
        $produtos =  $this->product->all();
        return view('admin.pages.produtos.index',compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.produtos.create');
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
        $insert = $this->product->insert($dataForm); 
        // pode-se usar create e usar fillable no model pra escolher os campos

        if($insert)
        {
            return redirect()->route('produtos.index')->with('success', 'Item cadastrado com sucesso');
        }
        else
        {
            return 'Erro ao cadastrar...';
        }

        //dd($request->all()); Todos os Campos
        //dd($request->only(['nome','descricao'])); Campos especificos
        //dd($request->nome); Somente 1 campo
      /**
       *if($request->file('foto')->isValid())
             dd($request->file('foto')->store('produtos/teste'));
        */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $product = $this->product->find($id);
       return view('admin.pages.produtos.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->product->find($id);
        return view('admin.pages.produtos.edit',compact('product'));
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
        $dataForm = $request->all();
        $product  = $this->product->find($id);
        $update   = $product->update($dataForm);

        if($update)
            return redirect()->route('produtos.index')->with('success', "{$product->nome} atualizado com sucesso");
        else
            return redirect()->route('produtos.edit',  $id);
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->product->find($id);
        $delete = $product->delete();

        if ($delete)
        {
            $msg = 'Excluido!';
            return redirect()->route('produtos.index')->with('success', "{$product->nome} Excluido com sucesso");
        }
        else
            return redirect()->route('produtos.show', $id);

    }
}
