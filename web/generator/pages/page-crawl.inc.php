<?php
include ZR1vtYkW3IIT6ji.'page-top.inc.php';
$b5bOuoZcPCglzF = $_REQUEST['crawl'];
if($_GET['act']=='interrupt'){
yvOIe0tV6y4KcO0aLl(fM0qQkSagz_,'');
echo '<h2>The "stop" signal has been sent to a crawler.</h2><a href="index.'.$muP565NgXyQ.'?op=crawl">Return to crawler page</a>';
}else
if(file_exists($fn=T_IVB6tYAThxWS.iK6zN3FNMZ)&&(time()-filemtime($fn)<10*60)){
$gf8uLIiBMWIqzFaD0=true;
$b5bOuoZcPCglzF = 1;
}
if($b5bOuoZcPCglzF){
if($gf8uLIiBMWIqzFaD0)
echo '<h4>Crawling already in progress.<br/>Last log access time: '.date('Y-m-d H:i:s',@filemtime($fn)).'<br><small><a href="index.'.$muP565NgXyQ.'?op=crawl&act=interrupt">Click here</a> to interrupt it.</small></h4>';
else {
echo '<h4>Please wait. Sitemap generation in progress...</h4>';
if($_POST['bg'])
echo '<div class="block2head">Please note! The script will run in the background until completion, even if browser window is closed.</div>';
}
?>
<iframe id="cproc" style="width:100%;height:300px;border:0px" frameborder=0 src="index.<?php echo $muP565NgXyQ?>?op=crawlproc&bg=<?php echo $_POST['bg']?>&resume=<?php echo $_POST['resume']?>"></iframe>
<div id="runlog" style="overflow:auto;height:100px;display:none;"></div>
<?php
}else
if(!$wNuDcYNWIWQ)
{
?>
<div id="sidenote">
<?php
include ZR1vtYkW3IIT6ji.'page-sitemap-detail.inc.php';
?>
</div>
<div id="shifted">
<h2>Crawling</h2>
<form action="index.<?php echo $muP565NgXyQ?>" method="POST">
<input type="hidden" name="op" value="crawl">
<div class="inptitle">Run in background</div>
<input type="checkbox" name="bg" value="1" id="in1"><label for="in1"> Do not interrupt the script even after closing the browser window until the crawling is complete</label>
<?php if(@file_exists(T_IVB6tYAThxWS.bZ3jbCz403O1HU)){
$qavYsvb7U31aFIKJR = @K5kCC5JoHjozL(o5dbZtmDCSktjDlJt3(T_IVB6tYAThxWS.bZ3jbCz403O1HU));
?>
<div class="inptitle">Resume last session</div>
<input type="checkbox" name="resume" value="1" id="in2"><label for="in2"> Continue the interrupted session 
(<?php echo date('Y-m-d H:i:s',filemtime(T_IVB6tYAThxWS.bZ3jbCz403O1HU))?>, 
URLs added: <?php echo count($qavYsvb7U31aFIKJR['urls_completed'])?>, 
estimated URLs left in a queue: <?php echo count($qavYsvb7U31aFIKJR['urls_list'])?>)</label>
<?php	
}
?>
<div class="inptitle">Click button below to start crawl manually:</div>
<div class="inptitle">
<input class="button" type="submit" name="crawl" value="Run" style="width:150px;height:30px">
</div>
</form>
<h2>Cron job setup</h2>
You can use the following command line to setup the cron job for sitemap generator:
<div class="inptitle">/usr/local/bin/php <?php echo dirname(dirname(__FILE__)).'/runcrawl.php'?></div>
</div>
<?php
}
include ZR1vtYkW3IIT6ji.'page-bottom.inc.php';
?>