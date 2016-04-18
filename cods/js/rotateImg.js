// JavaScript Document

var Slide = {


	init :function(){
	
		$("#img_change2").attr("onclick","Slide.change_img(2,24,-1)");
	
	},
	
	change_img : function(div, cant, cons){
	
	a = $("#img_change"+div).find("img");
	name = a.attr("src");
	name = name.replace("resources/img/temporal/conductor/", "");
	name = name.replace(".img", "");
	name = "resources/img/temporal/conductor/";
	
	if(cons == cant){
	ini = 1;
	$("#img_change"+div).attr("onclick","Slide.change_img("+div+","+cant+","+ini+")");
	img_data = $("#img_change"+div).find("img");
	img_data.attr("src",name+ini+".jpg");
	}else{
	ini = cons+1;
	$("#img_change"+div).attr("onclick","Slide.change_img("+div+","+cant+","+ini+")");
	img_data = $("#img_change"+div).find("img");
	img_data.attr("src",name+ini+".jpg");
	}
	
	}

};

Slide.init();