<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\District;

class DivisionsController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
    	$divisions =Division::orderBy('priority','asc')->get();
    	return view('backend.pages.divisions.index',compact('divisions'));
    }

    public function create(){
    	
    	return view('backend.pages.divisions.create');
    }

    public function store(Request $request){
      $request -> validate([
        'name' => 'bail|required|alpha_num|unique:divisions',
        'priority' => 'bail|required|numeric|unique:divisions',
    ],
    [
        'name.required' => ':attribute can not be blanked',
        'name.alpha_num' => ':attribute only alpha-numeric character',
        'priority.nemeric' => ':attribute must be numeric',
        'priority.unique' => ':attribute must be unique',
    ]);

    	$division = new Division();
    	$division -> name =$request -> name;
    	$division -> priority =$request -> priority;
    	$division ->save();
    	//flash require
    	return redirect()->route('admin.divisions');
    }
    public function edit($id){
       
    	$division = Division::find($id);
     		//passing multiple value with view
        //passing multiple value with view
   		if (!is_null($division)) {
   			return view('backend.pages.divisions.edit',compact('division'));
   		}else {
   			return redirect()->route('admin.divisions');
   		}
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


// unique and distinct in not same...write  in the web 