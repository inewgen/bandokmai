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
        $params  = [ 'user_id' => 1 ];
        $results = requestClient('GET', 'navigations', $params);
        $menus   = array_get($results, 'data.record', []);

        // Banners
        $results = requestClient('GET', 'banners', $params);
        $banners = array_get($results, 'data.record', []);
// alert($banners,1);
        // Slider
        $result = Slider::where('status', 1)
               ->orderBy('order', 'asc')
               ->take(20)
               ->get();
        $sliders = json_decode($result, true);

        $view = [
            'menus'   => $menus,
            'banners' => $banners,
            'sliders' => $sliders,
        ];

        return view('front.home.index', $view);
    }
}
