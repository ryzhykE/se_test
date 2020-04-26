<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Event;
use Illuminate\Support\Facades\DB;

/**
 * Class EventsController
 * @package App\Http\Controllers
 */
class EventsController extends Controller
{
    public function index()
    {
        $event = Event::select('caption')
            ->with('bids')
            ->doesntHave('bids')
            ->first();

        return view('no_orders', compact('event'));
    }

    public function moreOrder()
    {
        $event = Event::select('caption')
            ->with('bids')
            ->whereHas('bids', function ($query) {
                $query->groupBy('id_event')->havingRaw('COUNT(*) > 3');
            })
            ->first();

        return view('more_order', compact('event'));
    }

    public function mostOrder()
    {
        $event = Event::select('caption', DB::raw('COUNT(*) as cnt_event'))
            ->join('bids', 'events.id', '=', 'bids.id_event')
            ->orderBy('cnt_event', 'DESC')
            ->groupBy('bids.id_event')
            ->first();

        return view('most_order', compact('event'));
    }
}
