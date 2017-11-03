<?php
	

// bullets Shortcodes file

if (!defined('e107_INIT')) { exit; }

class plugin_bullets_shortcodes extends e_shortcode
{


	/**
	* {BULLET_ID}
	*/
	public function sc_bullet_id($parm=null)
	{
	
		return $this->var['bullet_id'];
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
	


	/**
	* {BULLET_BUTTON3}
	*/
	public function sc_bullet_button3($parm=null)
	{
	
		return $this->var['bullet_button3'];
	}
	


	/**
	* {BULLET_BUTTON4}
	*/
	public function sc_bullet_button4($parm=null)
	{
	
		return $this->var['bullet_button4'];
	}
	

