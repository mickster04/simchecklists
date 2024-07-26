<?PHP
class theme { 
	public function __construct($theme = "thm_default.thm") {
		if(isset($_SESSION['theme'])) { $theme = $_SESSION['theme']; }
		$this->theme_load($theme);
	}
	
	function theme_load($theme) {
		$theme_items = explode("\n", file_get_contents('assets/'.$theme));
		$this->theme_loaded = array();
		foreach($theme_items as $th) { 
			$temp = explode("=",$th); 
			$this->theme_loaded[$temp[0]]=$temp[1];
		}
	}
	
	public function theme_selector() { 
		$c = 0;
		$themes = array();
		$themes_items = array();
		$theme_files = glob("assets/*.thm");
		foreach($theme_files as $theme) { 
			$theme_items = explode("\n", file_get_contents($theme));
			foreach($theme_items as $th) { 
				$temp = explode("=",$th); 
				if($temp[0] == "name") { $themes[$c]['name'] = $temp[1]; $themes[$c]['file']= $theme; }
				$c++;
			}
		}
		$selected = "";
		echo '<form action="index.php" method="post"><select name="theme">';
		foreach($themes as $t) { 
			if(isset($_SESSION['theme'])) { 
				if($_SESSION['theme'] == substr($t['file'],6)) { $selected = "selected"; } else { $selected = ""; } 
			} else {if($t['file'] == "assets/thm_default.thm") { $selected = "selected"; } }
			echo '<option value="'.$t['file'].'" '.$selected.'>'.$t['name'].'</option>'; 
			$selected = "";
		}
		echo '</select>&nbsp;&nbsp;<input value="Change Theme" type="submit"></form>';
	}
	
	public function theme_value($property) { 
		$value = $this->theme_loaded[$property];
		return $value;
	}
	
	public function theme_icon($icon) { 
		switch($icon) { 
			case "refresh":
				echo '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="icon"><path d="M440-122q-121-15-200.5-105.5T160-440q0-66 26-126.5T260-672l57 57q-38 34-57.5 79T240-440q0 88 56 155.5T440-202v80Zm80 0v-80q87-16 143.5-83T720-440q0-100-70-170t-170-70h-3l44 44-56 56-140-140 140-140 56 56-44 44h3q134 0 227 93t93 227q0 121-79.5 211.5T520-122Z"/></svg>';
				break;
			case "back":
				echo '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="icon"><path d="M760-200v-160q0-50-35-85t-85-35H273l144 144-57 56-240-240 240-240 57 56-144 144h367q83 0 141.5 58.5T840-360v160h-80Z"/></svg>';
				break;
			case "icao":
				echo '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="icon"><path d="M120-120v-80h720v80H120Zm74-200L80-514l62-12 70 62 192-52-162-274 78-24 274 246 200-54q32-9 58 12t26 56q0 22-13.5 39T830-492L194-320Z"/></svg>';
				break;
			case "canvas":
				echo '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="icon"><path d="m499-287 335-335-52-52-335 335 52 52Zm-261 87q-100-5-149-42T40-349q0-65 53.5-105.5T242-503q39-3 58.5-12.5T320-542q0-26-29.5-39T193-600l7-80q103 8 151.5 41.5T400-542q0 53-38.5 83T248-423q-64 5-96 23.5T120-349q0 35 28 50.5t94 18.5l-4 80Zm280 7L353-358l382-382q20-20 47.5-20t47.5 20l70 70q20 20 20 47.5T900-575L518-193Zm-159 33q-17 4-30-9t-9-30l33-159 165 165-159 33Z"/></svg>';
				break;
			case "close":
				echo '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="icon-inner"><path d="m336-280 144-144 144 144 56-56-144-144 144-144-56-56-144 144-144-144-56 56 144 144-144 144 56 56ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>';
				break;
			case "writer":
				echo '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="icon"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h440l200 200v440q0 33-23.5 56.5T760-120H200Zm0-80h560v-400H600v-160H200v560Zm80-80h400v-80H280v80Zm0-320h200v-80H280v80Zm0 160h400v-80H280v80Zm-80-320v160-160 560-560Z"/></svg>';
				break;
			case "timer":
				echo '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="icon"><path d="M360-840v-80h240v80H360Zm80 440h80v-240h-80v240Zm40 320q-74 0-139.5-28.5T226-186q-49-49-77.5-114.5T120-440q0-74 28.5-139.5T226-694q49-49 114.5-77.5T480-800q62 0 119 20t107 58l56-56 56 56-56 56q38 50 58 107t20 119q0 74-28.5 139.5T734-186q-49 49-114.5 77.5T480-80Zm0-80q116 0 198-82t82-198q0-116-82-198t-198-82q-116 0-198 82t-82 198q0 116 82 198t198 82Zm0-280Z"/></svg>';
				break;
		}
	}
}
?>