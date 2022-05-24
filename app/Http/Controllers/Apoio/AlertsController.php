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
        return view('apoio.alerts.errors');
     }
}
