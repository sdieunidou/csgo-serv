<?php
include ZR1vtYkW3IIT6ji.'page-top.inc.php';
?>
<div id="sidenote">
<?php
include ZR1vtYkW3IIT6ji.'page-sitemap-detail.inc.php';
?>
</div>
<div id="shifted">
<h2>Analyze Site Structure</h2>
<?php 
if($qcHvzZE_cTnCJcmS){
$uujzGkq3Glugxaz7 = str_replace('.log','.proc',$zmYRRBiNHXyzAGsBbH);
if(!file_exists(T_IVB6tYAThxWS.$uujzGkq3Glugxaz7)){
echo 'Analysis in progress...';flush();
include ZR1vtYkW3IIT6ji.'class.xml-creator.inc.php';
$PtUafGiAPeMBNuKQpDm = basename($grab_parameters['xs_smname']);
$m5czXgS9ltGPU6dr->ZKHrdYpZx7xJpCetjV = $grab_parameters['xs_compress'] ? '.gz' : '';
$urls_list = $m5czXgS9ltGPU6dr->DUZrQcBoQ($PtUafGiAPeMBNuKQpDm);
$KkIiDw6iHW1n4Sy = preg_replace('#/$#','',$qcHvzZE_cTnCJcmS['initdir']);
$eivnFROHnEo0qZ=$DpcfJunW664lc=$XjWSHkCxWdmWWs=array();
for($i=0;$i<count($urls_list);$i++){
$aQ4ElPDMjZqlA6eve = str_replace($KkIiDw6iHW1n4Sy,'',$urls_list[$i]);
fEowzoe6xJLhs_ZF4V7($aQ4ElPDMjZqlA6eve);

}
sort($XjWSHkCxWdmWWs);
$mv3YztXmDFiT = array($eivnFROHnEo0qZ,$DpcfJunW664lc,$XjWSHkCxWdmWWs);
yvOIe0tV6y4KcO0aLl($uujzGkq3Glugxaz7, serialize($mv3YztXmDFiT));
echo 'DONE<br>';
}else
list($eivnFROHnEo0qZ,$DpcfJunW664lc,$XjWSHkCxWdmWWs) = @unserialize(o5dbZtmDCSktjDlJt3(T_IVB6tYAThxWS.$uujzGkq3Glugxaz7));
?>
<div class="inptitle">Site folders structure</div>
<script>
function X5pGy9XVxZmKajMLt(eln)
{
el=document.getElementById('sp'+eln)
el.style.display=el.style.display?'':'none'
}
</script>
<pre>
<?php
$V8LkdUr76kWKRNwEM8b = 0;
e6rLElc7C4($eivnFROHnEo0qZ['elem'], 0, $KkIiDw6iHW1n4Sy);
?>
</pre>
<?php	}?>
</div>
<?php	
include ZR1vtYkW3IIT6ji.'page-bottom.inc.php';
function e6rLElc7C4($sl,$ICfKWr5QeaWZ6O=0,$glOeIGW0kAmtf3vDSop='',$oHXaaeWlrm8J5445=true){
global $V8LkdUr76kWKRNwEM8b;
echo '<span id="sp'.($V8LkdUr76kWKRNwEM8b++).'"'.($ICfKWr5QeaWZ6O>0?' style="display:none"':'').'>';
ksort($sl);
$ls = $ICfKWr5QeaWZ6O*2;
foreach($sl as $sk=>$sn){

echo str_repeat(' ',$ls).
($sn['elem']?'<a href="javascript:X5pGy9XVxZmKajMLt(\''.$V8LkdUr76kWKRNwEM8b.'\')">[x]</a>':'').
($oHXaaeWlrm8J5445?'<a href="'.$glOeIGW0kAmtf3vDSop.$sk.'">'.$sk.'</a>':$sk).
str_repeat(' ',max(0,30-$ls-($sn['elem']?3:0)-strlen($sk))).' - '.$sn['cnt'].($sn['tcnt']>$sn['cnt']?' ('.$sn['tcnt'].')':'')."\n";
if($sn['elem'])
e6rLElc7C4($sn['elem'],$ICfKWr5QeaWZ6O+1,$glOeIGW0kAmtf3vDSop.$sk,$oHXaaeWlrm8J5445);
}
echo '</span>';
}
function fEowzoe6xJLhs_ZF4V7($dEiGIYwo7Srq3X){
global $eivnFROHnEo0qZ,$DpcfJunW664lc,$K8zTIUVnwPDUDC;
for($i=0;$i<count($K8zTIUVnwPDUDC);$i++)
if(preg_match('#'.$K8zTIUVnwPDUDC[$i].'#',$dEiGIYwo7Srq3X)){
$DpcfJunW664lc['elem'][$K8zTIUVnwPDUDC[$i]]['cnt']++;
$DpcfJunW664lc['tcnt']++;
break;
}
$I4xiiY8U2FMQjtAUzNB = &$eivnFROHnEo0qZ;
$lv = 0;
while(($ps=strpos($dEiGIYwo7Srq3X,'/'))!==false){
$ns=substr($dEiGIYwo7Srq3X,0,$ps+1);
$I4xiiY8U2FMQjtAUzNB = &$I4xiiY8U2FMQjtAUzNB['elem'][$ns];
$I4xiiY8U2FMQjtAUzNB['tcnt']++;
$dEiGIYwo7Srq3X=substr($dEiGIYwo7Srq3X,$ps+1);
}
$I4xiiY8U2FMQjtAUzNB['cnt']++;
}
?>