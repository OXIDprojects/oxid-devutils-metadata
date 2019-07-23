<?php

namespace OxidCommunity\DevutilsMetadata\Controller\Admin;

use OxidEsales\Eshop\Core\Module\Module;
use OxidCommunity\DevutilsCore\Core\DevUtils;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController;

class ModuleMetadata extends AdminDetailsController {
    protected $_sThisTemplate = 'devmodule_metadata.tpl';

    public function render() {
        $sModuleId = $this->getEditObjectId();
        $oModule = oxNew(Module::class);
        if ($sModuleId && $oModule->load($sModuleId)) {
            $this->addTplParam("oModule", $oModule);
        }
        return parent::render();
    }

    public function getModule() {
        $oModule = oxNew(Module::class);
        $id = $this->getEditObjectId();
        var_dump($id);
        if ($this->getEditObjectId() && $oModule->load($this->getEditObjectId())) return $oModule;
        return false;
    }

    /*
        public function render()
        {
            $ret = parent::render();
            $preview = Registry::getConfig()->getRequestParameter('preview');
            return ($preview) ? "dev_mails_preview.tpl" : $ret;
        }
        */

    public function aModuleFiles() {
        $cfg = Registry::getConfig();
        echo json_encode($cfg->getConfigParam("aModuleFiles"));
        exit;
    }

    public function aModuleTemplates() {
        $cfg = Registry::getConfig();
        echo json_encode($cfg->getConfigParam("aModuleTemplates"));
        exit;
    }

    public function aModulePaths() {
        $cfg = Registry::getConfig();
        echo json_encode($cfg->getConfigParam("aModulePaths"));
        exit;
    }

    public function aModuleVersions() {
        $cfg = Registry::getConfig();
        echo json_encode($cfg->getConfigParam("aModuleVersions"));
        exit;
    }

    public function aModuleEvents() {
        $cfg = Registry::getConfig();
        echo json_encode($cfg->getConfigParam("aModuleEvents"));
        exit;
    }
}