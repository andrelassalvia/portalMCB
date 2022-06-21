<?php

namespace App\Http\Controllers\Admin\Fornecedor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Fornecedor;

class FornecedorToNewOrderController extends Controller
{
    /**
     * method to select a provider to a new order (we don't have an order id yet)
     */
    public function selectToNewOrder($id)
    {
        $provider = Fornecedor::find($id);
        Session::put('provider', $provider);

        return redirect()->route('ordens.create')->with(['provider','clienteId']);
    }
}
