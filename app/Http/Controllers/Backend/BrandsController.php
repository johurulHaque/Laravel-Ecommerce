<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\controllers\controller;

use App\Models\Brand;
use Image;
use File;

class BrandsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }
public function index(){
	$brands = Brand::orderBy('id','desc')->get();
	return view('backend.pages.brands.index')->withbrands($brands);
}




public function create(){
	//brand doesnt have sub brand
	// $main_brands = Brand::orderBy('name','desc')->where('parent_id',NULL)->get();
	return view('backend.pages.brands.create');
}
//validation do also for product 10@23.05
public function store(Request $request){
	$request -> validate([
        'name' => 'bail|required|alpha_num',
        'description' => 'bail|required|string',
        'image' => 'nullable|image',


    ],
    [
        'name.required' => ':attribute can not be blanked',
        'name.alpha_num' => ':attribute only alpha-numeric character',
    ]);
	// data from admin form
	$brand = new Brand;
	$brand -> name = $request-> input('name');
	$brand -> description = $request-> input('description');

	if ($request->file('image')) {
$image = $request->file('image');
$img = time() . '.'. $image->getClientOriginalExtension();
$location = public_path('images/brands/' .$img);
Image::make($image)->save($location);
$brand ->  image = $img;
}
	$brand->save();
	// session()->flash('success','A new brand added successfully !!'); do it when also product do 10@25.57
	//not good to return view .Good practise is to redirect to route
	return redirect()->route('admin.brands') ;
}
public function edit($id){
		//doesnt have main brand
		// $main_brands = Brand::orderBy('name','desc')->where('parent_id',NULL)->get();
	$brand = Brand::find($id);

		//passing multiple value with view
//passing multiple value with view
		if (!is_null($brand)) {
			return view('backend.pages.brands.edit',compact('brand'));
		}else {
			return redirect()->route('admin.brands');
		}
}

public function update(Request $request,$id){
	$request -> validate([
        'name' => 'bail|required|alpha_num',
        'description' => 'bail|required|string',
        'image' => 'nullable|image',


    ],
    [
        'name.required' => ':attribute can not be blanked',
        'name.alpha_num' => ':attribute only alpha-numeric character',
    ]);
	// data from admin form
	$brand = Brand::find($id);
	$brand -> name = $request-> input('name');
	$brand -> description = $request-> input('description');
	// $brand -> parent_id = $request-> input('parent_id'); no need
	//aktu baki aca commention ta bujhta hoba
	// if (count($request->image) > 0)  count take only array that was upload multiple image{
	if ($request->image) {
//delete the old image from the containing folder
if (File::exists('images/brands/' .$brand -> image)) {
	File::delete('images/brands/'.$brand -> image);

}
$image = $request->file('image');
$img = time() . '.'. $image->getClientOriginalExtension();
$location = public_path('images/brands/' .$img);
Image::make($image)->save($location);
$brand ->  image = $img;
}
	$brand->save();
	// session()->flash('success','A new brand added successfully !!'); do it when also product do 10@25.57 or see creat product form
	//not good to return view .Good practise is to redirect to route
	return redirect()->route('admin.brands') ;
}
public function delete($id){
$brand = Brand::find($id);
//if it is parent brand then delete all sub brand

//delete brand image
if (!is_null($brand)) {
	if (File::exists('images/brands/' .$brand -> image)) {
	File::delete('images/brands/'.$brand -> image);
}
$brand ->delete();

}
session()->flash('success','brand has been deleted !!');
return back();
}


}
