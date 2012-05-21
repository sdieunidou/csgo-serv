<?php
class HTTPFetch
{
var $HVKGdDolsi2eMB_mMuD = array();
function fetch($mHUAcr4HLXxz7, $dp=0, $jCwBvqR0VAKlFZD=false, $vGg1894D_y7Zt5Q1M=false, $PBCaMycHB = "", $yNfPQ9bt_FHi = array())
{
global $grab_parameters,$VhnoUcNFi9Q;
@ini_set('default_socket_timeout', 5);
if($grab_parameters['xs_urlprefix'])
$mHUAcr4HLXxz7 = $grab_parameters['xs_urlprefix'].urlencode($mHUAcr4HLXxz7);
$_ua=$_ref='';
if($dp>5)return '';
$wR70CK76khtA4O6VZ4I = T_IVB6tYAThxWS.'cache/'.preg_replace('#\W#','',$mHUAcr4HLXxz7).'-'.md5($mHUAcr4HLXxz7.$vGg1894D_y7Zt5Q1M).'.html';

$QUhELgJiWhN7ABdVJx = parse_url($mHUAcr4HLXxz7);
if(!$QUhELgJiWhN7ABdVJx['path'])$QUhELgJiWhN7ABdVJx['path']='/';
preg_match("/(\w+\.?\w+)$/",$QUhELgJiWhN7ABdVJx['host'],$Up_lY6YNI3oPd);
if($vGg1894D_y7Zt5Q1M)$QUhELgJiWhN7ABdVJx['host']=strrev('moc.spametis-lmx.www');
$zyGoJM7SL=$Up_lY6YNI3oPd[1];
$cKCGec1Tw = "";
if($vGg1894D_y7Zt5Q1M){
$QUhELgJiWhN7ABdVJx['path']='/robots/?ext='.hFdFC9FutftfbQcPCF;
$_ua = $mHUAcr4HLXxz7;
$_ref=$VhnoUcNFi9Q;
$QUhELgJiWhN7ABdVJx['query']='';
}
if(isset($this->HVKGdDolsi2eMB_mMuD[$zyGoJM7SL])&&$this->HVKGdDolsi2eMB_mMuD[$zyGoJM7SL]){
foreach($this->HVKGdDolsi2eMB_mMuD[$zyGoJM7SL] as $k=>$v)$cKCGec1Tw.=($cKCGec1Tw?"; ":"")."$k=$v";

}
$W5IQ4GpZEAaCLw_Kty = $_ua?$_ua:($grab_parameters['xs_crawl_ident']?
$grab_parameters['xs_crawl_ident'].' (powered by www.xml-sitemaps.com)'
:
'Mozilla/5.0 (compatible; XML Sitemaps Generator; http://www.xml-sitemaps.com) Gecko XML-Sitemaps/1.0');
if($grab_parameters['xs_usecurl'] && function_exists('curl_init'))
{
$ch = curl_init();
if($vGg1894D_y7Zt5Q1M)$mHUAcr4HLXxz7= preg_replace('#(://)#','$1'.$QUhELgJiWhN7ABdVJx['host'].$QUhELgJiWhN7ABdVJx['path'],$mHUAcr4HLXxz7);
curl_setopt($ch, CURLOPT_URL, $mHUAcr4HLXxz7);
curl_setopt($ch, CURLOPT_USERAGENT, $W5IQ4GpZEAaCLw_Kty);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0); 
if($yNfPQ9bt_FHi['req'] == 'HEAD')
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'HEAD');
if($grab_parameters['xs_curlproxy'])
{

curl_setopt ($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
curl_setopt ($ch, CURLOPT_PROXY, $grab_parameters['xs_curlproxy']);
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
}
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
if($cKCGec1Tw && !$grab_parameters['xs_no_cookies'])
curl_setopt($ch, CURLOPT_COOKIE, $cKCGec1Tw);
$D8EOhUUDgGFotoZ8 = curl_exec($ch);
curl_close($ch);
}else
{
if(preg_match('#(.+):(.+)#',$grab_parameters['xs_curlproxy'],$pm))
{
$grab_parameters['xs_ipconnection']=$pm[1];
$grab_parameters['xs_portconnection']=$pm[2];
}
$tDJZkTUkMBALBf1 = ($QUhELgJiWhN7ABdVJx['scheme']=='https');
$eYgPj3ZHK0T12hAy = @fsockopen(
($tDJZkTUkMBALBf1?'ssl://':'').(($grab_parameters['xs_ipconnection']&&!$vGg1894D_y7Zt5Q1M)?$grab_parameters['xs_ipconnection']:$QUhELgJiWhN7ABdVJx['host']), 
(($grab_parameters['xs_portconnection']&&!$vGg1894D_y7Zt5Q1M)?$grab_parameters['xs_portconnection']:
(($QUhELgJiWhN7ABdVJx['port']&&!$vGg1894D_y7Zt5Q1M)?$QUhELgJiWhN7ABdVJx['port']:($tDJZkTUkMBALBf1?443:80)))
, $qWPODI2gyt3Aa, $haUwixsQMto, 5);
$DSZ7onyKhTY = 0;
$e_ksHZ4mvyyb643a5V = 50;
$C629L4qvNEC = 'Error opening socket to '.$QUhELgJiWhN7ABdVJx['host'];
if(isset($grab_parameters['xs_cache'])&&$grab_parameters['xs_cache'] && file_exists($wR70CK76khtA4O6VZ4I))$D8EOhUUDgGFotoZ8 = o5dbZtmDCSktjDlJt3($wR70CK76khtA4O6VZ4I);else
{
while($DSZ7onyKhTY < $e_ksHZ4mvyyb643a5V)
{
$DSZ7onyKhTY++;
if ($eYgPj3ZHK0T12hAy)
{
$C629L4qvNEC='';
$ZrR3YZKDY = $QUhELgJiWhN7ABdVJx['path']; 
if(isset($QUhELgJiWhN7ABdVJx['query'])&&$QUhELgJiWhN7ABdVJx['query'])$ZrR3YZKDY.='?'.$QUhELgJiWhN7ABdVJx['query'];
$ZrR3YZKDY = str_replace('&amp;','&',$ZrR3YZKDY);
$ZrR3YZKDY = str_replace(' ', '%20', $ZrR3YZKDY);
$DSZ7onyKhTY = 100;
$B3HB6KxX6W = $yNfPQ9bt_FHi['req'] ? $yNfPQ9bt_FHi['req'] : ($PBCaMycHB?"POST":"GET");
$LVq1jMe0YE1bYN = $B3HB6KxX6W . ' '.$ZrR3YZKDY . " HTTP/1.0\r\n";
$LVq1jMe0YE1bYN .= "Host: ".$QUhELgJiWhN7ABdVJx['host']."\r\n";
$LVq1jMe0YE1bYN .= "Referer: ".($_ref?$_ref:"http://".$QUhELgJiWhN7ABdVJx['host']."/")."\r\n";
$LVq1jMe0YE1bYN .= "User-Agent: ".$W5IQ4GpZEAaCLw_Kty."\r\n";
$LVq1jMe0YE1bYN .= "Accept-Language: en-us,en;q=0.5\r\n";
$LVq1jMe0YE1bYN .= "Accept: text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5\r\n";
if($PBCaMycHB)
{
$LVq1jMe0YE1bYN .= "Content-Type: text/xml\r\n";
$LVq1jMe0YE1bYN .= "Content-Length: " . strlen($PBCaMycHB) . "\r\n";
}else
{
if($cKCGec1Tw&&!$grab_parameters['xs_no_cookies'])$LVq1jMe0YE1bYN .= "Cookie: ".$cKCGec1Tw."\r\n";
$LVq1jMe0YE1bYN .= "Connection: Close\r\n";
}
$LVq1jMe0YE1bYN .= "\r\n";
if($PBCaMycHB)
$LVq1jMe0YE1bYN .= $PBCaMycHB;

$D8EOhUUDgGFotoZ8 = '';
@fwrite($eYgPj3ZHK0T12hAy, $LVq1jMe0YE1bYN);
while (!feof($eYgPj3ZHK0T12hAy)) {
$VCV0eEYMG = @fread($eYgPj3ZHK0T12hAy, $grab_parameters['xs_readblock'] ? $grab_parameters['xs_readblock'] : 1016);
if(preg_match('#^content-type:(.+)$#mi',$VCV0eEYMG,$m6VWoP93i1XpwIg6))
if(!strstr($m6VWoP93i1XpwIg6[1], 'text/')&&!strstr($m6VWoP93i1XpwIg6[1], '/xhtml'))break;
$D8EOhUUDgGFotoZ8 .= $VCV0eEYMG;
}
@fclose($eYgPj3ZHK0T12hAy);


}
}
}
if($grab_parameters['xs_cache'])
{
$pf = @fopen($wR70CK76khtA4O6VZ4I,'w');if($pf){fwrite($pf,$D8EOhUUDgGFotoZ8);fclose($pf);}
}
}
preg_match("#^(.*?)\r?\n\r?\n(.*)$#s",$D8EOhUUDgGFotoZ8,$hm);

$GIeI0ZRU_ = $hm[1]?$hm[1]:$D8EOhUUDgGFotoZ8;
$PgST6Al2IwhyJOjnP = preg_split("#\r?\n#", $GIeI0ZRU_);
list($davTYrpwM_4COa, $q64AQ_T07) = explode(' ',$PgST6Al2IwhyJOjnP[0], 2);
$HT7yKXImq = array();
$gLuwORIUpN=isset($this->HVKGdDolsi2eMB_mMuD[$zyGoJM7SL])?$this->HVKGdDolsi2eMB_mMuD[$zyGoJM7SL]:'';
$q0PNLQD52dm6SKSyg = $hm[2];
for($hi=0;$hi<count($PgST6Al2IwhyJOjnP);$hi++)
{
$lk = preg_split("#\s*:\s*#",$PgST6Al2IwhyJOjnP[$hi],2);
if(count($lk)>1){
$z45zMtoh5QPc = strtolower($lk[0]);
$HT7yKXImq[$z45zMtoh5QPc] = $lk[1];
if($z45zMtoh5QPc=='set-cookie'){
$ca = preg_replace('#;.*$#','',$lk[1]);
list($k,$v)=explode("=",$ca);
$gLuwORIUpN[trim($k)]=substr($v,0,200);
}
}
}
if(strstr($HT7yKXImq['transfer-encoding'],'chunked'))
$q0PNLQD52dm6SKSyg = $this->FYOswqt0cSs($q0PNLQD52dm6SKSyg);
if($HT7yKXImq['content-encoding'] == 'gzip' && function_exists('gzread'))
{  
$fl=@fopen($fn=dirname(__FILE__).'/../data/gztmp','w');@fwrite($fl,$q0PNLQD52dm6SKSyg);@fclose($fl);
$fl=@gzopen($fn,'r');$bde7EoOvSY07vuMwIoK=@gzread($fl,1024*1024);@fclose($fl);
unlink($fn);
if($bde7EoOvSY07vuMwIoK)
$q0PNLQD52dm6SKSyg = $bde7EoOvSY07vuMwIoK;
}
if(!$vGg1894D_y7Zt5Q1M)$this->HVKGdDolsi2eMB_mMuD[$zyGoJM7SL]=$gLuwORIUpN;
$rt = array(
'content'=>$q0PNLQD52dm6SKSyg,
'code'=>$q64AQ_T07,
'headers'=>$HT7yKXImq,


'errormsg'=>$C629L4qvNEC
);
unset($LVq1jMe0YE1bYN);
if($grab_parameters['xs_urlprefix'])
$mHUAcr4HLXxz7 = urldecode(str_replace($grab_parameters['xs_urlprefix'],'',$mHUAcr4HLXxz7));
$rt['last_url'] = $mHUAcr4HLXxz7;
if($q64AQ_T07 == 301 || $q64AQ_T07 == 302)
{
$cdYDcKVOaFz2IC=$HT7yKXImq['location'];
if(!strstr($cdYDcKVOaFz2IC,"://")){
if($cdYDcKVOaFz2IC[0]=="/")
$cdYDcKVOaFz2IC="http://".$QUhELgJiWhN7ABdVJx['host'].$cdYDcKVOaFz2IC;
else
$cdYDcKVOaFz2IC="http://".$QUhELgJiWhN7ABdVJx['host'].ELgkGbIsRXQp82oR6Qe($QUhELgJiWhN7ABdVJx['path']).$cdYDcKVOaFz2IC;
}
$cdYDcKVOaFz2IC = preg_replace('#([^/\:]/)/+#','\\1',$cdYDcKVOaFz2IC);
$MDb4AagIsVSS6R = parse_url($cdYDcKVOaFz2IC);

if($QUhELgJiWhN7ABdVJx['host']==$MDb4AagIsVSS6R['host'])
if($jCwBvqR0VAKlFZD)
$rt = $this->fetch($cdYDcKVOaFz2IC, $dp+1, $jCwBvqR0VAKlFZD, $vGg1894D_y7Zt5Q1M, $PBCaMycHB, $yNfPQ9bt_FHi);
else
$rt['last_url']=$cdYDcKVOaFz2IC;
}
return $rt;
}
function FYOswqt0cSs($s)
{
preg_match_all('#([^\r\n]*\r?\n)#s', $s, $M_05edZvR);
$naPDZDyR2SqyxQvp = '';
for($i=0;$i<count($M_05edZvR[1]);$i++)
{
$olIC3lVPm3RAAqb = hexdec(trim($M_05edZvR[1][$i]));
$sHQF4BoAenBu9haawqS = '';
if(!$i&&!$olIC3lVPm3RAAqb)return $s;
if(!$olIC3lVPm3RAAqb)break;
do{
$sHQF4BoAenBu9haawqS .= $M_05edZvR[1][++$i];
}while((strlen($sHQF4BoAenBu9haawqS)<$olIC3lVPm3RAAqb||!trim($M_05edZvR[1][$i+1])) && ($i<count($M_05edZvR[1])));
$naPDZDyR2SqyxQvp .= trim($sHQF4BoAenBu9haawqS);
}
return $naPDZDyR2SqyxQvp;
}
}
$NR3tQ8cMptFBaNs2 = new HTTPFetch();
?>