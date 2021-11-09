<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// php artisan make:migration --table=users adds_api_token_to_users_table

class UserController extends Controller
{
    // get all the users
    public function index()
    {
        return User::all();
    }

    // get user by ID
    public function getUser(User $id)
    {

        return User::find($id);
    }

    // create user int he database
    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    // update user by user ID
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->update($request->all());

        return response()->json($user, 200);
    }

    // delete user by userID
    public function delete(User $user)
    {
        $user->delete();

        return response()->json(null, 204);
    }

    // method to handle login fetch data
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("signin")->withSuccess('Login details are not valid');
    }

    // sign in view
    public function signInPage()
    {

        return view('pages.signIn');
    }

    // change password view
    public function changePasswordPage()
    {
        return view('pages.changepassword');
    }
    // reset password view
    public function resetPasswordPage()
    {
        return view('pages.resetPassword');
    }

    // page view   
    public function profilePage()
    {
        return view('pages.profile');
    }

    // sign up view 
    public function signUpPage()
    {

        return view('pages.signUp');
    }


    // update user profile view
    public function updateProfile()
    {

        return view('pages.updateProfile');
    }


    // user registration method for user creation
    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }


    // user dashboard 
    public function dashboard()
    {
        if (Auth::check()) {

            return view('dashboard');
        }


        return redirect("signin")->withSuccess('You are not allowed to access');
    }

    // sign out route
    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('/signin');
    }
}