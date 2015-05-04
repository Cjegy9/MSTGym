<?php namespace User;

use MSTGym\Helpers\UserHelper as UserHelper;
use MSTGym\User as User;

use Illuminate\View\Factory as View;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Support\Facades\Session;

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

    public function postLogin()
    {
        if (\Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')), true))
        {
            return $this->redirect->to('/');
        }
        else
        {
            Session::flash('flash_message', array(
                'header' => 'Failed Login',
                'type' => 'red',
                'close' => true,
                'body' => 'Sorry! We could not log you on with the email/password you entered'
            ));
            $this->layout->content = $this->view->make('pages.home.index');
        }
    }

    public function postRegister()
    {
        $user = new User();
        $user->fill($this->request->except('_token'));
        $user->admin = 1;
        $user->createUser();
    }
}