<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;

class ClienteListsController extends Controller
{
    /**
     * Listing potential clients
     */
    public function potentialClients()
    {
        return view(
            'admin.cliente.potential', 
            ['clientes' => Cliente::IndexStatus([1])]
        );
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
