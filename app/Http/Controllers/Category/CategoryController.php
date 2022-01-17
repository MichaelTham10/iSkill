<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.category', compact('categories'));
    }

    

  
    public function create()
    {
        return view('category.add_category');
    }

  
    public function store(Request $request)
    {
        $this->validate($request, [      
            'name' => 'required',
            'image' => 'required'
        ]);
        $image_path = $request->file('image')->store('category', 'public');
        Category::create([
            'name' => $request->name,
            'image' => $image_path,
        ]);

        return back()->with('success', 'Kategori berhasil di tambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id)
    {
        $category = Category::findOrFail($category_id);
        return view('category.update_category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category_id)
    {

        $category = Category::findOrFail($category_id);

        $this->validate($request, [      
            'name' => 'required',
           
        ]);

        if ($request->file('image') != null) {
            $image_path = $request->file('image')->store('category', 'public');
        } else {
            $image_path = $category->image;
        }

       
        Category::findOrFail($category_id)->update([
            
            'name' => $request->name,
            'image' => $image_path,
            
            
        ]);

        return back()->with('success', 'Kategori berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_id)
    {
        Category::destroy($category_id);
        return back()->with('success', 'Kategori berhasil di delete');
    }
}
