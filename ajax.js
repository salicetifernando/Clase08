function Alta()
{
	var patente = $("#patente").val();
	var fecha = $("#fecha").val();

	$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			patente:patente,
			fecha:fecha,
			dato:"alta"
		}
	})
	.then(function ok(retorno)
	{
		alert("Entre al Alta!");
		$("#principal").html(retorno);
	},function no(ret)
	{
		$("#principal").html("ALGO FALLO!");
	});
}