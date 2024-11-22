wakeLock = navigator.wakeLock.request('screen');
window.onfocus = function() { wakeLock = navigator.wakeLock.request('screen'); }

window.onblur = function() { 
	// Need to Release? 
}