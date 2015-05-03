<?php namespace User;

use MSTGym\Helpers\UserHelper as UserHelper;

use Illuminate\View\Factory as View;
use Illuminate\HTTP\Request as Request;

class AdminController extends \BaseController {

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
        $this->layout->content = $this->view->make('pages.admin.index')
                                            ->with('employee_dropdown', $this->user_helper->employeeDropdown());
    }
}