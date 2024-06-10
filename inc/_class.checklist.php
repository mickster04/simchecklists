<?PHP
class checklist {
	public function __construct() {	}
	
	public function getTitles() { 
		$lists = glob("lists/*.txt");
		$title = array();
		$i = 0;
		foreach($lists as $list) { 
			$list_array = explode("\n", file_get_contents($list));
			$title[$i][0] = $list_array[0];
			$title[$i][1] = substr($list,6);
			$i++;
		}
		return $title;
	}
	
	public function displayTitles($title) { 
		foreach($title as $t) { 
			echo '- <a href="checklist.php?l='.$t[1].'">'.$t[0].'</a><br>';
		}
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
	
	public function displayList($items) { 
		$c = 0;
		foreach($items as $item) {
			$class = "title";
			$it = explode("=",$item); 
						
			if(isset($it[1])) { $class = "items"; } 
						
			if($class == "title") { 
				if($c == 0) { $class_use = "title green"; } else { $class_use = "title"; }
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