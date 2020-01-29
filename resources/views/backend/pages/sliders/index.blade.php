{{-- same as products@index --}}
@extends('backend.layouts.master')
@section('title','Sliders')
@section('content')
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          {{-- card add product--}}
          {{-- card add product--}}
          <div class="card">
            <div class="card-header text-center">
              Manage Sliders
            </div>
            {{-- card-body --}}
            <div class="card-body">
               <table class="table table-hover" id="dataTable">
                <thead style=" background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%);">
                <tr>
                  <th>#</th>
                  <th>Slider Title</th>
                  <th>Slider Image</th>
                  <th>Slider Priority</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($sliders as $slider)
                    <tr>
                      <td>#</td>
                      <td>{{$slider -> title}}</td>
                      <td>{{$slider -> image}}</td>
                      <td>{{$slider -> priority}}</td>
          
                      <td>
                        <a href="" class="btn btn-success">Edit</a>
                      </td>
                      <td>
                        <a href="#deleteModal{{ $slider -> id }}" data-toggle="modal" class="btn btn-outline-danger">Delete</a>

                        <!--Delete Modal -->
                        <div class="modal fade" id="deleteModal{{ $slider -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete ?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">
                                
                                <form action="{{ route('admin.slider.delete',$slider -> id) }}" method="post">
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
 --}} 