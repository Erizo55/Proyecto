
var control = document.getElementById('control'),
	resumenBtn = document.getElementById('resumenBtn'),
	flagresumenBtn=false;

control.addEventListener('click', function(){
	if(flagresumenBtn){
		$('.resumenBtn').css("float", "left");
		$('.control').css("background-color", "red");
		flagresumenBtn=false;
	} else{
		$('.resumenBtn').css("float", "right");
		$('.control').css("background-color", "green");
		flagresumenBtn=true;
	}
}, false);
