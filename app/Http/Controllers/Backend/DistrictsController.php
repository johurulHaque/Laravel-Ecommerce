<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Division;
class DistrictsController extends Controller
{
    // middleware
    // middleware
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // show product iteam
    // show product iteam
    public function index(){
    	$divisions = Division::orderBy('priority','asc')->get();
      $districts =District::orderBy('name','asc')->get();
    	return view('backend.pages.districts.index',compact('districts','divisions'));
    }

    // create product  form with division name 
    // create product  form with division name
    public function create(){
    	$divisions = Division::orderBy('priority','asc')->get();
    	return view('backend.pages.districts.create',compact('divisions'));
    }

    // store iteam in DB
    // store iteam in DB
    public function store(Request $request){
       $request -> validate([
        'name' => 'bail|required|alpha_num',
        
    ],
    [
        'name.required' => ':attribute can not be blanked',
        'name.alpha_num' => ':attribute only alpha-numeric character',
    ]);
    	$district = new District();
    	$district -> name =$request -> name;
    	$district -> division_id =$request -> division_id;
    	$district ->save();
    	//flash require
      session()->flash('success','A new district added successfully !!');
    	
      return redirect()->route('admin.districts');
    }


    public function edit($id){
    	//division should stro if we want change
      $divisions = Division::orderBy('priority','asc')->get();
    	$district = District::find($id);

     		//passing multiple value with view
        //passing multiple value with view
   		if (!is_null($district)) {
   			return view('backend.pages.districts.edit',compact(['divisions','district']));
   		}else {
   			return redirect()->route('admin.districts');
   		}
    }

//update district
//update district
public function update(Request $request,$id){
	$request -> validate([
        'name' => 'bail|required|alpha_num',
    ],
    [
        'name.required' => ':attribute can not be blanked',
        'name.alpha_num' => ':attribute only alpha-numeric character',
    ]);
  // data from admin form
	$district = District::find($id);
	$district -> name = $request-> input('name');
	$district -> division_id =$request -> division_id;

	$district -> save(); 
	session()->flash('success','Update your edition successfully !!');
	return redirect()->route('admin.districts') ;
}

public function delete($id){
        $district = District::find($id);
        if (!is_null($district)) {
   			$district ->delete();
   		}
   		//15@22.09
   		
   			return redirect()->route('admin.districts');
   		
    }

}
