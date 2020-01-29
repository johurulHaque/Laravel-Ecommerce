{{-- same as products@index --}}
@extends('backend.layouts.master')
@section('title','Districts')
@push('css')
<style>
.header{
  color: #008080;
}

</style>
@endpush

@section('content')
      <div class="main-panel">
        <div class="content-wrapper">
          {{-- card for add product--}}
          {{-- card for add product--}}
          <div class="card">
            <div class="card-header text-center header">
              Manage Districts  <br>
            </div>
            {{-- card-body --}}
            {{-- card-body --}}
            <div class="card-body">
              <div>
                @include('backend.partsials.message') 
              </div>
              
              <table class="table table-hover" id="dataTable">
                <thead style=" background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%);">
                <tr>
                  <th>#</th>
                  <th>District name</th>
                  <th>Division name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($districts as $district)
                    <tr>
                      <td>#</td>
                      <td>{{$district -> name}}</td>
                      <td>
                          @if ($district -> division_id == NULL)
                          {{-- this is not here modify it --}}
                         primary category 

                        @else
                        {{-- relational  with non objective but why work(also work here) in category index justyfy (non object error why come here detail note)--}}
                          
                        {{$district ->division['name']}}</td>
                        @endif
          
                      <td>
                        <a href="{{ route('admin.district.edit',$district -> id)}}" class="btn btn-primary">Edit</a>
                      </td>

                      <td>
                        <a href="#deleteModal{{ $district -> id }}" data-toggle="modal" class="btn" style="background-color: #B22222;color: white;  ">Delete</a>

                        <!--Delete Modal -->
                        <div class="modal fade" id="deleteModal{{ $district -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete ?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">
                                
                                <form action="{{ route('admin.district.delete',$district -> id) }}" method="post">
                                  @csrf
                                  <button type="submit" class="btn btn-danger" >Permanent delete</button>
                                </form>
                              </div>
                              
                               <div class="modal-footer">
                                                                
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                  </tr>
                @endforeach

                </tbody>
                </table>              
            </div>
          </div>
        </div>
      </div>
@endsection     
{{-- 
thead ,delete button>> style external file

js >> add check box with multiple delatation with background color
use font awesome
use checkbox for edit district >>> many iteam at a time
style modal>>> and animate the delete icon


input place holder >>text color change
add image in form
checbox>>filed how to big
 

use font family>>


 manage product edit description>>

 font family >>> how to use 

 INPUT LOWER OR UPPER BUT >>  lower|uper as i wish

 if validation fail then >>>> show opps error msg

 css on title >>>(only index ) but do the others like edit/create
 --}}