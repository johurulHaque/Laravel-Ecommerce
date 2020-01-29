<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\controllers\controller;

use App\Models\Product;
use App\Models\ProductImage;
use Image;
class ProductsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index(){
    	$products = Product::orderBy('id','desc')->get();
    	return view('backend.pages.product.index')->withProducts($products);
    }

    //admin create product view
    //admin create product view
    public function create(){
    	return view('backend.pages.product.create');
    }

    public function edit($id){
    	$product = Product::find($id);
   
    	return view('backend.pages.product.edit')->withProduct($product);
    }
	
	//store product data from admin in DB products table     
	//store product data from admin in DB products table     
    public function store(Request $request){
        // $request -> validate([
    //     'title' => 'bail|required|alpha_num',
    //     'description' => 'nullable|string',
    //     'image' => 'required|image',        
    //     'price' => 'required|numeric',        
    //     'quantity' => 'required|numeric',        
    // ],
    // [
    //     'title.required' => ':attribute can not be blanked',
    //     'title.alpha_num' => ':attribute only alpha-numeric character',
    // ]);
     
    
    	// data from admin form 
    	$product = new Product;
    	$product -> title = $request-> input('title');
    	$product -> description = $request-> input('description');
    	$product -> price = $request-> input('price');
    	$product -> quantity = $request-> input('quantity');

    	// data fram manual insert
    	$product -> slug = str_slug($product -> title);
    	$product -> category_id =$request-> input('category_id');
    	$product -> brand_id =$request-> input('brand_id');
    	$product -> admin_id = 1;

    	// insert & save
    	$product -> save();

        //productimage insert beyond product id through relation
    	if (count($request->product_image) > 0) {
            foreach ($request->product_image as $image) {
                //insert that image in locaton
                ////check for file exist or 6 >> 18.44 !if($request->hasFile('product_image'){after save() this bracket}
                //$image = $request->file('product_image');
                $img = time() . '.'. $image->getClientOriginalExtension();
                $location = public_path('images/products/' .$img);
                Image::make($image)->save($location);
                // insert in DB
                $product_image = new ProductImage;
                $product_image->product_id = $product->id;
                $product_image->image = $img;
                $product_image->save();
            }
        }
    	//not good to return view .Good practise is to redirect to route
        //just for one time use reload then out the session
     	session()->flash('success','Product added successfully !!');
        return back();//redirect here
    }


    public function update(Request $request,$id){
    	// data from admin form 
    	$product =Product::find($id);
    	$product -> title = $request-> input('title');
    	$product -> description = $request-> input('description');
    	$product -> price = $request-> input('price');
    	$product -> quantity = $request-> input('quantity');
        $product -> category_id = input('category_id');
        $product -> brand_id = input('brand_id');

    	// insert & save
    	$product -> save();

    	//not good to return view .Good practise is to redirect to route
     	return redirect()->route('admin.products') ;
    }

    public function delete($id){
        $product = Product::find($id);
        if (!is_null($product)) {
            $product ->delete();    
        }
        return redirect()->route('admin.products');
    }
}

//php artisan config:cache //cache reset/refresh korba //update .env variable
//php artisan view:clear
//composer dump autoload //rename gula nea niba
//flash msg on delete
//validation on strore do
//correct image location