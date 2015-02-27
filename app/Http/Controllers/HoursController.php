<?php namespace HourManager\Http\Controllers;

use HourManager\Http\Requests;
use HourManager\Http\Controllers\Controller;

use HourManager\Http\Requests\CreateHourRequest;
use Illuminate\Http\Request;

/**
 * Class HoursController
 * @package HourManager\Http\Controllers
 */
class HoursController extends Controller {

    /**
     * Create a new HoursController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show a page to create a new notice
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('hours.create');
    }

    public function store(CreateHourRequest $request)
    {
        dd(Input::all());
    }

}
