<?php

/*
* Editor: Skullex.. Skull3x
*/


namespace Dodgeball;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\block\BlockBreakEvent;


class Main extends PluginBase implements Listener{
  
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getLogger()->info(TextFormat::GREEN . "Dodgeball Minigame has been enabled successfully!");
    }
    
    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $name = $event->getPlayer()->getName();
        $player->sendMessage(TextFormat::AQUA . "> " . TextFormat::GREEN . "Welcome to " . TextFormat::YELLOW . TextFormat::BOLD ."StrongHold " . TextFormat::RESET . TextFormat::AQUA . $name . TextFormat::WHITE . "!");
    }
    
    public function onHit(ProjectileHitEvent $event){
        $entity = $event->getEntity();
        if($player->getLevel()->getName() === "DodgeBall" && $player->getLevel()->getName() === "Kwa's Plot Spawn") {
            $this->getLogger()->info(TextFormat::RED ."Someone has been eliminated in DodgeBall!");
            $event->getServer()->getLevel()->broadcastMessage(TextFormat::AQUA . "> " . TextFormat::RED . $name . TextFormat::YELLOW . " has been eliminated in DodgeBall!");
            $event->getEntity()->setHealth(0);
        }
        
        public function onPlace(BlockPlaceEvent $event) {
            $player = $event->getPlayer();
            if(!($player->isOp)) {
                if($player->getLevel()->getName() === "DodgeBall" && $player->getLevel()->getName() === "Kwa's Plot Spawn") {
                    $event->setCancelled(true);
                }
                
                public function onBreak(BlockBreakEvent $event) {
                    if(!($player->isOp)) {
                        if($player->getLevel()->getName() === "DodgeBall" && $player->getLevel()->getName() === "Kwa's Plot Spawn") {
                            $event->setCancelled(true);
                        }
                        
                        public function onDeath(PlayerDeathEvent $event){
                            $cause = $event->getEntity()->getLastDamageCause();
                            if($cause instanceof EntityDamageByEntityEvent){
                                $player = $event->getEntity();
                                $killer = $cause->getDamager();
                                $player = $event->getEntity();
                                if($killer instanceof Player){
                                    $player->sendMessage(TextFormat::RED.$killer->getName() . TextFormat::RESET." §ekilled you with " .TextFormat::LIGHT_PURPLE.$killer->getHealth().TextFormat::GOLD." §chearts left" .TextFormat::YELLOW."!");
                                    $killer->sendTIP(TextFormat::GREEN."You eliminated ".TextFormat::RED.$player->getName());
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
