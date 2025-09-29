<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TarefaController extends Controller
{

    public function index(Request $request)
    {
        $query = Tarefa::where('user_id', Auth::id());

        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        $tarefas = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('tarefas.index', compact('tarefas'));
    }


    public function create()
    {
        return view('tarefas.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'data_vencimento' => 'nullable|date|after_or_equal:today',
        ]);

        Tarefa::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'data_vencimento' => $request->data_vencimento,
            'status' => 'pendente',
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('tarefas.index')
            ->with('success', 'Tarefa criada com sucesso!');
    }


    public function show(Tarefa $tarefa)
    {
        if ($tarefa->user_id !== Auth::id()) {
            abort(403);
        }

        return view('tarefas.show', compact('tarefa'));
    }


    public function edit(Tarefa $tarefa)
    {
        if ($tarefa->user_id !== Auth::id()) {
            abort(403);
        }

        return view('tarefas.edit', compact('tarefa'));
    }


    public function update(Request $request, Tarefa $tarefa)
    {
        if ($tarefa->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'data_vencimento' => 'nullable|date|after_or_equal:today',
        ]);

        $tarefa->update([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'data_vencimento' => $request->data_vencimento,
        ]);

        return redirect()->route('tarefas.index')
            ->with('success', 'Tarefa atualizada com sucesso!');
    }


    public function destroy(Tarefa $tarefa)
    {
        if ($tarefa->user_id !== Auth::id()) {
            abort(403);
        }

        $tarefa->delete();

        return redirect()->route('tarefas.index')
            ->with('success', 'Tarefa excluída com sucesso!');
    }


    public function toggleStatus(Tarefa $tarefa)
    {
        if ($tarefa->user_id !== Auth::id()) {
            abort(403);
        }

        $tarefa->update([
            'status' => $tarefa->status === 'pendente' ? 'concluida' : 'pendente'
        ]);

        $message = $tarefa->status === 'concluida' ? 'Tarefa marcada como concluída!' : 'Tarefa marcada como pendente!';

        return redirect()->route('tarefas.index')
            ->with('success', $message);
    }
}
