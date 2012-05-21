<?php
class xo0udckpFXrAUXdkHB
{
var $IeJBGxA5o = 'Mobile XML Sitemap';
var $Kd9n5bwrnd17vZn9U = 'It will be stored in the same folder as XML sitemap, but with different filename: mobilesitemap.xml';
var $XvaJJE34XW = 'xs_makemob';
var $XSgHgDDEhTbwopK_PT = '';
var $yyuArjDKyaNkyzyG = '', $KpqQMAo204oEII = '', $SJVuJqcL0 = false, 
$iXAnAfz9BKumhGLM = array(), $hyyNGONNnZBD1i = array(), $LJci6KwBdfosP9p = '', $gs4Fbubikm9UoY = 0;
function xo0udckpFXrAUXdkHB($hyyNGONNnZBD1i)
{
$this->SJVuJqcL0 = $hyyNGONNnZBD1i[$this->XvaJJE34XW];
$ZKHrdYpZx7xJpCetjV = $hyyNGONNnZBD1i['xs_compress'] ? '.gz' : '';
$this->yyuArjDKyaNkyzyG = preg_replace('#[^\\/]+?\.xml$#', 'mobilesitemap.xml', $hyyNGONNnZBD1i['xs_smname']).$ZKHrdYpZx7xJpCetjV;
$this->KpqQMAo204oEII  = preg_replace('#[^\\/]+?\.xml$#', 'mobilesitemap.xml', $hyyNGONNnZBD1i['xs_smurl']).$ZKHrdYpZx7xJpCetjV;
}
function is47wof6ySSG()
{
if(
$this->SJVuJqcL0 && 
!is_writable($this->yyuArjDKyaNkyzyG) && !is_writable(dirname($this->yyuArjDKyaNkyzyG))
)
return '<br>Sitemap file is not writable: <b>'.$this->yyuArjDKyaNkyzyG.'</b>';
}
function vPMSF5pieFsrixtq8t($hyyNGONNnZBD1i, $iXAnAfz9BKumhGLM, $LJci6KwBdfosP9p)
{
global $VhnoUcNFi9Q;
if(!$this->SJVuJqcL0) return;
$this->iXAnAfz9BKumhGLM = $iXAnAfz9BKumhGLM;
$this->hyyNGONNnZBD1i = $hyyNGONNnZBD1i;
$this->LJci6KwBdfosP9p = $LJci6KwBdfosP9p;
$J0guAv8GXYn6AN38fxM = implode('', file(Niq61B3f5T.'sitemap_mob_tpl.xml'));
preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $J0guAv8GXYn6AN38fxM, $this->XSgHgDDEhTbwopK_PT);
$this->XSgHgDDEhTbwopK_PT[1] = str_replace('%GEN_URL%', $VhnoUcNFi9Q.'/', $this->XSgHgDDEhTbwopK_PT[1]);
$this->pf = $this->iXAnAfz9BKumhGLM['fopen']($this->yyuArjDKyaNkyzyG.$this->ZKHrdYpZx7xJpCetjV, 'w');
$rc = str_replace('%INIT_URL%', $hyyNGONNnZBD1i['xs_initurl'], $this->XSgHgDDEhTbwopK_PT[1]);
$this->iXAnAfz9BKumhGLM['fwrite']($this->pf, $rc);
}
function ZdD16fdro7T29($Y6Sv9w6omZ)
{
if(!$this->SJVuJqcL0) return;
if($this->gs4Fbubikm9UoY>=50000)return;
$this->gs4Fbubikm9UoY++;
$this->iXAnAfz9BKumhGLM['fwrite']($this->pf, $this->LJci6KwBdfosP9p->FTZnv5MP3HN($this->XSgHgDDEhTbwopK_PT[2], $Y6Sv9w6omZ));
}
function h2yh1SOcTUdL4()
{
if(!$this->SJVuJqcL0) return;
$this->iXAnAfz9BKumhGLM['fwrite']($this->pf, $this->XSgHgDDEhTbwopK_PT[3]);
$this->iXAnAfz9BKumhGLM['fclose']($this->pf);
}
}
global $sm_proc_list, $grab_parameters;
$sm_proc_list[] = new xo0udckpFXrAUXdkHB($grab_parameters);
?>