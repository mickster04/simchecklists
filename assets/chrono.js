chrono_open_buttons = document.querySelectorAll('.chrono_open');
chrono_open_buttons.forEach(function(btn) { btn.addEventListener('click', chrono_open, false); });
document.getElementById('chrono_close').addEventListener('click', chrono_close, false);
document.getElementById('chrono_start').addEventListener('click', chrono_start, false);
document.getElementById('chrono_stop').addEventListener('click', chrono_stop, false);
document.getElementById('chrono_reset').addEventListener('click', chrono_reset, false);
chrono_display = document.getElementById('chrono_display');
let timer;
var chrono_min = 0;
var chrono_seg = 0;
var chrono_run = 0;

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