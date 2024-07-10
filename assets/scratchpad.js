canvas = document.getElementById('canvas');
ctx = canvas.getContext('2d');
coord = { x: 0, y: 0 };

canvas_open_buttons = document.querySelectorAll('.canvas_open');
canvas_open_buttons.forEach(function(btn) { btn.addEventListener('click', canvas_open, false); });
document.getElementById('canvas_close').addEventListener('click', canvas_close, false);

canvas.addEventListener('mousedown', mouse_start);
canvas.addEventListener('mouseup', stop);

canvas.addEventListener('touchstart', touch_start);
canvas.addEventListener('touchend', stop);

document.getElementById('clean').addEventListener('click', clean);

function touch_start(event) {
	event.preventDefault();
	canvas.addEventListener('touchmove', touch_draw);
	touch_reposition(event);
}

function touch_reposition(event) {
	
	coord.x = event.touches[0].clientX - canvas.offsetLeft - (document.getElementsByClassName('canvas')[0].offsetWidth *  0.02);
	coord.y = event.touches[0].clientY - canvas.offsetTop - (document.getElementsByClassName('canvas')[0].offsetHeight * 0.02);
}

function touch_draw(event) {
	ctx.beginPath();
	ctx.lineWidth = 2;
	ctx.lineCap = 'round';
	ctx.strokeStyle = '#000000';
	ctx.moveTo(coord.x, coord.y);
	touch_reposition(event);
	ctx.lineTo(coord.x, coord.y);
	ctx.stroke();
}

function mouse_start(event) {
	canvas.addEventListener('mousemove', mouse_draw);
	mouse_reposition(event);
}

function mouse_reposition(event) {
	coord.x = event.clientX - canvas.offsetLeft - (document.getElementsByClassName('canvas')[0].offsetWidth *  0.02);
	coord.y = event.clientY - canvas.offsetTop  -  (document.getElementsByClassName('canvas')[0].offsetHeight * 0.02);
}

function mouse_draw(event) {
	ctx.beginPath();
	ctx.lineWidth = 1;
	ctx.lineCap = 'round';
	ctx.strokeStyle = '#000000';
	ctx.moveTo(coord.x, coord.y);
	mouse_reposition(event);
	ctx.lineTo(coord.x, coord.y);
	ctx.stroke();
}

function stop() {
	canvas.removeEventListener('mousemove', mouse_draw);
	canvas.removeEventListener('touchmove', touch_draw);
}

function clean() { 
	ctx.clearRect(0, 0, canvas.width, canvas.height);
}

function canvas_open() { 
	document.getElementsByClassName("canvas_window")[0].classList.add("is-visible");
	
	if(!document.getElementsByClassName("canvas_window")[0].classList.contains("opened")) { 
		ctx.canvas.width = document.getElementsByClassName('canvas')[0].offsetWidth;
		ctx.canvas.height = document.getElementsByClassName('canvas')[0].offsetHeight;
		canvas.setAttribute('width', document.getElementsByClassName('canvas')[0].offsetWidth);
		canvas.setAttribute('height',document.getElementsByClassName('canvas')[0].offsetHeight);
		document.getElementsByClassName("canvas_window")[0].classList.add("opened"); 
	}
		
}

function canvas_close() { 
	document.getElementsByClassName("canvas_window")[0].classList.remove("is-visible");
}

screen.orientation.addEventListener("change", function(e) {
    temp = ctx.getImageData(0,0,canvas.width,canvas.height);
	ctx.canvas.width = document.getElementsByClassName('canvas')[0].offsetWidth;
	ctx.canvas.height = document.getElementsByClassName('canvas')[0].offsetHeight;
	ctx.putImageData(temp,0,0)
});