<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('frontend.home',['categories' => $categories]);
    }
    public function add_category()
    {
        return view('frontend.add_category');
    }
    public function storecategory(Request $request)
    {
        $request->validate(
            [
                'categoryname' => 'required'
            ]
        );

        $category = new Category;
        
        $category->name = $request->categoryname;

        $category->save();

        return redirect('/home');
    }
    public function editcategory($id)
    {
        $category = Category::where('id',$id)->first();
        return view('frontend.edit_category',['categories' => $category]);
    }
    public function updatecategory(Request $request,$id)
    {
        $category = Category::where('id',$id)->first();

        $category->name = $request->categoryname;

        $category->save();

        return redirect('/home');
    }
    public function deletecategory($id)
    {
        $category = Category::whereId($id)->first();

        $category->delete();
        return redirect('/home');
    }
}
