@extends('LaraBook.index')
@section('title','php')
@section('content')
@include('LaraBook.partsial.php_dropdown')<br>
<p>
	1. self vs this <br>
	2.value pass by reference <br>
	3.reference variable in detail<br>
	3. how to add date function +6 days after <br>
	4. isset vs empty <br>
	5.fgetc() ?? <br>
	6.callable type declaration <br>
	7.htmlspecila() not word as mention <br>
	8. contructor in private?? <br>
	9. xss test in hyvor <br>
	10. undefined var such form field .null  isset example

</p>
<ul>
	<li>w3 : with filter ,filter adv >>></li>
	<li>tutorial : PHP - Web Concepts ,file inclusion ,file i/o >>>>> (fun ,form done)</li>
	<li>republic : advance >>>(form done)</li>
	<li>hyvor : php in html >>>(form done)</li>
</ul>
<h4 style="background-color: #0000FF;color:white;" id="php" class="text-center" style="background-color: #0000FF;color:white;"><strong>PHP <br></strong> <em>(A PHP script is executed on the server, and the plain HTML result is sent back to the browser.)</em></h4>

<div class="row">
	<div class="col-md-5">
		<br><img class="ml-1" src="{{ asset('images/larabook/php/php.jpg') }} " alt="model"  style="width: 500px;height: 350px;"> <br><br>	
	</div>
	<div class="col-md-5">
		<br><img class="ml-4" src="{{ asset('images/larabook/php/php1.jpg') }} " alt="model"  style="width: 500px;height: 350px;"> <br><br>
	</div>
</div>


<ul style="list-style-type:decimal;font-size: 17px;">
	<li><span style="color: white;background-color: #8A2BE2;">Intro PHP</span><br><strong>Stands for "Hypertext Preprocessor(প্রাক প্রসেসর)." </strong>(It is a recursive acronym(বিভিন্ন শব্দের আদ্যক্ষর দিয়ে গঠিত সংক্ষিপ্ত নির্দেশক শব্দ), if you can understand what that means.) <br><strong>php is called hypertext preprocessor because php libraries are already compiled(
	সঙ্কলন করা) and processed.</strong> when any person request any php page in browser address bar that request first go to server for example Apache is running on that server. then server interpret php files and <strong>return back response in form of HTML</strong>

	<br><br>PHP is an HTML-embedded(বসান) <strong> [[---PHP files can contain text, HTML, CSS, JavaScript, and PHP code]] </strong>  Web scripting(লিপি) language. This means PHP code can be inserted into the HTML of a Web page. When a PHP page is accessed, <strong>the PHP code is read or "parsed" by the server the page resides on.</strong></li><br><br>	
	

	<li><span style="color: white;background-color: #8A2BE2;">How it works</span><br>When you request a PHP file, the server process the file using the PHP parser. The parsed output will be sent as the response. <br>When PHP parses a file, it searches for opening and closing tags. <strong>All the code inside these tags is interpreted.</strong> Everything outside these tags is ignored by the PHP parser.(PHP returns all the text that are not inside PHP tags without any execution.)
	</li><br><br>
	
	<li><span style="color: white;background-color: #8A2BE2;">PHP Output</span><br>PHP echo /echo(string $arg....) and print/print(string $arg) Statements (PHP print is a language construct, so you don’t need to use parenthesis with the argument list.)<br><br>The echo statement can be used to output text, variables, HTML markup, Javascript code, and any other kind of text. <br><img class="ml-1" src="{{ asset('images/larabook/php/echo.png') }} " alt="model"  style="width: 400px;height: 350px;"><br><br> <strong>echo has no return value while print has a return value of 1 so it can be used in expressions. ($x = 5;
	$y = 4; print $x > $y;=>1 )</strong><br> echo can take multiple parameters (although such usage is rare) while print can take one argument. <br> echo is marginally faster than print. <br><br>Therefore always uses parenthesis if you want to use more than one parameters. <br><br><strong>Shorthand Echo:</strong><br>Any string output wrapped with <span class="bg-warning"><'?= and ?> </span>will be echoed. <br><'h1><'?= $name ?></'h1></li><br><br>


	<li><span style="color: white;background-color: #8A2BE2;">PHP can encrypt data</span><br>
	<div class="row">
		<div class="col-md-5"><img class="ml-1" src="{{ asset('images/larabook/php/hash.png') }} " alt="model"  style="width: 400px;height: 350px;"> <br></div>
		<div class="col-md-5"><br><img class="ml-1" src="{{ asset('images/larabook/php/encription.png') }} " alt="model"  style="width: 400px;height: 350px;"></div>
	</div><br>
	<strong>Algorithms that achieve one-way encryption are called hashing algorithms</strong>, and they work by taking a string (for example, JohnDoe) and then creating a unique fingerprint (if you like) from it. <br><br>
	<strong>PHP offers a hashing algorithm called MD5</strong> , which basically takes a string and returns a 128-bit fingerprint of it. <br>
	<strong>128-bit encryption is a data/file encryption technique</strong> that uses a 128-bit key to encrypt and decrypt data or files. It is one of the most secure encryption methods used in most modern encryption algorithms and technologies. 128-bit encryption is considered to be logically unbreakable. <br><br>

	<span style="background-color:#8B4513;color: white;">The difference between hashing and encryption</span> <br>It requires a private key to reversible function encrypted text to plain text. In short, encryption is a two-way function that includes encryption and decryption whilst hashing is a one-way function that changes a plain text to a unique digest(পরিপাক করা)<strong> that is irreversible</strong>. <br> <br>

	In cryptography, a key is a variable value that is applied using an algorithm to a string or block of unencrypted text to produce encrypted text, or to decrypt encrypted text. <br>
	<strong>When an asymmetric key pair is generated, the public key is typically used to encrypt, and the private key is typically used to decrypt</strong>
	</li>
</ul><br>
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- error --}}
{{-- error --}}
{{-- error --}}
<br><br><h4 class="alert alert-info text-center" style="font-size: 18px;font-style: bold"><strong>Php ERROR(4Types)</strong></h4>
<table class="table table-hover" style="font-size: 18px;">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 5%;background-color: #0000FF;color: white;">Error</th>
				<th scope="col" style="width: 22%"><span style="font-size: 18px;color:#4169E1"><strong>1. Parse Errors (syntax errors)</strong></span></th>
				<th scope="col" style="width: 22%"><span style="font-size: 18px;color:#4169E1"><strong>2. Fatal Errors</strong></span></th>
				<th scope="col" style="width: 22%"><span style="font-size: 18px;color:#4169E1"><strong>3. Warning Errors</strong></span></th>
				<th scope="col" style="width: 30%"><span style="font-size: 18px;color:#4169E1"><strong>4. Notice Errors</strong></span></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="table-secondary">Cause</td>
				<td>if there is a syntax mistake in the script; the output is Parse errors.
				<br><strong>
				<br><br>EX: Unclosed quotes, Missing or Extra parentheses, Unclosed braces, Missing semicolon</strong>
				</td>

				<td>Fatal errors are caused when PHP understands what you've written. <br><br><br><strong>EX:  If you are trying to access the undefined functions, then the output is a fatal error.</strong></td>
				
				<td>The main reason for warning errors are to include a missing file or using the incorrect number of parameters in a function. 
				<br><br><strong>EX: Acees undefined external file or funvtion arg .</strong></td>
				
				<td>Notice that an error is the same as a warning error. <br>Notice that the error occurs when you try to access the undefined variable, then produce a notice error. <br><br><strong>EX: Acees undefined variable .</strong></td>
			</tr>

			<tr>
				<td class="table-secondary">Result & solution</td>
				<td class="table-warning"><strong>stops the execution</strong><br><br>Careful of syntax.</td>

				<td class="table-warning"><strong>stops the execution</strong><br><br>Aware of using define function.</td>

				<td class="table-warning"><strong>not stop execution</strong><br><br>Careful of using external file.</td>

				<td class="table-warning"><strong>not stop execution</strong><br><br>Aware of define variable using.</td>
			</tr>

			<tr>
				<td class="table-dark"></td>
				<td class="table-dark"></td>
				<td class="table-dark"></td>
				<td class="table-dark"></td>
				<td class="table-dark"></td>
			</tr>

		</tbody>
	</table><br><br>
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- syntax --}}
{{-- syntax --}}
{{-- syntax --}}
<br><br><h4 id="syntax" class="text-center" style="background-color: #0000FF;color:white;font-size: 18px;font-style: bold"><strong>Php Syntax</strong><br>'Syntax' is the structure of statements in a computer language.</h4>

<ul style="list-style-type:decimal;font-size: 17px;">
	<br><img class="ml-5" src="{{ asset('images/larabook/php/php-tag.gif') }} " alt="model"  style="width: 800px;height: 350px;"> <br><br>

	<li><span style="color: white;background-color: #8A2BE2;">Quatation</span><br>Double quatation -- inside single quatation && Single quatation -- inside Double quatation work perfect. <br><strong>But reverse " " " && ' ' ' must use \ to escape the endpoint and take as a character .</strong>('cox\'bazar') here after \ ' takes as a character .</li><br><br>
	
	<li><span style="color: white;background-color: #8A2BE2;">Comment</span><br>// You can also use comments to leave out parts of a code line <br>	
	<strong>$x = 5 /* + 15 */ + 5;</strong></li><br><br>

	<li><span style="color: white;background-color: #8A2BE2;">PHP Case Sensitivity</span><br>PHP is a SEMI-CASE-SENSITIVE language which means some features are case-sensitive while others are not. <br>In PHP, NO keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are case-sensitive.<br><br>php variable are case sensitive.</li><br>
</ul><br><br>

{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- variable --}}
{{-- variable --}}
{{-- variable --}}
<br><br><h4 class="text-center" style="background-color: #0000FF;color:white;font-size: 18px;font-style: bold"><strong>Php Variable</strong><br>Variables are pieces of information stored in the computer's memory.</h4>
<br><img class="ml-5" src="{{ asset('images/larabook/php/variable2.png') }} " alt="model"  style="width: 900px;height: 460px;"> <br><br>

<ul style="list-style-type:decimal;font-size: 17px;">
	<li><span style="color: white;background-color: #8A2BE2;">PHP Variable</span><br>Variables are pieces of information stored in the computer's memory.A variable is a temporary storage that is used to store data temporarily.  <br><br>
	A variable name <strong>can only contain alpha-numeric</strong> characters and underscores (A-z, 0-9, and _ ). <br>Variables can, but do not need, to be declared before assignment. <br><span class="bg-danger" style="color:white;">Variable must be declare after declare . such as $x = "" ; otherwise undefined value will be generate</span><br><br>
	<span class="bg-warning"> inside double quatation variable works ok but in single quatation works as string. And in double quatation with big string variable can identify by {var}.</span> <br>EX: echo "I love {$txt}!"; or echo "I love " . $txt . "!"; same result. <br><br>
	
	<strong>NOTE:</strong><br>A variable name cannot be $this. ($this is a special variable which cannot be assigned) 
	</li><br><br>

	<li><span style="color: white;background-color: #8A2BE2;">PHP $ and $$ Variables</span><br><br><img class="ml-5" src="{{ asset('images/larabook/php/variable1.png') }} " alt="model"  style="width: 800px;height: 350px;"> <br><br>
		The $var (single dollar) is a normal variable with the name var that stores any value like string, integer, float, etc. <br>
    <strong>The $$var (double dollar) is a variables variables that stores the value of the $variable inside it.</strong><br><br>Data stored in $ is fixed while data stored in $$(double dollar sign) can be changed dynamically.</li><br><br>
	
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- super global variable --}}
{{-- super global variable --}}
{{-- super global variable --}}
<li><span style="color: white;background-color: #8A2BE2;">PHP Global Variables - Superglobals</strong></span><br>
<p>Several predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special. <br><strong>you will learn about the elements of superglobal arrays by practice, not by studying.</strong></p>
<table class="table table-hover" style="font-size:17px">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 20%;background-color: #0000FF;color: white;font-size: 18px;">Super Global</th>
				<th scope="col" style="width: 40%" style="font-size: 18px;color:#008080">work</th>
				<th scope="col" style="width: 40%" style="font-size: 18px;color:#008080">where to use</th>>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>$GLOBALS</strong></span></td>

				<td>used to access global variables from anywhere in the PHP script (also from within functions or methods)</td>

				<td>PHP stores all global variables in an  called <strong>$GLOBALS[index]. The index holds the name of the variable.</strong><br><img class="ml-0" src="{{ asset('images/larabook/php/global.png') }} " alt="model"  style="width: 440px;height: 350px;"></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>$_SERVER</strong></span></td>

				<td class="table-warning"><strong>Stores information about the server and execution environment.</strong><br>holds information about headers, paths, and script locations. (((in function see the hyvor.com also)))</td>

				<td class="table-warning">$_SERVER is a very useful and huge array which holds the data about the currently executing script, network addresses, paths, locations, etc.Such as: <br><br><strong>$_SERVER['PHP_SELF']</strong><br>Returns the filename of the currently executing script <br><br><strong>$_SERVER['REQUEST_METHOD']</strong> <br>Returns the request method used to access the page (such as POST)</td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>$_REQUEST</strong></span></td>

				<td>used to collect data after submitting an HTML form.<img class="ml-0" src="{{ asset('images/larabook/php/global2.png') }} " alt="model"  style="width: 440px;height: 350px;"> <br><br><strong>Stores request variables ($_GET, $_POST and $_COOKIE variables).</strong></td>

				<td>The example below shows When a user submits the data by clicking on "Submit", <strong>the form data is sent to the file specified in the action attribute of the <'form> tag</strong>. <br><br>In this example, we point to this file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. <strong>Then, we can use the super global variable $_REQUEST to collect the value of the input field:</strong></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>$_POST</strong></span></td>
				<td class="table-warning">Stores HTTP POST variables. <br><br>used to collect form data after submitting an HTML form with method="post". <br><br><strong> $_POST is also widely used to pass variables.</strong></td>
				<td class="table-warning">||(example & src also same)</td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>$_GET</strong></span></td>
				<td> Stores HTTP GET variables. <br><br>also be used to collect form data after submitting an HTML form with method="get". <br><br> <strong>$_GET can also collect data sent in the URL.</strong></td>
				<td></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>$_FILES</strong></span></td>
				<td class="table-warning">later</td>
				<td class="table-warning">later</td>
			</tr>
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>$_ENV</strong></span></td>
				<td>Stores environment variables.</td>
				<td>later </td>
			</tr>
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>$_COOKIE</strong></span></td>
				<td class="table-warning">Stores HTTP Cookies.</td>
				<td class="table-warning">later</td>
			</tr>
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>$_SESSION</strong></span></td>
				<td>Stores session variables.</td>
				<td>later</td>
			</tr>

			<tr>
				<td class="table-dark" style="color:white"></td>
				<td class="table-dark" colspan="2" style="color:white">Note: The superglobal variables $_GET, $_POST and $_REQUEST are built-in variables that are always available in all scopes throughout a script.</td>
				
			</tr>
		</tbody>
</table><br><br><br>

{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}	
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- scope --}}
{{-- scope --}}
	<li><span style="color: white;background-color: #8A2BE2;">Variable Scope</span><br>Scope refers to the visibility of variables. In other words, which part of the program can use that variable. <br>
	PHP has three different variable scopes:<br>
	<table class="table table-hover">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 5%;background-color: #0000FF;color: white;">Scope</th>
				<th scope="col" style="width: 30%;font-size: 18px;color:#4169E1">Local/Function parameters</th>
				<th scope="col" style="width: 30%;font-size: 18px;color:#4169E1">Global</th>
				<th scope="col" style="width: 30%;font-size: 18px;color:#4169E1">static</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="table-secondary">Defination</td>
				<td>A variable declared within a function has a LOCAL SCOPE.</td>
				<td>A variable declared outside a function has a GLOBAL SCOPE.</td>
				<td>Normally, These variables are deleted and no longer available after the execution of the function.<br> However, sometimes we want a local variable NOT to be deleted. We need it for a further job. </td>
			</tr>

			<tr>
				<td class="table-secondary"> Access</td>
				<td class="table-warning">It can only be accessed within that function <br><span class="bg-warning"> outside function generate error</span></td>

				<td class="table-warning"> It can only be accessed outside a function. <br>	<span class="bg-warning"> inside function generate error</span><br><br><span class="bg-danger">Note:</span>The global keyword is used to access a global variable from within a function. <br><br>There are two ways to access global variables within a function. <br>1.Using the global keyword. <br>2.Using the $GLOBALS array.</td>

				<td class="table-warning"> <strong>Note:</strong>The variable is still local to the function. </td>
			</tr>

			<tr>
				<td class="table-secondary">Example</td>
				<td>You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.</td>
				
				<td>Global & Local name can same. <br><img class="ml-0" src="{{ asset('images/larabook/php/variable3.png') }} " alt="model"  style="width: 320px;height: 240px;"><br>
				<img class="ml-0" src="{{ asset('images/larabook/php/variable4.png') }} " alt="model"  style="width: 320px;height: 240px;"> <br></td>
				<td><img class="ml-0" src="{{ asset('images/larabook/php/variable5.png') }} " alt="model"  style="width: 320px;height: 280px;"></td>
			</tr>

			<tr>
				<td class="table-dark"></td>
				<td class="table-dark"></td>
				<td class="table-dark"></td>
				<td class="table-dark"></td>
			</tr>
		</tbody>
	</table>
	</li>
</ul><br><br>

{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- datatype	 --}}
{{-- datatype	 --}}
{{-- datatype	 --}}
<br><br><h4 id="datatype" class="text-center" style="background-color: #0000FF;color:white;font-size: 18px;font-style: bold"><strong>Php Dataype</strong><br>Variables can store different data types. In PHP, PHP chooses the appropriate data type for the variable automatically. <br><br>gettype(): It is used to check only data type. <br>var_dump(): It is used to check data type and value.</h4>
<div class="row">
	<div class="col-md-5"><br><img class="ml-1" src="{{ asset('images/larabook/php/datatype.png') }} " alt="model"  style="width: 400px;height: 300px;"></div>

	<div class="col-md-5"><br><img class="ml-1" src="{{ asset('images/larabook/php/datatype2.png') }} " alt="model"  style="width: 600px;height: 300px;"> <br><br></div>
</div>
{{-- table --}}
{{-- table --}}
{{-- table --}}
	<table class="table table-hover" style="font-size:17px">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 10%;background-color: #0000FF;color: white;">Data Type</th>
				<th scope="col" style="width: 30%">Note</th>
				<th scope="col" style="width: 30%">Tips/Explanntion</th>
				<th scope="col" style="width: 30%">Function</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>String</strong></span></td>
				<td>A string is any finite sequence of characters (letters, numerals, symbols, punctuation marks, etc.)<br><img class="ml-0" src="{{ asset('images/larabook/php/string1.png') }} " alt="model"  style="width: 350px;height: 250px;"><br><img class="ml-0" src="{{ asset('images/larabook/php/string2.png') }} " alt="model"  style="width: 350px;height: 360px;"></td>

				<td>Escaping is used to reduce ambiguity and give special meaning when using quotes. These characters are called escape sequences. <br><br>Certain character sequences beginning with backslash (\) are replaced with special character<br><img class="ml-0" src="{{ asset('images/larabook/php/string.png') }} " alt="model"  style="width: 350px;height: 250px;"></td>

				<td><img src="{{ asset('images/larabook/php/datatype1.png') }} " alt="model"  style="width: 250px;height: 200px;"></td>
			</tr>


			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Integer</strong></span></td>
				<td class="table-warning">
					An integer must have at least one digit. <br>An integer can be either positive or negative. <br><br><strong>Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2)  notation</strong>(e.g. $var = 0b11111111;)
				</td>

				<td class="table-warning">An integer data type is a non-decimal number .<br><br>EX:0 is integer</td>

				<td class="table-warning"><img src="{{ asset('images/larabook/php/datatype3.png') }} " alt="model"  style="width: 250px;height: 200px;"></td>
			</tr>


			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Float</strong></span></td>
				<td>
					A float (floating point number) is a number with a decimal point or a number in exponential form. <br><br>Floats are also known as "Double", "Real" or "Floating-Point Numbers".
				</td>

				<td>-1e9 is "one times ten to the ninth power" <br><br>EX:-1 × 10^9.</td>

				<td></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Numbers</strong></span></td>
				<td class="table-warning">
					A value greater (or lower) than this((integer length)), will be stored as float, because it exceeds the limit of an integer. <br><br>
					<span class="bg-warning">Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).</span><br>
				</td>

				<td class="table-warning">This automatic conversion can sometimes break your code. <br>((Then need type cast/convertion. <br><br>Ex:(int)$x;where $x=10.0)))</td>

				<td class="table-warning"></td>
			</tr>

			<tr>
				<td class="table-dark" style="color:white;"></td>
				<td class="table-dark" style="color:white;">N=Numeric  S=String</td>
				<td class="table-dark" style="color:white;"> N+NS =N (10+"20" = 30) <br>
				NS + NS=N ("10"+"20"=30)	<br><span class="bg-success"> S+N =ERROR ("a" + 10 =warning)</span></td>
				<td class="table-dark" style="color:white;">Arithmatic operation perform in NS & N leads to numeric value</td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Constant</strong></span></td>
				<td class="table-warning">
					<strong>Constants are automatically global</strong> and can be used across the entire script.((inside & outside function )) <br><img class="ml-0" src="{{ asset('images/larabook/php/constant.png') }} " alt="model"  style="width: 320px;height: 350px;">
				</td>

				<td class="table-warning">constant is a piece of information stored in the computer's memory which does not change (cannot be changed). <br><br>case-sensitive <br> case-insenitive<br> Constant Arrays
				</td>

				<td class="table-warning"><strong>define(name, value, case-insensitive(true)</strong>((by default false--case-sensitive )))<br><img class="ml-0" src="{{ asset('images/larabook/php/constant1.png') }} " alt="model"  style="width: 270px;height: 350px;"></td>
			</tr>

			<tr>
				<td class="table-dark" style="color:white"></td>
				<td class="table-dark" style="color:white">define("GREETING", "Welcome to W3Schools.com!", true); <br>echo greeting;</td>
				<td class="table-dark" style="color:white">if last no arg false then by default false that is case-sensitive.</td>
				<td class="table-dark" style="color:white"></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Boolean</strong></span></td>
				<td class="table-warning">
					To specify a boolean, you can use constants true and false (Both are case-insensitive). <br>
				</td>

				<td class="table-warning"><strong>Booleans are often used in conditional testing. </strong></td>

				<td class="table-warning"></td>
			</tr>


			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Object</strong></span></td>
				<td>
					An object is a data type which stores not only data but also information on how to process that data. <br><br>It is instances of programmer-defined classes, which can package up both other kinds of values and functions that are specific to the class. 
				</td>

				<td>Unlike the other data types in PHP, an object must be explicitly declared. At first, we must declare a class of object.</td>

				<td></td>
			</tr>


			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>NULL Value</strong></span></td>
				<td class="table-warning">
					Null represents a variable with no value. <br><br><strong>Null is not 0, false or any other value, it is null.</strong>
				</td>

				<td class="table-warning">Null is a special data type which can have only one value: NULL. <br><br><strong><br>$x; where value in undefine & value is NULL .</strong></td>

				<td class="table-warning">is_null() to check if it is NULL or not</td>
			</tr>


			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>PHP Resource</strong></span></td>
				<td>
					The special resource type is not an actual data type. <br><br>Resources are created and used by special functions.
				</td>

				<td>It is the storing of a reference to functions and resources external to PHP.<br>
				A common example of using the resource data type is a database call.<strong>(such as database connections)</strong></td>

				<td></td>
			</tr>
			
			<tr>
				<td class="table-warning" colspan="2">There are two ways to declare an array: <br>An array can be declared using the <strong>array() function.</strong> <br>An array can be declared <strong>wrapping with [ and ].</strong> <br><img class="ml-0" src="{{ asset('images/larabook/php/array.png') }} " alt="model"  style="width: 400px;height: 300px;"><br><br><span class="bg-warning">It means you're referring to an array key that doesn't exist. "Offset"((index)) refers to the integer key of a numeric array, <br>and "index" refers to the string key of an associative array.</span></td>


				<td class="table-warning" colspan="2"><img class="ml-2" src="{{ asset('images/larabook/php/array1.png') }} " alt="model"  style="width:400px;height: 450px;"></td>
			</tr>

			<tr>
				<td class="table-dark"></td>
				<td class="table-dark"></td>
				<td class="table-dark"></td>
				<td class="table-dark"></td>
			</tr>

			
		</tbody>
	</table>

{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- type casting --}}
{{-- type casting --}}
<br><br><span style="color: white;background-color: #8A2BE2;font-size: 17px;">Type Casting</span><br>The meaning of "Casting" is taking a variable of one particular data type and converting it to another data type. (ex: Integer to Float)<br><br>
	
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>
		<div class="row">
			<div class="col-md-5"><strong>Type</strong><br>There are two types of casting: <br>1.Implicit Casting (Automatic) <br>2.Explicit Casting (Manual) <br><img src="{{ asset('images/larabook/php/cast.png') }} " alt="model"  style="width: 360px;height: 250px;"></div>

			<div class="col-md-6"><strong>String to Int</strong><br><img src="{{ asset('images/larabook/php/cast1.png') }} " alt="model"  style="width: 460px;height: 380px;"></div>
		</div>
	</li><br><br>

	<li>
		<div class="row">
			<div class="col-md-5"><img src="{{ asset('images/larabook/php/cast2.png') }} " alt="model"  style="width: 430px;height: 360px;"></div>

			<div class="col-md-6"><br><img src="{{ asset('images/larabook/php/cast3.png') }} " alt="model"  style="width: 430px;height: 380px;"></div>
		</div>
	</li><br>
</ul><br><br>
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- empty null --}}
{{-- empty null --}}
<br><br><span style="color: white;background-color: #8A2BE2;font-size: 17px;">is_null() vs empty() vs isset()</span><br>	
<table class="table table-hover" style="font-size: 18px;">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 5%">##</th>
				<th scope="col" style="width: 30%"><span style="font-size: 18px;color:#4169E1"><strong>is_null() bool(T/F)</strong></span></th>
				<th scope="col" style="width: 30%"><span style="font-size: 18px;color:#4169E1"><strong>isset() bool(T/F)</strong></span></th>
				<th scope="col" style="width: 30%"><span style="font-size: 18px;color:#4169E1"><strong>empty() bool(T/F)</strong></span></th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="table-secondary">Functionality  The special NULL value is used to represent empty variables in PHP. A variable of type NULL is a variable without any data. NULL is the only possible value of type null.</td>

				<td>is_null — Finds whether a variable is NULL <br><br>NULL means no value.  <br>a character constant '\0' with a character value 0 or 000 <br>A string will be null if it has not been assigned a value. <br><br><br><strong>Note :</strong> In other words, it returns true only when the variable is null.</td>

				<td>isset — Determine if a variable is set and is not NULL <br><br> Isset() checks if a variable has a value including <strong>( Flase , 0 , or Empty string) , But not NULL.</strong><br>if a declared variable, array or array key has null value, if it does, isset() returns false <br><br><strong>Note :</strong>In other words, it returns true only when the variable is not null.</td>

				<td>empty — Determine whether a variable is empty <br><br> An empty string is a value, but is just empty. <br>Blank means a value that is blank <br><br> On the other hand the empty() function checks if the variable has an empty value <strong>( Flase , 0 , Empty string or null)</strong> <br><br><strong>Note :</strong> it will return true if the variable is an empty string, false, array(), NULL, “0?, 0, and an unset variable.</td>
			</tr>
			
			<tr>
				<td class="table-warning">Memory Space</td>

				<td class="table-warning">NULL isn't allocated any memory, the string with NULL value is just a pointer which is pointing to nowhere in memory. </td>

				<td class="table-warning"> Empty IS allocated to a memory location, although the value stored in the memory is ""</td>

				<td class="table-warning"> <img class="ml-0" src="{{ asset('images/larabook/php/null.png') }} " alt="model"  style="width: 400px;height: 300px;"> <br></td>
			</tr>

			<tr>
				<td class="table-secondary">Vs</td>
				<td><strong>is_null() vs isset() :</strong><br> is_null() is opposite of isset(),<br><strong>NOTE  : </strong>except for one difference that isset() can be applied to unknown variables, but is_null() only to declared variables.</td>

				<td><strong>is_null() vs empty() :</strong><br> A string will be null if it has not been assigned a value. <br>A string will be empty if it is assigned “” or String<br>Ex;<strong>$x ="" ; var_dump($x); => string(1) " "</strong></td>

				<td><strong>isset() vs empty()</strong><br>
				<span class="bg-warning">$x =null; if(isset($x)) {echo "hello";} => escape <br>$x =null;if (empty($x)) {echo "hello";}=> hello</span></td>
			</tr>

			
			<tr>
				<td class="table-dark" style="color:white">is_null() vs empty()</td>
				<td class="table-dark" style="color:white">I have to check for a value of a particular Column named RESULT is blank or not. <br>When I check with if RESULT IS NULL, the query failed, but When I checked RESULT='', it worked.</td>
				<td class="table-dark" style="color:white">In tri-value logic, NULL should be used to represent "unknown" or "not applicable" <br>An empty column should represent "known but empty".</td>
				<td class="table-dark" style="color:white"><strong>while NULL can be put into any column type (ignoring not null clauses for now),  <br>you cannot put an "empty" value into a non-character field (like integer).</strong></td>
			</tr>
		</tbody>
	</table><br><br>
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- operator --}}
{{-- operator --}}
{{-- operator --}}
<br><br><br><h4 class="text-center" style="background-color: #0000FF;color:white;font-size: 18px;font-style: bold"><strong>Php Operator</strong><br>An operator is a character that represents an action.</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li><span style="color: white;background-color: #8A2BE2;">Operator</span><br>Operators are used to perform operations on variables and values. <br>PHP has 11 types of operators.</li>
</ul>
<img class="ml-5" src="{{ asset('images/larabook/php/operator1.png') }} " alt="model"  style="width: 700px;height: 300px;"> <br><br>


<table class="table table-hover" style="font-size: 18px;">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 15%;background-color: #0000FF;color: white;">Operator</th>
				<th scope="col" style="width: 28%">Define</th>
				<th scope="col" style="width: 28%">Aim</th>
				<th scope="col" style="width: 28%">Example</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Arithmetic</strong></span></td>

				<td>are used with numeric values to perform common arithmetical operations</td>
				<td>with numeric values</td>

				<td><strong>** =>Exponentiation</strong><br><br>12 % 5 =2 <br><strong>4 % 5=4</strong> <br>5 % 5=0 </td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Assignment</strong></span></td>

				<td class="table-warning">The PHP assignment operators are used with numeric values to write a value to a variable.</td>

				<td class="table-warning">with numeric values</td>

				<td class="table-warning">all arithmatic with (=) & **=	<br><br>  x %= y  =>  x = x % y	</td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Comparison Operators</strong></span></td>
				<td>The PHP comparison operators are used to compare two values (number or string): <br><br>==(Equality) <br>===	(Identical)(অভিন্ন) <br>!==	Non-identity	 <br> <'>	(Inequality) etc. <br><img class="ml-0" src="{{ asset('images/larabook/php/operator2.png') }} " alt="model"  style="width: 400px;height: 320px;"></td>

				<td colspan="2"><strong><=>	Spaceship</strong>(number or string)<br><img class="ml-0" src="{{ asset('images/larabook/php/operator.png') }} " alt="model"  style="width: 460px;height: 320px;"> </td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Increment / Decrement</strong></span></td>

				<td class="table-warning">The PHP increment operators are used to increment a variable's value. <br><br><strong>Note:<br>1.Only strings and numbers (integers and floats) are affected by these operators. <br><br>2.Arrays and objects are not affected. <br><br>3.Decrementing null has no effect, but incrementing results in 1.</strong></td>

				<td class="table-warning">variable's value.</td>

				<td class="table-warning"><strong>++$x	Increments $x by one, then returns $x</strong> <br>$x++	Returns $x, then increments $x by one</td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Logical</strong></span></td>
				<td>The PHP logical operators are used to combine conditional statements</td>
				<td>conditional statements</td>
				<td>and	, or , xor <br><strong>$x xor $y;True if either $x or $y is true, but not both</strong></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>String Operators</strong></span></td>
				<td class="table-warning">PHP has two operators that are specially designed for strings.</td>
				<td class="table-warning">string</td>
				<td class="table-warning"> . ,<strong>(.=)Concatenation assignment </strong><br>$txt2 = " world!"; <br>$txt1 = "Hello"; <br>echo $txt1 .= $txt2;//hello world!</td>
			</tr>
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Conditional Assignment Operators</strong></span></td>
				<td>The PHP conditional assignment operators are used to set a value depending on conditions</td>
				<td>?:(Ternary) <br>?? (Null coalescing(সমবেত হত্তয়া))<br><br><strong>((condition))?((if)):((else)) <br><br> ((if it exist)) ?? ((if ist one not exist))</strong></td>
				<td>echo 20 ?? $y;//20 <br>$x=10 echo $x ?? $y;//10 <br>$y =50 ;echo $x ?? $y;//50</td>
			</tr>				
			
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Array operator</strong></span></td>
				<td>The PHP array operators are used to compare arrays.</td>
				<td>+(Union) <br>==(Equality) <br>===	(Identical)(অভিন্ন) <br>!==	Non-identity	 <br> <'>	(Inequality)</td>
				<td> <span class="bg-danger">!= vs <''></span> <br><'> means either bigger or smaller. != means not equal. They basically mean the same thing. <br></td>
			</tr>

			<tr>
				<td class="table-dark" style="color:white"></td>
				<td class="table-dark" style="color:white">$x = array("a" => "red", "b" => "green"); $y = array("c" => "blue", "d" => "yellow"); <br><br> print_r($x + $y); // Array ( [a] => red [b] => green [c] => blue [d] => yellow )</td>

				<td class="table-dark" style="color:white"> $x = 10; $y="10";<br>if ($x === $y) {echo "hello";}//escape <br><br>$x = 10;$y="10"; <br>if ($x == $y) {echo "hello";}//hello</td>
				
				<td class="table-dark" style="color:white"></td>
			</tr>
		</tbody>
	</table>
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- if else --}}
{{-- if else --}}
{{-- if else --}}
<br><br><h4 id="conditional"  class="text-center" style="background-color: #0000FF;color:white;font-size: 18px;font-style: bold"><strong>PHP Conditional Statements <br>(practise it with date function)</strong></h4>
<div class="row">
	<div class="col-md-5"><br><img class="ml-1" src="{{ asset('images/larabook/php/if.png') }} " alt="model"  style="width: 450px;height: 300px;"> <br><br></div>
	<div class="col-md-5"><br><img class="ml-1" src="{{ asset('images/larabook/php/switch.png') }} " alt="model"  style="width: 450px;height: 300px;"> <br><br></div>
</div>
<table class="table table-hover">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 10%;background-color: #0000FF;color: white;">Conditional</th>
				<th scope="col" style="width: 22%:font-size: 18px;color:#4169E1"><strong>if</strong></th>
				<th scope="col" style="width: 22%;font-size: 18px;color:#4169E1"><strong>if else</strong></th>
				<th scope="col" style="width: 22%;font-size: 18px;color:#4169E1"><strong>if elseif else</strong></th>
				<th scope="col" style="width: 22%;font-size: 18px;color:#4169E1"><strong>switch</strong></th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong>Define</strong></span></td>

				<td> executes some code if one condition is true</td>

				<td>executes some code if a condition is true and another code if that condition is false</td>

				<td><strong>executes different codes for more than two conditions</strong></td>

				<td>The switch-case statement condition its tests <strong>a variable(same)</strong> against a series of values until it finds a match</td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong>Src</strong></span></td>

				<td colspan="2"><img class="ml-0" src="{{ asset('images/larabook/php/condition2.png') }} " alt="model"  style="width: 400px;height: 350px;"></td>

				<td colspan="2"><img class="ml-0" src="{{ asset('images/larabook/php/condition1.png') }} " alt="model"  style="width: 400px;height: 350px;"></td>
			</tr> 

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong>Note</strong></span></td>
				<td class="table-warning"></td>
				<td class="table-warning">Tip: <br> <strong>Code written using the ternary operator can be hard to read.</strong> However, it provides a great way to write compact if-else statements.</td>

				<td class="table-warning">It is good to know another thing, if multiple else if / elseif logical condition is match then <strong>compiler choice the first one.</strong></td>

				<td class="table-warning">The switch-case statement is <strong>an alternative method to the if-elseif-else statement or Condition</strong>, which are the almost same thing.</td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong>where to use</strong></span></td>
				<td>one condition</td>
				<td>two condition</td>
				<td>more than two condition</td>
				<td> a series of condition</td>
			</tr>

			<tr>
				<td class="table-dark" style="color:white">VS</td>

				<td class="table-dark" colspan="3" style="color:white"><img class="ml-0" src="{{ asset('images/larabook/php/switch1.png') }} " alt="model"  style="width: 700px;height: 350px;"></td>

				<td class="table-dark" style="color:white"></td>
			</tr>
		</tbody>
	</table><br><br>
	
	<span style="font-size: 17px;color: white;background-color: #8A2BE2;">PHP Shorthand Conditionals</span>
	<ul style="list-style-type:decimal;font-size: 17px;">
		<li><strong>PHP has two special shorthand conditional operators.</strong><br>Ternary Operator <br>
		Null Coalescing Operator</li><br>

		<li><strong>PHP Ternary Operator</strong><br>(condition) ? (on true) : (on false) <br><br>Since PHP 	5.3, you can omit the on true expression. (condition) ?: (on false) returns the result of 			condition if the condition is true. Otherwise, the result of on false expression is returned. <br>
			<div class="row">
				<div class="col-md-5"><img class="ml-0" src="{{ asset('images/larabook/php/condition3.png') }} " alt="model"  style="width: 600px;height: 390px;"></div>

				<div class="col-md-5"><img class="ml-0" src="{{ asset('images/larabook/php/condition4.png') }} " alt="model"  style="width: 600px;height: 390px;"></div>
			</div>
		</li><br><br>

		<li><strong>PHP Null Coalescing Operator</strong><br><span class="bg-warning">The null coalescing operator can be used to assign default values to a variable.</span><br><br>
		<div class="row">
				<div class="col-md-5"><img class="ml-0" src="{{ asset('images/larabook/php/condition5.png') }} " alt="model"  style="width: 600px;height: 390px;"></div>

				<div class="col-md-5"><img class="ml-0" src="{{ asset('images/larabook/php/condition6.png') }} " alt="model"  style="width: 600px;height: 390px;"></div>
			</div>
		</li><br>
	</ul><br>

{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- php loop --}}
{{-- php loop --}}
{{-- php loop --}}
{{-- php loop --}}
{{-- php loop --}}
<br><br><h4 class="text-center" style="background-color: #0000FF;color:white;font-size: 18px;font-style: bold"><strong>PHP Loop(G/Net)</strong><br>A loop is a sequence of instructions that is repeated while a certain condition is true.</h4>
<table class="table table-hover" style="font-size:17px">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 10%;background-color: #0000FF;color: white;">Loop</th>
				<th scope="col" style="width: 22%" style="font-size: 18px;color:#4169E1">while</th>
				<th scope="col" style="width: 22%" style="font-size: 18px;color:#4169E1">do while</th>
				<th scope="col" style="width: 22%" style="font-size: 18px;color:#4169E1">for</th>
				<th scope="col" style="width: 22%" style="font-size: 18px;color:#4169E1">for each</th>
			</tr>
		</thead>
		<tbody>
			{{-- php.net --}}
			{{-- php.net --}}
			{{-- php.net --}}
			<tr>
				<td class="table-secondary"><span style="color:tomato">Deeper</span></td>
				<td class="table-warning" colspan="2">
					For loop: <br>
					<img class="ml-0" src="{{ asset('images/larabook/php/loop5.0.png') }} " alt="model"  style="width: 520px;height: 300px;"><br><br>
					For each (list) : <br>
					<img class="ml-0" src="{{ asset('images/larabook/php/loop5.1.png') }} " alt="model"  style="width: 520px;height: 300px;">
					<img class="ml-0" src="{{ asset('images/larabook/php/loop5.4.png') }} " alt="model"  style="width: 520px;height: 300px;">
				</td>

				<td class="table-warning" colspan="2">
					For each (Reference) : <br>
					<img class="ml-0" src="{{ asset('images/larabook/php/loop5.2.png') }} " alt="model"  style="width: 440px;height: 300px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/php/loop5.3.png') }} " alt="model"  style="width: 440px;height: 300px;">
				</td>
			</tr>
			


			{{-- explanation --}}
			{{-- explanation --}}
			{{-- explanation --}}
			<tr>
				<td class="table-dark" style="color:white"><span style="color:tomato">Explanation</span></td>

				<td class="table-dark" style="color:white" colspan="2">
					While loop : <br>
					1. The number of iterations is known beforehand. <br>2. The value of the expression is checked each time at the beginning of the loop <br><br>
					For loop :<br>
					1. PHP also supports the alternate "colon syntax" for for loops. <br><br>
					2. Each of the expressions can be empty or contain multiple expressions separated by commas. <br><br>3. expr2 being empty means the loop should be run indefinitely (PHP implicitly considers it as TRUE, like C). <br><br>4. Since the size never changes, the loop be easily optimized by using an intermediate variable to store the size instead of repeatedly calling count() 
				</td>

				<td class="table-dark" style="color:white" colspan="2">
					Foreach :<br>
					1. foreach works only on arrays and objects <br><br>2. On each iteration, the value of the current element is assigned to $value and the internal array pointer is advanced by one (so on the next iteration, you'll be looking at the next element). <br><br>3. The second form will additionally assign the current element's key to the $key variable on each iteration. <br><br>4. In PHP 5, when foreach first starts executing, the internal array pointer is automatically reset to the first element of the array <br><br>5. you can use "break" control structure to exit from the "foreach" loop.
				</td>
			</tr>

			<tr>
				<td class="table-dark" style="color:white"></td>
				<td class="table-dark" style="color:white"><img class="ml-0" src="{{ asset('images/larabook/php/loop1.2.png') }} " alt="model"  style="width: 220px;height: 200px;"></td>

				<td class="table-dark" style="color:white"><img class="ml-0" src="{{ asset('images/larabook/php/loop1.3.png') }} " alt="model"  style="width: 190px;height: 200px;"></td>

				<td class="table-dark" style="color:white"><img class="ml-0" src="{{ asset('images/larabook/php/loop1.4.png') }} " alt="model"  style="width: 190px;height: 200px;"></td>

				<td class="table-dark" style="color:white"><img class="ml-0" src="{{ asset('images/larabook/php/loop1.5.png') }} " alt="model"  style="width: 220px;height: 200px;"></td>
			</tr>
			


			{{-- php define --}}
			{{-- php define --}}
			{{-- php define --}}
			<tr>
				<td class="table-secondary"><strong>Define</strong></td>
				<td colspan="4"><img  src="{{ asset('images/larabook/php/loop0.1.jpg') }} " alt="model"  style="width: 650px;height: 350px;margin-left: 180px;"></td>
			</tr>
		


			{{-- php repeat & itiration --}}
			{{-- php repeat & itiration --}}
			{{-- php repeat & itiration --}}
			<tr>
				<td class="table-secondary"><strong>Reapet/<br>iteration</strong></td>
				<td class="table-warning">as long as the specified condition is true</td>

				<td class="table-warning"><strong> execute its statements at least once, even if the condition is false the first time.</strong><br> because the condition is evaluated at the end of the loop iteration rather than the beginning. <strong>(count the iteration with first also)</strong></td>

				<td class="table-warning">specified number of times <br><img class="ml-0" src="{{ asset('images/larabook/php/loop0.2.png') }} " alt="model"  style="width: 200px;height: 260px;"></td>

				<td class="table-warning">for each element of an array <br><br>
				<strong>The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.</strong>	<br><span class="bg-warning">For every loop iteration, the value of the current array element is assigned to $value <br><br>
				and the array pointer is moved by one, until it reaches the last array element.</span> <br><img class="ml-0" src="{{ asset('images/larabook/php/array0.0.0.png') }} " alt="model"  style="width: 220px;height: 150px;"></td>
			</tr>
			


			{{-- php Where to use --}}
			{{-- php Where to use --}}
			{{-- php Where to use --}}
			<tr>
				<td class="table-secondary"><strong>Where to use</strong></td>
				<td>Use: While loop is used in situations where we <strong>do not know how many times loop needs to be excuted</strong> beforehand. </td>

				<td><strong><img class="ml-0" src="{{ asset('images/larabook/php/loop0.3.png') }} " alt="model"  style="width: 310px;height: 260px;"></strong></td>

				<td>For loop is used where we <strong>already know about the number of times loop needs to be excuted.</strong> Typically for a index used in iteration.</td>

				<td><strong>The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.</strong></td>
			</tr>			
			


			{{-- php  vs --}}
			{{-- php  vs --}}
			{{-- php  vs --}}
			<tr>
				<td class="table-secondary"><strong>vs</strong></td>
				<td class="table-warning" colspan="2"> with a while loop, the condition to be evaluated is tested at the beginning of each loop iteration, <br><br>do-while loop, on the other hand, the loop will always be executed once, even if the conditional expression is false<img class="ml-0" src="{{ asset('images/larabook/php/loop0.4.png') }} " alt="model"  style="width: 420px;height: 250px;"></td>
				<td class="table-warning" colspan="2"><img class="ml-0" src="{{ asset('images/larabook/php/loop0.5.png') }} " alt="model"  style="width: 400px;height: 350px;"></td>
			</tr>

			<tr>
				<td colspan="2"><span class="bg-warning">
					if else not use break ; here we show also how to use break in if else with loop </span><br><img class="ml-0" src="{{ asset('images/larabook/php/loop0.6.png') }} " alt="model"  style="width: 360px;height: 400px;">
				</td>
				
				<td >
					<br><br><img class="ml-0" src="{{ asset('images/larabook/php/loop0.7.png') }} " alt="model"  style="width: 360px;height: 400px;">
				</td>
				
				<td colspan="2">
					<br><br><img class="ml-0" src="{{ asset('images/larabook/php/loop0.8.png') }} " alt="model"  style="width: 360px;height: 400px;">
				</td>
			</tr>
			


			{{-- php break vs continue --}}
			{{-- php break vs continue --}}
			{{-- php break vs continue --}}
			<tr>
				<td class="table-dark" style="color:white">break vs continue</td>
				
				<td class="table-dark" colspan="2" style="color:white">
					<span class="bg-success">break</span><br>
					<span style="color:tomato">
						1. break ends execution of the current for, foreach, while, do-while or switch structure. <br>
						2. break accepts an optional numeric argument which tells it how many nested enclosing structures are to be broken out of. The default value is 1
					</span><br>
					Basically, break keyword terminates (out of block) the rest of remaining iterations of the loop. <br><img class="ml-0" src="{{asset('images/larabook/php/loop5.5.png') }} " alt="model"  style="width: 450px;height: 350px;"><br><br> 
					<br><img class="ml-0" src="{{ asset('images/larabook/php/loop1.1.png') }} " alt="model"  style="width: 450px;height: 350px;">
				</td>

				<td class="table-dark" colspan="2" style="color:white">
					<span class="bg-success">continue</span><br>Skips the next part of current loop iteration, and jumps to condition checking of the next loop iteration. <br>
					<img class="ml-0" src="{{ asset('images/larabook/php/loop1.0.png') }} " alt="model"  style="width: 450px;height: 350px;">
				</td>
				
			</tr>
		</tbody>
	</table><br><br>
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- function --}}
{{-- function --}}
{{-- function --}}
<br><br><h4 id="function" class="text-center" style="background-color: #0000FF;color:white;font-size: 18px;font-style: bold"><strong>Php Function(rand img in tutorilpoint --web concept math function a & header)</strong><br>A function is a type of procedure(কার্যপ্রণালী) or routine(দৈনন্দিন).</h4>

<ul style="list-style-type:decimal;font-size: 17px;">	
	<li><span style="font-size: 17px;color: white;background-color: #8A2BE2;">Intro</span><br>A function will 		not execute immediately when a page loads.
		<strong>A function will be executed only by a call to the function.</strong><br>Function naming is almost the same as variable naming except for the $ sign at the beginning. <br><br>There are two uses of return statements. <br>1.To return a value from a function. <br> 2. <strong>To stop the execution of a function when a certain condition is true.</strong>
	</li><br>

	<li><span style="font-size: 17px;color: white;background-color: #8A2BE2;">Syntax</span><br>Note: A function 	name can start with a letter or underscore (not a number). <strong>Function names are NOT 					case-sensitive.</strong><br><br><span class="bg-warning">Tip: An argument is a value that you pass to a 	function, and a parameter is the variable within the function that receives the argument.</span> 			However, in common usage these terms are interchangeable i.e. an argument is a parameter is an argument.
	</li><br>
</ul><br><br>	

<table class="table table-hover" style="font-size:17px">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 10%;background-color: #0000FF;color: white;">Function</th>
				<th scope="col" style="width: 29%;font-size: 18px;color:#4169E1">Normal parameter</th>
				<th scope="col" style="width: 29%;font-size: 18px;color:#4169E1">Loosly(স্বাধীনভাবে) parameter</th>
				<th scope="col" style="width: 29%;font-size: 18px;color:#4169E1">Strick parameter</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong>Define</strong></span></td>

				<td>You can add <strong>as many arguments as you want</strong>, just separate them with a comma. <br><br><br><br><span class="bg-success" style="color: white">Default Argument Value </span><br><br><strong>function customFont($font, $size=1.5){<br><br>echo "<'p style=\"font-family: $font; font-size: {$size}em;\">Hello, world!</'p>";}<br><br><span class="bg-warning">custonFont("Arial",2) or <br> custonFont("Arial")</span></strong></td>

				<td>In PHP 7, type declarations were added. This gives us an option to specify the data type expected when declaring a function, and by <strong>enabling the strict requirement</strong>, it will throw a "Fatal Error" on a type mismatch. <br><br>
				<span class="bg-success">Valid Types For Type Declaration</span><br>array- <strong>callable</strong>-int-float-bool-string ((practice all))<br><br><span class="bg-success" style="color: white">PHP Function Arguments - Type Declaration</span> <br><img class="ml-0" src="{{ asset('images/larabook/php/function.png') }} " alt="model"  style="width: 350px;height: 200px;"></td>

				<td>To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file. <br><br><strong>Declaring strict specifies that function calls made in that file must strictly adhere to the specified data types </strong><br>The strict declaration can make code easier to read, and it forces things to be used in the intended way. <br><img class="ml-0" src="{{ asset('images/larabook/php/function1.png') }} " alt="model"  style="width: 350px;height: 200px;"></td>
			</tr>


			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong>Return</strong></span></td>

				<td class="table-warning"><span class="bg-success" style="color: white;">return array</span><br><br><img class="ml-0" src="{{ asset('images/larabook/php/function2.png') }} " alt="model"  style="width: 380px;height: 340px;"></td>

				<td class="table-warning"><span class="bg-success" style="color: white">Return Type Declarations</span><br><br>To declare a type for the function return, <span class="bg-warning">add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.</span><br> <br><strong>function addNumbers(float/! $a, float/! $b) : float {  return $a + $b;}</strong><br><span class="bg-warning">But, if you return a string, PHP will throw an error.</span></td>

				<td class="table-warning"><span class="bg-success" style="color: white">Different Return Type</span><br><br>You can specify a different return type, than the argument types <br><br><strong>function addNumbers(float $a, float $b) : int {return (int)($a + $b);}</strong></td>
			</tr>

			

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong>Random</strong></span></td>

				<td><span class="bg-success" style="color: white">PHP Variable Functions</span><br>If a variable which contains a string has parentheses appended to it, PHP checks for a function with the same name, and will execute it. This concept is called variable functions.<br><img class="ml-0" src="{{ asset('images/larabook/php/function4.png') }} " alt="model"  style="width: 350px;height: 350px;"></td>

				<td><span class="bg-success" style="color: white">Value pass by reference</span><br>This means that <strong>a reference to the variable is manipulated by the function rather than a copy of the variable's value.</strong> <br><span class="bg-danger">Any changes made to an argument in these cases will change the value of the original variable.</span> You can pass an argument by reference <strong>by adding an ampersand to the variable name in either the function call or the function definition.</strong> <br><img class="ml-0" src="{{ asset('images/larabook/php/function3.png') }} " alt="model"  style="width: 350px;height: 400px;"></td>

				<td><span class="bg-success" style="color: white">recursive function</span><br> that calls itself again and again until a condition is satisfied. <br>Recursive functions are often used to solve <span class="bg-danger">complex mathematical calculations, or to process deeply nested structures </span> e.g., printing all the elements of a deeply nested array. <br><img class="ml-0" src="{{ asset('images/larabook/php/function.jpg') }} " alt="model"  style="width: 350px;height: 200px;"></td>
			</tr>

			<tr>
				<td class="table-dark"></td>
				<td class="table-dark" colspan="2"  style="color:white"><img class="ml-0" src="{{ asset('images/larabook/php/function5.png') }} " alt="model"  style="width: 420px;height: 290px;"></td>
				<td class="table-dark"></td>

			</tr>
		</tbody>
	</table><br><br>
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- php array --}}
{{-- php array --}}
{{-- php array --}}
{{-- php array --}}
{{-- php array --}}
{{-- php array --}}
<br><br><h4 id="array" class="text-center" style="background-color: #0000FF;color:white;font-size: 18px;font-style: bold"><strong>Php Array Detail</strong>(G/net)<br>Arrays are variables that store multiple values.</h4>

<p>However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?</p><br>
<h3>An array in PHP is actually an ordered map. A map is a type that associates values to keys.</h3>
<br><br>
<div class="row">
	<div class="col-md-6">
		<img class="ml-0" src="{{ asset('images/larabook/php/array0.0.jpg') }} " alt="model"  style="width: 560px;height: 300px;">	
	</div>
	<div class="col-md-6">
		<img class="ml-0" src="{{ asset('images/larabook/php/array0.0.0.png') }} " alt="model"  style="width: 560px;height: 200px;">		
	</div>
</div>

<table class="table table-hover" style="font-size:17px">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 5%;background-color: #0000FF;color: white;">Array</th>
				<th scope="col" style="width: 45%;font-size: 18px;color:#4169E1">Indexed/Numeric arrays</th>
				<th scope="col" style="width: 45%;font-size: 18px;color:#4169E1">Associative arrays</th>
			</tr>
		</thead>
		<tbody>
			{{-- core php.net --}}
			{{-- core php.net --}}
			{{-- core php.net --}}
			<tr>
				<td class="table-secondary">
					<span style="font-size: 18px;color:tomato;"><b>Index/Cast</b><br>(Core)</span>
				</td>

				<td class="table-info">
					<img class="ml-0" src="{{ asset('images/larabook/php/array5.0.png') }} " alt="model"  style="width: 560px;height: 400px;"><br><br>	
					<img class="ml-0" src="{{ asset('images/larabook/php/array5.4.png') }} " alt="model"  style="width: 560px;height: 300px;">	
				</td>

				<td class="table-info">	
					<img class="ml-0" src="{{ asset('images/larabook/php/array5.7.png') }} " alt="model"  style="width: 560px;height: 400px;"><br><br>	
					<img class="ml-0" src="{{ asset('images/larabook/php/array5.2.png') }} " alt="model"  style="width: 560px;height: 400px;">	
						
				</td>
			</tr>

			<tr>
				<td class="table-secondary">
					<span style="font-size: 18px;color:tomato;"><b>Reference/<br>Function</b>(C)</span>
				</td>

				<td class="table-warning">
					<img class="ml-0" src="{{ asset('images/larabook/php/array5.6.png') }} " alt="model"  style="width: 560px;height: 300px;">	
					<img class="ml-0" src="{{ asset('images/larabook/php/array5.5.png') }} " alt="model"  style="width: 560px;height: 300px;">	
				</td>

				<td class="table-warning">
					<img class="ml-0" src="{{ asset('images/larabook/php/array5.3.png') }} " alt="model"  style="width: 560px;height: 300px;">
					<br><br>
					<span class="text-danger">unset($arr[5]); // This removes the element from the array <br>unset($arr);    // This deletes the whole array</span>
				</td>
			</tr>
			<tr>
				<td class="table-dark" style="color:white"></td>

				<td class="table-dark" style="color:white">
					Note: <br>1. preferred over array(1, 2, ). trailing comma is commonly used <br>2.  an array, list (vector), hash table (an implementation of a map), dictionary, collection, stack, queue, and probably more. <br>
					<br>3. Do not quote keys which are constants or variables, as this will prevent PHP from interpreting them.
				</td>

				<td class="table-dark" style="color:white">
					<span class="text-warning">Example #2 Type Casting and Overwriting example</span> <br><br>
					<span class="text-warning">Example #3 Mixed integer and string keys</span> <br>
					The key is optional. If it is not specified, PHP will use the increment of the largest previously used integer key. <br><br>
					<span class="text-warning">Example #4 Indexed arrays without key</span> <br>
					It is possible to specify the key only for some elements and leave it out for others:
					<br><br><span class="text-warning">Example #10 Changing element in the loop</span><br>
					<span class="text-warning">Example #11 One-based index</span>
				</td>
			</tr>

			{{-- define --}}
			{{-- define --}}
			{{-- define --}}
			<tr>
				<td class="table-secondary">
					<span style="font-size: 18px;color:#008080"><strong>Define</strong></span>
				</td>

				<td class="table-info">
					<strong>Arrays with a numeric index <br>values are stored linearly.</strong><br><br>These arrays can store numbers, strings and any object but their index will be represented by numbers <br><br>Note: <br> In an indexed or numeric array, the <strong> indexes are automatically assigned and start with 0, and the values can be any data type.</strong>
				</td>

				<td class="table-warning">
					<strong>Array with strings index <br>each value can be assigned a specific key</strong><br><br>The associative arrays are very similar to numeric arrays in term of functionality <strong>but they are different in terms of their index.</strong>
				</td>
			</tr>


			{{-- create array --}}
			{{-- create array --}}
			{{-- create array --}}
			<tr>
				<td class="table-secondary">
					<span style="font-size: 18px;color:#008080"><strong>Create array</strong></span>
				</td>

				<td class="table-info">
					<strong>There are two ways to create indexed arrays: array() function or []</strong> <br><br>
					The index can be assigned automatically (index always starts at 0), like this:<br><br>$iteam = ["fish","meat","egg"]; <br><br><br>Array (
						[0] => fish 
						[1] => meat 
						[2] => egg 
					)</span><br>
					<span class="bg-danger" style="color: white">Imagine linear array in one row;</span>
				</td>

				<td class="table-warning">
					<strong>There are two ways to create an associative array: </strong> <br><br>
					<img class="ml-0" src="{{ asset('images/larabook/php/array0.1.png') }} " alt="model"  style="width: 560px;height: 420px;"><br>Array (
						[name] => fish 
						[color] => red 
						[age] => 10 
					)<br>
					<span class="bg-danger" style="color: white">Imagine linear array in one row;</span>
					
					<img class="ml-0" src="{{ asset('images/larabook/php/array0.2.png') }} " alt="model"  style="width: 560px;height: 300px;">
				</td>
			</tr>


			{{-- add value --}}
			{{-- add value --}}
			{{-- add value --}}
			<tr>
				<td class="table-secondary">
					<span style="font-size: 18px;color:#008080"><strong>Add Value</strong></span>
				</td>
				
				<td class="table-info">
					The index can be assigned value manually:<br><br>$cars[0] = "Volvo";<br>$cars[1] = "BMW";<br>$cars[2] = "Toyota";
				</td>

				<td class="table-warning">
					<img class="ml-0" src="{{ asset('images/larabook/php/array0.3.png') }} " alt="model"  style="width: 560px;height: 300px;">
				</td>
			</tr>


			{{-- normal access --}}
			{{-- normal access --}}
			{{-- normal access --}}
			<tr>
				<td class="table-secondary">
					<span style="font-size: 18px;color:#008080"><strong>Normal access</strong></span>
				</td>

				<td class="table-info">
					$cars = array("Volvo", "BMW", "Toyota"); <br><br> echo $car[0];//volv
				</td>

				<td class="table-warning">
					$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");<br><br>echo $age['peter'];//35
				</td>
			</tr>


			
			{{-- loop access --}}
			{{-- loop access --}}
			{{-- loop access --}}
			<tr>
				<td class="table-secondary">
					<span style="font-size: 18px;color:#008080"><strong>Loop through Access</strong></span>
				</td>

				<td class="table-info">
					One way :<br><strong>for($x = 0; $x < count($car); $x++) {echo $cars[$x];}</strong> or <br><br>Another way :<br> <strong>foreach( $cars as $value ) { echo $value; }</strong><br><strong>foreach( $cars as $key => $value ) { echo $value; }</strong> <br><br>
					<img class="ml-0" src="{{ asset('images/larabook/php/array5.8.png') }} " alt="model"  style="width: 560px;height: 350px;">
					<span class="bg-warning">Note: key list way no need</span>
				</td>

				<td class="table-warning">
					how it works:<br>
					<b>foreach($iteam as $value): (!use)</b><br><span class="text-danger"> On each iteration, the value of the current element is assigned to $value and the internal array pointer is advanced by one</span> <br><br>

					<br> <b>foreach($iteam as $key => $value)</b> <br>
					<span class="text-danger">The second form will additionally assign the current element's key to the $key variable on each iteration.</span> <br><br>
					Output: <br>
					(($value)): fish red 10 <br>
					(($key)): name color age <br>
					(($key))(($value)): name:fish color:red age:10

					<br><br><span class="bg-primary">Note: key list way no need</span>
				</td>
			</tr>


			{{-- vs --}}
			{{-- vs --}}
			{{-- vs --}}
			<tr>
				<td class="table-dark" style="color:white">VS</td>
				
				<td class="table-dark" style="color:white">
					$cities = array("London", "Paris", "New York"); <br><br>
					<span class="bg-success" style="color: white">print_r($cities);</span><br>Array ( [0] => London [1] => Paris [2] => New York )<br><br>
					<span class="bg-success" style="color: white">var_dump($cities);</span><br>array(3) { [0]=> string(6) "London" [1]=> string(5) "Paris" [2]=> string(8) "New York" } <br><br>print_r() less info 
				</td>
				
				<td class="table-dark" colspan="2" style="color:white">
					<br><img class="ml-0" src="{{ asset('images/larabook/php/array0.4.png') }} " alt="model"  style="width: 560px;height: 350px;">
				</td>
				
			
			</tr>
		</tbody>
</table>


	{{-- Multidimention array --}}
	{{-- Multidimention array --}}
	{{-- Multidimention array --}}
	<table class="table table-hover" style="font-size:17px">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 5%;background-color: #0000FF;color: white;">Multi-D Array </th>
				<th scope="col" style="width: 45%;color: #4169E1;">2-D</th>
				<th scope="col" style="width: 45%;color: #4169E1;">M-D</th>
			</tr>
		</thead>
		<tbody>
			{{-- define --}}
			{{-- define --}}
			{{-- define --}}
			<tr>
				<td class="table-secondary" style="color: #4169E1;"><strong>Define</strong></td>

				<td>
					<strong>Arrays containing one or more arrays</strong><br>A multi-dimensional array each element in the main array can also be an array. And each element in the sub-array can be an array, and so on. Values in the multi-dimensional array are accessed using multiple index. <br><br>However, arrays more than three levels deep are hard to manage for most people. - & point example and republic a function a recursivs a 
				</td>

				<td>
					<br> <span class="bg-warning">The dimension of an array indicates the number of indices you need to select an element. <br><br>two-dimensional array need two indices to select an element <br><br>three-dimensional array need three indices to select an element</span>
				</td>
			</tr>


			<div class="row">
				<div class="col-md-6">
					<img class="ml-0" src="{{ asset('images/larabook/php/array0.5.png') }} " alt="model"  style="width: 560px;height: 300px;"> <br><br>		
				</div>
				<div class="col-md-6">
					<img class="ml-0" src="{{ asset('images/larabook/php/array0.6.jpg') }} " alt="model"  style="width: 560px;height: 300px;"> <br><br>		
				</div>
			</div>
			{{-- Multi Index array --}}
			{{-- Multi Index array --}}
			{{-- Multi Index array --}}
			<tr>
				<td class="table-secondary" style="color: #4169E1;"><strong>Multi D Index Array</strong></td>

				<td class="table-warning">
					<img class="ml-0" src="{{ asset('images/larabook/php/array0.7.png') }} " alt="model"  style="width: 560px;height: 300px;"> <br><br>
					<img class="ml-0" src="{{ asset('images/larabook/php/array0.8.png') }} " alt="model"  style="width: 400px;height: 300px;"> <br><br>
				</td>

				<td class="table-warning">
					<img class="ml-0" src="{{ asset('images/larabook/php/array0.9.png') }} " alt="model"  style="width: 460px;height: 300px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/php/array1.0.png') }} " alt="model"  style="width: 460px;height: 300px;"><br><br>
				</td>
			</tr>
			


			{{-- Normal access --}}
			{{-- Normal access --}}
			{{-- Normal access --}}
			<tr>
				<td class="table-secondary" style="color: #4169E1;"><strong>Normal Access</strong></td>

				<td>
					<img class="ml-0" src="{{ asset('images/larabook/php/array1.1.png') }} " alt="model"  style="width: 560px;height: 300px;">
				</td>

				<td>
					<img class="ml-0" src="{{ asset('images/larabook/php/array1.2.png') }} " alt="model"  style="width: 560px;height: 300px;">
				</td>
			</tr>
			

			{{-- Loop access --}}
			{{-- Loop access --}}
			{{-- Loop access --}}
			<tr>
				<td class="table-secondary" style="color: #4169E1;"><strong>Loop through access</strong></td>

				<td class="table-warning">
					<img class="ml-0" src="{{ asset('images/larabook/php/array1.3.png') }} " alt="model"  style="width: 480px;height: 300px;"><br><br>
					<span class="bg-success">STEP : First (foreach)</span>
					<img class="ml-0" src="{{ asset('images/larabook/php/array1.4.png') }} " alt="model"  style="width: 480px;height: 300px;"><br><br>
					<span class="bg-success">STEP : Second (keylist)</span><br>
					<img class="ml-0" src="{{ asset('images/larabook/php/array1.5.png') }} " alt="model"  style="width: 480px;height: 300px;">
					<br><br>
					<span class="bg-warning">Note: key list way need to specify the element((col))</span>
				</td>

				<td class="table-warning">
					<span class="bg-success">STEP : First (foreach)</span>
					<img class="ml-0" src="{{ asset('images/larabook/php/array1.6.png') }} " alt="model"  style="width: 480px;height: 300px;"><br>
					<img class="ml-0" src="{{ asset('images/larabook/php/array1.7.png') }} " alt="model"  style="width: 480px;height: 300px;"><br><br>
					<span class="bg-success">STEP : Second (keylist)</span><br>
					<img class="ml-0" src="{{ asset('images/larabook/php/array1.8.png') }} " alt="model"  style="width: 480px;height: 300px;"><br><br>
					<span class="bg-warning">Note: key list way need to specify the element((col))</span>
				</td>
			</tr>



			{{-- Multi Associative array --}}
			{{-- Multi Associative array --}}
			{{-- Multi Associative array --}}
			<tr>
				<td class="table-secondary" style="color: #4169E1;"><strong>Multi D Index Array</strong></td>

				<td class="table-warning">
					<img class="ml-0" src="{{ asset('images/larabook/php/array1.9.png') }} " alt="model"  style="width: 460px;height: 300px;"><br><br>

					<img class="ml-0" src="{{ asset('images/larabook/php/array2.0.png') }} " alt="model"  style="width: 460px;height: 300px;"><br><br>

					<span class="bg-success">STEP : First (foreach)</span>
					<img class="ml-0" src="{{ asset('images/larabook/php/array1.8.png') }} " alt="model"  style="width: 480px;height: 300px;"><br><br>
				</td>

				<td class="table-warning">
					<img class="ml-0" src="{{ asset('images/larabook/php/array2.1.png') }} " alt="model"  style="width: 460px;height: 300px;"><br><br>
					<span class="bg-success">STEP : First (foreach)</span>
					<img class="ml-0" src="{{ asset('images/larabook/php/array2.4.png') }} " alt="model"  style="width: 480px;height: 300px;"><br><br>

					<span class="bg-success">STEP : First (keylist)</span>
					<img class="ml-0" src="{{ asset('images/larabook/php/array2.2.png') }} " alt="model"  style="width: 460px;height: 300px;">
				</td>
			</tr>
			

			<tr>
				<td class="table-dark" style="color:white"></td>
				<td class="table-dark" style="color:white">
					<span class="bg-danger" style="color: white">By default : Index array value start from with a key 0 <br><br>&& Associtive array value start from with a key defined</span>
				</td>
				<td class="table-dark" style="color:white">
					<span>Three dimentional array</span>
					<img class="ml-0" src="{{ asset('images/larabook/php/array2.3.png') }} " alt="model"  style="width: 560px;height: 400px;"> <br><br>
				</td>
			</tr>


			{{-- php reference --}}
			{{-- php reference --}}
			{{-- php reference --}}
			<tr>
				<td class="table-dark" style="color: #4169E1;"><strong>Array Reference</strong></td>

				<td class="table">
					<img class="ml-0" src="{{ asset('images/larabook/php/array4.0.png') }} " alt="model"  style="width: 530px;height: 560px;"><br><br>

					<img class="ml-0" src="{{ asset('images/larabook/php/array4.2.png') }} " alt="model"  style="width: 530px;height: 560px;"><br><br>

					<img class="ml-0" src="{{ asset('images/larabook/php/array4.4.png') }} " alt="model"  style="width: 530px;height: 560px;">
				</td>

				<td class="table">
					<img class="ml-0" src="{{ asset('images/larabook/php/array4.1.png') }} " alt="model"  style="width: 530px;height: 560px;"><br><br>

					<img class="ml-0" src="{{ asset('images/larabook/php/array4.3.png') }} " alt="model"  style="width: 530px;height: 560px;"><br><br>

				</td>
			</tr>
		</tbody>
	</table>
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- js array --}}
{{-- js array --}}
{{-- js array --}}
{{-- js array --}}
{{-- js array --}}
{{-- js array --}}
<br><br><h4 id="js_array" class="text-center" style="background-color:green;color:white;font-size: 18px;font-style: bold"><strong>JS Array Detail</strong><br></h4>

<table class="table table-hover" style="font-size:17px">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 5%;background-color: green;color: white;">Array</th>
				<th scope="col" style="width: 45%;font-size: 18px;color:#4169E1"></th>
				<th scope="col" style="width: 45%;font-size: 18px;color:#4169E1"></th>
			</tr>
		</thead>
		<tbody>
			{{-- define --}}
			{{-- define --}}
			{{-- define --}}
			<tr>
				<td class="table-secondary">
					<span style="font-size: 18px;color:#008080"><strong>Define</strong></span>
				</td>

				<td class="table-info">
					But quite often we find that we need an ordered collection, where we have a 1st, a 2nd, a 3rd element and so on. <br>
					Arrays are a special kind of objects, with numbered indexes. <br>
					<span class="text-danger">JavaScript does not support arrays with named indexes. <br>In JavaScript, arrays always use numbered indexes.</span><br><br>
 					The real strength of JavaScript arrays are the built-in array properties and methods: <br><br>
 					<b>The Difference Between Arrays and Objects </b><br>
					In JavaScript, arrays use numbered indexes.  <br>In JavaScript, objects use named indexes. 
				</td>

				<td class="table-info">
					<b>How to Recognize an Array </b><br>
					The problem is that the JavaScript operator typeof returns "object" <br>
					To solve this problem ECMAScript 5 defines a new method Array.isArray(): <br><br>
					<img class="ml-0" src="{{ asset('images/larabook/array/array2.0.png') }} " alt="model"  style="width: 560px;height: 150px;">

				</td>
			</tr>


			{{-- create && add value array --}}
			{{-- create && add value array --}}
			{{-- create && add value array --}}
			<tr>
				<td class="table-secondary">
					<span style="font-size: 18px;color:#008080"><strong>Create array</strong></span>
				</td>

				<td class="table-warning">
					<strong>There are two ways to create array: <del>new Array() or</del> [ ]</strong> <br><br>
					Syntax: <br>
					var array_name = [item1, item2, ...]; <br>
					<del>var cars = new Array("Saab", "Volvo", "BMW");</del>      
				</td>

				<td class="table-warning">
					<span style="font-size: 18px;color:#008080"><strong>Add Value</strong></span><br><br>
					<b>The index can be assigned value functionaly:</b><br>
						array.push("element");<br><br>

					<b>New element can also be added to an array using the length property:</b><br>var fruits = ["Banana", "Orange", "Apple", "Mango"]; <br>fruits[fruits.length] = "Lemon"; <br><br>

					<span class="alert alert-danger">Adding elements with high indexes can create undefined "holes" in an array:</span><br>
				</td>
			</tr>

			{{-- normal access --}}
			{{-- normal access --}}
			{{-- normal access --}}
			<tr>
				<td class="table-secondary">
					<span style="font-size: 18px;color:#008080"><strong>Normal access</strong></span>
				</td>

				<td class="table-info">
					<b>1. You access an array element by referring to the index number.</b><br>
					document.getElementById("demo").innerHTML = cars[0];</b><br><br>

					<b>2.  the full array can be accessed by referring to the array name(cars)</b><br>document.getElementById("demo").innerHTML = cars;<br><br>

					<b>Accessing the Last Array Element </b><br>
					var last = fruits[fruits.length - 1];

				</td>

				<td class="table-info">
					<span style="font-size: 18px;color:#008080"><strong>Loop through Access</strong></span>
				</td>
			</tr>


			{{-- vs --}}
			{{-- vs --}}
			{{-- vs --}}
			<tr>
				<td class="table-dark" style="color:white">vs</td>
				
				<td class="table-dark" style="color:white">
					
				</td>
				
				<td class="table-dark" colspan="2" style="color:white">
					
				</td>
			</tr>


			<tr>
				<td class="table-dark" style="color:white">Array <br>Reference</td>
				
				<td  style="color:white">
					<img class="ml-0" src="{{ asset('images/larabook/array/array4.0.png') }} " alt="model"  style="width: 560px;height: 480px;">
				</td>
				
				<td  colspan="2" style="color:white">
					<img class="ml-0" src="{{ asset('images/larabook/array/array4.1.png') }} " alt="model"  style="width: 560px;height: 480px;">
				</td>
			</tr>
		</tbody>
</table>
{{-- form --}}
{{-- form --}}
{{-- form --}}
<br><br><h4 id="function" class="text-center" style="background-color: #0000FF;color:white;font-size: 18px;font-style: bold"><strong>PHP <br>Form Handling</strong><br></h4>

{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- get vs post --}}
{{-- get vs post --}}

<span style="font-size: 18px;color: white;background-color: #8A2BE2;">Methods of Sending Information to Server</span>
<br><img class="ml-0" src="{{ asset('images/larabook/php/get.png') }} " alt="model"  style="width: 550px;height: 320px;"><br><br>
<p style="font-size: 17px"> A web browser communicates with the server typically using one of the <b>two HTTP (Hypertext Transfer Protocol) methods — GET and POST</b>. Both methods pass the information differently and have different advantages and disadvantages</p><br><br>

		<table class="table table-hover" style="font-size:17px">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 10%;background-color: #0000FF;color: white;font-size: 18px">Vs</th>
				<th scope="col" style="width: 45%;font-size:18px;color:#4169E1">get & post method ((php handler))</th>
				<th scope="col" style="width: 45%;font-size:18px;color:#4169E1">$_GET & $_POST super global</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong>Define</strong></span></td>
				<td class="table-info"></strong><img class="ml-0" src="{{ asset('images/larabook/php/form19.png') }} " alt="model"  style="width: 400px;height: 360px;"><br><br>
				</td>

				<td class="table-success"><img class="ml-0" src="{{ asset('images/larabook/php/form14.png') }} " alt="model"  style="width: 400px;height: 360px;"></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong>URL</strong></span></td>
				
				<td class="table-info">In GET method the data is sent as URL parameters that are usually <strong>strings of name and value pairs </strong> separated by ampersands (&) <br>EX: http://www.example.com/action.php?name=john&age=24 <br><br>In POST method the data is <strong>sent to the server as a package</strong> in a separate communication with the processing script.</td>
				
				<td class="table-success">$_GET associative array to access all the sent information either through<strong> form or the URL using GET method.</strong><br><br>
				$_POST associative array to access all the sent information using <strong>POST method or submitted.</strong></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong>Data state</strong></span></td>
				<td class="table-info"> However, Since the data sent by the GET method are displayed in the URL, it is <strong>possible to bookmark</strong> the page with specific query string values. <br> <strong>The data sent by GET method can be accessed using QUERY_STRING environment variable.</strong> <br>. This can be useful in some cases.</strong><br><br>However, because the variables are not displayed in the URL, it is <b>not possible to bookmark the page.</b></td>

				<td class="table-success">Both GET and POST create an array (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)). <br>This array holds key/value pairs, where keys are the <strong>names of the form controls and values are the input data</strong> from the user. <br><br></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong>Limitation</strong></span></td>
				<td class="table-info"><span class="bg-warning">GET can't be used to send binary data, like images or word documents, to the server.</span><br><br><strong>one can send text data (ASCII)  as well as binary data (uploading a file) using POST.</strong></td>

				<td class="table-success">$_GET is an array of variables passed to the current script <b>via the URL parameters.</b> <br><br>$_POST is an array of variables passed to the current script via the <b> HTTP POST method.</b></td>
			</tr>

			<tr>
				<td class="table-danger" style="color:white"></td>
				<td class="table-danger" style="color:white">Developers prefer POST for sending form data.</td>
				<td class="table-danger"><span style="color: white;" class="bg-danger">Both GET and POST are treated as $_GET and $_POST. </span></td>
			</tr>
		</tbody>
	</table><br><br>

{{-- form  --}}
{{-- form  --}}
{{-- form  --}}
	<table class="table table-hover" style="font-size:17px">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 6%;background-color: #0000FF;color: white;font-size: 18px">FORM</th>
				<th scope="col" style="width: 40%;font-size:18px;color:#4169E1"></th>
				<th scope="col" style="width: 40%;font-size:18px;color:#4169E1"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Form Define/Handling</strong></span></td>

				<td class="table-info"><span class="bg-success" style="color: white">get form</span><br><img class="ml-0" src="{{ asset('images/larabook/php/form2.png') }} " alt="model"  style="width: 300px;height: 320px;"><br><br>
				<span class="bg-success" style="color: white">post form</span><br><img class="ml-0" src="{{ asset('images/larabook/php/form.png') }} " alt="model"  style="width: 300px;height: 160px;">
				<br><img class="ml-0" src="{{ asset('images/larabook/php/form1.png') }} " alt="model"  style="width: 300px;height: 150px;"></td>

				<td class="table-info"><img class="ml-0" src="{{ asset('images/larabook/php/form27.png') }} " alt="model"  style="width: 300px;height: 350px;"></td>
			</tr>

			<tr>
				<td class="table-secondary"></td>

				<td class="table-warning">Forms are used to collect data from the users. <br><b>Comment forms,Subscribe forms,Contact us forms,Search Forms</b> <br><br>Creating the corresponding PHP script that will receive and process the form data</td>

				<td class="table-warning"><strong>1.When open a link on browser the browser use get method by default. <br><br>2.The all value of every form element in both methode is sent with its name (key/value pair) when submitting the form. <br><br><span class="bg-warning">The action attribute references a PHP file "process-form.php" that receives the data entered into the form when user submit it by pressing the submit button.</span></strong></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Form Element/Security</strong></span></td>

				<td class="table-info"><img class="ml-0" src="{{ asset('images/larabook/php/form3.png') }} " alt="model"  style="width: 380px;height: 300px;"><br><br><img class="ml-0" src="{{ asset('images/larabook/php/form4.png') }} " alt="model"  style="width: 380px;height: 300px;"></td>

				<td class="table-info"><img class="ml-0" src="{{ asset('images/larabook/php/form5.png') }} " alt="model"  style="width: 380px;height: 300px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/php/form21.png') }} " alt="model"  style="width: 380px;height: 300px;"></td>
			</tr>

			<tr>
				<td class="table-secondary"></td>

				<td class="table-warning">If we do not prevent users from submitting malicious data like this, hackers can add javascript code to your website and change the behavior of your website. <br><br>Be aware of that any JavaScript code can be added inside the <'script> tag! A hacker can redirect the user to a file on another server, and that file can hold malicious code that can alter the g,lobal variables or submit the form to another address to save the user data, for example.</td>

				<td class="table-warning">Big Note on PHP Form Security <br><br><b>The $_SERVER["PHP_SELF"] variable can be used by hackers! <br><br>If PHP_SELF is used in your page then a user can enter a slash (/) and then some Cross Site Scripting (XSS) commands to execute.</b></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Form Validation</strong></span></td>

				<td class="table-info"><img class="ml-0" src="{{ asset('images/larabook/php/form6.png') }} " alt="model"  style="width: 410px;height: 330px;"><br><br>
				<span style="color: white;" class="bg-success">STEP 1:in form validation</span><br><img class="ml-0" src="{{ asset('images/larabook/php/form12.png') }} " alt="model"  style="width: 410px;height: 500px;"></td>

				<td class="table-info"><span style="color: white;" class="bg-success">STEP 2:Value take & outside function validation</span><br><img class="ml-0" src="{{ asset('images/larabook/php/form7.png') }} " alt="model"  style="width: 500px;height: 450px;"><br><br>
				<span style="color: white;" class="bg-success">STEP 3:Value take & inside validation</span><br><img class="ml-0" src="{{ asset('images/larabook/php/form23.png') }} " alt="model"  style="width: 500px;height: 450px;"></td>
				
			</tr>

			<tr>
				<td class="table-secondary"></td>

				<td class="table-warning"><strong>3 stage validation</strong> <br>1. Validate the request method. (Optional) <br>2. Remove unnecessary white spaces in the input. <br>3. Check whether input matches with the input type.</td>

				<td class="table-warning">You need to validate form data to protect your script from malicious code. <br> Proper validation of form data is important to protect your form from hackers and spammers! <br><br><span class="bg-danger" style="color: white;">Never trust user inputs!</span></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Required Fields / <br>Form sticky</strong></span></td>

				<td class="table-info"><span style="color: white;" class="bg-success">STEP 4:value take & inside validation with outside fun</span><img class="ml-0" src="{{ asset('images/larabook/php/form9.png') }} " alt="model"  style="width: 500px;height: 550px;"> </td>

				<td class="table-info"><img class="ml-0" src="{{ asset('images/larabook/php/form13.png') }} " alt="model"  style="width: 500px;height: 550px;"></td>
			</tr>

			<tr>
				<td class="table-secondary"></td>

				<td class="table-warning">The script remembers which fields the user has already filled in, <br>and prefills those fields when the form redisplayed due to validation error. <br> <strong>Sticky inputs are auto-filling inputs after submitting</strong> <br></td>

				<td class="table-warning">
				<strong>we also need to show which radio button that was checked. <br>For this, we must manipulate the checked attribute (not the value attribute for radio buttons):</strong></td>
			</tr>
			
			<tr>
				<td class="table-secondary"></td>

				<td class="table-warning"></td>

				<td class="table-warning"></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>p_reg(Perl-compatible regular expression.)</strong></span></td>

				<td class="table-info"><img class="ml-0" src="{{ asset('images/larabook/php/form11.png') }} " alt="model"  style="width: 500px;height: 500px;"></td>

				<td class="table-info"></td>
			</tr>

			<tr>
				<td class="table-secondary"></td>
				<td class="table-warning">The preg_match() function searches a string for pattern, <b>returning true if the pattern exists, and false otherwise.</b></td>

				<td class="table-warning"></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#4169E1"><strong>Sanitizing and Validating Form Data</strong></span></td>

				<td class="table-info"><img class="ml-0" src="{{ asset('images/larabook/php/form15.png') }} " alt="model"  style="width: 400px;height: 500px;"><br><br><img class="ml-0" src="{{ asset('images/larabook/php/form16.png') }} " alt="model"  style="width: 400px;height: 500px;"></td>

				<td class="table-info"><img class="ml-0" src="{{ asset('images/larabook/php/form17.png') }} " alt="model"  style="width: 400px;height: 500px;"><br><br><img class="ml-0" src="{{ asset('images/larabook/php/form18.png') }} " alt="model"  style="width: 400px;height: 500px;"></td>
			</tr>


			<tr>
				<td class="table-secondary" style="color:white"></td>
				<td class="table-info" style="color:white"><img class="ml-0" src="{{ asset('images/larabook/php/form24.png') }} " alt="model"  style="width: 500;height: 550px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/php/form25.png') }} " alt="model"  style="width: 500;height: 550px;"></td>

				<td class="table-info" style="color:white"><img class="ml-0" src="{{ asset('images/larabook/php/form26.png') }} " alt="model"  style="width: 500px;height: 550px;"></td>
				
			</tr>

			<tr>
				<td class="table-secondary"></td>

				<td class="table-warning"><strong>Validating data = Determine if the data is in proper form. <br>Sanitizing data = Remove any illegal character from the data.</strong></td>

				<td class="table-warning"></td>
			</tr>
			<tr>
				<td class="table-dark"></td>

				<td class="table-dark" style="color: white">It is a good practice to validate the request method. <br><br><span style="color: white;" class="bg-success">NOTE:</span> <br><span class="bg-danger" style="color: white">" " is an empty string <strong>but the variable is still set.</strong></span> such as submit with empty field .. here is check with empty() not isset() . <br><span style="color: black" class="bg-warning"> such as trinary check other or check</span><br><br>Ex : if $name = ""; then use empty() <br>if name is not initialize with  "" (empty string) then use isset() </td>

				<td class="table-dark" style="color: white">Tip: die() function terminates the script after echoing its first parameter.  <br><br><img class="ml-0" src="{{ asset('images/larabook/php/form22.png') }} " alt="model"  style="width: 380px;height: 300px;"></td>
			</tr>
		</tbody>
	</table><br><br>

{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- php advance  --}}
{{-- php advance  --}}
{{-- php advance  --}}
<br><h4 class="alert alert-danger text-center" style="font-size: 18px;font-style: bold"><strong>Php Advance</strong></h4>
<table class="table table-hover" style="font-size:17px">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 10%" style="font-size: 18px;color:#008080">date(format,timestamp)</th>
				<th scope="col" colspan="2" style="width: 20%"><span style="font-size: 18px;color:#008080"><strong>Get a Simple Date</strong></span></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong>function</strong></span> <br><br></td>
				<td class="table-dark" style="color:white"><img class="ml-0" src="{{ asset('images/larabook/php/date.png') }} " alt="model"  style="width: 440px;height: 350px;"><br>Example : <br>&copy; 2010- echo date("Y");</td>
				<td class="table-dark" style="color:white"><img class="ml-0" src="{{ asset('images/larabook/php/date1.png') }} " alt="model"  style="width: 440px;height: 350px;"></td>
			</tr>
			<tr>
				<td class="table-dark"></td>
				<td class="table-dark"></td>
				<td class="table-dark"></td>
				<td class="table-dark"></td>
			</tr>
			<tr>
				<td class="table-secondary" colspan="1"  style="color:white"><span style="font-size: 18px;color:#008080"><strong>Get Your Time Zone</strong></span></td>
				<td class="table-secondary" colspan="1"  style="color:white"><span style="font-size: 18px;color:#008080"><strong>Create a Date With PHP mktime()</strong></span></td>
				<td class="table-secondary" colspan="1"  style="color:white"><span style="font-size: 18px;color:#008080"><strong>Create a Date From a String </strong></span></td>
			</tr>
			<tr>
				<td class="table-warning">If the time you got back from the code is not the right time, it's probably because your server is in another country or set up for a different timezone. <span class="bg-success">date_default_timezone_set("Asia/Dhaka"); <br>echo "The time is " . date("h:i:sa");</span> <br><strong>Note:</strong><br>Note that the PHP date() function will return the current date/time of the server!</td>
				<td class="table-info">The optional timestamp parameter in the date() function specifies a timestamp. If you do not specify a timestamp, the current date and time will be used (as shown in the examples above). <br><strong>mktime(hour,minute,second,month,day,year)</strong><br><img class="ml-0" src="{{ asset('images/larabook/php/date2.png') }} " alt="model"  style="width: 440px;height: 350px;"> </td>
				<td class="table-warning"><img class="ml-0" src="{{ asset('images/larabook/php/date3.png') }} " alt="model"  style="width: 440px;height: 350px;"></td>
			</tr>
		</tbody>
	</table>
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- Php File  --}}
{{-- Php File  --}}
{{-- Php File  --}}
<table class="table table-hover" style="font-size:17px">
		<thead>
			<tr class="table-active">
				<th scope="col"  style="font-size: 18px;color:#008080">file</th>
				<th scope="col" style="width: 45%"><span style="font-size: 18px;color:#008080"><strong>Include Files</strong></span></th>
				<th scope="col" style="width: 45%"><span style="font-size: 18px;color:#008080"><strong>File Handling</strong></span></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong></strong></span> <br><br></td>
				<td class="table-success" ><span class="bg-success">Define</span><br>takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement. <strong>(before the server executes it)</strong><br><br>EX: header, footer, or menu file </td>
				<td class="table-warning" >You often need to open and process a file for different tasks. <span class="bg-info">Be careful when manipulating files!</span></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong></strong></span> <br><br></td>
				<td class="table-success" ><span class="bg-success">Where to use</span><br>So, if you want the execution to go on and show users the output, even if the include file is missing, use the include statement. <br><br> Otherwise, in case of FrameWork, CMS, or a complex PHP application coding, always use the require statement to include a key file to the flow of execution. This will help avoid compromising your application's security and integrity, just in-case one key file is accidentally missing.</td>

				<td class="table-warning" style="color:white"><span class="bg-success">Where to use</span><br>So, The readfile() function reads a file and writes it to the output buffer. <br><span class="bg-danger">The readfile() function is useful if all you want to do is open up a file and read its contents.</span></td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong></strong></span> <br><br></td>
				<td class="table-success"><span class="bg-success">inclu vs require</span><br>when a file is included with the include statement and PHP cannot find it, the script will continue to execute <br>If we do the same example using the require statement, the echo statement will not be executed because the script execution dies after the require statement returned a fatal error. <br><br><span class="bg-info">Use require when the file is required by the application. <br>Use include when the file is not required and application should continue when file is not found.</span></td>
				<td class="table-warning"></td>
			</tr>
			
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong>function</strong></span> <br><br></td>
				<td class="table-secondary" scope="col" style="width: 45%"><span style="font-size: 18px;color:#008080"><strong>File Open/Read/Close</strong></span></td>
				<td class="table-secondary" scope="col" style="width: 45%"><span style="font-size: 18px;color:#008080"><strong>File Create/Write</strong></span></td>
			</tr>
			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong></strong></span> <br><br></td>
				<td class="table-info" >A better method to open files is with the fopen() function. This function gives you more options than the readfile() function. <br><br> The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened. <br><img class="ml-0" src="{{ asset('images/larabook/php/file.png') }} " alt="model"  style="width: 380px;height: 320px;"></td>
				<td class="table-success">The fopen() function is also used to create a file. <br><strong>If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).</strong> <br><br>The file will be created in the same directory where the PHP code resides:</td>
			</tr>

			<tr>
				<td class="table-secondary"><span style="font-size: 18px;color:#008080"><strong></strong></span> <br><br></td>
				<td class="table-info" ><span class="bg-success">function</span><br>File - fread()--PHP Read File - fread() <br>fread($myfile,filesize("webdictionary.txt"));the second parameter specifies the maximum number of bytes to read. <br><br>fclose()--The fclose() function is used to close an open file.<span class="bg-info">It's a good programming practice to close all files after you have finished with them. You don't want an open file running around on your server taking up resources!</span><br><br>The fgets() function is used to read a single line from a file. <br>Note :: After a call to the fgets() function, the file pointer has moved to the next line. <br><br>The fgetc() function is used to read a single character from a file. <br> Note:: After a call to the fgetc() function, the file pointer moves to the next character. <br><br><img class="ml-0" src="{{ asset('images/larabook/php/file1.png') }} " alt="model"  style="width: 400px;height: 330px;"> <br><br></td>
				<td class="table-success" >The fwrite() function is used to write to a file. <br><img class="ml-0" src="{{ asset('images/larabook/php/file2.png') }} " alt="model"  style="width: 420px;height: 350px;"> <br><br><br><strong class="bg-secondary">PHP File Upload</strong> <br>Check if File Already Exists <br>Limit File Size <br>Limit File Type</td>
			</tr>
		</tbody>
	</table>
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- session and cookie --}}
{{-- session and cookie --}}
{{-- session and cookie --}}
<h4 class="alert alert-danger text-center" style="font-size: 18px;">Cookies Vs Session (filter w3 at last)</h4>
	<table class="table table-hover" style="font-size:17px">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 10%"><span style="font-size: 18px;color:#008080;"><strong>VS</strong></span></th>
				<th scope="col" style="width: 40%"><span style="font-size: 18px;color:#008080;"><strong>Session</strong></span></th>
				<th scope="col" style="width: 40%"><span style="font-size: 18px;color:#008080;"><strong>Cookie</strong></span></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="table-secondary"><strong>Define</strong></td>

				<td class="table-warning">A session is a way to store information (in variables) to be used across multiple pages. <br>Sessions are a simple way to store data for individual users against a unique session ID. <br>This can be used to persist state information between page requests. <br><br>But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state. <br>Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). <br><br> By default, session variables last until the user closes the browser.</td>

				<td> A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.</td>
			</tr>
			<tr>
				<td class="table-secondary"><strong>Usage</strong></td>

				<td class="table-warning"> Session variables hold information about one single user, and are available to all pages in one application. 
				</td>

				<td><b>A cookie</b> is often used to identify a user.</td>
			</tr>
			<tr>
				<td class="table-secondary"><strong>ID</strong></td>

				<td class="table-warning"><strong>A session ID is a unique number that a Web site's server assigns a specific user for the duration of that user's visit (session).</strong><br><br> Session IDs are normally sent to the browser via session cookies and the ID is used to retrieve existing session data. <br><br>The session ID can be stored as a cookie, form field, or URL (Uniform Resource Locator).</td>

				<td><img src="{{ asset('images/larabook/php/session.png') }}" alt="session vs cookie" style="width: 350px;height: 280px;"></td>
			</tr>
			<tr>
				<td class="table-secondary"><strong>how it work</strong></td>

				<td class="table-warning"><img src="{{ asset('images/larabook/php/session1.png') }}" alt="session vs cookie" style="width: 550px;height: 250px;">
				</td>

				<td></td>
			</tr>
			<tr>
				<td class="table-dark" style="color:white"><strong>function</strong></td>

				<td class="table-dark" style="color:white">Also notice that all session variable values are stored in the global $_SESSION variable: <br><span class="bg-success">session_start()</span><br>Note: The session_start() function must be the very first thing in your document. Before any HTML tags. <br><img src="{{ asset('images/larabook/php/session3.png') }}" alt="session vs cookie" style="width: 450px;height: 320px;"> <br><br>
				<span class="bg-success">to show all the session variable values for a user session </span><br>print_r($_SESSION);<br><br><span class="bg-success">Modify a PHP Session Variable</span><br>To change a session variable, just overwrite it. <br><br><span class="bg-success">Destroy a PHP Session</span><br>To remove all global session variables and destroy the session, use <br> session_unset() <br>and session_destroy():</td>

				<td class="table-dark" style="color:white">setcookie(name, value, expire, path, domain, secure, httponly);<br>Only the name parameter is required. All other parameters are optional. <br><br><span class="bg-success">Create/Retrieve a Cookie </span><br><span><strong>Note: The setcookie() function must appear BEFORE the <'html> tag.</strong></span><br><br><span class="bg-success">Modify a Cookie Value</span><br>To modify a cookie, just set (again) the cookie using the setcookie() function: <br><br><span class="bg-success">Delete a Cookie</span><br>To delete a cookie, use the setcookie() function with an expiration date in the past: <br>// set the expiration date to one hour ago // setcookie("user", "", time() - 3600);<br><br><span class="bg-success">Check if Cookies are Enabled</span><br><img src="{{ asset('images/larabook/php/session2.png') }}" alt="session vs cookie" style="width: 550px;height: 250px;"></td>
				
			</tr>
		</tbody>
	</table>
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- class --}}
{{-- class --}}
{{-- class --}}
<h4 class="alert alert-danger text-center" style="font-size: 18px;">PHP OOP</h4>
	<table class="table table-hover" style="font-size:17px">
		<thead>
			<tr class="table-active">
				<th scope="col" style="width: 10%"><span style="font-size: 18px;color:#008080;"><strong>Topic</strong></span></th>
				<th scope="col" style="width: 30%"><span style="font-size: 18px;color:#008080;"><strong>Define</strong></span></th>
				<th scope="col" style="width: 30%"><span style="font-size: 18px;color:#008080;"><strong>Function</strong></span></th>
				<th scope="col" style="width: 30%"><span style="font-size: 18px;color:#008080;"><strong>Use & Note</strong></span></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="table-secondary"><strong>class & object</strong></td>

				<td>The first term we find in OOP is class. A class is a blueprint. It is a piece of code describing how to manage a topic or task in the way we want. <br><br>An Object is an instance of a class. It is like a house built from the blueprint. You can build more than one object from a class like creating multiple houses from a blueprint.</td>

				<td>You can use the <span class="bg-success">instanceof keyword</span> to check if an object belongs to a specific class: </td>

				<td>Note: In a class, variables are called properties and functions are called methods! <br><br><strong>Start the class name with an uppercase character.(ex: TowerHouse, LongHouse, CourtyardHouse)</strong> <br><br>Tip: When accessing properties and methods of an object through the object operator, the dollar sign $ is not used with the property or method name. <br><br>It is considered as a bad practice to directly accessing properties from outside the class with ->.</td>
			</tr>
			<tr>
				<td class="table-secondary"><strong>propertise & method</strong></td>

				<td class="table-warning"><img class="ml-0" src="{{ asset('images/larabook/php/class.png') }} " alt="model"  style="width: 320px;height: 280px;"></td>

				<td class="table-warning">Changing a property value using methods <br><br>class House {<br>	public $primaryColor = 'black';((or if default .!value))<br>public function changeColor($color) {<br>$this ->primaryColor = $color;} <br>}

</td>

				<td class="table-warning"></td>
			</tr>
			<tr>
				<td class="table-secondary"><strong>$this</strong></td>

				<td class="table-success">The $this keyword refers to the current object, and is only available inside methods. <br><br><strong>for non static member</strong><br><br>We could access the current object with $this keyword. <br>But, we needed to run two steps of code to create a object ($house = new House()) and set its data ($house -> setData(...)). What if we could set the data when we create the object?</td>
				<td class="table-success" colspan="2"><img class="ml-0" src="{{ asset('images/larabook/php/this.png') }} " alt="model"  style="width: 550px;height: 350px;"> <br></td>
				
			</tr>
			<tr>
				<td class="table-secondary" rowspan="2"><strong>__construct & __destruct Function</strong></td>

				<td class="table-warning" rowspan="2">A constructor allows you to initialize an object's properties upon creation of the object. <br><br>If you create a __construct() function, PHP will automatically call this function when you create an object from a class. <br><br>A destructor is called when the object is destructed or the script is stopped or exited/end. <br><br><strong>The example below has a __construct() function that is automatically called when you create an object from a class, and a __destruct() function that is automatically called at the end of the script:</strong><br><br>Would be use when create object & value initialize such as age,name etc.</td>

				<td class="table-warning"><img class="ml-0" src="{{ asset('images/larabook/php/constructor.png') }} " alt="model"  style="width: 320px;height: 280px;"></td>
				<td class="table-warning">Tip: As constructors and destructors helps reducing the amount of code, they are very useful! <br><br><strong>The __construct() method should always have public visibility</strong> <br><br>But, if you have a constructor with arguments, you should send the values for those arguments when you create it.</td>
				
			</tr>
			<tr>
				<td class="table-warning"><img class="ml-0" src="{{ asset('images/larabook/php/constructor1.png') }} " alt="model"  style="width: 320px;height: 280px;"></td>
				<td>Note: The __desctructor method will only be called when the current PHP script is fully executed by reaching the last line of it, or by exiting it using exit() or die() functions.</td>
			</tr>

			<tr>
				<td class="table-secondary" rowspan="2"><strong> Access Modifiers</strong></td>

				<td class="table-success">public - the property or method can be accessed from everywhere. This is default <br><br>protected -accessed within the class and by classes derived from that class <br>A private class member can only be accessed from the methods in the class.<br><br>private - ONLY be accessed within the class <strong>((can with the public ot protected function))</strong><br><br>Properties cannot be declared without a visibility keyword.</td>

				<td class="table-success" colspan="2"><br><img class="ml-0" src="{{ asset('images/larabook/php/access.png') }} " alt="model"  style="width: 520px;height: 450px;"></td>

		
			</tr>

			<tr>
				<td class="table-success"></td>
				<td class="table-success" colspan="2"><img class="ml-0" src="{{ asset('images/larabook/php/access1.png') }} " alt="model"  style="width: 640px;height: 430px;"></td>
			</tr>

			<tr>
				<td class="table-secondary" rowspan="2"><strong> Inheritance</strong></td>

				<td class="table-success">The child class will inherit all the <strong>public and protected</strong>  properties and methods from the parent class. In addition, it can have its own properties and methods. <br><br>Note: A child class can also be inherited by another class. <br><br><img class="ml-0" src="{{ asset('images/larabook/php/inheritance5.png') }} " alt="model"  style="width: 400px;height: 500px;"></td>
				<td class="table-success" colspan="2"><img class="ml-0" src="{{ asset('images/larabook/php/inheritance.png') }} " alt="model"  style="width: 640px;height: 430px;"></td>
			</tr>
			<tr>
				
				<td class="table-success"><img class="ml-0" src="{{ asset('images/larabook/php/inheritance2.png') }} " alt="model"  style="width: 400px;height: 500px;"></td>
				<td class="table-success"><img class="ml-0" src="{{ asset('images/larabook/php/inheritance3.png') }} " alt="model"  style="width: 400px;height: 500px;"></td>
				<td class="table-success"><img class="ml-0" src="{{ asset('images/larabook/php/inheritance4.png') }} " alt="model"  style="width: 400px;height: 500px;"></td>
				
			</tr>
			<tr>
				<td class="table-secondary"><strong>Class Constants</strong></td>

				<td class="table-warning">Class constants can be useful if you need to define some constant data within a class. <br><br>Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.</td>
				<td class="table-warning" colspan="2"><img class="ml-0" src="{{ asset('images/larabook/php/inheritance1.png') }} " alt="model"  style="width: 640px;height: 430px;"></td>
			</tr>
		</tbody>
	</table>
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- Defination  --}}
{{-- Defination  --}}
{{-- Defination  --}}
<br><h4 class="alert alert-info text-center" style="font-size: 18px;font-style: bold"><strong>Defination</strong></h4>
<ul style="list-style-type:decimal;font-size: 17px;">
	
	<li><span class="bg-secondary text-white" style="font-size: 18px;">Parse</span><br><strong>Parsing</strong>A parser is a computer programme that makes your code work. <br> ((means interpreting the data with whatever language u are using at the moment.))
	</li><br>
	

	<li><span class="bg-secondary text-white" style="font-size: 18px;">Compiler & Interpreter</span><br>
	<br><img class="ml-0" src="{{ asset('images/larabook/php/compiler.jpg') }} " alt="model"  style="width: 350px;height: 260px;"><br>
	Compiler : Compilers are used to convert high level languages (like C, C++ ) into machine code .Similarly, c and c++ are compiled languages (the final programs do not need an interpreter)and can run on client or server hardware. <br><br>Interpreters and compilers are very similar in structure. The main difference is that an interpreter directly executes the instructions without previously converting them to an object code or machine code. Examples of interpreted languages are php, Perl, Python and Matlab. <br>in the source programming language while a compiler translates those instructions into efficient machine code.
	</li><br>
		
	<li><span class="bg-secondary text-white" style="font-size: 18px;">Recursive</span><br><strong>Recursive</strong> means call itself.
	</li><br>

	<li><span class="bg-secondary text-white" style="font-size: 18px;">IDE</span><br><strong>Intergrated Development Environments (IDE) </strong>is a text editor with more advantage feature.</li><br>

	<li><span class="bg-secondary text-white" style="font-size: 18px;">Primitive Datatype</span><br></span><strong>Primitive Datatype</strong> Primitive data types are those data types which are used by programmers when creating variables in their program. For example, boolean, char, byte, short, int, long, float, and double.
	</li><br>

	<li><span class="bg-secondary text-white" style="font-size: 18px;">Scalar Datatype</span><br></span><strong>Scalar Datatype</strong> hold a single data item rather array. For example, boolean, char, byte, short, int, long, float, and double.
	</li><br>

	<li><span class="bg-secondary text-white" style="font-size: 18px;">An expression</span><br> in a programming language is a combination of one or more constants, variables, operators, and functions that the programming language interprets and computes to produce another value.	
	</li><br>

	<li><span class="bg-secondary text-white" style="font-size: 18px;">XSS</span><br>Cross-site scripting (XSS) is a type of computer security vulnerability typically found in Web applications. XSS enables attackers to inject client-side script into Web pages viewed by other users.	
	</li><br>

	<li><span class="bg-secondary text-white" style="font-size: 18px;">Cache data </span>(get methode)<br>Cached data is nothing but files, images, scripts and other media files stored on your devices by the website or app. Data is stored on your devices in a reserved space, so the next time when you are visiting the app or website,
	</li><br>

	
</ul><br><br>


{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- Dictionary --}}
{{-- Dictionary --}}
{{-- Dictionary --}}
<br><br><h4 class="alert alert-info text-center" style="font-size: 18px;font-style: bold"><strong>Dictionary</strong></h4>
<ul style="font-size: 17px;">
	<li><strong>acronym (বিভিন্ন শব্দের আদ্যক্ষর দিয়ে গঠিত সংক্ষিপ্ত নির্দেশক শব্দ)</strong></li>
	<li><strong>embedded (বসান) </strong>ones inside another(php inside html)</li>
	<li><strong> compiled( সঙ্কলন করা)</strong></li>
	<li><strong> scripte(লিপি)</strong></li>
	<li><strong> digest(পরিপাক করা)</strong></li>
	<li><strong> coalesc(সমবেত হত্তয়া)</strong></li>
	<li><strong> Identical(অভিন্ন)</strong></li>
	<li><strong> alias(উপনাম)</strong></li>
	<li><strong> procedure(কার্যপ্রণালী)</strong></li>
	<li><strong> routine(দৈনন্দিন)</strong></li>
	<li><strong> exploit(কাজে লাগান)</strong></li>
</ul>


<p><strong>Scope resolution operator(::)</strong>
Used for access static method properties through classes.
</p>
<p><strong>Closure:</strong>
is a function that have no name--an anonymous function.
</p>
<p>callback function may be called dynamically by PHP</p>
<p><strong>(->object operator):</strong>
use class property and method through instance.
</p>
	{{-- trait detail--}}
	{{-- trait detail--}}
	{{-- trait detail--}}
<h4 class="alert alert-warning text-center" style="font-size: 18px;">Trait</h4>
<h3>Trait briefly given below</h3>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>A Trait is similar to a class, but only intended to group functionality in a fine-grained and consistent way. It is not possible to instantiate a Trait on its own. It is an addition to traditional inheritance and enables horizontal composition of behavior; that is, the application of class members without requiring inheritance. </li>
	<li>Creating a Trait is just like defining a class.A Trait is basically just a way to “copy and paste” code during run time.</li>
	<li>Even better, if you find another common method in your models that relates to how the products and brand should be interacted with, the trait might not be a bad place to keep it.</li>
	<li>“Traits are a mechanism for code reuse in single inheritance languages such as PHP. </li>
	<li>A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies. The semantics of the combination of Traits and classes is defined in a way which reduces complexity, and avoids the typical problems associated with multiple inheritance and Mixins.</li>
	<li>Example: <pre>trait SharePost {
 
  public function share($item)
  {
    return 'share this post';
  }
 
}</pre></li>

<li>You could then include this Trait within other classes like this: <pre>class Post {
 
  use SharePost;
 
}
 
class Comment {
 
  use SharePost;
 
}</pre></li>
<li>Now if you were to create new objects out of these classes you would find that they both have the share() method available: <pre>$post = new Post;
echo $post->share(''); // 'share this post' 
 
$comment = new Comment;
echo $comment->share(''); // 'share this post'</pre></li>
</ul>


@endsection
