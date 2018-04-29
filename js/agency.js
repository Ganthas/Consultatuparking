// Agency Theme JavaScript

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a:not(.dropdown-toggle)').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

})(jQuery); // End of use strict

function Calcular(){
    var hora_llegada=document.getElementById("hora").value*60;
		var minu_llegada=document.getElementById("minu").value;
   	var minutos_llegada=hora_llegada+minu_llegada;

		document.getElementById("h").innerHTML=hora_llegada/60;
		document.getElementById("m").innerHTML=minu_llegada;

    var fecha= new Date();
    var horas= fecha.getHours()*60;
    var minutos = fecha.getMinutes();

		var cantidad_minutos=horas-hora_llegada+minutos-minu_llegada;

		if(cantidad_minutos<0){
      console.log(cantidad_minutos);
			document.getElementById("msg").innerHTML="<small style='font-size:16px'>Favor ingrese una hora y minutos inferior a 23:59 y menor a la hora actual</small>";
      document.getElementById("tiempo").innerHTML="0";
		}
		else{
			document.getElementById("tiempo").innerHTML=cantidad_minutos;
      $.ajax({
				url: '/mall/consulta-mallplazaeltrebol/',
				type: 'post',
				dataType: 'json',
        data: {"cantidad_minutos" : cantidad_minutos},
				success: function(json){
					if(json.result){
            console.log(json.result);
    				document.getElementById("msg").innerHTML=json.result;
					}
        }
			});
		}




}

function Calcular_2(){
		var mall="malldelcentroconcepcion";
    var hora_llegada=document.getElementById("hora").value*60;
		var minu_llegada=document.getElementById("minu").value;
   	var minutos_llegada=hora_llegada+minu_llegada;

		var boleta_compra=$('#boleta_compra').prop('checked');
		var boleta_cine=$('#boleta_cine').prop('checked');

		document.getElementById("h").innerHTML=hora_llegada/60;
		document.getElementById("m").innerHTML=minu_llegada;

		var fecha= new Date();
		var horas= fecha.getHours()*60;
		var minutos = fecha.getMinutes();
		var cantidad_minutos=0;

		cantidad_minutos=horas-hora_llegada+minutos-minu_llegada;

		if(boleta_compra)cantidad_minutos-=120;
		else if(boleta_cine)cantidad_minutos-=180;

    if(cantidad_minutos<0){
      console.log(cantidad_minutos);
			document.getElementById("msg").innerHTML="<small style='font-size:16px'>Favor ingrese una hora y minutos inferior a 23:59 y menor a la hora actual</small>";
			document.getElementById("tiempo").innerHTML="0";
		}
		else{
			document.getElementById("tiempo").innerHTML=cantidad_minutos;
      $.ajax({
        url: '/mall/consulta-malldelcentroconcepcion/',
        type: 'post',
        dataType: 'json',
        data: {"cantidad_minutos" : cantidad_minutos},
        success: function(json){
          if(json.result){
            console.log(json.result);
            document.getElementById("msg").innerHTML=json.result;
          }
        }
      });
		}







}

/*$(document).ready(function(){
	$('.mall_trebol_ccp').click(function(){
			var mall="malltrebolccp";
			$.post("visitas/cont_visitors.php", {mall:mall});
	});
});

$(document).ready(function(){
	$('.mall_centro_ccp').click(function(){
			var mall="mallcentroccp";
			$.post("visitas/cont_visitors.php", {mall:mall});
	});
});*/

function mall_trebol(){
	var mall="malltrebolccp";
	$.post("visitas/cont_visitors.php", {mall:mall});
}

function mall_centro(){
	var mall="mallcentroccp";
	$.post("visitas/cont_visitors.php", {mall:mall});
}

$(document).ready(function(){
	$.post("visitas/result_visitors.php", function(mensaje) {
							$("#visitors").html(mensaje);
		});
});

/*
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>


<script>
	 function localize()
		{
		 	if (navigator.geolocation)
			{
                navigator.geolocation.getCurrentPosition(mapa,error);
            }
            else
            {
                alert('Tu navegador no soporta geolocalizacion.');
            }
		}

		function mapa(pos)
		{
			var latitud = pos.coords.latitude;
			var longitud = pos.coords.longitude;
			var precision = pos.coords.accuracy;

			var contenedor = document.getElementById("map")

			var centro = new google.maps.LatLng(latitud,longitud);

			var propiedades =
			{
                zoom: 15,
                center: centro,
                mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			var map = new google.maps.Map(contenedor, propiedades);

			var marcador = new google.maps.Marker({
                position: centro,
                map: map,
                title: "Tu posicion actual"
            });
		}

		function error(errorCode)
		{
			if(errorCode.code == 1)
				alert("No has permitido buscar tu localizacion")
			else if (errorCode.code==2)
				alert("Posicion no disponible")
			else
				alert("Ha ocurrido un error")
		}
 </script>

*/
