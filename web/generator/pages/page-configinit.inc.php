<?php
if(!defined('PCiMWHKGB5lwUwCci'))exit();
if(!$grab_parameters['xs_htmlname'])
$grab_parameters['xs_htmlname'] = dirname(dirname(__FILE__)).'/data/sitemap.html';
if(!$grab_parameters['xs_htmlpart'])
$grab_parameters['xs_htmlpart'] = 1000;
if($_SERVER['HTTP_HOST'])
{
$IjkpoSxfJIU = 'http://'.$_SERVER['HTTP_HOST'].dirname(dirname($_SERVER['REQUEST_URI'].'-'));
$VhnoUcNFi9Q = 'http://'.$_SERVER['HTTP_HOST'].dirname(($_SERVER['REQUEST_URI'].'-'));
}else
{
$QUhELgJiWhN7ABdVJx = parse_url($grab_parameters['xs_smurl']);
$_SERVER['HTTP_HOST'] = $QUhELgJiWhN7ABdVJx['host'];
$_SERVER['REQUEST_URI'] = dirname($QUhELgJiWhN7ABdVJx['path']).'/'.basename(dirname(dirname(__FILE__))).'/index.php';
$IjkpoSxfJIU = 'http://'.$_SERVER['HTTP_HOST'].dirname(dirname($_SERVER['REQUEST_URI'].'-'));
$VhnoUcNFi9Q = 'http://'.$_SERVER['HTTP_HOST'].dirname(($_SERVER['REQUEST_URI'].'-'));
}
$VhnoUcNFi9Q = preg_replace('#(//.*?/)/+#', '$1', $VhnoUcNFi9Q);
$IjkpoSxfJIU = preg_replace('#(//.*?/)/+#', '$1', $IjkpoSxfJIU);
$IjkpoSxfJIU = preg_replace('#/$#','',$IjkpoSxfJIU);
if(($grab_parameters['xs_notconfigured'] && is_writable(gjEB17v5UJj1SxRZ))
|| !file_exists(gjEB17v5UJj1SxRZ)
)
{
$grab_parameters['xs_initurl'] = $IjkpoSxfJIU;
$grab_parameters['xs_smname'] = dirname(dirname(dirname(__FILE__))).'/sitemap.xml';
$grab_parameters['xs_smurl'] = $IjkpoSxfJIU.'/sitemap.xml';
$grab_parameters['xs_notconfigured'] = 0;
lIRwDqHQC2tIuP(gjEB17v5UJj1SxRZ, $grab_parameters);
}
if($grab_parameters['xs_purgelogs'] > 0)
{
$pd = opendir(T_IVB6tYAThxWS);
if($pd)
while($fn = readdir($pd))
if(strstr($fn,'.proc')||strstr($fn,'.log')||strstr($fn,'sess_'))
if(@filemtime(T_IVB6tYAThxWS.$fn)<time()-$grab_parameters['xs_purgelogs']*24*60*60)
{     
@unlink(T_IVB6tYAThxWS.$fn);
}
closedir($pd);
}
$ZKHrdYpZx7xJpCetjV = $grab_parameters['xs_compress'] ? '.gz' : '';
$M2NTRvh2tI529 = dirname($grab_parameters['xs_htmlname']);
$ySNYPM9AgJwfmW = dirname(dirname(__FILE__)).'/data';
$ySNYPM9AgJwfmW = str_replace('\\','/',$ySNYPM9AgJwfmW);
$M2NTRvh2tI529 = str_replace('\\','/',$M2NTRvh2tI529);
$dn = (dirname(($_SERVER['REQUEST_URI']?$_SERVER['REQUEST_URI']:$_SERVER['PHP_SELF']).'-'));
if($dn=='.')$dn='';
$NoWmBUTFvN7kzhyn0o = 'http://'.$_SERVER['HTTP_HOST'].$dn.'/data';
$NoWmBUTFvN7kzhyn0o = preg_replace('#/$#','',$NoWmBUTFvN7kzhyn0o);
$hOuc4HLzwywe=strlen($ySNYPM9AgJwfmW)+1;
while($ySNYPM9AgJwfmW!=$M2NTRvh2tI529 &&!strstr($M2NTRvh2tI529,$ySNYPM9AgJwfmW)&& strlen($ySNYPM9AgJwfmW)<$hOuc4HLzwywe)
{
$hOuc4HLzwywe=strlen($ySNYPM9AgJwfmW);
$ySNYPM9AgJwfmW = dirname($ySNYPM9AgJwfmW);
$NoWmBUTFvN7kzhyn0o = dirname($NoWmBUTFvN7kzhyn0o);
}
$NoWmBUTFvN7kzhyn0o .= str_replace($ySNYPM9AgJwfmW,'',$M2NTRvh2tI529);
$J1FmiSfIAe5Xjp0MUVb = $grab_parameters['xs_htmlpart'];
$PtUafGiAPeMBNuKQpDm = basename($grab_parameters['xs_htmlname']);
$uv0LKrNpy = (($qcHvzZE_cTnCJcmS['ucount']>$J1FmiSfIAe5Xjp0MUVb) ? HlywPDappbdYVU(1,$PtUafGiAPeMBNuKQpDm,true):$PtUafGiAPeMBNuKQpDm);
$grab_parameters['htmlurl']=$NoWmBUTFvN7kzhyn0o.'/'.$uv0LKrNpy;
$sm_proc_list = array();
$pd = opendir(Niq61B3f5T);
while($fn = readdir($pd))
if(strstr($fn, 'inc.php'))
{
@include_once Niq61B3f5T.$fn;
}
?>