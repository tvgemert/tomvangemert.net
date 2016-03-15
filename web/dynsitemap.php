<?
	header("Content-type: application/xml");
	$sitemap = '';
	$sitemap .= '<?xml version="1.0" encoding="UTF-8"?>';
	$sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
	$sitemap .= '<url><loc>http://www.tomvangemert.net</loc><lastmod>'.date("Y-m-d", filemtime($_SERVER['DOCUMENT_ROOT'].'/web/home.php')).'</lastmod></url>';
	$sitemap .= '<url><loc>http://www.tomvangemert.net/skills</loc><lastmod>'.date("Y-m-d", filemtime($_SERVER['DOCUMENT_ROOT'].'/web/skills.php')).'</lastmod></url>';
	$sitemap .= '<url><loc>http://www.tomvangemert.net/work</loc><lastmod>'.date("Y-m-d", filemtime($_SERVER['DOCUMENT_ROOT'].'/web/work.php')).'</lastmod></url>';
	$sitemap .= '<url><loc>http://www.tomvangemert.net/about</loc><lastmod>'.date("Y-m-d", filemtime($_SERVER['DOCUMENT_ROOT'].'/web/about.php')).'</lastmod></url>';	
	$sitemap .= '<url><loc>http://www.tomvangemert.net/contact</loc><lastmod>'.date("Y-m-d", filemtime($_SERVER['DOCUMENT_ROOT'].'/web/contact.php')).'</lastmod></url>';
	
	$sitemap .= '</urlset>';
	echo $sitemap;