<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View\
     */
    public function index()
    {
        $events = DB::getSchemaBuilder()->getColumnListing('events');
        $bids = DB::getSchemaBuilder()->getColumnListing('bids');

        return view('migration', compact('events', 'bids'));
    }

    public function algorithm()
    {
        $result = $this->countStudent(28, 75);

        $str = 'This server has 386 GB RAM and 500GB storage';

        $numeric = $this->getNumeric($str);

        $a = [1,2,3,4,5];
        $b = 'Hello world';

        list($a, $b) = [$b, $a];


        return view('algorithm', compact('result', 'numeric', 'b', 'a'));
    }

    private function countStudent($student, $percent)
    {
        $studentSport = (int) $student * (int) $percent / (int) 100;

        return 'Занимаются спортом: ' . $studentSport . 'Всего учеников в классе: ' . $student;
    }

    private function getNumeric($str)
    {
        return $strOnlyInteger = preg_replace('/[^0-9]/', ' ', $str);
    }
}
