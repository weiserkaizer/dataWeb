<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac.html
 * Date :      Fri, 27 Jul 2018 10:49:29 GMT
 * Compile :   Sat, 11 Aug 2018 14:49:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac.html
// Temps de compilation total: 30.599 ms
//

function html_448ff5c64d625f3d718e749782e800e4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'LargeurContaineur'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):''))) .
'<script type="text/javascript">
	CanceladjustLayout = true;
</script>
<main id="main" role="main"><div id="cognac_content">
<a id="letexte"></a>

' .
recuperer_fond( 'bloc_compiler' , array_merge($Pile[0],array('id_conteneur' => 'contenu/corps_sommaire_modecognac' )), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac.html','html_448ff5c64d625f3d718e749782e800e4','',7,$GLOBALS['spip_lang'])), _request('connect')) .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("SOCIALTAGS", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . '<div id="socialtags"></div>') :
		'') .
'

</div><!-- cognac_content --></main>

' .
(($t1 = strval(find_in_path('javascript/packery.pkgd.min.js')))!=='' ?
		('<script src="' . $t1 . '" type="text/javascript"></script>') :
		'') .
'
' .
(($t1 = strval(find_in_path('javascript/imagesloaded.pkgd.min.js')))!=='' ?
		('<script src="' . $t1 . '" type="text/javascript"></script>') :
		'') .
'
<script type="text/javascript">
	// slider Slick
	$(document).ready(function(){
		$(\'#diaporama .slider-slick\').slick({
		  autoplay: true,
		  pauseOnHover: true,
		  autoplaySpeed: ' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/vitesse_slider','10000',false):'')) .
',
		  fade: true,
		  cssEase: \'linear\',
		  arrows: false,
		  dots: true,
		  centerMode: true,
		  focusOnSelect: true
		});
		
		$(\'#cycloshow .slider-slick\').slick({
		  autoplay: true,
		  pauseOnHover: true,
		  autoplaySpeed: ' .
interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs/vitesse_slider','10000',false):'')) .
',
		  fade: true,
		  cssEase: \'linear\',
		  arrows: true,
		  dots: true,
		  centerMode: true,
		  focusOnSelect: true
		});
		
		// Pour que les éventuelles vidéos soient jouées
		// Ceci concerne la première vidéo (ou la seule)
		var vid = $(\'.slider-slick\').find(\'video\');
		if (vid.length > 0)
			$(vid).get(0).play();
		//  Ceci concerne les autres vidéos
		$(\'.slider-slick\').on(\'afterChange\', function(event, slick, currentSlide){
			var vid = $(slick.$slides[currentSlide]).find(\'video\');
			if (vid.length > 0)
				$(vid).get(0).play();
		});
		
		$(\'.slider-pratique\').slick({
		  dots: false,
		  slidesToShow: ' .
intval(div(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),'304')) .
',
		  slidesToScroll: 3,
		  infinite: true,
		  variableWidth: true,
			responsive: [
				{
				  breakpoint: ' .
intval(moins(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),'304')) .
',
				  settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					infinite: true,
					dots: true
				  }
				},
				{
				  breakpoint: 640,
				  settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				  }
				}
			  ]
		});
	});
	// external js: packery.pkgd.js, imagesloaded.pkgd.js
	// init packery after all images have loaded
	var $grid = $(\'.grid\').imagesLoaded( function() {
	  $grid.packery({
		itemSelector: \'.grid-item\',
		gutter: \'.gutter-sizer\',
		columnWidth: \'.grid-sizer\',
		percentPosition: false
	  });
	});
</script>

' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_448ff5c64d625f3d718e749782e800e4', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/sommaire/sommaire_modeportailcognac.html');
}
?>