<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteListsController extends Controller
{
    /**
     * Listing potential clients
     */
    public function potentialClients(Request $request)
    {
        $sortBy = 'nome'; // Column to sort by
        $orderBy = 'desc'; // ascending or descending
        $perPage = 10;
        $q = null; // Search query

        if($request->has('orderBy')) $orderBy = $request->query('orderBy');
        if($request->has('sortBy')) $sortBy = $request->query('sortBy');
        if($request->has('perPage')) $perPage = $request->query('perPage');
        if($request->has('q')) $q = $request->query('q');

        $clientes = Cliente::with('ordens')
            ->where('statuscliente_id', 1)
            ->search($q)
            ->orderBy($sortBy, $orderBy)
            ->paginate($perPage);
        // $clientes = Cliente::with('ordens')
        //     ->where('statuscliente_id', 1)
        //     ->paginate(100);


        return view(
            'admin.cliente.potential', 
            compact('clientes', 'orderBy', 'sortBy', 'q', 'perPage')
        );
        // return view(
        //     'admin.cliente.potential', 
        //     ['clientes' => Cliente::IndexStatus([1])]
        // );
    }

    /**
     * Listing clients with orders running
     */
    public function withOrdersClients()
    {
        return view(
            'admin.cliente.withOrders',
            ['clientes' => Cliente::IndexStatus([3])]
        );
    }

    /**
     * Listing inactive clients
     */
    public function inactivesClients()
    {
        return view(
            'admin.cliente.inactives',
            ['clientes' => Cliente::IndexStatus([2])]
        );
    }
}
