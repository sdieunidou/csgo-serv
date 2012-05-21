<?php
echo 'Creating HTML sitemap...<div id="percprog2"></div>';flush();
$KkIiDw6iHW1n4Sy = $grab_parameters['xs_initurl'];
if(substr_count($KkIiDw6iHW1n4Sy,'/')>2)
$KkIiDw6iHW1n4Sy = substr($KkIiDw6iHW1n4Sy, 0, strrpos($KkIiDw6iHW1n4Sy,'/'));
$a72fjXmL4zzgMw= '';
$eodgEPwkY = array();
$q1Dhmf7aSwQAzPRIyD = 0;
$JVMEzz7cMLbr= ceil(count($urls_completed) / $grab_parameters['xs_htmlpart']);
$eivnFROHnEo0qZ=$DpcfJunW664lc=$XjWSHkCxWdmWWs=array();
for($i=0;$i<count($urls_completed);$i++){
if($grab_parameters['xs_memsave'])
{
$cu = l1acf4pof0Or6uMILSm($urls_completed[$i]);
}else
$cu = &$urls_completed[$i];
Ln7MhujXum6lIo2x($cu);
}
function Ln7MhujXum6lIo2x($ur){
global $eivnFROHnEo0qZ,$DpcfJunW664lc,$K8zTIUVnwPDUDC,$KkIiDw6iHW1n4Sy,$grab_parameters;
$dEiGIYwo7Srq3X = str_replace($KkIiDw6iHW1n4Sy,'', $ur['link']);
for($i=0;$i<count($K8zTIUVnwPDUDC);$i++)
if(preg_match('#'.$K8zTIUVnwPDUDC[$i].'#',$dEiGIYwo7Srq3X)){
$DpcfJunW664lc['elem'][$K8zTIUVnwPDUDC[$i]]['cnt']++;
$DpcfJunW664lc['tcnt']++;
break;
}
$I4xiiY8U2FMQjtAUzNB = &$eivnFROHnEo0qZ;
$psf7nhFBQzfQO7 = $dEiGIYwo7Srq3X;
$lv = 0;
if($grab_parameters['xs_htmlstruct']==2)
{
$ns = 'Sitemap';
$I4xiiY8U2FMQjtAUzNB = &$I4xiiY8U2FMQjtAUzNB['elem'][$ns];
$I4xiiY8U2FMQjtAUzNB['tcnt']++;
}else
if($grab_parameters['xs_htmlstruct']==1)
{
$ns = substr($dEiGIYwo7Srq3X,0,strrpos($dEiGIYwo7Srq3X,'/'));
$I4xiiY8U2FMQjtAUzNB = &$I4xiiY8U2FMQjtAUzNB['elem'][$ns];
$I4xiiY8U2FMQjtAUzNB['tcnt']++;
}
else
while(($ps=strpos($dEiGIYwo7Srq3X,'/'))!==false){
$ns = substr($dEiGIYwo7Srq3X,0,$ps+1);
$I4xiiY8U2FMQjtAUzNB = &$I4xiiY8U2FMQjtAUzNB['elem'][$ns];
$I4xiiY8U2FMQjtAUzNB['tcnt']++;
$dEiGIYwo7Srq3X = substr($dEiGIYwo7Srq3X,$ps+1);
}
$I4xiiY8U2FMQjtAUzNB['cnt']++;
$I4xiiY8U2FMQjtAUzNB['pages'][] = $ur;
}
function E45nP_d0Gh($sk,$c8hXHDB_uRoIpsh,$ICfKWr5QeaWZ6O,$fQ0AoPlprI)
{               
$fQ0AoPlprI = "<table>\n".$fQ0AoPlprI."\n</table>";
return "
<tr valign=\"top\">".
str_repeat("\n<td class=\"lbullet\">&nbsp;&nbsp;&nbsp;&nbsp;</td>",$ICfKWr5QeaWZ6O)."
<td class=\"lpart\" colspan=\"".(100-$ICfKWr5QeaWZ6O)."\"><div class=\"lhead\">$sk
<span class=\"lcount\">".$c8hXHDB_uRoIpsh." pages</span></div>
$fQ0AoPlprI
</td>
</tr>
";
}
function UVtSAwQYOsEzzCeKfY($a, $b)
{
global $grab_parameters, $L3KcxI6fDP;
$at = $a['t']?$a['t']:$a['link'];
$bt = $b['t']?$b['t']:$b['link'];
if($grab_parameters['xs_htmlsort'] == 3)
{
if(!$L3KcxI6fDP)$L3KcxI6fDP=rand(1E10,1E12);
$at = md5($at.$L3KcxI6fDP);
$bt = md5($bt.$L3KcxI6fDP);
}
if ($at == $bt) {
return 0;
}
$rs = ($at < $bt) ? -1 : 1;
if($grab_parameters['xs_htmlsort'] == 2)$rs = -$rs;
return $rs;
}
function CUx3ZI0WzO($sl,$ICfKWr5QeaWZ6O=0,&$lJ4UjiHGEoOL92XF3oE){
global $V8LkdUr76kWKRNwEM8b, $grab_parameters, $a72fjXmL4zzgMw, $eodgEPwkY, $q1Dhmf7aSwQAzPRIyD, $urls_completed;
$ugr2aG5lxR = '';

$ls = $ICfKWr5QeaWZ6O*2;
foreach($sl as $sk=>$sn){
$fQ0AoPlprI = "";
$OqtGTVqoDwX=array();
if($grab_parameters['xs_htmlsort'])
{
usort($sn['pages'], 'UVtSAwQYOsEzzCeKfY');
}
if($sn['pages'])
foreach($sn['pages'] as $pg)
{
$t = $pg['t']?$pg['t']:basename($pg['link']);
$OqtGTVqoDwX[]=array(
'link'=>$pg['link'],
'title'=>$t,
'desc'=>$pg['d'],
'title_clean'=>str_replace('&amp;amp;', '&amp;',htmlspecialchars($t)),
'file'=>basename($pg['link'])
);
$fQ0AoPlprI .= "\n<tr><td class=\"lpage\"><a href=\"".$pg['link']."\" title=\"".str_replace('&amp;amp;', '&amp;',htmlspecialchars($t))."\">".$t."</a></td></tr>";
$lJ4UjiHGEoOL92XF3oE++;
KDdCtJPGUBu9Wq(array(
'cmd'=> 'info',
'id' => 'percprog2',
'text'=> number_format($lJ4UjiHGEoOL92XF3oE*100/count($urls_completed),0).'%'
));
if(($lJ4UjiHGEoOL92XF3oE%$grab_parameters['xs_htmlpart'])==0)
{
$a72fjXmL4zzgMw.=E45nP_d0Gh($sk,$sn['cnt'],$ICfKWr5QeaWZ6O,$fQ0AoPlprI);
$eodgEPwkY[]=array(
'folder'=>str_replace('/',' ',$sk),
'cnt'=>$sn['cnt'],
'cntmulti'=>$sn['cnt']>1,
'level'=>$ICfKWr5QeaWZ6O,
'alevel'=>$ICfKWr5QeaWZ6O?range(0,$ICfKWr5QeaWZ6O):array(),
'level100'=>100-$ICfKWr5QeaWZ6O,
'pages'=>$OqtGTVqoDwX);
$fQ0AoPlprI='';    
$OqtGTVqoDwX=array();
uIZDnQOguALfQ($a72fjXmL4zzgMw, $eodgEPwkY);
$q1Dhmf7aSwQAzPRIyD++;
$a72fjXmL4zzgMw='';$eodgEPwkY=array();
}
}
if($fQ0AoPlprI)
{
$a72fjXmL4zzgMw.=E45nP_d0Gh($sk,$sn['cnt'],$ICfKWr5QeaWZ6O,$fQ0AoPlprI);
$eodgEPwkY[]=array(
'folder'=>str_replace('/',' ',$sk),
'cnt'=>$sn['cnt'],
'cntmulti'=>$sn['cnt']>1,
'level'=>$ICfKWr5QeaWZ6O,
'alevel'=>$ICfKWr5QeaWZ6O?range(0,$ICfKWr5QeaWZ6O):array(),
'level100'=>100-$ICfKWr5QeaWZ6O,
'pages'=>$OqtGTVqoDwX);
}
if($sn['elem'])
CUx3ZI0WzO($sn['elem'],$ICfKWr5QeaWZ6O+1,$lJ4UjiHGEoOL92XF3oE);
}
if($ICfKWr5QeaWZ6O == 0 && $a72fjXmL4zzgMw)
uIZDnQOguALfQ($a72fjXmL4zzgMw, $eodgEPwkY);
}
$lJ4UjiHGEoOL92XF3oE=0;
CUx3ZI0WzO($eivnFROHnEo0qZ['elem'],0,$lJ4UjiHGEoOL92XF3oE);
include ZR1vtYkW3IIT6ji.'class.templates.inc.php';
KDdCtJPGUBu9Wq(array('cmd'=> 'info','id' => 'percprog2',''));
function uIZDnQOguALfQ($ht, $hv)
{
global $grab_parameters, $KkIiDw6iHW1n4Sy, $urls_completed, $q1Dhmf7aSwQAzPRIyD, $JVMEzz7cMLbr;
$LJci6KwBdfosP9p = new dq6eRn7USprxqSGa9Ye("pages/mods/");
$LJci6KwBdfosP9p->YF0XpEM2w4('sitemap_tpl.html');
$PtUafGiAPeMBNuKQpDm = $grab_parameters['xs_htmlname'];
$CWn2PfUbyyKhdNQWN = basename($grab_parameters['xs_htmlname']);
$n1wH_ODWIOBSpdzlT = '';
$RdLUQ0sfh1B3DH=array();
if($JVMEzz7cMLbr>1)
{
for($i1=0;$i1<$JVMEzz7cMLbr;$i1++)
{
$mCLWsUvskyIkaI8Ye = HlywPDappbdYVU($i1+1,$CWn2PfUbyyKhdNQWN,true);
$n1wH_ODWIOBSpdzlT .= ($i1==$q1Dhmf7aSwQAzPRIyD)?' ['.($i1+1).']':
' <a href="'.$mCLWsUvskyIkaI8Ye.'">'.($i1+1).'</a>';
$RdLUQ0sfh1B3DH[]=array('current'=>($i1==$q1Dhmf7aSwQAzPRIyD),'link'=>$mCLWsUvskyIkaI8Ye,'num'=>$i1+1);
}
$n1wH_ODWIOBSpdzlT = '<span class="pager">'.$n1wH_ODWIOBSpdzlT.'</span>';
}
$wlQYqEQ2Zw_3iFEC6q = "<table cellpadding=\"0\" border=\"0\">\n".$ht."\n</table>\n";
$LJci6KwBdfosP9p->rdqhncsHMgX4a('slots',$hv);
$LJci6KwBdfosP9p->rdqhncsHMgX4a('LASTUPDATE',date($grab_parameters['xs_dateformat']?$grab_parameters['xs_dateformat']:'Y, F j'));
$LJci6KwBdfosP9p->rdqhncsHMgX4a('TOPURL',$KkIiDw6iHW1n4Sy);
$LJci6KwBdfosP9p->rdqhncsHMgX4a('PAGE',$JVMEzz7cMLbr?' Page '.($q1Dhmf7aSwQAzPRIyD+1):'');
$LJci6KwBdfosP9p->rdqhncsHMgX4a('PAGES',$n1wH_ODWIOBSpdzlT);
$LJci6KwBdfosP9p->rdqhncsHMgX4a('APAGER',$RdLUQ0sfh1B3DH);
$LJci6KwBdfosP9p->rdqhncsHMgX4a('TOTALURLS',count($urls_completed));
$XSgHgDDEhTbwopK_PT = $LJci6KwBdfosP9p->parse();
$XSgHgDDEhTbwopK_PT = preg_replace(
array('#%SITEMAP%#', '#%LASTUPDATE%#', '#%TOPURL%#', '#%PAGE%#', '#%PAGER%#', '#%TOTALURLS%#'),
array($wlQYqEQ2Zw_3iFEC6q, date('Y, F j'), $KkIiDw6iHW1n4Sy, $JVMEzz7cMLbr?' Page '.($q1Dhmf7aSwQAzPRIyD+1):'', $n1wH_ODWIOBSpdzlT, count($urls_completed)),
$XSgHgDDEhTbwopK_PT);
$mCLWsUvskyIkaI8Ye = $JVMEzz7cMLbr>1 ? HlywPDappbdYVU($q1Dhmf7aSwQAzPRIyD+1, $PtUafGiAPeMBNuKQpDm, true) : $PtUafGiAPeMBNuKQpDm;
$pf = fopen($mCLWsUvskyIkaI8Ye, 'w');
fwrite($pf, $XSgHgDDEhTbwopK_PT);
fclose($pf);

}
?>