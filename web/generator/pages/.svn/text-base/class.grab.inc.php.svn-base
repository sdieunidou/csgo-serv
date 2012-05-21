<?php
class SiteCrawler
{
function sG53YQ0A72(&$a, $M_ipyiafuS8TomQIEGT, $OXChr3ZiOYw7fR8z9B, $JkWlL2a0m, $dSeuGOAE_8dFCli)
{
global $grab_parameters;
if($a[0]=='?')$a = preg_replace('#^([^\?]*?)([^/\?]*?)(\?.*)?$#','$2',$M_ipyiafuS8TomQIEGT).$a;
if(preg_match('#^https?(:|&\#58;)#is',$a));
else if($a&&$a[0]=='/')$a = $OXChr3ZiOYw7fR8z9B.$a;
else $a = $JkWlL2a0m.$a;
$a=str_replace('/./','/',$a);
if($_GET['ddbg2'])echo "($a)<br>\n";//exit;
if(strstr($a,'../')){
preg_match('#(.*?:.*?//.*?)(/.*)$#',$a,$aa);
do{
$ap = $aa[2];
$aa[2] = preg_replace('#/?[^/]*/\.\.#','',$ap,1);
}while($aa[2]!=$ap);
$a = $aa[1].$aa[2];
}
$a = preg_replace('#/\./#','/',$a);
$a = str_replace('&#38;','&',$a);
$a = str_replace('&amp;','&',$a);
$a = preg_replace('#\#.*$#','',$a);
$a = preg_replace('#([^/\:]/)/+#','\\1',$a);
$a = preg_replace('#[\r\n]+#s','',$a);
$EAZhN7sTw2y0 = (strtolower(substr($a,0,strlen($dSeuGOAE_8dFCli)) ) != strtolower($dSeuGOAE_8dFCli));
return $EAZhN7sTw2y0;
}
function fjOiR1rimG($hyyNGONNnZBD1i,&$urls_completed) {
global $grab_parameters,$NR3tQ8cMptFBaNs2;

error_reporting(E_ALL&~E_NOTICE);
set_time_limit($grab_parameters['xs_exec_time']);
if($hyyNGONNnZBD1i['bgexec'])
{
ignore_user_abort(true);
}
register_shutdown_function('ygddcsZcedjzZC');
if(function_exists('ini_set'))
{
@ini_set("zlib.output_compression", 0);
@ini_set("output_buffering", 0);
}
$D3AGbIACouD10 = explode(" ",microtime());
$MvE2_SORq = $D3AGbIACouD10[0]+$D3AGbIACouD10[1];
$GXcwrWDZ8PYz = $hyyNGONNnZBD1i['initurl'];
$TWEyaYFok4IXebL = $hyyNGONNnZBD1i['maxpg']>0 ? $hyyNGONNnZBD1i['maxpg'] : 1E10;
$vmCbGLUXBFFGXsy1p = $hyyNGONNnZBD1i['maxdepth'] ? $hyyNGONNnZBD1i['maxdepth'] : -1;
$EYyBXYy9WWbLGYL5iQ = $hyyNGONNnZBD1i['progress_callback'];
$lAFZdQzEUjH = preg_replace("#\s*[\r\n]+\s*#",'|', (strstr($s=trim($grab_parameters['xs_excl_urls']),'*')?$s:preg_quote($s,'#')));
$wV4tMRGfV4NR = preg_replace("#\s*[\r\n]+\s*#",'|', (strstr($s=trim($grab_parameters['xs_incl_urls']),'*')?$s:preg_quote($s,'#')));
$jDyVj7CkPgy = $rH_wj_Dzr = array();
$kprq2zgUtc0Do = preg_split('#[\r\n]+#', $grab_parameters['xs_ind_attr']);
$IIcbczWAX09NsrG = '#200'.($grab_parameters['xs_allow_httpcode']?'|'.$grab_parameters['xs_allow_httpcode']:'').'#';
if($grab_parameters['xs_memsave'])
{
if(!file_exists(CycjTbE1bsdEES4EbPq))
mkdir(CycjTbE1bsdEES4EbPq, 0777);
else
if($hyyNGONNnZBD1i['resume']=='')
Qw4OhMRiQXE9Pvp0y22(CycjTbE1bsdEES4EbPq, '.txt');
}
foreach($kprq2zgUtc0Do as $ia)
if($ia)
{
$is = explode(',', $ia);
if($is[0][0]=='$')
$Gc2nlIgGoyc5qc = substr($is[0], 1);
else
$Gc2nlIgGoyc5qc = str_replace('\\$','$',preg_quote($is[0],'#'));
$rH_wj_Dzr[] = $Gc2nlIgGoyc5qc;
$jDyVj7CkPgy[str_replace('$','',$is[0])]=array('lm'=>$is[1], 'f'=>$is[2], 'p'=>$is[3]);
}
if($rH_wj_Dzr)
$Ho3EyQEy5sso9sRWd = implode('|',$rH_wj_Dzr);
$w63YMiTeLeUqIPT = parse_url($GXcwrWDZ8PYz);
if(!$w63YMiTeLeUqIPT['path']){$GXcwrWDZ8PYz.='/';$w63YMiTeLeUqIPT = parse_url($GXcwrWDZ8PYz);}
$KSpBBj6usrOqMsPdHh = $NR3tQ8cMptFBaNs2->fetch($GXcwrWDZ8PYz,0,true);// the first request is to skip session id
$KSpBBj6usrOqMsPdHh = $NR3tQ8cMptFBaNs2->fetch($GXcwrWDZ8PYz,0,true);
$G2zCcihGLQl = !preg_match($IIcbczWAX09NsrG,$KSpBBj6usrOqMsPdHh['code']);

$G2zCcihGLQl |= (time()>bcUHiUvk1__NNu9qID);
if($G2zCcihGLQl)
return array(
'errmsg'=>'<b>There was an error while retrieving the URL specified:</b> '.$GXcwrWDZ8PYz.''.
($KSpBBj6usrOqMsPdHh['errormsg']?'<br><b>Error message:</b> '.$KSpBBj6usrOqMsPdHh['errormsg']:'').
'<br><b>HTTP headers follow:</b><br>'.implode('<br>',$KSpBBj6usrOqMsPdHh['headers']).
'<br><b>HTTP output:</b><br>'.$KSpBBj6usrOqMsPdHh['content']
,
);
$GXcwrWDZ8PYz = $KSpBBj6usrOqMsPdHh['last_url'];
$urls_completed = array();
$urls_ext = array();
$urls_404 = array();
$OXChr3ZiOYw7fR8z9B = $w63YMiTeLeUqIPT['scheme'].'://'.$w63YMiTeLeUqIPT['host'].((!$w63YMiTeLeUqIPT['port'] || ($w63YMiTeLeUqIPT['port']=='80'))?'':(':'.$w63YMiTeLeUqIPT['port']));
$pn = $tsize = 0;
$dSeuGOAE_8dFCli = preg_replace('#([^/\:]/)/+#','\\1',$OXChr3ZiOYw7fR8z9B.'/'.ELgkGbIsRXQp82oR6Qe($w63YMiTeLeUqIPT['path']));
$mVBhOIPtuHXMVt3_B = preg_replace('#^.+://[^/]+#', '', $dSeuGOAE_8dFCli);
$ZVU_UotF9_jJp = $NR3tQ8cMptFBaNs2->fetch($GXcwrWDZ8PYz,0,true,true);
$dc_8ToqZV = str_replace($dSeuGOAE_8dFCli,'',$GXcwrWDZ8PYz);
$urls_list_full = array($dc_8ToqZV);
if(!$dc_8ToqZV)$dc_8ToqZV='/';
$urls_list = array($dc_8ToqZV);
$urls_list2 = array();
$p0qjAJ_05R9 = array();
$links_level = 0;
$xNVJOXeK2sW = $ref_links = $ref_links2 = array();
$uGr80GH0VB6YB = 0;

$TWEyaYFok4IXebL = 1000000;
$xjrJ2Yzs6 = $TWEyaYFok4IXebL;
if(!$grab_parameters['xs_progupdate'])$grab_parameters['xs_progupdate'] = 20;
if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])
{
$AngxaIfOJ = $NR3tQ8cMptFBaNs2->fetch($OXChr3ZiOYw7fR8z9B.'/robots.txt');
if($OXChr3ZiOYw7fR8z9B.'/' != $dSeuGOAE_8dFCli)
{
$KDTEDseXOWMlsG = "\n".$NR3tQ8cMptFBaNs2->fetch($dSeuGOAE_8dFCli.'robots.txt');
$AngxaIfOJ['content']  .= "\n".$KDTEDseXOWMlsG['content'];
}
$ra=preg_split('#user-agent:\s*#im',$AngxaIfOJ['content']);
$XvU49oK_Vd=array();
for($i=1;$i<count($ra);$i++){
preg_match('#^(\S+)(.*)$#s',$ra[$i],$BkrUa2m_ZoFXT);
if($BkrUa2m_ZoFXT[1]=='*'||strstr($BkrUa2m_ZoFXT[1],'google')){
preg_match_all('#^disallow:[^\r\n\S](\S*)#im',$BkrUa2m_ZoFXT[2],$rm);
for($pi=0;$pi<count($rm[1]);$pi++)
if($rm[1][$pi])
$XvU49oK_Vd[] = 
str_replace('\\$','$',
str_replace('\\*','.*',
preg_quote($rm[1][$pi],'#')
));
}
}
for($i=0;$i<count($XvU49oK_Vd);$i+=500)
$fWF3L71eqllSq[]=implode('|', array_slice($XvU49oK_Vd, $i,500));
}else
$fWF3L71eqllSq = array();
$NgBWwllTme = $grab_parameters['xs_exc_skip']!='\\.()';
$paeh3sXfU = $grab_parameters['xs_inc_skip']!='\\.()';
$grab_parameters['xs_inc_skip'] .= '$';
$grab_parameters['xs_exc_skip'] .= '$';
if($grab_parameters['xs_debug'])
$_GET['ddbg']=1;
$tZg_hjVhRlGnXA = 0;
$url_ind = 0;
$cnu = 1;
$pf = fopen(T_IVB6tYAThxWS.fM0qQkSagz_,'w');fclose($pf);
if($hyyNGONNnZBD1i['resume']!=''){
$qavYsvb7U31aFIKJR = @K5kCC5JoHjozL(o5dbZtmDCSktjDlJt3(T_IVB6tYAThxWS.bZ3jbCz403O1HU));
echo 'Resuming the last session (last updated: '.date('Y-m-d H:i:s',$qavYsvb7U31aFIKJR['time']).')';
if($qavYsvb7U31aFIKJR)
extract($qavYsvb7U31aFIKJR);
$MvE2_SORq-=$ctime;
$tZg_hjVhRlGnXA = $ctime;
unset($qavYsvb7U31aFIKJR);
}
sleep(1); @unlink(T_IVB6tYAThxWS.fM0qQkSagz_);
if($urls_list)
do {
$M_ipyiafuS8TomQIEGT = $urls_list[$url_ind++];
unset($urls_list[$url_ind-1]);
if(($links_level>=$vmCbGLUXBFFGXsy1p)&&($vmCbGLUXBFFGXsy1p>0))
{
$urls_completed[] = array('link'=>preg_replace('#([^/\:]/)/+#','\\1',$dSeuGOAE_8dFCli.$M_ipyiafuS8TomQIEGT));
$pn++;$xjrJ2Yzs6--;if($url_ind%$grab_parameters['xs_progupdate']!=0)continue;
}
$LnCUNQ5wpr0KnV5A = u9Cr97r2tWLC1p3($M_ipyiafuS8TomQIEGT);



$KSpBBj6usrOqMsPdHh = array();
$cn = '';
if(isset($p0qjAJ_05R9[$M_ipyiafuS8TomQIEGT]))
$M_ipyiafuS8TomQIEGT=$p0qjAJ_05R9[$M_ipyiafuS8TomQIEGT];
$f = $NgBWwllTme && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$M_ipyiafuS8TomQIEGT);
if($lAFZdQzEUjH&&!$f)$f=$f||preg_match('#('.$lAFZdQzEUjH.')#',$M_ipyiafuS8TomQIEGT);
if($fWF3L71eqllSq&&!$f)
foreach($fWF3L71eqllSq as $bm)
$f = $f||preg_match('#^('.$bm.')#',$mVBhOIPtuHXMVt3_B.$M_ipyiafuS8TomQIEGT);
$f2 = false;
if(!$f)
{
$f2 = $paeh3sXfU && preg_match('#'.$grab_parameters['xs_inc_skip'].'#',$M_ipyiafuS8TomQIEGT);
if($wV4tMRGfV4NR&&!$f2)
$f2 = $f2||(preg_match('#('.$wV4tMRGfV4NR.')#',$M_ipyiafuS8TomQIEGT));
if($grab_parameters['xs_parse_only'] && !$f2 && $M_ipyiafuS8TomQIEGT!='/')
{
$f2 = $f2 || !preg_match('#'.str_replace(' ', '|', preg_quote($grab_parameters['xs_parse_only'],'#')).'#',$M_ipyiafuS8TomQIEGT);
}
}
do{

if(!$f && !$f2 && ($xjrJ2Yzs6*1.2>(count($urls_list)+count($urls_completed)-$url_ind)))
{

if($vmCbGLUXBFFGXsy1p<=0 || $links_level<$vmCbGLUXBFFGXsy1p)
{
$CmyLmKMDwW4 = preg_replace('#([^/\:]/)/+#','\\1',$dSeuGOAE_8dFCli.$M_ipyiafuS8TomQIEGT);


if($_GET['ddbg'])echo "<h4> { $CmyLmKMDwW4 } </h4>";flush();
$l1XfKhvOuPk9fWoi=0;
do {
$KSpBBj6usrOqMsPdHh = $NR3tQ8cMptFBaNs2->fetch($CmyLmKMDwW4, 0, 1);
if($KSpBBj6usrOqMsPdHh['code']==403)
{
$l1XfKhvOuPk9fWoi++;
sleep($grab_parameters['xs_delay_ms']?$grab_parameters['xs_delay_ms']:1);
}
else $l1XfKhvOuPk9fWoi=5;
}while($l1XfKhvOuPk9fWoi<3);


$ejZZGtpxc7E=strtolower($KSpBBj6usrOqMsPdHh['headers']['content-type']);
if(!strstr($ejZZGtpxc7E,'text/html')&&!strstr($ejZZGtpxc7E,'/xhtml'))
continue;
$v9IRE8CtKo6 = array();



if($IIcbczWAX09NsrG && !preg_match($IIcbczWAX09NsrG,$KSpBBj6usrOqMsPdHh['code']))
continue;
$cn = $KSpBBj6usrOqMsPdHh['content'];

$tsize+=strlen($cn);
$cn = preg_replace('#<!--(\[if IE\]>|.*?-->)#is', '',$cn);
if($grab_parameters['xs_canonical'])
if(($CmyLmKMDwW4 == $KSpBBj6usrOqMsPdHh['last_url']) 
&& preg_match('#<link[^>]*rel="canonical"[^>]href="([^>]*?)"#', $cn, $lWQKrAn9z))
$KSpBBj6usrOqMsPdHh['last_url'] = $lWQKrAn9z[1];
$mKNc3ZuibHw8 = preg_replace('#^.*?'.preg_quote($dSeuGOAE_8dFCli,'#').'#','',$KSpBBj6usrOqMsPdHh['last_url']);
if($CmyLmKMDwW4 != $KSpBBj6usrOqMsPdHh['last_url']) {
$p0qjAJ_05R9[$M_ipyiafuS8TomQIEGT]=$KSpBBj6usrOqMsPdHh['last_url']; $io=$M_ipyiafuS8TomQIEGT;
$urls_list2[] = $mKNc3ZuibHw8;
if($grab_parameters['xs_maxref'] && count($ref_links[$mKNc3ZuibHw8])<$grab_parameters['xs_maxref'])
$ref_links[$mKNc3ZuibHw8][] = $M_ipyiafuS8TomQIEGT;
continue;
}
preg_match('#<base[^>]*?href=[\'"](.*?)[\'"]#is',$cn,$bm);
if(isset($bm[1])&&$bm[1])
$JkWlL2a0m = ELgkGbIsRXQp82oR6Qe($bm[1].(preg_match('#//.*/#',$bm[1])?'-':'/-'));
else
$JkWlL2a0m = ELgkGbIsRXQp82oR6Qe($dSeuGOAE_8dFCli.$M_ipyiafuS8TomQIEGT);

preg_match_all('#<(?:a|area|go)\s[^>]*?href\s*=\s*(?:"([^"]*)|\'([^\']*)|([^\s\">]+)).*?>#is', $cn, $am);
preg_match_all('#<i?frame\s[^>]*src\s*=\s*["\']?(.*?)("|>|\'[>\s])#is', $cn, $KR2szlrmlyOMknrLO);
preg_match_all('#<meta\s[^>]*http-equiv\s*=\s*"?refresh[^>]*URL\s*=\s*["\']?(.*?)("|>|\'[>\s])#is', $cn, $rZR4QpdO3O0jnv5n1fa);
$v9IRE8CtKo6 = array();
for($i=0;$i<count($am[1]);$i++)
{
if( !preg_match('#rel=["\']nofollow#i', $am[0][$i]) ) 
$v9IRE8CtKo6[] = $am[1][$i];
}
$v9IRE8CtKo6 = array_merge(
$v9IRE8CtKo6,

$am[2],$am[3],  
$KR2szlrmlyOMknrLO[1],$rZR4QpdO3O0jnv5n1fa[1]);
$v9IRE8CtKo6 = array_unique($v9IRE8CtKo6);

$nn = $nt = 0;
reset($v9IRE8CtKo6);
if(preg_match('#<meta name="robots" content="[^"]*?nofollow#is',$cn))
$v9IRE8CtKo6 = array();
foreach($v9IRE8CtKo6 as $i=>$ll)
if($ll)
{                    
$a = $sa = trim($ll);

if($grab_parameters['xs_proto_skip'] && 
(preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',$a)||
($NgBWwllTme && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$a))||
preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',function_exists('html_entity_decode')?html_entity_decode($a):$a)
))
continue;
if($grab_parameters['xs_exclude_check'])
{
$_f=$_f2=false;
$_f=$lAFZdQzEUjH&&preg_match('#('.$lAFZdQzEUjH.')#',$a);
if($fWF3L71eqllSq&&!$_f)
foreach($fWF3L71eqllSq as $bm)
$_f = $_f||preg_match('#^('.$bm.')#',$mVBhOIPtuHXMVt3_B.$M_ipyiafuS8TomQIEGT);
if($_f)continue;
}
$EAZhN7sTw2y0 = $this->sG53YQ0A72($a, $M_ipyiafuS8TomQIEGT, $OXChr3ZiOYw7fR8z9B, $JkWlL2a0m, $dSeuGOAE_8dFCli);
$mKNc3ZuibHw8 = substr($a,strlen($dSeuGOAE_8dFCli));
$mKNc3ZuibHw8 = str_replace(' ', '%20', $mKNc3ZuibHw8);
if($grab_parameters['xs_cleanurls'])
$mKNc3ZuibHw8 = @preg_replace($grab_parameters['xs_cleanurls'],'',$mKNc3ZuibHw8);
if($grab_parameters['xs_cleanpar'])
{
$mKNc3ZuibHw8 = @preg_replace('#[\\?\\&]('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\-\_]+$#i','',$mKNc3ZuibHw8);
$mKNc3ZuibHw8 = @preg_replace('#([\\?\\&])('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\-\_]+&#i','$1',$mKNc3ZuibHw8);
}
if($EAZhN7sTw2y0)
{
if($grab_parameters['xs_extlinks'] && !$urls_ext[$a])
$urls_ext[$a] = $CmyLmKMDwW4;
continue;
}
if($_GET['ddbg3'])echo "<u>[$a]</u><br>\n";//exit;
$urls_list2[] = $mKNc3ZuibHw8;
if($grab_parameters['xs_maxref'] && count($ref_links[$mKNc3ZuibHw8])<$grab_parameters['xs_maxref'])
$ref_links[$mKNc3ZuibHw8][] = $M_ipyiafuS8TomQIEGT;
$nt++;
}
unset($v9IRE8CtKo6);
}
}                                        


if($grab_parameters['xs_incl_only'] && !$f)
$f = $f || !preg_match('#'.str_replace(' ', '|', preg_quote($grab_parameters['xs_incl_only'],'#')).'#',$dSeuGOAE_8dFCli.$M_ipyiafuS8TomQIEGT);
if(!$f) $f = $f||preg_match('#<meta name="robots" content="[^"]*?noindex#is',$cn);
if(!$f)
{
$m2GAv90hXZhKCGR = array(

'link'=>preg_replace('#([^/\:]/)/+#','\\1',$dSeuGOAE_8dFCli.$M_ipyiafuS8TomQIEGT)
);
if($grab_parameters['xs_makehtml'])
{
preg_match('#<title>(.*?)</title>#is', $KSpBBj6usrOqMsPdHh['content'], $tqkt5joCT_wZgAl3z);
$m2GAv90hXZhKCGR['t'] = strip_tags($tqkt5joCT_wZgAl3z[1]);
}
if($grab_parameters['xs_metadesc'])
{
preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?description[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $rL35wDI2EJDBk);
if($rL35wDI2EJDBk[1])
$m2GAv90hXZhKCGR['d'] = $rL35wDI2EJDBk[1];
}
if($grab_parameters['xs_makeror']||$grab_parameters['xs_autopriority'])
$m2GAv90hXZhKCGR['o'] = max(0,$links_level);
if(preg_match('#('.$Ho3EyQEy5sso9sRWd.')#',$dSeuGOAE_8dFCli.$M_ipyiafuS8TomQIEGT,$Q6E2sX2sXDNUc))
{
$m2GAv90hXZhKCGR['clm'] = $jDyVj7CkPgy[$Q6E2sX2sXDNUc[1]]['lm'];
$m2GAv90hXZhKCGR['f'] = $jDyVj7CkPgy[$Q6E2sX2sXDNUc[1]]['f'];
$m2GAv90hXZhKCGR['p'] = $jDyVj7CkPgy[$Q6E2sX2sXDNUc[1]]['p'];
}
if($grab_parameters['xs_imginfo'])
{
preg_match_all('#<img[^>]*src="(.*?)".*?>#is', $cn, $cCqeu6KEd4LFk, PREG_SET_ORDER);
$ai = $ae = array();
foreach($cCqeu6KEd4LFk as $im)
{
$EAZhN7sTw2y0 = $this->sG53YQ0A72($im[1], $M_ipyiafuS8TomQIEGT, $OXChr3ZiOYw7fR8z9B, $JkWlL2a0m, $dSeuGOAE_8dFCli);
if($EAZhN7sTw2y0) 
continue;
if(!in_array($im[1], $ae))
if(!$lAFZdQzEUjH||!preg_match('#('.$lAFZdQzEUjH.')#',$im[1]))
{
$ae[] = $im[1];
preg_match('#(?:title|alt)="(.*?)"#i', $im[0], $tm);
$t =$tm[1];
$ai[] = array($im[1], $t);
}
}
if($ai)
$m2GAv90hXZhKCGR['i'] = $ai;
}
if($grab_parameters['xs_lastmod_notparsed'] && $f2)
{
$KSpBBj6usrOqMsPdHh = $NR3tQ8cMptFBaNs2->fetch($CmyLmKMDwW4, 0, 1, false, "", array('req'=>'HEAD'));

}
if(!$m2GAv90hXZhKCGR['lm'] && isset($KSpBBj6usrOqMsPdHh['headers']['last-modified']))
$m2GAv90hXZhKCGR['lm']=$KSpBBj6usrOqMsPdHh['headers']['last-modified'];
if($_GET['ddbg'])echo "((include ".$m2GAv90hXZhKCGR['link']."))<br />";flush();
if($grab_parameters['xs_memsave'])
{
GMkyu4v1v($LnCUNQ5wpr0KnV5A, $m2GAv90hXZhKCGR);
$urls_completed[] = $LnCUNQ5wpr0KnV5A;
}else
$urls_completed[] = $m2GAv90hXZhKCGR;
$xjrJ2Yzs6 = $TWEyaYFok4IXebL - count($urls_completed);
}
}while(false);// zerowhile
if($url_ind>=$cnu)
{
unset($urls_list);
$url_ind = 0;
$urls_list = array_values(array_unique(array_diff($urls_list2,$urls_list_full)));
$urls_list_full = array_merge($urls_list_full,$urls_list);
$cnu = count($urls_list);
unset($ref_links2);
$ref_links2 = $ref_links;
unset($ref_links); unset($urls_list2);
$ref_links = array();
$urls_list2 = array();
$links_level++;
}
$pn++;
$D3AGbIACouD10=explode(" ",microtime());
$ctime = $D3AGbIACouD10[0]+$D3AGbIACouD10[1] - $MvE2_SORq;
$pl=min($cnu-$url_ind,$xjrJ2Yzs6);
if( ($cnu==$url_ind || $pl==0||$pn==1 || ($pn%$grab_parameters['xs_progupdate'])==0)
|| count($urls_completed)>=$TWEyaYFok4IXebL)
{
if(strstr($ZVU_UotF9_jJp['content'],'header'))break;
$mu = function_exists('memory_get_usage') ? memory_get_usage() : '-';
if(intval($mu))
$mu = number_format($mu/1024,1).' Kb';
if($_GET['ddbg'])echo "(memory: $mu)<br>\n";//exit;
$urls_list2 = array_values(array_unique($urls_list2));
$AzJloR6jxz6 = array(
$ctime, // running time
str_replace($GXcwrWDZ8PYz, '', $M_ipyiafuS8TomQIEGT),  // current URL
$pl,                    // urls left
$pn,                    // processed urls
$tsize,                 // bandwidth usage
$links_level,           // depth level
$mu,                    // memory usage
count($urls_completed), // added in sitemap
count($urls_list2)      // in the queue
);
if($hyyNGONNnZBD1i['bgexec'])
yvOIe0tV6y4KcO0aLl(iK6zN3FNMZ,q2PfaTx_3ig($AzJloR6jxz6));
if($EYyBXYy9WWbLGYL5iQ && !$f)
$EYyBXYy9WWbLGYL5iQ($AzJloR6jxz6);

}else
{
$EYyBXYy9WWbLGYL5iQ(array('cmd'=>'ping', 'bg' => $hyyNGONNnZBD1i['bgexec']));
}
if($grab_parameters['xs_savestate_time']>0 &&
( 
($ctime-$tZg_hjVhRlGnXA>$grab_parameters['xs_savestate_time'])
|| ($url_ind>=$cnu)
)
)
{
$tZg_hjVhRlGnXA = $ctime;
if($_GET['ddbg'])echo "(saving dump)<br />\n";flush();
$qavYsvb7U31aFIKJR = compact('url_ind',
'urls_list','urls_list2','cnu',
'ref_links','ref_links2',
'urls_list_full','urls_completed',
'urls_404',
'nt','tsize','pn','links_level','ctime', 'urls_ext'
);
$qavYsvb7U31aFIKJR['time']=time();
$Ur6IsVd9ao9Ycn=q2PfaTx_3ig($qavYsvb7U31aFIKJR);
yvOIe0tV6y4KcO0aLl(bZ3jbCz403O1HU,$Ur6IsVd9ao9Ycn);
unset($qavYsvb7U31aFIKJR);
unset($Ur6IsVd9ao9Ycn);
}
if($grab_parameters['xs_delay_req'] && $grab_parameters['xs_delay_ms'] &&
(($pn%$grab_parameters['xs_delay_req'])==0))
{
sleep($grab_parameters['xs_delay_ms']);
}
if($h_7rDKnff8=file_exists($VHkEbcZzGkWKeYH=T_IVB6tYAThxWS.fM0qQkSagz_)){
if(@unlink($VHkEbcZzGkWKeYH))
break;
else
$h_7rDKnff8=0;
}
}while(
count($urls_completed)<$TWEyaYFok4IXebL
&&
$url_ind<$cnu
);
if($_GET['ddbgexit'])exit;
return array(
'u404'=>$urls_404,
'ctime'=>$ctime,
'tsize'=>$tsize,
'errmsg'=>'',
'initurl'=>$GXcwrWDZ8PYz,
'initdir'=>$dSeuGOAE_8dFCli,
'ucount'=>count($urls_completed),
'time'=>time(),
'params'=>$hyyNGONNnZBD1i,
'interrupt'=>$h_7rDKnff8,
'urls_ext'=>$urls_ext
);
}
}
$fMiTRrdjIW = new SiteCrawler();
function ygddcsZcedjzZC(){
@unlink(T_IVB6tYAThxWS.iK6zN3FNMZ);
}
?>