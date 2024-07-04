var touchstartX = 0;
var touchendX = 0;
var itemsList = document.getElementsByClassName('items');
var titlesList = document.getElementsByClassName('sublist');
var itemHighlight = itemsList[0];
var width = screen.width / 2;
itemHighlight.classList.add('highlight');

function cross() {
	this.classList.add('items-done');
	this.querySelector(".state").classList.add('state-done');
	this.querySelector(".strike").style.opacity = "1";
		
	if(this.getBoundingClientRect().top > (screen.height *0.65)) { window.scroll({top: (this.getBoundingClientRect().top -10)  + window.scrollY, behavior: 'smooth'}); }
	
	for(i=0; i < itemsList.length; i++) { 
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
	
	for(i=0; i < itemsList.length; i++) { 
		if(this.innerHTML == itemsList[i].innerHTML) { itemsList[i+1].classList.add('highlight'); break; } 
	}
}

function subcheckcross() { 
	var currentIndex = 0;
	var child = this.childNodes;
	
	if(child.length > 0) { 
		for(i = 0; i < child.length; i++) {   
			if(child[i].classList.contains('items')) { 
				child[i].querySelector('.item').classList.add('items-done');
				child[i].querySelector('.state').classList.add('state-done');
				child[i].querySelector('.strike').style.opacity = "1";
				if(child[i].classList.contains('highlight')) { child[i].classList.remove('highlight'); }
			}
			if(i == child.length -1) { 
				window.scroll({top: (child[i].getBoundingClientRect().top -10)  + window.scrollY, behavior: 'smooth'});
			}
		}
		var itemList = document.querySelectorAll('.item');
	}
	
	for(i = 0; i < itemList.length; i++) { 
		if(!itemList[i].classList.contains('items-done')) { 
			itemList[i].parentNode.classList.add('highlight');
			break;
		}
	}
	
}

for (var i = 0; i < itemsList.length; i++) {
	itemsList[i].addEventListener('click', cross, false);

	itemsList[i].addEventListener('touchstart', function(event) { touchstartX = event.changedTouches[0].screenX; });

	itemsList[i].addEventListener('touchend', function(event) { 
		touchendX = event.changedTouches[0].screenX;
		if(touchstartX > touchendX) {
			if( (touchstartX - touchendX) > width) { 
				this.querySelector(".state").classList.remove('state-done');
				this.querySelector(".strike").style.opacity = "0";
				for(i =0; i < itemsList.length; i++) { itemsList[i].classList.remove('highlight'); }
				this.classList.add('highlight');
			}
		}
	});
}

for (var i = 0; i < titlesList.length; i++) { titlesList[i].addEventListener('dblclick', subcheckcross, false); }

