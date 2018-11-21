<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2016 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * bullets menu file.
 *
 */


if (!defined('e107_INIT')) { exit; }

// $sql = e107::getDB(); 				// mysql class object
// $tp = e107::getParser(); 			// parser for converting to HTML and parsing templates etc.
// $frm = e107::getForm(); 				// Form element class.
// $ns = e107::getRender();				// render in theme box.

//require_once("../../class2.php");
// define('e_IFRAME', true);
//require_once(HEADERF);

$text = "";

if(!empty($parm))
{
//	$text .= print_a($parm,true); // e_menu.php form data.
}

$data = e107::getDb()->retrieve('bullets','*',"bullet_class IN(".USERCLASS_LIST.") ORDER BY bullet_order",true);


$sc = e107::getScBatch('bullets',true, 'bullets');

$template = e107::getTemplate('bullets','bullets','menu');


$tp = e107::getParser();

$totalSlides = count($data);

$default = array('bullet_total_slides'=>$totalSlides);

$sc->setVars($default);

$text = $tp->parseTemplate($template['header'],true, $sc);

foreach($data as $k=>$row)
{
	$bullet = e107::unserialize($row['bullet_bullets']);
	$row['bullet_bullets'] = $bullet;

	$button1 = e107::unserialize($row['bullet_button1']);
	$row['bullet_button1'] = $button1;

	$button2 = e107::unserialize($row['bullet_button2']);
	$row['bullet_button2'] = $button2;

	$row['bullet_slide_active'] = ($k == 0) ? 'active' : '';
	$row['bullet_total_slides'] = $totalSlides;

	$sc->setVars($row);

	$text .= $tp->parseTemplate($template['start'],true,$sc);

	foreach($row['bullet_bullets'] as $cnt=>$row2)
	{
		if(empty($row2['text']))
		{
			continue;
		}

		$sc->count = $cnt;


		$text .= $tp->parseTemplate($template['item'],true,$sc);

	}


	$text .= $tp->parseTemplate($template['end'],true,$sc);



}

$text .= $tp->parseTemplate($template['footer'], true, $sc);

e107::getRender()->tablerender(null, $text, 'bullets-menu');

/*
$arr = array(
	0 => array('caption'=>'Slide 1', 'text'=>'<div class="text-center">Slide 1 text</div>'),
	1 => array('caption'=> 'Slide 2', 'text'=> '<div class="text-center">Slide 2 text</div>')
);

$text = e107::getForm()->carousel('my-carousel',$arr);

e107::getRender()->tablerender("Core", print_a($text,true), 'bullets-menu');*/

//require_once(FOOTERF);

