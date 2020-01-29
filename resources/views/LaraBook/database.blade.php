@extends('LaraBook.index')
@section('title','Database')
@section('content')
<h2 id="database" class="text-center"><strong>Database:Getting Started(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#database" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Database:Started</a>
		  <a href="#query" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Query Builder</a>
		  <a href="#pagination" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Pagination</a>
		  <a href="#migrations" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Migrations</a>
		  <a href="#seeding" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Seeding</a>
		  <a href="#redis" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Redis</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
{{--  --}}
<span style="color:#20B2AA;font-size: 17px;"><li><strong>1.Configuration</strong><span class="bg-dark">(!examine)</span></li></span>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*SQLite Configuration</span><span class="bg-dark">(!examine)</span><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Configuration Using URLs</span><span class="bg-dark">(!examine)</span><br><br>

{{--  --}}
{{--  --}}
{{--  --}}
<span style="color:#20B2AA;font-size: 17px;"><li><strong>2.Read & Write Connections</strong><span class="bg-dark">(!examine)</span></li></span>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*The sticky Option</span><span class="bg-dark">(!examine)</span><br><br>
{{--  --}}
<span style="color:#20B2AA;font-size: 17px;"><li><strong>3.Using Multiple Database Connections</strong><span class="bg-dark">(!examine)</span></li></span><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Running Raw SQL Queries</strong></span><br><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Running A Select Query</span><span class="bg-dark">(!examine)</span><br><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Using Named Bindings</span><span class="bg-dark">(!examine)</span><br><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Running An Insert Statement
</span><span class="bg-dark">(!examine)</span><br><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Running An Update Statement</span><span class="bg-dark">(!examine)</span><br><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Running A Delete Statement</span><span class="bg-dark">(!examine)</span><br><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Running A General Statement</span><span class="bg-dark">(!examine)</span><br><br>.

<span style="color: #8A2BE2;font-size: 17px;"><strong>#Listening For Query Events</strong></span><br><br>

<span style="color: #8A2BE2;font-size: 17px;"><strong>#Database Transactions</strong></span><br><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Handling Deadlocks</span><span class="bg-dark">(!examine)</span><br><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Manually Using Transactions</span><span class="bg-dark">(!examine)</span><br><br>
</ul><br>




{{-- ****************************************************************************** --}}
{{-- ****************************************************************************** --}}
{{-- ****************************************************************************** --}}
{{-- table of migration --}}
{{-- table of migration --}}
{{-- table of migration --}}
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- introduction & migration structure --}}
			{{-- introduction & migration structure --}}
			{{-- introduction & migration structure --}}
			<tr class="table-active">		
				<td id="routing" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD	;color: white; font-size: 18px;"><b>#Generating Migrations</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.0.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.1.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white">
					
				</td>
			</tr>


			{{-- running migrations --}}
			{{-- running migrations --}}
			{{-- running migrations --}}
			<tr class="table-active">		
				<td id="routing" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD	;color: white; font-size: 18px;"><b>#Running Migrations</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%;color: white">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.2.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%;color: white">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.3.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white">
					
				</td>
			</tr>


			{{-- table --}}
			{{-- table --}}
			{{-- table --}}
			<tr class="table-active">		
				<td id="Parameters" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Table</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.4.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.5.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>				
			</tr>
			<tr>
				<td class="table-dark" style="width: 25%;color: white">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white">
					
				</td>
			</tr>
			

			{{-- column --}}
			{{-- column --}}
			{{-- column --}}
			<tr class="table-active">		
				<td id="Route" class="text-center" colspan="4"  scope="col" style="background-color:#6A5ACD;color: white; font-size: 18px;"><b># Columns</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.6.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.7.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>				
			</tr>
			<tr>
				<td class="table-success" style="color: white">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.8.png') }} " alt="model"  style="width:550px;height: 760px;">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.9.0.png') }} " alt="model"  style="width:550px;height: 350px;">
				</td><br>

				<td class="table-success">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.9.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>
			</tr>
			<tr>
				<td class="table-dark" style="color;white;width: 25%">
					
				</td>

				<td class="table-dark" style="color;white;width: 25%">
					
				</td>
			</tr>	
			{{-- Column Modifiers --}}
			{{-- Column Modifiers --}}
			{{-- Column Modifiers --}}
			<tr class="table-active">		
				<td id="Route" class="text-center" colspan="4"  scope="col" style="background-color:#6A5ACD;color: white; font-size: 18px;"><b># Column Modifiers</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.0.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.1.png') }} " alt="model"  style="width:550px;height: 760px;">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.2.png') }} " alt="model"  style="width:550px;height: 260px;">
				</td>				
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.3.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.4.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>				
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.5.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.6.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%">
					 
				</td>

				<td class="table-dark" style="width: 25%">
					
				</td>
			</tr>


			{{-- Indexes --}}
			{{-- Indexes --}}
			{{-- Indexes --}}
			<tr class="table-active">		
				<td id="Groups" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Indexes</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.7.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.8.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>				
			</tr>
			
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.9.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration3.0.png') }} " alt="model"  style="width:550px;height: 760px;">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration3.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="color;white;width: 25%">
					
				</td>

				<td class="table-dark" style="color;white;width: 25%">
					
				</td>
			</tr>		
		</tbody>
</table><br><br><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="query" class="text-center"><strong>Query Builder(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#database" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Database:Started</a>
		  <a href="#query" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Query Builder</a>
		  <a href="#pagination" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Pagination</a>
		  <a href="#migrations" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Migrations</a>
		  <a href="#seeding" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Seeding</a>
		  <a href="#redis" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Redis</a>
		</div>
	</div>
</div><br>
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- Query builder--}}
<h1>Welcome to query Builder and eloquent</h1>
<span class="alert alert-info">Query builder at a galance</span><br><br>
<h3 >[{"id":11,"category":"phone","name":"htc","price":150,"created_at":"2019-06-07 20:13:08","updated_at":"2019-06-07 20:13:08"}] (return single row)</h3><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li >[] is declaring an Array:
given, a list of elements held by numeric index.</li>
	<li >{} is declaring a new object:
given, an object with fields with Names and type+value,
some like to think of it as "Associative Array". but are not arrays, in their representation</li>
	<li >var a={name:"abc",age:"14"}; is equivalent to var a= new Object(); and get the valu by a -> name//a -> age
</li>
	<li>You may access each column's value by accessing the column as a property of the object:</li>
</ul>
<p><b>Note:</b>You can use Arrays when you are bothered about the order of elements(of same type) in your collection else you can use objects. In objects the order is not guaranteed.</p> <br>
{{-- Row related--}}
<spna class="alert alert-primary" style="font-size: 18px;">Row related queries</span><br><br>




{{-- query table --}}
{{-- query table --}}
{{-- query table --}}
<table class="table table-hover" style="font-size: 16px;">
	<thead>
		<tr class="table-active">
			<th scope="col" style="width:25%" >Define</th>
			<th scope="col" style="width:25%">Work</th>
			<th scope="col" style="width:25%">Note / Action</th>
			<th scope="col" style="width:25%">Explanation</th>
		</tr>
	</thead>

	<tbody>
		{{-- select --}}
		{{-- select --}}
		{{-- select --}}
		<tr>
			<td colspan="2" style="color: white;background-color:#008080">
				<span style="background-color: #8A2BE2;font-size: 17px;"><b>select >> select column</b></span><br>
				* The SELECT statement allows you to read data from one or more tables. <br>** SELECT instructs MySQL to retrieve data. <br>
				* It is also important to note that the FROM keyword is on a new line. (read & maintain) <br><br><br>

				<span class="text-danger">
					((All are accessed by row wise format))
				</span><br>
				<span class="text-warning">
					1. retrieve data from a single column <br>
					2. retrieve data from a multiple column (with ,) <br>
					3. retrieve data from a all column (with *) <br> 
				</span><br><br><br><br> <hr><hr>


				## <span style="background-color: #8A2BE2;font-size: 17px;"><b>2. Query builder :</b></span><br>
				 $users = <span class="alert alert-danger"> DB::table('users')->get();</span>
				<img class="ml-0" src="{{ asset('images/larabook/laravel/database/1.2.png') }} " alt="model"  style="width: 200px;height: 100px;"><br><br>
				<span>
					Laravel : <br>
					** The get method <span style="background-color: yellow;color:black;font-size: 17px;">returns an Illuminate\Support\Collection</span> containing the results where each result is an instance of the PHP stdClass object. You may access each column's value by accessing the column as a property of the object
				</span>	
			</td>

			<td colspan="2" style="color: white;background-color:#008080" >
				
				## <span style="background-color: #8A2BE2;font-size: 17px;"><b>1. Row query :</b></span><br> $data = <span class="alert alert-danger">DB::select('select * from payments');</span>
				<img class="ml-0" src="{{ asset('images/larabook/laravel/database/1.0.png') }} " alt="model"  style="width: 190px;height: 100px;">
				<span>
					Laravel : <br>
					** The select method will always <span style="background-color: yellow;color:black;font-size: 17px;">return an array of results.</span> Each result within the array will be a PHP stdClass object.
				</span><br><img class="ml-0" src="{{ asset('images/larabook/laravel/database/1.3.png') }} " alt="model"  style="width: 550px;height: 150px;">	<br><br><hr><hr>
			</td>
		</tr>


		{{-- where --}}
		{{-- where --}}
		{{-- where --}}
		<tr>
			<td colspan="2"  style="color: white;background-color:#2F4F4F" >
				<span style="background-color: #8A2BE2;font-size: 17px;"><b>where >>row filter of selected column</b></span><br>
				* WHERE clause in the SELECT statement to filter rows from the result set. <br>
				* The search_condition is a combination of one or more predicates using the logical operator AND, OR and NOT. <br><br>

				<span class="text-danger">
					Besides the SELECT statement, you can use the WHERE clause in the UPDATE or DELETE statement to specify which rows to update or delete.
				</span><br>
				<span class="text-warning">1) WHERE clause with operator</span><br>
					<span class="text-warning">2) WHERE clause with AND operator <br>
					3) WHERE clause with OR operator <br></span>
					EX: WHERE
					    jobtitle = 'Sales Rep' OR 
					    officeCode = 1 <br>
					<span class="text-warning">4) WHERE with BETWEEN operator </span>(range >>EX: where id BETWEEN 1 AND 3)<br> 
					<span class="text-warning">5) WHERE with the LIKE operator </span>(WHERE lastName LIKE '%son')<br> 
					<span class="text-warning">6) WHERE clause with the IN operator (any value in a list</span> >> WHERE id IN (1 , 2, 3))<br>
					<span class="text-warning">7) WHERE clause with the IS NULL operator</span>( WHERE reportsTo IS NULL;) <br>
					<span class="text-warning">8) WHERE clause with comparison operators</span> <br>
					<img class="ml-0" src="{{ asset('images/larabook/laravel/database/1.1.png') }} " alt="model"  style="width: 450px;height: 125px;">
				</span><hr><hr>
			</td>


			<td colspan="2" style="font-size: 16px;background-color:#2F4F4F;color: white;" >
				## <span style="background-color: #8A2BE2;font-size: 17px;"><b>1. Row query :</b></span><br><br>
				$data = <span class="alert alert-danger">DB::select('select * from payments where id=1'); <br><br>
				DB::select('select * from users where name = ?', ['jhon']);<br><br>DB::select('select * from users where name = :name', ['name' => 'jhon']);</span><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/laravel/database/1.0.png') }} " alt="model"  style="width: 450px;height: 150px;"><br><br><br><br><br><br><br><br><br><hr><hr>				
			</td>
		</tr>

		{{-- insert --}}
		{{-- insert --}}
		{{-- insert --}}
		<tr>
			<td colspan="2" class="table-dark" style="color: white;background-color:#008080" >
				<span style="background-color: #8A2BE2;font-size: 17px;"><b>insert >> insert into DB</b></span><br>
				* INSERT statement allows you to insert one or more rows into a table. <br><br>

				<span class="text-danger">
					Besides the SELECT statement, you can use the WHERE clause in the UPDATE or DELETE statement to specify which rows to update or delete.
				</span><br>
				<span class="text-warning">
				    1) simple INSERT<br>
					<span class="text-success">2) Inserting rows ------ using default value</span><br>
					3)  Inserting dates <br>
					4)  Inserting multiple rows <br>
				</span>
			</td>


			<td colspan="2" style="font-size: 16px;background-color:#008080" >
				## $data = <span class="alert alert-danger">DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);</span>
			</td>
		</tr>

		{{-- update --}}
		{{-- update --}}
		{{-- update --}}
		<tr>
			<td colspan="2" class="table-dark" style="color: white;background-color:#2F4F4F" >
				<span style="background-color: #8A2BE2;font-size: 17px;"><b>update >> update into DB</b></span><br>
				<span class="text-danger">
					The UPDATE statement modifies existing data in a table. You can also use the UPDATE statement change values in one or more columns of a single row or multiple rows.
				</span><br>
				<span class="text-warning">
				    1) UPDATE to modify a single column<br>
					2) UPDATE to modify multiple columns<br>
					3) UPDATE to replace string <br>
					3) UPDATE to update rows returned by a SELECT statement <br>
				</span>
			</td>


			<td colspan="2" style="font-size: 16px;background-color:#2F4F4F" >
				## $data = <span class="alert alert-danger">DB::update('update users set votes = 100 where name = ?', <br><br> ['John']);</span>
			</td>
		</tr>

		{{-- delete	--}}
		{{-- delete	--}}
		{{-- delete	--}}
		<tr>
			<td colspan="2" class="table-dark" style="color: white;" >
				<span style="background-color: #8A2BE2;font-size: 17px;"><b>delete >> delete from DB</b></span><br>
				* Notice that the WHERE clause is optional. If you omit the WHERE clause, the DELETE statement will delete all rows in the table. <br>
				<span class="text-danger">
					MySQL DELETE and LIMIT clause . <br>If you want to limit the number of rows to be deleted, you use the LIMIT clause as follows:
				</span>
			</td>


			<td colspan="2" style="font-size: 16px;" >
				## $data = <span class="alert alert-danger">DB::delete('delete from users');</span>
			</td>
		</tr>
		
		{{-- drop --}}
		{{-- drop --}}
		{{-- drop --}}
		<tr>
			<td colspan="2" class="table-dark" style="color: white;" >
				<span style="background-color: #8A2BE2;font-size: 17px;"><b>drop >> drop from DB</b></span><br>
				drop vs delete
				
			</td>


			<td colspan="2" style="font-size: 16px;" >
				## $data = <span class="alert alert-danger">DB::statement('drop table users');</span>
			</td>
		</tr>

		<tr>
			<td colspan="2" class="table-primary">
						
			</td>

			<td colspan="2">
				
			</td>
		</tr>

		<tr class="table-primary">
			<td>model::get(); or <br> model::all();</td>
			<td>[{array obj(my)}] ,$data -> id</td>
			<td>all data from the model ralated table.</td>
			<td>The get method returns where each result is an instance of the PHP stdClass object</td>
		</tr>

		<tr class="table-primary">
			<td>model::get(); or <br> model::all();</td>
			<td>[{array obj(my)}] ,$data -> id</td>
			<td>all data from the model ralated table.</td>
			<td>The get method returns where each result is an instance of the PHP stdClass object</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>First row</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>Certain number of row</td>
			<td></td>
		</tr>
		<tr>
			<td>model::where('id','01')->get();</td>
			<td>[{}] (array obj-my) ,$data -> id</td>
			<td>Selected single row</td>
			<td></td>
		</tr>
		<tr>
			<td>model::where('id', '9')->first();</td>
			<td>{obj} ,$data -> id</td>
			<td>Selected single row</td>
			<td>This method will return a single stdClass object</td>
		</tr>
		<tr>
			<td>model::find($id);</td>
			<td>{obj} ,$data -> id</td>
			<td>Single row by its id column value</td>
			<td>This method will return a row related $id </td>
		</tr>

		<tr>
			<td>model::where('id', '0')->value('price');</td>
			<td>Return single value onle .ex: 500</td>
			<td>Selected single row with single value</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>Selected single row multiple value</td>
			<td></td>
			
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>Selected multiple row</td>
			<td></td>
		</tr>
		
		
		<tr>
			<td>model::count();</td>
			<td>Single numaric value </td>
			<td>Count the number of row exist</td>
			<td></td>
		</tr>
	</tbody>
</table><br>


{{-- column related --}}
<spna class="alert alert-primary" style="font-size: 18px;">Column related queries</span><br><br>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Query</th>
			<th scope="col">how return ,use</th>
			<th scope="col">Action</th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>
	<tbody>
		<tr >
			<td>model::pluck('id');</td>
			<td>[],</td>
			<td>Single selected column</td>	
			
			<td></td>
		</tr>
		<tr>
			<td>model::pluck('id','price');</td>
			<td>{},.....</td>
			<td>You may also specify a custom key column for the returned Collection:</td>
			
			<td></td>
		</tr>
		<tr >
			<td>model::select('price')->get();</td>
			<td>[{}],</td>
			<td>Single selected column</td>
			
			<td></td>
		</tr>

		<tr >
			<td>model::::distinct()->select('name')->get();</td>
			<td>[{}],</td>
			<td>Not duplicate value of that column</td>			
			<td>works on single column only</td>
		</tr>

		<tr >
			<td>model::select('price','id')->get();</td>
			<td>[{}],</td>
			<td>Single multiple column</td>			
			<td></td>
		</tr>

	</tbody>
</table><br>
<h2>pluck() VS select()</h2><br>
{{-- where operation  --}}
<spna class="alert alert-primary" style="font-size: 18px;">where operation('col_name','operator','val')</span><br><br>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Query</th>
			<th scope="col">how return,use</th>
			<th scope="col">Action </th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>model::where('price','>',200)->get();</td>
			<td>[{}],</td>
			<td>return all column(data) & condition on price</td>
			<td></td>
		</tr>
		<tr>
			<td>model::select('id','name')->where('price','>',200)->get();</td>
			<td>[{}],</td>
			<td>return selected column & condition on price</td>
			<td></td>
		</tr>
		<tr>
			<td>model::where('name', 'like', 'h%')->get();</td>
			<td>[{}],</td>
			<td>character start with h</td>
			<td></td>
		</tr>
		<tr>
			<td>model::where([['name','like' ,'j%'],['price', '>', 200]])->get(); (bad)</td>
			<td>[{}],</td>
			<td class="alert alert-danger">multiple column condition</td>
			<td></td>
		</tr>
		<tr>
			<td>model::where('name','like' ,'htc')
                    ->where('price', '>', 100)
                    ->get();</td>
			<td>[{}],</td>
			<td class="alert alert-danger">chaining</td>
			<td></td>
		</tr>
		<tr>
			<td>model::where('category' ,'phone')
                    ->where('price', '>', 100)
                    ->get();</td>
			<td>[{}],</td>
			<td class="alert alert-danger">chaining</td>
			<td></td>
		</tr>
	</tbody>
</table>
<h2 class="alert alert-warning">In every time we can put where condition in whole table or selected column like above two</h2>
{{-- column operation  --}}
<spna class="alert alert-primary" style="font-size: 18px;">Column related operation (aggregate method)</span><br><br>
	<p>By definition, an aggregate function performs a calculation on a set of values and returns a single value. <b> MySQL provides many aggregate functions that include AVG , COUNT , SUM , MIN , MAX , etc. </b>An aggregate function ignores NULL values when it performs calculation except for the COUNT function.</p><br>

<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Query</th>
			<th scope="col">how return ,use</th>
			<th scope="col">Action</th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			
			<td>model::max('price');</td>
			<td>single value return</td>
			<td>Max value of a column</td>
			<td></td>
		</tr>
		<tr>
			
			<td>model::min('price');</td>
			<td>single value return</td>
			<td>Min value of a column</td>
			<td></td>
		</tr>
		<tr>
			
			<td>model::avg('price');</td>
			<td>return a single value</td>
			<td>Average of a column</td>
			<td></td>
		</tr>
		<tr>
			
			<td>model::sum('price');</td>
			<td>return a single value</td>
			<td>Sum of a column</td>
			<td></td>
		</tr>
	</tbody>
</table><br>
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}
{{-- customize --}}

{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Retrieving Results</strong></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Retrieving All Rows From A Table</span><span class="bg-dark">(!examine)</span><br><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Retrieving A Single Row / Column From A Table</span><span class="bg-dark">(!examine)</span><br><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Retrieving A List Of Column Values</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;" ><li class="ml-4"><strong>Chunking Results</strong><span class="bg-dark">(!examine)</span></li></span><br>
	
	<span style="color:#20B2AA;" ><li class="ml-4"><strong>Aggregates</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Determining If Records Exist</span><span class="bg-dark">(!examine)</span><br><br>
</ul><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Selects</strong></span><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Specifying A Select Clause</span><span class="bg-dark">(!examine)</span><br><br>

{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Raw Expressions</strong></span><br>
<span style="color:#20B2AA;font-size: 17px;"><li class="ml-4"><strong>1.Raw Methods</strong><span class="bg-dark">(!examine)</span></li></span><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Joins</strong></span><br><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Inner Join Clause</span><span class="bg-dark">(!examine)</span><br><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Left Join / Right Join Clause</span><span class="bg-dark">(!examine)</span><br><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Cross Join Clause</span><span class="bg-dark">(!examine)</span><br><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Advanced Join Clauses</span><span class="bg-dark">(!examine)</span><br><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Sub-Query Joins</span><span class="bg-dark">(!examine)</span><br><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Unions</strong></span><br><br>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Where Clauses</strong></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Simple Where Clauses</span><span class="bg-dark">(!examine)</span><br><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Or Statements</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Additional Where Clauses</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 14px" class="ml-4">~whereNotBetween /orWhereNotBetween</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 14px" class="ml-4">~whereBetween / orWhereBetween</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 14px" class="ml-4">~whereIn / whereNotIn / orWhereIn / orWhereNotIn</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 14px" class="ml-4">~whereNull / whereNotNull / orWhereNull / orWhereNotNull</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 14px" class="ml-4">~whereDate / whereMonth / whereDay / whereYear / whereTime</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 14px" class="ml-4">~whereColumn / orWhereColumn
	</span><span class="bg-dark">(!examine)</span><br><br>

	<span  style="color:#20B2AA;"><li class="ml-4"><strong>Parameter Grouping</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span  style="color:#20B2AA;"><li class="ml-4"><strong>Where Exists Clauses</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span  style="color:#20B2AA;"><li class="ml-4"><strong>JSON Where Clauses</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>

{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Ordering, Grouping, Limit,& Offset</strong></span><br>
<span style="color:#20B2AA;font-size: 14px" class="ml-4">~orderBy</span><span class="bg-dark">(!examine)</span><br>
<span style="color:#20B2AA;font-size: 14px" class="ml-4">~latest / oldest</span><span class="bg-dark">(!examine)</span><br>
<span style="color:#20B2AA;font-size: 14px" class="ml-4">~inRandomOrder</span><span class="bg-dark">(!examine)</span><br>
<span style="color:#20B2AA;font-size: 14px" class="ml-4">~groupBy / having</span><span class="bg-dark">(!examine)</span><br>
<span style="color:#20B2AA;font-size: 14px" class="ml-4">~skip / take</span><span class="bg-dark">(!examine)</span><br><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Conditional Clauses</strong></span><br><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Inserts</strong></span><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Auto-Incrementing IDs</span><span class="bg-dark">(!examine)</span><br><br>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
	<span style="color: #8A2BE2;font-size: 17px;"><strong>#Update</strong></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Update Or Insert</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li><strong>Updating JSON Columns</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Increment & Decrement</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>

<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Deletes</strong></span><br><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Debugging</strong></span><br><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Pessimistic Locking</strong></span><br><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="pagination" class="text-center"><strong>Pagination(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#database" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Database:Started</a>
		  <a href="#query" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Query Builder</a>
		  <a href="#pagination" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Pagination</a>
		  <a href="#migrations" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Migrations</a>
		  <a href="#seeding" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Seeding</a>
		  <a href="#redis" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Redis</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Basic Usage</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Paginating Query Builder Results</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*"Simple Pagination"</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Paginating Eloquent Results</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Manually Creating A Paginator</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
	<span style="color: #8A2BE2;font-size: 17px;"><strong>#Displaying Pagination Results</strong></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Customizing The Paginator URI</span><span class="bg-dark">(!examine)</span><br><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Appending To Pagination Links</span><span class="bg-dark">(!examine)</span><br><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Adjusting The Pagination Link Window</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Converting Results To JSON</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Customizing The Pagination View
</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Paginator Instance Methods</strong></span><br><br>

{{--  --}}
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="migrations" class="text-center"><strong>Migrations(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#database" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Database:Started</a>
		  <a href="#query" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Query Builder</a>
		  <a href="#pagination" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Pagination</a>
		  <a href="#migrations" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Migrations</a>
		  <a href="#seeding" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Seeding</a>
		  <a href="#redis" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Redis</a>
		</div>
	</div>
	<div class="col-md-10">
	{{-- methode & helpers table --}}
	{{-- methode & helpers table --}}
	{{-- methode & helpers table --}}	
	{{-- methode & helpers table --}}	
	{{-- methode & helpers table --}}	
	<table class="table table-hover" style="font-size:17px">
		<tbody>
			<tr>
				<td class="table-dark" style="color:white;width: 25%"></td>		
				<td class="table-dark" colspan="3" style="color:white;">Method that laravel provide in Route Facade && <span style="color: #DC143C;">Helper method</span></td>
			</tr>
			<tr>			
				<td class="table-dark" style="color:white;width: 25%">Schema method</td>
				<td class="table-dark" style="color:white;width: 25%"></td>
				<td class="table-dark" style="color:white;width: 25%"></td>
				<td class="table-dark" style="color:white;width: 25%"></td>
			</tr>

			<tr>
				<td>
					<span style="color:#0000CD;"><b>Schema::create()</b></span><br>Create table structure to DB .<br><br>

					<span style="color:	#0000CD	;"><b> Schema::drop / dropIfExists('table_name');</b></span><br>Drop table structure from DB .
				</td>

				<td>
					<span style="color:	#0000CD	;"><b>Schema::rename('from','to');</b></span><br>For rename DB table <br>
					<span style="color: #DC143C;"><b>Must do  $table->dropColumn('col_name'); on down()</b>;</span>
				</td>

				<td>
					<span style="color:#0000CD;"><b>Route::verb()->where()</b></span><br>Local Reg constrant <br><br><br>

					<span style="color:#0000CD;"><b>Route::pattern()</b></span><br>Global Reg constrant<br>
					<span style="color: #DC143C;"><b>app(//$router)</b></span><br>The app function returns the service container instance //($router instance)</td>

				<td>
					<span style="color:#0000CD	;"><b>Route::verb()->name()</b></span><br>For naming the route ((url)) <br><br><span style="color:#0000CD;"><b>if($request-><span style="color: #DC143C;">route()->named('routename')</span>)</b></span><br>Inspection current route 
				</td>
			</tr>
			

			<tr>
				<td class="table-dark" style="color:white"></td>
				<td class="table-dark" style="color:white"></td>
				<td class="table-dark" style="color:white"></td>
				<td class="table-dark" style="color:white"></td>
			</tr>
		</tbody>
	</table>
	</div>
</div><br>
{{--  --}}
{{--  --}}
{{--  --}}
<h1>Migration at a galance((((((should update))))))</h1>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li class="alert alert-success">Migration that create table structure.</li>
	<li class="alert alert-danger">Every operation on table (del/update/edit) must do through different migration file.</li>
	<li class="alert alert-success">IF we do not need crate & update col then specify false in tha model.</li>
</ul>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
{{--  --}}

<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Generating Migrations</strong></span><br><br>

{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Migration Structure</strong></span><br><br>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
	<span style="color: #8A2BE2;font-size: 17px;"><strong>#Running Migrations</strong></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Forcing Migrations To Run In Production</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Rolling Back Migrations</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Rollback & Migrate In Single Command</span><span class="bg-dark">(!examine)</span><br><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Drop All Tables & Migrate</span><span class="bg-dark">(!examine)</span><br><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Tables</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Creating Tables</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Checking For Table / Column Existence</span><span class="bg-dark">(!examine)</span><br><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Database Connection & Table Options</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Renaming / Dropping Tables</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Renaming Tables With Foreign Keys
	</span><span class="bg-dark">(!examine)</span><br><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Columns</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Creating Columns</strong><span class="bg-dark">(!examine)</span></li></span>
	{{-- column --}}
	{{-- column --}}
	{{-- column --}}
	<span style="color:#20B2AA;font-size: 14px" class="ml-4">~Available Column Types</span><span class="bg-dark">(!examine)</span><br>
	
  <h3>Numeric</h3>
  <table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Data type(+,-) <span style="font-size: 1em; color: Tomato;"><i class="fas fa-angle-double-right"></i></span></th>
			<th scope="col">With P.K</th>
			<th scope="col">Unsigned</th>
			<th scope="col">Digit(Up to)</th>
			<th scope="col">size(byte)</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-primary">
			<td>$table->tinyInteger('votes');</td>
			<td>$table->tinyIncrements('id');</td>
			<td>$table->unsignedTinyInteger('votes');</td>
			<td>4</td>
			<td>1</td>
		</tr>
		<tr class="table-danger">
			<td>$table->smallInteger('votes');</td>
			<td>$table->smallIncrements('id');</td>
			<td>$table->unsignedSmallInteger('votes');</td>
			<td>5</td>
			<td>2</td>
		</tr><tr class="table-primary">
			<td>$table->mediumInteger('votes');</td>
			<td>$table->mediumIncrements('id');</td>
			<td>$table->unsignedMediumInteger('votes');</td>
			<td>9</td>
			<td>3</td>
		</tr><tr class="table-danger">
			<td>$table->integer('votes');</td>
			<td>$table->increments('id');</td>
			<td>$table->unsignedInteger('votes');</td>
			<td>11</td>
			<td>4</td>
		</tr>
		<tr class="table-primary">
			<td>$table->bigInteger('votes');</td>
			<td>$table->bigIncrements('id');</td>
			<td>$table->unsignedBigInteger('votes');</td>
			<td>20</td>
			<td>8</td>
		
	</tbody>
</table>
<br>
{{-- not be unsigned --}}
<h3>Can not be unsigned</h3>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Data type <span style="font-size: 1em; color: Tomato;"><i class="fas fa-angle-double-right"></i></span></th>
			<th scope="col">Explanation</th>
			<th scope="col">Size(byte)</th>	
		</tr>
	</thead>
	<tbody>
		<tr class="table-primary">
			<td>$table->decimal('amount', M, D);</td>
			<td>M->1-65,D->0-30</td>
			<td>1</td>
		</tr>
		<tr class="table-primary">
			<td>$table->unsignedDecimal('amount', 8, 2);</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-warning">
			<td>$table->float('amount', M, D);</td>
			<td>M=total & D= digit after point </td>
			<td>4</td>
		</tr>
		</tr><tr class="table-primary">
			<td>$table->double('amount', M, D);</td>
			<td></td>
			<td>8</td>
		</tr>
	</tbody>
</table><br>

{{-- non binary string --}}
<h3>Non binary string</h3>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Datatype</th>
			<th scope="col">Range</th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-primary">
			<td>$table->char('name', 100);</td>
			<td>0to255</td>
			<td>optional length</td>
		</tr>
		<tr class="table-info">
			<td>$table->string('name', 100);</td>
			<td>1-255</td>
			<td>optional length</td>
		</tr>
		<tr class="table-primary">
			<td>$table->text('description');</td>
			<td>up to 65,535</td>
			<td></td>
		</tr>
		<tr class="table-info">
			<td>$table->mediumText('id');</td>
			<td>1crs+</td>
			<td></td>
		</tr>
		<tr class="table-primary">
			<td>$table->longText('description');</td>
			<td>4GB (4crs+)</td>
			<td></td>
		</tr>
		<tr class="table-info">
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="table-primary">
			<td>$table->enum('level', ['easy', 'hard']);</td>
			<td></td>
			<td>chose the value from option</td>
		</tr>
	</tbody>
</table>
<span>Note for enum:</span>
<ul>
	<li>A string can have only one value</li>
	<li>Each col value may be assigned one enumeration member</li>
	<li>If a value insert that in not in enum list .Blank value will be inserted.</li>
</ul>
<br>

{{-- binary --}}
<h3>Binary</h3>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Datatype</th>
			<th scope="col">Range</th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-primary">
			<td>$table->boolean('confirmed');</td>
			<td></td>
			<td>0=false & non-zero=True/BOOLEAN equivalent column.</td>
		</tr>
		<tr class="table-danger">
			<td>$table->binary('data');</td>
			<td>Upto 255 characters</td>
			<td>binary string/BLOB equivalent column.</td>
		</tr>
		
	</tbody>
</table>
<p>BOLB-A Binary Large OBject (BLOB) is a collection of binary data stored as a single entity in a database management system. Blobs are typically images, audio or other multimedia objects, though sometimes binary executable code is stored as a blob.</p><br>
{{-- date-time --}}
<h3>Date & Time</h3>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Datatype</th>
			<th scope="col">Size(byte)</th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-primary">
			<td>$table->date('created_at');	</td>
			<td>3</td>
			<td>YYYY-MM-DD</td>
		</tr>
		<tr class="table-primary">
			<td>$table->dateTime('created_at');</td>
			<td>8</td>
			<td>YYYY-MM-DD HH:MM:SS</td>
		</tr>
		<tr class="table-primary">
			<td>$table->dateTimeTz('created_at');</td>
			<td></td>
			<td>with timzone</td>
		</tr>
		<tr class="table-danger">
			<td>$table->time('sunrise');</td>
			<td>3</td>
			<td>HH:MM:SS</td>
		</tr>
		<tr class="table-danger">
			<td>$table->timeTz('sunrise');</td>
			<td></td>
			<td>with timeZone</td>
		</tr>
		<tr class="table-primary">
			<td>$table->timestamp('added_on');</td>
			<td></td>
			<td>YYYY-MM-DD HH:MM:SS</td>
		</tr>
		<tr class="table-primary">
			<td>$table->timestampTz('added_on');</td>
			<td></td>
			<td>with timezone</td>
		</tr>
		<tr class="table-danger">
			<td>$table->nullableTimestamps();</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->timestamps();</td>
			<td></td>
			<td>YYYY-MM-DD HH:MM:SS</td>
		</tr>
		<tr class="table-danger">
			<td>$table->timestampsTz();</td>
			<td></td>
			<td>with timezone</td>
		</tr>
		<tr class="table-info">
			<td>$table->year('birth_year');</td>
			<td>$table->rememberToken();</td>
			<td>Adds a nullable remember_token VARCHAR(100) equivalent column</td>
		</tr>
	</tbody>
</table>
<span>Note for timestamps:</span>
<ul>
	<li>add nullable created-at and updated-at column</li>
</ul>
<span>Note for timestamp:</span>
<ul>
	<li>Autometic initilize & updating current time </li>
	<li>update when a row get create or modified</li>
	<li>based upon internal clock</li>
</ul><br>
{{-- others --}}
{{-- others --}}
{{-- others --}}
<h3>Others</h3>
<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Datatype</th>
			<th scope="col">Range</th>
			<th scope="col">Explanation</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-primary">
			<td>$table->uuid('id');	</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->softDeletes();</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->softDeletesTz();</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->set('flavors', ['strawberry', 'vanilla']);</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->rememberToken();</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->polygon('positions');</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->point('position');</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->multiPolygon('positions');</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->nullableMorphs('taggable');	</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->multiPoint('positions');</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->lineString('positions');</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->multiLineString('positions');</td>
			<td>later</td>
			<td>later</td>
		</tr><tr class="table-danger">
			<td>$table->morphs('taggable');</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->macAddress('device');</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->jsonb('options');</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->json('options');	</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->ipAddress('visitor');</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->geometry('positions');</td>
			<td>later</td>
			<td>later</td>
		</tr>
		<tr class="table-danger">
			<td>$table->geometryCollection('positions');</td>
			<td>later</td>
			<td>later</td>
		</tr>
		
	</tbody>
</table><br><br>
{{--  --}}
{{--  --}}
{{--  --}}
<span style="color:#20B2AA;"><li class="ml-4"><strong>[[[[[[Column Modifiers</strong><span class="bg-dark">(!examine)</span></li></span>
	<table class="table table-hover">
	<thead>
		<tr class="table-active">
			<th scope="col">Modifier</th>
			<th scope="col">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-primary">
			<td>->comment('my comment')</td>
			<td>Add a comment to a column (MySQL/PostgreSQL)</td>
		</tr>
		
		<tr class="table-info">
			<td>->nullable($value = true)</td>
			<td>Allows (by default) NULL values to be inserted into the column (my-other wise show error)</td>
		</tr>

		<tr class="table-info">
			<td>->default($value)</td>
			<td>Specify a "default" value for the column</td>
		</tr>
	</tbody>
</table><br>
<h2>Indexes($table->index('state'))</h2>
<ul>
	<li>inorder to fastest result when searching through that particular col</li>
	<li>when DB table make then we make a certain col index if we plan for future</li>
	<li>index queckly find the field or field of data without scan the whole table</li>
</ul>
<h2>->unique() is not duplicate]]]]]]]should chech for srcor update</h2><br><br>
{{--  --}}
{{--  --}}
{{--  --}}

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Modifying Columns</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 14px" class="ml-4">~Prerequisites</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 14px" class="ml-4">~Updating Column Attributes</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 14px" class="ml-4">~Renaming Columns</span><span class="bg-dark">(!examine)</span><br>


	<span style="color:#20B2AA;"><li class="ml-4"><strong>Dropping Columns</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;font-size: 14px" class="ml-4">~Available Command Aliases</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Indexes</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Creating Indexes</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Available Index Types</span><span class="bg-dark">(!examine)</span><br><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Index Lengths & MySQL / MariaDB
	</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Renaming Indexes</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Dropping Indexes</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Foreign Key Constraints</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>



{{-- ****************************************************************************** --}}
{{-- ****************************************************************************** --}}
{{-- ****************************************************************************** --}}
{{-- table of migration --}}
{{-- table of migration --}}
{{-- table of migration --}}
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- introduction & migration structure --}}
			{{-- introduction & migration structure --}}
			{{-- introduction & migration structure --}}
			<tr class="table-active">		
				<td id="routing" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD	;color: white; font-size: 18px;"><b>#Generating Migrations</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.0.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.1.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white">
					
				</td>
			</tr>


			{{-- running migrations --}}
			{{-- running migrations --}}
			{{-- running migrations --}}
			<tr class="table-active">		
				<td id="routing" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD	;color: white; font-size: 18px;"><b>#Running Migrations</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%;color: white">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.2.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%;color: white">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.3.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white">
					
				</td>
			</tr>


			{{-- table --}}
			{{-- table --}}
			{{-- table --}}
			<tr class="table-active">		
				<td id="Parameters" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Table</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.4.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.5.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>				
			</tr>
			<tr>
				<td class="table-dark" style="width: 25%;color: white">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white">
					
				</td>
			</tr>
			

			{{-- column --}}
			{{-- column --}}
			{{-- column --}}
			<tr class="table-active">		
				<td id="Route" class="text-center" colspan="4"  scope="col" style="background-color:#6A5ACD;color: white; font-size: 18px;"><b># Columns</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.6.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.7.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>				
			</tr>
			<tr>
				<td class="table-success" style="color: white">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.8.png') }} " alt="model"  style="width:550px;height: 760px;">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.9.0.png') }} " alt="model"  style="width:550px;height: 350px;">
				</td><br>

				<td class="table-success">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration1.9.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>
			</tr>
			<tr>
				<td class="table-dark" style="color;white;width: 25%">
					
				</td>

				<td class="table-dark" style="color;white;width: 25%">
					
				</td>
			</tr>	
			{{-- Column Modifiers --}}
			{{-- Column Modifiers --}}
			{{-- Column Modifiers --}}
			<tr class="table-active">		
				<td id="Route" class="text-center" colspan="4"  scope="col" style="background-color:#6A5ACD;color: white; font-size: 18px;"><b># Column Modifiers</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.0.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.1.png') }} " alt="model"  style="width:550px;height: 760px;">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.2.png') }} " alt="model"  style="width:550px;height: 260px;">
				</td>				
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.3.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.4.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>				
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.5.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.6.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%">
					 
				</td>

				<td class="table-dark" style="width: 25%">
					
				</td>
			</tr>


			{{-- Indexes --}}
			{{-- Indexes --}}
			{{-- Indexes --}}
			<tr class="table-active">		
				<td id="Groups" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Indexes</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.7.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.8.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>				
			</tr>
			
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration2.9.png') }} " alt="model"  style="width:550px;height: 760px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration3.0.png') }} " alt="model"  style="width:550px;height: 760px;">
					<img class="ml-0" src="{{ asset('images/larabook/database/migration/migration3.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="color;white;width: 25%">
					
				</td>

				<td class="table-dark" style="color;white;width: 25%">
					
				</td>
			</tr>


			<tr>
				<td class="table-dark" style="width: 25%;color: white">
					<span style="color: white;" class="bg-success">Points of key </span><br>
					1. A route defines an entry point into your application. <br>can include some extra configuration – like a name, middleware group, and <span class="text-warning">parameters to extract.</span> <br><br>
					


					<span style="color: white;" class="bg-info">Usage & Practise</span>
					<span style="color:#87CEEB;font-size: 22px"><br><b>----->>>>>>>(#Basic Routing)</b></span><br>
				
				</td>

				<td class="table-dark" style="width: 25%;color: white">
					<span style="color: white;" class="bg-danger">Exception</span>
					<span style="color:#87CEEB;font-size: 22px"><br><b>----->>>>>>>(#Basic Routing)</b></span><br>
					<span class="text-warning" style="font-size: 18px;color: black"> IF we need same URI as multiple HTTp verbs then</span><br><br>
		
					
				</td>
			</tr>
		

			<tr>
				<td class="table-dark" style="width: 25%;color: white">
					<span style="color: white;" class="bg-secondary">Dictionary</span><br>
					<span style="color:#ADFF2F">Agnostic </span>(অজ্ঞেয়বাদী) <br>
					<span style="color:#ADFF2F">Stub </span>(অসম্পূর্ণ) <br>


					<br><br><br>
					



					<span style="color: white;" class="bg-secondary">Explanation</span>
					<br>
					<b><span style="color:#ADFF2F">Database & Schema</span></b><br> Database is a collection of facts or information about the considered object. <br><br>On the other hand, Schema is a structural representation of the entire database.<br><br>
					
					
				</td>

				<td class="table-dark" style="width: 25%;color: white">
					<b><span style="color:#ADFF2F">Routing</span></b><br>Routing in Laravel allows you to route all your application requests to its appropriate controller. <br><br>
					

				</td>
			</tr>		
		</tbody>
</table><br><br><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="seeding" class="text-center"><strong>Seeding(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#database" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Database:Started</a>
		  <a href="#query" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Query Builder</a>
		  <a href="#pagination" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Pagination</a>
		  <a href="#migrations" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Migrations</a>
		  <a href="#seeding" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Seeding</a>
		  <a href="#redis" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Redis</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Writing Seeders</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Using Model Factories</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Calling Additional Seeders</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Running Seeders</strong></span><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Forcing Seeders To Run In Production
</span><span class="bg-dark">(!examine)</span><br><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="redis" class="text-center"><strong>Redis(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#database" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Database:Started</a>
		  <a href="#query" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Query Builder</a>
		  <a href="#pagination" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Pagination</a>
		  <a href="#migrations" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Migrations</a>
		  <a href="#seeding" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Seeding</a>
		  <a href="#redis" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Redis</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Introduction</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Configuration</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Configuring Clusters</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Predis</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>PhpRedis</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
	<span style="color: #8A2BE2;font-size: 17px;"><strong>#Interacting With Redis</strong></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Using Multiple Redis Connections</span><span class="bg-dark">(!examine)</span><br><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Pipelining Commands</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul>

<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Pub / Sub</strong></span><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Wildcard Subscriptions</span><span class="bg-dark">(!examine)</span><br><br>

 
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
@endsection
