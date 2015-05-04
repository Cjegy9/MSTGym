<?php namespace User;

use MSTGym\Helpers\UserHelper as UserHelper;
use MSTGym\Objects\Employee;
use MSTGym\Objects\GymClass;
use MSTGym\Objects\Schedule;
use MSTGym\User as User;

use Illuminate\View\Factory as View;
use Illuminate\HTTP\Request as Request;
use Illuminate\Routing\Redirector as Redirect;

class AdminController extends \BaseController {

    protected $layout = 'layouts.index';

    private $view;

    private $user_helper;

    private $request;

    private $redirect;

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
        $members = User::where('admin', '!=', 1)->get();
        $members = $this->user_helper->realignToDropdown($members);

        $this->layout->content = $this->view->make('pages.admin.index')
                                            ->with('employee_dropdown', $employees)
                                            ->with('members_dropdown', $members)
                                            ->with('class_types', $this->user_helper->classTypesDropdown());
    }

    public function postEmployee()
    {
        $employee = new Employee();
        $employee->fill($this->request->except('_token'));
        $employee->save();

        return $this->redirect->to('admin');
    }

    public function deleteEmployee()
    {
        $employee = Employee::where('id', $this->request->get('emp_id'))->first();
        $employee->delete();

        return \Response::json(true);
    }

    public function deleteMember()
    {
        $user = User::where('id', $this->request->get('user_id'))->first();
        $user->delete();

        return \Response::json(true);
    }

    public function postClass()
    {
        $class = new GymClass();
        $class->fill($this->request->except('_token'));
        $class->save();

        return $this->redirect->to('admin');
    }

    public function postSchedule()
    {
        $schedule = new Schedule();
        $schedule->fill($this->request->except('_token'));
        $schedule->save();

        return $this->redirect->to('admin');
    }
}