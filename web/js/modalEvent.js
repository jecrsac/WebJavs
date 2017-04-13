$(".imgFullContent").on("click", function(event){
	event.preventDefault();
	var urlImgFull = $(this).find("img").attr('src');
	var modalHeoght = $(".modal-content").innerHeight();
	$(".modal-content").css("height", modalHeoght+"px");

	$("#modalContent").hide('slow');
	$("#modalContentImg").html("<a class='closeImage' onclick='colseImage(event);'><span class='glyphicon glyphicon-chevron-left'></span></a><img class='img-responsive' src='"+urlImgFull+"'>");
	$("#modalContentImg").show('slow', function() {
		$("#modalContentImg").css({
			height: '100%',
			opacity: 1
		});
		$(".modal-content").css("height", "100%");
		$("#myModal").addClass('img-active').removeClass('img-inactive');
		
	});
});

$(".imgFull, .imgFullMB").on("click", function(event){
	event.preventDefault();
	var urlImgFull = $(this).data("image");
	var titleImage = $(this).find(".formatCaption").html();
	var modalHeoght = $(".modal-content").innerHeight();
	$(".modal-content").css("height", modalHeoght+"px");

	$("#modalContent").hide('slow');
	$("#modalContentImg").html("<p class='tituloImage'>"+titleImage+"</p><a class='closeImageIndustria' onclick='colseImage(event);'><span class='glyphicon glyphicon-chevron-left'></span></a><img class='img-responsive' src='"+urlImgFull+"'>");
	$("#modalContentImg").show('slow', function() {
		$("#modalContentImg").css({
			height: '100%',
			opacity: 1
		});
		$(".modal-content").css("height", "100%");
		
	});
});

function colseImage(event){
	event.preventDefault();
	
	$("#modalContent").show('slow', function(){
		$(".modal-content").css("height", "100%");
	});
	$("#modalContentImg").hide('slow', function(){
		$("#modalContentImg").html("");
	});

	$("#myModal").removeClass('img-active').addClass('img-inactive');
	
}