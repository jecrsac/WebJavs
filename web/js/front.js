var widthSeccion;
$(document).on("ready", main);

function main(){
	$("#menu a").on("click", irA);
	$(window).scroll(scrollMenu);
	var ancho = $( window ).width();
	$("#ancho").val(ancho);
	//backgroundSection();	
}

function backgroundSection()
{
	$(".sectionSpy").each(function(i){
		if((i % 2) != 0)
		{
			$(this).css('background', '#ccccff');
		}
	});
}

$(".btn-Modal").on("click", function(){
	$("#imgTecnica").css("display", "none");
	var widthWindow = $( window ).width();
	var archivoContenido=$(this).data("file");
	var archivoTitulo=$(this).data("title");

	$( "#modalContent" ).load("contenidos/"+archivoContenido+".html", function() {
		$("#modalTitle").text(archivoTitulo);
		$("#modalContent").removeClass("inlineBlock");
	});

});

$(".menuLegales").on("click", function(){
	$("#imgTecnica").css("display", "none");
	var archivoContenido=$(this).data("file");
	var archivoTitulo=$(this).html();


	$( "#modalContent" ).load("contenidos/"+archivoContenido+".html", function() {
		$("#modalTitle").text(archivoTitulo);
	});
});

$(".btn-ModalIndustria").on("click", function(){

	$("#imgTecnica").css("display", "block");
	var widthWindow = $( window ).width();
	var archivoContenido=$(this).data("file");
	var archivoTitulo=$(this).data("title");
	var urlImgFull = $(this).find("img").attr('src');

	$( "#modalContent" ).load("contenidos/"+archivoContenido+".html", function() {
		$("#modalTitle").text(archivoTitulo);
		$("#imgTecnica").html("<img src='"+urlImgFull+"' class='img-responsive' alt=''>");
		//$("#navegacion").css('width', widthWindow+'px');
	});

});

$(".btn-ModalContent").on("click", function(){

	$("#imgTecnica").css("display", "none");
	var widthWindow = $( window ).width();
	var archivoContenido=$(this).data("file");
	var archivoTitulo=$(this).find("h4").html();
	var urlImgFull = $(this).find("img").attr('src');

	$( "#modalContent" ).load("contenidos/"+archivoContenido+".html", function() {
		$("#modalTitle").text(archivoTitulo);
		//$("#navegacion").css('width', widthWindow+'px');
	});

});

$('#myModal').on('hidden.bs.modal', function () {
	closeImageFull();
    cleanContentMyModal();
})

function cleanContentMyModal()
{
	$("#imgTecnica").html('');
	$("#modalTitle").html('');
	$("#modalContent").html('');
	$("#modalContentImg").html('');	
}

function closeImageFull(){
	
	
	$("#modalContent").show('slow', function(){
		$(".modal-content").css("height", "100%");
	});
	$("#modalContentImg").hide('slow', function(){
		$("#modalContentImg").html("");
	});

	$("#myModal").removeClass('img-active').addClass('img-inactive');
	
}


$(".close").on("click", function(){
	$("#modalContent").show('slow', function(){
		$(".modal-content").css("height", "100%");
	});
	$("#modalContentImg").hide('slow', function(){
		$("#modalContentImg").html("");
	});
});

$(".closeImage").on("click", function(event){
	event.preventDefault();
	/**/
	$("#modalContent").show('slow', function(){
		$(".modal-content").css("height", "100%");
	});
	$("#modalContentImg").hide('slow', function(){
		$("#modalContentImg").html("");
	});
	/**/

});


$(".contactoContent").on("click", function(event){
	event.preventDefault();
	var seccion = $(this).attr("href");
	var currentSeccion = $("#currentSeccion").val();
	var heightSeccion;

	if(seccion == "#demo3"){
		heightSeccion = 800;
	}
	else{
		heightSeccion = 450;
	}
 	
	if (currentSeccion !="") {
		if (currentSeccion != seccion){
			$(seccion).css("height", heightSeccion+"px");
			$(currentSeccion).fadeToggle("fast", function(){
				$(seccion).fadeToggle();
			});
		}
		else{
			$(seccion).css("height", heightSeccion+"px");
			$(seccion).animate({
				height: '0px'
			}, 800);
			$(seccion).fadeToggle();
			seccion = "";
		}
	}
	else{

		$(seccion).css("height", heightSeccion+"px");
		$(seccion).fadeToggle(0, function(){
			$("body, hmtl").animate({
				scrollTop: $(seccion).offset().top+140
				
			}, 800);
		});
	}
	$("#currentSeccion").val(seccion);
});

function irA(){

	var seccion = $(this).attr("href");
	var id = $(this).attr("id");
	var currentItem = $("#currentItem").val();
	var numPixels = $("#navegacion").height()+ parseInt(1);
	console.log("numPixels "+numPixels);

	/**/
	widthSeccion = parseInt( $( window ).width() + 17 ) ;
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
		$("#"+id).addClass("item_Click");
		$("#currentItem").val(id);
	}
	else
	{
		$("#"+id).addClass("item_Click");
	}

	$("body, hmtl").animate({
		scrollTop: $(seccion).offset().top-numPixels
	}, 800, function(){
		$("#"+currentItem).removeClass("item_Click");
	});

	if(seccion!="#contacto"){
		var currentSeccion = $("#currentSeccion").val();
		if(currentSeccion !=""){
			//$(currentSeccion).css("height", "450px");
			$(currentSeccion).animate({
				height: '0px'
			}, 800);
			$(currentSeccion).fadeToggle();
			$("#currentSeccion").val('');
		}
	}

	return false;
}

function scrollMenu(){
	var heightNav = parseInt($("#navegacion").height()) + parseInt(1);
	var posicion = parseInt($(this).scrollTop()) + parseInt(heightNav);
	var currentItem = $("#currentItem").val();
	$("#posicionElement").val(posicion);
	
	$(".sectionSpy").each(function(i){

		var sectionCurrent = $(".sectionSpy");
		var sectionCurrentID = $(this).attr('id');
		var sectionIdMenu = $(this).data("menu");
		var posicionElemento = $("#"+sectionCurrentID).position();	
		var heightElemento = $("#"+sectionCurrentID).height();

		if(sectionCurrentID == "industria")
		{
			if (posicion >= Math.floor(posicionElemento.top) && posicion < ( parseInt( parseInt(heightElemento) + parseInt(posicionElemento.top)) ) - parseInt(170) ) 
			{ 
				$("#"+sectionIdMenu).addClass("item_Click");
			} 
			else 
			{ 
				$("#"+sectionIdMenu).removeClass("item_Click");
				posicion = parseInt(posicion) + parseInt(170);
			}

		}
		else
		{
			if (posicion >= Math.floor(posicionElemento.top) && posicion < (parseInt(heightElemento) + parseInt(posicionElemento.top))) 
			{ 
				
				$("#"+sectionIdMenu).addClass("item_Click");
			} 
			else 
			{ 
				$("#"+sectionIdMenu).removeClass("item_Click");
			}			
		}
	});		
}

/* ----------------------------FORMULARIO COTIZACION INI -*/
$("#enviarFormulario").click(function(){

	var inputNombre = $("#nombre").val();
	var inputInstitucionEmpresa = $("#institucionEmpresa").val();
	var inputCorreo = $("#correo").val();
	var inputNoContacto = $("#noContacto").val();
	var inputTipoMuestra= $("#tipoMuestra").val();
	var inputTipoAnalisis= $("#tipoAnalisis").val();
	var inputRazonAnalisis= $("#razonAnalisis").val();
	var inputPretendeAnalisis= $("#pretendeAnalisis").val();
	var inputComentario = $("#comentario").val();

	if(inputNombre!="" && inputInstitucionEmpresa!="" && inputCorreo!="" && inputNoContacto!="" && inputComentario!="" && inputTipoMuestra!="" && inputTipoAnalisis!="" && inputRazonAnalisis!="" && inputPretendeAnalisis!="")
	{
		var $btn = $(this).button('loading')
	 	var url = "formt.php"; // El script a dónde se realizará la petición.
	    $.ajax({
	           type: "POST",
	           url: url,
	           data: $("#formContact").serialize(), // Adjuntar los campos del formulario enviado.
	           success: function(data)
	           {
	               $('#myModalContacto').modal('show');
	               $btn.button('reset')
	               limpiarCampos();
	           }
	         });	
	}
	else
	{
		alert("Los campos son obligatorios");
	}

    return false; // Evitar ejecutar el submit del formulario.
 });

function limpiarCampos()
{
	$("#nombre").val('');
	$("#institucionEmpresa").val('');
	$("#correo").val('');
	$("#noContacto").val('');
	$("#tipoMuestra").val('');
	$("#tipoAnalisis").val('');
	$("#razonAnalisis").val('');
	$("#pretendeAnalisis").val('');
	$("#comentario").val('');

	$("#demo3").animate({
		height: '0px'
	}, 800);
	$("#demo3").fadeToggle();
	$("#currentSeccion").val("");

}
/* ----------------------------FORMULARIO COTIZACION FIN -*/