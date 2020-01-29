<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\controllers\controller;
use App\Models\category;
use Image;
use File;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
public function index(){
	$categories = Category::orderBy('id','desc')->get();
	return view('backend.pages.categories.index')->withcategories($categories);
}
public function create(){
	$main_categories = Category::orderBy('name','desc')->where('parent_id',NULL)->get();
	return view('backend.pages.categories.create',compact('main_categories'));
}

//validation do also for product 10@23.05
public function store(Request $request){
    $request -> validate([
        'name' => 'bail|required|string',
        'description' => 'bail|nullable|string',
        'image' => 'nullable|image',
       
        
    ],
    [
        'name.required' => ':attribute can not be blanked',
        'name.alpha_num' => ':attribute only alpha-numeric character',
    ]);
	// data from admin form
	$category = new Category;
	$category -> name = $request-> input('name');
	$category -> description = $request-> input('description');
	$category -> parent_id = $request-> input('parent_id');

	if ($request->image) {
        //insert that image
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/categories/' .$img);
        Image::make($image)->save($location);
        $category ->  image = $img;
}
	$category->save(); 
	// session()->flash('success','A new category added successfully !!'); do it when also product do 10@25.57
	return redirect()->route('admin.categories') ;


}


public function edit($id){
		$main_categories = Category::orderBy('name','desc')->where('parent_id',NULL)->get();
    	$category = Category::find($id);
 		
 		//passing multiple value with view
        //passing multiple value with view
   		if (!is_null($category)) {
   			return view('backend.pages.categories.edit',compact(['main_categories', 'category']));
   		}else {
   			return redirect()->route('admin.categories');
   		}
    }

public function update(Request $request,$id){
    $request -> validate([
        'name' => 'bail|required|string',
        'description' => 'bail|nullable|string',
        'image' => 'nullable|image',
       
        
    ],
    [
        'name.required' => ':attribute can not be blanked',
        'name.alpha_num' => ':attribute only alpha-numeric character',
    ]);
	// data from admin form
	$category = Category::find($id);
	$category -> name = $request-> input('name');
	$category -> description = $request-> input('description');
	$category -> parent_id = $request-> input('parent_id');

	//aktu baki aca commention ta bujhta hoba
	// if (count($request->image) > 0)  count take only array that was upload multiple image{
	if ($request->image) {
        //delete the old image from the containing folder
                if (File::exists('images/categories/' .$category -> image)) {
                	File::delete('images/categories/'.$category -> image);
         
                }
                $image = $request->file('image');
                $img = time() . '.'. $image->getClientOriginalExtension();
                $location = public_path('images/categories/' .$img);
                Image::make($image)->save($location);
                $category ->  image = $img;
}
	$category->save(); 
	// session()->flash('success','A new category added successfully !!'); do it when also product do 10@25.57 or see creat product form
	//not good to return view .Good practise is to redirect to route
	return redirect()->route('admin.categories') ;


}
public function delete($id){
        $category = Category::find($id);
        //if it is parent category then delete all sub category
        if ($category -> parent_id == null) {
        	//delete subcategory
        	$sub_categories = Category::orderBy('name','desc')->where('parent_id',category.id)->get();
        	foreach ($sub_categories as $sub) {
        		// delete image
        		if (File::exists('images/categories/' .$sub -> image)) {
                	File::delete('images/categories/'.$sub -> image);
         
                }
        		$sub -> delete();
        	}
        }
        //delete category image
         if (File::exists('images/categories/' .$category -> image)) {
                	File::delete('images/categories/'.$category -> image);
         
                }
        if (!is_null($category)) {
            $category ->delete();    
        }
        return redirect()->route('admin.categories');
    }



}

// observe image storation
// ,. etc may use regex
// how to dash validation