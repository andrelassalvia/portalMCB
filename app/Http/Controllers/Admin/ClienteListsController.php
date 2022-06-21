<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Cliente;

class ClienteListsController extends Controller
{
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }
    /**
     * Listing potential clients
     */
    public function potentialClients(Request $request)
    {
        Session::put('clientPotentialList', request()->fullUrl());
        $sortBy = 'created_at'; // Column to sort by
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

        return view(
            'admin.cliente.potential', 
            compact('clientes', 'orderBy', 'sortBy', 'q', 'perPage')
        );
    }

    /**
     * Listing clients with orders running
     */
    public function withOrdersClients(Request $request)
    {
        Session::put('clientWithOrdersList', request()->fullUrl());
        $sortBy = 'created_at'; // Column to sort by
        $orderBy = 'desc'; // ascending or descending
        $perPage = 10;
        $q = null; // Search query

        if($request->has('orderBy')) $orderBy = $request->query('orderBy');
        if($request->has('sortBy')) $sortBy = $request->query('sortBy');
        if($request->has('perPage')) $perPage = $request->query('perPage');
        if($request->has('q')) $q = $request->query('q');

        $clientes = Cliente::with('ordens')
            ->where('statuscliente_id', 3)
            ->search($q)
            ->orderBy($sortBy, $orderBy)
            ->paginate($perPage);

        return view(
            'admin.cliente.withOrders', 
            compact('clientes', 'orderBy', 'sortBy', 'q', 'perPage')
        );
    }

    /**
     * Listing inactive clients
     */
    public function inactivesClients(Request $request)
    {
        Session::put('clientInactiveList', request()->fullUrl());
        $sortBy = 'created_at'; // Column to sort by
        $orderBy = 'desc'; // ascending or descending
        $perPage = 10;
        $q = null; // Search query

        if($request->has('orderBy')) $orderBy = $request->query('orderBy');
        if($request->has('sortBy')) $sortBy = $request->query('sortBy');
        if($request->has('perPage')) $perPage = $request->query('perPage');
        if($request->has('q')) $q = $request->query('q');

        $clientes = Cliente::with('ordens')
            ->where('statuscliente_id', 2)
            ->search($q)
            ->orderBy($sortBy, $orderBy)
            ->paginate($perPage);

        return view(
            'admin.cliente.inactives', 
            compact('clientes', 'orderBy', 'sortBy', 'q', 'perPage')
        );
    }
}
