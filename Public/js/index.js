$(function(){
	$(".top_ul_li").mouseover(function(){
		$(this).children(".submenu").show();
		$(this).children("p").css("border-bottom","3px solid red");
	})
	$(".top_ul_li").mouseout(function(){
		$(this).children(".submenu").hide();
		$(this).children("p").css("border-bottom","");
	})
	$(".submenu ul li").mouseover(function(){
		$(this).css("background-color","#e5e5e5");
	});
	$(".submenu ul li").mouseout(function(){
		$(this).css("background-color","");
	});
});
var a =0;
w = window.setInterval(show,2000);
function show(){
	if(a>2){
		a=0;
	}else{
		var b = a*1000;
		$(".banner").children("ul").css("margin-left","-"+ b +"px");
		a = a+1;
	}
}