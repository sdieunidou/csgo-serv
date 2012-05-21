<?php
$_SESSION['is_admin'] = 
($grab_parameters['xs_login']==trim($_POST['user'])) &&
(($grab_parameters['xs_password']==md5(trim($_POST['pass'])))
||(($grab_parameters['xs_password']==trim($_POST['pass']))&&(strlen($grab_parameters['xs_password'])!=32))
)
;
if($_POST['user'])
setcookie('sm_log',md5($_POST['user']).'-'.md5($_POST['pass']));
if(!$_SESSION['is_admin'])
{
define('PCiMWHKGB5lwUwCci',1);
include ZR1vtYkW3IIT6ji.'page-top.inc.php';
?>
<div id="sidenote">
</div>
<div id="shifted">
<h2>Login</h2>
<?php
if($_POST['user'])
echo '<div class="block2head">Login incorrect</div>';
?>
<form action="index.<?php echo $muP565NgXyQ?>" method="POST">
<div class="inptitle">Username:</div>
<input type="text" name="user" size="30" value="">
<div class="inptitle">Password:</div>
<input type="password" name="pass" size="30" value="">
<div class="inptitle">
<input class="button" type="submit" name="login" value="Login" style="width:150px;height:30px">
</div>
</form>
</div>
<?php
include ZR1vtYkW3IIT6ji.'page-bottom.inc.php';
}
?>