<?php namespace User;

use Illuminate\View\Factory as View;

class ClassesController extends \BaseController {

    protected $layout = 'layouts.index';

    private $view;

    public function __construct(View $view)
    {
        parent::__construct();
        $this->view = $view;
    }

    public function getIndex()
    {
        $this->layout->content = $this->view->make('pages.classes.index');
    }

    public function getCrossfit()
    {
        $this->layout->content = $this->view->make('pages.classes.crossfit');
    }

    public function getPilates()
    {
        $this->layout->content = $this->view->make('pages.classes.pilates');
    }

    public function getZumba()
    {
        $this->layout->content = $this->view->make('pages.classes.zumba');
    }

    public function getCycling()
    {
        $this->layout->content = $this->view->make('pages.classes.cycling');
    }

    public function getYoga()
    {
        $this->layout->content = $this->view->make('pages.classes.yoga');
    }

}