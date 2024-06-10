<style>
	@font-face {
		font-family: myterminal;
		src: url('assets/<?PHP echo $theme->theme_value('font'); ?>');
	}
			
	body { 
		background-color:<?PHP echo $theme->theme_value('bg_color'); ?>;
		font-size:14px;
		font-family:myterminal;
		color:<?PHP echo $theme->theme_value('txt_color'); ?>
	}
	
	a { 
		color:<?PHP echo $theme->theme_value('txt_green'); ?>; 
		text-decoration:none;
	} 
			
	.main-container {
		width:100%;
		padding:5%;
		box-sizing:border-box;
		display:grid;
		justify-content:center;
	}
			
	.content { 
		width:100%;
		max-width:600px;
		padding-bottom:40px; 
	}
			
	.title { 
		color:<?PHP echo $theme->theme_value('txt_yellow'); ?>; 
		font-size:16px; 
		padding:10px;
	} 
	
	.green { color:<?PHP echo $theme->theme_value('txt_green'); ?>; }
	
	.items {
		position:relative;
		display:flex; 
		justify-content:space-between;
		padding:5px 10px 5px 10px;
	}
	
	.strike { 
		position:absolute;
		width:100%;
		background-color:white;
		top:12px;
		height:1px;
		opacity:0;
	}
			
	.state { color:<?PHP echo $theme->theme_value('txt_red'); ?>; }
	.state-done { color:<?PHP echo $theme->theme_value('txt_green'); ?>; }
	
	.highlight { background-color: <?PHP echo $theme->theme_value('bg_highlight'); ?>; }
			
	.footer { font-size:10px; }
</style>