<?php

$week = new DateTime('+1 week');
setcookie('key','value',$week->getTimestamp(),'/',null,null,true);

echo $_COOKIE['key'];
