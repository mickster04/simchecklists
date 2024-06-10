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

var itemsList = document.getElementsByClassName('items');
var itemHighlight = itemsList[0];
itemHighlight.classList.add('highlight');

var els = document.getElementsByClassName('items');
for (var i = 0; i < els.length; i++) {
	els[i].addEventListener('click', cross, false)
}