<?php

/* WOW BOSS MODULE - LEGION EDITION - 7.2.5 
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
        $document->addScript("https://code.jquery.com/jquery-3.2.1.min.js");
   }
} else {
    JHtml::_('jquery.framework');
}

// Loading JS
$document->addScript(JURI::base() .'/media/mod_wowboss_legion/js/mod_wowboss_legion.js');


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


if ($params->get('trial') == "show"){
    
    // Trial of Valor
    $trialbosses = array (
        new LegionBoss (
            array(
                "id" => "odyn",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ODYN'),
                "status" => $params->get('odyn'),
                "bosslink" => $params->get('odynlink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "guarm",
                "name" => JText::_('MOD_WOWBOSS_LEGION_GUARM'),
                "status" => $params->get('guarm'),
                "bosslink" => $params->get('guarmlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "helya",
                "name" => JText::_('MOD_WOWBOSS_LEGION_HELYA'),
                "status" => $params->get('helya'),
                "bosslink" => $params->get('helyalink')
            )
        )
    );
    
    $trial = new LegionRaid(
        array(
            "id" => "trial",
            "name" => JText::_('MOD_WOWBOSS_LEGION_TRIAL'),
            "expview" => $params->get('trial-expview'),
            "bosslist" => $trialbosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $trial);
    
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


if ($params->get('sargeras') == "show"){
    
    // Tomb Of Sargeras
    $sargerasbosses = array (
        new LegionBoss (
            array(
                "id" => "goroth",
                "name" => JText::_('MOD_WOWBOSS_LEGION_GOROTH'),
                "status" => $params->get('goroth'),
                "bosslink" => $params->get('gorothlink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "demonicinquisition",
                "name" => JText::_('MOD_WOWBOSS_LEGION_DEMONICINQUISITION'),
                "status" => $params->get('demonicinquisition'),
                "bosslink" => $params->get('demonicinquisitionlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "harjatan",
                "name" => JText::_('MOD_WOWBOSS_LEGION_HARJATAN'),
                "status" => $params->get('harjatan'),
                "bosslink" => $params->get('harjatanlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "sistersofthemoon",
                "name" => JText::_('MOD_WOWBOSS_LEGION_SISTERSOFTHEMOON'),
                "status" => $params->get('sistersofthemoon'),
                "bosslink" => $params->get('sistersofthemoonlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "mistresssasszine",
                "name" => JText::_('MOD_WOWBOSS_LEGION_MISTRESSSASSZINE'),
                "status" => $params->get('mistresssasszine'),
                "bosslink" => $params->get('mistresssasszinelink')
            )
        ),  
        new LegionBoss (
            array(
                "id" => "desolatehost",
                "name" => JText::_('MOD_WOWBOSS_LEGION_DESOLATEHOST'),
                "status" => $params->get('desolatehost'),
                "bosslink" => $params->get('desolatehostlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "maidenofvigilance",
                "name" => JText::_('MOD_WOWBOSS_LEGION_MAIDENOFVIGILANCE'),
                "status" => $params->get('maidenofvigilance'),
                "bosslink" => $params->get('maidenofvigilancelink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "fallenavatar",
                "name" => JText::_('MOD_WOWBOSS_LEGION_FALLENAVATAR'),
                "status" => $params->get('fallenavatar'),
                "bosslink" => $params->get('fallenavatarlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "kiljaeden",
                "name" => JText::_('MOD_WOWBOSS_LEGION_KILJAEDEN'),
                "status" => $params->get('kiljaeden'),
                "bosslink" => $params->get('kiljaedenlink')
            )
        )
    );
    
    $sargeras = new LegionRaid(
        array(
            "id" => "sargeras",
            "name" => JText::_('MOD_WOWBOSS_LEGION_SARGERAS'),
            "expview" => $params->get('sargeras-expview'),
            "bosslist" => $sargerasbosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $sargeras);
    
}


if ($params->get('antorus') == "show"){
    
    // Antorus
    $antorusbosses = array (
        new LegionBoss (
            array(
                "id" => "garothi",
                "name" => JText::_('MOD_WOWBOSS_LEGION_GAROTHI'),
                "status" => $params->get('garothi'),
                "bosslink" => $params->get('garothilink'),
            )
        ),
        new LegionBoss (
            array(
                "id" => "felhounds",
                "name" => JText::_('MOD_WOWBOSS_LEGION_FELHOUNDS'),
                "status" => $params->get('felhounds'),
                "bosslink" => $params->get('felhoundslink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "highcommand",
                "name" => JText::_('MOD_WOWBOSS_LEGION_HIGH_COMMAND'),
                "status" => $params->get('highcommand'),
                "bosslink" => $params->get('highcommandlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "hasabel",
                "name" => JText::_('MOD_WOWBOSS_LEGION_HASABEL'),
                "status" => $params->get('hasabel'),
                "bosslink" => $params->get('hasabellink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "eonar",
                "name" => JText::_('MOD_WOWBOSS_LEGION_EONAR'),
                "status" => $params->get('eonar'),
                "bosslink" => $params->get('eonarlink')
            )
        ),  
        new LegionBoss (
            array(
                "id" => "imonar",
                "name" => JText::_('MOD_WOWBOSS_LEGION_IMONAR'),
                "status" => $params->get('imonar'),
                "bosslink" => $params->get('imonarlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "kingaroth",
                "name" => JText::_('MOD_WOWBOSS_LEGION_KINGAROTH'),
                "status" => $params->get('kingaroth'),
                "bosslink" => $params->get('kingarothlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "varimathras",
                "name" => JText::_('MOD_WOWBOSS_LEGION_VARIMATHRAS'),
                "status" => $params->get('varimathras'),
                "bosslink" => $params->get('varimathraslink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "shivarra",
                "name" => JText::_('MOD_WOWBOSS_LEGION_SHIVARRA'),
                "status" => $params->get('shivarra'),
                "bosslink" => $params->get('shivarralink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "aggramar",
                "name" => JText::_('MOD_WOWBOSS_LEGION_AGGRAMAR'),
                "status" => $params->get('aggramar'),
                "bosslink" => $params->get('aggramarlink')
            )
        ),
        new LegionBoss (
            array(
                "id" => "argus",
                "name" => JText::_('MOD_WOWBOSS_LEGION_ARGUS'),
                "status" => $params->get('argus'),
                "bosslink" => $params->get('arguslink')
            )
        )
    );
    
    $antorus = new LegionRaid(
        array(
            "id" => "antorus",
            "name" => JText::_('MOD_WOWBOSS_LEGION_ANTORUS'),
            "expview" => $params->get('antorus-expview'),
            "bosslist" => $antorusbosses,
            "mediaurl" => $module_media_url
        )
    );
    
    array_push($raids, $antorus);
    
}

require( JModuleHelper::getLayoutPath('mod_wowboss_legion'));


?>