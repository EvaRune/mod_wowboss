<?php

class LegionRaid
{
    private $_id = null;
    private $_name = null;
    private $_bosslist = array();
    private $_img = null;
    private $_imggrey = null;
    private $_expview = null;

    public function __construct( array $opts ) {
        $this->_id = $opts["id"];
        $this->_name = $opts["name"];
        $this->_bosslist = $opts["bosslist"];
        $this->_img = $opts["mediaurl"] . "raids/" . $opts["id"] . ".jpg";
        $this->_imggrey = $opts["mediaurl"] . "raids/" . $opts["id"] . "-grey.jpg";
        if ($opts["expview"] == "yes")
            $this->_expview = "toggled";
        $this->_SetBossesImg($opts["mediaurl"]);
    }
    
    public function getId(){return $this->_id;}
    public function getName(){return $this->_name;}
    public function getBossList(){return $this->_bosslist;}
    public function getImg(){return $this->_img;}
    public function getImgGrey(){return $this->_imggrey;}
    public function getExpView(){return $this->_expview;}

    private function _NormalCount() {
        $normal = 0;
        
        foreach ($this->_bosslist as $boss)
        {
            if ($boss->getStatus() == "normal")
                $normal++;
        }
        
        return $normal;
    }

    private function _HeroicCount() {
        $heroic = 0;
        
        foreach ($this->_bosslist as $boss)
        {
            if ($boss->getStatus() == "heroic")
                $heroic++;
        }
        
        return $heroic;
    }

    private function _MythicCount() {
        $mythic = 0;
        
        foreach ($this->_bosslist as $boss)
        {
            if ($boss->getStatus() == "mythic")
                $mythic++;
        }
        
        return $mythic;
    }
    
    private function _SetBossesImg($url)
    {
        foreach ($this->_bosslist as $boss)
            $boss->SetBossImg($url, $this->_id);
    }

    public function BossCount() {
        $total = count($this->_bosslist);
        $normal = ($this->_NormalCount() / $total * 100);
        $heroic = ($this->_HeroicCount() / $total * 100);
        $mythic = ($this->_MythicCount() / $total * 100);
            
        return array(
            "normal" => $normal + $heroic + $mythic,
            "heroic" => $heroic + $mythic,
            "mythic" => $mythic
        );
    }

}


?>