var widthSeccion, posicionXY, heightSeccion, posicionSection, id;
$(document).on("ready", main);

function main(){
	$("#menu a").on("click", irA);
	//$(window).scroll(scrollMenu);
	var widthPage = $( window ).width();
	$("#anchoPagina").val(widthPage);

	$("#carousel-example-generic").mouseover(function(){
		$(".opacityNone").css("opacity","1");
	});
	$("#carousel-example-generic").mouseout(function(){
		$(".opacityNone").css("opacity","1");
	});

	$(window).scroll(scrollMenu);
	var ancho = $( window ).width();
	$("#ancho").val(ancho);
}

function irA(){
	var seccion = $(this).attr("href");
	var currentItem = $("#currentItem").val();
	var numPixels = 150;
	id = $(this).attr("id");
	
	widthSeccion = parseInt( $( window ).width() + 17 ) ;
	heightSeccion = $( seccion ).innerHeight();
	posicionXY = $( seccion ).position();
	posicionY = Math.round(posicionXY.top) - 150;
	posicionSection = posicionY + heightSeccion;

	if (widthSeccion > 768 && widthSeccion < 992) {
		numPixels = 209;
	}
	if(widthSeccion < 768){
		$("#bs-example-navbar-collapse-1").animate({
				height: '1px'
			}, 800, function(){
				$("#bs-example-navbar-collapse-1").removeClass('in');
			});
	}

	/**/
	if(id != currentItem)
	{
		$("#"+currentItem).removeClass("item_"+currentItem+"_Click");
		$("#"+id).addClass("item_"+id+"_Click");
		$("#currentItem").val(id);
	}
	else
	{
		$("#"+id).addClass("item_"+id+"_Click");

	}
	/**/

	/**
	if(id != currentItem)
	{
		$("#"+id).addClass("item_"+id+"_Click");
		$("#currentItem").val(id);
	}
	else
	{
		$("#"+id).addClass("item_"+id+"_Click");
	}
	/**/

	$("body, hmtl").animate({
		scrollTop: $(seccion).offset().top-numPixels
	}, 800);

	return false;

}

/**
function scrollMenu(){
	var posicion = $(this).scrollTop();
	var currentItem = $("#currentItem").val();
	$("#posicionFFF").val(posicion);
	//alert("posicion Y "+posicionY);
	//alert("posicionSection "+posicionSection);

	//if(widthSeccion >= 1349)
	//{
		//if (posicion >= posicionY && posicion < posicionSection)  { $("#"+id).addClass("item_'"+id+"'_Click"); } else { $("#"+id).removeClass("item_'"+id+"'_Click"); }


		//}

		/**
		if (posicion >= 549 && posicion < 1169)  { $("#1").addClass("item_1_Click"); } else { $("#1").removeClass("item_1_Click"); }
		if (posicion >= 1169 && posicion < 1814) { $("#2").addClass("item_2_Click"); } else { $("#2").removeClass("item_2_Click"); }
		if (posicion >= 1814 && posicion < 2459) { $("#3").addClass("item_3_Click"); } else { $("#3").removeClass("item_3_Click"); }
		if (posicion >= 2459 && posicion < 3104) { $("#4").addClass("item_4_Click"); } else { $("#4").removeClass("item_4_Click"); }
		if (posicion >= 3104 && posicion < 3749) { $("#5").addClass("item_5_Click"); } else { $("#5").removeClass("item_5_Click"); }
		if (posicion >= 3749 && posicion < 4231) { $("#6").addClass("item_6_Click"); } else { $("#6").removeClass("item_6_Click"); }
		/**

	
}
/**/
$(".carros").on("click", function(){ 
	$(".imgContent").remove();
	 var archivoContenido=$(this).data("contenido");
	 var archivoTitulo=$(this).data("title");
	 var archivoConvar=$(this).data("convar");
	 var archivoConimg=$(this).data("conimg");

	 $( "#modalContent" ).load("web/contenidos/"+archivoContenido+".php?X="+archivoConvar+"", function() {
	 	$( "#modalForm" ).load("web/formularios/"+archivoContenido+".php", function() {
	 		$("#imgPrincipal").append("<img class='img-responsive imgContent' src='"+archivoConimg+"'/>");
	 		$("#myModalLabel").html(archivoTitulo);
	 		$("#nombreServicio").val(archivoTitulo);
	 	});
	 });
});

$(".btnAlert").on("click", function(){
	$(".imgContent").remove();
	 var archivoContenido=$(this).data("contenido");
	 var archivoTitulo=$(this).data("title");

	 $( "#modalContent" ).load("web/contenidos/"+archivoContenido+".php", function() {
	 	$( "#modalForm" ).load("web/formularios/"+archivoContenido+".php", function() {
	 		$("#imgPrincipal").append("<img class='img-responsive imgContent' src='web/img/headers/"+archivoContenido+".jpg'/>");
	 		$("#myModalLabel").html(archivoTitulo);
	 		$("#nombreServicio").val(archivoTitulo);
	 	});
	 });
});

$(".ddddd").on("click", function(){
	$(".imgContent").remove();
	 var archivoContenido=$(this).data("contenido");
	 var archivoTitulo=$(this).data("title");

	 $( "#modalContent" ).load("web/contenidos/"+archivoContenido+".php", function() {
	 	$( "#modalForm" ).load("web/formularios/"+archivoContenido+".php", function() {
	 		$("#myModalLabel").html(archivoTitulo);
	 		$("#nombreServicio").val(archivoTitulo);
	 	});
	 });
});



$(".btnLegales").on("click", function(){
	 var archivoTitulo=$(this).data("title");
	 var archivoContenido=$(this).data("contenido");
	
	$( "#modalContenidoLegal" ).load("web/contenidos/"+archivoContenido+".php", function() {
		$("#myModalLabelLegal").html(archivoTitulo);
	});
});

$('#myModal').on('hidden.bs.modal', function () {
    $( "#imgPrincipal" ).html('');
    $( "#modalContent" ).html('');
    $( "#modalForm" ).html('');
    $( "#myModalLabel" ).html('');
});

function scrollMenu(){
	var heightNav = parseInt($("#navegacion").height()) + parseInt(1);
	var posicion = parseInt($(this).scrollTop()) + parseInt(heightNav);
	var currentItem = $("#currentItem").val();

	/*if(currentItem != 0){
		$("#"+currentItem).removeClass("item_"+currentItem);
	}*/

	//$("#posicionElement").val(posicion);
	
	$(".sectionSpy").each(function(i){

		var sectionCurrent = $(".sectionSpy");
		var sectionCurrentID = $(this).attr('id');
		var sectionIdMenu = $(this).data("menu");
		var posicionElemento = $("#"+sectionCurrentID).position();	
		var heightElemento = $("#"+sectionCurrentID).height();

		if (posicion >= Math.floor(posicionElemento.top) && posicion < (parseInt(heightElemento) + parseInt(posicionElemento.top))) 
		{ 	
			$("#"+sectionIdMenu).addClass("item_"+sectionIdMenu+"_Click");
		} 
		else 
		{ 
			$("#"+sectionIdMenu).removeClass("item_"+sectionIdMenu+"_Click");
		}			

	});		
}