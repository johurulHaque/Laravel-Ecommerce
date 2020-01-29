{{-- include page --}}
{{-- include page --}}
<div class="row">
    @foreach ($products as $product)
    {{-- expr --}}
    
    <div class="col-md-3">
        <div class="card">
            @php $i=1; @endphp
            @foreach ($product ->images as $image)
            {{-- // there was slug instead id.i create by think
            // there was slug instead id.i create by think --}}
            <a class="card-title" href="{{ route('product.show', $product -> id)}}">
                @if ($i>0)
                    <img class="card-img-top feature-img" src="{{asset('images/products/'. $image -> image)}}" alt="{{ $product -> title }}">
                @endif
                
            </a>
            @php $i--; @endphp
            @endforeach
            
            <div class="card-body">
                <h4>
                    {{-- // there was slug instead id.i create bu think
            // there was slug instead id.i create bu think --}}
                    <a class="card-title" href="{{ route('product.show', $product -> id)}}">{{ $product -> title }}</a>
                </h4>
                
                <p class="card-text">{{ $product -> price  }} BDT.</p>
                @include('frontend.pages.product.partsial.cart_button')
            </div>
        </div>
    </div>
    @endforeach
</div>
{{-- pagination --}}
{{-- pagination --}}
{{-- harm throgh categories.show --}}
{{-- <div class="pagination">
    {{ $products ->links() }}
</div --}}