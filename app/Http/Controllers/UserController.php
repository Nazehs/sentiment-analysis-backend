<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// php artisan make:migration --table=users adds_api_token_to_users_table

class UserController extends Controller
{
    //
    public function index()
    {
        return User::all();
    }

    public function getUser(User $id)
    {

        return User::find($id);
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->update($request->all());

        return response()->json($user, 200);
    }

    public function delete(User $user)
    {
        $user->delete();

        return response()->json(null, 204);
    }

    public function login(Request $request)
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

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function indexPage()
    {
        return view('auth.login');
    }


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



    public function registration()
    {
        return view('auth.registration');
    }

    public function homePage()
    {
        return view('home');
    }
    public function signInPage(Request $request)
    {
        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('dashboard')
        //         ->withSuccess('Signed in');
        // }

        // return redirect("login")->withSuccess('Login details are not valid');
        return view('pages.signIn');
    }
    public function changePasswordPage()
    {
        return view('pages.changepassword');
    }

    public function resetPasswordPage()
    {
        return view('pages.resetPassword');
    }

    public function profilePage()
    {
        return view('pages.profile');
    }

    public function resultsPage()
    {
        return view('pages.results');
    }
    public function sentimentOverviewPage()
    {
        return view('pages.signUp');
    }

    public function signUpPage()
    {

        return view('pages.signUp');
    }


    public function updateProfile()
    {

        return view('pages.updateProfile');
    }

    public function generateAnalysisPage()
    {
        return view('pages.generateAnalysis');
    }

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


    public function dashboard()
    {
        if (Auth::check()) {

            return view('dashboard');
        }


        return redirect("signin")->withSuccess('You are not allowed to access');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/signin');
    }
}