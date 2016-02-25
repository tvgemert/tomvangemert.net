	<header>
		<div id="head">
			<h1>
				Tom van Gemert<br/>web developer based in berlin. I develop front to back. 
			</h1>
			<ul id="navigation">
				<li><a href="/"<?=($params['get0'] == '') ? ' class="active"' : '';?>>home</a></li>
				<li><a href="/about"<?=($params['get0'] == 'about') ? ' class="active"' : '';?>>about me</a></li>
				<li><a href="/skills"<?=($params['get0'] == 'skills') ? ' class="active"' : '';?>>skills</a></li>
				<li><a href="/contact"<?=($params['get0'] == 'contact') ? ' class="active"' : '';?>>contact</a></li>				
			</ul>			
		</div>
	</header>
	<div id="container">