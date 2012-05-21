<?php
 
if(!defined('g9mWWYIteSa7dD7'))
{
define('g9mWWYIteSa7dD7', 1);
class dq6eRn7USprxqSGa9Ye {
var $tplType = 'file';
var $tplContent = '';
var $tplTags = array('tif','tvar','tloop','tinc','telse');
var $tagsList = array();
function dq6eRn7USprxqSGa9Ye($bT1vStOWyX=''){
$this->contentTypes=array();
$this->varScope=array();
$this->tplPath = (dirname(__FILE__).'/../'.$bT1vStOWyX);
$this->ts = implode('|', $this->tplTags);
}
function YF0XpEM2w4($XSgHgDDEhTbwopK_PT) {
$this->tplName=$XSgHgDDEhTbwopK_PT;
}
function rdqhncsHMgX4a($GyxaqkNpn,$uTttAJYJzqs) {
$this->varScope[$GyxaqkNpn]=$uTttAJYJzqs;
}
function Db1f6SYi_uP($ApWk9cNV4bVZkvPX) {
if($ApWk9cNV4bVZkvPX)
foreach($ApWk9cNV4bVZkvPX as $k=>$v)
$this->varScope[$k]=$v;
}
function UFH0cYalshj8ilZw($spK9ovsA7pQ,&$tl) {
while(preg_match('#^(.*?)<(/?(?:'.$this->ts.'))\s*(.*?)>#is', $spK9ovsA7pQ, $tm)){
$spK9ovsA7pQ = substr($spK9ovsA7pQ,strlen($tm[0]));
$ta = array(
'pre'=>$tm[1],
'tag'=>strtolower($tm[2]),
'par'=>$tm[3],
);
switch($ta['tag']){
case 'tif':
case 'tloop':
$spK9ovsA7pQ = $this->UFH0cYalshj8ilZw($spK9ovsA7pQ,$ta['sub']);
break;
case '/tif':
case '/tloop':

$tl[] = $ta;
return $spK9ovsA7pQ;
break;
}
$tl[] = $ta;
}
$tl[count($tl)-1]['post'] = $spK9ovsA7pQ;
return $spK9ovsA7pQ;
}
function parse() {
$fge8exEbRfdVJOzP8V_ = implode("",file($this->tplPath.$this->tplName));
$LVq1jMe0YE1bYN = $this->qNh0L3Iqq4xOGQ($fge8exEbRfdVJOzP8V_);
$LVq1jMe0YE1bYN = preg_replace("#\s*[\r\n]\s+#s","\n",$LVq1jMe0YE1bYN);
return $LVq1jMe0YE1bYN;
}
function qNh0L3Iqq4xOGQ($q0PNLQD52dm6SKSyg,$O4zX7h7zYXsnn0=0) {
if(!$O4zX7h7zYXsnn0)$O4zX7h7zYXsnn0=$this->varScope;
$tagsList = array();
$this->UFH0cYalshj8ilZw($q0PNLQD52dm6SKSyg,$tagsList);
$LVq1jMe0YE1bYN = $this->M80h6j1sEIWMK_($tagsList,$O4zX7h7zYXsnn0);
return $LVq1jMe0YE1bYN;
}
function FTZnv5MP3HN($q0PNLQD52dm6SKSyg,$C79HmoYonnik) {
$this->varScope=null;
$this->Db1f6SYi_uP($C79HmoYonnik);
return $this->qNh0L3Iqq4xOGQ($q0PNLQD52dm6SKSyg);
}
function M80h6j1sEIWMK_($tl,$O4zX7h7zYXsnn0=0,$dp=0,$NFSoLbL5O5=true) {
if(!$O4zX7h7zYXsnn0)$O4zX7h7zYXsnn0=$this->varScope;
$Z59xLPPor0bYkq9kN2C=$NFSoLbL5O5;
$rt = '';
if(is_array($tl))
foreach($tl as $i=>$ta){
$pr=$ta['par'];
if($Z59xLPPor0bYkq9kN2C){
$rt .= $ta['pre'];
switch($ta['tag']){
case 'tloop':
$xEK1Ksnyt9EG = $O4zX7h7zYXsnn0[$pr];
$v1=$O4zX7h7zYXsnn0['__index__'];
$v2=$O4zX7h7zYXsnn0['__value__'];
for($i=0;$i<count($xEK1Ksnyt9EG);$i++){
$O4zX7h7zYXsnn0['__index__']=$i+1;
$O4zX7h7zYXsnn0['__value__']=$xEK1Ksnyt9EG[$i];
if($ta['sub'])
$rt .= $this->M80h6j1sEIWMK_(
$ta['sub'],
array_merge($O4zX7h7zYXsnn0,is_array($xEK1Ksnyt9EG[$i])?$xEK1Ksnyt9EG[$i]:array()),
$dp+1);
}
$O4zX7h7zYXsnn0['__index__']=$v1;
$O4zX7h7zYXsnn0['__value__']=$v2;
$rt .= $ta['post'];
break;
case 'tif':
$WVgp5Vznt=$D2MlktQVRrS=0;
$lT0Vs3VxjBxAH3=$pr;
if(strstr($pr,'=')){
list($lT0Vs3VxjBxAH3,$YaDivn1VBzy6yJ)=explode('=',$pr);
$D2MlktQVRrS=1;
}
if(strstr($pr,'%')){
list($lT0Vs3VxjBxAH3,$YaDivn1VBzy6yJ)=explode('%',$pr);
$WVgp5Vznt=1;
}
if(strstr($YaDivn1VBzy6yJ,'$'))$YaDivn1VBzy6yJ=$GLOBALS[str_replace('$','',$YaDivn1VBzy6yJ)];
if($O4zX7h7zYXsnn0[$YaDivn1VBzy6yJ])$YaDivn1VBzy6yJ=$O4zX7h7zYXsnn0[$YaDivn1VBzy6yJ];
$xEK1Ksnyt9EG = $O4zX7h7zYXsnn0[$lT0Vs3VxjBxAH3];
if($ta['sub'])
$rt .= $this->M80h6j1sEIWMK_(
$ta['sub'],
$O4zX7h7zYXsnn0,
$dp+1,
($WVgp5Vznt?(($xEK1Ksnyt9EG%$YaDivn1VBzy6yJ)==0):($D2MlktQVRrS?($xEK1Ksnyt9EG==$YaDivn1VBzy6yJ):$xEK1Ksnyt9EG))
);
$rt .= $ta['post'];
break;
case 'tvar':
$t = $O4zX7h7zYXsnn0[$pr];
if(substr($pr,0,3)=='ue_')$t = urlencode($O4zX7h7zYXsnn0[substr($pr,3)]);
if($pr[0]=='$')$t=$GLOBALS[substr($pr,1)];
$rt .= $t;
$rt .= $ta['post'];
break;
case 'tinc':
$q0PNLQD52dm6SKSyg = implode("",file($this->tplPath.$pr));

$q0PNLQD52dm6SKSyg = $this->qNh0L3Iqq4xOGQ($q0PNLQD52dm6SKSyg,$O4zX7h7zYXsnn0);
$rt .= $q0PNLQD52dm6SKSyg;
$rt .= $ta['post'];
break;
default:
$rt .= $ta['post'];
break;
}
}
if($ta['tag']=='telse'){
$Z59xLPPor0bYkq9kN2C=!$Z59xLPPor0bYkq9kN2C;
}
}          
return $rt;
}
function WKLxFNU9Afmx3X() {
$yFdoAFjhSYO4=$this->parse();
echo $yFdoAFjhSYO4;
}
}
}