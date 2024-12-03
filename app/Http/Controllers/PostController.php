<?php

namespace App\Http\Controllers;

use App\Models\CategoriesModel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('Administrator.post');
    }

    public function addpost()
    {
        $data =[
            'categories' => CategoriesModel::get()
        ];
        return view('Administrator.addpost', $data);
    }
}
