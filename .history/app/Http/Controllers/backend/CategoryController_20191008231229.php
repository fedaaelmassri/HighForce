<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Categories;

class CategoryController extends Controller
{
    //

    public function index()
    {

        return view('backend.Categories.index')->with([
            'categories' => Categories::get()
        ]);
    }

    public function create()
    {
        $category=Categories::all();
        return view('backend.Categories.AddCategory')->with(['category'=>$category]);
    }

    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'description' => 'required|max:255',
            'image' => 'required|image',
            'category_id' => 'required',
        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('categories', 'public');
        } else {

            $path = null;
        }

        $category = new Categories();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->image = $path;
        $category->parent_id = $request->input('category_id');

        $category->save();
        if ($category->save()) {
            return redirect(route('admin.category'))->with([
                'message' => sprintf('category: "%s" add success !', $category->name),
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => sprintf('category: "%s" can not add success !', $category->name),
                'alert-type' => 'error'
            ])->withInput();
        }


    }
    public function delete($id)
    {
        $Category = Categories::findOrfail($id);

        if (!$Category) {
            return redirect()->back()->with([
                'message' => sprintf('The Category can not found!'),
                'alert-type' => 'error'
            ]);
        }else{
        if($Category->parent_id!=0){
            $parentCategory = App\Categories::where('parent_id', $id)->get();
                // dd($parentCategory);
            //     foreach ($parentCategory as $parintarr) {
            //         //
            //         $parintarr->parent_id=0;

            //     }

            //     $parintarr->save();

            $parentCategory->parent_id=0;
           $parentCategory->save();
        // $parentCategory= DB::table('Categories')
        // ->where('parent_id', $id)
        // ->update(['parent_id' => 0]);
        // dd($parentCategory);

         if($parentCategory->save()){
        $Category->delete();
        return response()->json(['message' => sprintf('The Category: "%s" deleted success !', $Category->name)]);
    }
    else{
        return redirect()->back()->with([
            'message' => sprintf('Error : The Category can delete!'),
            'alert-type' => 'error'
        ]);
    }
}
else{
    $Category->delete();
    return response()->json(['message' => sprintf('The Category: "%s" deleted success !', $Category->name)]);


}
        }
}
public function editparentCat($id)
{
    $Category = Categories::findOrfail($id);
    if (!$Category) {
        return redirect()->back()->with([
            'message' => sprintf('The Category can not found!'),
            'alert-type' => 'error'
        ]);
    }
    else{
 $parentid=$Category->parent_id;
        if($parentid!=0){
            // $parentCategory = App\Categories::where('parent_id', $id)->firstOrFail();
                // dd($parentCategory);
            //     foreach ($parentCategory as $parintarr) {
            //         //
            //         $parintarr->parent_id=0;

            //     }

            //     $parintarr->save();
            $parentCategory= App\Categories::where('parent_id', $id)
            ->update(['parent_id' => 0]);

        //     $parentCategory->parent_id=0;
        //    $parentCategory->save();
           if($parentCategory ){
            return response()->json(['message' => sprintf('The Category: "%s" deleted success !', $Category->name)]);
        }else{
            return response()->json([
                'message' => sprintf('Error : The Category can delete!')
            ]);

        }

    }
    }

}
    public function editCategory($id)
    {
        $Category = Categories::findOrfail($id);
        if (!$Category) {
            return redirect()->back()->with([
                'message' => sprintf('The Category can not found!'),
                'alert-type' => 'error'
            ]);
        }

        return  view('backend.Categories.update', [
            'Category' =>  $Category,


        ]);
    }


    public function updateCategory(Request $request, $id)
    {
        $category = Categories::findOrfail($id);


        $image = $request->file('image');

        if ($image && $image->isValid()) {
            $path = $image->storeAs('brands', basename($brands->image), 'public');
            $brands->image = $path;
        }

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->parent_id = $request->input('category_id');

        $category->save();
        if ($category->save()) {
            return redirect(route('admin.category'))->with([
                'message' => sprintf(' The Category: "%s" edit success !', $category->name),
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => sprintf(' The Category : "%s" can not edit success !', $category->name),
                'alert-type' => 'error'
            ])->withInput();
        }
     }



}
