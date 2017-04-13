//$(document).on("ready", function(){
$("#enviarFormulario").click(function(){

	$(".formValidate").each(function(indexInput, input) {
		var inputNull = $(this).data("null");
		var inputType = $(this).data("type");
		var inputValue = $(this).val();
		var inputName = $(this).attr("placeholder");
		alert(inputName+" - "+inputValue);

		if(inputNull == "obligate")
		{
			if(inputValue == "")
			{
				alert("Debes llenar el campo "+inputName);
			}
			else{
				validaType();
			}
		}
	});

});

function validaType()
{
	alert("entro a la validacion del tipo");
}
//});
