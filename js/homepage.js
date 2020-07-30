$(document).ready(function(){
	$(".login,.signup,.minus_button,.plus_button,.submit_button,.user_options,.user_orders").mouseover(function(){
		$(this).css("background","#a60e03");
	});
	$(".login,.signup,.minus_button,.plus_button,.submit_button,.user_options,.user_orders").mouseout(function(){
		$(this).css("background","#E6422E");
	});
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
	$(".assignment_form").submit(function(){
        var url="assignment_submit.php";
        var data=$(this).serializeArray();
        data.push({name:"page_count",value: page_count},
        	{name:"word_count",value: word_count});
        $.ajax({
            url:url,
            data:$.param(data),
            type:"POST",
            success: assignment_success,
            error: assignment_error
        });
        return false;
    });
		
});
var assignment_success=function(response){
    response=JSON.parse(response);
    if(response.success){
        alert(response.message);
    }
    else{
    	if(response.cookie_set)
    	{
    		window.location.href="login.html";
    	}
    	else
    	{
        alert(response.message);
    	}
    }
}

var assignment_error=function(response){
	response=JSON.parse(response);
    alert(response.message);
}

var page_count=1;
var word_count=250;
function increment_page()
{
	page_count+=1;
	word_count=250 * page_count;
	document.getElementById("pages_text").innerHTML = (page_count + " Page(s)");
	document.getElementById("words_text").innerHTML = ((word_count) + " Words");
}
function decrement_page()
{
	if(page_count>1)
	{
		page_count-=1;
		word_count=250 * page_count;
		document.getElementById("pages_text").innerHTML = (page_count + " Page(s)");
		document.getElementById("words_text").innerHTML = ((word_count) + " Words");
	}	
}
 $( function() {
    $( ".deadline_date_input" ).datepicker();
  } );