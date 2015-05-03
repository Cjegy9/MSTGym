<?php namespace User;

use MSTGym\Helpers\UserHelper as UserHelper;
use MSTGym\User as User;

use Illuminate\View\Factory as View;
use Illuminate\Http\Request as Request;

class LoginController extends \BaseController {

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
        $this->layout->content = $this->view->make('pages.login.index')
                                    ->with('mem_level_dropdown', $this->user_helper->memLevelDropdown())
                                    ->with('card_type_dropdown', $this->user_helper->cardTypeDropdown());
    }

    public function postRegister()
    {
        $user = new User();
        $user->fill($this->request->except('_token'));
        $user->admin = 1;
        $user->createUser();
    }
}