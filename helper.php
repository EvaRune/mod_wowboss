<?php

class ModWoWBossLegionHelper
{

    static function settings( $params )
    {
        jimport('joomla.application.module.helper');

        // Loading CSS
        JHtml::stylesheet('mod_wowboss_legion/mod_wowboss_legion.css', array(), true);
        JHtml::stylesheet('mod_wowboss_legion/mod_wowboss_legion_custom.css', array(), true);
        
        $document = JFactory::getDocument();
           
    }

}

// Include classes
require_once( dirname(__FILE__) . '/classes/LegionRaid.Class.php' );
require_once( dirname(__FILE__) . '/classes/LegionBoss.Class.php' );
?>