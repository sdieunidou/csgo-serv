<?php
class GenMail
{
function Pj81O2W_d6lwy($qcHvzZE_cTnCJcmS)
{
global $grab_parameters,$VhnoUcNFi9Q;
if(!$grab_parameters['xs_email'])
return;
$pE0deENVttSkb8Hz = 'Standalone Sitemap Generator Report';
$ZKHrdYpZx7xJpCetjV = $grab_parameters['xs_compress'] ? '.gz' : '';
$wjX5uaTwf5NEglz1aoT = 
'Hello,
you have configured your sitemap generator to receive these automated notifications every time sitemap is created.
'.$pE0deENVttSkb8Hz.' - '.date('j F Y, H:i').'
http://www.xml-sitemaps.com
-------------------------
Sitemap details
-------------------------
Request date: '.date('j F Y, H:i',$qcHvzZE_cTnCJcmS['time']).'
Processing time: '.Yqz1QyXnf8Zlfu9jU($qcHvzZE_cTnCJcmS['ctime']).'s
Pages indexed: '.$qcHvzZE_cTnCJcmS['ucount'].'
Sitemap files: '.count($qcHvzZE_cTnCJcmS['files']).'
Pages size: '.number_format($qcHvzZE_cTnCJcmS['tsize']/1024/1024,2).'Mb
-------------------------
View Sitemaps
-------------------------
XML Sitemap
'.$grab_parameters['xs_smurl'].$ZKHrdYpZx7xJpCetjV.'
Text Sitemap
'.($grab_parameters['xs_sm_text_url']?'':$VhnoUcNFi9Q.'/').a_swOP2hskJvhpi2o . $ZKHrdYpZx7xJpCetjV.'
ROR Sitemap
'.u3Aj3kpP8f7NX .'
HTML Sitemap
'.$grab_parameters['htmlurl'].'
-------------------------
Broken Links
-------------------------
'.(count($qcHvzZE_cTnCJcmS['u404']) ? count($qcHvzZE_cTnCJcmS['u404']).' broken links found!
View the list: '.$VhnoUcNFi9Q.'/index.php?op=l404' : 'None found
--------------------------------------------------
End Of Report
Thank you for using Standalone Sitemap Generator
http://www.xml-sitemaps.com
');
$wjX5uaTwf5NEglz1aoT = preg_replace('#\r?\n#', "\r\n", $wjX5uaTwf5NEglz1aoT);
mail($grab_parameters['xs_email'], $pE0deENVttSkb8Hz, $wjX5uaTwf5NEglz1aoT, 'From: '.$grab_parameters['xs_email']);
}
}
$nBkwKlofG1 = new GenMail();
?>