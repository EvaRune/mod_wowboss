<?php

/* WOW BOSS MODULE - LEGION EDITION - 7.0.0 
   ======================================== */
 
// no direct access
defined('_JEXEC') or die;

$document = JFactory::getDocument();

// Include the syndicate functions only once
require_once( dirname(__FILE__) . '/helper.php' );

// Base path for image assets
$module_media_url = JURI::base() . "media/" . $module->module . "/img/"; 

// Creating instance
$wblegion = ModWoWBossLegionHelper::settings($params);

//Require to provide the necessary class
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

// Checking joomla version version to see if jquery is needed
JLoader::import( 'joomla.version' );
$version = new JVersion();
if (version_compare( $version->RELEASE, '2.5', '<=')) {
    if ( $params->get('loadjquery') == "yes" ) {
        $document = JFactory::getDocument();
        $document->addScript("https://code.jquery.com/jquery-3.1.0.min.js");
   }
} else {
    JHtml::_('jquery.framework');
}

// Loading JS
JHtml::script('mod_wowboss_legion/mod_wowboss_legion.js', array(), true);


// Creating raids array
$raids = array();

if ($params->get('emerald') == "show"){
    
    // The Emerald Nightmare
    $emeraldbosses = array (
        new LegionBoss (
            array(
                "id" => "nythendra",
                "name" => JText::_('MOD_WOWBOSS_LEGION_NYTHENDRA'),
                "status" => $params->get('nythendra'),
                "bosslink" => $params->get('nythendralink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "renferal",
                "name" => JText::_('MOD_WOWBOSS_LEGION_RENFERAL'),
                "status" => $params->get('renferal'),
                "bosslink" => $params->get('renferallink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "ilgynoth",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ILGYNOTH'),
                "status" => $params->get('ilgynoth'),
                "bosslink" => $params->get('ilgynothlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "ursoc",
                "name" => JText::_('MOD_WOWBOSS_LEGION_URSOC'),
                "status" => $params->get('ursoc'),
                "bosslink" => $params->get('ursoclink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "dragons",
                "name" => JText::_('MOD_WOWBOSS_LEGION_DRAGONS'),
                "status" => $params->get('dragons'),
                "bosslink" => $params->get('dragonslink')
            )
        ),  
        new LegionBoss (
            array(
                "id" => "cenarius",
                "name" => JText::_('MOD_WOWBOSS_LEGION_CENARIUS'),
                "status" => $params->get('cenarius'),
                "bosslink" => $params->get('cenariuslink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "xavius",
                "name" => JText::_('MOD_WOWBOSS_LEGION_XAVIUS'),
                "status" => $params->get('xavius'),
                "bosslink" => $params->get('xaviuslink')
            )
        )
    );
    
    $emerald = new LegionRaid(
        array(
            "id" => "emerald",
            "name" => JText::_('MOD_WOWBOSS_LEGION_EMERALD'),
            "expview" => $params->get('emerald-expview'),
            "bosslist" => $emeraldbosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $emerald);
    
}

if ($params->get('nighthold') == "show"){
    
    // The Nighthold
    $nightholdbosses = array (
        new LegionBoss (
            array(
                "id" => "skorpyron",
                "name" => JText::_('MOD_WOWBOSS_LEGION_SKORPYRON'),
                "status" => $params->get('skorpyron'),
                "bosslink" => $params->get('skorpyronlink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "anomaly",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ANOMALY'),
                "status" => $params->get('anomaly'),
                "bosslink" => $params->get('anomalylink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "trilliax",
                "name" => JText::_('MOD_WOWBOSS_LEGION_TRILLIAX'),
                "status" => $params->get('trilliax'),
                "bosslink" => $params->get('trilliaxlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "aluriel",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ALURIEL'),
                "status" => $params->get('aluriel'),
                "bosslink" => $params->get('aluriellink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "telarn",
                "name" => JText::_('MOD_WOWBOSS_LEGION_TELARN'),
                "status" => $params->get('telarn'),
                "bosslink" => $params->get('telarnlink')
            )
        ),  
        new LegionBoss (
            array(
                "id" => "etraeus",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ETRAEUS'),
                "status" => $params->get('etraeus'),
                "bosslink" => $params->get('etraeuslink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "tichondrius",
                "name" => JText::_('MOD_WOWBOSS_LEGION_TICHONDRIUS'),
                "status" => $params->get('tichondrius'),
                "bosslink" => $params->get('tichondriuslink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "krosus",
                "name" => JText::_('MOD_WOWBOSS_LEGION_KROSUS'),
                "status" => $params->get('krosus'),
                "bosslink" => $params->get('krosuslink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "elisande",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ELISANDE'),
                "status" => $params->get('elisande'),
                "bosslink" => $params->get('elisandelink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "guldan",
                "name" => JText::_('MOD_WOWBOSS_LEGION_GULDAN'),
                "status" => $params->get('guldan'),
                "bosslink" => $params->get('guldanlink')
            )
        )
    );
    
    $nighthold = new LegionRaid(
        array(
            "id" => "nighthold",
            "name" => JText::_('MOD_WOWBOSS_LEGION_NIGHTHOLD'),
            "expview" => $params->get('nighthold-expview'),
            "bosslist" => $nightholdbosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $nighthold);
    
}

require( JModuleHelper::getLayoutPath('mod_wowboss_legion'));


?>