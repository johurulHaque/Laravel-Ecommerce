<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;


class SlidersController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
    	$sliders =Slider::orderBy('priority','asc')->get();
    	return view('backend.pages.sliders.index',compact('sliders'));
    }


    public function store(Request $request){
    	$division = new Division();
    	$division -> name =$request -> name;
    	$division -> priority =$request -> priority;
    	$division ->save();
    	//flash require
    	return redirect()->route('admin.divisions');
    }
   

public function update(Request $request,$id){
	// data from admin form
	$division = Division::find($id);
	$division -> name = $request-> input('name');
	$division -> priority = $request-> input('priority');

	$division -> save(); 
	// session()->flash('success','A new category added successfully !!'); do it when also product 
	return redirect()->route('admin.divisions') ;


}
public function delete($id){
        $division = Division::find($id);
        if (!is_null($division)) {
          //delete all the district for this division
          //match the san id
   			$districts = District::where('division_id', '=' ,$division -> id)->get();
        foreach ($districts as $district) {
         $district ->delete();
        }
        $division ->delete();
   		}
   		//15@16.50
   		
   			return redirect()->route('admin.divisions');
   		
    }

}
