<?php

namespace OxidCommunity\DevutilsMetadata\Module;

class Module extends Module_parent {
    /** TODO: prüfen, warum ein Modul nicht geladen werden konnte. Pfad falsch, Berechtigung fehlt. etc */
    public function load($sModuleId) {
        $sModulePath = $this->getModuleFullPath($sModuleId);
        $sMetadataPath = $sModulePath . "/metadata.php";
        if (!$sModulePath) die("lel");
        if (!file_exists($sMetadataPath)) die("lel");
        if (!is_readable($sMetadataPath)) die("lel");

        return parent::load($sModuleId);

    }

}