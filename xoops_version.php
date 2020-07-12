<?php
												

$modversion['name'] = _GP_PAGERANK_NAME;
$modversion['version'] = 1.00;
$modversion['description'] = _GP_PAGERANK_DESC;
$modversion['author'] = "For Danordesign.com by Anders Kristiansen (Anderssk)";
$modversion['credits'] = "XOOPS, Rune Hauge (Runeher)";
$modversion['help'] = "";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "images/pagerank.png";
$modversion['dirname'] = "pagerank";

// Admin
$modversion['hasAdmin'] = 0;

// Menu
$modversion['hasMain'] = 1;

// Blocks
$modversion['blocks'][1]['file'] = "pagerank_block.php";
$modversion['blocks'][1]['name'] = "Pagerank Check";
$modversion['blocks'][1]['description'] = "Pagerank block";
$modversion['blocks'][1]['show_func'] = "pagerank_show"; 




?>