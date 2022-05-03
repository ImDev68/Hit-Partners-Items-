<?php

namespace partneritems\items;

use pocketmine\item\Item;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ItemIds;
use pocketmine\utils\TextFormat;

class PrePearl extends Item {
  
  public function __construct(string $name = "§r§aPre Pearl")
    {
        parent::__construct(new ItemIdentifier(ItemIds::ENDER_PEARL, 0), $name);
        $this->setCustomName($name);
        $this->setLore([TextFormat::colorize("§r§7Right click this item to teleport aa the position where you activate it\n\n§r§7Found in §dstore.lunaria.gq")]);
    }

}