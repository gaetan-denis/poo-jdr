<?php

spl_autoload_register(function ($class) {
    require __DIR__ . '/' . strtolower(str_replace('\\', DIRECTORY_SEPARATOR, $class)) . '.php';
});

$pc = new \classes\pc('1', 'PC', 'Frakass le barbare');
$pc->setHp(20);
$pc->setAttack(10);
$pc->setDefense(10);


var_dump($pc);

$npc = new \classes\npc('2', 'NPC');
$npc->setHp(20);
$npc->setAttack(10);
$npc->setDefense(10);

// attaque simple
echo $pc->Attack($npc);

// attaque & riposte jusqu'à la mort d'un des candidats
while($pc->getHp() > 0 && $npc->getHp() > 0) {
    echo $pc->Attack($npc);
    if ($pc->getHp() > 0 && $npc->getHp() > 0) {
        echo $npc->Attack($pc);
    }
}
// combat terminé, le vainqueur
if ($pc->getHp() == 0) {
    $winner = $npc->getName();
} else {+
    $winner = $pc->getName();
}
echo '<p>Le combat est terminé! Le vainqueur est : ' . $winner . '</p>';

// le NPC ne sera plus déterminé par le script index, mais proviendra d'une base de données où l'adversaire sera déterminé aléatoirement