@extends('LaraBook.index')
@section('title','php')
@section('content')
<h2 id="xampp" class="text-center"><strong>XAMPP & Apache</strong></h2>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li><strong>XAMPP</strong><br><strong>XAMPP stands for Cross-Platform (X), Apache (A), MySQL (M), PHP (P) and Perl (P).</strong><br><strong>XAMPP is a software distribution</strong> which provides the Apache web server, MySQL database (actually MariaDB), Php and Perl (as command-line executables and Apache modules) all in one package. It is available for Windows, MAC and Linux systems.WAMP-- Stands for "Windows, Apache, MySQL, and PHP." </li><br>

	<li><strong>Apache</strong><br>Apache is a cross-platform software, therefore it works on both Unix and Windows servers.<strong>The server and the client communicate through the HTTP protocol and Apache is responsible for the smooth and secure communication between the two machines.</strong> <br>The name 'Apache' was chosen from respect for the Native American Indian tribe of Apache (Indé), well-known for their superior skills in warfare strategy and their inexhaustible endurance.</li>
</ul><br>

<h2 id="port" class="text-center"><strong>Localhost , IP & Ports</strong></h2>
<br><img class="ml-5" src="{{ asset('images/larabook/mysql/port.png') }} " alt="model"  style="width: 800px;height: 350px;"> <br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li><strong>Localhost</strong><br><strong>(Enviornment -- take palce in PC through XAMPP --my)</strong>The local machine is defined as "localhost," which gives it an IP address of 127.0.0.1. <br> “In order to publish a website online, you need a Web host. The Web host stores all the pages of your website and makes them available to computers connected to the Internet”</li>	<br>

	<li><strong>Server</strong><br>A Web server is a program that uses HTTP (Hypertext Transfer Protocol) to serve the files that form Web pages to users, in response to their requests, which are forwarded by their computers' HTTP clients.</li><br>
	
	<li><strong>IP</strong><br>
	The Internet Protocol (IP) is the method or protocol by which data is sent from one computer to another on the Internet. Each computer (known as a host) on the Internet has at least one IP address that uniquely identifies it from all other computers on the Internet.
	</li><br>
	
	<br><img class="ml-5" src="{{ asset('images/larabook/mysql/Hypertext.png') }} " alt="model"  style="width: 800px;height: 350px;"> <br><br>
	<li><strong>Port</strong><br> <strong>You have an IP address (127.0.0.1--my), and then many ports on that IP address.</strong> When a program on your computer sends or receives data over the Internet it sends that data to an ip address and a specific port on the remote computer, and receives the data on a usually random port on its own computer. <br>

	<strong>IP address + Port defines address of the particular service on the particular system.</strong> Port number is used to identify an application/services which you want to talk to on your system. <em> <strong>Some predefined ports like 80 = HTTP server</strong></em>, 23 = Telnet <br>

	<strong>A Port number is a way to identify a specific process to which an Internet or other network message is to be forwarded when it arrives at a server.(The default port used by Apache is 80 .)</strong> For the Transmission Control Protocol and the User Datagram Protocol, a port number is a 16-bit integer that is put in the header appended to a message unit.</li><p class="text-danger">EX:Some predefined ports like 80 = HTTP server</p><br>
	
	<li><strong>80 VS 8080 vs(8000)</strong><br>You must be well aware about the fact that ‘port 80’ is a well-known port for ‘HTTP’ service.Here, ‘port 8080’ is registered as an alternative port for ‘HTTP’ service. <br>
	A server can open whichever port it likes. 8000 and 8080 are common HTTP ports for many web servers <br><br> 
	<em>“If you have a web-server which is already running on default ‘port 80’ and you need to host another web-server on ‘HTTP’ service, then, you will have to host it on ‘port 8080’ which is a best practice. 
	But, not mandatory. You can use any other custom port instead of ‘8080’. The only thing you have to make sure is that the port you assign doesn’t conflict with any other being used in your network".</em>
	</li><br>


</ul>
@endsection
