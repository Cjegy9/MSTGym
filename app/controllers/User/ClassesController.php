<?php namespace User;

use MSTGym\Objects\GymClass;
use MSTGym\Objects\Roster;
use MSTGym\Helpers\UserHelper;
use MSTGym\Objects\Employee;
use Illuminate\View\Factory as View;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector as Redirect;

class ClassesController extends \BaseController {

    protected $layout = 'layouts.index';

    private $view;

    private $user_helper;

    private $request;

    public function __construct(View $view, UserHelper $user_helper, Request $request, Redirect $redirect)
    {
        parent::__construct();
        $this->view = $view;
        $this->user_helper = $user_helper;
        $this->request = $request;
        $this->redirect = $redirect;
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
        $classes = GymClass::where('class_type', 1)->get();
        $classes_dropdown = $this->user_helper->realignClassToDropdown($classes);

        $this->layout->content = $this->view->make('pages.classes.crossfit')
            ->with('classes', $classes)
            ->with('classes_dropdown', $classes_dropdown);
    }

    public function getPilates()
    {
        $classes = GymClass::where('class_type', 2)->get();
        $classes_dropdown = $this->user_helper->realignClassToDropdown($classes);

        $this->layout->content = $this->view->make('pages.classes.pilates')
            ->with('classes', $classes)
            ->with('classes_dropdown', $classes_dropdown);
    }

    public function getZumba()
    {
        $classes = GymClass::where('class_type', 3)->get();
        $classes_dropdown = $this->user_helper->realignClassToDropdown($classes);

        $this->layout->content = $this->view->make('pages.classes.zumba')
            ->with('classes', $classes)
            ->with('classes_dropdown', $classes_dropdown);
    }

    public function getCycling()
    {
        $classes = GymClass::where('class_type', 4)->get();
        $classes_dropdown = $this->user_helper->realignClassToDropdown($classes);

        $this->layout->content = $this->view->make('pages.classes.cycling')
            ->with('classes', $classes)
            ->with('classes_dropdown', $classes_dropdown);
    }

    public function getYoga()
    {
        $classes = GymClass::where('class_type', 5)->get();
        $classes_dropdown = $this->user_helper->realignClassToDropdown($classes);

        $this->layout->content = $this->view->make('pages.classes.yoga')
            ->with('classes', $classes)
            ->with('classes_dropdown', $classes_dropdown);
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

    public function classSignUp($class_submit)
    {
        $class = GymClass::where('id', $this->request->get('class'))->first();
        $class->capacity--;
        $class->save();

        $roster = new Roster();
        $roster->member_id = \Auth::user()->id;
        $roster->class_id = $class->id;
        $roster->save();

        return $this->redirect->to('classes/' . $class_submit);
    }
}