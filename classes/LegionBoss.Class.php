<?php

class LegionBoss
{
    private $_id = null;
    private $_name = null;
    private $_status = "undefeated";
    private $_bossimg = null;
    private $_bosslink = null;

    public function __construct( array $opts ){
        $this->_id = $opts["id"];
        $this->_name = $opts["name"];
        $this->_status = $opts["status"];
        $this->_bosslink = $opts["bosslink"];
    }
    
    public function getId(){return $this->_id;}
    public function getName(){return $this->_name;}
    public function getStatus(){return $this->_status;}
    public function getImg(){return $this->_bossimg;}

    public function GetStatusLabel() {

        switch($this->_status) {
            case "undefeated":
                return JText::_('MOD_WOWBOSS_UNDEFEATED');
                break;

            case "normal":
                return JText::_('MOD_WOWBOSS_NORMAL');
                break;

            case "heroic":
                return JText::_('MOD_WOWBOSS_HEROIC');
                break;

            case "mythic":
                return JText::_('MOD_WOWBOSS_MYTHIC');
                break;
        }

    }
    
    public function SetBossImg($url, $raid)
    {
        $img = null;
        if ($this->_status == "undefeated")
            $img = $this->_id . "-grey.jpg";
        else
            $img = $this->_id . ".jpg";
        $this->_bossimg  = $url . $raid . "/" . $img;
    }
    
    public function OpeningTag() {
        if ($this->_bosslink == null)
            return "<div class='bosslink'>";
        else
            return "<a class='bosslink' href='" . $this->_bosslink . "' title='" . $this->_bosslink . "'>";
    }
    
    public function ClosingTag() {
        if ($this->_bosslink == null)
            return "</div>";
        else
            return "</a>";
    }

}

?>