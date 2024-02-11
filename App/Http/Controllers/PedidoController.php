<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index(Request $request)
    {
        $pedidos = Pedido::paginate(10);

        return view('app.pedido.index', ['pedidos' => $pedidos, 'request' => $request->all()]);
    }

    public function create()
    {
        $clientes = Cliente::all();

        return view('app.pedido.create', ['clientes' => $clientes]);
    }

    public function store(Request $request)
    {
        $regras = [
            'cliente_id' => 'exists:clientes,id',
        ];

        $feedback = [
            'cliente_id.exists' => 'O cliente não existe',
        ];


        $request->validate($regras, $feedback);
        $pedido =new Pedido();
        $pedido->cliente_id = $request->get('cliente_id');
        
        $pedido->save();

        return redirect()->route('pedido.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
