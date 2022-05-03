<?php

namespace partneritems;

use partneritems\items\SpecialItems;
use partneritems\commands\SpecialItemsCommand;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener 
{
  
  public function onEnable(): void{
    
       $this->getServer()->getPluginManager()->registerEvents(new SpecialItems($this), $this);
    
        $this->getLogger()->info("§7* §ePartner Items Enabled");
 
        $this->getServer()->getCommandMap()->register("items", new SpecialItemsCommand());
    }
}
?>
