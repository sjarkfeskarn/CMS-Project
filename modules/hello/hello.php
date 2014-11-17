<?php
require_once('includes/modules.php');

class helloModule extends cmsModules {
    function display() {
        echo 'display override';
    }
}