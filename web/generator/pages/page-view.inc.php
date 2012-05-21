<?php
include ZR1vtYkW3IIT6ji.'page-top.inc.php';
?>
<div id="sidenote">
<?php
include ZR1vtYkW3IIT6ji.'page-sitemap-detail.inc.php';
?>
</div>
<div id="shifted">
<h2>View Sitemap</h2>
<div class="inptitle">HTML SiteMap </div>
<h4><a href="<?php echo $grab_parameters['htmlurl']?>"><?php echo $grab_parameters['htmlurl']?></a></h4>
<div class="inptitle">Text SiteMap </div>
<h4><a href="<?php echo a_swOP2hskJvhpi2o.$ZKHrdYpZx7xJpCetjV;?>"><?php echo $grab_parameters['xs_sm_text_url']?'':$VhnoUcNFi9Q.'/'?><?php echo a_swOP2hskJvhpi2o.$ZKHrdYpZx7xJpCetjV;?></a></h4>
<div class="inptitle">ROR SiteMap </div>
<h4><a href="<?php echo u3Aj3kpP8f7NX;?>"><?php echo u3Aj3kpP8f7NX;?></a></h4>
<!--<div class="inptitle">Google Base Feed (RSS)</div>
<h4><a href="<?php echo duBMhqfH7kGKH.$ZKHrdYpZx7xJpCetjV;?>"><?php echo $NoWmBUTFvN7kzhyn0o.'/'?><?php echo duBMhqfH7kGKH.$ZKHrdYpZx7xJpCetjV;?></a></h4>
-->
<?php for($i=0;$i<count($qcHvzZE_cTnCJcmS['files']);$i++){
$WahZM9_a7TpWjlRj1kd = $qcHvzZE_cTnCJcmS['files'][$i];
$fl = T_IVB6tYAThxWS.basename($WahZM9_a7TpWjlRj1kd);
$z8VNwWnfpJY = $i==0 && count($qcHvzZE_cTnCJcmS['files'])>1;
$gf9IrCETA_riIl = strstr($fl,'.gz')?implode('',gzfile($fl)):o5dbZtmDCSktjDlJt3($fl);
?>
<div class="inptitle"><?php echo $i+1?>. XML SiteMap <?php echo $z8VNwWnfpJY?'Index':'File'?></div>
<h4><a href="<?php echo $WahZM9_a7TpWjlRj1kd?>"><?php echo $WahZM9_a7TpWjlRj1kd?></a>
</h4>
<textarea style="width:100%;height:300px"><?php echo htmlspecialchars($gf9IrCETA_riIl)?></textarea>
<?php }?>
</div>
<?php
include ZR1vtYkW3IIT6ji.'page-bottom.inc.php';
?>