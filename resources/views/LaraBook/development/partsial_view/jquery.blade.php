<table id="jquery" class="table table-hover" style="font-size:17px">
    <tbody>
      <tr class="table-active">     
          <td colspan="4" style="background-color: #0000FF;color: white; ">
            
          </td>
        </tr>
      <tr class="table-active">
        <th scope="col" style="width: 5%" style="font-size: 18px;color:#008080">Topic</th>
        <th scope="col" style="width: 46%" style="font-size: 18px;color:#008080"></th>
        <th scope="col" style="width: 46%"></th>
      </tr>
      {{-- intro --}}
      {{-- intro --}}
      {{-- intro --}}
      <tr>
        <td class="table-dark" style="color:#FF1493">Intro</td>
        <td>
          ** <span class="bg-success" style="color: white;">Intro</span><br>
          1. Production version - minified and compressed <br>
          Development version -  (uncompressed and readable code)<br>
          Both versions can be downloaded from jQuery.com. <br><br>
          2. select (query) HTML elements and perform "actions" on them. <br><br>
          3. $(document).ready() . This is to prevent any jQuery code from running before the document is finished loading (is ready / DOM actually loaded ). <b>jQuery() is used by $()</b> <br><br>

          <img src="{{ asset('images/larabook/javascript/jquery/tuto0.0.png') }}" alt="" style="width:550px;height: 200px;"><br><br>
        </td>

       
        <td>
          
        </td>
      </tr>


        {{-- selector --}}
        {{-- selector --}}
        {{-- selector --}}
       <tr>
        <td class="table-dark" style="color:#FF1493">Intro</td>
        <td>
          ** <span class="bg-success" style="color: white;">Selector </span><br>1.name, id, classes, types, attributes, values of attributes and much more. <br><br> It's based on the existing CSS Selectors, and in addition, it has some own custom selectors. <br>
          2. <span class="text-danger">All selectors in jQuery start with the dollar sign and parentheses: $().</span> <br>
          <img src="{{ asset('images/larabook/javascript/jquery/tuto1.0.png') }}" alt="" style="width:550px;height: 250px;"><br><br>
          <img src="{{ asset('images/larabook/javascript/jquery/tuto1.1.png') }}" alt="" style="width:550px;height: 250px;"><br><br>
          
        </td>
        <td>
          <img src="{{ asset('images/larabook/javascript/jquery/tuto1.2.png') }}" alt="" style="width:550px;height: 350px;"><br><br>
          <img src="{{ asset('images/larabook/javascript/jquery/tuto1.3.png') }}" alt="" style="width:550px;height: 350px;"><br><br>
        </td>
      </tr>



      {{-- event && method --}}
      {{-- event && method --}}
      {{-- event && method --}}
      <tr>
        <td class="table-dark" style="color:#FF1493">Event & Event Method</td>
        <td>
          ** <span class="bg-success" style="color: white;">Event </span><br>1. <span class="text-danger">All the different visitors' actions that a web page can respond to are called events.</span><br><br>
          2. An event represents the precise moment when something happens.
          <img src="{{ asset('images/larabook/javascript/jquery/1.0.png') }}" alt="" style="width:550px;height: 250px;">


          
        </td>
        <td>
          ** <span class="bg-success" style="color: white;">Event Method </span><br>
          1. In jQuery, most DOM events have an equivalent jQuery method. <br><br>
          2. The $(document).ready() method allows us to execute a function when the document is fully loaded. <br><br>
          3. The click() method attaches an event handler function to an HTML element.



        </td>
      </tr>



      <tr>
        <td class="table-dark"></td>
        <td>
          
        </td>
        <td class="table-warning">
          
        </td>
      </tr>

      <tr>
        <td class="table-dark" style="color:white"></td>
        <td class="table-dark" style="color:white"></td>
      </tr>
    </tbody>
</table><br><br><br><br>



{{-- jquery reference --}}
{{-- jquery reference --}}
{{-- jquery reference --}}
<table>
  <tr class="table-active">
      <th colspan="2" scope="col" class="text-center"><span style="color:Green;font-size: 25px"><b><u># jQuery -- selector</b></u></span></th>
      
  </tr>    
  {{-- jquery selector --}}
  {{-- jquery selector --}}
  {{-- jquery selector --}}
  <tr>
    <td class=" table-info" style="width: 60%" >
      
      <img class="ml-0" src="{{ asset('images/larabook/javascript/jquery/selector0.0.png') }} " alt="model"  style="width: 600px;height: 670px;"><br><br>
      <img class="ml-0" src="{{ asset('images/larabook/javascript/jquery/selector1.1.png') }} " alt="model"  style="width: 600px;height: 670px;"><br><br>
      <img class="ml-0" src="{{ asset('images/larabook/javascript/jquery/selector1.3.png') }} " alt="model"  style="width: 600px;height: 670px;"><br>
    </td>

    <td class=" table-info" style="width: 60%" >
      <img class="ml-0" src="{{ asset('images/larabook/javascript/jquery/selector1.0.png') }} " alt="model"  style="width: 600px;height: 670px;"><br><br>
      <img class="ml-0" src="{{ asset('images/larabook/javascript/jquery/selector1.2.png') }} " alt="model"  style="width: 600px;height: 670px;">
    </td>         
  </tr>
  

  {{-- jquery event --}}
  {{-- jquery event --}}
  {{-- jquery event --}}
  <tr class="table-active">
      <th colspan="2" scope="col" class="text-center"><span style="color:Green;font-size: 25px"><b><u># jQuery -- event</b></u></span></th>
      
  </tr> 

  <tr>
    <td class=" table-info" style="width: 60%" >
      
      <img class="ml-0" src="{{ asset('images/larabook/javascript/jquery/event1.0.png') }} " alt="model"  style="width: 600px;height: 670px;"><br><br>
      <img class="ml-0" src="{{ asset('images/larabook/javascript/jquery/event1.2.png') }} " alt="model"  style="width: 600px;height: 670px;">
    </td>

    <td class=" table-info" style="width: 60%" >
      
      <img class="ml-0" src="{{ asset('images/larabook/javascript/jquery/event1.1.png') }} " alt="model"  style="width: 600px;height: 670px;"><br><br>
      <img class="ml-0" src="{{ asset('images/larabook/javascript/jquery/event1.3.png') }} " alt="model"  style="width: 600px;height: 350px;"><br><br>
    </td> 
            
  </tr>
</table>