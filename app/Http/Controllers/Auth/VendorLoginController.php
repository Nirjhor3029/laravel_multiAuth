<?php

namespace App\Http\Controllers\Auth;

use App\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class VendorLoginController extends Controller
{


    public function __construct(){
        //$this->middleware('guest:vendor'); //vendor is the guard level

        $except = ["logout","vendorLogout"];
        $this->middleware('guest:vendor')->except($except);
    }

    public function showLoginForm(){
        return view("vendor.auth.vendor_login");
    }



    public function login(Request $request){

        //echo "hi vendor";
        //exit;
        //validate the form data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);



        //Attempt to log the user in auto hashing by attempt()
        if(Auth::guard('vendor')->attempt(['email'=> $request->email,'password'=> $request->password],$request->remember)){
            //if successful, then redirect to their intended location.
            return redirect()->intended(route('vendor.dashboard')); //it redirects the location where user hit before login ..
        }



        //if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email','remember'));


    }

    public function vendorLogout()
    {
        Auth::guard('vendor')->logout();

        //$request->session()->invalidate();  //if we flush the session then all session will be delete which we don't need any more.

        return redirect('/');
    }



    public function showRegisterForm(){

        return view("vendor.auth.vendor_register");
    }
    public function register(Request $request){

        //return $request;

        $status = $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        Vendor::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        //$this->login($request);

        //return $status;

        return Redirect::to('vendor/login');

    }






































    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
