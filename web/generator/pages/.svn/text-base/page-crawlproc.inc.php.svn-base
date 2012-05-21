<?php

?><html>
<head>
<title>XML Sitemaps - Generation</title>
<meta http-equiv="Content-type" content="text/html;charset=iso-8859-15" />
<link rel=stylesheet type="text/css" href="pages/style.css">
</head>
<body>
<?php
if(!defined('PCiMWHKGB5lwUwCci'))exit();
if(file_exists($fn=T_IVB6tYAThxWS.iK6zN3FNMZ)&&(time()-filemtime($fn)<10*60)){
$gf8uLIiBMWIqzFaD0=true;
?>
<h4>Already in progress. Current process state is displayed:</h4><?php
}
if(!$n6dlUxlV2r5){
?><div id="glog">
Links depth: <b><span id="llevel">-</span></b>
<br>
Current page: <span id="cpage">-</span>
<br>
Pages added to sitemap: <span id="compno">-</span>
<br>
Pages scanned: <span id="pdone">-</span> (<span id="bdone">-</span> KB)
<br>
Pages left: <span id="pleft">-</span> (+ <span id="l2">-</span> queued for the next depth level)
<br>
Time passed: <span id="tdone">-</span>
<br>
Time left: <span id="tleft">-</span>
<br>
Memory usage: <span id="musage">-</span>
</div>
<div id="rlog" style="bottom:5px;position:fixed;width:100%;font-size:12px;background-color:#fff;z-index:2000;padding-top:5px;border-top:#999 1px dotted"></div>
<script language="Javascript">
var lastupdate = new Date();
function tHSKS4COUobk6O(id,txt)
{
el = document.getElementById(id);
el.innerHTML = txt;
}
function KsTwDHjoXr(txt1,txt2,txt3,txt4,txt5,txt6,txt7,txt8,txt9,txt10)
{
tHSKS4COUobk6O('cpage',txt1);
tHSKS4COUobk6O('pleft',txt2);
tHSKS4COUobk6O('pdone',txt3);
tHSKS4COUobk6O('bdone',txt4);
tHSKS4COUobk6O('tdone',txt5);
tHSKS4COUobk6O('tleft',txt6);
tHSKS4COUobk6O('llevel',txt7);
tHSKS4COUobk6O('musage',txt8);
tHSKS4COUobk6O('compno',txt9);
tHSKS4COUobk6O('l2',txt10);
}
function X586Srhrb7zbBwwaEu()
{
var cd = new Date();
var re = document.getElementById('rlog');
var df = (cd - lastupdate)/1000;
re.innerHTML = 'Auto-restart monitoring: '+ cd + ' (' + Math.round(df) + ' second(s) since last update)';
<?php if($grab_parameters['xs_autoresume']){?>
if(df >= <?php echo $grab_parameters['xs_autoresume'];?>)
if(window.parent && window.parent.document)
{
var rle = window.parent.document.getElementById('runlog');
lastupdate = cd;
if(rle)
{
rle.style.display  = '';
rle.innerHTML = cd + ': resuming generator ('+Math.round(df)+' seconds with no response)<br />' + rle.innerHTML;
}
var lc = document.location;
if(lc.href.indexOf('resume=1')<0)
lc = lc + '&resume=1';
document.location = lc;
}
<?php } ?>
}
window.setInterval('X586Srhrb7zbBwwaEu()', 1000);
</script>
<?php	}
include ZR1vtYkW3IIT6ji.'class.grab.inc.php';
include ZR1vtYkW3IIT6ji.'class.xml-creator.inc.php';
include ZR1vtYkW3IIT6ji.'class.gping.inc.php';
if($gf8uLIiBMWIqzFaD0){
$rc = @K5kCC5JoHjozL(o5dbZtmDCSktjDlJt3($fn));
KDdCtJPGUBu9Wq($rc);
exit;
}
if(file_exists(T_IVB6tYAThxWS.fM0qQkSagz_))
@unlink(T_IVB6tYAThxWS.fM0qQkSagz_);
$qcHvzZE_cTnCJcmS = $fMiTRrdjIW->fjOiR1rimG(array(
'initurl'=>$grab_parameters['xs_initurl'],
'progress_callback'=>'KDdCtJPGUBu9Wq',
'maxpg'=>0,
'bgexec'=>$_REQUEST['bg'],
'resume'=>$_REQUEST['resume'],
'maxdepth'=>$grab_parameters['xs_max_depth'],
),
$urls_completed
);
if($qcHvzZE_cTnCJcmS['errmsg']||$qcHvzZE_cTnCJcmS['interrupt']){
echo '<h4>An error occured: '.$qcHvzZE_cTnCJcmS['errmsg'].'</h4>';
?>
<script>
top.location = 'index.<?php echo $muP565NgXyQ?>?op=config&errmsg=<?php echo urlencode($qcHvzZE_cTnCJcmS['interrupt']?'The process has been interrupted by user':$qcHvzZE_cTnCJcmS['errmsg'])?>'
</script>
<?php exit;
}
echo '<h4>Completed</h4>Total pages indexed: '.count($urls_completed);
echo '<br>Creating sitemaps...';
if($grab_parameters['xs_chlog'])
echo ' and calculating changelog...';
echo '<div id="percprog"></div>';
flush();
$qcHvzZE_cTnCJcmS = $m5czXgS9ltGPU6dr->Tsr1dxbRSl36XZQSmy2(
$grab_parameters,
$urls_completed,
$qcHvzZE_cTnCJcmS
);
if($grab_parameters['xs_makehtml'])
{
include ZR1vtYkW3IIT6ji.'class.html-creator.inc.php';
}
@unlink(T_IVB6tYAThxWS.bZ3jbCz403O1HU);
KDdCtJPGUBu9Wq(array('flush'=>1));
if($grab_parameters['xs_gping'])
$ZpnMGut2T->JAdjWDjZI($qcHvzZE_cTnCJcmS['files']);
KDdCtJPGUBu9Wq(array('flush'=>1));
if($grab_parameters['xs_weblog_ping'])
{
$BQ9LlruW7onUt1lb = $urls_completed[0]['t'];
$ZpnMGut2T->G3iGwEa5RT3($grab_parameters['xs_weblog_ping'], $grab_parameters['xs_initurl'], $BQ9LlruW7onUt1lb);
}
KDdCtJPGUBu9Wq(array('flush'=>1));
if($grab_parameters['xs_email'])
{
echo '<br>Sending email notification...';flush();
include ZR1vtYkW3IIT6ji.'class.mail.inc.php';
$nBkwKlofG1->Pj81O2W_d6lwy($qcHvzZE_cTnCJcmS);
}
KDdCtJPGUBu9Wq(array('flush'=>1));
?>
<br />Done, redirecting to sitemap view page.
<script>
top.location = 'index.<?php echo $muP565NgXyQ?>?op=view';
</script>
<?php	
exit;

function KDdCtJPGUBu9Wq($AzJloR6jxz6)
{
global $n6dlUxlV2r5, $GgZ_Thchlxe, $AystCW2ai, $kSqnsSOfXlo8ln, $grab_parameters;
if($AzJloR6jxz6['cmd'] == 'info')
{
if($kSqnsSOfXlo8ln[$AzJloR6jxz6['id']] != $AzJloR6jxz6['text'])
{
if($AzJloR6jxz6['text'])
echo "<script>document.getElementById('".$AzJloR6jxz6['id']."').innerHTML = '".$AzJloR6jxz6['text']."';</script>";
else
echo "<script>document.getElementById('".$AzJloR6jxz6['id']."').style.display = 'none';</script>";
flush();
$kSqnsSOfXlo8ln[$AzJloR6jxz6['id']] = $AzJloR6jxz6['text'];
}
$AzJloR6jxz6['cmd'] = 'ping';
}
if($AzJloR6jxz6['cmd'] == 'ping')
{
echo "<script>lastupdate = new Date();</script>";flush();
}else
if(!$AzJloR6jxz6['cmd'])
{
list(
$ctime, $JFo3FYeR4sjMvbCM7lu, $kH_x88NZpV8q, $pn, $tsize, $links_level, $mu, $dh6mwOEumX3JD, $l2
) = $AzJloR6jxz6;
$ubgR29rFB = $pn?($kH_x88NZpV8q/$pn)*$ctime:0;
$PnVZ_r6mVN = intval(str_replace(',','',$mu));

if($n6dlUxlV2r5)
echo "$pn | $kH_x88NZpV8q | ".number_format($tsize/1024,1)." | ".Yqz1QyXnf8Zlfu9jU($ctime).
" | ".Yqz1QyXnf8Zlfu9jU($ubgR29rFB)." | $links_level | $mu | $dh6mwOEumX3JD | $l2 | ".($PnVZ_r6mVN-$GgZ_Thchlxe)."\n";
else
echo "<script>KsTwDHjoXr('".addslashes($JFo3FYeR4sjMvbCM7lu)."',
'".$kH_x88NZpV8q."',
'".$pn."',
'".number_format($tsize/1024,1)."',
'".Yqz1QyXnf8Zlfu9jU($ctime)."',
'".Yqz1QyXnf8Zlfu9jU($ubgR29rFB)."',
'".$links_level."',
'".$mu."',
'".$dh6mwOEumX3JD."',
'".$l2."'
);</script>
";
}
if((time()-$AystCW2ai)>min(20,$grab_parameters['xs_autoresume']-5)
|| $AzJloR6jxz6['flush'])
{
$AystCW2ai = time();
echo "<!--".str_repeat('.',4096)."-->";
flush();
}
$GgZ_Thchlxe=$PnVZ_r6mVN;
flush();
}
?>