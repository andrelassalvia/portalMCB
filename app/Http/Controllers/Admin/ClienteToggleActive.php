<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Traits\redirectAlertsMessages;


class ClienteToggleActive extends Controller
{
    use redirectAlertsMessages;
    /**
    * method to turn client status as inactive
    * @param id
    * @return message with a success or error response
    */
    public function inactive($id)
    {
        $cliente = Cliente::find($id);
        $update = $cliente->update(['statuscliente_id' => 2]);
        if($update){
            return redirectAlertsMessages::redirectSuccess(
                ['success' => 'Cliente inativado com sucesso'],
                'Ok',
                ['route' => 'clients.potential']
                
            );
        } else {
            return redirectAlertsMessages::redirectErrors(
                ['errors' => 'Falha na inativação do cliente'],
                'Ok'
            );
        }
    }

    /**
     * Method to turn client status as active
     * @param id
     * @return
     */
    public function active($id)
    {
        $cliente = Cliente::find($id);
        $update = $cliente->update(['statuscliente_id' => 1]);
        if($update){
            return redirectAlertsMessages::redirectSuccess(
                ['success' => 'Cliente reativado com sucesso'],
                'Ok',
                ['route' => 'clients.inactives']
            );
        } else {
            return redirectAlertsMessages::redirectErrors(
                ['errors' => 'Falha na inativação do cliente'],
                'Ok'
            );
        }
    }
}
