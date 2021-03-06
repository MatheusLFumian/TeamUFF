<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Image;
use App\Models\Part;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parts = Part::all();

        return response()->json([
            'success' => true,
            'data' => $parts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'empresa' => 'required',
            'cnpj' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'descricao' => 'required',
            'peso' => 'required',
            'tipo' => 'required',
            'imagem' => 'required',
        ]);

        $company = new Company();
        $part = new Part();
        $seller = new Seller();
        $image = new Image();


        $company->nome = $request->empresa;
        $company->cnpj = $request->cnpj;
        $company->cidade = $request->cidade;
        $company->estado = $request->estado;

        $seller->nome = $request->nome;
        $seller->telefone = $request->telefone;
        $seller->email = $request->email;

        $part->descricao = $request->descricao;
        $part->tipo = $request->tipo;
        $part->peso = $request->peso;

        $image->imagem = $request->imagem;

        if (Auth::user()) {
            $company()->save();
            $seller()->save();
            $part()->save();
            $image()->save();
            return response()->json([
                'success' => true,
                'data' => $part
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Faild to add a part...'
            ]);
        }
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
}
