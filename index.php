<?php

use Apple\Expotec\Model\Participante;

require __DIR__ . '/vendor/autoload.php';

$participantes = Participante::getParticipantes();

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/principal.php';
include __DIR__ . '/includes/footer.php';