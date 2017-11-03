<?php

// Template File
// bullets Template file

if (!defined('e107_INIT')) { exit; }

$BULLETS_TEMPLATE = array();

$BULLETS_TEMPLATE['menu']['header'] 	= '<!-- Bullet Menu: header -->{SETIMAGE: w=400&h=300}
											<div id="carousel-bullets" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
						                <!-- Indicators -->
						                
						                {BULLET_CAROUSEL_INDICATORS: target=carousel-bullets}
						               
						                <div class="carousel-inner" role="listbox">';

$BULLETS_TEMPLATE['menu']['start'] 	    = '<!-- Bullet Menu: start -->
											<div class="ms-hero-img-slider item {BULLET_SLIDE_ACTIVE}"><h2>{BULLET_TITLE}</h2><p>{BULLET_DESCRIPTION}</p>
											<ul class="list-unstyled">';

$BULLETS_TEMPLATE['menu']['item'] 	    = '<li class="animated {BULLET_ANIMATION} {BULLET_ANIMATION_DELAY}">{BULLET_ICON} {BULLET_TEXT} </li>';

$BULLETS_TEMPLATE['menu']['end'] 	    = '</ul></div><!-- Bullet Menu: end -->';

$BULLETS_TEMPLATE['menu']['footer'] 	= '<a class="left carousel-control" href="#carousel-bullets" role="button" data-slide="prev">
								        <span class="glyphicon glyphicon-chevron-left"></span>
										</a>
										<a class="right carousel-control" href="#carousel-bullets" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										</a></div>
						              </div>
						           <!-- Bullet Menu: footer -->';

