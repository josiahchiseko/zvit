<?php

function plugin_init_zvitambotheme() {
   global $PLUGIN_HOOKS;

   $PLUGIN_HOOKS['csrf_compliant']['zvitambotheme'] = true;
   $PLUGIN_HOOKS['add_css']['zvitambotheme'] = 'css/zvitambo.css';
}

function plugin_version_zvitambotheme() {
   return [
      'name'           => 'Zvitambo Theme',
      'version'        => '1.0.0',
      'author'         => 'Zvitambo',
      'license'        => 'GPLv3+',
      'homepage'       => '',
      'requirements'   => [
         'glpi' => [
            'min' => '10.0.0',
            'max' => '12.0.0',
         ],
      ],
   ];
}

function plugin_zvitambotheme_check_prerequisites() {
   return true;
}

function plugin_zvitambotheme_check_config() {
   return true;
}
