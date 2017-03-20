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
        $result = Menu::where('status', 1)
               ->orderBy('order', 'asc')
               ->take(20)
               ->get();
        $menus = json_decode($result, true);

        // Slider
        $result = Slider::where('status', 1)
               ->orderBy('order', 'asc')
               ->take(20)
               ->get();
        $sliders = json_decode($result, true);

        $view = [
            'menus'   => $menus,
            'sliders' => $sliders,
        ];

        return view('front.home.index', $view);
    }
}
