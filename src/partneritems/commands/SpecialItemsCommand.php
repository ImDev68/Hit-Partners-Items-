<?php

namespace partneritems\commands;

use partneritems\items\InventoryAbility;
use partneritems\items\MedusaAbility;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\lang\Translatable;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class SpecialItemsCommand extends Command
{
  public function __construct()
   {

        parent::__construct("item", "Partner Item Main Command");
  }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player){
            if(!$sender->HasPermission("pi.command.use")) {
            } else {
            $sender->sendMessage(TextFormat::colorize("§cYou don't have permission to use this command"));
            return;
        }
        if(!isset($args[0])) {
          $sender->sendMessage(TextFormat::colorize("------------------------------------------"));
          $sender->sendMessage(TextFormat::colorize("§eAuthor: §fImDev68 & §0Legacy Devs"));
          $sender->sendMessage(TextFormat::colorize("§e/pi all §f- To give all the Partner Items"));
          //$sender->sendMessage(TextFormat::colorize("§e/pi npc §f- To spawn the Partner Items npc"));
          $sender->sendMessage(TextFormat::colorize("------------------------------------------"));
          return;
        }
        switch ($args[0]){
                case "all":
                    $sender->getInventory()->addItem(new InventoryAbility());
                    $sender->getInventory()->addItem(new MedusaAbility());
                   // $sender->sendMessage(TE::RED."❤️".TE::GOLD."You Recibe al the Partneritems");
                    break;
            }
        }
    }
}
