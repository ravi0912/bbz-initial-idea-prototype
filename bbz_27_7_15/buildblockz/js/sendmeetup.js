$(document).ready(function() {
	var options = { 
		target:'#form_meetup',   // target element(s) to be updated with server response 
		beforeSubmit:showRequest,  // pre-submit callback 
        	success:showResponsemsg,  // post-submit callback 
		url:'ajax/sendmeetup.php',
		type:'post'
		};
		
		$('#fixupmeet').ajaxForm(options);
function showRequest(formData, jqForm, options) { 
//alert();
    // formData is an array; here we use $.param to convert it to a string to display it 
    // but the form plugin does this for you automatically when it submits the data 
    var queryString = $.param(formData); 
    //alert(queryString);
  //  alert(queryString);
    // jqForm is a jQuery object encapsulating the form element.  To access the 
    // DOM element for the form do this:
    // var formElement = jqForm[0]; 
    // here we could return false to prevent the form from being submitted; 
    // returning anything other than false will allow the form submit to continue 
    return true; 
} 

// post-submit callback 
function showResponsemsg(responseText, statusText, xhr, $form)  { 
    // for normal html responses, the first argument to the success callback 
    // is the XMLHttpRequest object's responseText property 
 	alert();
    // if the ajaxForm method was passed an Options Object with the dataType 
    // property set to 'xml' then the first argument to the success callback 
    // is the XMLHttpRequest object's responseXML property 
 	//if(responseText[0]=='W'){
 	$("#2hourclock").show();
 	//}

    // if the ajaxForm method was passed an Options Object with the dataType 
    // property set to 'json' then the first argument to the success callback 
    // is the json data object returned by the server 
   //document.getElementById("email").value = responseText;
   //document.getElementById("email_f").value = responseText;
   return true;
   
}
		
});