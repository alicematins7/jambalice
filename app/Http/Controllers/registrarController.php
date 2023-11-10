<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registrarRegistrado;
use Exception;
use Illuminate\Support\Facades\Hash;

class registrarController extends Controller
{
    public function form(Request $request){
        $usuario = Registrado::where('CPF', '=', $request ->input('cpf'))->get();

        try{
            $test = $usuario[0]->id;

            $data = array();
            $data['cpf'] = $request->input('cpf');
        }catch(Exception $e){
            $data = array();
            $data['cpf'] = $request->input('cpf');
            return view('site.registrar', compact('data'));
        }
    }
    
    public function registrarRegistrado(Request $request)
    {
        $data = new Registrado();
        $data->CPF = $request->input('CPF');
        $data->Nome = $request->input('Nome');
        $data->Endereco = $request->input('Endereco');
        $data->Telefone = $request->input('Telefone');
        $data->Email = $request->input('Email');
        $data->Senha = Hash::make($request->input('Senha'));
        $data->save();
        return redirect('/')->with('success', 'Cadastrado com sucesso');  
    }
    public function participar(Request $request)
    {
         //Atualiza dados usuário
         $data = Registrado::find($id[0]->id);
         $data->Nome = $request->input('Nome');
         $data->Endereco = $request->input('Endereco');
         $data->Telefone = $request->input('Telefone');
         $data->Email = $request->input('Email');
         $data->save();

    }
}