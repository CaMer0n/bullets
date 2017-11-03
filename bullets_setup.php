<?php
/*
* e107 website system
*
* Copyright (C) 2008-2013 e107 Inc (e107.org)
* Released under the terms and conditions of the
* GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
*
* Custom install/uninstall/update routines for bullets plugin
**
*/


if(!class_exists("bullets_setup"))
{
	class bullets_setup
	{

	    function install_pre($var)
		{
			// print_a($var);
			// echo "custom install 'pre' function<br /><br />";
		}

		/**
		 * For inserting default database content during install after table has been created by the bullets_sql.php file.
		 */
		function install_post($var)
		{
			$sql = e107::getDb();
			$mes = e107::getMessage();

			$e107bullets =  array('bullet_id' => 0,'bullet_title' => 'Slide No.1','bullet_description' => 'Slide Description 1','bullet_bullets' => '[
    {
        "icon": "sun-o.glyph",
        "text": "Bullet Point 1",
        "animation": "fadeInUp",
        "animation_delay": "2"
    },
    {
        "icon": "glyphicon-cutlery.glyph",
        "text": "Bullet Point 2",
        "animation": "fadeInUp",
        "animation_delay": "4"
    },
    {
        "icon": "glyphicon-font.glyph",
        "text": "Bullet Point 3",
        "animation": "bounceIn",
        "animation_delay": "6"
    },
    {
        "icon": "rocket.glyph",
        "text": "Bullet Point 4",
        "animation": "headShake",
        "animation_delay": "8"
    },
    {
        "icon": "",
        "text": "",
        "animation": "",
        "animation_delay": ""
    }
]','bullet_button1' => '{
    "icon": "glyphicon-dashboard.glyph",
    "label": "Gauage",
    "url": "\\/myguage",
    "class": "primary"
}','bullet_button2' => '{
    "icon": "glyphicon-asterisk.glyph",
    "label": "Action",
    "url": "\\/something",
    "class": "warning"
}');

			if($sql->insert('bullets',$e107bullets))
			{
				$mes->addSuccess("Inserted default table row");
			}
			else
			{
				$mes->addError("Couldn't insert default data");
			}

		}

		function uninstall_options()
		{

			/*$listoptions = array(0=>'option 1',1=>'option 2');

			$options = array();
			$options['mypref'] = array(
					'label'		=> 'Custom Uninstall Label',
					'preview'	=> 'Preview Area',
					'helpText'	=> 'Custom Help Text',
					'itemList'	=> $listoptions,
					'itemDefault'	=> 1
			);

			return $options;*/
		}


		function uninstall_post($var)
		{
			// print_a($var);
		}

		function upgrade_post($var)
		{
			// $sql = e107::getDb();
		}

	}

}