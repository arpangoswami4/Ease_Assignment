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
});