{{-- 
not work >>
2.implement
3.css carefull
4.bootstrap css not work
5.vvi img asset not work here
5.vvi img asset not work here but not get in view
clerify it
 mailto clearify @email at adderss
 invoice to email must be dynamic after maitto:{{ $order->email }}
 --}}
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <title>Order Invoice</title>
  @include('frontend.partsial-link.style')   
   <style>
     .content-wrapper{
      background-color: #FFF;
     }
      .invoice-header{
        padding: 10px 20px 10px 20px;
        background-color: #d2d2d2;
      }
      .invoice-left-top{
            padding-left: 10px;
            border-left: 4px solid orange;
      }
      .site-address{
        line-height: 4px;
      }
      .invoice-right-top{
            padding-right: 20px;
      }
      .invoice-right-top h3{
          color:orange;
      }
      thead{
         background-color: #d2d2d2;
      }
   </style>
 </head>
 <body>
  <div class="content-wrapper">
    <div class="invoice-header">
      <div class="float-left site-logo"><img src="{{ public_path('images/logo.png') }}" alt=""></div>
    <div class="float-right site-address">
      <h4>e-Shop</h4>
      <p> ‎Narayanganj District </p>
      <p> ‎Narayanganj District;Dhaka-1420 </p>
      <p> ‎Email <a href="mailto:johurulhaque.cse@gmail.com">johurulhaque.cse@gmail.com</a> </p>
    </div>  
    <div class="clearfix"></div>      
    </div>
    <div class="invoice-description">
      <div class="invoice-left-top float-left">
        <h6>Invoice to</h6> 
        <h3>{{ $order->name }}</h3>
          <div class="address">
            <p><strong>Address:</strong> {{ $order->shipping_address }}</p>
          </div>
          <p><strong>Orderer Phone no:</strong> {{ $order->phone_no }}</p>
          <p> ‎Email <a href="mailto:johurulhaque.cse@gmail.com">johurulhaque.cse@gmail.com</a>
          </p>
      </div>
    <div class="invoice-right-top float-right">
      <h3> Invoice#{{ $order->id }}</h3>
      <p>{{ $order->created_at }}</p>
    </div>  
    <div class="clearfix"></div>
    </div>
    

        <h3>products</h3>
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
              
            </tr>
          </thead>
          <tbody>
           
            @php $total_price=0;  @endphp
            @foreach ($order->carts as $cart)
            <tr>
              <td>{{ $loop->index+1 }}</td>
              <td>
                  {{ $cart -> product->title }}
              </td>
              <td>
                @if ($cart->product->images ->count() >0)
                <img src="{{ public_path('images/products/'. $cart->product->images ->first()->image)}}" alt="" width="70px">
                @endif
              </td>
              <td>
                {{ $cart -> product->quantity }}
                
              </td>
    
              <td>
                {{ $cart->product->price }}TK
              </td>
              <td>
                @php $total_price +=$cart->product->price * $cart->product_quantity;  @endphp
                {{ $cart->product->price * $cart->product_quantity}}TK
              </td>
              
            </tr>
            @endforeach
            <tr>
              <td colspan="4"></td>
              <td>Discount</td>
              <td colspan="2"><strong>{{ $order->custom_discount }}TK.</strong></td>
            </tr>
            <tr>
              <td colspan="4"></td>
              <td>Shipping cost</td>
              <td colspan="2"><strong>{{ $order->shipping_charge }}TK.</strong></td>
            </tr>
            <tr>
              <td colspan="4"></td>
              <td>Total ammount</td>
              <td colspan="2"><strong>{{ $total_price + $order->shipping_charge - $order->custom_discount }}TK.</strong></td>
            </tr>
          </tbody> 
        </table>
        @endif
        <div class="thanks">
          <h4>Thank you.See you again!!</h4>
        </div>
        <div class="authority float-right">
          <p>----------------------</p>
          <h5>Authority Signature</h5>
        </div>
        <div class="clearfix"></div>
  </div>
 </body>
 </html>

  
