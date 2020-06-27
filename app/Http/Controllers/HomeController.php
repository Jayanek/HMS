<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $patients = Patient::all();
        return view('home')->with('patients',$patients);
    }

    public function new()
    {

        return view('admin.new');
    }

    public function store(Request $request)
    {

        Patient::create($request->all());
        return redirect()->route('home');
    }

    public function show(int $id)
    {

        $patient =  Patient::find($id);
        return view('admin.show')->with('patient',$patient);
    }
}
