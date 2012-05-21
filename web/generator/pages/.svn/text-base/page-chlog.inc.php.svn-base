<?php
include ZR1vtYkW3IIT6ji.'page-top.inc.php';
$aPeIhzjYj6iZvV = V15cq9dPNt8iS8();
if($grab_parameters['xs_chlogorder'] == 'desc')
rsort($aPeIhzjYj6iZvV);
$D_ezG4BPksZTM79mUvk=$_GET['log'];
if($D_ezG4BPksZTM79mUvk){
?>
<div id="sidenote">
<div class="block1head">
Crawler logs
</div>
<div class="block1">
<?php
for($i=0;$i<count($aPeIhzjYj6iZvV);$i++){
$qcHvzZE_cTnCJcmS = @unserialize(o5dbZtmDCSktjDlJt3(T_IVB6tYAThxWS.$aPeIhzjYj6iZvV[$i]));
if($i+1==$D_ezG4BPksZTM79mUvk)echo '<u>';
?>
<a href="index.<?php echo $muP565NgXyQ?>?op=chlog&log=<?php echo $i+1?>" title="View details"><?php echo date('Y-m-d H:i',$qcHvzZE_cTnCJcmS['time'])?></a>
( +<?php echo count($qcHvzZE_cTnCJcmS['newurls'])?> -<?php echo count($qcHvzZE_cTnCJcmS['losturls'])?>)
</u>
<br>
<?php	}
?>
</div>
</div>
<?php
}
?>
<div id="shifted">
<h2>ChangeLog</h2>
<?php if($D_ezG4BPksZTM79mUvk){
$qcHvzZE_cTnCJcmS = @unserialize(o5dbZtmDCSktjDlJt3(T_IVB6tYAThxWS.$aPeIhzjYj6iZvV[$D_ezG4BPksZTM79mUvk-1]));
?><h4><?php echo date('j F Y, H:i',$qcHvzZE_cTnCJcmS['time'])?></h4>
<div class="inptitle">New URLs (<?php echo count($qcHvzZE_cTnCJcmS['newurls'])?>)</div>
<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars(implode("\n",$qcHvzZE_cTnCJcmS['newurls']))?></textarea>
<div class="inptitle">Removed URLs (<?php echo count($qcHvzZE_cTnCJcmS['losturls'])?>)</div>
<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars(implode("\n",$qcHvzZE_cTnCJcmS['losturls']))?></textarea>
<?php	
}else{
?>
<table>
<tr class=block1head>
<th>No</th>
<th>Date/Time</th>
<th>Total pages</th>
<th>Proc.time</th>
<th>Bandwidth</th>
<th>New URLs</th>
<th>Removed URLs</th>
<th>Broken links</th>
</tr>
<?php  $os8tVH12X=array();
for($i=0;$i<count($aPeIhzjYj6iZvV);$i++){
$qcHvzZE_cTnCJcmS = @unserialize(o5dbZtmDCSktjDlJt3(T_IVB6tYAThxWS.$aPeIhzjYj6iZvV[$i]));
if(!$qcHvzZE_cTnCJcmS)continue;
foreach($qcHvzZE_cTnCJcmS as $k=>$v)if(!is_array($v))$os8tVH12X[$k]+=$v;else $os8tVH12X[$k]+=count($v);
?>
<tr class=block1>
<td><?php echo $i+1?></td>
<td><a href="index.php?op=chlog&log=<?php echo $i+1?>" title="View details"><?php echo date('Y-m-d H:i',$qcHvzZE_cTnCJcmS['time'])?></a></td>
<td><?php echo number_format($qcHvzZE_cTnCJcmS['ucount'])?></td>
<td><?php echo number_format($qcHvzZE_cTnCJcmS['ctime'],2)?>s</td>
<td><?php echo number_format($qcHvzZE_cTnCJcmS['tsize']/1024/1024,2)?></td>
<td><?php echo count($qcHvzZE_cTnCJcmS['newurls'])?></td>
<td><?php echo count($qcHvzZE_cTnCJcmS['losturls'])?></td>
<td><?php echo count($qcHvzZE_cTnCJcmS['u404'])?></td>
</tr>
<?php }?>
<tr class=block1>
<th colspan=2>Total</th>
<th><?php echo number_format($os8tVH12X['ucount'])?></th>
<th><?php echo number_format($os8tVH12X['ctime'],2)?>s</th>
<th><?php echo number_format($os8tVH12X['tsize']/1024/1024,2)?> Mb</th>
<th><?php echo ($os8tVH12X['newurls'])?></th>
<th><?php echo ($os8tVH12X['losturls'])?></th>
<th>-</th>
</tr>
</table>
<?php }
?>
</div>
<?php
include ZR1vtYkW3IIT6ji.'page-bottom.inc.php';
?>