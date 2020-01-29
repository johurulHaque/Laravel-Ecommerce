{{-- same as products@index --}}
@extends('backend.layouts.master')
@section('title','Divisions')
@push('css')
<style>
.header{
  color: #008080;
}

</style>
@endpush
@section('content')
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          {{-- card add product--}}
          {{-- card add product--}}
          <div class="card">
            <div class="card-header text-center header">
              Manage Division 
            </div>
            {{-- card-body --}}
            {{-- card-body --}}
            <div class="card-body">
               <table class="table table-hover" id="dataTable">
                <thead style=" background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%);">
                <tr>
                  <th>#</th>
                  <th>Division name</th>
                  <th>Division priority</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($divisions as $division)
                    <tr>
                      <td>
                        #
                      </td>
                      <td>{{$division -> name}}</td>
                      <td>{{$division -> priority}}</td>
          
                      <td>
                        <a href="{{ route('admin.division.edit',$division -> id)}}" class="btn btn-primary">Edit</a>
                      <td>
                          <a href="#deleteModal{{ $division -> id }}" data-toggle="modal" class="btn" style="background-color: #B22222;color: white;  ">Delete</a>

                        <!--Delete Modal -->
                        <div class="modal fade" id="deleteModal{{ $division -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete ?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">
                                
                                <form action="{{ route('admin.division.delete',$division -> id) }}" method="post">
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
      @push('css')
        <style>
          .division > thead{
     background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}
        </style>
      @endpush
      @push('js')
        <script>
          
        </script>
      @endpush

      <!-- main-panel ends -->
@endsection     
{{-- 
thead >> style external file
js >> add check box with multiple delatation with background color
use font awesome
 --}}