<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/02/2016
 * Time: 16:27
 */
namespace Vaivez66\FirstCapsPE;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;

class FirstCapsListener implements Listener{

    public function __construct(FirstCaps $plugin){
        $this->plugin = $plugin;
    }

    /**
     * @param PlayerChatEvent $event
     */

    public function onChat(PlayerChatEvent $event){
        $msg = $event->getMessage();
        if($msg{0} !== '/'){
            $msg{0} = strtoupper($msg{0});
            if(strpos($msg, '.') == true && $msg{strpos($msg, '.') + 1} == ' '){
                $msg{strpos($msg, '.') + 2} = strtoupper($msg{strpos($msg, '.') + 2});
            }
            $event->setMessage($msg);
        }
    }

}
