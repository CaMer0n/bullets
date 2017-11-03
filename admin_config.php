<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}

// e107::lan('bullets',true);


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
		protected $batchExport     = true;
		protected $batchCopy		= true;

	//	protected $sortField		= 'somefield_order';
	//	protected $sortParent      = 'somefield_parent';
	//	protected $treePrefix      = 'somefield_title';

	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
	//	protected $listOrder		= ' DESC';
	
		protected $fields 		= array (
		   'checkboxes'         =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'bullet_id'           =>   array ( 'title' => LAN_ID, 'type' => null, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'bullet_title'        =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => '15%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => array('size'=>'block-level'), 'class' => 'left', 'thclass' => 'left',  ),
		  'bullet_description'  =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'text', 'data' => 'str', 'width' => '30%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => array('size'=>'block-level'), 'class' => 'left', 'thclass' => 'left',  ),
		  'bullet_bullets'      =>   array ( 'title' => 'Bullets', 'type' => 'method', 'data' => 'json', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'bullet_button1'      =>   array ( 'title' => 'Button-1', 'type' => 'method', 'data' => 'json', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'bullet_button2'      =>   array ( 'title' => 'Button-2', 'type' => 'method', 'data' => 'json', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		//  'bullet_button3' =>   array ( 'title' => 'Button3', 'type' => 'method', 'data' => 'str', 'width' => 'auto', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		//  'bullet_button4' =>   array ( 'title' => 'Button4', 'type' => 'method', 'data' => 'str', 'width' => 'auto', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
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

			$text = '';

				foreach($value as $row)
				{
					$text .= "<div class='animated ".$row['animation']."'>";
					$text .= $tp->toIcon($row['icon']);
					$text .= " ".$row['text'];
					$text .= "</div>";

				}

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

				$text = "<table class='table table-striped table-condensed table-bordered'>
				<colgroup>
					<col style='width:5%' />
					<col />
					<col />
					<col />
				</colgroup>
				<tr>
					<th class='text-center'>Icon</th>
					<th>Text</th>
					<th>Animation</th>
					<th>Delay</th>
					</tr>";


					$optDelay = range(0,30,2);

				foreach($amt as $v)
				{
					$name = 'bullet_bullets['.$v.']';
					$val = varset($value[$v]);

					$text .= "<tr>
								<td class='text-center'>".$this->iconpicker($name.'[icon]',$val['icon'], "label", array('glyphs'=>1))."</td>
								<td>".$this->textarea($name.'[text]',$val['text'],2,80,array('size'=>'block-level'))."</td>
								<td>".$this->select($name.'[animation]',$optAnimation, $val['animation'], array('useValues'=>1), true)."</td>
								<td>".$this->select($name.'[animation_delay]',$optDelay, $val['animation_delay'], array('useValues'=>1), true)."</td>
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


	private function bulletListInput($name, $value)
	{


				$text = "<table class='table table-striped table-condensed table-bordered'>
				<colgroup>
					<col style='width:5%' />
					<col />
					<col />
				
				</colgroup>
				";

				$optBtn = array('default', 'primary', 'info', 'warning', 'danger');


				//	$name = 'bullet_button1';
					$val = $value;

					$text .= "<tr>
								<td class='text-center'>".$this->iconpicker($name.'[icon]',$val['icon'], "label", array('glyphs'=>1))."</td>
								<td>".$this->text($name.'[label]',$val['label'],255,array('size'=>'block-level', 'placeholder'=>'Label'))."</td>
								<td>".$this->text($name.'[url]',$val['url'],255,array('size'=>'block-level', 'placeholder'=>'URL'))."</td>
								<td>".$this->select($name.'[class]',$optBtn, $val['class'], array('useValues'=>1), "Select style...")."</td>
							</tr>";



				$text .= "</table>";

				return $text;

	}


	function renderBulletButton($value)
	{
		if(empty($value))
		{
			return null;
		}

		return "<a href='".$value['url']."' class='btn btn-sm btn-".$value['class']."'>".$value['label']."</a>";

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
				return $this->bulletListInput('bullet_button1', $value);
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
				return $this->bulletListInput('bullet_button2', $value);
			break;
			
			case 'filter':
			case 'batch':
				return  array();
			break;
		}
	}

	
	// Custom Method/Function 
	function bullet_button3($curVal,$mode)
	{

		 		
		switch($mode)
		{
			case 'read': // List Page
				return $curVal;
			break;
			
			case 'write': // Edit Page
				return $this->text('bullet_button3',$curVal, 255, 'size=large');
			break;
			
			case 'filter':
			case 'batch':
				return  array();
			break;
		}
	}

	
	// Custom Method/Function 
	function bullet_button4($curVal,$mode)
	{

		 		
		switch($mode)
		{
			case 'read': // List Page
				return $curVal;
			break;
			
			case 'write': // Edit Page
				return $this->text('bullet_button4',$curVal, 255, 'size=large');
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

require_once(e_ADMIN."footer.php");
exit;

?>