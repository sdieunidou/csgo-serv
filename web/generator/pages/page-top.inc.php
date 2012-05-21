<?php
if(!defined('PCiMWHKGB5lwUwCci'))exit();
$nUL_T6a470Fqqn = array(
'config'=>'Configuration',
'crawl'=>'Crawling',
'view'=>'View Sitemap',
'analyze'=>'Analyze Sitemap',
'chlog'=>'Site Change Log',
'l404'=>'Broken Links',
'ext'=>'External Links',
);
$GRmeg_68ZvfdvyJw8v=$nUL_T6a470Fqqn[$op];
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><?php echo $GRmeg_68ZvfdvyJw8v;?>: XML, ROR, Text, HTML Sitemap Generator - (c) www.xml-sitemaps.com</title>
<meta http-equiv="Content-type" content="text/html;" charset="iso-8859-15" />
<META NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW"> 
<link rel=stylesheet type="text/css" href="pages/style.css">
</head>
<body>
<div align="center">
<a href="http://www.xml-sitemaps.com" target="_blank"><img src="pages/xmlsitemaps-logo.gif" border="0" /></a>
<br />
<h1>
<?php 

$gOJkENRoH = true;
if(!$gOJkENRoH){
?>
<a href="./">Standalone Sitemap Generator</a>
<?php }else {?>
<a href="./">Standalone Sitemap Generator <b style="color:#f00">(Trial Version)</b></a> 
<br/>
Expires in <b><?php echo intval(max(0,1+(bcUHiUvk1__NNu9qID-time())/24/60/60));?></b> days. Limited to max 500 URLs in sitemap.
<?php } ?>
</h1>
<div id="menu">
<ul id="nav">
<li><a<?php echo $op=='config'?' class="navact"':''?> href="index.<?php echo $muP565NgXyQ?>?op=config">Configuration</a></li>
<li><a<?php echo $op=='crawl'||$op=='crawl'?' class="navact"':''?> href="index.<?php echo $muP565NgXyQ?>?op=crawl">Crawling</a></li>
<li><a<?php echo $op=='view'?' class="navact"':''?> href="index.<?php echo $muP565NgXyQ?>?op=view">View Sitemap</a></li>
<li><a<?php echo $op=='analyze'?' class="navact"':''?> href="index.<?php echo $muP565NgXyQ?>?op=analyze">Analyze</a></li>
<li><a<?php echo $op=='chlog'?' class="navact"':''?> href="index.<?php echo $muP565NgXyQ?>?op=chlog">ChangeLog</a></li>
<li><a<?php echo $op=='l404'?' class="navact"':''?> href="index.<?php echo $muP565NgXyQ?>?op=l404">Broken Links</a></li>
<?php if($grab_parameters['xs_extlinks']){?>
<li><a<?php echo $op=='ext'?' class="navact"':''?> href="index.<?php echo $muP565NgXyQ?>?op=ext">Ext Links</a></li>
<?php }?>
<li><a href="documentation.html">Help</a></li>
<li><a href="http://www.xml-sitemaps.com/seo-tools.html">SEO Tools</a></li>
</ul>
</div>
<div id="outerdiv">
<?php
if($gOJkENRoH && (time()>bcUHiUvk1__NNu9qID)) {
?>
<h2>Trial version expired</h2>
<p>
You can order unlimited sitemap generator here: <a href="http://www.xml-sitemaps.com/standalone-google-sitemap-generator.html">Full version of sitemap generator</a>.
</p>
<?php
include ZR1vtYkW3IIT6ji.'page-bottom.inc.php';
exit;
}
?>