<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/02/2016
 * Time: 16:22
 */
namespace Vaivez66\FirstCapsPE;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TF;

class FirstCaps extends PluginBase{

    public function onEnable(){
        $this->getServer()->getLogger()->info(TF::GREEN . "FirstCapsPE is ready!");
        $this->getServer()->getPluginManager()->registerEvents(new FirstCapsListener($this), $this);
    }
    
    /**
     * @return array
     */

    public function getLastCharacter(){
        $a = ['.', '?', '!'];
        return $a;
    }

    public function onDisable(){
        $this->getServer()->getLogger()->info(TF::RED . "FirstCapsPE was disabled!");
    }

}
