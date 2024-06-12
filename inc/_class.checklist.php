<?PHP
class checklist {
	public function __construct() {	}
	
	public function getTitles() { 
		$lists = glob("lists/*.txt");
		$title = array();
		$i = 0;
		foreach($lists as $list) { 
			$list_array = explode("\n", file_get_contents($list));
			$title[$i]['name'] = $list_array[0];
			$title[$i]['file'] = substr($list,6);
			$i++;
		}
		
		$key_values = array_column($title, 'name'); 
		foreach($key_values as $k) { 
			$arr[] = strtoupper(filter_var($k, FILTER_SANITIZE_STRING));
		}
		array_multisort($arr, SORT_ASC, $title);
		return $title;
	}
	
	public function validateChecklist($list) { 
		if (pathinfo($_FILES[$list]['name'], PATHINFO_EXTENSION) !== 'txt') {  
			return false; 
		}
		
		if (is_uploaded_file($_FILES[$list]['tmp_name'])) { 
			if(mime_content_type($_FILES[$list]['tmp_name']) !== "text/plain") { 
				return false; 
			} 
		}
		return true;
	}
	
	public function loadChecklist($list, $user) { 
		switch($user) { 
			case 0:
				$dir = 'lists/';
				break;
			case 1:
				$dir = '';
				break;
		}
		$items = array();
		$items = explode("\n", file_get_contents($dir.$list));
		if($user == 1) { unlink($list); }
		return $items;
	}
	
	public function displayTitles($title) { 
		foreach($title as $t) { 
			echo '- <a href="checklist.php?l='.$t['file'].'">'.$t['name'].'</a><br>';
		}
	}
	
	public function displayList($items) { 
		$c = 0;
		$l = count($items);
		foreach($items as $item) {
			$class = "title";
			$it = explode("=",$item); 
						
			if(isset($it[1])) { $class = "items"; } 
						
			if($class == "title") { 
				if($c == 0) { $class_use = "title green"; } else { $class_use = "title"; }
				if($c == $l-1) { $class_use = "title blue"; } else { $class_use = "title"; }
				echo '<div class="'.$class_use.'">'.str_replace("--", "", $it['0']).'</div>';
			} else { 
				echo '<div class="items">
				<div class="strike"></div>
				<div class="item">'.$it['0'].'</div>
				<div class="state">'.$it['1'].'</div></div>';
			}
			$c++;
		}
	}
	
	
	
}
?>