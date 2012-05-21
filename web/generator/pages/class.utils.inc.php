<?php
function u9Cr97r2tWLC1p3($ZwgAtu5BO_NYpaRWr)
{
return md5($ZwgAtu5BO_NYpaRWr);
}
function GMkyu4v1v($oJ5unwFQhNolkKRYs, $SjVgf2eZWKr)
{
$ZDRxZwYGC = CycjTbE1bsdEES4EbPq . substr($oJ5unwFQhNolkKRYs,0,2) . '/';
if(!file_exists($ZDRxZwYGC))
mkdir($ZDRxZwYGC, 0755);
$pf = fopen($ZDRxZwYGC . $oJ5unwFQhNolkKRYs.'.txt','w');
fwrite($pf, serialize($SjVgf2eZWKr));
fclose($pf);
}
function l1acf4pof0Or6uMILSm($oJ5unwFQhNolkKRYs)
{
$fl = CycjTbE1bsdEES4EbPq . substr($oJ5unwFQhNolkKRYs,0,2) . '/' . $oJ5unwFQhNolkKRYs . '.txt';
if(!file_exists($fl))
return array();
$q0PNLQD52dm6SKSyg = implode('', file($fl));
return unserialize($q0PNLQD52dm6SKSyg);
}
function q2PfaTx_3ig($Xrc607Yrfn)
{
global $grab_parameters;
if($grab_parameters['xs_dumptype'] == 'serialize')
return serialize($Xrc607Yrfn);
else
return var_export($Xrc607Yrfn,1);
}
function K5kCC5JoHjozL($Xrc607Yrfn)
{
global $grab_parameters;
if($grab_parameters['xs_dumptype'] == 'serialize')
$owOVrTs__sCvC = unserialize($Xrc607Yrfn);
else
eval ($s='$owOVrTs__sCvC = '.$Xrc607Yrfn.';');
return $owOVrTs__sCvC;
}
function HlywPDappbdYVU($i,$PtUafGiAPeMBNuKQpDm,$ijCWcCzUwXPG=false)
{
if($ijCWcCzUwXPG && $i<2) return $PtUafGiAPeMBNuKQpDm;
return $i ? preg_replace('#(.*)\.#','$01'.$i.'.',$PtUafGiAPeMBNuKQpDm) : $PtUafGiAPeMBNuKQpDm;
}
function yvOIe0tV6y4KcO0aLl($ZwgAtu5BO_NYpaRWr, $w21UPtIuo5RB0Crs, $r9vJFlZw_t=T_IVB6tYAThxWS, $tBvUUp_KNPkYQ04FY1 = false)
{
if($tBvUUp_KNPkYQ04FY1 && function_exists('gzencode')){
$qz46hf9qqkMLYqO = gzencode($w21UPtIuo5RB0Crs, 1);
unset($w21UPtIuo5RB0Crs);
$w21UPtIuo5RB0Crs = $qz46hf9qqkMLYqO;
$ZwgAtu5BO_NYpaRWr .= '.gz';
}
$pf = fopen($r9vJFlZw_t.$ZwgAtu5BO_NYpaRWr,"w");
fwrite($pf, $w21UPtIuo5RB0Crs);
fclose($pf);
@chmod($r9vJFlZw_t.$ZwgAtu5BO_NYpaRWr, 0666);
unset($w21UPtIuo5RB0Crs);
return $ZwgAtu5BO_NYpaRWr;
}
function o5dbZtmDCSktjDlJt3($ZwgAtu5BO_NYpaRWr)
{
return implode('',file($ZwgAtu5BO_NYpaRWr));
}
function V15cq9dPNt8iS8()
{
$aPeIhzjYj6iZvV = array();
$pd = opendir(T_IVB6tYAThxWS);
while($fn=readdir($pd))
if(preg_match('#^\d+.*?\.log$#',$fn))
$aPeIhzjYj6iZvV[] = $fn;
closedir($pd);
sort($aPeIhzjYj6iZvV);
return $aPeIhzjYj6iZvV;
}
function Yqz1QyXnf8Zlfu9jU($tm) {
$tm = intval($tm);
$h = intval($tm/60/60);
$tm -= $h*60*60;
$m = intval($tm/60);
$tm -= $m*60;
$s = $tm;
if($s<10)$s="0$s";
if($m<10)$m="0$m";
return "$h:$m:$s";
}
function ELgkGbIsRXQp82oR6Qe($dr) {
$dr = preg_replace('#\?.*#', '', $dr);
if($dr[strlen($dr)-1]!='/' && $dr)
{
$dr=str_replace('\\','/',dirname($dr));
if($dr[strlen($dr)-1]!='/')$dr.='/';
}
return preg_replace('#([^/\:]/)/+#','\\1',$dr);
}
function Qw4OhMRiQXE9Pvp0y22($r9vJFlZw_t, $ndeCxXhTNIt)
{
$pd = opendir($r9vJFlZw_t);
if($pd)
while($fn = readdir($pd))
if(is_file($r9vJFlZw_t.$fn) && preg_match('#'.$ndeCxXhTNIt.'$#',$fn))
{
@unlink($r9vJFlZw_t.$fn);
}else
if($fn[0]!='.'&&is_dir($r9vJFlZw_t.$fn))
{
Qw4OhMRiQXE9Pvp0y22($r9vJFlZw_t.$fn.'/', $ndeCxXhTNIt);
@rmdir($r9vJFlZw_t.$fn);
}
closedir($pd);
}
function lIRwDqHQC2tIuP($D6IQA6CnCMx9RWf, $hyyNGONNnZBD1i)
{
$ws = "<xmlsitemaps_settings>";
foreach($hyyNGONNnZBD1i as $k=>$v)
if(strstr($k,'xs_'))
$ws .= "\n\t<option name=\"$k\">$v</option>";
$ws .= "\n</xmlsitemaps_settings>";
$pf = fopen($D6IQA6CnCMx9RWf,'w');
fwrite($pf, $ws);
fclose($pf);
}
function Xfcs5RdKZjSaEqvTYT($D6IQA6CnCMx9RWf, &$hyyNGONNnZBD1i, $kQtqLrZQlLrQRZnBH = false)
{
$fl = @implode('', file($D6IQA6CnCMx9RWf));
preg_match_all('#<option name="(.*?)">(.*?)</option>#is', $fl, $c6ZUq0mITo, PREG_SET_ORDER);
foreach($c6ZUq0mITo as $m)
if(!$kQtqLrZQlLrQRZnBH || $m[2])
{
$hyyNGONNnZBD1i[$m[1]] = $m[2];
}
}
?>