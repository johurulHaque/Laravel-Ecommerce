@extends('backend.layouts.master')
@section('content')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
        <div class="intro">
        <div class="intro_first">
            <img class="img-xs rounded-circle" src="/images/faces/face4.jpg" alt="">
            <br />
            <h3 style="font-weight: bold;text-align: center;">John Dee</h3>
            <p style="color:#1CB949;text-align: center;font-weight: bold;">Founder and CEO</p><br />
            <div class="intro_first_para">
                <p>Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
            </div>

        </div>

        <div class="intro_second">

            <img class="img-xs rounded-circle" src="/images/faces/face4.jpg" alt="">
            <br />
            <h3 style="font-weight: bold;text-align: center;">David Smith</h3>
            <p style="color:#1CB949;text-align: center;font-weight: bold;">Crative Director</p><br />
            <div class="intro_second_para">
                <p>Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
            </div>

        </div>

        <div class="intro_third">
            <img class="img-xs rounded-circle" src="/images/faces/face4.jpg" alt="">
            <br />
            <h3 style="font-weight: bold;text-align: center;">Ema Watson</h3>
            <p style="color:#1CB949;text-align: center;font-weight: bold;">Designer</p><br />
            <div class="intro_third_para">
                <p>Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
            </div>

        </div>

  </div>
</div>
@endsection
{{-- do it after complete project --}}
{{-- do it after complete project --}}
{{-- do it after complete project --}}
{{--           <div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-cube text-danger icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="card-text text-right">Total Revenue</p>
            <div class="fluid-container">
              <h3 class="card-title font-weight-bold text-right mb-0">$65,650</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-receipt text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="card-text text-right">Orders</p>
            <div class="fluid-container">
              <h3 class="card-title font-weight-bold text-right mb-0">3455</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3">
          <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-poll-box text-teal icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="card-text text-right">Sales</p>
            <div class="fluid-container">
              <h3 class="card-title font-weight-bold text-right mb-0">5693</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-account-location text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="card-text text-right">Employees</p>
            <div class="fluid-container">
              <h3 class="card-title font-weight-bold text-right mb-0">246</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4">Targets</h5>
        <canvas id="dashoard-area-chart" height="100px"></canvas>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4">Orders</h5>
        <div class="table-responsive">
          <table class="table center-aligned-table">
            <thead>
              <tr>
                <th class="border-bottom-0">Order No</th>
                <th class="border-bottom-0">Product Name</th>
                <th class="border-bottom-0">Purchased On</th>
                <th class="border-bottom-0">Shipping Status</th>
                <th class="border-bottom-0">Payment Method</th>
                <th class="border-bottom-0">Payment Status</th>
                <th class="border-bottom-0"></th>
                <th class="border-bottom-0"></th>
                <th class="border-bottom-0"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>034</td>
                <td>Iphone 7</td>
                <td>12 May 2017</td>
                <td>Dispatched</td>
                <td>Credit card</td>
                <td><label class="badge badge-teal">Approved</label></td>
                <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a></td>
              </tr>
              <tr>
                <td>035</td>
                <td>Galaxy S8</td>
                <td>15 May 2017</td>
                <td>Dispatched</td>
                <td>Internet banking</td>
                <td><label class="badge badge-warning">Pending</label></td>
                <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a></td>
              </tr>
              <tr>
                <td>036</td>
                <td>Amazon Echo</td>
                <td>17 May 2017</td>
                <td>Dispatched</td>
                <td>Credit card</td>
                <td><label class="badge badge-teal">Approved</label></td>
                <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a></td>
              </tr>
              <tr>
                <td>037</td>
                <td>Google Pixel</td>
                <td>17 May 2017</td>
                <td>Dispatched</td>
                <td>Cash on delivery</td>
                <td><label class="badge badge-danger">Rejected</label></td>
                <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a></td>
              </tr>
              <tr>
                <td>038</td>
                <td>Mac Mini</td>
                <td>19 May 2017</td>
                <td>Dispatched</td>
                <td>Debit card</td>
                <td><label class="badge badge-teal">Approved</label></td>
                <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  --}}
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->