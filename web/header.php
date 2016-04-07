	<header>
		<div id="head">
			<h1 class="headline rotate-1">
				<a href="/" class="nav">
					Tom van Gemert<br/>web developer based in berlin.
				</a>
			</h1>
			<nav>
				<ul id="navigation">
					<li><a data-page ="home" href="/" class="nav<?=($params['get0'] == '') ? ' active' : '';?>">home</a></li>
					<li><a data-page ="skills" href="/skills" class="nav<?=($params['get0'] == 'skills') ? ' active' : '';?>">how</a></li>
					<li><a data-page ="work" href="/work" class="nav<?=($params['get0'] == 'work') ? ' active' : '';?>">work</a></li>				
					<li><a data-page ="contact" href="/contact" class="nav<?=($params['get0'] == 'contact') ? ' active' : '';?>">contact</a></li>				
				</ul>
			</nav>			
		</div>
	</header>