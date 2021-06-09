<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Permission as ModelsPermission;
use Spatie\Permission\Models\Role as ModelsRole;

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
        // ModelsRole::create(['name'=>'writer']);

        // ModelsPermission::create(['name'=>'edit post']);

        // auth()->user()->givePermissionTo('edit post');

        // auth()->user()->assignRole('Writer');

        // return auth()->user()->permissions;
        return view('home');
    }
}
