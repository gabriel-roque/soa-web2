<?php

namespace App\Http\Controllers\Aluno;

use App\Aluno\Aluno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return response(Aluno::all(), 200);
    }

    public function store(Request $request)
    {
        $aluno = Aluno::store($request);
        return response($aluno, 201);
    }

    public function show($id)
    {
        try {
            return response(Aluno::findOrFail($id), 200);
        } catch (\Exception $e) {
            return response('Not Found', 404);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $aluno = Aluno::patch($request, $id);
            return response($aluno, 200);
        } catch (\Exception $e) {
            return response('Not Found', 404);
        }
    }

    public function destroy($id)
    {
        try {
            Aluno::remove($id);
            return response('Success Removed',200);
        } catch (\Exception $e) {
            return response('Not Found', 404);
        }
    }
}
