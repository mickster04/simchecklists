<style>
	@font-face {
		font-family: myterminal;
		src: url('assets/<?PHP echo $theme->theme_value('font'); ?>');
	}
			
	body { 
		background-color:<?PHP echo $theme->theme_value('dark_bg_color'); ?>;
		font-size:14px;
		font-family:myterminal;
		color:<?PHP echo $theme->theme_value('dark_txt_color'); ?>
	}
	
	a { 
		color:<?PHP echo $theme->theme_value('dark_txt_green'); ?>; 
		text-decoration:none;
	} 
	
	.icon { fill:<?PHP echo $theme->theme_value('dark_txt_color'); ?>; }
	
	.spacer { height:20px; }
	
	.icons { 
		display:flex;
		justify-content: space-between;
	}
	.icons div { cursor:pointer; }
			
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
		color:<?PHP echo $theme->theme_value('dark_txt_yellow'); ?>; 
		font-size:16px; 
		padding:10px;
	} 
	
	.green { color:<?PHP echo $theme->theme_value('dark_txt_green'); ?>; }
	
	.blue { color:<?PHP echo $theme->theme_value('dark_txt_blue'); ?>; }
		
	.items {
		position:relative;
		display:flex; 
		justify-content:space-between;
		padding:5px 10px 5px 10px;
	}
	
	.strike { 
		position:absolute;
		width:100%;
		background-color:<?PHP echo $theme->theme_value('dark_strike'); ?>;
		top:12px;
		height:1px;
		opacity:0;
	}
			
	.state { color:<?PHP echo $theme->theme_value('dark_txt_red'); ?>; }
	.state-done { color:<?PHP echo $theme->theme_value('dark_txt_green'); ?>; }
	
	.highlight { background-color: <?PHP echo $theme->theme_value('dark_bg_highlight'); ?>; }
			
	.footer { 
		padding-top:50px;
		font-size:10px; 
	}
	
	@media (prefers-color-scheme: dark) {
		body { 
			background-color:<?PHP echo $theme->theme_value('dark_bg_color'); ?>;
			color:<?PHP echo $theme->theme_value('dark_txt_color'); ?>
		}
	
		a { color:<?PHP echo $theme->theme_value('dark_txt_green'); ?>; } 
		.icon { fill:<?PHP echo $theme->theme_value('dark_txt_color'); ?>; }
		.title {  color:<?PHP echo $theme->theme_value('dark_txt_yellow'); ?>; } 
		.green { color:<?PHP echo $theme->theme_value('dark_txt_green'); ?>; }
		.blue { color:<?PHP echo $theme->theme_value('dark_txt_blue'); ?>; }
		.state { color:<?PHP echo $theme->theme_value('dark_txt_red'); ?>; }
		.state-done { color:<?PHP echo $theme->theme_value('dark_txt_green'); ?>; }
		.highlight { background-color: <?PHP echo $theme->theme_value('dark_bg_highlight'); ?>; }
		.strike { background-color:<?PHP echo $theme->theme_value('dark_strike'); ?>; }
	}
	
	@media (prefers-color-scheme: light) {
		body { 
			background-color:<?PHP echo $theme->theme_value('light_bg_color'); ?>;
			color:<?PHP echo $theme->theme_value('light_txt_color'); ?>
		}
	
		a { color:<?PHP echo $theme->theme_value('light_txt_green'); ?>; } 
		.icon { fill:<?PHP echo $theme->theme_value('light_txt_color'); ?>; }
		.title {  color:<?PHP echo $theme->theme_value('light_txt_yellow'); ?>; } 
		.green { color:<?PHP echo $theme->theme_value('light_txt_green'); ?>; }
		.blue { color:<?PHP echo $theme->theme_value('light_txt_blue'); ?>; }
		.state { color:<?PHP echo $theme->theme_value('light_txt_red'); ?>; }
		.state-done { color:<?PHP echo $theme->theme_value('light_txt_green'); ?>; }
		.highlight { background-color: <?PHP echo $theme->theme_value('light_bg_highlight'); ?>; }
		.strike { background-color:<?PHP echo $theme->theme_value('light_strike'); ?>; }
	}
	
	
</style>