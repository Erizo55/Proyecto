$.ajax({ 
	url : 'http://apirest.victorjgonzalez.com/training/34',
	dataType : 'jsonp',
	success: function(respuesta){

		if(respuesta.info.distancia===undefined){
			document.getElementById("distancia1").innerHTML="-- km";
		}
		else{
			document.getElementById("distancia1").innerHTML=respuesta.info.distancia+" km";
		}

		if(respuesta.info.hora_ini===undefined){
			document.getElementById("hora_ini").innerHTML="--/--/---- --:--:--";
		}
		else{
			var fecha= new Date(respuesta.info.hora_ini);
			var mes="";
			switch(fecha.getMonth()){
				case 0:
					mes="ene.";
					break;
				case 1:
					mes="feb.";
					break;
				case 2:
					mes="mar.";
					break;
				case 3:
					mes="abr.";
					break;
				case 4:
					mes="may.";
					break;
				case 5:
					mes="jun.";
					break;
				case 6:
					mes="jul.";
					break;
				case 7:
					mes="ago.";
					break;
				case 8:
					mes="sep.";
					break;
				case 9:
					mes="oct.";
					break;
				case 10:
					mes="nov.";
					break;
				case 11:
					mes="dic.";
					break;
				default:
					mes="--";
					break;
			}
			document.getElementById("hora_ini").innerHTML=fecha.getDate()+"-"+mes+"-"+fecha.getFullYear()+" "+fecha.getHours()+":"+fecha.getMinutes();
		}

		if(respuesta.info.distancia===undefined){
			document.getElementById("distancia2").innerHTML="-- km";
		}
		else{
			document.getElementById("distancia2").innerHTML=respuesta.info.distancia+" km";
		}
		
		if(respuesta.info.tiempo===undefined){
			document.getElementById("duracion").innerHTML="--h:--m:--s";
		}
		else{
			var tiempo=respuesta.info.tiempo;
			var horas = Math.floor( tiempo / 3600 );  
			var minutos = Math.floor( (tiempo % 3600) / 60 );
			var segundos = tiempo % 60;
			
			//Anteponiendo un 0 a las horas si son menos de 10 
			horas = horas < 10 ? '0' + horas : horas;

			//Anteponiendo un 0 a los minutos si son menos de 10 
			minutos = minutos < 10 ? '0' + minutos : minutos;
			 
			//Anteponiendo un 0 a los segundos si son menos de 10 
			segundos = segundos < 10 ? '0' + segundos : segundos;
			 
			var resultado = horas + "h:" + minutos + "m:" + segundos+"s";
			document.getElementById("duracion").innerHTML=resultado;
		}

		if(respuesta.info.calorias===undefined){
			document.getElementById("calorias").innerHTML="-- kcal";
		}
		else{
			document.getElementById("calorias").innerHTML=respuesta.info.calorias+" kcal";
		}

		if(respuesta.info.vel_med===undefined){
			document.getElementById("vel_med").innerHTML="-- km/h";
		}
		else{
			document.getElementById("vel_med").innerHTML=respuesta.info.vel_med+" km/h";
		}

		if(respuesta.info.vel_max===undefined){
			document.getElementById("vel_max").innerHTML="-- km/h";
		}
		else{
			document.getElementById("vel_max").innerHTML=respuesta.info.vel_max+" km/h";
		}

		if(respuesta.info.ritmo_med===undefined){
			document.getElementById("ritmo_med").innerHTML="-- min/km";
		}
		else{
			var velocidad=respuesta.info.ritmo_med;
			var ritmo_med= Math.floor( (3600/velocidad) / 60 );
			document.getElementById("ritmo_med").innerHTML=ritmo_med+" min/km";
		}

		if(respuesta.info.ritmo_max===undefined){
			document.getElementById("ritmo_max").innerHTML="-- min/km";
		}
		else{
			var velocidad1=respuesta.info.ritmo_max;
			var ritmo_max= Math.floor( (3600/velocidad1) / 60 );
			document.getElementById("ritmo_max").innerHTML=ritmo_max+" min/km";
		}

		if(respuesta.info.alt_min===undefined){
			document.getElementById("alt_min").innerHTML="-- m";
		}
		else{
			document.getElementById("alt_min").innerHTML=respuesta.info.alt_min+" m";
		}

		if(respuesta.info.alt_max===undefined){
			document.getElementById("alt_max").innerHTML="-- m";
		}
		else{
			document.getElementById("alt_max").innerHTML=respuesta.info.alt_max+" m";
		}

		if(respuesta.info.ascenso===undefined){
			document.getElementById("ascenso").innerHTML="-- m";
		}
		else{
			document.getElementById("ascenso").innerHTML=respuesta.info.ascenso+" m";
		}

		if(respuesta.info.desnivel===undefined){
			document.getElementById("descenso").innerHTML="-- m";
		}
		else{
			document.getElementById("descenso").innerHTML=respuesta.info.desnivel+" m";
		}

		if(respuesta.info.fc_med===undefined){
			document.getElementById("fc_med").innerHTML="--";
		}
		else{
			document.getElementById("fc_med").innerHTML=respuesta.info.fc_med;
		}

		if(respuesta.info.fc_max===undefined){
			document.getElementById("fc_max").innerHTML="--";
		}
		else{
			document.getElementById("fc_max").innerHTML=respuesta.info.fc_max;
		}

		if(respuesta.info.pasos===undefined){
			document.getElementById("pasos").innerHTML="--";
		}
		else{
			document.getElementById("pasos").innerHTML=respuesta.info.pasos;
		}

		if(respuesta.info.viento===undefined){
			document.getElementById("viento").innerHTML="--";
		}
		else{
			document.getElementById("viento").innerHTML=respuesta.info.viento;
		}

		if(respuesta.info.temperatura===undefined){
			document.getElementById("temperatura").innerHTML="--";
		}
		else{
			document.getElementById("temperatura").innerHTML=respuesta.info.temperatura;
		}

		if(respuesta.info.humedad===undefined){
			document.getElementById("humedad").innerHTML="--";
		}
		else{
			document.getElementById("humedad").innerHTML=respuesta.info.humedad+" %";
		}

		if(respuesta.info.ambiente===undefined){
			document.getElementById("tiempo").innerHTML="--";
		}
		else{
			document.getElementById("tiempo").innerHTML=respuesta.info.ambiente;
		}

	}
});

