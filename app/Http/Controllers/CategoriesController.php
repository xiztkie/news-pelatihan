<?php

namespace App\Http\Controllers;

use App\Models\CategoriesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('Administrator.categories');
    }

    public function addcategories(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:name',
        ]);

        $slug = Str::slug($request->name);

        $categories = new CategoriesModel();
        $categories->name = $request->name;
        $categories->slug = $slug;
        $categories->save();

        return redirect()->back();
    }

    public function deletecategories($id)
    {

        $ids = decrypt($id);
        $category = CategoriesModel::findOrFail($ids);
        $category->delete();

        return redirect()->back();
    }
}
