@extends('backend.layouts.master')
@section('title','Products')
@section('content')
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          {{-- card add product--}}
          {{-- card add product--}}
          <div class="card">
            <div class="card-header text-center">
              Manage Products 
            </div>
            {{-- card-body --}}
            <div class="card-body">
               <table class="table table-dark" id="dataTable">
                <thead style=" background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%);">
                <tr>
                  <th>#</th>
                  <th>Product Code</th>
                  <th>Product Title</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($products as $product)
                    <tr>
                      <td>#</td>
                      <td>#PLE{{$product -> id}}</td>
                      <td>{{$product -> title}}</td>
                      <td>{{$product -> price}}</td>
                      <td>{{$product -> quantity}}</td>
                      <td>

                        <a href="{{ route('admin.product.edit',$product -> id)}}" class="btn btn-success">Edit</a>
                      </td>
                      <td>
                        <a href="#deleteModal{{ $product -> id }}" data-toggle="modal" class="btn btn-outline-danger">Delete</a>

                        <!--Delete Modal -->
                        <div class="modal fade" id="deleteModal{{ $product -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Are you sure to delete ?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">
                                
                                <form action="{{ route('admin.product.delete',$product -> id) }}" method="post">
                                  @csrf
                                  <button type="submit" class="btn btn-secondary" >Permanent delete</button>
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
      <!-- main-panel ends -->
@endsection     
