<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {

        $kategori = Category::where('user_id', Auth::id())->get();

        return view('panel/categories/index', compact('kategori'));
    }

    public function createPage()
    {
        return view('panel/categories/create');
    }


    public function postCategory(Request $request)
    {

        $request->validate([
           "category_name" => "required|string|max:255",
           "category_status" => "required|boolean",
        ]);



        $c = new Category();
        $c->name = $request->category_name;
        $c->is_active = $request->category_status;
        $c->user_id = Auth::id();


        $c->save();


        return redirect()->route('panel.categoryIndex')->with('success', 'Kategori başarıyla oluşturuldu. . .');
    }

    public function updatePage($category_id)
    {

        $ci = Category::where('id', $category_id)->first();

        return view('panel/categories/update', compact('ci'));


    }

    public function updateCategory(Request $request)
    {


        if (!$request->has('catId') || empty($request->catId)) {
            return redirect()->route('panel.categoryIndex')->with('error', 'Kategori ID bulunamadı!');
        }

        $request->validate([
            'cat_name' => 'required|string|max:255',
            'cat_status' => 'required|boolean'
        ]

        );

        $c = Category::find($request->catId);

        if ($c) {
            $c->name = $request->cat_name;
            $c->is_active = (bool) $request->cat_status;
            $c->save();

            return redirect()->route('panel.categoryIndex')->with('success', 'Kategori başarıyla güncellendi.');
        }

        return redirect()->route('panel.categoryIndex')->with('error', 'Güncelleme başarısız, kategori bulunamadı.');
    }

    public function deleteCategory($category_id){

        if($category_id){
            $del_c = Category::find($category_id);
            $del_c->delete();

            return redirect()->route('panel.categoryIndex')->with('success', 'İlgili kategori silindi');

        }


    }

}
