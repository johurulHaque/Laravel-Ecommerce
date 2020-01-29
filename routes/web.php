<?php
// Route::resource('practices', 'PracticeController');
Route::resource('practices','PracticeController');
// practise
// practise
// practise

// Route::get('/create','Frontend\PagesController@practise')->name('reg');
Route::get('/master','Frontend\PagesController@master')->name('reg');
Route::get('/child1','Frontend\PagesController@child1')->name('reg');
Route::get('/child2','Frontend\PagesController@child2')->name('reg');
Route::post('/show','Frontend\PagesController@show');

Route::get('/view','Frontend\PagesController@in')->name('ad');

// Route::resource('photos','PhotoController')->only('index');

// Route::get('/j',function(){
// 	echo 'helo jony';

// });

Route::prefix('prac')
	   ->name('exam.')
	   ->group(function(){
			Route::get('/create/{user}',function(App\Models\Product $user){
			echo $user->title;
			})->name('reg');
			Route::get('/exam','Frontend\PagesController@example')->name('exam');	   		
	   });

















// Route::get('/', 'Frontend\PagesController@index')->name('index');

Route::get('/contact', 'Frontend\PagesController@contact')->name('contact');


/*
| Products Routes
|--------------------------------------------------------------------------
|all routes for our product for frontend
*/
Route::group(['prefix' =>'products'],function(){
	Route::get('/','Frontend\ProductsController@index')->name('products');
	Route::get('/{id}','Frontend\ProductsController@show')->name('product.show');
	// Route::get('/{slug}','Frontend\ProductsController@show')->name('product.show');
	Route::get('/new/search','Frontend\PagesController@search')->name('search');//get request automaticly search or slug nea neba post a deta hoba
	//new na dela slug hisaba count korba then dont work search
	

	// category route
	Route::get('/categories','Frontend\CategoriesController@index')->name('categories.index');//make by slug is better as product slug
	Route::get('/category/{id}','Frontend\CategoriesController@show')->name('categories.show');
});
//user route
Route::group(['prefix' =>'user'],function(){
		Route::get('/token/{token}', 'Frontend\VerificationController@verify')->name('user.verification');
		Route::get('/dashboard', 'Frontend\UsersController@dashboard')->name('user.dashboard');
		Route::get('/profile', 'Frontend\UsersController@profile')->name('user.profile');
		Route::post('/profile/update', 'Frontend\UsersController@profileUpdate')->name('user.profile.update');
});

//cart route
Route::group(['prefix' =>'carts'],function(){
		Route::get('/', 'Frontend\CartsController@index')->name('cart');
		
		Route::post('/store', 'Frontend\CartsController@store')->name('carts.store');
		Route::post('/update/{id}', 'Frontend\CartsController@update')->name('carts.update');
		Route::post('/delete/{id}', 'Frontend\CartsController@destroy')->name('carts.delete');
});
//checkout route
Route::group(['prefix' =>'checkout'],function(){
		Route::get('/', 'Frontend\CheckoutsController@index')->name('checkouts');
		Route::post('/store', 'Frontend\CheckoutsController@store')->name('checkouts.store');
});
/*
| Admin Routes
|--------------------------------------------------------------------------
|all routes for admin for backend
*/
Route::group(['prefix' =>'admin'],function(){
	Route::get('/','Backend\PagesController@index')->name('admin.index');
	//admin login route
	Route::get('/login','Auth\Admin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login/submit','Auth\Admin\LoginController@login')->name('admin.login.submit');
	Route::post('/logout/submit','Auth\Admin\LoginController@logout')->name('admin.logout');

	// product route 
	Route::group(['prefix' =>'/products'],function(){
		Route::get('/','Backend\ProductsController@index')->name('admin.products');
		Route::get('/create','Backend\ProductsController@create')->name('admin.product.create');
		Route::get('/edit/{id}','Backend\ProductsController@edit')->name('admin.product.edit');
		Route::post('/store','Backend\ProductsController@store')->name('admin.product.store');
		Route::post('/edit/{id}','Backend\ProductsController@update')->name('admin.product.update');
		Route::post('/delete/{id}','Backend\ProductsController@delete')->name('admin.product.delete');
	});

	// category route
		Route::group(['prefix' =>'/categories'],function(){
		Route::get('/','Backend\categoriesController@index')->name('admin.categories');
		Route::get('/create','Backend\categoriesController@create')->name('admin.category.create');
		Route::get('/edit/{id}','Backend\categoriesController@edit')->name('admin.category.edit');
		Route::post('/store','Backend\categoriesController@store')->name('admin.category.store');
		Route::post('/edit/{id}','Backend\categoriesController@update')->name('admin.category.update');
		Route::post('/delete/{id}','Backend\categoriesController@delete')->name('admin.category.delete');		
	});

// order route
		Route::group(['prefix' =>'/orders'],function(){
		Route::get('/','Backend\OrdersController@index')->name('admin.orders');
		Route::get('/view/{id}','Backend\OrdersController@show')->name('admin.order.show');
		Route::post('/delete/{id}','Backend\OrdersController@delete')->name('admin.order.delete');		
		Route::post('/completed/{id}','Backend\OrdersController@completed')->name('admin.order.completed');
		Route::post('/paid/{id}','Backend\OrdersController@paid')->name('admin.order.paid');	

		// pdf	
		Route::post('/charge-update/{id}','Backend\OrdersController@chargeUpdate')->name('admin.order.charge');

		Route::get('/invoice/{id}','Backend\OrdersController@generateInvoice')->name('admin.order.invoice');
		
	});

		



	// brand route
		Route::group(['prefix' =>'/brands'],function(){
		Route::get('/','Backend\BrandsController@index')->name('admin.brands');
		Route::get('/create','Backend\BrandsController@create')->name('admin.brand.create');
		Route::get('/edit/{id}','Backend\BrandsController@edit')->name('admin.brand.edit');
		Route::post('/store','Backend\BrandsController@store')->name('admin.brand.store');
		Route::post('/edit/{id}','Backend\BrandsController@update')->name('admin.brand.update');
		Route::post('/delete/{id}','Backend\BrandsController@delete')->name('admin.brand.delete');		
	});
// division route
		Route::group(['prefix' =>'/divisions'],function(){
		Route::get('/','Backend\DivisionsController@index')->name('admin.divisions');
		Route::get('/create','Backend\DivisionsController@create')->name('admin.division.create');
		Route::get('/edit/{id}','Backend\DivisionsController@edit')->name('admin.division.edit');
		Route::post('/store','Backend\DivisionsController@store')->name('admin.division.store');
		Route::post('/edit/{id}','Backend\DivisionsController@update')->name('admin.division.update');
		Route::post('/delete/{id}','Backend\DivisionsController@delete')->name('admin.division.delete');		
	});
	// district route
		Route::group(['prefix' =>'/districts'],function(){
		Route::get('/','Backend\DistrictsController@index')->name('admin.districts');
		Route::get('/create','Backend\DistrictsController@create')->name('admin.district.create');
		Route::get('/edit/{id}','Backend\DistrictsController@edit')->name('admin.district.edit');
		Route::post('/store','Backend\DistrictsController@store')->name('admin.district.store');
		Route::post('/edit/{id}','Backend\DistrictsController@update')->name('admin.district.update');
		Route::post('/delete/{id}','Backend\DistrictsController@delete')->name('admin.district.delete');		
	});
// Slider route
		Route::group(['prefix' =>'/sliders'],function(){
		Route::get('/','Backend\SlidersController@index')->name('admin.sliders');
		Route::post('/store','Backend\SlidersController@store')->name('admin.slider.store');
		Route::post('/edit/{id}','Backend\SlidersController@update')->name('admin.slider.update');
		Route::post('/delete/{id}','Backend\SlidersController@delete')->name('admin.slider.delete');		
	});
	
});
// Authentication
// Authentication
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Api route
//Api route
Route::get('get-district/{id}',function($id){
return json_encode(App\Models\District::where('division_id','=',$id)->get());
});



//LaraBook
//LaraBook
//LaraBook
//LaraBook
Route::get('/basic2', function(){
	return view('LaraBook.laravel.basic2');
})->name('controller');






Route::get('/', function(){
	return view('LaraBook.index');
})->name('laravel');

Route::redirect('/here', '/lara');
Route::get('foo/{id}', function($id){ 
    return Redirect::to($id, 301); 
});
Route::get('/blade', function(){
	return view('LaraBook.frontend');
})->name('blade');

Route::get('/architecture', function(){
	return view('LaraBook.architerture');
})->name('archi');

Route::get('/route', function(){
	return view('LaraBook.route');
})->name('route');



Route::get('/model', function(){
	return view('LaraBook.model');
})->name('model');

Route::get('/database', function(){
	return view('LaraBook.database');
})->name('database');

Route::get('/eloquent', function(){
	return view('LaraBook.eloquent');
})->name('eloquent');

Route::get('/basic1', function(){
	return view('LaraBook.basic1');
})->name('route&request');



Route::get('/security', function(){
	return view('LaraBook.security');
})->name('security');



Route::get('/middleware', function(){
	return view('LaraBook.middleware');
})->name('middleware');

Route::get('/deeper', function(){
	return view('LaraBook.deeper');
})->name('deeper');

Route::get('/testing', function(){
	return view('LaraBook.testing');
})->name('testing');
// command
// command
Route::get('/command', function(){
	return view('LaraBook.command');
})->name('command');





// php
// php
// php
Route::get('/php', function(){
	return view('LaraBook.development.php');
})->name('php');

// mysql
// mysql
// mysql
Route::get('/mysql', function(){
	return view('LaraBook.mysql');
})->name('mysql');



// javascript
// javascript
// javascript
Route::get('/javascript', function(){
	return view('LaraBook.development.javascript');
})->name('javascript');