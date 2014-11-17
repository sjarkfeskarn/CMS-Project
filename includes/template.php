<?php

require_once('core.php');

class cmsTemplate extends cmsCore {

    var $templateName = 'default';
    var $modulePositions = array();

    function show() {
        require_once($this->getCurrentTemplatePath().'index.php');
    }
    function getCurrentTemplatePath() {
        return 'templates/'.$this->templateName.'/';
    }
    function setTemplate($templateName) {
        $this->templateName=$templateName;
    }
    function comSwitch() {
        $component=(isset($_REQUEST['com']))?$_REQUEST['com']:'feed';
        require_once('components/'.$component.'/'.$component.'.php');
        $com=new $component();
        $com->main();
    }
    function module($position='default') {
        if(!empty($this->modulePositions[$position])) {
            $modules=$this->modulePositions[$position];
            foreach($modules as $moduleName) {
                require_once('modules/'.$moduleName.'/'.$moduleName.'.php');
                $moduleclass=ucfirst($moduleName).'Module';
                $module=new $moduleclass();
                $module->display($moduleName);
            }
        }
    }
    function setModule($position, $moduleName) {
        if(empty($this->modulePositions[$position])) {
            $this->modulePositions[$position]=array($moduleName);
        }
        else {
            array_push($this->modulePositions[$position],$moduleName);
        }
    }
}