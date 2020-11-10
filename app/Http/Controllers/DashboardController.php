<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\User;
class DashboardController extends Controller

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
        // Role::create(['name'=>'Editor']);
        // Permission::create(['name'=>'reopen post']);
        // auth()->user()->givePermissionTo('edit post');
        // auth()->user()->assignRole('writer');

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('listings', $user->listings);
    }
}
