<?php namespace User;

use MSTGym\Objects\Schedule;
use Illuminate\View\Factory as View;

class ScheduleController extends \BaseController {

    protected $layout = 'layouts.index';

    private $view;

    public function __construct(View $view)
    {
        parent::__construct();
        $this->view = $view;
    }

    public function getIndex()
    {
        $schedule = Schedule::with('Employee')->get();

        $this->layout->content = $this->view->make('pages.schedule.index')
                                        ->with('schedule', $schedule);
    }
}