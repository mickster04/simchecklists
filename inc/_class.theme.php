<?PHP
class theme { 
	public function __construct($theme) {
		$theme_items = explode("\n", file_get_contents('assets/'.$theme));
		$this->theme_loaded = array();
		foreach($theme_items as $th) { 
			$temp = explode("=",$th); 
			$this->theme_loaded[$temp[0]]=$temp[1];
		}
	}
	
	public function theme_value($property) { 
		$value = $this->theme_loaded[$property];
		return $value;
	}
}
?>