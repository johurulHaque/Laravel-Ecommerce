{{-- same as products@index --}}
@extends('backend.layouts.master')
@section('title','Orders-Show')
@section('content')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    {{-- card add product--}}
    {{-- card add product--}}
    <div class="card">
      <div class="card-header text-center">
        View order #LE{{ $order->id }}
      </div>
      {{-- card-body --}}
      <div class="card-body">
        {{-- message include            --}}
        <h3>Order Information</h3>
        <div class="row">
          <div class="col-md-6">
            <p><strong>Orderer Name:</strong> {{ $order->name }}</p>
            <p><strong>Orderer Phone no:</strong> {{ $order->phone_no }}</p>
            <p><strong>Orderer Email:</strong> {{ $order->email }}</p>
            <p><strong>Orderer Address:</strong> {{ $order->shipping_address }}</p>
          </div>
          <div class="col-md-6">
            <p><strong>Order Payment Method:</strong> {{ $order->payment->name }}</p>
            <p><strong>Order Payment Transaction:</strong> {{ $order->transaction_id }}</p>
          </div>
        </div>
        <hr>
        <h3>Order Item</h3>
        @if ($order->carts->count()>0)
        <table class="table table-bordered table-stripe">
          <thead>
            <tr>
              <th>No.</th>
              <th>Product title</th>
              <th>Product image</th>
              <th>Product quantity</th>
              <th>Unit price</th>
              <th>Sub total price</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            {{-- not value pass direct access --}}
            {{-- not value pass direct access --}}
            {{-- not value pass direct access --}}
            @php $total_price=0;  @endphp
            @foreach ($order->carts as $cart)
            <tr>
              <td>{{ $loop->index+1 }}</td>
              <td>
                <a href="{{ route('product.show',$cart->product->slug) }}">
                  {{ $cart -> product->title }}
                </a>
              </td>
              <td>
                {{-- 20@11.50 vvi --}}
                @if ($cart->product->images ->count() >0)
                <img src="{{asset('images/products/'. $cart->product->images ->first()->image)}}" alt="" width="70px">
                @endif
              </td>
              <td>
                <form class="form-inline" action="{{ route('carts.update',$cart->id) }}" method="post">
                  @csrf
                  <input type="number" class="form-control" name="product_quantity" value="{{  $cart->product_quantity}}">
                  <button type="submit" class="btn btn-success ml-1">Update</button>
                </form>
              </td>
              <td>
                {{ $cart->product->price }}TK
              </td>
              <td>
                @php $total_price +=$cart->product->price * $cart->product_quantity;  @endphp
                {{ $cart->product->price * $cart->product_quantity}}TK
              </td>
              <td>
                <form class="form-inline" action="{{ route('carts.delete',$cart->id) }}" method="post">
                  @csrf
                  <input type="hidden" name="cart_id">
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
            <tr>
              <td colspan="4"></td>
              <td>Total ammount</td>
              <td colspan="2"><strong>{{ $total_price }}TK.</strong></td>
            </tr>
          </tbody>
        </table>
        @endif
        <hr>
        <form method="post" action="{{ route('admin.order.charge',$order->id) }}">
          @csrf   
          <label for="shipping_charge">Shipping charge</label>
          <input type="number" name="shipping_charge" id="shipping_charge" value="{{ $order->shipping_charge }}">
          <br>
          <label for="custom_discount">Custome discount</label>
          <input type="number" name="custom_discount" id="custom_discount" value="{{ $order->custom_discount }}">
          <br><input type="submit" value="Update" class="btn btn-success">
          <a href="{{ route('admin.order.invoice',$order->id) }}" class="btn btn-info ml-3" target="_blank">Generate Invoice</a>          
        </form>
        <hr>
        <form method="post" action="{{ route('admin.order.completed',$order->id) }}" style="display:inline-block!important" >
          @csrf
          @if ($order->is_completed)
            <input type="submit" value="Cancel order" class="btn btn-danger">
            @else
            <input type="submit" value="Complete order" class="btn btn-success">
          @endif
          
        </form>

        <form method="post" action="{{ route('admin.order.paid',$order->id) }}" style="display:inline-block!important" >
          @csrf
          @if ($order->is_paid)
            <input type="submit" value="Cancel payment" class="btn btn-danger">
            @else
            <input type="submit" value="Paid order" class="btn btn-success">
          @endif
        </form>
      </div>
    </div>
  </div>
</div>
<!-- main-panel ends -->
@endsection