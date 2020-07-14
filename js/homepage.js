$(document).ready(function(){
	$(".login,.signup,.minus_button,.plus_button,.submit_button").mouseover(function(){
		$(this).css("background","#a60e03");
	});
	$(".login,.signup,.minus_button,.plus_button,.submit_button").mouseout(function(){
		$(this).css("background","#E6422E");
	});
	$(".r2r1c1c1,.r2r1c1c2,.r2r1c1c3,.r2r1c1c4,.r2r1c1c5,.r2r1c1c6").
	mouseover(function(){
		$(this).css("background","#05a38e");
		$(this).css("color","black");
	});
	$(".r2r1c1c1,.r2r1c1c2,.r2r1c1c3,.r2r1c1c4,.r2r1c1c5,.r2r1c1c6").
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
});







var page_count=1;
function increment_page()
{
	page_count+=1;
	document.getElementById("pages_text").innerHTML = (page_count + " Page(s)");
	document.getElementById("words_text").innerHTML = ((page_count*250) + " Words");
}
function decrement_page()
{
	if(page_count>1)
	{
		page_count-=1;
		document.getElementById("pages_text").innerHTML = (page_count + " Page(s)");
		document.getElementById("words_text").innerHTML = ((page_count*250) + " Words");
	}	
}
 $( function() {
    $( ".deadline_date_input" ).datepicker();
  } );