<?php
  namespace DodgeBall
  use pocketmine\plugin\PluginBase;
  use pocketmine\event\Listener;
  use pocketmine\event\entity\EntityDamageEvent;
  use pocketmine\Player;
  use pocketmine\Server;
   class Main extends PluginBase implements Listener{
  
    public function onEnable() {
$this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getLogger()->info(TextFormat::GREEN . "Dodgeball Plugin has been enabled!");
    }
  public function onHurt(EntityDamageEvent $event) {
    if($event instanceof EntityDamageByChildEntityEvent) $event->getEntity()->attack(PHP_INT_MAX, new EntityDamageEvent($event->getEntity(), EntityDamageEvent::CAUSE_CUSTOM, PHP_INT_MAX));
  }
}
