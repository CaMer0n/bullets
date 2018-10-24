<?php

// Template File
// bullets Template file

if (!defined('e107_INIT')) { exit; }

$BULLETS_TEMPLATE = array();

$BULLETS_TEMPLATE['menu']['header'] 	= '<!-- Bullet Menu: header -->{SETIMAGE: w=400&h=400}
											<div id="carousel-bullets" class="carousel carousel-fade slide" data-ride="carousel" data-interval="10000">
							                <div class="carousel-inner" role="listbox">';


$BULLETS_TEMPLATE['menu']['footer'] 	= '</div><div class="carousel-controls">
						                  <!-- Controls -->
						                  <a class="left carousel-control animated zoomIn animation-delay-30" href="#carousel-bullets" role="button" data-slide="prev">
						                    <i class="fa fa-chevron-left fa-fw"></i>
						                    <span class="sr-only">Previous</span>
						                  </a>
						                  <a class="right carousel-control animated zoomIn animation-delay-30" href="#carousel-bullets" role="button" data-slide="next">
						                    <i class="fa fa-chevron-right fa-fw"></i>
						                    <span class="sr-only">Next</span>
						                  </a>
						                  <!-- Indicators -->
						                  {BULLET_CAROUSEL_INDICATORS: target=carousel-bullets&class=animated fadeInUpBig}
						                 <!-- <ol class="carousel-indicators">
						                    <li data-target="#carousel-hero" data-slide-to="0" class="animated fadeInUpBig animation-delay-27 active"></li>
						                    <li data-target="#carousel-hero" data-slide-to="1" class="animated fadeInUpBig animation-delay-28"></li>
						                    <li data-target="#carousel-hero" data-slide-to="2" class="animated fadeInUpBig animation-delay-29"></li>
						                  </ol>-->
						                </div>
						              </div>';


$BULLETS_TEMPLATE['menu']['start'] 	    = '<div class="item {BULLET_SLIDE_ACTIVE}" style="background-image:url({BULLET_IMAGE})">
						                  <div class="carousel-caption">
						                    <div class="bullet-text-container">
						                      <header class="bullet-title animated slideInLeft animation-delay-5">
						                        <h1 class="animated fadeInLeft animation-delay-10 font-smoothing">{BULLET_TITLE: enwrap=strong}</h1>
						                        <h2 class="animated fadeInLeft animation-delay-12">{BULLET_DESCRIPTION: enwrap=span&class=text-info}</h2>
						                      </header>
						                      <ul class="bullet-list list-unstyled">';

$BULLETS_TEMPLATE['menu']['end'] 	    = ' </ul>
					                      <div class="bullet-buttons text-right">
					                        
					                          <a href="{BULLET_BUTTON1_URL}" class="btn btn-{BULLET_BUTTON1_CLASS} btn-raised animated fadeInRight animation-delay-24">
					                            {BULLET_BUTTON1_ICON} {BULLET_BUTTON1_LABEL}</a>
					                        
					                      </div>
					                    </div>
					                    </div>
					                    </div>';



$BULLETS_TEMPLATE['menu']['item'] 	    = '<li>
			                            <div class="bullet-list-icon animated zoomInUp {BULLET_ANIMATION_DELAY}">
			                            <span class="bullet-icon bullet-icon-circle bullet-icon-xlg label-{BULLET_ICON_STYLE} shadow-3dp">
			                              {BULLET_ICON}
			                            </span>
			                            </div>
			                            <div class="bullet-list-text animated {BULLET_ANIMATION} {BULLET_ANIMATION_DELAY}">{BULLET_TEXT}</div>
			                        </li>';











