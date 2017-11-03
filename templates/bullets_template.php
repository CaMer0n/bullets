<?php

// Template File
// bullets Template file

if (!defined('e107_INIT')) { exit; }


$BULLETS_TEMPLATE = array();

$BULLETS_TEMPLATE['menu']['header'] 	= '<!-- Bullet Menu: header -->{SETIMAGE: w=400&h=300}';

$BULLETS_TEMPLATE['menu']['start'] 	    = '<!-- Bullet Menu: start --><h2>{BULLET_TITLE}</h2><p>{BULLET_DESCRIPTION}</p><ul>';

$BULLETS_TEMPLATE['menu']['item'] 	    = '<li class="animated {BULLET_ANIMATION} {BULLET_ANIMATION_DELAY}">{BULLET_ICON} {BULLET_TEXT} </li>';

$BULLETS_TEMPLATE['menu']['end'] 	    = '</ul><!-- Bullet Menu: end -->';

$BULLETS_TEMPLATE['menu']['footer'] 	= '<!-- Bullet Menu: footer -->';



