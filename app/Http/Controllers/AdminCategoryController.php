<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    //
    public function index()
    {
        return view('admin.category.list');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function edit()
    {
        return view('admin.category.edit');
    }

}
