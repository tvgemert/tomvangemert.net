	<header>
		<div id="head">
				<h1 class="headline rotate-1">
					<a href="/">
						Tom van Gemert<br/>web developer based in berlin. I develop 
						<span class="words-wrapper">
							<b class="is-visible">back to front</b>
							<b>front to back</b>
						</span>.
					</a>
				</h1>
			<ul id="navigation">
				<li><a data-page ="" href="/" class="nav<?=($params['get0'] == '') ? ' active' : '';?>">home</a></li>
				<li><a data-page ="about" href="/about" class="nav<?=($params['get0'] == 'about') ? ' active' : '';?>">about me</a></li>
				<li><a data-page ="skills" href="/skills" class="nav<?=($params['get0'] == 'skills') ? ' active' : '';?>">skills</a></li>
				<li><a data-page ="contact" href="/contact" class="nav<?=($params['get0'] == 'contact') ? ' active' : '';?>">contact</a></li>				
			</ul>			
		</div>
	</header>
	<div id="container">