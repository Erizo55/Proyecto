function draw(){

	var canvas = document.getElementById('grafico_datos');
	
	if (canvas.getContext){
		var ctx = canvas.getContext('2d');

					
		ctx.lineWidth=1;

		ctx.moveTo(0,140);
		ctx.lineTo(900,140);
		ctx.lineWidth=1;
		ctx.stroke();
	}
}