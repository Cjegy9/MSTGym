<?php namespace User;

use MSTGym\Objects\GymClass;
use MSTGym\Helpers\UserHelper;
use MSTGym\Objects\Employee;
use Illuminate\View\Factory as View;
use Illuminate\Http\Request;

class ClassesController extends \BaseController {

    protected $layout = 'layouts.index';

    private $view;

    private $user_helper;

    private $request;

    public function __construct(View $view, UserHelper $user_helper, Request $request)
    {
        parent::__construct();
        $this->view = $view;
        $this->user_helper = $user_helper;
        $this->request = $request;
    }

    public function getIndex()
    {
        $employees = Employee::all();
        $employees = $this->user_helper->realignToDropdown($employees);
        $employees[0] = "Any";

        $this->layout->content = $this->view->make('pages.classes.index')
            ->with('classes', GymClass::all())
            ->with('class_types', $this->user_helper->classTypesDropdown())
            ->with('employees', $employees);
    }

    public function getCrossfit()
    {
        $this->layout->content = $this->view->make('pages.classes.crossfit')
            ->with('classes', GymClass::where('class_type', 1)->get());
    }

    public function getPilates()
    {
        $this->layout->content = $this->view->make('pages.classes.pilates')
            ->with('classes', GymClass::where('class_type', 2)->get());
    }

    public function getZumba()
    {
        $this->layout->content = $this->view->make('pages.classes.zumba')
            ->with('classes', GymClass::where('class_type', 3)->get());
    }

    public function getCycling()
    {
        $this->layout->content = $this->view->make('pages.classes.cycling')
            ->with('classes', GymClass::where('class_type', 4)->get());
    }

    public function getYoga()
    {
        $this->layout->content = $this->view->make('pages.classes.yoga')
            ->with('classes', GymClass::where('class_type', 5)->get());
    }

    public function postSearch()
    {
        $results = new GymClass();
        if($this->request->get('employee') != 0)
        {
            $results->where('employee_id', $this->request->get('employee'));
        }
        else
        {
            $results->where('employee_id', '*');
        }

        if($this->request->get('class_type') != 0)
        {
            $results = $results->orWhere('class_type', $this->request->get('class_type'));
        }

        if($this->request->get('name') != "")
        {
            $results->orWhere('name', $this->request->get('name'));
        }

        $results->get();
        $final_results = array(
            'count' => $results->count(),
            'results' => $results->with('Employee')->get()
        );
        return \Response::json($final_results);
    }

}