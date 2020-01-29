{{-- same as products@index --}}
@extends('backend.layouts.master')
@section('title','Orders')
@section('content')
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          {{-- card add product--}}
          {{-- card add product--}}
          <div class="card">
            <div class="card-header text-center">
              Manage Orders 
            </div>
            {{-- card-body --}}
            <div class="card-body">
               <table class="table table-hover table-dark" id="dataTable">
                <thead style=" background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%);">
                <tr>
                  <th>#</th>
                  <th>Order ID</th>
                  <th>Order Name</th>
                  <th>Orderer Phone No</th>
                  <th>Order Status</th>
                  <th>View</th>
                  <th>Delete</th>
                </tr>
                </thead>


                <tbody>

                @foreach ($orders as $order)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{$order -> id}}</td>
                      <td>{{$order -> name}}</td>
                      <td>{{$order -> phone_no}}</td>
                      <td>
                        <p>
                          @if ($order->is_seen_by_admin)
                            <button type="button" class="btn btn-success btn-sm">Seen</button>
                            @else
                            <button type="button" class="btn btn-warning btn-sm">Unseen</button>
                          @endif
                        </p>

                        <p>
                          @if ($order->is_completed)
                            <button type="button" class="btn btn-success btn-sm">Completed</button>
                            @else
                            <button type="button" class="btn btn-warning btn-sm">Not Completed</button>
                          @endif
                        </p>

                        <p>
                          @if ($order->is_paid)
                            <button type="button" class="btn btn-success btn-sm">Paid</button>
                            @else
                            <button type="button" class="btn btn-danger btn-sm">Unpaid</button>
                          @endif
                        </p>
                      </td>
                      

                      <td>
                      
                        <a href="{{ route('admin.order.show',$order -> id) }}"class="btn btn-info">View Order</a>
                      </td>
                      <td>
                        <a href="#deleteModal{{ $order -> id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

                        <!--Delete Modal -->
                        <div class="modal fade" id="deleteModal{{ $order -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">
                                
                                <form action="{{ route('admin.order.delete',$order -> id) }}" method="post">
                                  @csrf
                                  <button type="submit" class="btn btn-secondary" >Permanent delete</button>
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