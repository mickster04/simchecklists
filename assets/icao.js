document.getElementById('button_icao_submit').addEventListener('click', icao_submit, false);

icao_open_buttons = document.querySelectorAll('.icao_open');
icao_open_buttons.forEach(function(btn) { btn.addEventListener('click', icao_open, false); });

document.getElementById('icao_close').addEventListener('click', icao_close, false);

$base_url = 'https://api.flightplandatabase.com/nav/airport/';

async function fpdb_get() { 
	const response = await fetch($url);
	if (!response.ok) {
		switch(response.status) { 
			case 500:
				show_api_error("Server Error 500");
			break;
			
			case 404:
				show_api_error("Airport Not Found");
			break;
		}
		throw new Error(`HTTP error ${response.status}`);
	}
	const data = await response.json();
	cleanup_fields();
	add_default_info();
	document.getElementsByClassName("airport_name")[0].innerHTML += data['name'] + " / ICAO: " + data['ICAO'] + " (" + data['IATA'] + ")";
	
	for(i = 0; i < data['runways'].length; i++) { 
		document.getElementsByClassName("runways_list")[0].innerHTML += '<div class="runway_info runway_number">' + data['runways'][i]['ident'] + '</div>';
		document.getElementsByClassName("runways_list")[0].innerHTML += '<div class="runway_info runway_surface">' + data['runways'][i]['surface'] + '</div>';
		document.getElementsByClassName("runways_list")[0].innerHTML += '<div class="runway_info runway_length">' + data['runways'][i]['length'].toFixed(2) + ' ft. </div>';
		document.getElementsByClassName("runways_list")[0].innerHTML += '<div class="new_line"></div>';
		
		for(j = 0; j < data['runways'][i]['navaids'].length; j++) { 
			if(data['runways'][i]['navaids'][j]['name'] !== null) { 
				freq = String(data['runways'][i]['navaids'][j]['frequency']).substr(0,3) + "." + String(data['runways'][i]['navaids'][j]['frequency']).substr(3,2);
				document.getElementsByClassName("runways")[0].innerHTML += '<div class="runway_info runway_number">' + data['runways'][i]['ident'] + '</div>';
				document.getElementsByClassName("runways")[0].innerHTML += '<div class="runway_info runway_navid">' + data['runways'][i]['navaids'][j]['name'] + '</div>';
				document.getElementsByClassName("runways")[0].innerHTML += '<div class="runway_info runway_navaid">' + data['runways'][i]['navaids'][j]['type'] + '</div>';
				document.getElementsByClassName("runways")[0].innerHTML += '<div class="runway_info runway_freq">' + freq + '</div>';
				document.getElementsByClassName("runways")[0].innerHTML += '<div class="new_line"></div>';
			}
		}
	}
	
	for(i = 0; i < data['frequencies'].length; i++) { 
		freq = String(data['frequencies'][i]['frequency']).substr(0,3) + "." + String(data['frequencies'][i]['frequency']).substr(3,2);
		document.getElementsByClassName('comms')[0].innerHTML += '<div class="runway_info comms_number">' + data['frequencies'][i]['type'] + '</div>';
		document.getElementsByClassName('comms')[0].innerHTML += '<div class="runway_info comms_name">' + data['frequencies'][i]['name'] + '</div>';
		document.getElementsByClassName('comms')[0].innerHTML += '<div class="runway_info comms_freq">' + freq + '</div>';
		document.getElementsByClassName('comms')[0].innerHTML += '<div class="new_line"></div>';
	}
	
	document.getElementsByClassName('metar')[0].innerHTML = '<div>' + data['weather']['METAR'] + '</div>';
}

function icao_submit() { 
	$url = $base_url + document.getElementById('airport_code').value;
	document.getElementsByClassName("airport_name")[0].innerHTML = "Loading...";
	document.getElementsByClassName("runways")[0].innerHTML = "Loading...";
	document.getElementsByClassName("runways_list")[0].innerHTML = "Loading...";
	document.getElementsByClassName("comms")[0].innerHTML = "Loading...";
	document.getElementsByClassName("metar")[0].innerHTML = "Loading...";
	fpdb_get();
}

function icao_close() { 
	document.getElementsByClassName("icao-window")[0].classList.remove("is-visible");
}

function icao_open() { 
	document.getElementsByClassName("icao-window")[0].classList.add("is-visible");
}

function cleanup_fields() { 
	document.getElementsByClassName("airport_name")[0].innerHTML = "";
	document.getElementsByClassName("runways_list")[0].innerHTML = "";
	document.getElementsByClassName("runways")[0].innerHTML = "";
	document.getElementsByClassName("comms")[0].innerHTML = "";
	document.getElementsByClassName("metar")[0].innerHTML = "";
	document.getElementById('airport_code').value = "";
}

function add_default_info() { 
	document.getElementsByClassName("runways")[0].innerHTML = '<div class="runway_info runway_number">RWY No</div><div class="runway_info runway_navid">ID</div><div class="runway_info runway_navaid">NAV</div><div class="runway_info runway_freq">FREQ</div><div class="new_line"></div>'; 
	document.getElementsByClassName("runways_list")[0].innerHTML += '<div class="runway_info runway_number">RWY No</div><div class="runway_info runway_surface">SURFACE</div><div class="runway_info runway_length">LENGTH</div><div class="new_line"></div>';
}

function show_api_error(msg) { 
	cleanup_fields();
	document.getElementsByClassName("airport_name")[0].innerHTML = msg;
}
