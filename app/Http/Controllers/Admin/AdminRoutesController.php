<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AdminRoutesController extends Controller
{
    protected $pregRoutesExcept = '/^(_|team)/i';

    public function index(Request $request)
    {
        $routeName = $request->post('routeName');
        $data = collect([]);
        /**
         * @var $route \Illuminate\Routing\Route
         */
        foreach(Route::getRoutes() as $route) {
            if(!preg_match($this->pregRoutesExcept, $route->uri) ) {
                $data->push($route);
            }
        }

        if($routeName) {
            $data = $data->filter(
                function ($item) use ($routeName) {
                    return (isset($item->action['as']) && false !== stristr($item->action['as'], $routeName));
                }
            );
        }
        return view('admin.routes.index', compact('data', 'routeName'));
    }
}
