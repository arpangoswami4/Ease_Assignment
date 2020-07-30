$(document).ready(function(){
    $(".r2r1c1r2c1r4").mouseover(function(){
        $(this).css("background-color","red");
    })
    .mouseout(function(){
        $(this).css("background-color","#EF4C4D");
    });
    $(".new a,.r2r1c1r2c1r6 a").mouseover(function(){
        $(this).css("color","red");
    })
    .mouseout(function(){
        $(this).css("color","#EF4C4D");
    });
    $(".black").mouseover(function(){
        $(this).css("color","black");
    })
    .mouseout(function(){
        $(this).css("color","#373737");
    });
    $(".login_form").submit(function(){
        var url="login_submit.php";
        var data=$(".login_form").serialize();
        $.ajax({
            url:url,
            data:data,
            type:"POST",
            success:login_success,
            error:login_error
        });
        return false;
    });
});

var login_success=function(response)
{
    response=JSON.parse(response);
    if(response.success)
    {
       if(response.cookie_set){
            var url_assignment="assignment_submit.php";
            $.ajax({
                url:url_assignment,
                success: assignment_success,
                error: assignment_error
            });
        
        }
        else
        {
            window.location.href="index.php";
        }
    }
    else{
        alert(response.message);
    }
}
var assignment_success=function(response){
    response=JSON.parse(response);
    if(response.success){
        window.location.href="index.php";
        alert(response.message);
    }
    else{
        alert(response.message);
    }
}

var assignment_error=function(response){
    response=JSON.parse(response);
    alert(response.message);
}


var login_error=function(){
    response=JSON.parse(response);
    alert(response.message);
}
$(window).bind('beforeunload', function(event) {    
    var cookies = $.cookie();
      for(var cookie in cookies) {
        $.removeCookie(cookie);
      }
    return true;
});