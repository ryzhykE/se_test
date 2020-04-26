<?php

namespace App\Http\Controllers;

use App\Bid;

/**
 * Class BidsController
 * @package App\Http\Controllers
 */
class BidsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $result = Bid::wherePrice(Bid::max('price'))->firstOrFail();

        return view('bids', compact('result'));
    }
}
