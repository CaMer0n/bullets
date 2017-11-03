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


//if (!defined('e107_INIT')) { exit; }

// $sql = e107::getDB(); 				// mysql class object
// $tp = e107::getParser(); 			// parser for converting to HTML and parsing templates etc.
// $frm = e107::getForm(); 				// Form element class.
// $ns = e107::getRender();				// render in theme box.

require_once("../../class2.php");
// define('e_IFRAME', true);
require_once(HEADERF);

$text = "Empty Menu";

if(!empty($parm))
{
	$text .= print_a($parm,true); // e_menu.php form data.
}

$data = e107::getDb()->retrieve('bullets','*',null,true);

$sc = e107::getScBatch('bullets',true, 'bullets');



$template = e107::getTemplate('bullets','bullets','menu');

$tp = e107::getParser();

$text = $tp->parseTemplate($template['header'],true);

foreach($data as $row)
{
	$bullet = e107::unserialize($row['bullet_bullets']);
	$row['bullet_bullets'] = $bullet;

	$button1 = e107::unserialize($row['bullet_button1']);
	$row['bullet_button1'] = $button1;

	$button2 = e107::unserialize($row['bullet_button2']);
	$row['bullet_button2'] = $button2;

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

$text .= $tp->parseTemplate($template['footer'], true);

e107::getRender()->tablerender("bullets", $text, 'bullets-menu');




require_once(FOOTERF);

?>