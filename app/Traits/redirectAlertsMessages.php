<?php

namespace App\Traits;

use Illuminate\Support\Arr;


trait redirectAlertsMessages
{
  /**
   * Method to transform input name in a route name
   * @param array with route name and parameters
   * @return route name with parameters 
   */
  protected static function findRoute(array $path = null)
  {
    if($path){
      $route = Arr::get($path, 'route');
      $param = Arr::get($path, 'param');
      return route($route, $param);
    }
  }
  /**
   * method to redirect to a error message
   * @param string|array 
   */
  public function redirectErrors(
    $error, 
    string $btnOk = null,
    array $okRoute = null,
    string $btnCancel = null, 
    array $cancelRoute = null
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

    /**
   * method to redirect to a success message
   * @param string|array 
   */
  public function redirectSuccess(
    $success, 
    string $btnOk = null,
    array $okRoute = null,
    string $btnCancel = null, 
    array $cancelRoute = null
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
