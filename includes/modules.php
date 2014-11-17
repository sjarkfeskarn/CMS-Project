<?php

require_once('core.php');

class cmsModules extends cmsCore {

    var $modulePath = '';
    var $moduleName = '';

    function setModulePath($moduleName) {
        $this->modulePath='modules/'.$moduleName.'/';
        $this->moduleName = $moduleName;
    }
    function getModulePath() {
        return $this->modulePath;
    }
    function display() {
        echo 'this is the default module output';
    }
    function main($moduleName) {
        $this->setModulePath($moduleName);
        $this->display();
    }
}