<?php

define('TNC_entrance', 0);
define('TNC_reception', 3);
define('TNC_finance', 6);
define('TNC_it', 9);
define('TNC_conference', 12);
define('TNC_library', 15);
define('TNC_corridor_1', 18);
// define('TNC_corridor_2', 21);
define('TNC_restrooms', 24);
define('TNC_kitchen_1', 27);
define('TNC_kitchen_2', 30);

// define('TNC_stairs', 33);
define('TNC_games_1', 36);
define('TNC_fishbowl', 39);
// define('TNC_games_2', 42);
define('TNC_p_project', 45);
define('TNC_attic_1', 48);
define('TNC_k_project', 51);
define('TNC_g_project', 54);
define('TNC_attic_2', 57);
define('TNC_balcony', 60);

// links
$links = array();
$links[TNC_entrance] = array(TNC_reception => array(206, 'Reception'));

$links[TNC_reception] = array(TNC_entrance => array(20, 'Exit'), 
                              TNC_conference => array(144, 'Conference room'), 
                              TNC_games_1 => array(162, 'Upstairs'), 
                              TNC_corridor_1 => array(178, 'Corridor'), 
                              TNC_finance => array(258, 'HR & Finance'));

$links[TNC_conference] = array(TNC_reception => array(324, 'Reception'), 
                               TNC_corridor_1 => array(188, 'Corridor'));

$links[TNC_finance] = array(TNC_reception => array(318, 'Reception'), 
                            TNC_it => array(138, 'IT Support'));

$links[TNC_it] = array(TNC_reception => array(32, 'Reception'), 
                       TNC_finance => array(212, 'HR & Finance'));

$links[TNC_corridor_1] = array(TNC_library => array(58, 'Library'), 
                               TNC_restrooms => array(111, 'Restrooms'), 
                               TNC_kitchen_1 => array(203, 'Kitchen'), 
                               TNC_reception => array(358, 'Reception'), 
                               TNC_conference => array(8, 'Conference room'));

$links[TNC_library] = array(TNC_corridor_1 => array(238, 'Corridor'));

$links[TNC_restrooms] = array(TNC_corridor_1 => array(291, 'Corridor'), 
                              TNC_kitchen_1 => array(193, 'Kitchen'));

$links[TNC_kitchen_1] = array(TNC_restrooms => array(13, 'Restrooms'), 
                              TNC_kitchen_2 => array(9, 'Kitchen'), 
                              TNC_corridor_1 => array(23, 'Corridor'));

$links[TNC_kitchen_2] = array(TNC_kitchen_1 => array(189, 'Kitchen'));

$links[TNC_games_1] = array(TNC_reception => array(342, 'Downstairs'), 
                            TNC_fishbowl => array(350, 'The fishbowl'), 
                            TNC_p_project => array(273, 'P Project'));

$links[TNC_fishbowl] = array(TNC_games_1 => array(170, 'Chill out area'));

$links[TNC_p_project] = array(TNC_attic_1 => array(163, 'Attic'), 
                              TNC_k_project => array(343, 'K Project'), 
                              TNC_games_1 => array(80, 'Chill out area'));

$links[TNC_attic_1] = array(TNC_p_project => array(343, 'P Project'));

$links[TNC_k_project] = array(TNC_p_project => array(163, 'P Project'), 
                              TNC_g_project => array(343, 'G Project'));

$links[TNC_g_project] = array(TNC_k_project => array(163, 'K Project'), 
                              TNC_balcony => array(246, 'Balcony'), 
                              TNC_attic_2 => array(343, 'Attic 2'));

$links[TNC_balcony] = array(TNC_g_project => array(66, 'G Project'));

$links[TNC_attic_2] = array(TNC_g_project => array(163, 'G Project'));

// panos
$panos = array();
$panos[] = new GPano(TNC_entrance, 'Entrance', $links[TNC_entrance]);
$panos[] = new GPano(TNC_reception, 'Reception', $links[TNC_reception]);
$panos[] = new GPano(TNC_conference, 'Conference room', $links[TNC_conference]);
$panos[] = new GPano(TNC_finance, 'HR & Finance', $links[TNC_finance]);
$panos[] = new GPano(TNC_it, 'IT Support', $links[TNC_it]);
$panos[] = new GPano(TNC_corridor_1, 'Corridor', $links[TNC_corridor_1]);
$panos[] = new GPano(TNC_library, 'Library', $links[TNC_library]);
$panos[] = new GPano(TNC_restrooms, 'Restrooms', $links[TNC_restrooms]);
$panos[] = new GPano(TNC_kitchen_1, 'Kitchen', $links[TNC_kitchen_1]);
$panos[] = new GPano(TNC_kitchen_2, 'Kitchen', $links[TNC_kitchen_2]);
$panos[] = new GPano(TNC_games_1, 'Chill out area', $links[TNC_games_1]);
$panos[] = new GPano(TNC_fishbowl, 'The fishbowl', $links[TNC_fishbowl]);
$panos[] = new GPano(TNC_p_project, 'P Project', $links[TNC_p_project]);
$panos[] = new GPano(TNC_attic_1, 'Attic 1', $links[TNC_attic_1]);
$panos[] = new GPano(TNC_k_project, 'K Project', $links[TNC_k_project]);
$panos[] = new GPano(TNC_g_project, 'G Project', $links[TNC_g_project]);
$panos[] = new GPano(TNC_balcony, 'Balcony', $links[TNC_balcony]);
$panos[] = new GPano(TNC_attic_2, 'Attic 2', $links[TNC_attic_2]);


