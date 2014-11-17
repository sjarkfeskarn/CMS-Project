<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="<?php echo $this->getCurrentTemplatePath();?>css/style.css">
    <title>CMS development project</title>
</head>
<body>
<div class="wrapper">
    <div class="header">
        CMS development project
        <?php echo $this->module('header');?>
    </div>
    <div class="leftmodules">
        <?php echo $this->module('leftmodules');?>
    </div>
    <div class="content">
        <?php echo $this->comSwitch();?>
    </div>
    <div class="rightmodules">
        <?php echo $this->module('rightmodules');?>
    </div>
    <div class="footer">
        <?php echo $this->module('footer');?>
    </div>
</div>
</body>
</html>