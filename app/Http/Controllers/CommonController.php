<?php

namespace App\Http\Controllers;

use SEO;

class CommonController extends Controller
{
    /**
     * Display home page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home() {
        SEO::setTitle(trans('meta.home.title'))->setDescription(trans('meta.home.description'));

        return view('common.home');
    }
}
