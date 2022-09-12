<?php

namespace App\Http\Controllers;

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
        // sama
        // $projects = Project::where('leader_id', auth()->user()->id)->get();
        // lebih singkat yg di bawah ini
        $projects = auth()->user()->projects;
        // dd($project);
        return view('home', compact('projects'));
    }

    public function dashboard()
    {
        $projects = auth()->user()->projects;
        $data = [
            'status' => 'Dashboard',
            'isiAsset' => asset('nice')
        ];
        // dd($project);
        return view('dashboard', compact('projects',), $data);
    }
}
