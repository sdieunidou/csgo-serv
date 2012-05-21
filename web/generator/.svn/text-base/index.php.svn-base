<?php
if(function_exists('date_default_timezone_set'))date_default_timezone_set('UTC'); 
function cELF4rAmlQsI9AR($VP8vAJd3fs3x1Ygo)
{
$rt='array(';
foreach($VP8vAJd3fs3x1Ygo as $k=>$v)
$rt.="
'$k' => '".addslashes($v)."',";
$rt.=")";
return $rt;
}
error_reporting(E_ALL&~E_NOTICE);
@ini_set ("include_path", ini_get ("include_path") . '.;pages/;'.(dirname(__FILE__).'\\pages').'');
@ini_set ("serialize_precision", 5);
define('bZ3jbCz403O1HU','crawl_dump.log');
define('iK6zN3FNMZ','crawl_state.log');
define('fM0qQkSagz_','interrupt.log');
define('DOqagMEXq2', dirname(__FILE__).'/');
define('ZR1vtYkW3IIT6ji', dirname(__FILE__).'/pages/');
define('Niq61B3f5T', dirname(__FILE__).'/pages/mods/');
define('hFdFC9FutftfbQcPCF', 't6504');

define ('bcUHiUvk1__NNu9qID', 1288378155);
include DOqagMEXq2.'pages/class.utils.inc.php';
preg_match('#index\.([a-z0-9]+)$#',__FILE__,$pm);
$muP565NgXyQ = $pm[1] ? $pm[1] : 'php';
define('tV12hsJy_', dirname(__FILE__).'/config.inc.php');
define('Hqm42kdaBr', dirname(__FILE__).'/default.conf');
$PzuggV5kgs3COXPF = @implode('', file(tV12hsJy_));
 
@include tV12hsJy_;
$grab_parameters['xs_password']=md5($grab_parameters['xs_password']);
Xfcs5RdKZjSaEqvTYT(Hqm42kdaBr, $grab_parameters, true);
define('T_IVB6tYAThxWS', $grab_parameters['xs_datfolder'] ? $grab_parameters['xs_datfolder'] : dirname(__FILE__).'/data/');
define('CycjTbE1bsdEES4EbPq', T_IVB6tYAThxWS.'progress/');
define('gjEB17v5UJj1SxRZ', T_IVB6tYAThxWS.'generator.conf');
Xfcs5RdKZjSaEqvTYT(gjEB17v5UJj1SxRZ, $grab_parameters);
define('WyXkTyAK3kSMA',$grab_parameters['xs_sm_text_filename'] ? $grab_parameters['xs_sm_text_filename'] : T_IVB6tYAThxWS . 'urllist.txt');
define('a_swOP2hskJvhpi2o', $grab_parameters['xs_sm_text_url'] ? $grab_parameters['xs_sm_text_url'] : 'data/urllist.txt');
define('MMwXOhanJ6q', preg_replace('#[^\\/]+?\.xml$#', 'ror.xml', $grab_parameters['xs_smname']));
define('u3Aj3kpP8f7NX',preg_replace('#[^\\/]+?\.xml$#', 'ror.xml', $grab_parameters['xs_smurl']));
define('DFJUj5XaZVoZf', T_IVB6tYAThxWS . 'gbase.xml');
define('duBMhqfH7kGKH', 'data/gbase.xml');
if(!$_GET&&$HTTP_GET_VARS)$_GET=$HTTP_GET_VARS;
if(!$_POST&&$HTTP_POST_VARS)$_POST=$HTTP_POST_VARS;
if(function_exists('ini_set'))
{
@ini_set ("output_buffering", '0');
if($grab_parameters['xs_memlimit'])
@ini_set ("memory_limit", $grab_parameters['xs_memlimit'].'M');
if($grab_parameters['xs_exec_time'])
@ini_set ("max_execution_time", $grab_parameters['xs_exec_time']);
@ini_set("magic_quotes_runtime",'Off');
@ini_set("session.save_handler",'files');
@ini_set('session.save_path', dirname(__FILE__).'/data/');
}

if(@ini_get("magic_quotes_gpc")){
if($_GET)foreach($_GET as $k=>$v){$_GET[$k]=stripslashes($v);}
if($_POST)foreach($_POST as $k=>$v){$_POST[$k]=stripslashes($v);}
}


$op=$_REQUEST['op'];
if(function_exists('session_start'))
@session_start();
if($op=='logout'){
$_SESSION['is_admin'] = false;
setcookie('sm_log','');
unset($op);
}
if(!isset($op)) $op = 'config';
if(!$_SESSION['is_admin'])
$_SESSION['is_admin'] = ($_COOKIE['sm_log']==(md5($grab_parameters['xs_login']).'-'.md5($grab_parameters['xs_password'])));
if(!$_SESSION['is_admin'] && $op != 'crawlproc')
{                                  
include DOqagMEXq2.'pages/page-login.inc.php';
if(!$_SESSION['is_admin'])
exit;
}
define('PCiMWHKGB5lwUwCci', true);
include DOqagMEXq2.'pages/page-configinit.inc.php';
include DOqagMEXq2.'pages/class.http.inc.php';
switch($op){
case 'crawl':
case 'crawlproc':
case 'config':
case 'view':
case 'analyze':
case 'chlog':
case 'l404':
case 'ext':
case 'proc':
include DOqagMEXq2.'pages/page-'.$op.'.inc.php';
break;
case 'pinfo':
phpinfo();
break;
}
