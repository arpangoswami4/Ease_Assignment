$(document).ready(function(){
    $(".r2r1c1r2c1r8").mouseover(function(){
        $(this).css("background-color","red");
    })
    .mouseout(function(){
        $(this).css("background-color","#EF4C4D");
    });
    $(".black,.r2r1c1r2c1r10 a").mouseover(function(){
        $(this).css("color","red");
    })
    .mouseout(function(){
        $(this).css("color","#EF4C4D");
    });
    $(".new a").mouseover(function(){
        $(this).css("color","black");
    })
    .mouseout(function(){
        $(this).css("color","#373737");
    });
    $(".registration_form").submit(function()
    {
    	var url="registration_submit.php";
    	var data=$(".registration_form").serialize();
    	$.ajax({
    		url:url,
    		data:data,
    		type:"POST",
    		success:registration_success,
    		error:registration_error
    	});
    	return false;
    });
});

var registration_success=function(response){
	response=JSON.parse(response);
	if(response.success){
		alert(response.message);
		window.location.href="index.php";
        if(response.cookie_set)
        {
            var url_assignment="assignment_submit.php";
            $.ajax({
                url:url_assignment,
                success: assignment_success,
                error: assignment_error
            });
        }
       
	}
	else{
		alert(response.message);
	}
}

var assignment_success=function(response){
    response=JSON.parse(response);
    if(response.success){
        alert(response.message);
        window.location.href="index.php";

    }
    else{
        alert(response.message);
    }
}

var assignment_error=function(response){
    response=JSON.parse(response);
    alert(response.message);
}


var registration_error=function(response){
    response=JSON.parse(response);    
	alert(response.message);
}
