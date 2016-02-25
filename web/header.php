	<header>
		<div id="head">
			<div class="cd-intro">
				<h1 class="cd-headline rotate-1">
					Tom van Gemert<br/>web developer based in berlin. I develop 
					<span class="cd-words-wrapper">
						<b class="is-visible">back to front</b>
						<b>front to back</b>
					</span>.
				</h1>
			</div>
			<ul id="navigation">
				<li><a href="/"<?=($params['get0'] == '') ? ' class="active"' : '';?>>home</a></li>
				<li><a href="/about"<?=($params['get0'] == 'about') ? ' class="active"' : '';?>>about me</a></li>
				<li><a href="/skills"<?=($params['get0'] == 'skills') ? ' class="active"' : '';?>>skills</a></li>
				<li><a href="/contact"<?=($params['get0'] == 'contact') ? ' class="active"' : '';?>>contact</a></li>				
			</ul>			
		</div>
	</header>
	<div id="container">