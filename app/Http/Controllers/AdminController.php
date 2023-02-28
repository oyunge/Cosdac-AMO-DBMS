<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;

class AdminController extends Controller
{
    //
    public function users(Request $request)
    {
        $page = "Registered Users";
        $users = UsersModel::all();
        return view('admin.adminDashboard',['users'=>$users] );

        // if ($request->ajax()) {
        //     $data = UsersModel::latest()->get();
        //     return Datatables::of($data) 
        //              ->addIndexColumn()
        //              ->addColumn('action', function ($data) {
        //                  $btns = '<div class="btn-group"><a href="#" class="edit btn btn-primary btn-sm">View/Edit</a><a href="#" class="btn btn-danger btn-sm">Delete</a></div>';
                            
        //                  return $btns;
        //              })
                    
        //              ->rawColumns(['action'])
        //              ->make(true);
        // }
        // return view('admin.adminDashboard', compact('page'));
    }

}
