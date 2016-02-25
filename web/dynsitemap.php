<?
	header("Content-type: application/xml");
	$sitemap = '';
	$sitemap .= '<?xml version="1.0" encoding="UTF-8"?>';
	$sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
	$sitemap .= '<url><loc>http://www.tomvangemert.net</loc><lastmod>'.date("Y-m-d", filemtime($_SERVER['DOCUMENT_ROOT'].'home.inc.php')).'</lastmod></url>';
	$sitemap .= '<url><loc>http://www.tomvangemert.net/work</loc><lastmod>'.date("Y-m-d", filemtime($_SERVER['DOCUMENT_ROOT'].'work.inc.php')).'</lastmod></url>';
	$sitemap .= '<url><loc>http://www.tomvangemert.net/contact</loc><lastmod>'.date("Y-m-d", filemtime($_SERVER['DOCUMENT_ROOT'].'contact.inc.php')).'</lastmod></url>';
	$sitemap .= '<url><loc>http://www.tomvangemert.net/work/cultuur-ondernemen</loc><lastmod>'.date("Y-m-d", filemtime($_SERVER['DOCUMENT_ROOT'].'cultuur-ondernemen.inc.php')).'</lastmod></url>';
	$sitemap .= '<url><loc>http://www.tomvangemert.net/work/transit</loc><lastmod>'.date("Y-m-d", filemtime($_SERVER['DOCUMENT_ROOT'].'transit.inc.php')).'</lastmod></url>';
	$sitemap .= '<url><loc>http://www.tomvangemert.net/work/un-habitat</loc><lastmod>'.date("Y-m-d", filemtime($_SERVER['DOCUMENT_ROOT'].'un-habitat.inc.php')).'</lastmod></url>';
	$sitemap .= '<url><loc>http://www.tomvangemert.net/work/cx-company</loc><lastmod>'.date("Y-m-d", filemtime($_SERVER['DOCUMENT_ROOT'].'cx-company.inc.php')).'</lastmod></url>';				
	$sitemap .= '<url><loc>http://www.tomvangemert.net/work/content-management-system</loc><lastmod>'.date("Y-m-d", filemtime($_SERVER['DOCUMENT_ROOT'].'content-management-system.inc.php')).'</lastmod></url>';					
	
	$sitemap .= '</urlset>';
	echo $sitemap;