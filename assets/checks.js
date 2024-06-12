var touchstartX = 0;
var touchendX = 0;
var itemsList = document.getElementsByClassName('items');
var itemHighlight = itemsList[0];
itemHighlight.classList.add('highlight');

function cross() {
	this.classList.add('items-done');
	this.querySelector(".state").classList.add('state-done');
	this.querySelector(".strike").style.opacity = "1";
	
	for(i =0; i < itemsList.length; i++) { 
		itemsList[i].classList.remove('highlight');
	}

	var a = this.nextElementSibling;
	if(a !== null) { 
		if(this.nextElementSibling.classList.contains("items")) { 
			this.nextElementSibling.classList.add('highlight');
		} else { 
			this.nextElementSibling.nextElementSibling.classList.add('highlight'); 
		}
	}
}

for (var i = 0; i < itemsList.length; i++) {
	itemsList[i].addEventListener('click', cross, false);
	
	itemsList[i].addEventListener('touchstart', function(event) { touchstartX = event.changedTouches[0].screenX; });
	
	itemsList[i].addEventListener('touchend', function(event) { 
		touchendX = event.changedTouches[0].screenX;
		if(touchstartX > touchendX) {
			if( (touchstartX - touchendX) > 80 ) { 
				this.querySelector(".state").classList.remove('state-done');
				this.querySelector(".strike").style.opacity = "0";
				for(i =0; i < itemsList.length; i++) { itemsList[i].classList.remove('highlight'); }
				this.classList.add('highlight');
			}
		}
	});
}