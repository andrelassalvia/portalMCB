<?php

namespace App\Traits;

use Illuminate\Support\Arr;


trait redirectAlertsMessages
{
  // check route name and transform to http://
  protected static function findRoute($path)
  {
    if($path){
      $route = Arr::get($path, 'route');
      $param = Arr::get($path, 'param');
      return route($route, $param);
    }
  }
  /**
   * method to redirect to a error message
   */
  public function redirectErrors(
    $error, 
    $btnOk = null,
    $okRoute = null,
    $btnCancel = null, 
    $cancelRoute = null
  )
  {
    // find the route from string
    $okRoute = redirectAlertsMessages::findRoute($okRoute);
    $cancelRoute = redirectAlertsMessages::findRoute($cancelRoute);
    return redirect()
        ->route('alerts.errors')
        ->withErrors($error)
        ->with(
          [
            'btnok' => $btnOk,
            'okroute' => $okRoute, 
            'btncancel' => $btnCancel,
            'cancelroute' => $cancelRoute
          ]
        )
        ->withInput();
  }

  public function redirectSuccess(
    $success, 
    $btnOk = null,
    $okRoute = null,
    $btnCancel = null, 
    $cancelRoute = null
  )
  {
    // find the route from string
    $okRoute = redirectAlertsMessages::findRoute($okRoute);
    $cancelRoute = redirectAlertsMessages::findRoute($cancelRoute);
    return redirect()
        ->route('alerts.success')
        ->with(
          [
            'success' => $success,
            'btnok' => $btnOk,
            'okroute' => $okRoute, 
            'btncancel' => $btnCancel,
            'cancelroute' => $cancelRoute
          ]
        )
        ->withInput();
  }
}
