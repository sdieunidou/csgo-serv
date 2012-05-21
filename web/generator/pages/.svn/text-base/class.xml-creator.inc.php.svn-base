<?php
class XMLCreator
{
function Tsr1dxbRSl36XZQSmy2($hyyNGONNnZBD1i, $urls_completed, $qcHvzZE_cTnCJcmS)
{
include ZR1vtYkW3IIT6ji.'class.templates.inc.php';
$this->LJci6KwBdfosP9p = new dq6eRn7USprxqSGa9Ye("pages/");
$PtUafGiAPeMBNuKQpDm = basename($hyyNGONNnZBD1i['xs_smname']);
$this->uurl_p = dirname($hyyNGONNnZBD1i['xs_smurl']).'/';
$this->furl_p = dirname($hyyNGONNnZBD1i['xs_smname']).'/';
if($hyyNGONNnZBD1i['xs_chlog'])
$pZraQah5aJyN = $this->DUZrQcBoQ($PtUafGiAPeMBNuKQpDm);
$EbecPh_o2 = $FkLeMvYAd = array();
$this->iXAnAfz9BKumhGLM = $hyyNGONNnZBD1i['xs_compress'] ?
array('fopen' => 'gzopen', 'fwrite' => 'gzwrite', 'fclose' => 'gzclose' ) :
array('fopen' => 'fopen', 'fwrite' => 'fwrite', 'fclose' => 'fclose' )
;
$this->ZKHrdYpZx7xJpCetjV = $hyyNGONNnZBD1i['xs_compress'] ? '.gz' : '';
$oaLtuQx7VUYT = $this->uW2s6L508AR($hyyNGONNnZBD1i, $urls_completed, $EbecPh_o2, $hyyNGONNnZBD1i['xs_chlog']);
if(count($oaLtuQx7VUYT)>1)
{
$xf = $this->T0gmFEXXIurPo($oaLtuQx7VUYT);
array_unshift($oaLtuQx7VUYT, 
$this->uurl_p.yvOIe0tV6y4KcO0aLl($PtUafGiAPeMBNuKQpDm,$xf,$this->furl_p,$hyyNGONNnZBD1i['xs_compress'])
);
}
if($hyyNGONNnZBD1i['xs_chlog'])
{
$raxr4qvbxIzTmP = array_diff($EbecPh_o2,$pZraQah5aJyN);
$YlUEXWvoXpwz6PaGySd = array_diff($pZraQah5aJyN,$EbecPh_o2);
$raxr4qvbxIzTmP  = array_slice($raxr4qvbxIzTmP,  0, 1000);
$YlUEXWvoXpwz6PaGySd = array_slice($YlUEXWvoXpwz6PaGySd, 0, 1000);
}
$D_ezG4BPksZTM79mUvk = array_merge($qcHvzZE_cTnCJcmS,
array(
'files'   => $oaLtuQx7VUYT,
'newurls' => $raxr4qvbxIzTmP,
'losturls'=> $YlUEXWvoXpwz6PaGySd,
'urls_ext'=> $qcHvzZE_cTnCJcmS['urls_ext'],
));
$lv3sjQRQ1U1 = date('Y-m-d H-i-s').'.log';
yvOIe0tV6y4KcO0aLl($lv3sjQRQ1U1,serialize($D_ezG4BPksZTM79mUvk));
$this->KrTMgWoxdnmEih0271($PtUafGiAPeMBNuKQpDm);
return $D_ezG4BPksZTM79mUvk;
}

function RvGpMMUREL77($pf)
{
global $mplBBQhAJvFrRkxCE;
if(!$pf)return;
$this->iXAnAfz9BKumhGLM['fwrite']($pf, $mplBBQhAJvFrRkxCE[3]);
$this->iXAnAfz9BKumhGLM['fclose']($pf);
}
function vablW4zqAwA($pf)
{
global $mplBBQhAJvFrRkxCE;
if(!$pf)return;
$this->iXAnAfz9BKumhGLM['fwrite']($pf, $mplBBQhAJvFrRkxCE[1]);
}
function T0gmFEXXIurPo($FkLeMvYAd)
{
global $VhnoUcNFi9Q;
$MaMJn8Q5cIWqbSsi3R = "";
$LyZYub5sAF58GG = implode('', file(Niq61B3f5T.'sitemap_index_tpl.xml'));
preg_match('#^(.*)%SITEMAPS_LIST_FROM%(.*)%SITEMAPS_LIST_TO%(.*)$#is', $LyZYub5sAF58GG, $nU2EnpjUuKWLpRXI);
$nU2EnpjUuKWLpRXI[1] = str_replace('%GEN_URL%', $VhnoUcNFi9Q.'/', $nU2EnpjUuKWLpRXI[1]);
for($i=0;$i<count($FkLeMvYAd);$i++)
$MaMJn8Q5cIWqbSsi3R.=
$this->LJci6KwBdfosP9p->FTZnv5MP3HN($nU2EnpjUuKWLpRXI[2], array(
'URL'=>$FkLeMvYAd[$i],
'LASTMOD'=>date('Y-m-d\TH:i:s+00:00')
));
return $nU2EnpjUuKWLpRXI[1] . $MaMJn8Q5cIWqbSsi3R . $nU2EnpjUuKWLpRXI[3];
}
function uW2s6L508AR($hyyNGONNnZBD1i, $urls_completed, &$EbecPh_o2, $HQZ0___sxrUQHbO4gb)
{
global $mplBBQhAJvFrRkxCE, $XJMFGqwQ_v3sQa0y, $p3RMgGPJdKj, $sm_proc_list, $VhnoUcNFi9Q;
$LyZYub5sAF58GG = implode('', file(Niq61B3f5T.'sitemap_xml_tpl.xml'));
preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $LyZYub5sAF58GG, $mplBBQhAJvFrRkxCE);

$mplBBQhAJvFrRkxCE[1] = str_replace('www.xml-sitemaps.com', 'www.xml-sitemaps.com ('. hFdFC9FutftfbQcPCF.')', $mplBBQhAJvFrRkxCE[1]);
$mplBBQhAJvFrRkxCE[1] = str_replace('%GEN_URL%', $VhnoUcNFi9Q.'/', $mplBBQhAJvFrRkxCE[1]);
$S0BtLzEJVxMK_RX = implode('', file(Niq61B3f5T.'sitemap_ror_tpl.xml'));
preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $S0BtLzEJVxMK_RX, $XJMFGqwQ_v3sQa0y);
$J0guAv8GXYn6AN38fxM = implode('', file(Niq61B3f5T.'sitemap_base_tpl.xml'));
preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $J0guAv8GXYn6AN38fxM, $p3RMgGPJdKj);
$ctime = date('Y-m-d H:i:s');
$OdZB8ypqkYH0RE87bq = 0;
$PtUafGiAPeMBNuKQpDm = basename($hyyNGONNnZBD1i['xs_smname']);
$this->YlnYTfdc4($PtUafGiAPeMBNuKQpDm);
$Azn3vphuaYE = get_html_translation_table(HTML_ENTITIES, ENT_QUOTES);
foreach ($Azn3vphuaYE as $hGDRw8r7gFTRrA4CimX => $Vz1MJUA8RCHpI)
$Azn3vphuaYE[$hGDRw8r7gFTRrA4CimX] = '&#'.ord($hGDRw8r7gFTRrA4CimX).';';
unset($Azn3vphuaYE['&']);
unset($Azn3vphuaYE);
$tt = array('<','>');
foreach ($tt as $hGDRw8r7gFTRrA4CimX )
$Azn3vphuaYE[$hGDRw8r7gFTRrA4CimX] = '&#'.ord($hGDRw8r7gFTRrA4CimX).';';
for($i=0;$i<31;$i++)
$Azn3vphuaYE[chr($i)] = '&#'.$i.';';
$Azn3vphuaYE[chr(0)] = $Azn3vphuaYE[chr(10)] = $Azn3vphuaYE[chr(13)] = '';
$Azn3vphuaYE[' '] = '%20';
$FkLeMvYAd=array();
$pf = 0;
if($hyyNGONNnZBD1i['xs_maketxt'])
$ycoquoAP1UP30SR = $this->iXAnAfz9BKumhGLM['fopen'](WyXkTyAK3kSMA.$this->ZKHrdYpZx7xJpCetjV, 'w');
if($hyyNGONNnZBD1i['xs_makeror'])
{
$lYg1fh6INMq = fopen(MMwXOhanJ6q, 'w');
$rc = str_replace('%INIT_URL%', $hyyNGONNnZBD1i['xs_initurl'], $XJMFGqwQ_v3sQa0y[1]);
if($lYg1fh6INMq)
fwrite($lYg1fh6INMq, $rc);
}
if(0&&$hyyNGONNnZBD1i['xs_makebase'])
{
$t8rgs9a7d2FUS7l = $this->iXAnAfz9BKumhGLM['fopen'](DFJUj5XaZVoZf.$this->ZKHrdYpZx7xJpCetjV, 'w');
$rc = str_replace('%INIT_URL%', $hyyNGONNnZBD1i['xs_initurl'], $p3RMgGPJdKj[1]);
if($t8rgs9a7d2FUS7l)
$this->iXAnAfz9BKumhGLM['fwrite']($t8rgs9a7d2FUS7l, $rc);
}
foreach($sm_proc_list as $bsdObbWFYcM20JyA)
$bsdObbWFYcM20JyA->vPMSF5pieFsrixtq8t($hyyNGONNnZBD1i, $this->iXAnAfz9BKumhGLM, $this->LJci6KwBdfosP9p);
$J1FmiSfIAe5Xjp0MUVb = $hyyNGONNnZBD1i['xs_sm_size']?$hyyNGONNnZBD1i['xs_sm_size']:50000;
for($i=0;$i<count($urls_completed);$i++)
{   
KDdCtJPGUBu9Wq(array(
'cmd'=> 'info',
'id' => 'percprog',
'text'=> number_format($i*100/count($urls_completed),0).'%'
));
if(($i%$J1FmiSfIAe5Xjp0MUVb) == 0)
{
$uv0LKrNpy = (count($urls_completed)>$J1FmiSfIAe5Xjp0MUVb?HlywPDappbdYVU(count($FkLeMvYAd)+1,$PtUafGiAPeMBNuKQpDm):$PtUafGiAPeMBNuKQpDm).$this->ZKHrdYpZx7xJpCetjV;
$FkLeMvYAd[] = $this->uurl_p.$uv0LKrNpy;
$this->RvGpMMUREL77($pf);
$pf = $this->iXAnAfz9BKumhGLM['fopen']($this->furl_p.$uv0LKrNpy,'w');
$this->vablW4zqAwA($pf);
}
if($hyyNGONNnZBD1i['xs_memsave'])
{
$cu = l1acf4pof0Or6uMILSm($urls_completed[$i]);
}else
$cu = &$urls_completed[$i];
$l = $cu['link'];



$l = str_replace("&amp;", "&", $l);
$l = str_replace("&", "&amp;", $l);
$t = str_replace("&", "&amp;", $cu['t']);
$d = $cu['d'] ? $cu['d'] : $cu['t'];
$d = str_replace("&", "&amp;", $d);

$l = strtr($l, $Azn3vphuaYE);
if(function_exists('utf8_encode'))
{

if(!$hyyNGONNnZBD1i['xs_utf8'])
{
$t = utf8_encode($t);
$d = utf8_encode($d);
}
$l = utf8_encode($l);
}
$cu['link']=$l;
if($HQZ0___sxrUQHbO4gb) $EbecPh_o2[]=$l;
$SMV3lc2lBBMCTs = '';
if($cu['clm'])
$SMV3lc2lBBMCTs = $cu['clm'];
else
switch($hyyNGONNnZBD1i['xs_lastmod']){
case 1:$SMV3lc2lBBMCTs = $cu['lm']?$cu['lm']:$ctime;break;
case 2:$SMV3lc2lBBMCTs = $ctime;break;
case 3:$SMV3lc2lBBMCTs = $hyyNGONNnZBD1i['xs_lastmodtime'];break;
}
if($cu['p'])
$p = $cu['p'];
else
{
$p = $hyyNGONNnZBD1i['xs_priority'];
if($hyyNGONNnZBD1i['xs_autopriority'])
$p = @number_format($p*pow($hyyNGONNnZBD1i['xs_descpriority']?$hyyNGONNnZBD1i['xs_descpriority']:0.8,$cu['o']),4);
}
if($SMV3lc2lBBMCTs){
$SMV3lc2lBBMCTs = strtotime($SMV3lc2lBBMCTs);
$SMV3lc2lBBMCTs = gmdate('Y-m-d\TH:i:s+00:00',$SMV3lc2lBBMCTs);
}
$f = $cu['f']?$cu['f']:$hyyNGONNnZBD1i['xs_freq'];
$Y6Sv9w6omZ = array(
'URL'=>$l,
'TITLE'=>$t,
'DESC'=>htmlspecialchars($d),
'PERIOD'=>$f,
'LASTMOD'=>$SMV3lc2lBBMCTs,
'ORDER'=>$cu['o'],
'PRIORITY'=>$p
);
if($cu['i'])
foreach($cu['i'] as $im)
$Y6Sv9w6omZ['imgs'][] = array('iurl'=>$im[0], 'caption'=>htmlspecialchars($im[1]));
if($pf)
$this->iXAnAfz9BKumhGLM['fwrite']($pf, $this->LJci6KwBdfosP9p->FTZnv5MP3HN($mplBBQhAJvFrRkxCE[2], $Y6Sv9w6omZ));
if($hyyNGONNnZBD1i['xs_makeror'] && $lYg1fh6INMq)
fwrite($lYg1fh6INMq, $this->LJci6KwBdfosP9p->FTZnv5MP3HN($XJMFGqwQ_v3sQa0y[2],$Y6Sv9w6omZ));
if(0 && $hyyNGONNnZBD1i['xs_makebase'] && $t8rgs9a7d2FUS7l)
$this->iXAnAfz9BKumhGLM['fwrite']($t8rgs9a7d2FUS7l, $this->LJci6KwBdfosP9p->FTZnv5MP3HN($p3RMgGPJdKj[2],$Y6Sv9w6omZ));
if($hyyNGONNnZBD1i['xs_maketxt'] && $ycoquoAP1UP30SR)
$this->iXAnAfz9BKumhGLM['fwrite']($ycoquoAP1UP30SR, $cu['link']."\n");
foreach($sm_proc_list as $bsdObbWFYcM20JyA)
$bsdObbWFYcM20JyA->ZdD16fdro7T29($Y6Sv9w6omZ);
}
$this->RvGpMMUREL77($pf);
if($hyyNGONNnZBD1i['xs_maketxt'])
{
$this->iXAnAfz9BKumhGLM['fclose']($ycoquoAP1UP30SR);
@chmod(WyXkTyAK3kSMA.$this->ZKHrdYpZx7xJpCetjV, 0666);
}
if($hyyNGONNnZBD1i['xs_makeror'])
{
if($lYg1fh6INMq)
fwrite($lYg1fh6INMq, $XJMFGqwQ_v3sQa0y[3]);
fclose($lYg1fh6INMq);
}
if(0 && $hyyNGONNnZBD1i['xs_makebase'] && $t8rgs9a7d2FUS7l)
{
if($t8rgs9a7d2FUS7l)
$this->iXAnAfz9BKumhGLM['fwrite']($t8rgs9a7d2FUS7l, $p3RMgGPJdKj[3]);
$this->iXAnAfz9BKumhGLM['fclose']($t8rgs9a7d2FUS7l);
}
foreach($sm_proc_list as $bsdObbWFYcM20JyA)
$bsdObbWFYcM20JyA->h2yh1SOcTUdL4();
KDdCtJPGUBu9Wq(array('cmd'=> 'info','id' => 'percprog',''));
return $FkLeMvYAd;
}
function YlnYTfdc4($PtUafGiAPeMBNuKQpDm)
{
for($i=0;file_exists($sf=T_IVB6tYAThxWS.HlywPDappbdYVU($i,$PtUafGiAPeMBNuKQpDm).$this->ZKHrdYpZx7xJpCetjV);$i++){
unlink($sf);
}
}
function KrTMgWoxdnmEih0271($PtUafGiAPeMBNuKQpDm)
{
for($i=0;file_exists($this->furl_p.($sf=HlywPDappbdYVU($i,$PtUafGiAPeMBNuKQpDm).$this->ZKHrdYpZx7xJpCetjV));$i++){
copy($this->furl_p.$sf,T_IVB6tYAThxWS.$sf);
@chmod(T_IVB6tYAThxWS.$sf, 0666);
}
}
function DUZrQcBoQ($PtUafGiAPeMBNuKQpDm)
{
$cn = '';
for($i=0;file_exists($sf=T_IVB6tYAThxWS.HlywPDappbdYVU($i,$PtUafGiAPeMBNuKQpDm).$this->ZKHrdYpZx7xJpCetjV);$i++)
{

$cn .= $this->ZKHrdYpZx7xJpCetjV?implode('',gzfile($sf)):o5dbZtmDCSktjDlJt3($sf);
if($i>200)break;
}
preg_match_all('#<loc>(.*?)</loc>#',$cn,$um);
return $um[1];
}
}
$m5czXgS9ltGPU6dr = new XMLCreator();
?>