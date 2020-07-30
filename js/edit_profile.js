$(document).ready(function(){
$(".r2r1c1c1,.r2r1c1c2,.r2r1c1c3,.r2r1c1c4,.r2r1c1c5,.r2r1c1c6,.r2r1c1c3 ul li").
	mouseover(function(){
		$(this).css("background","#05a38e");
		$(this).css("color","black");
	});
	$(".r2r1c1c1,.r2r1c1c2,.r2r1c1c3,.r2r1c1c4,.r2r1c1c5,.r2r1c1c6,.r2r1c1c3 ul li").
	mouseout(function(){
		$(this).css("background","#40067a");
		$(this).css("color","white");
	});
	$(".r4subheadings a").mouseover(function(){
		$(this).css("color","#a31891");
	});
	$(".r4subheadings a").mouseout(function(){
		$(this).css("color","white");
	});
	$(".r2r1c1c3,.r2r1c1c3 ul").mouseover(function(){
		$(".r2r1c1c3 ul").css("display","block");
	});
	$(".r2r1c1c3,.r2r1c1c3 ul").mouseout(function(){
		$(".r2r1c1c3 ul").css("display","none");
	});
	$(".user_options,.user_options ul").mouseover(function(){
		$(".user_options ul").css("display","block");
	});
	$(".user_options,.user_options ul").mouseout(function(){
		$(".user_options ul").css("display","none");
	});
	$(".user_options ul li").mouseover(function(){
		$(this).css("background","#3ca34a");
	});
	$(".user_options ul li").mouseout(function(){
		$(this).css("background","#4c8ba1");
	});
	$(".user_options,.user_orders").mouseover(function(){
		$(this).css("background","#a60e03");
	});
	$(".user_options,.user_orders").mouseout(function(){
		$(this).css("background","#E6422E");
	});

    $(".r3r1c1r2c1r8").mouseover(function(){
        $(this).css("background-color","red");
    })
    .mouseout(function(){
        $(this).css("background-color","#EF4C4D");
    });
    $(".exist a,.r3r1c1r2c1r10 a").mouseover(function(){
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
    $(".edit_form").submit(function()
    {
    	var url="edit_submit.php";
    	var data=$(".edit_form").serialize();
    	$.ajax({
    		url:url,
    		data:data,
    		type:"POST",
    		success:edit_success,
    		error:edit_error
    	});
    	return false;
    });


});
var edit_success=function(response){
	response=JSON.parse(response);
	if(response.success){
		alert(response.message);
		window.location.href="my_profile.php";       
	}
	else{
		alert(response.message);
	}
}
var edit_error=function(response){
    response=JSON.parse(response);    
	alert(response.message);
}

