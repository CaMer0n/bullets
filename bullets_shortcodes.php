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

	public function sc_bullet_count()
	{
		return $this->count;
	}

	public function sc_bullet_url()
	{
		return $this->var['bullet_bullets'][$this->count]['url'];
	}

	public function sc_bullet_text()
	{
		return $this->var['bullet_bullets'][$this->count]['text'];

	}


	public function sc_bullet_animation()
	{
		return $this->var['bullet_bullets'][$this->count]['animation'];
	}

	public function sc_bullet_animation_delay()
	{
		return $this->var['bullet_bullets'][$this->count]['animation_delay'];
	}

	/**
	* {BULLET_TITLE}
	*/
	public function sc_bullet_title($parm=null)
	{
	
		return $this->var['bullet_title'];
	}
	


	/**
	* {BULLET_DESCRIPTION}
	*/
	public function sc_bullet_description($parm=null)
	{
	
		return $this->var['bullet_description'];
	}
	


	/**
	* {BULLET_BULLETS}
	*/
	public function sc_bullet_bullets($parm=null)
	{
	
		return $this->var['bullet_bullets'];
	}
	


	/**
	* {BULLET_BUTTON1}
	*/
	public function sc_bullet_button1($parm=null)
	{
	
		return $this->var['bullet_button1'];
	}
	


	/**
	* {BULLET_BUTTON2}
	*/
	public function sc_bullet_button2($parm=null)
	{
	
		return $this->var['bullet_button2'];
	}
	

}