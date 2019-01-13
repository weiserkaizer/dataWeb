<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/javascripts.js.html
 * Date :      Thu, 26 Jul 2018 13:24:01 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:12 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/javascripts.js.html
// Temps de compilation total: 4.428 ms
//

function html_13fdf04f035a967a3a864d5aa25df257($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 86400"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=86400"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/javascript; charset=iso-8859-1') . '); ?'.'>' .
'// Menu accessible dynamique et CSS alternatives, V 2.0 (avec jquery)
//
// Copyright (c) 2004 Jacques PYRAT
// https://www.pyrat.net/
//
// Licensed under the LGPL license
// http://www.gnu.org/copyleft/lesser.html
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************
//
// Presets

// Encapsulation pour permettre l\'utilisation de jQl, cf http://permalink.gmane.org/gmane.comp.web.spip.zone/38793
// Même si ça marche, le résultat du test jQL était un doublement du temps de chargement
// jQuery(function(){

var jp_blankpic=\'' .
find_in_path('images/1.gif') .
'\';
var jp_onclass=\'menu_plus\';
var jp_offclass=\'menu_minus\';
var jp_picalt=\'' .
_T('soyezcreateurs:menu_picalt') .
'\';
var jp_strDeplier=\'' .
_T('soyezcreateurs:menu_deplier') .
'\';
var jp_strReplier=\'' .
_T('soyezcreateurs:menu_replier') .
'\';
var jp_parentID=\'menu\';
// Checking for DOM compatibility	
if (document.getElementById && document.createTextNode && document.createElement){jp_canDOM=true}

function jp_expinit(){
	if (jp_canDOM){
		if(jp_parentID && document.getElementById(jp_parentID)){
			jp_alluls=document.getElementById(jp_parentID).getElementsByTagName(\'UL\');
			jp_alllis=document.getElementById(jp_parentID).getElementsByTagName(\'LI\');
			for(i=0;i<jp_alluls.length;i++){
				jp_subul=jp_alluls[i];
				if(jp_subul.parentNode.tagName==\'LI\'){
					jp_supli=jp_subul.parentNode
					jp_islink=jp_supli.getElementsByTagName(\'a\')[0];
					if(jp_islink){
						jp_addimg = document.createElement(\'img\');
						jp_addimg.src=jp_blankpic;
						jp_addimg.className=\'node\';
						jp_addimg.alt=\'\';
						jp_addimg.onclick=function() {jp_ex(this,null);return false;};
						jp_supli.getElementsByTagName(\'A\')[0].onkeypress=inputKeyHandler;
						jp_supli.getElementsByTagName(\'A\')[0].onfocus=function() {jp_ex(this,0);};
						jp_supli.insertBefore(jp_addimg,jp_supli.firstChild);
					}
					// Do not collapse when there is a strong element in the list.
					jp_highlight=jp_subul.parentNode.getElementsByTagName(\'strong\').length==0?true:false;
					jp_disp=jp_highlight?\'none\':\'block\';
					var jp_picaltonoff=jp_highlight?jp_picalt+jp_strDeplier:jp_picalt+jp_strReplier;
					jp_pic_class=jp_highlight?jp_onclass:jp_offclass;
					// End  highlight change
					jp_childs=jp_subul.getElementsByTagName(\'li\').length
					jp_momimg=jp_subul.parentNode.getElementsByTagName(\'img\')[0]
					if(jp_momimg){
						jp_momimg.setAttribute(\'title\',jp_picaltonoff+jp_subul.parentNode.getElementsByTagName(\'a\')[0].text);
						jp_momimg.setAttribute(\'alt\',jp_picaltonoff+jp_subul.parentNode.getElementsByTagName(\'a\')[0].text);
						jp_momimg.className=jp_pic_class;
						jp_subul.style.display=jp_disp;
					}
				}
			}
		}
	}
}

// Collapse and Expand node.
function jp_ex(jp_n,jp_event){
	if(jp_canDOM){
		jp_u=jp_n.parentNode.getElementsByTagName("ul")[0];
		if (!jp_u) jp_u=jp_n.parentNode.parentNode.getElementsByTagName("ul")[0];;
		if(jp_u){
			if (((jp_u.style.display==\'none\'||jp_u.style.display==\'\')&&(jp_event==0||jp_event==43||jp_event==null))||((jp_u.style.display==\'block\')&&(jp_event==45||jp_event==null))) {
				jp_u.style.display=jp_u.style.display==\'none\'||jp_u.style.display==\'\'?\'block\':\'none\';
				jp_img=jp_u.parentNode.getElementsByTagName(\'img\')[0];
				jp_img.className=jp_img.className.indexOf(jp_offclass)!=-1?jp_onclass:jp_offclass;
				var jp_strAlt=jp_img.getAttribute(\'title\');
				if (jp_strAlt==null) { jp_strAlt=\'\'; }
				if (jp_img.className.indexOf(jp_offclass)!=-1) {
					var jp_re = new RegExp (jp_strDeplier, \'gi\');
					var jp_strAltNew = jp_strAlt.replace(jp_re,jp_strReplier);
				}else{
					var jp_re = new RegExp (jp_strReplier, \'gi\');
					var jp_strAltNew = jp_strAlt.replace(jp_re,jp_strDeplier);
				}
				jp_img.setAttribute(\'title\',jp_strAltNew);
				jp_img.setAttribute(\'alt\',jp_strAltNew);
				adjustLayout();
				return true;
			} else {
				return false;
			}
		}
	}			
}
function inputKeyHandler(ev) {
	ev = ev || event;
	if (jp_ex(ev.target || ev.srcElement,ev.keyCode || ev.which)) {
		ev.cancelBubble= true;
		if (ev.stopPropagation) ev.stopPropagation();
	}
}


function adjustLayout() {
	/* Remettre la taille à auto pour trouver l\'eventuelle nouvelle hauteur !*/
	$("div.equilibre").css({\'height\': \'auto\'});
	/*******************************************CAS N°1********************************************************************/
	/*Nav, Contenu et Extra alignes top (Layout 1 a 22)*/
	var tnotstackable =0;
	tnotstackable = parseInt($("div.notstackable")[0].offsetTop);
	tlaststackable = parseInt($("div.laststackable")[0].offsetTop);
	if (tnotstackable==tlaststackable) {
			var h=0;
			$("div.equilibre").each(function(){ h=Math.max(h,this.offsetHeight); }).css({\'min-height\': h+\'px\'});
			$("div.equilibre").css({\'height\': parseInt($("div.equilibre")[0].offsetHeight)});
			/*alert("Cas 1");*/
	}
	else {
/*********************************************CAS 2*********************************************************************/
	/* Navigation et Extra sont empiles (Layout 23 a 26 et 33 et 34)*/
		leftlaststackable = parseInt($("div.laststackable")[0].offsetLeft);
		leftnavigation = parseInt($("div#navigation")[0].offsetLeft);
		largeurnavigation = parseInt($("div#navigation")[0].offsetWidth);
		largeurextra = parseInt($("div.laststackable")[0].offsetWidth);
		if ((leftlaststackable == leftnavigation) && (largeurextra == largeurnavigation)) {
			var hstacked = 0;
			$("div.stackable").each(function(){ hstacked+=parseInt(this.offsetHeight); });
			var hnotstackable = 0;
			hnotstackable = parseInt($("div.notstackable")[0].offsetHeight);
			if (hnotstackable>hstacked) {
				$("div.laststackable").css({\'min-height\': hnotstackable + parseInt($("div.laststackable")[0].offsetHeight) - hstacked+\'px\'});
				$("div.notstackable").css({\'min-height\': hnotstackable+\'px\'});
				/*alert("Cas 2");*/
			}
			else {
				$("div.notstackable").css({\'min-height\': hstacked+\'px\'});
			};
		}
		else {
/**********************************************CAS 3*******************************************************************/
	/* Navigation et Extra meme Top et differents de Contenu (Layout 27-28-39-40)*/
			tlaststackable = parseInt($("div.laststackable")[0].offsetTop);
			tstackable = parseInt($("div.stackable")[0].offsetTop);
			if (tstackable==tlaststackable){
				var h=0;
				$("div.stackable").each(function(){ h=Math.max(h,this.offsetHeight); }).css({\'min-height\': h+\'px\'});
				/*alert("Cas 3");*/
			}
			else {
/**********************************************CAS 4*******************************************************************/
	/* Navigation et Contenu meme alignement Top (Layout 35 et 36)*/
				largeurcontenu = parseInt($("div.notstackable")[0].offsetWidth);
				if (largeurcontenu==largeurextra) {
					hstackable = (hauteurcontenu = parseInt($("div.notstackable")[0].offsetHeight)) + (hauteurext = parseInt($("div.laststackable")[0].offsetHeight));
					hnavigation = parseInt($("div#navigation")[0].offsetHeight);
					if(hstackable < hnavigation) {
						$("div.notstackable").css({\'min-height\': (hnavigation - hauteurext)+\'px\'});
					}
					else {
						$("div#navigation").css({\'min-height\': hstackable+\'px\'});
					}
					/*alert("Cas 4");*/
				}
				else	{
/**********************************************CAS 5*******************************************************************/
	/* Navigation et Contenu meme alignement Top (Layout 29 a 32 et 37 et 38)*/
					hstackable = (hauteurcontenu = parseInt($("div.notstackable")[0].offsetHeight));
					hnavigation = parseInt($("div#navigation")[0].offsetHeight);
					if(hstackable > hnavigation) {
						$("div#navigation").css({\'min-height\': hstackable+\'px\'});
					}
					else {
					$("div.notstackable").css({\'min-height\': hnavigation+\'px\'});
					}
					/*alert("Cas 5");*/
				}
			}
		}
	}
}
;
/* FUNCTIONS ON ALL PAGES */
function myInitPages() {
	/* HOME SPECIAL FEATURE */
	if (jQuery(\'#homeSpecialFeature\').size() > 0) { 
		if (jQuery(\'.hSFItem\').size()>1) { initMyHomeSpecialFeature = myHomeSpecialFeature("#homeSpecialFeature",\'hSFItem\',\'hSFDecoImg\',\'hSFDecoSpan\'); }
	}
	if (jQuery(\'#menuh\').size() > 0) {
		$(document).ready(function(){ 
		  $("#menuh").attr(\'role\',\'navigation\')/*.supersubs({ 
            minWidth:    12,   // minimum width of sub-menus in em units 
            maxWidth:    24,   // maximum width of sub-menus in em units 
            extraWidth:  1     // extra width can ensure lines don\'t sometimes turn over 
                               // due to slight rounding differences and font-family 
        })*/.superfish({
			hoverClass: \'hover\',
			delay: 800,
			dropShadows: false
		  })/*.find(\'ul\').bgIframe({opacity:false})*/;

		  $("#switch-css option").click(function() { 
				$("link").attr("href",$(this).attr(\'value\'));
				return false;
			});
		});
	}
	if (jQuery(\'#arretSurImg .mainCarousels\').size() > 0) { homeCarousel(\'.mainCarousels\'); }
	if (jQuery(\'#arretSurImg2 .mainCarousels2\').size() > 0) { homeCarousel2(\'.mainCarousels2\'); }
	' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_layout/menuderoulant','replie',false):'') == 'replie')) ?' ' :''))))!=='' ?
		($t1 . 'jp_expinit();') :
		'') .
'
	// Surligner l\'evenement en cours
	var id_anchor  = location.hash.substr(1); //Get the word after the hash from the url
	if (id_anchor) $(\'#\'+id_anchor).parent().addClass(\'highlight_anchor\'); // ajoute la classe highlight_anchor à l\'element autour de l\'ancre
;
' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs/native_tooltips',null,false):'') == 'on')) ?'' :' '))))!=='' ?
		($t1 . (	'
	$(function() { $( document ).tooltip({
		  track: true,
		  items: \'[title]:not(.crayon-icones *, .formulaire_crayon *, a span, a img, .postListItem *)\',
		  show: {
			delay: ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/tooltip_delay','1000',false):'')) .
	'}
		});
	});
')) :
		'') .
'
	$(".escapelinks").one("focus", "a", function() { $(".escapelinks").removeClass("escapelinks"); } );
}
;
function myInitLayout() {
	if (CanceladjustLayout != true) {
		adjustLayout();
		$("body").resize(
			function () {
			adjustLayout();
			}
		);
		if (CancelMonitorTextSize != true) {
			$.em.element = $(\'<div />\').css({ left:     \'-100em\',
										position: \'absolute\',
										width:    \'100em\' })
								 .prependTo(\'div.texte\')[0];
			$(\'div.texte\').bind(\'emchange\', function(e, cur, prev) { adjustLayout(); });
		}
		onAjaxLoad(adjustLayout); // Merci Marcimat sur IRC !
	}
;
}
;
/* BLACK TRANSPARENT BACKGROUNDS */
function mySpecialBackgrounds(elt,correcAmount,correcAmount2) {
	jQuery(elt).each(function() {
		var targetHeight = jQuery(this).parent().height();
		var targetWidth = jQuery(this).parent().width();
		jQuery(this).css({\'height\':targetHeight+correcAmount,\'width\':targetWidth+correcAmount2,\'opacity\':.5});
	});
}
;
/* HOME SPECIAL FEATURE */
function myHomeSpecialFeature(container,item,decoImg,decoSpan) {
	jQuery(\'#\'+item+\'1\').addClass(\'active\'+item);
	mySpecialBackgrounds(\'.\'+item+\' .\'+decoSpan,14,10);
	jQuery(\'#\'+item+\'1 .\'+decoSpan).css("opacity", 1);
	jQuery(\'.\'+item+\' .\'+decoImg).hide();
	jQuery(\'#\'+item+\'1 .\'+decoImg).show();

	var x = 1;
	var maxX = jQuery(\'.\'+item).size();
	function myAnimate(x,maxX) {
		if (x > maxX) { x = 1; }
		jQuery(\'.\'+item).removeClass(\'active\'+item);
		jQuery(\'#\'+item+x).addClass(\'active\'+item);
		jQuery(\'.\'+item+\' .\'+decoSpan).animate({"opacity": .5}, { queue:false, duration:800 });
		jQuery(\'#\'+item+x+\' .\'+decoSpan).animate({"opacity": 1},800);
		jQuery(\'.\'+item+\' .\'+decoImg).fadeOut(800);
		jQuery(\'#\'+item+x+\' .\'+decoImg).fadeIn(800);
		timer = setTimeout(function() {
			if (x < maxX) { x = x+1; myAnimate(x,maxX); }
			else if (x = maxX) { x = 1; myAnimate(x,maxX); }
		} , ' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/vitesse_slider','10000',false):'')) .
');
	}
	myAnimate(x,maxX);

	jQuery(\'.\'+item).each(function() {
		jQuery(this).hoverIntent(
			function() {
				clearTimeout(timer);
				currentItem = jQuery(\'.\'+item).index(this)+1;
				jQuery(\'.\'+item).removeClass(\'active\'+item);
				jQuery(this).addClass(\'active\'+item);
				jQuery(\'.\'+item+\' .\'+decoSpan+\':not("#\'+item+currentItem+\' .\'+decoSpan+\'")\').css("opacity", .5);
				jQuery(this).children().children(\'.\'+decoSpan).animate({"opacity": 1},400);
				jQuery(\'.\'+item+\' .\'+decoImg+\':not("#\'+item+currentItem+\' .\'+decoImg+\'")\').fadeOut(400);
				jQuery(this).children(\'.\'+decoImg).fadeIn(400);
			},
			function() {
				clearTimeout(timer);
				currentItem = jQuery(\'.\'+item).index(this)+2;
				jQuery(this).removeClass(\'active\'+item);
				jQuery(this).children().children(\'.\'+decoSpan).animate({"opacity": .5},400);
				timer = setTimeout(function() { myAnimate(currentItem,maxX); } , 1000 );
			}
		);
	});
}
;

/* HOME CYCLE */
function homeCarousel(elt) {
	/* carousels internes */
	var elemNbr = jQuery(elt+\' > li\').size();
	var myCounter = 1;
	function onAfter(curr,next,opts) {
		if (opts.currSlide+1 == opts.slideCount) {
			if (myCounter < elemNbr) {
				myCounter = myCounter+1;
			} else if (myCounter == elemNbr) {
				myCounter = 1;
			}

			function reloadCarousels() {
				jQuery(\'.smallCarousel\').stop(true,true).fadeOut(750);
				jQuery(\'#sc\'+myCounter+\'b\').stop(true,true).fadeIn(750).children(\'ul\').cycle({
				    //fx: \'scrollHorz\', // pour transition latérale
				    fx: \'fade\',
				    speed: 1500,
				    timeout: 4000,
					pause: true,
					startingSlide: 0,
					after: onAfter
				});
			jQuery(\'.mainCarousel\').removeClass(\'active\');
			if (myCounter == 1) {
				jQuery(\'.mainCarousel:first\').addClass(\'active\');
			} else {
					jQuery(\'.mainCarousel\').eq(myCounter-1).addClass(\'active\');
			}
		}
			jQuery(\'.smallCarousel\').children(\'ul\').cycle(\'stop\');
			var t2=setTimeout(reloadCarousels,3000);
		} else {
			clearTimeout(t2);
		}
		//alert(myCounter);
	}
	function onAfter2(curr,next,opts) {
		//
	}
	jQuery(\'.smallCarousel ul\').cycle({
	    //fx: \'scrollHorz\', // pour transition latérale
	    fx: \'fade\',
	    speed: 1500,
	    timeout: 4000,
		pause: true,
		startingSlide: 0,
		after: onAfter
	});
	jQuery(\'.smallCarousel\').hide().children(\'ul\').cycle(\'pause\');
	jQuery(\'#sc1b\').show().children(\'ul\').cycle(\'resume\');
	/* faux carousel principal */
	var whatToShow = \'\';
	jQuery(\'.mainCarousel:first\').addClass(\'active\');
	jQuery(document).delegate(\'.mainCarousel\',\'mouseenter focus\', function() {
		jQuery(\'.mainCarousel\').removeClass(\'hover active\');
		jQuery(this).addClass(\'hover active\');
		whatToShow = jQuery(this).children(\'h2\').children(\'a\').attr(\'id\');
		jQuery(\'.smallCarousel\').stop(true,true).fadeOut().children(\'ul\').cycle(\'stop\');
		// jQuery(whatToShow).stop(true,true).fadeIn().children(\'ul\').cycle({fx: \'scrollHorz\',speed: 1500,timeout: 4000,pause: true,after: onAfter2}).cycle(\'resume\'); // avec transition latérale
		jQuery(\'#\'+whatToShow+\'b\').stop(true,true).fadeIn().children(\'ul\').cycle({fx: \'fade\',speed: 1500,timeout: 4000,pause: true,startingSlide: 0,after: onAfter2});
	}).delegate(\'.mainCarousel\',\'mouseleave blur\', function() {
		whatToShow = jQuery(this).children(\'h2\').children(\'a\').attr(\'id\');
		jQuery(this).removeClass(\'hover\');
		// jQuery(\'.smallCarousel\').stop(true,true).fadeOut().children(\'ul\').cycle({fx: \'scrollHorz\',speed: 1500,timeout: 4000,pause: true,after: onAfter}).cycle(\'pause\'); // avec transition latérale
		jQuery(\'.smallCarousel\').stop(true,true).fadeOut().children(\'ul\').cycle(\'stop\');
		jQuery(\'#\'+whatToShow+\'b\').stop(true,true).fadeIn().children(\'ul\').cycle({fx: \'fade\',speed: 1500,timeout: 4000,pause: true,startingSlide: 0,after: onAfter});
		myCounter = jQuery(this).index()+1;
	});
}

/* HOME CYCLE */
function homeCarousel2(elt) {
	/* carousels internes */
	var elemNbr = jQuery(elt+\' > li\').size();
	var myCounter = 1;
	function onAfter(curr,next,opts) {
		if (opts.currSlide+1 == opts.slideCount) {
			if (myCounter < elemNbr) {
				myCounter = myCounter+1;
			} else if (myCounter == elemNbr) {
				myCounter = 1;
			}

			function reloadCarousels() {
				jQuery(\'.smallCarousel2\').stop(true,true).fadeOut(750);
				jQuery(\'#sc\'+myCounter+\'b2\').stop(true,true).fadeIn(750).children(\'ul\').cycle({
				    //fx: \'scrollHorz\', // pour transition latérale
				    fx: \'fade\',
				    speed: 1500,
				    timeout: 4000,
					pause: true,
					startingSlide: 0,
					after: onAfter
				});
			jQuery(\'.mainCarousel2\').removeClass(\'active\');
			if (myCounter == 1) {
				jQuery(\'.mainCarousel2:first\').addClass(\'active\');
			} else {
					jQuery(\'.mainCarousel2\').eq(myCounter-1).addClass(\'active\');
			}
		}
			jQuery(\'.smallCarousel2\').children(\'ul\').cycle(\'stop\');
			var t2=setTimeout(reloadCarousels,3000);
		} else {
			clearTimeout(t2);
		}
		//alert(myCounter);
	}
	function onAfter2(curr,next,opts) {
		//
	}
	jQuery(\'.smallCarousel2 ul\').cycle({
	    //fx: \'scrollHorz\', // pour transition latérale
	    fx: \'fade\',
	    speed: 1500,
	    timeout: 4000,
		pause: true,
		startingSlide: 0,
		after: onAfter
	});
	jQuery(\'.smallCarousel2\').hide().children(\'ul\').cycle(\'pause\');
	jQuery(\'#sc1b2\').show().children(\'ul\').cycle(\'resume\');
	/* faux carousel principal */
	var whatToShow = \'\';
	jQuery(\'.mainCarousel2:first\').addClass(\'active\');
	jQuery(document).delegate(\'.mainCarousel2\',\'mouseenter focus\', function() {
		jQuery(\'.mainCarousel2\').removeClass(\'hover active\');
		jQuery(this).addClass(\'hover active\');
		whatToShow = jQuery(this).children(\'h2\').children(\'a\').attr(\'id\');
		jQuery(\'.smallCarousel2\').stop(true,true).fadeOut().children(\'ul\').cycle(\'stop\');
		// jQuery(whatToShow).stop(true,true).fadeIn().children(\'ul\').cycle({fx: \'scrollHorz\',speed: 1500,timeout: 4000,pause: true,after: onAfter2}).cycle(\'resume\'); // avec transition latérale
		jQuery(\'#\'+whatToShow+\'b2\').stop(true,true).fadeIn().children(\'ul\').cycle({fx: \'fade\',speed: 1500,timeout: 4000,pause: true,startingSlide: 0,after: onAfter2});
	}).delegate(\'.mainCarousel2\',\'mouseleave blur\', function() {
		whatToShow = jQuery(this).children(\'h2\').children(\'a\').attr(\'id\');
		jQuery(this).removeClass(\'hover\');
		// jQuery(\'.smallCarousel\').stop(true,true).fadeOut().children(\'ul\').cycle({fx: \'scrollHorz\',speed: 1500,timeout: 4000,pause: true,after: onAfter}).cycle(\'pause\'); // avec transition latérale
		jQuery(\'.smallCarousel2\').stop(true,true).fadeOut().children(\'ul\').cycle(\'stop\');
		jQuery(\'#\'+whatToShow+\'b2\').stop(true,true).fadeIn().children(\'ul\').cycle({fx: \'fade\',speed: 1500,timeout: 4000,pause: true,startingSlide: 0,after: onAfter});
		myCounter = jQuery(this).index()+1;
	});
}

/*!
 * hoverIntent v1.8.1 // 2014.08.11 // jQuery v1.9.1+
 * http://cherne.net/brian/resources/jquery.hoverIntent.html
 *
 * You may use hoverIntent under the terms of the MIT license. Basically that
 * means you are free to use hoverIntent as long as this header is left intact.
 * Copyright 2007, 2014 Brian Cherne
 */
 
/* hoverIntent is similar to jQuery\'s built-in "hover" method except that
 * instead of firing the handlerIn function immediately, hoverIntent checks
 * to see if the user\'s mouse has slowed down (beneath the sensitivity
 * threshold) before firing the event. The handlerOut function is only
 * called after a matching handlerIn.
 *
 * // basic usage ... just like .hover()
 * .hoverIntent( handlerIn, handlerOut )
 * .hoverIntent( handlerInOut )
 *
 * // basic usage ... with event delegation!
 * .hoverIntent( handlerIn, handlerOut, selector )
 * .hoverIntent( handlerInOut, selector )
 *
 * // using a basic configuration object
 * .hoverIntent( config )
 *
 * @param  handlerIn   function OR configuration object
 * @param  handlerOut  function OR selector for delegation OR undefined
 * @param  selector    selector OR undefined
 * @author Brian Cherne <brian(at)cherne(dot)net>
 */
(function($) {
    $.fn.hoverIntent = function(handlerIn,handlerOut,selector) {

        // default configuration values
        var cfg = {
            interval: 100,
            sensitivity: 6,
            timeout: 0
        };

        if ( typeof handlerIn === "object" ) {
            cfg = $.extend(cfg, handlerIn );
        } else if ($.isFunction(handlerOut)) {
            cfg = $.extend(cfg, { over: handlerIn, out: handlerOut, selector: selector } );
        } else {
            cfg = $.extend(cfg, { over: handlerIn, out: handlerIn, selector: handlerOut } );
        }

        // instantiate variables
        // cX, cY = current X and Y position of mouse, updated by mousemove event
        // pX, pY = previous X and Y position of mouse, set by mouseover and polling interval
        var cX, cY, pX, pY;

        // A private function for getting mouse position
        var track = function(ev) {
            cX = ev.pageX;
            cY = ev.pageY;
        };

        // A private function for comparing current and previous mouse position
        var compare = function(ev,ob) {
            ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t);
            // compare mouse positions to see if they\'ve crossed the threshold
            if ( Math.sqrt( (pX-cX)*(pX-cX) + (pY-cY)*(pY-cY) ) < cfg.sensitivity ) {
                $(ob).off("mousemove.hoverIntent",track);
                // set hoverIntent state to true (so mouseOut can be called)
                ob.hoverIntent_s = true;
                return cfg.over.apply(ob,[ev]);
            } else {
                // set previous coordinates for next time
                pX = cX; pY = cY;
                // use self-calling timeout, guarantees intervals are spaced out properly (avoids JavaScript timer bugs)
                ob.hoverIntent_t = setTimeout( function(){compare(ev, ob);} , cfg.interval );
            }
        };

        // A private function for delaying the mouseOut function
        var delay = function(ev,ob) {
            ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t);
            ob.hoverIntent_s = false;
            return cfg.out.apply(ob,[ev]);
        };

        // A private function for handling mouse \'hovering\'
        var handleHover = function(e) {
            // copy objects to be passed into t (required for event object to be passed in IE)
            var ev = $.extend({},e);
            var ob = this;

            // cancel hoverIntent timer if it exists
            if (ob.hoverIntent_t) { ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t); }

            // if e.type === "mouseenter"
            if (e.type === "mouseenter") {
                // set "previous" X and Y position based on initial entry point
                pX = ev.pageX; pY = ev.pageY;
                // update "current" X and Y position based on mousemove
                $(ob).on("mousemove.hoverIntent",track);
                // start polling interval (self-calling timeout) to compare mouse coordinates over time
                if (!ob.hoverIntent_s) { ob.hoverIntent_t = setTimeout( function(){compare(ev,ob);} , cfg.interval );}

                // else e.type == "mouseleave"
            } else {
                // unbind expensive mousemove event
                $(ob).off("mousemove.hoverIntent",track);
                // if hoverIntent state is true, then call the mouseOut function after the specified delay
                if (ob.hoverIntent_s) { ob.hoverIntent_t = setTimeout( function(){delay(ev,ob);} , cfg.timeout );}
            }
        };

        // listen for mouseenter and mouseleave
        return this.on({\'mouseenter.hoverIntent\':handleHover,\'mouseleave.hoverIntent\':handleHover}, cfg.selector);
    };
})(jQuery);

/*
 * Supersubs v0.2b - jQuery plugin
 * Copyright (c) 2008 Joel Birch
 *
 * Dual licensed under the MIT and GPL licenses:
 * 	http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
 *
 *
 * This plugin automatically adjusts submenu widths of suckerfish-style menus to that of
 * their longest list item children. If you use this, please expect bugs and report them
 * to the jQuery Google Group with the word \'Superfish\' in the subject line.
 *
 */

;(function($){ // $ will refer to jQuery within this closure

	$.fn.supersubs = function(options){
		var opts = $.extend({}, $.fn.supersubs.defaults, options);
		// return original object to support chaining
		return this.each(function() {
			// cache selections
			var $$ = $(this);
			// support metadata
			var o = $.meta ? $.extend({}, opts, $$.data()) : opts;
			// get the font size of menu.
			// .css(\'fontSize\') returns various results cross-browser, so measure an em dash instead
			var fontsize = $(\'<li id="menu-fontsize">—</li>\').css({
				\'padding\' : 0,
				\'position\' : \'absolute\',
				\'top\' : \'-999em\',
				\'width\' : \'auto\'
			}).appendTo($$).width(); //clientWidth is faster, but was incorrect here
			// remove em dash
			$(\'#menu-fontsize\').remove();
			// cache all ul elements
			$ULs = $$.find(\'ul\');
			// loop through each ul in menu
			$ULs.each(function(i) {	
				// cache this ul
				var $ul = $ULs.eq(i);
				// get all (li) children of this ul
				var $LIs = $ul.children();
				// get all anchor grand-children
				var $As = $LIs.children(\'a\');
				// force content to one line and save current float property
				var liFloat = $LIs.css(\'white-space\',\'nowrap\').css(\'float\');
				// remove width restrictions and floats so elements remain vertically stacked
				var emWidth = $ul.add($LIs).add($As).css({
					\'float\' : \'none\',
					\'width\'	: \'auto\'
				})
				// this ul will now be shrink-wrapped to longest li due to position:absolute
				// so save its width as ems. Clientwidth is 2 times faster than .width() - thanks Dan Switzer
				.end().end()[0].clientWidth / fontsize;
				// add more width to ensure lines don\'t turn over at certain sizes in various browsers
				emWidth += o.extraWidth;
				// restrict to at least minWidth and at most maxWidth
				if (emWidth > o.maxWidth)		{ emWidth = o.maxWidth; }
				else if (emWidth < o.minWidth)	{ emWidth = o.minWidth; }
				emWidth += \'em\';
				// set ul to width in ems
				$ul.css(\'width\',emWidth);
				// restore li floats to avoid IE bugs
				// set li width to full width of this ul
				// revert white-space to normal
				$LIs.css({
					\'float\' : liFloat,
					\'width\' : \'100%\',
					\'white-space\' : \'normal\'
				})
				// update offset position of descendant ul to reflect new width of parent
				.each(function(){
					var $childUl = $(\'>ul\',this);
					var offsetDirection = $childUl.css(\'left\')!==undefined ? \'left\' : \'right\';
					$childUl.css(offsetDirection,emWidth);
				});
			});
			
		});
	};
	// expose defaults
	$.fn.supersubs.defaults = {
		minWidth		: 9,		// requires em unit.
		maxWidth		: 25,		// requires em unit.
		extraWidth		: 0			// extra width can ensure lines don\'t sometimes turn over due to slight browser differences in how they round-off values
	};
	
})(jQuery); // plugin code ends

// Inspiré de http://users.tpg.com.au/j_birch/plugins/superfish/
// Menu accessible : http://aquelito.fr/truc/menu3/ 
/*
 * Superfish v1.4.8 - jQuery menu widget
 * Copyright (c) 2008 Joel Birch
 *
 * Dual licensed under the MIT and GPL licenses:
 * 	http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
 *
 * CHANGELOG: http://users.tpg.com.au/j_birch/plugins/superfish/changelog.txt
 */


;(function($){
	$.fn.superfish = function(op){
		var sf = $.fn.superfish,
			c = sf.c,
			$arrow = $([\'<span class="\'+ c.arrowClass +\'"></span>\'].join(\'\')),
			over = function(){
				var $$ = $(this), menu = getMenu($$);
				clearTimeout(menu.sfTimer);
				$$.showSuperfishUl().siblings().hideSuperfishUl();
			},
			out = function(){
				var $$ = $(this), menu = getMenu($$), o = sf.op;
				clearTimeout(menu.sfTimer);
				menu.sfTimer=setTimeout(function(){
					o.retainPath=($.inArray($$[0],o.$path)>-1);
					$$.hideSuperfishUl();
					if (o.$path.length && $$.parents([ \'li.\', o.hoverClass ].join(\'\')).length<1){over.call(o.$path);}
				},o.delay);	
			},
			getMenu = function($menu){
				var menu = $menu.parents([ \'ul.\', c.menuClass, \':first\' ].join(\'\'))[0];
				sf.op = sf.o[menu.serial];
				return menu;
			},
			addArrow = function($a){ $a.addClass(c.anchorClass).append($arrow.clone()); };
			
		return this.each(function() {
			var s = this.serial = sf.o.length;
			var o = $.extend({},sf.defaults,op);
			o.$path = $(\'li.\'+ o.pathClass,this).slice(0, o.pathLevels).each(function(){
				$(this).addClass([o.hoverClass,c.bcClass].join(\' \'))
					.filter(\'li:has(ul)\').removeClass(o.pathClass);
			});
			sf.o[s] = sf.op = o;
			
			$(\'li:has(ul)\',this)[($.fn.hoverIntent && !o.disableHI) ? \'hoverIntent\' : \'hover\'](over,out).each(function() {
				if (o.autoArrows) { 
					addArrow( $(\' > a:first-child\',this) );
					addArrow( $(\' > strong > a:first-child\',this) );
				}
			})
			.not(\'.\'+c.bcClass)
				.hideSuperfishUl();
			
			var $a = $(\'a\',this);
			$a.each(function(i){
				var $li = $a.eq(i).parents(\'li\');
				$a.eq(i).focus(function() { over.call($li); } ).blur(function() { out.call($li); });
			});
			o.onInit.call(this);
			
		}).each(function() {
			var menuClasses = [c.menuClass];
			if (sf.op.dropShadows  && !($.browser.msie && $.browser.version < 7)) menuClasses.push(c.shadowClass);
			$(this).addClass(menuClasses.join(\' \'));
		});
	};

	var sf = $.fn.superfish;
	sf.o = [];
	sf.op = {};
	sf.IE7fix = function(){
		var o = sf.op;
		if ($.browser.msie && $.browser.version > 6 && o.dropShadows && o.animation.opacity != undefined)
			this.toggleClass(sf.c.shadowClass + \'-off\');
		};
	sf.c = {
		bcClass     : \'sf-breadcrumb\',
		menuClass   : \'drop\',
		anchorClass : \'sf-with-ul\',
		arrowClass  : \'sf-sub-indicator\',
		shadowClass : \'sf-shadow\'
	};
	sf.defaults = {
		hoverClass	: \'sfhover\',
		pathClass	: \'overideThisToUse\',
		pathLevels	: 1,
		delay		: 800,
		animation	: {opacity:\'show\'},
		speed		: \'normal\',
		autoArrows	: true,
		dropShadows : true,
		disableHI	: false,		// true disables hoverIntent detection
		onInit		: function(){}, // callback functions
		onBeforeShow: function(){},
		onShow		: function(){},
		onHide		: function(){}
	};
	$.fn.extend({
		hideSuperfishUl : function(){
			var o = sf.op,
				not = (o.retainPath===true) ? o.$path : \'\';
			o.retainPath = false;
			var $ul = $([\'li.\',o.hoverClass].join(\'\'),this).add(this).not(not).removeClass(o.hoverClass).find(\' > ul\');
			o.onHide.call($ul);
			return this;
		},
		showSuperfishUl : function(){
			var o = sf.op,
				sh = sf.c.shadowClass+\'-off\',
				$ul = this.addClass(o.hoverClass).find(\' > ul:hidden\');
			sf.IE7fix.call($ul);
			o.onBeforeShow.call($ul);
			$ul.animate(o.animation, o.speed, function(){ sf.IE7fix.call($ul); o.onShow.call($ul); });
			return this;
		}
	});
})(jQuery);

/*! Copyright (c) 2010 Brandon Aaron (http://brandonaaron.net)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Version 2.1.2
 */

(function($){

$.fn.bgiframe = ($.browser.msie && /msie 6\\.0/i.test(navigator.userAgent) ? function(s) {
    s = $.extend({
        top     : \'auto\', // auto == .currentStyle.borderTopWidth
        left    : \'auto\', // auto == .currentStyle.borderLeftWidth
        width   : \'auto\', // auto == offsetWidth
        height  : \'auto\', // auto == offsetHeight
        opacity : true,
        src     : \'javascript:false;\'
    }, s);
    var html = \'<iframe class="bgiframe"tabindex="-1"src="\'+s.src+\'"\'+
                   \'style="display:block;position:absolute;z-index:-1;\'+
                       (s.opacity !== false?\'filter:Alpha(Opacity=\\\'0\\\');\':\'\')+
                       \'top:\'+(s.top==\'auto\'?\'expression(((parseInt(this.parentNode.currentStyle.borderTopWidth)||0)*-1)+\\\'px\\\')\':prop(s.top))+\';\'+
                       \'left:\'+(s.left==\'auto\'?\'expression(((parseInt(this.parentNode.currentStyle.borderLeftWidth)||0)*-1)+\\\'px\\\')\':prop(s.left))+\';\'+
                       \'width:\'+(s.width==\'auto\'?\'expression(this.parentNode.offsetWidth+\\\'px\\\')\':prop(s.width))+\';\'+
                       \'height:\'+(s.height==\'auto\'?\'expression(this.parentNode.offsetHeight+\\\'px\\\')\':prop(s.height))+\';\'+
                \'"/>\';
    return this.each(function() {
        if ( $(this).children(\'iframe.bgiframe\').length === 0 )
            this.insertBefore( document.createElement(html), this.firstChild );
    });
} : function() { return this; });

// old alias
$.fn.bgIframe = $.fn.bgiframe;

function prop(n) {
    return n && n.constructor === Number ? n + \'px\' : n;
}

})(jQuery);

$(document).ready(function() {
	myInitPages();
	// Ceci devrait régler le problème de l\'ajustement des colonne pas toujours fait
	$(window).on(\'load\',function() {
		myInitLayout();
	});
});

' .
(find_in_path('images/sc_javascript_perso.js.html')  ?
		('/* Complément personnalisé du JS */' . (	'
' .
	recuperer_fond( 'images/sc_javascript_perso.js' , array(), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/javascripts.js.html','html_13fdf04f035a967a3a864d5aa25df257','',825,$GLOBALS['spip_lang'])), _request('connect')) .
	'
')) :
		'') .
'

// Fin Encapsulation pour permettre l\'utilisation de jQl, cf http://permalink.gmane.org/gmane.comp.web.spip.zone/38793
//});

' .
(find_in_path('js/soyezcreateurs_perso.js')  ?
		('/* Surcharge eventuelle */' . (	'
' .
	filtre_compacte_dist(charge_scripts(liens_absolus(find_in_path('js/soyezcreateurs_perso.js')),false),'js') .
	'
')) :
		''));

	return analyse_resultat_skel('html_13fdf04f035a967a3a864d5aa25df257', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/javascripts.js.html');
}
?>