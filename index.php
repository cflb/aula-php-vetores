<?php

$est1 = array('manhã','tarde', 'noite');

$est2 = array(
    'cur1' => 'info',
    'cur2' => 'agro',
    'cur3' => 'zoot',
    'cur4' => 'quim',
    'horarios' => $est1
);
#print_r($est2);
echo('O curso de '. $est2['cur1']. ' é '. $est2['horarios'][0]. ' e '. $est2['horarios'][1]);
echo('<br>');

?>
