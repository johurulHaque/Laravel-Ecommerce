// jqery popover
// jqery popover
$(document).ready(function() {
	// man popover body
	//container:body take the body size that is width
	//set the popover character
  $('#men_popover').popover({
	    container: 'body',
	    placement: 'bottom',
	    html: true,
	    trigger : 'manual',
	    animation:false,
	    content: function() {
	    return $('#popover-content_men').html();
    }});
  //The on(event,fun(),...) method attaches one or more event handlers for the selected elements
  //event>Required. Specifies one or more event(s) or namespaces to attach to the selected elements.
  //when mouse inside the attribute
  $('#men_popover').on('mouseenter', function () {
	    var _this = this;
	    $(this).popover('show');
	    //when mouse leave the popover body
	    $('.popover').on('mouseleave', function () {
	    $(_this).popover('hide');
	    });
	});
  //when mouse outside after inside the attribute
  $('#men_popover').on('mouseleave', function () {
	    var _this = this;
	    setTimeout(function () {
	    // if the mouse outside the hoverable length of popover body
	    if (!$('.popover:hover').length) {
	    	$(_this).popover('hide');
	    } }, 50);
    });
    // women popover body
    // women popover body
    $('#women_popover').popover({
	    container: 'body',
	    placement: 'bottom',
	    html: true,
	    trigger : 'manual',
	    animation:false,
	    content: function() {
	    return $('#popover-content_women').html();
	    }
	}).on('mouseenter', function () {
	    var _this = this;
	    $(this).popover('show');
	    $('.popover').on('mouseleave', function () {
	    $(_this).popover('hide');
	    });
	}).on('mouseleave', function () {
	    var _this = this;
	    setTimeout(function () {
	    if (!$('.popover:hover').length) {
	    $(_this).popover('hide');
	    }
	    }, 50);
	});
	// child popover body
	// child popover body
	$('#child_popover').popover({
	    container: 'body',
	    placement: 'bottom',
	    html: true,
	    trigger : 'manual',
	    animation:false,
	    content: function() {
	    return $('#popover-content_child').html();
	    }
	}).on('mouseenter', function () {
	    var _this = this;
	    $(this).popover('show');
	    $('.popover').on('mouseleave', function () {
	    $(_this).popover('hide');
	    });
	}).on('mouseleave', function () {
	    var _this = this;
	    setTimeout(function () {
	    if (!$('.popover:hover').length) {
	    $(_this).popover('hide');
	    }
	    }, 50);
	});

// animated placeholder in nav bar
// animated placeholder in nav bar
// animated placeholder in nav bar
var textbox = $('.textbox'),//get the class
valueLength,
value = '',
 //the function starts work  or evaluates an expression after a specified number of ms(where 1s = 1000ms) //To execute a function only once, after a specified number of milliseconds, use the setTimeout() method.
//Get ready for typing in the placeholder start
//Get ready for typing in the placeholder start
id = setTimeout(ReadyTyping, 200);

function ReadyTyping() {
	//The clearTimeout() method clears a timer set with the setTimeout() method.
	//clear first clearTimeout(ReadyTyping, 600) call
	clearTimeout(id);
	//search for optiont that can be multiple .if single value no need array just a single value
	var options = ["search for products...","search for brands..."];  
	//take array value for the field with random index 
	value = options[Math.floor((Math.random() * options.length ))];
	valueLength = 1; //start  at 0//1 then substring (0 to 1)
	//The setInterval() method calls a function or evaluates an expression at specified intervals (in milliseconds)   
	//The setInterval() method will continue calling the function until clearInterval() is called, or the window is closed. 
	//call type every 50ms
	id = setInterval(type, 100); 
}

// Start typing in the placeholder within 50ms
// Start typing in the placeholder within 50ms
function type() {
	//typing in the place holder untill bellow condition 
	//First character is at index 0
	//when finshed typing clear interval and start erasing
    textbox.attr("placeholder", value.substring(0, valueLength++)); 
	if (valueLength === value.length + 1) {
	//The ID value returned by setInterval() is used as the parameter for the clearInterval() method.
	//Stop calling setInterval()
	//clear clearInterval(type, 50)
	clearInterval(id);
	id = setTimeout(ReadyErasing, 600); //start ReadyErasing call once after delay 1000ms
	}
}

// Ready to eraging the placeholder value
// Ready to eraging the placeholder value
function ReadyErasing() {
	clearTimeout(id); //clear clearTimeout(ReadyErasing, 2000);
	valueLength = value.length; //start at end
	id = setInterval(erase, 100); //call erase every 50ms
}

// Start eraging in the placeholder within 50ms
// Start eraging in the placeholder within 50ms
function erase() {
textbox.attr("placeholder", value.substring(0, valueLength--));
//when finshed erasing clear interval and call type
if (valueLength < 0) {
	clearInterval(id); //stop call from setInterval() //clear clearInterval(erase, 50)
	id = setTimeout(ReadyTyping, 100); //start over
	}
}



});// last