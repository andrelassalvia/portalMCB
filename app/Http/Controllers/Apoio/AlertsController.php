<?php

namespace App\Http\Controllers\Apoio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlertsController extends Controller
{
    /** 
     * Function to redirect for a view in case of error
     * This view exists to show an error message 
     * **/
     public function errorMessage()
     {
        $btnOk = session()->get('btnok');
        $okRoute = session()->get('okroute');
        $btnCancel = session()->get('btncancel');
        $cancelRoute = session()->get('cancelroute');
        return view(
           'apoio.alerts.errors',
           compact('btnOk', 'okRoute', 'btnCancel', 'cancelRoute')
         );
     }

     /** 
     * Function to redirect for a view in case of success
     * This view exists to show a success message 
     * **/
     public function successMessage()
     {
         $success = session()->get('success');
         $btnOk = session()->get('btnok');
         $okRoute = session()->get('okroute');
         $btnCancel = session()->get('btncancel');
         $cancelRoute = session()->get('cancelroute');

        return view(
           'apoio.alerts.success',
           compact('success', 'btnOk', 'okRoute', 'btnCancel', 'cancelRoute')
         );
     }
}
