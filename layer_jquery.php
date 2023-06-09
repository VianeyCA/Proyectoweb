<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script language="javascript" src="js/jquery-1.5.2.min.js"></script>

<style type="text/css">
/* Determina el fondo transparente cuando se muestra la previsualizacion */
#layerPreview		{position:absolute;z-index:1;display:none;top:0px;left:0px;width:100%;height:100%;background-color:#fff;
					opacity: 0.8;-moz-opacity: 0.8;filter: alpha(opacity=80);-khtml-opacity: 0.8;
					}
/* Determina la capa que aparecera centrada */
#layerPreviewContent{position:absolute;z-index:1;display:none;background-color:#fff;left:50%;
					width:300px;
					margin-left:-150px;
					height:200px;
					padding:2px;border:1px solid;
					}
</style>
<script type='text/javascript'>
	/**
	 * Funcion que muestra las capas
	 */
	function layer_show()
	{
		/* Ponemos los atributos de posicion a la capa transparente del fondo */
		$('#layerPreview').attr("style", "top:0px; height:"+$(document).height()+"px; width:"+$(window).width()+"px; display:inline;");
		
		/* Buscamos la posicion superior de la capa que aparece centrada.
		   La anchura y la posicion centrada se establece en el estilo */
		var posTop=(($(window).height()/2)-(200/2))+$(document).scrollTop();
		if(posTop<0)
			posTop=0;
		$('#layerPreviewContent').attr("style", "top:"+posTop+"px;");
		/* Indicamos que se muestre la capa */
		$('#layerPreviewContent').show(600);
	}
	
	/**
	 * Funcion que esconde las capas
	 */
	function layer_close()
	{
		$('#layerPreviewContent').hide(300);
		$('#layerPreview').hide();
	}
</script>

</head>

<body>
	<!-- 

<div id="layerPreview" ></div>
<div id='layerPreviewContent'>
	
	<div style='width:100%;text-align:right;border-bottom:1px solid;'><span onclick="layer_close();" style='cursor:pointer;padding-right:5px;'>cerrar</span></div>
	Texto para la capa
</div>

<div onclick='layer_show();'>Pulsa aqui para mostrar la capa</div>
</body>
-->