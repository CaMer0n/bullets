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
			$ret = e107::getXml(true)->e107Import(e_PLUGIN."bullets/xml/install.xml");

			if(!empty($ret['success']))
			{
				e107::getMessage()->addSuccess("Default slides imported.");
			}

			if(!empty($ret['failed']))
			{
				e107::getMessage()->addError("Failed to import default slides.");
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