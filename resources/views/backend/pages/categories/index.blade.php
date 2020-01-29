{{-- same as products@index --}}
@extends('backend.layouts.master')
@section('title','Categories')
@section('content')
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          {{-- card add product--}}
          {{-- card add product--}}
          <div class="card">
            <div class="card-header text-center">
              Manage Product 
            </div>
            {{-- card-body --}}
            <div class="card-body">
               <table class="table table-hover" id="dataTable">
                <thead style=" background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%);">
                <tr>
                  <th>#</th>
                  <th>Category name</th>
                  <th>Category image</th>
                  <th>Parent category</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($categories as $category)
                    <tr>
                      <td>#</td>
                      <td>{{$category -> name}}</td>

                      <td><img src="{{ asset('images/categories/'.$category -> image)}}" alt="" width="100px" height="60px"></td>

                      <td>
                        @if ($category -> parent_id == NULL)
                         primary category 

                        @else
                        {{-- relational --}}
                          {{ $category ->parent -> name }}
                          

                        @endif
                      </td>
                      

                      <td>
                        <a href="{{ route('admin.category.edit',$category -> id)}}" class="btn btn-primary">Edit</a>
                      </td>
                      <td>
                        <a href="#deleteModal{{ $category -> id }}" data-toggle="modal" class="btn" style="background-color: #B22222;color: white;">Delete</a>

                        <!--Delete Modal -->
                        <div class="modal fade" id="deleteModal{{ $category -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete ?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">
                                
                                <form action="{{ route('admin.category.delete',$category -> id) }}" method="post">
                                  @csrf
                                  <button type="submit" class="btn btn-danger" >Permanent delete</button>
                                </form>
                              </div>
                              
                               <div class="modal-footer">
                                                                
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
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
      <!-- main-panel ends -->
@endsection     
{{-- 
thead >> style external file
js >> add check box with multiple delatation with background color
use font awesome

when edit >> if we want to delete old img then how to delete old image if we want
 --}}