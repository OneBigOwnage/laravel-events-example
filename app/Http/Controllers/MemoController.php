<?php

namespace App\Http\Controllers;

use App\Memo;
use App\Events\ActivateMemo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    /**
     * Show the default view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('default');
    }

    /**
     * Create & distribute a memo.
     *
     * @param  Request $request The incoming request.
     *
     * @return \Illuminate\View\View
     */
    public function activateMemo(Request $request)
    {
        $request->validate([ 'title' => 'required|string', 'description' => 'required|string' ]);

        $title       = $request->title;
        $description = $request->description;

        $memo = new Memo($title, $description);


        $event = new ActivateMemo($memo);

        event($event);


        return view('default');
    }
}
