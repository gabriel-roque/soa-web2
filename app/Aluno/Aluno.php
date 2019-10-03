<?php

namespace App\Aluno;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'email', 'registro'];


    public static function store($request)
    {
        return Aluno::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'registro' => $request->registro
        ]);
    }

    public static function patch($request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->nome = $request->nome;
        $aluno->email = $request->email;
        $aluno->registro = $request->registro;
        $aluno->save();

        return $aluno;
    }

    public static function remove($id)
    {
        Aluno::findOrFail($id);
        $aluno = Aluno::destroy($id);
    }
}
