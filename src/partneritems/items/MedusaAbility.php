<?php

namespace partneritems\items;

use pocketmine\item\Item;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ItemIds;
use pocketmine\utils\TextFormat;

class MedusaAbility extends Item {
  
  public function __construct(string $name = "§r§a§lMedusa Ability")
    {
        parent::__construct(new ItemIdentifier(ItemIds::VINES, 0), $name);
        $this->setCustomName($name);
        $this->setLore([TextFormat::colorize("§r§7Hit your enemy and turn him to stone! for 5 seconds\n\n§r§7Found in §dstore.astralmcpe.cc")]);
    }

}