let timer;
var chrono_min = 0;
var chrono_seg = 0;
var chrono_run = 0;

let timer2;
var chrono_min2 = 0;
var chrono_seg2 = 0;
var chrono_run2 = 0;

let timer3;
var chrono_min3 = 0;
var chrono_seg3 = 0;
var chrono_run3 = 0;

function chrono_load() {
	chrono_open_buttons = document.querySelectorAll('.chrono_open');
	chrono_open_buttons.forEach(function(btn) { btn.addEventListener('click', chrono_open, false); });
	document.getElementById('chrono_close').addEventListener('click', chrono_close, false);

	// Chronometer 1 //
	document.getElementById('chrono_start').addEventListener('click', chrono_start, false);
	document.getElementById('chrono_stop').addEventListener('click', chrono_stop, false);
	document.getElementById('chrono_reset').addEventListener('click', chrono_reset, false);
	chrono_display = document.getElementById('chrono_display');
	

	// Chronometer 2 //
	document.getElementById('chrono_start2').addEventListener('click', chrono_start2, false);
	document.getElementById('chrono_stop2').addEventListener('click', chrono_stop2, false);
	document.getElementById('chrono_reset2').addEventListener('click', chrono_reset2, false);
	chrono_display2 = document.getElementById('chrono_display2');
	

	// Chronometer 3 //
	document.getElementById('chrono_start3').addEventListener('click', chrono_start3, false);
	document.getElementById('chrono_stop3').addEventListener('click', chrono_stop3, false);
	document.getElementById('chrono_reset3').addEventListener('click', chrono_reset3, false);
	chrono_display3 = document.getElementById('chrono_display3');
	

}

function chrono_open() { 
	document.getElementsByClassName("chrono_window")[0].classList.add("is-visible");
	
	if(!document.getElementsByClassName("chrono_window")[0].classList.contains("opened")) { 
		document.getElementsByClassName("chrono_window")[0].classList.add("opened"); 
	} 
		
}

function chrono_close() { document.getElementsByClassName("chrono_window")[0].classList.remove("is-visible"); }

function chrono_start() { 
	if(chrono_run == 0) { 
		timer = window.setInterval(function(){
			chrono_increase();
	  	}, 1000);
		chrono_run = 1;
	}
}

function chrono_increase() { 
	chrono_seg = chrono_seg + 1; 
	if(chrono_seg == 60) { 
		chrono_seg = 0;
		chrono_min = chrono_min + 1;
	}
	chrono_update_display();
}

function chrono_stop() { 
	clearInterval(timer);
	chrono_run = 0;
}

function chrono_reset() { 
	if(chrono_run == 0) { 
		chrono_min = 0;
		chrono_seg = 0;
		chrono_update_display();
	}
}

function chrono_update_display() { 
	chrono_seg_display = chrono_seg;
	chrono_min_display = chrono_min;
	if(chrono_seg < 10) { chrono_seg_display = "0" + chrono_seg; }
	if(chrono_min < 10) { chrono_min_display = "0" + chrono_min; }
	chrono_display.innerHTML = chrono_min_display + ":" + chrono_seg_display;
}


// Chronometer 2 //
function chrono_start2() { 
	if(chrono_run2 == 0) { 
		timer2 = window.setInterval(function(){
			chrono_increase2();
	  	}, 1000);
		chrono_run2 = 1;
	}
}

function chrono_increase2() { 
	chrono_seg2 = chrono_seg2 + 1; 
	if(chrono_seg2 == 60) { 
		chrono_seg2 = 0;
		chrono_min2 = chrono_min2 + 1;
	}
	chrono_update_display2();
}

function chrono_stop2() { 
	clearInterval(timer2);
	chrono_run2 = 0;
}

function chrono_reset2() { 
	if(chrono_run2 == 0) { 
		chrono_min2 = 0;
		chrono_seg2 = 0;
		chrono_update_display2();
	}
}

function chrono_update_display2() { 
	chrono_seg_display2 = chrono_seg2;
	chrono_min_display2 = chrono_min2;
	if(chrono_seg2 < 10) { chrono_seg_display2 = "0" + chrono_seg2; }
	if(chrono_min2 < 10) { chrono_min_display2 = "0" + chrono_min2; }
	chrono_display2.innerHTML = chrono_min_display2 + ":" + chrono_seg_display2;
}

// Chronometer 3 //
function chrono_start3() { 
	if(chrono_run3 == 0) { 
		timer3 = window.setInterval(function(){
			chrono_increase3();
	  	}, 1000);
		chrono_run3 = 1;
	}
}

function chrono_increase3() { 
	chrono_seg3 = chrono_seg3 + 1; 
	if(chrono_seg3 == 60) { 
		chrono_seg3 = 0;
		chrono_min3 = chrono_min3 + 1;
	}
	chrono_update_display3();
}

function chrono_stop3() { 
	clearInterval(timer3);
	chrono_run3 = 0;
}

function chrono_reset3() { 
	if(chrono_run3 == 0) { 
		chrono_min3 = 0;
		chrono_seg3 = 0;
		chrono_update_display3();
	}
}

function chrono_update_display3() { 
	chrono_seg_display3 = chrono_seg3;
	chrono_min_display3 = chrono_min3;
	if(chrono_seg3 < 10) { chrono_seg_display3 = "0" + chrono_seg3; }
	if(chrono_min3 < 10) { chrono_min_display3 = "0" + chrono_min3; }
	chrono_display3.innerHTML = chrono_min_display3 + ":" + chrono_seg_display3;
}