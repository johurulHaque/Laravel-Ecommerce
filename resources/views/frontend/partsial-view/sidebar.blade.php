<!--slider_top_left_part-->
<!--slider_top_left_part-->
<div class="list-group">
	@foreach (App\Models\Category::orderBy('name','asc') -> where('parent_id',NULL)->get() as $parent)
	<a href="#main-{{ $parent -> id }}" class="list-group-item list-group-item-action" data-toggle="collapse">
		<img src="{{ asset('images/categories/'.$parent -> image) }}" width="60px" height="30px" alt="" style="padding-right: 15px;">{{ $parent -> name }}
	</a>


	<div class="collapse" id="main-{{ $parent -> id }}" >
		<div class="child-row">
			@foreach (App\Models\Category::orderBy('name','asc') -> where('parent_id',$parent -> id)->get() as $child)
		
		<a href="{{ route('categories.show',$child -> id) }}" class="list-group-item list-group-item-action">
		<img src="{{ asset('images/categories/'.$child -> image) }}" width="56px" height="23px" alt="" style="padding-right: 15px;">{{ $child -> name }}
	</a>
		@endforeach	
		</div>
		
	</div>	
	
	@endforeach
</div>

{{-- 

style & image size >> external file

style side bar when active>>>>
 --}}