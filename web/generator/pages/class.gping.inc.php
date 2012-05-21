<?php
class GPing
{
function JAdjWDjZI($EE3JSA0ZP1y1fXkP)
{
global $NR3tQ8cMptFBaNs2;
for($i=0;$i<count($EE3JSA0ZP1y1fXkP);$i++)
{

$VXo6vuQzCR = 'http://www.google.com/webmasters/tools/ping?sitemap='.urlencode($EE3JSA0ZP1y1fXkP[$i]);
$NR3tQ8cMptFBaNs2->fetch($VXo6vuQzCR);
$MI4fNXKFtPGYv = 'http://search.yahooapis.com/SiteExplorerService/V1/ping?sitemap='.urlencode($EE3JSA0ZP1y1fXkP[$i]);
$NR3tQ8cMptFBaNs2->fetch($MI4fNXKFtPGYv);
$MI4fNXKFtPGYv = 'http://submissions.ask.com/ping?sitemap='.urlencode($EE3JSA0ZP1y1fXkP[$i]);
$NR3tQ8cMptFBaNs2->fetch($MI4fNXKFtPGYv);
$MI4fNXKFtPGYv = 'http://api.moreover.com/ping?u='.urlencode($EE3JSA0ZP1y1fXkP[$i]);
$NR3tQ8cMptFBaNs2->fetch($MI4fNXKFtPGYv);
$MI4fNXKFtPGYv = 'http://webmaster.live.com/ping.aspx?siteMap='.urlencode($EE3JSA0ZP1y1fXkP[$i]);
$NR3tQ8cMptFBaNs2->fetch($MI4fNXKFtPGYv);
$MI4fNXKFtPGYv = 'http://www.bing.com/webmaster/ping.aspx?siteMap='.urlencode($EE3JSA0ZP1y1fXkP[$i]);
$NR3tQ8cMptFBaNs2->fetch($MI4fNXKFtPGYv);
}
}
function vzNS8L4hV0RzWs($fGFFoS728V_xDAVeL,$y_id)
{
global $NR3tQ8cMptFBaNs2;
for($i=0;$i<count($EE3JSA0ZP1y1fXkP);$i++)
{
}
}
function G3iGwEa5RT3($PmrP6CUAfUY1eXGv5a4, $mHUAcr4HLXxz7, $IeJBGxA5o)
{
global $NR3tQ8cMptFBaNs2;
$x_query= '<?xml version="1.0"?'.'>
<methodCall>
<methodName>weblogUpdates.ping</methodName>
<params>
<param><value>' . $IeJBGxA5o . '</value></param>
<param><value>' . $mHUAcr4HLXxz7 . '/</value></param>
</params></methodCall>';
$fAd6l0J5ko7BH6Qi= preg_split('#[\r\n]+#', $PmrP6CUAfUY1eXGv5a4);
foreach($fAd6l0J5ko7BH6Qi as $_u)
{
$Mlhn1ezi1gustxzh = $NR3tQ8cMptFBaNs2->fetch($_u, 0, false, false, $x_query);
}
}
}
$ZpnMGut2T = new GPing();
?>