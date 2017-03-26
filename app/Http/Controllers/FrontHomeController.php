<?php

namespace App\Http\Controllers;

use App\Menu as Menu;
use App\Slider as Slider;
use App\Http\Controllers\Controller;

class FrontHomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        // Menu
        $params  = [ 'user_id' => 1, 'status' => 1 ];
        $results = requestClient('GET', 'navigations', $params);
        $menus   = array_get($results, 'data.record', []);

        // Banners
        $params  = [ 'user_id' => 1, 'status' => 1, 'order' => 'position', 'sort' => 'asc'];
        $results = requestClient('GET', 'banners', $params);
        $banners = array_get($results, 'data.record', []);

        $view = [
            'menus'   => $menus,
            'banners' => $banners,
        ];

        return view('front.home.index', $view);
    }
}
