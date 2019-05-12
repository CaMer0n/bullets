<?php
	

// bullets Shortcodes file

if (!defined('e107_INIT')) { exit; }

class plugin_bullets_bullets_shortcodes extends e_shortcode
{
	public $count;

	/**
	* {BULLET_ID}
	*/
	public function sc_bullet_id($parm=null)
	{
		return $this->var['bullet_id'];
	}

	public function sc_bullet_image($parm=null)
	{
		if(empty($this->var['bullet_image']))
		{
			return null;
		}

		return e107::getParser()->replaceConstants($this->var['bullet_image'], 'full');
	}

	public function sc_bullet_carousel_indicators($parm=null)
	{
		$target = !empty($parm['target']) ? $parm['target'] : 'carousel-bullets';
		$class = !empty($parm['class']) ? $parm['class'] : '';
		$total = (int) $this->var['bullet_total_slides'];

		if(empty($total))
		{
			return "(No Slides Found)"; // debug info
		}

		$text = '<ol class="carousel-indicators '.$class.'">';

		$loop = range(0,$total-1);

		foreach($loop as $c)
		{
			$active = ($c == 0) ? 'active' : '';

			$text .= '<li data-target="#'.$target.'" data-slide-to="'.$c.'" class="'.$active.'"></li>';
			$text .= "\n";
		}

		$text .= '                  
                </ol>';

		 return $text;


	}

	public function sc_bullet_slide_active($parm=null)
	{
		return $this->var['bullet_slide_active'];
	}

	public function sc_bullet_slide_interval($parm=null)
	{
		return e107::pref('bullets', 'slide_interval', 7500);
	}

  /* {BULLET_ICON} returs <i class="fa fa-stumbleupon-circle"><!-- --></i> */
  /* {BULLET_ICON: raw=1}	returns database value, not able to use in template */
  
	public function sc_bullet_icon($parm=null)
	{
		if(empty($this->var['bullet_bullets'][$this->count]['icon']))
		{
			return null;
		}

		if(!empty($parm['raw']))
		{
			return $this->var['bullet_bullets'][$this->count]['icon'];
		}

		return e107::getParser()->toIcon($this->var['bullet_bullets'][$this->count]['icon']);
	}

	/**
	 * Returns success, info, primary, warning and danger strings.
	 * @param null $parm
	 * @return string|null
	 */
	public function sc_bullet_icon_style($parm=null)
	{
		if(empty($this->var['bullet_bullets'][$this->count]['icon_style']))
		{
			return null;
		}

		return $this->var['bullet_bullets'][$this->count]['icon_style'];
   
   } 
  
	public function sc_bullet_count()
	{
		return $this->count;
	}

/*	public function sc_bullet_url()
	{
		return $this->var['bullet_bullets'][$this->count]['url'];
	}*/

	public function sc_bullet_text()
	{
		return e107::getParser()->toHTML($this->var['bullet_bullets'][$this->count]['text'],true,'BODY');
	}


	public function sc_bullet_animation()
	{
		if(empty($this->var['bullet_bullets'][$this->count]['animation']))
		{
			return null;
		}

		return $this->var['bullet_bullets'][$this->count]['animation'];
	}

	public function sc_bullet_animation_delay()
	{
		if(empty($this->var['bullet_bullets'][$this->count]['animation_delay']))
		{
			return null;
		}

		return "animation-delay-".$this->var['bullet_bullets'][$this->count]['animation_delay'];
	}

	/**
	* @example {BULLET_TITLE}
	* @example {BULLET_TITLE: enwrap=strong} // replace [ ] chars with <strong> tags.
	*/
	public function sc_bullet_title($parm=null)
	{
		return $this->enwrap($this->var['bullet_title'],$parm);
	}
	
	private function enwrap($text, $parm=null)
	{
		if(empty($text))
		{
			return null;
		}

		$repl = array();

		$class = !empty($parm['class']) ? " class='".$parm['class']."'" : "";

		if(!empty($parm['enwrap']))
		{
			$tag = $parm['enwrap'];
			$repl = array("<".$tag.$class.">","</".$tag.">");
		}

		if(!empty($repl))
		{
			$srch = array("[","]");
			return str_replace($srch,$repl,$text);

		}

		return $text;

	}

	/**
	* @example {BULLET_DESCRIPTION}
	* @example {BULLET_DESCRIPTION: enwrap=span&class=text-info} // replace [ ] chars with <span> tags and apply text-info class.
	*/
	public function sc_bullet_description($parm=null)
	{
		return $this->enwrap($this->var['bullet_description'],$parm);
	}
	


	/**
	* {BULLET_BULLETS}
	*/
	public function sc_bullet_bullets($parm=null)
	{
		return $this->var['bullet_bullets'];
	}
	

	/**
	* {BULLET_BUTTON1_xxxx}
	*/
	public function sc_bullet_button1_icon($parm=null)
	{
		if(empty($this->var['bullet_button1']['icon']))
		{
			return null;
		}

		return e107::getParser()->toIcon($this->var['bullet_button1']['icon'],$parm);
	}

	public function sc_bullet_button1_label($parm=null)
	{
		return e107::getParser()->parseTemplate($this->var['bullet_button1']['label'], true);
	}
	
	public function sc_bullet_button1_url($parm=null)
	{
		return e107::getParser()->parseTemplate($this->var['bullet_button1']['url'], true);
	}

	public function sc_bullet_button1_class($parm=null)
	{
		return $this->var['bullet_button1']['class'];
	}


	/**
	* {BULLET_BUTTON2_xxxx}
	*/

	public function sc_bullet_button2_icon($parm=null)
	{
		if(empty($this->var['bullet_button2']['icon']))
		{
			return null;
		}

		return e107::getParser()->toIcon($this->var['bullet_button2']['icon'],$parm);
	}

	public function sc_bullet_button2_label($parm=null)
	{
		return e107::getParser()->parseTemplate($this->var['bullet_button2']['label'], true);
	}
	
	public function sc_bullet_button2_url($parm=null)
	{
		return e107::getParser()->parseTemplate($this->var['bullet_button2']['url'], true);
	}

	public function sc_bullet_button2_class($parm=null)
	{
		return $this->var['bullet_button2']['class'];
	}


	

}