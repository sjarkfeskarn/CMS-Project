<?php

require_once('includes/template.php');

$tmpl=new cmsTemplate();
$tmpl->setModule('rightmodules','hello');
$tmpl->show();