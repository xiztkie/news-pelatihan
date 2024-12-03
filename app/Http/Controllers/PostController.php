<?php

namespace App\Http\Controllers;

use App\Models\CategoriesModel;
use App\Models\PostModel;
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

    public function updatestatus($id, Request $request)
    {
        $ids = decrypt($id);
        $request->validate([
            'status' => 'required',
        ]);

        $post = PostModel::findOrFail($ids);
        $post->is_published = $request->status;
        $post->save();

        return redirect()->back()->with('toast_success', 'Status updated successfully!');
    }
}
