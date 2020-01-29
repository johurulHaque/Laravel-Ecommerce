{{-- individual product --}}
{{-- individual product --}}
@extends('frontend.layouts.master')
@section('title', $product ->title )
@section('sidebar')
<h4 class="text-center">Available Items</h4>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @php $i = 1 ;@endphp
    @foreach ($product -> images as $image)
    <div class="carousel-item {{ $i==1 ? 'active' : '' }}">
      <img class="d-block w-100" src="{{ asset('images/products/'.$image -> image) }}" alt="First slide">
    </div>
    @php $i++ ;@endphp
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
{{-- category model ar obj ar name that is return be category() in product model --}}
{{-- brand model ar obj ar name that is return be brand() in product model --}} 
{{-- jodi brand ar category na pay then show error --}}
<div class="mt-3">
  <p>Brand: <span class="badge badge-success">{{$product ->brand ->name }}</span> </p>
    <p>Category: <span class="badge badge-success">{{$product ->category ->name }}</span> </p>
    
  
  </div>
</div>
@endsection

@section('carosoul')

<h3>{{ $product -> title }}</h3>
<h5>{{ $product -> price }}Taka
  <span class="badge badge-info">
    {{ $product -> quantity < 1 ? 'stock out for now' : 'There is : ' . $product -> quantity . 'iteam in stock'}}
  </span>
</h5>
<hr>
<div class="product-description">
  {{ $product -> description }}
</div>

<a href=""><img src="{{asset('images/products/'. $image -> image)}}" width="200px" alt=""></a>
@endsection

{{-- @section('content')
<div class="container">
<h3>{{ $product -> title }}</h3>

</div>
@endsection --}}