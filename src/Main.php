<?php
  namespace DodgeBall
  use pocketmine\plugin\PluginBase;
  use pocketmine\event\Listener;
  use pocketmine\event\entity\ProjectileHitEvent;
  use pocketmine\Player;
  use pocketmine\Server;
   class Main extends PluginBase implements Listener{
  
    public function onEnable() {
$this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getLogger()->info(TextFormat::GREEN . "Dodgeball Plugin has been enabled!");
    }
   public function onHurt(ProjectileHitEvent $event) {
  
  echo "Someone has been eliminated!"
  $event->getEntity()->setHealth(0, "none")
  }
}
