<?php namespace User;

use Illuminate\View\Factory as View;

class TrainersController extends \BaseController {

    protected $layout = 'layouts.index';

    private $view;

    public function __construct(View $view)
    {
        parent::__construct();
        $this->view = $view;
    }

    public function getIndex()
    {
        $this->layout->content = $this->view->make('pages.trainers.index');
    }
}