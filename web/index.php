<?
	
	function ConvertURL(){
		$qs=$_SERVER['REQUEST_URI'];
		if(strpos($qs,'?')) $qs = substr($qs,0,strpos($qs,'?'));
		$items=explode('/',$qs);
		array_shift($items);
		// The first element is always empty because the querystring starts with a '/', so trash it
		/* we should have at least two items AND if more than 2 an even amount...
		 * Otherwise go to the default page */
		$count = 0;
		foreach($items as $item) {
			$params['get'.$count] = $item;
			$count++;
		}
		return $params;
	}	
	
	$params = ConvertURL();
	$loadFooter = true;
	$loadHeader = true;	
	$customHeader = '';
	
	switch ($params['get0']) {
		case 'work':
			if (isset($params['get1'])) {
				if (file_exists($params['get1'].'.php')) {
					$loadHeader = false;	
					$include = $params['get1'].'.php';		
				} else {
					header('HTTP/1.0 404 Not Found');		
					$include = '404.php';				
				}	
			} else {
				$include = 'work.php';
			}
			break;
		case 'skills':
			$include = 'skills.php';
			break;
		case 'about':
			$include = 'about.php';
			break;
		case 'contact':
			$include = 'contact.php';
			break;					
		case '':
			$include = 'home.php';
			break;
		default:	
			header('HTTP/1.0 404 Not Found');		
			$include = '404.php';
			break;		
	}
	
	$bodyId = ($params['get0']) ? $params['get0'] : 'home';
	include('functions.php');	

	if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest')
	{
		include('html_header.php');
	}

	if ($loadHeader) include('header.php');	
	include($include);	
	if ($loadFooter) include('footer.php');	
	
	if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest')
	{
		include('html_footer.php');
	}

	
