<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

use App\Repositories\User\UserInterface as UserInterface;

use Session;
use Auth;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $loginPath = '/login';

    //protected $redirectAfterLogout = '/login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(UserInterface $user)
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        $this->user = $user;
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'      => 'required|max:255',
            'email'     => 'required|email|max:255|unique:users',
            'password'  => 'required|min:6|confirmed',
        ]);
    }*/

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    /*protected function create(array $data)
    {
        return User::create([
            'name'  => $data['name'],
            'email' => $data['email'],
            'role'  => $data['role'],
            'password' => bcrypt($data['password']),
        ]);
    }
    */


    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required', 
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'active' => 1, 'enable' => 1])) 
        {
            $user = Auth::user();
            return redirect('dashboard');
        }

        return redirect($this->loginPath)
                    ->withInput($request->only('email', 'remember'))
                    ->withErrors([
                        'error_message' => 'These credentials do not match our records.',
                    ]);        
    }


    public function postRegister(Request $request)
    {
        $this->validate($request,[
            'name'      => 'required|max:255',
            'email'     => 'required|email|max:255|unique:users',
            'password'  => 'required|min:6|confirmed',
        ]);

        $data = $this->user->requestData($request->all());

        $this->user->save($data);

        //$this->create($request->all());
        return redirect('/login')->with('message', 'Registration successful! System Admin will verify your credentials before you can login.');
    }

    
}
