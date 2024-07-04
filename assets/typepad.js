writer_open_buttons = document.querySelectorAll('.writer_open');
writer_open_buttons.forEach(function(btn) { btn.addEventListener('click', writer_open, false); });
document.getElementById('writer_close').addEventListener('click', writer_close, false);
document.getElementById('writer_clean').addEventListener('click', writer_clean);
typepad = document.getElementById('writer_pad');

function writer_clean() { typepad.value = ""; }

function writer_open() { 
	document.getElementsByClassName("writer_window")[0].classList.add("is-visible");
	
	if(!document.getElementsByClassName("writer_window")[0].classList.contains("opened")) { 
		document.getElementsByClassName("writer_window")[0].classList.add("opened"); 
	} 
		
}

function writer_close() { document.getElementsByClassName("writer_window")[0].classList.remove("is-visible"); }