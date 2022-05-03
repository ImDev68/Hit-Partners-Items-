<?php

namespace partneritems\items;

use pocketmine\item\Item;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ItemIds;
use pocketmine\utils\TextFormat;

class InventoryAbility extends Item {
  
  public function __construct(string $name = "§r§b§lInventory Clogger")
    {
        parent::__construct(new ItemIdentifier(ItemIds::FIRE_CHARGE, 0), $name);
        $this->setCustomName($name);
        $this->setLore([TextFormat::colorize("§r§7Hit your enemy to fill their inventory with wooden pickaxes\n\n§r§7Found in §dstore.astralmcpe.cc")]);
    }

}