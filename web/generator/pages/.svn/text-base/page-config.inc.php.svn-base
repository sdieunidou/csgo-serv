<?php
if(!defined('PCiMWHKGB5lwUwCci'))exit();
$RlO1HaAgQ = $k88k5WVVH7HOa = '';

if(!is_writable(T_IVB6tYAThxWS)){
$RlO1HaAgQ .= '<br>Datastorage folder is not writable: <b>'.T_IVB6tYAThxWS.'</b>';
}
 

if(isset($_POST['save']) && is_writable(gjEB17v5UJj1SxRZ)){
$grab_parameters['xs_initurl'] = trim($_POST['initurl']);
$grab_parameters['xs_freq'] = $_POST['freq'];
$grab_parameters['xs_lastmod'] = $_POST['lastmod'];
$grab_parameters['xs_lastmodtime'] = $_POST['lastmodtime'];
$grab_parameters['xs_priority'] = $_POST['priority'];
$grab_parameters['xs_autopriority'] = $_POST['autopriority']?1:0;
$grab_parameters['xs_max_pages'] = 0;
$grab_parameters['xs_max_depth'] = $_POST['max_depth'];
$grab_parameters['xs_exec_time'] = $_POST['exec_time'];
$grab_parameters['xs_memlimit'] = $_POST['mem_limit'];
$grab_parameters['xs_savestate_time'] = $_POST['savestate_time'];
$grab_parameters['xs_delay_req'] = $_POST['delay_req'];
$grab_parameters['xs_delay_ms'] = $_POST['delay_ms'];
$grab_parameters['xs_yping'] = $_POST['vzNS8L4hV0RzWs'];
$grab_parameters['xs_smname'] = $_POST['smname'];
$grab_parameters['xs_excl_urls'] = $_POST['excl_urls'];
$grab_parameters['xs_incl_urls'] = $_POST['incl_urls'];
$grab_parameters['xs_incl_only'] = $_POST['incl_only'];
$grab_parameters['xs_parse_only'] = $_POST['parse_only'];
$grab_parameters['xs_ind_attr'] = $_POST['ind_attr'];
$grab_parameters['xs_weblog_ping'] = $_POST['weblogup'];
$grab_parameters['xs_smurl'] = $_POST['smurl'];
$grab_parameters['xs_login'] = trim($_POST['xslogin']);
if($_POST['xspassword']!='-----')
$grab_parameters['xs_password'] = md5(trim($_POST['xspassword']));
$grab_parameters['xs_email'] = $_POST['xsemail'];
$grab_parameters['xs_gping'] = $_POST['gping']?1:0;
$grab_parameters['xs_chlog'] = $_POST['gchlog']?1:0;
$grab_parameters['xs_extlinks'] = $_POST['extlinks']?1:0;
$grab_parameters['xs_makeror'] = $_POST['makeror']?1:0;
$grab_parameters['xs_maketxt'] = $_POST['maketxt']?1:0;
foreach($sm_proc_list as $bsdObbWFYcM20JyA)
$grab_parameters[$bsdObbWFYcM20JyA->XvaJJE34XW] = $_POST[$bsdObbWFYcM20JyA->XvaJJE34XW]?1:0;

$grab_parameters['xs_makehtml'] = $_POST['makehtml']?1:0;
$grab_parameters['xs_htmlname'] = $_POST['htmlname'];
$grab_parameters['xs_htmlpart'] = $_POST['htmlpart'];
$grab_parameters['xs_htmlsort'] = $_POST['htmlsort'];
$grab_parameters['xs_htmlstruct'] = $_POST['htmlstruct'];
$grab_parameters['xs_imginfo'] = $_POST['imginfo']?1:0;
$grab_parameters['xs_sm_size'] = $_POST['sm_size'];
$grab_parameters['xs_purgelogs'] = $_POST['purge'];
$grab_parameters['xs_maxref'] = $_POST['maxref'];
$grab_parameters['xs_compress'] = $_POST['compress']?1:0;
$grab_parameters['xs_usecurl'] = $_POST['usecurl']?1:0;
$grab_parameters['xs_memsave'] = $_POST['memsave']?1:0;
$grab_parameters['xs_inc_skip'] = '\.('.preg_replace('#\s+#','|',trim($_POST['incl'])).')';
$grab_parameters['xs_exc_skip'] = '\.('.preg_replace('#\s+#','|',trim($_POST['excl'])).')';
$grab_parameters['xs_dumptype'] = $_POST['storage'];
$grab_parameters['xs_ipconnection'] = $_POST['ipaddr'];
$grab_parameters['xs_cleanpar'] = preg_replace('#\s+#','|',trim($_POST['cleanpar']));
$grab_parameters['xs_metadesc'] = $_POST['metadesc']?1:0;
$grab_parameters['xs_canonical'] = $_POST['canonical']?1:0;
$grab_parameters['xs_checkver'] = $_POST['checkver']?1:0;
$grab_parameters['xs_lastmod_notparsed'] = $_POST['lmnp']?1:0;
$grab_parameters['xs_debug'] = $_POST['dbg']?1:0;
lIRwDqHQC2tIuP(gjEB17v5UJj1SxRZ, $grab_parameters);
$k88k5WVVH7HOa = 'Configuration has been saved';		
}
$aPeIhzjYj6iZvV = V15cq9dPNt8iS8();
if(count($aPeIhzjYj6iZvV)>0){
$zmYRRBiNHXyzAGsBbH = array_pop($aPeIhzjYj6iZvV);
$qcHvzZE_cTnCJcmS = @unserialize(o5dbZtmDCSktjDlJt3(T_IVB6tYAThxWS.$zmYRRBiNHXyzAGsBbH));
}
$PtUafGiAPeMBNuKQpDm = $grab_parameters['xs_smname'];
if($grab_parameters['xs_compress'])$aWjpeZhY_qaCTTKmvy = '.gz';
$J1FmiSfIAe5Xjp0MUVb = $grab_parameters['xs_sm_size'] ? $grab_parameters['xs_sm_size'] : 50000;
for($i=0;$i<ceil($qcHvzZE_cTnCJcmS['ucount']/$J1FmiSfIAe5Xjp0MUVb);$i++)
{   
$uv0LKrNpy = (($qcHvzZE_cTnCJcmS['ucount']>$J1FmiSfIAe5Xjp0MUVb) ?
HlywPDappbdYVU($i+1,$PtUafGiAPeMBNuKQpDm):$PtUafGiAPeMBNuKQpDm).$aWjpeZhY_qaCTTKmvy;
if(!@is_writable($uv0LKrNpy) && !@is_writable(dirname($uv0LKrNpy)) )
{
if($pf = @fopen($uv0LKrNpy))
@fclose($pf);
$RlO1HaAgQ .= '<br>Sitemap file is not writable: <b>'.$uv0LKrNpy.'</b>';
}
}	
foreach($sm_proc_list as $bsdObbWFYcM20JyA)
$RlO1HaAgQ .= $bsdObbWFYcM20JyA->is47wof6ySSG();
$J1FmiSfIAe5Xjp0MUVb = $grab_parameters['xs_htmlpart'];
$PtUafGiAPeMBNuKQpDm = $grab_parameters['xs_htmlname'];
for($i=0;$i<ceil($qcHvzZE_cTnCJcmS['ucount']/$J1FmiSfIAe5Xjp0MUVb);$i++)
{   
$uv0LKrNpy = (($qcHvzZE_cTnCJcmS['ucount']>$J1FmiSfIAe5Xjp0MUVb) ?
HlywPDappbdYVU($i+1,$PtUafGiAPeMBNuKQpDm,true):$PtUafGiAPeMBNuKQpDm);
if(!is_writable($uv0LKrNpy) && !is_writable(dirname($uv0LKrNpy))
)
$RlO1HaAgQ .= '<br>Sitemap file is not writable: <b>'.$uv0LKrNpy.'</b>';
}	
include ZR1vtYkW3IIT6ji.'page-top.inc.php';
?>
<div id="sidenote">
<?php
include ZR1vtYkW3IIT6ji.'page-sitemap-detail.inc.php';
?>
<div class="block1head">
1. General Parameters
</div>
<div class="block1">
Define website URL, sitemap filename and URL, sitemap types.
</div>
<div class="block1head">
2. Sitemap Entry Attributes
</div>
<div class="block1">
Pages update frequency, last modification time, priority and other attributes.
</div>
<div class="block1head">
3. Miscellaneous Settings
</div>
<div class="block1">
Login and password, email notification, compression, search engines pings etc.
</div>
<div class="block1head">
4. Narrow Indexed Pages Set
</div>
<div class="block1">
Exclude specific filenames, filetypes, folders etc.
</div>
<div class="block1head">
5. Crawler Limitations, Finetune
</div>
<div class="block1">
Limit sitemap size, links depth level, maximum running time etc.
</div>
<div class="block1head">
6. Advanced Settings
</div>
<div class="block1">
Server's IP address, session ID parameters etc.
</div>
</div>
<div id="shifted">
<?php
if($_GET['errmsg'])$RlO1HaAgQ = $_GET['errmsg'];
if($RlO1HaAgQ){
?>
<div class="block2head">
An error occured
</div>
<div class="block1">
<?php echo $RlO1HaAgQ?>
</div>
<?php }?>
<?php
if($k88k5WVVH7HOa){
?>
<div class="block1head">
Note
</div>
<div class="block1">
<?php echo $k88k5WVVH7HOa?>
</div>
<?php }?>
<h2>Configuration</h2>
<form name="sgform" action="index.<?php echo $muP565NgXyQ?>" method="POST">
<input type="hidden" name="op" value="<?php echo $op?>">
<div class="inptitle">Starting URL:</div>
<input type="text" name="initurl" size="70" value="<?php echo $grab_parameters['xs_initurl']?>">
<br /><small>
Please enter the <b>full</b> http address for your site, only 
the links within the starting directory will be included.</small>
<div class="inptitle">Save sitemap to:</div>
<input type="text" name="smname" size="70" value="<?php echo $grab_parameters['xs_smname']?>">
<br /><small>
Please enter complete file name, including the path. Make sure that the file is existing and has write permissions allowed.
<br />Hint: current path to Sitemap generator is: <?php echo dirname(dirname(__FILE__))?>/
</small>
<div class="inptitle">Your Sitemap URL:</div>
<input type="text" name="smurl" size="70" value="<?php echo $grab_parameters['xs_smurl']?>">
<div class="inptitle">Create Text Sitemap:</div>
<input type="checkbox" name="maketxt" <?php echo $grab_parameters['xs_maketxt']?'checked':''?> id="in11"><label for="in11"> Create sitemap in Text format</label>
<div class="inptitle">Create ROR Sitemap:</div>
<input type="checkbox" name="makeror" <?php echo $grab_parameters['xs_makeror']?'checked':''?> id="in13"><label for="in13"> Create sitemap in ROR format</label>
<br><small>It will be stored in the same folder as XML sitemap, but with different filename: ror.xml</small>
<!--
<div class="inptitle">Create Google Base Feed (RSS):</div>
<input type="checkbox" name="makebase" <?php echo $grab_parameters['xs_makebase']?'checked':''?> id="in113"><label for="in113"> Create feed for Google Base</label>
<br><small>It will be stored in the data/ folder with filename: gbase.xml</small>
-->
<div class="inptitle">Create HTML Sitemap:</div>
<input type="checkbox" name="makehtml" <?php echo $grab_parameters['xs_makehtml']?'checked':''?> id="in12"><label for="in12"> Create html site map for your visitors</label>
<br><small>Please note that this option requires additional resources to perform</small>
<div class="inptitle">HTML Sitemap filename:</div>
<input type="text" name="htmlname" value="<?php echo $grab_parameters['xs_htmlname']?>" size="70">
<div class="inptitle">Include Images info in Sitemap:</div>
<input type="checkbox" name="imginfo" <?php echo $grab_parameters['xs_imginfo']?'checked':''?> id="imginfo1"><label for="imginfo1"> Include images information in sitemap</label>
<br><small>Please note that this option requires additional resources to perform</small>
<?php
foreach($sm_proc_list as $bsdObbWFYcM20JyA)
{
?>
<div class="inptitle">Create <?php echo $bsdObbWFYcM20JyA->IeJBGxA5o?>:</div>
<input type="checkbox" name="<?php echo $bsdObbWFYcM20JyA->XvaJJE34XW?>" <?php echo $grab_parameters[$bsdObbWFYcM20JyA->XvaJJE34XW]?'checked':''?> id="in<?php echo $bsdObbWFYcM20JyA->XvaJJE34XW;?>"><label for="in<?php echo $bsdObbWFYcM20JyA->XvaJJE34XW;?>"> Create <?php echo $bsdObbWFYcM20JyA->IeJBGxA5o;?></label>
<br><small><?php echo $bsdObbWFYcM20JyA->Kd9n5bwrnd17vZn9U?></small>
<?php }?>
<br/>
<br/><br/>
<h3 style="cursor:pointer" onclick="javascript:cDdos7BIlJ('configattr')" id="hconfigattr">[+] Sitemap Entry Attributes (click to expand)</h3>
<div id="configattr">
<div class="inptitle">Change frequency:</div>
<select name="freq">
<option value="">Do not specify</option>
<?php $Q0k4IzLpfHgf8mIB4rJ = array('Always','Hourly','Daily','Weekly','Monthly','Yearly','Never');
foreach($Q0k4IzLpfHgf8mIB4rJ as $fa)
echo '
<option value="'.strtolower($fa).'"'.(strtolower($fa)==$grab_parameters['xs_freq']?' selected':'').'>'.$fa.'</option>';
?>
</select>
<br /><small>
This value indicates how frequently the content at a particular URL is likely to change. 
</small>
<?php
$VuFC4tQCeLRnCMCS = substr(str_replace('|',' ',$grab_parameters['xs_inc_skip']),3,-1);
$nO36g2p2q_KYnh7qxVo = substr(str_replace('|',' ',$grab_parameters['xs_exc_skip']),3,-1);
$lm = $grab_parameters['xs_lastmod'];
$Lg2LpVDBA2Ws = $grab_parameters['xs_lastmodtime'];
?>
<div class="inptitle">Last modification:</div>
<input<?php echo $lm==0?' checked':''?> type="radio" name="lastmod" value="0" id="lm1"><label for="lm1"> None</label>
<br><input<?php echo $lm==1?' checked':''?> type="radio" name="lastmod" value="1" id="lm2"><label for="lm2"> Use server's response</label>
<br><input<?php echo $lm==2?' checked':''?> type="radio" name="lastmod" value="2" id="lm3"><label for="lm3"> Use current time</label>
<br><input<?php echo $lm==3?' checked':''?> type="radio" name="lastmod" value="3" id="lm4"><label for="lm4"> Use this date/time:</label>
<input type="text" name="lastmodtime" size=30 value="<?php echo $Lg2LpVDBA2Ws?$Lg2LpVDBA2Ws:date('Y-m-d H:i:s')?>">
<br /><small>
The time the URL was last modified. You can let the generator set this field from your server's response headers or to specify your own date and time. 
</small>
<div class="inptitle">Priority:</div>
<input type="text" name="priority" size="5" value="<?php echo $grab_parameters['xs_priority']?>">
<br /><small>
The priority of a particular URL relative to other pages on the same site. The value for this tag is a number between 0.0 and 1.0. 
</small>
<div class="inptitle">Automatic Priority:</div>
<input type="checkbox" name="autopriority" <?php echo $grab_parameters['xs_autopriority']?'checked':''?> id="autopriority"><label for="autopriority"> Automatically assign priority attribute</label>
<br><small>Enable this option to automatically reduce priority depending on the page's depth level</small>
<div class="inptitle">Individual attributes:</div>
<textarea name="ind_attr" rows="4" cols="40"><?php echo $grab_parameters['xs_ind_attr']?></textarea>
<br><small>define specific frequency and priority attributes here in the following format: 
<br/>"url substring,lastupdate YYYY-mm-dd,frequency,priority". 
<br/><b>example:</b>
<br/>page.php?product=,2005-11-14,monthly,0.9
</small>
<br/>
<br/><br/>
</div>
<h3 style="cursor:pointer" onclick="javascript:cDdos7BIlJ('miscset')" id="hmiscset">[-] Miscellaneous Settings (click to expand)</h3>
<div id="miscset">
<div class="inptitle">Require authorization to access generator interface:</div>
Login:<br/><input type="text" name="xslogin" value="<?php echo $grab_parameters['xs_login']?>" size="70">
<br/>
Password:<br/><input type="password" name="xspassword" value="-----" size="70">
<br/>
<div class="inptitle">Send email notifications:</div>
<input type="text" name="xsemail" value="<?php echo $grab_parameters['xs_email']?>" size="70">
<br />
<div class="inptitle">Number of URLs per file in XML sitemap:</div>
<input type="text" name="sm_size" size="8" value="<?php echo $grab_parameters['xs_sm_size']?>">
<br><small>(that may split your sitemap on multiple files)</small>
<div class="inptitle">Number of links per page and sort order in HTML sitemap:</div>
<input type="text" name="htmlpart" size="8" value="<?php echo $grab_parameters['xs_htmlpart']?>">
<select name="htmlsort">
<?php $Q0k4IzLpfHgf8mIB4rJ = array('Unsorted (default)','Alphabetical (asc)','Alphabetical (desc)','Randomize');
foreach($Q0k4IzLpfHgf8mIB4rJ as $k=>$fa)
echo '
<option value="'.$k.'"'.($k==$grab_parameters['xs_htmlsort']?' selected':'').'>'.$fa.'</option>';
?>
</select>
<select name="htmlstruct">
<?php $Q0k4IzLpfHgf8mIB4rJ = array('Tree-like (default)','Folders list','Plain list');
foreach($Q0k4IzLpfHgf8mIB4rJ as $k=>$fa)
echo '
<option value="'.$k.'"'.($k==$grab_parameters['xs_htmlstruct']?' selected':'').'>'.$fa.'</option>';
?>
</select>
<div class="inptitle">Compress sitemap using GZip:</div>
<input type="checkbox" name="compress" <?php echo $grab_parameters['xs_compress']?'checked':''?> id="in1"><label for="in1"> Use sitemap files compression</label>
<br><small>(".gz" will be added to all filenames automatically)</small>
<div class="inptitle">Inform (ping) Search Engines upon completion (Google, Yahoo, Ask, Moreover, Live):</div>
<input type="checkbox" name="gping" <?php echo $grab_parameters['xs_gping']?'checked':''?> id="in2"><label for="in2"> Ping Search Engines when generation is done</label>
<br>
<div class="inptitle">Send "weblogUpdate" type of Ping Notification to:</div>
<textarea name="weblogup" rows="2" cols="40"><?php echo $grab_parameters['xs_weblog_ping']?></textarea>
<div class="inptitle">Calculate changelog:</div>
<input type="checkbox" name="gchlog" <?php echo $grab_parameters['xs_chlog']?'checked':''?> id="in3"><label for="in3"> Calculate Change Log after completion</label>
<br><small>please note that this option requires more resources to complete</small>
<div class="inptitle">Store the external links list:</div>
<input type="checkbox" name="extlinks" <?php echo $grab_parameters['xs_extlinks']?'checked':''?> id="inextlinks"><label for="inextlinks"> Store External Links List</label>
<br><small>this option increases memory usage</small>
<br/><br/>
</div>
<h3 style="cursor:pointer" onclick="javascript:cDdos7BIlJ('narrow')" id="hnarrow">[-] Narrow Indexed Pages Set (click to expand)</h3>
<div id="narrow">
<div class="inptitle">Exclude from sitemap extensions:</div>
<input type="text" name="excl" size="90" value="<?php echo $nO36g2p2q_KYnh7qxVo?>">
<br><small>these URLs are NOT included in sitemap</small>
<div class="inptitle">Do not parse extensions:</div>
<input type="text" name="incl" size="90" value="<?php echo $VuFC4tQCeLRnCMCS?>">
<br><small>these URLs ARE included in sitemap, although not retrieved from server</small>
<div class="inptitle">Exclusion preset:</div>
<select style="width:220px" onchange="Nya_SwQsq5oqjAnSR(this.value)">
<option value="0">Select one to apply</option>
<option value="1">osCommerce</option>
<option value="2">Joomla</option>
<option value="3">Simple Machines Forum</option>
<option value="4">vBulletin</option>
<option value="5">phpBB</option>
<option value="6">Gallery 2</option>
</select>
<br><small>changing this setting will automatically prepopulate the options below with preset data</small>
<script type="text/javascript">
function Nya_SwQsq5oqjAnSR(set)
{
document.forms['sgform'].elements['excl_urls'].value = aexc[set];
document.forms['sgform'].elements['incl_urls'].value = anop[set];
}
var aexc = new Array();
var anop = new Array();
aexc[0] = anop[0] = '';
aexc[1] = "redirect.php\n\
js=\n\
js/\n\
sort=\n\
sort/\n\
action=\n\
action/\n\
write_review\n\
reviews_write\n\
printable\n\
manufacturers_id\n\
bestseller=\n\
tell_a_friend\n\
login";
anop[1] = 'product_reviews\n\
language=\n\
language/\n\
price_match.php';
aexc[2] = 'print=\n\
do_pdf=\n\
pop=1\n\
task=emailform\n\
task=trackback\n\
task=rss';
anop[2] = '';
aexc[3] = 'sort,\n\
action=\n\
.new.html\n\
.msg\n\
prev_next';
anop[3] = '';
aexc[4] = 'attachment.php\n\
calendar.php\n\
cron.php\n\
editpost.php\n\
image.php\n\
member.php\n\
memberlist.php\n\
misc.php\n\
newattachment.php\n\
newreply.php\n\
newthread.php\n\
online.php\n\
private.php\n\
profile.php\n\
register.php\n\
search.php\n\
usercp.php\n\
goto=\n\
p=\n\
sort=\n\
order=\n\
mode=';
anop[4] = '';
aexc[5] = 'p=\n\
mode=\n\
mark=\n\
order=\n\
highlight=\n\
profile.php\n\
privmsg.php\n\
posting.php\n\
view=previous\n\
view=next\n\
search.php';
anop[5] = 'view=print';
aexc[6] = 'core.UserLogin\n\
core.UserRecoverPassword\n\
g2_return\n\
search.\n\
slideshow';
anop[6] = 'g2_keyword\n\
g2_imageViewsIndex';
</script>
<div class="inptitle">Exclude URLs:</div>
<textarea name="excl_urls" rows="4" cols="40"><?php echo $grab_parameters['xs_excl_urls']?></textarea>
<br><small>do NOT include URLs that contain these substrings, one string per line</small>
<div class="inptitle">Do not parse URLs:</div>
<textarea name="incl_urls" rows="3" cols="40"><?php echo $grab_parameters['xs_incl_urls']?></textarea>
<br><small>do not retrieve pages that contain these substrings in URL, but still INCLUDE them in sitemap</small>
<div class="inptitle">"Include ONLY" URLs:</div>
<input type="text" name="incl_only" size="90" value="<?php echo $grab_parameters['xs_incl_only']?>">
<br><small>leave this field empty by default. Fill it if you would like to include into sitemap ONLY those URls that match the specified string, separate multiple matches with space.</small>
<br/>
<div class="inptitle">"Parse ONLY" URLs:</div>
<input type="text" name="parse_only" size="90" value="<?php echo $grab_parameters['xs_parse_only']?>">
<br><small>leave this field empty by default. Fill it if you would like to parse (crawl) ONLY those URls that match the specified string, separate multiple matches with space.</small>
<br/>
<br/><br/>
</div>
<h3 style="cursor:pointer" onclick="javascript:cDdos7BIlJ('configopt')" id="hconfigopt">[+] Crawler Limitations, Finetune (click to expand)</h3>
<div id="configopt">
<div class="inptitle">Maximum pages:</div>
<input type="text" name="max_pages" size="5" value="<?php echo $grab_parameters['xs_max_pages']?>">
<br /><small>
This will limit the number of pages crawled. You can enter "0" value for unlimited crawling. 
<?php 

$gOJkENRoH=true;
if($gOJkENRoH){ 
?>
<br />
<b style="color:red">THIS IS A TRIAL VERSION of sitemap generator, it will NOT index more than 500 pages</b>
<?php } ?>
</small>
<div class="inptitle">Maximum depth level:</div>
<input type="text" name="max_depth" size="5" value="<?php echo $grab_parameters['xs_max_depth']?>">
<small>"0" for unlimited</small>
<div class="inptitle">Maximum execution time, seconds:</div>
<input type="text" name="exec_time" size="5" value="<?php echo $grab_parameters['xs_exec_time']?>">
<small>"0" for unlimited</small>
<div class="inptitle">Maximum memory usage, MB:</div>
<input type="text" name="mem_limit" size="5" value="<?php echo $grab_parameters['xs_memlimit']?>">
<small>"0" for default. Note: might not work depending on the server configuration.</small>
<div class="inptitle">Save the script state, every X seconds:</div>
<input type="text" name="savestate_time" size="5" value="<?php echo $grab_parameters['xs_savestate_time']?>">
<small>this option allows to resume crawling operation if it was interrupted. "0" for no saves</small>
<div class="inptitle">Make a delay between requests, X seconds after each N requests:</div>
<input type="text" name="delay_ms" size="5" value="<?php echo $grab_parameters['xs_delay_ms']?>"> s
after each
<input type="text" name="delay_req" size="5" value="<?php echo $grab_parameters['xs_delay_req']?>"> requests
<br/><small>This option allows to reduce the load on your webserver. "0" for no delay</small>
</div>
<h3 style="cursor:pointer" onclick="javascript:cDdos7BIlJ('configopt2')" id="hconfigopt2">[+] Advanced Settings (click to expand)</h3>
<div id="configopt2">
<div class="inptitle">Extract meta description tag</div>
<input type="checkbox" name="metadesc" <?php echo $grab_parameters['xs_metadesc']?'checked':''?> id="inmetadesc"><label for="inmetadesc"> enable META descriptions</label>
<br /><small>Note: this option may significantly increase memory usage and is not recommended for larger sitemaps</small>
<div class="inptitle">Purge log records older than X days:</div>
<input type="text" name="purge" size="5" value="<?php echo $grab_parameters['xs_purgelogs']?>">
<div class="inptitle">Maximum referred pages to store (for broken links list):</div>
<input type="text" name="maxref" size="5" value="<?php echo $grab_parameters['xs_maxref']?>">
<br><small>this option increases memory usage</small>
<div class="inptitle">Use IP address for crawling:</div>
<input type="text" name="ipaddr" size="40" value="<?php echo $grab_parameters['xs_ipconnection']?>">
<br><small>Hint: SERVER[SERVER_ADDR] - <? echo $_SERVER['SERVER_ADDR']?></small>
<div class="inptitle">Use CURL extension for http requests:</div>
<input type="checkbox" name="usecurl" <?php echo $grab_parameters['xs_usecurl']?'checked':''?> id="curl1"><label for="curl1"> Use CURL extension</label>
<?
$Og4KRtb1cdnHxZIO89 = str_replace('|',' ',$grab_parameters['xs_cleanpar']);
?>
<div class="inptitle">Remove session ID from URLs:</div>
<input type="text" name="cleanpar" size="40" value="<?php echo $Og4KRtb1cdnHxZIO89?>">
<br />
<small>common session parameters (separate with spaces): PHPSESSID, sid, osCsid</small>
<div class="inptitle">Progress state storage type:</div>
<input type="radio" name="storage" value="serialize" id="stor01"<?php echo $grab_parameters['xs_dumptype']=='serialize'?' checked':''?>><label for="stor01"> serialize</label>
<input type="radio" name="storage" value="varexport" id="stor02"<?php echo $grab_parameters['xs_dumptype']!='serialize'?' checked':''?>><label for="stor02"> var_export</label>
<br />
<small>try to change this option in case of memory usage issues</small>
<div class="inptitle">Minimize script memory usage:</div>
<input type="checkbox" name="memsave" <?php echo $grab_parameters['xs_memsave']?'checked':''?> id="memsave1"><label for="memsave1"> use temporary files to store crawling progress</label>
<br />
<small>this option may significantly increase crawling time</small>
<div class="inptitle">Show debug output when crawling:</div>
<input type="checkbox" name="dbg" <?php echo $grab_parameters['xs_debug']?'checked':''?> id="dbg1"><label for="dbg1"> enable debug output</label>
<div class="inptitle">Check for new versions of sitemap generator:</div>
<input type="checkbox" name="checkver" <?php echo $grab_parameters['xs_checkver']?'checked':''?> id="checkver1"><label for="checkver1"> check for new versions</label>
<div class="inptitle">Detect canonical URL meta tags:</div>
<input type="checkbox" name="canonical" <?php echo $grab_parameters['xs_canonical']?'checked':''?> id="can1"><label for="can1"> enable canonical URLs</label>
<div class="inptitle">Enable last-modification time tag for "not parsed" URLs:</div>
<input type="checkbox" name="lmnp" <?php echo $grab_parameters['xs_lastmod_notparsed']?'checked':''?> id="lmnp1"><label for="lmnp1"> enable last-mod for "not parsed" URLs</label>
<br />
<small>additional HTTP HEAD requests are required in this case</small>
</div>
<div class="inptitle">
<input class="button" type="submit" name="save" value="Save" style="width:150px;height:30px">
</div>
</form>
<script language="Javascript">
<!--
function cDdos7BIlJ(eid)
{
var gel = document.getElementById(eid);
var isvis = gel.style.display;
gel.style.display = isvis ? '' : 'none';
var th = document.getElementById('h'+eid);
if(th)
{
th.innerHTML = (isvis ? '[-]' : '[+]')+th.innerHTML.substring(3, 100);
}
}
cDdos7BIlJ('configopt');
cDdos7BIlJ('configopt2');
cDdos7BIlJ('configattr');


//-->
</script>
</div>
<?php
include ZR1vtYkW3IIT6ji.'page-bottom.inc.php';
?>