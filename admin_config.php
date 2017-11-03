<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}

// e107::lan('bullets',true);

e107::css('bullets', 'css/bootstrap-iconpicker.min.css');





class bullets_adminArea extends e_admin_dispatcher
{

	protected $modes = array(	
	
		'main'	=> array(
			'controller' 	=> 'bullets_ui',
			'path' 			=> null,
			'ui' 			=> 'bullets_form_ui',
			'uipath' 		=> null
		),
		

	);	
	
	
	protected $adminMenu = array(

		'main/list'			=> array('caption'=> LAN_MANAGE, 'perm' => 'P'),
		'main/create'		=> array('caption'=> LAN_CREATE, 'perm' => 'P'),
			
		'main/prefs' 		=> array('caption'=> LAN_PREFS, 'perm' => 'P'),	

		// 'main/custom'		=> array('caption'=> 'Custom Page', 'perm' => 'P')
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'Bullets Slider';
}




				
class bullets_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Bullets Slider';
		protected $pluginName		= 'bullets';
	//	protected $eventName		= 'bullets-bullets'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'bullets';
		protected $pid				= 'bullet_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
		protected $batchExport      = true;
		protected $batchCopy		= true;

		protected $sortField		= 'bullet_order';
	//	protected $sortParent      = 'somefield_parent';
	//	protected $treePrefix      = 'somefield_title';

	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'bullet_order';
	
		protected $fields 		= array (
		   'checkboxes'         =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'bullet_id'           =>   array ( 'title' => LAN_ID, 'type' => null, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'bullet_title'        =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => '18%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => array('size'=>'block-level'), 'class' => 'left', 'thclass' => 'left',  ),
		  'bullet_description'  =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'text', 'data' => 'str', 'width' => '30%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => array('size'=>'block-level'), 'class' => 'left', 'thclass' => 'left',  ),
		  'bullet_bullets'      =>   array ( 'title' => 'Bullets', 'type' => 'method', 'data' => 'json', 'width' => '38%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'bullet_button1'      =>   array ( 'title' => 'Button-1', 'type' => 'method', 'data' => 'json', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'bullet_button2'      =>   array ( 'title' => 'Button-2', 'type' => 'method', 'data' => 'json', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		   'bullet_order'      =>   array ( 'title' => LAN_ORDER, 'type' => 'number', 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),

		   'options'             =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('bullet_title', 'bullet_description', 'bullet_bullets', 'bullet_button1', 'bullet_button2');
		

	//	protected $preftabs        = array('General', 'Other' );
		protected $prefs = array(
			'visibility'		=> array('title'=> LAN_VISIBILITY, 'tab'=>0, 'type'=>'userclass', 'data' => 'str', 'help'=>''),
		); 

	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
		// left-panel help menu area. 
		public function renderHelp()
		{
			$caption = LAN_HELP;
			$text = 'Some help text';

			return array('caption'=>$caption,'text'=> $text);

		}
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			$otherField  = $this->getController()->getFieldVar('other_field_name');
			return $text;
			
		}
		
	
		
		
	*/
			
}
				


class bullets_form_ui extends e_admin_form_ui
{

	
	// Custom Method/Function 
	function bullet_bullets($curVal,$mode)
	{
		$value = array();

		if(!empty($curVal))
		{
			$value = e107::unserialize($curVal);
		}

		 		
		switch($mode)
		{
			case 'read': // List Page
				if(empty($value))
				{
					return null;
				}

			$tp = e107::getParser();

			$text = '<table style="background-color:transparent" cellspacing="4">';

				foreach($value as $row)
				{
					$text .= "<tr><td style='width:30px;vertical-align:top'>";
					$text .= $tp->toIcon($row['icon']);
					$text .= "</td><td>";
					$text .= " ".$row['text'];
					$text .= "</td></tr>";

				}
			$text .= "</table>";
				return $text;

			break;
			
			case 'write': // Edit Page

				$amt = range(0,4);

				$optAnimation =  array(	"bounce",    "flash",     "pulse",
    "rubberBand",
    "shake",
    "headShake",
    "swing",
    "tada",
    "wobble",
"jello",
 "bounceIn",
    "bounceInDown",
    "bounceInLeft",
    "bounceInRight",
"bounceInUp",
"bounceOut",
    "bounceOutDown",
    "bounceOutLeft",
    "bounceOutRight",
"bounceOutUp",
 "fadeIn",
    "fadeInDown",
    "fadeInDownBig",
    "fadeInLeft",
    "fadeInLeftBig",
    "fadeInRight",
    "fadeInRightBig",
    "fadeInUp",
"fadeInUpBig",
 "fadeOut",
    "fadeOutDown",
    "fadeOutDownBig",
    "fadeOutLeft",
    "fadeOutLeftBig",
    "fadeOutRight",
    "fadeOutRightBig",
    "fadeOutUp",
"fadeOutUpBig",
 "flip",
    "flipInX",
    "flipInY",
    "flipOutX",
"flipOutY",
 "lightSpeedIn",
"lightSpeedOut",
 "rotateIn",
    "rotateInDownLeft",
    "rotateInDownRight",
    "rotateInUpLeft",
"rotateInUpRight",
 "rotateOut",
    "rotateOutDownLeft",
    "rotateOutDownRight",
    "rotateOutUpLeft",
"rotateOutUpRight",
  "hinge",
    "jackInTheBox",
    "rollIn",
"rollOut",
  "zoomIn",
    "zoomInDown",
    "zoomInLeft",
    "zoomInRight",
"zoomInUp",
  "zoomOut",
    "zoomOutDown",
    "zoomOutLeft",
    "zoomOutRight",
"zoomOutUp",
  "slideInDown",
    "slideInLeft",
    "slideInRight",
"slideInUp",
 "slideOutDown",
    "slideOutLeft",
    "slideOutRight",
"slideOutUp"


		);

				$text = "<table class='table table-condensed table-bordered'>
				<colgroup>
					<col style='width:5%' />
					<col style='width:5%' />
					<col />
					<col />
					<col />
				</colgroup>
				<tr>
					<th class='text-center'>Icon</th>
					<th class='text-center'>Icon-style</th>
					<th>Text</th>
					<th>Animation</th>
					<th>Delay (secs)</th>
					</tr>";


					$optDelay = range(0,30);
					$optStyle = array('default', 'primary', 'success', 'info', 'warning', 'danger');

				foreach($amt as $v)
				{
					$name = 'bullet_bullets['.$v.']';
					$val = varset($value[$v]);
					$ico = str_replace(".glyph", '', $val['icon']);

					if(deftrue('e_DEBUG'))
					{
						$iconPicker = '<button class="btn btn-default iconpicker" role="iconpicker" name="'.$name.'[icon]" data-iconset="glyphicon" data-icon="'.$ico.'"></button>';
					//	$iconPicker = '<div role="iconpicker"  data-iconset="fontawesome" data-icon="'.$ico.'"></div>';

					}
					else
					{
						$iconPicker = $this->iconpicker($name.'[icon]',$val['icon'], "label", array('glyphs'=>1));
					}
					$text .= "<tr>
								<td class='text-center'>".$iconPicker."</td>
								<td>".$this->btnClass($name.'[icon_style]', $val['icon_style'])."</td>
								<td>".$this->textarea($name.'[text]',$val['text'],1,80,array('size'=>'block-level'))."</td>
								<td>".$this->select($name.'[animation]',$optAnimation, $val['animation'], array('useValues'=>1), true)."</td>
								<td>".$this->select($name.'[animation_delay]',$optDelay, $val['animation_delay'], array('size'=>'small','useValues'=>1), true)."</td>
							</tr>";

				}

				$text .= "</table>";


				return $text;
			break;
			
			case 'filter':
			case 'batch':
				return  array();
			break;
		}
	}

	function btnClass($name,$value,$options=array())
	{


		$text = $this->select_open($name);

		$optStyle = array('default', 'primary', 'success', 'info', 'warning', 'danger');

		$text .= "<option value=''>Select style...</option>";

		foreach($optStyle as $s)
		{
			$selected = $s === $value ? "selected='selected'" : "";
			$text .= "<option class='label-".$s."' value='".$s."' {$selected}>".$s."</option>";
		}

		$text .= "</select>";

		return $text;

	}


	private function bulletButtonInput($name, $value)
	{


				$text = "<table class='table table-striped table-condensed table-bordered'>
				<colgroup>
					<col style='width:5%' />
					<col />
					<col />
				
				</colgroup>
				";



				//	$name = 'bullet_button1';
					$val = $value;

					$text .= "<tr>
								<td class='text-center'>".$this->iconpicker($name.'[icon]',$val['icon'], "label", array('glyphs'=>1))."</td>
								<td>".$this->text($name.'[label]',$val['label'],255,array('size'=>'block-level', 'placeholder'=>'Label'))."</td>
								<td>".$this->text($name.'[url]',$val['url'],255,array('size'=>'block-level', 'placeholder'=>'URL'))."</td>
								<td>".$this->btnClass($name.'[class]', $val['class'])."</td>
							</tr>";



				$text .= "</table>";

				return $text;

	}


	function renderBulletButton($value)
	{
		if(empty($value['label']))
		{
			return null;
		}

		$icon = e107::getParser()->toIcon($value['icon']);

		return "<a href='".$value['url']."' class='btn btn-sm btn-block btn-".$value['class']."'>".$icon." ".$value['label']."</a>";

	}




	
	// Custom Method/Function 
	function bullet_button1($curVal,$mode)
	{
		$value = null;

		if(!empty($curVal))
		{
			$value = e107::unserialize($curVal);
		}
		 		
		switch($mode)
		{
			case 'read': // List Page

				return $this->renderBulletButton($value);
			break;
			
			case 'write': // Edit Page
				return $this->bulletButtonInput('bullet_button1', $value);
			break;
			
			case 'filter':
			case 'batch':
				return  array();
			break;
		}
	}

	
	// Custom Method/Function 
	function bullet_button2($curVal,$mode)
	{
		$value = null;

		if(!empty($curVal))
		{
			$value = e107::unserialize($curVal);
		}
		 		
		switch($mode)
		{
			case 'read': // List Page
				return $this->renderBulletButton($value);
			break;
			
			case 'write': // Edit Page
				return $this->bulletButtonInput('bullet_button2', $value);
			break;
			
			case 'filter':
			case 'batch':
				return  array();
			break;
		}
	}



}		
		
		
new bullets_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

e107::js('bullets', 'js/bootstrap-iconpicker-iconset-all.min.js');
e107::js('bullets', 'js/bootstrap-iconpicker.min.js');


require_once(e_ADMIN."footer.php");
exit;

?>