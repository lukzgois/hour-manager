<?php namespace HourManager\Http\Controllers;

use Carbon\Carbon;
use HourManager\Hours;
use HourManager\Http\Requests;
use HourManager\Http\Controllers\Controller;

use HourManager\Http\Requests\CreateHourRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function index()
    {
        $hours = Hours::allGroupedByDate();

        return view('hours.index', compact('hours'));
    }

    public function store(CreateHourRequest $request)
    {
        $hour = Hours::register(\Input::all());
        Auth::user()->hours()->save($hour);

        return redirect('hours');

    }

}
