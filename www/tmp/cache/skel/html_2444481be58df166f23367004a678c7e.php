<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/stylesportailcognac.css.html
 * Date :      Tue, 31 Jul 2018 12:58:12 GMT
 * Compile :   Sat, 11 Aug 2018 14:48:53 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/stylesportailcognac.css.html
// Temps de compilation total: 28.635 ms
//

function html_2444481be58df166f23367004a678c7e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 86400"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=86400"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>' .
vide($Pile['vars'][$_zzz=(string)'c_triadea'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/triadea','#be1621',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_triadeb'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/triadeb','#129b9b',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_triadec'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/triadec','#c38f06',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_vignettes_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/vignettes_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_navigation'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/navigation','#017ca5',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_body_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/body_bk','#eceded',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_logo_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/logo_bk','transparent',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_header'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/header','#262626',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_header_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/header_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_footer'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/footer','#595959',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_footer_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/footer_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_navigation'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/navigation','#017ca5',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_navigation_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/navigation_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menuhaut'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menuhaut','#017ca5',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menuhaut_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menuhaut_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_extra'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/extra','#017ca5',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_extra_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/extra_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_datemajsite'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/datemajsite','#595959',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_datemajsite_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/datemajsite_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a','#005e7a',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a_bk','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a_hover'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a_hover','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a_hover_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a_hover_bk','#0b7899',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a_active'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a_active','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a_active_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a_active_bk','#0b7899',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a_strong'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a_strong','#ffffff',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_menu_a_strong_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/menu_a_strong_bk','#0b7899',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_container'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/container','#02265a',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_container_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/container_bk','#f6f6f6',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_titraille'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/titraille','#005e7a',false):''))) .
vide($Pile['vars'][$_zzz=(string)'c_titraille_bk'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/titraille_bk','#f6f6f6',false):''))) .
vide($Pile['vars'][$_zzz=(string)'LargeurContaineur'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):''))) .
vide($Pile['vars'][$_zzz=(string)'LargeurMenuGauche'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurmenugauche','180',false):''))) .
vide($Pile['vars'][$_zzz=(string)'LargeurMenuDroit'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurmenudroit','180',false):''))) .
vide($Pile['vars'][$_zzz=(string)'LargeurMilieu'] = div(moins(moins(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null)),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)),'2')) .
vide($Pile['vars'][$_zzz=(string)'masonry'] = '308') .
'#miettesdepain, .boutonstexte {display: none; }

div#content { width: 100%; }
.portailcognac .boutonstexte {
	right: 0;
}


{
  /* clearfix */
  /* ---- grid ---- */
  /* ---- grid-item ---- */
}
iframe {
  width: 100%;
}
img {
  display: inline-block;
  vertical-align: middle;
  max-width: 100%;
  height: auto;
  -ms-interpolation-mode: bicubic;
}
:focus {
  outline: none;
}
select {
  cursor: pointer;
}
.spip_logo {
  max-width: 100%;
}
.ariaformprop {
  padding: 0;
  margin: 0;
  position: relative;
  z-index: 99;
  background-color: white;
  font-size: 80%;
}
.ajaxbloc {
  height: 100%;
}
.row {
  margin-right: auto;
  margin-left: auto;
}
.text-center {
  text-align: center;
}
.text-right {
  text-align: right;
}
.text-left {
  text-align: left;
}
.menu {
  margin: 0;
  list-style-type: none;
}
.menu > li {
  display: table-cell;
  vertical-align: middle;
}
.vertical > li {
  display: block;
  vertical-align: middle;
}

.hide {
  display: none;
}
.sans-border {
  border: 0;
}
.avec-border {
  border: 1px solid #aaa;
}
.avec-border-top {
  border-top: 1px solid #aaa;
}
.avec-border-bottom {
  border-bottom: 1px solid #aaa;
}
.avec-border-left {
  border-left: 1px solid #aaa;
}
.sans-margin {
  margin: 0;
}
.avec-margin {
  margin: 1.5em;
}
.avec-margin-top {
  margin-top: 1.5em;
}
.avec-margin-right {
  margin-right: 1.5em;
}
.avec-margin-bottom {
  margin-bottom: 1.5em;
}
.avec-margin-bottom05 {
  margin-bottom: .5em;
}
.avec-margin-bottom015 {
  margin-bottom: .15em;
}
.avec-margin-left {
  margin-left: 1.5em;
}
@media screen and (min-width: 40em) {
  .avec-margin-bottom-for-medium {
    margin-bottom: 1.5em;
  }
}
.sans-padding {
  padding: 0;
}
@media screen and (max-width: 40em) {
  .sans-padding-for-small {
    padding: 0;
  }
}
.avec-padding {
  padding: 1em;
}
.avec-padding05 {
  padding: .5em;
}
.avec-padding-top {
  padding-top: 1em;
}
.avec-padding-top05 {
  padding-top: .5em;
}
.avec-padding-top15 {
  padding-top: 1.5em;
}
.avec-padding-right {
  padding-right: 1em;
}
.avec-padding-right05 {
  padding-right: .5em;
}
.avec-padding-bottom {
  padding-bottom: 1em;
}
.avec-padding-left {
  padding-left: 1em;
}
.avec-padding-leftright {
  display: block;
  padding-right: 1em;
  padding-left: 1em;
}
.display-block {
  display: block;
}
.text-transform-none {
  text-transform: none;
}
.text-uppercase {
  text-transform: uppercase;
}
.font-style-italic {
  font-style: italic;
}
.position-relative {
  position: relative;
}
.float-left {
  float: left ;
}
.float-right {
  float: right ;
}
.float-center {
  display: table;
  margin-right: auto ;
  margin-left: auto ;
}
.z-index-999 {
  z-index: 999;
}
.cursor-pointer {
  cursor: pointer;
}

.portailcognac #letexte {
  display: none;
}
.portailcognac #content {
  padding: 0;
  background-color: transparent;
}
.portailcognac #contenu {
  max-width: 100%;
  width: 100%;
}
.portailcognac #contenu #content {
  max-width: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
}
#contenu #content img {
  padding: 0;
}
#projets {
  margin: 0;
  padding: 0;
}
#projets projet {
  width: 50%;
  float: left;
}
#projets a {
  display: flex;
  flex-direction: row;
  align-content: center;
  height: 20vw;
  color: white;
  border: none;
}
#projets a:hover {
  color: #333;
}
#projets h2 {
  width: 100%;
  height: auto;
  margin: auto;
  padding: 0 10px;
  align-self: center;
  color: inherit;
  font-size: 3vw;
  font-weight: 300;
  text-align: center;
  line-height: 50px;
}
#projets .suite {
  background-color: rgba(100, 100, 100, 0.5) ;
  display: flex;
  height: auto;
  padding: 0 25px;
}
#projets .suite .icon {
  margin: auto;
  align-self: center;
  font-size: 0;
}
#projets .suite .icon:before {
  font-size: 4vw;
}
@media only screen and (max-width: 1024px) {
  #projets h2 {
    font-size: 36px;
    line-height: 38px;
  }
}
@media only screen and (max-width: 768px) {
  #projets h2 {
    font-size: 30px;
    line-height: 34px;
  }
}
@media only screen and (max-width: 640px) {
  #projets .projet {
    width: 100%;
    float: none;
  }
  #projets .projet a {
    height: auto;
  }
  #projets h2 {
    padding: 1rem;
    font-size: 26px;
    line-height: 30px;
  }
  #projets .suite {
    padding: 0 15px;
  }
  #projets .suite .icon {
    font-size: 0;
  }
}
.hasJS .slider:not(:first-child) { display:none; }
.hasJS .slick-initialized .slider:not(:first-child) { display:block; }


.slider-pratique {
  margin: 0 4rem;
}
#cycloshow .slick-prev,
#cycloshow .slick-next,
.slider-pratique .slick-prev,
.slider-pratique .slick-next {
  width: 60px;
  height: 70px;
  text-shadow: initial;
}
.slider-pratique .slick-prev {
  left: -60px;
}
#cycloshow .slick-prev:before,
.slider-pratique .slick-prev:before {
  content: "\\276c";
}
.slider-pratique .slick-next {
  right: -60px;
}
#cycloshow .slick-next:before,
.slider-pratique .slick-next:before {
  content: "\\276d";
}
#cycloshow .slick-prev:before,
#cycloshow .slick-next:before {
  font-family: "picto-soyezcreateurs" ;
  font-size: 50px;
  opacity: 1;
  color: #FFF;
}
.slider-pratique .slick-prev:before,
.slider-pratique .slick-next:before {
  margin-left: -20px;
  font-family: "picto-soyezcreateurs" ;
  font-size: 50px;
  opacity: 1;
  color: ' .
table_valeur($Pile["vars"], (string)'c_triadea', null) .
';
}
.slider-pratique .slick-prev:hover:before,
.slider-pratique .slick-prev:focus:before,
.slider-pratique .slick-next:hover:before,
.slider-pratique .slick-next:focus:before {
  opacity: 1;
  color: #333 ;
}
.slider-pratique button:hover,
.slider-pratique button:focus {
  background-color: transparent;
}
.slick-prev:hover, .slick-prev:focus, .slick-next:hover, .slick-next:focus {
    background: rgba(48,48,48,0.5);
}
.slider-pratique .content-pratique {
  background-color: ' .
table_valeur($Pile["vars"], (string)'c_triadeb', null) .
';
  width: 280px;
  margin: 0 12px;
  -webkit-transition: all .25s ease;
  transition: all .25s ease;
}
.slider-pratique .content-pratique:hover,
.slider-pratique .content-pratique:focus {
  background-color: rgba(18, 155, 155, 0.2) ;
  -webkit-transition: all .25s ease;
  transition: all .25s ease;
}
.slider-pratique .content-pratique:hover h2,
.slider-pratique .content-pratique:focus h2 {
  color: #129b9b ;
}
.slider-pratique .h2 {
  display: flex;
  height: 150px;
  margin: 1.5em 0 0 0;
  padding-bottom: 90px;
  font-family: \'Open Sans\', sans-serif ;
  font-size: 26px;
  color: white;
  font-weight: 300;
  text-align: right;
  border-bottom: none;
}
.slider-pratique .h2 .titre-pratique {
  width: 100%;
  align-self: center;
  padding: 10px;
  text-align: right;
  border-right: 1px solid;
}
.slider-pratique .h2 .icon {
  align-self: center;
  padding: 7px 15px 7px 7px;
  font-size: 0;
}
.slider-pratique .h2 .icon:before {
  font-size: 30px;
}
@media only screen and (max-width: 400px) {
  .slider-pratique {
    margin: 0 2.8rem;
  }
  .slider-pratique .content-pratique {
    width: 240px;
  }
  .slider-pratique .h2 {
    height: 130px;
    padding-bottom: 0;
    font-size: 21px;
  }
}

#content .titre-sommaire {
  margin-top: 4em;
}
#content .titre-sommaire:before {
  content: "";
  display: block;
  background-color: ' .
table_valeur($Pile["vars"], (string)'c_titraille', null) .
';
  width: 100%;
  height: 1px;
}
#content .titre-sommaire h1 {
  display: block;
  background-color: ' .
table_valeur($Pile["vars"], (string)'c_titraille_bk', null) .
';
max-width: ' .
moins(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),'44') .
'px;
  margin: -1.1em auto 1em auto;
  padding: .5em .8em .5em;
  color: ' .
table_valeur($Pile["vars"], (string)'c_titraille', null) .
';
  font-size: 2rem;
  line-height: 1em;
  border-left: 1px solid ' .
table_valeur($Pile["vars"], (string)'c_titraille', null) .
';
}
@media screen and (max-width: 1178px) {
   #content .titre-sommaire h1 {
    border-left: none;
  }
}
 .slick-slider {
  margin-bottom: 0;
}
 .slider-slick img {
  width: 100%;
}
 .slick-slide img {
  margin: 0 auto;
}
 .slick-slide .row {
  max-width: none;
}
 .slick-dots {
  bottom: -45px;
}
 .slick-dots li {
  width: 30px;
  height: 30px;
}
 .slick-dots li button {
  width: 30px;
  height: 30px;
}
 .slick-dots li button::before {
  font-size: 20px;
  line-height: 30px;
  width: 30px;
  height: 30px;
}
 .slick-dots li.slick-active button::before {
  color: ' .
table_valeur($Pile["vars"], (string)'c_triadea', null) .
';
}
 #liens-diaporama {
  position: absolute;
  top: 100px;
  right: 0;
}
@media only screen and (max-width: 1024px) {
   #liens-diaporama {
    top: 5vw;
  }
}
@media only screen and (max-width: 767px) {
   #liens-diaporama {
    position: relative;
    top: 50px;
  }
}
 #liens-diaporama ul {
  width: 220px;
  text-align: right;
}
@media only screen and (max-width: 767px) {
  #liens-diaporama ul {
    display: flex;
    width: 100%;
    flex-wrap: wrap;
  }
  #liens-diaporama li {
    flex-grow: 1;
  }
}
@media only screen and (max-width: 767px) {
   #liens-diaporama li a span {
    padding: .25em .5em;
  }
}
 #liens-diaporama li a span.icon {
  margin-left: .55rem;
  padding: .85rem .5rem;
  font-size: 0;
  border-left: 1px solid ' .
table_valeur($Pile["vars"], (string)'c_titraille', null) .
';
}
 #liens-diaporama li a span.icon:before {
  font-size: 2.15rem;
}
 #liens-diaporama li a:hover {
  color: #666 ;
}
@media only screen and (max-width: 767px) {
   #liens-diaporama li a {
    background-color: #eae9e5;
    margin-left: .5em;
  }
}
 #actualites {
  margin-top: 7em;
}
 #lesprojets {
  margin-top: 5em;
}
 #lesprojets .titre-sommaire {
  display: none;
}

 #pratique {
  margin-top: 6.5em;
  margin-bottom: 4em;
}
 .clearfix:after,
 .grid:after {
  content: \'\';
  display: block;
  clear: both;
}
 .grid-item .h2 .icon:before {
  font-size: 30px;
}
 .grid-item-x2 {
  width: calc(50% - 20px) ;
}
 .grid-item-x3 {
  width: calc(75% - 20px) ;
}
#sommaire_mode_portailcognac header .logo_rubrique { margin-bottom: 3em; }
#liens-diaporama {
  position: absolute;
  top: 100px;
  right: 0;
}
@media only screen and (max-width:' .
table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
'px) {
  #liens-diaporama {
    top: 5vw;
  }
}
@media only screen and (max-width: 767px) {
  #liens-diaporama {
    position: relative;
    top: 50px;
  }
}
#liens-diaporama ul {
  width: 220px;
  text-align: right;
}
@media only screen and (max-width: 767px) {
  #liens-diaporama ul {
    display: flex;
    width: 100%;
    flex-wrap: wrap;
  }
}
#liens-diaporama li {
  /* Si le fond est clair, on va le prendre comme couleur de fond, sinon, la couleur d\'écriture Texte : ' .
table_valeur($Pile["vars"], (string)'c_header', null) .
'(' .
filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_header', null)) .
')/ Fond : ' .
table_valeur($Pile["vars"], (string)'c_header_bk', null) .
'(' .
filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_header_bk', null)) .
') */
  background-color: rgba(' .
sc_rgb(((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_header_bk', null)) == 'ffffff') ? table_valeur($Pile["vars"], (string)'c_header_bk', null):table_valeur($Pile["vars"], (string)'c_header', null))) .
', 0.75);
}
#diaporama .liste_auteurs { text-align: left; padding: 0 1em; }

#diaporama .datepublication,
#cycloshow .datepublication {
	float: none;
	background-color : transparent;
	color: inherit;
}

@media only screen and (max-width: 767px) {
  #liens-diaporama li {
    flex-grow: 1;
  }
}
#liens-diaporama li a {
  display: flex;
  font-size: 1.2em;
  color: ' .
((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_header_bk', null)) == 'ffffff') ? table_valeur($Pile["vars"], (string)'c_header', null):table_valeur($Pile["vars"], (string)'c_header_bk', null)) .
';
  justify-content: flex-end;
  line-height: 1 ;
  align-items: center;
}
#liens-diaporama li a span {
  padding: .5em .25em .5em .5em;
}
@media only screen and (max-width: 767px) {
  #liens-diaporama li a span {
    padding: .25em .5em;
  }
}
#liens-diaporama li a span.icon {
  border-left: 1px solid;
  border-left-color: inherit;
}
@media only screen and (max-width: 767px) {
  #liens-diaporama li a {
    background-color: #eae9e5;
    margin-left: .5em;
  }
}

.slick-slide img {
  margin: 0 auto;
}
.slick-slide .row {
  max-width: none;
}
.slick-dots {
  bottom: -45px;
}
.slick-dots li {
  width: 30px;
  height: 30px;
}
.slick-dots li button {
  width: 30px;
  height: 30px;
}
.slick-dots li button::before {
  font-size: 20px;
  line-height: 30px;
  width: 30px;
  height: 30px;
}
#content img {
  padding: 0;
}
.clearfix:after,
.grid:after {
  content: \'\';
  display: block;
  clear: both;
}
#diaporama {
	margin-bottom: 9em;
}
#editotexte {
  max-width: ' .
moins(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),'44') .
'px;
  margin: 0 auto;
  padding: 1em 2em;
  color: ' .
table_valeur($Pile["vars"], (string)'c_container', null) .
';
  background-color: ' .
table_valeur($Pile["vars"], (string)'c_container_bk', null) .
';
  ' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparencecontent','1',false):'') != '1')) ?' ' :''))))!=='' ?
		($t1 . (	'background-color: rgba(' .
	sc_rgb(table_valeur($Pile["vars"], (string)'c_container_bk', null)) .
	', ' .
	interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_couleurs/transparencecontent','1',false):'')) .
	');')) :
		'') .
'
}
#content #edito .titre-sommaire h1 {
	margin-bottom: 0;
}
img.editologo {
  max-width: ' .
table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
'px;
  margin: 0 auto;
  display: block;
}



/* gestion block texte sur slider : CycloShow */
#cycloshow {
	position: relative;
	max-width: ' .
table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
'px;
	width: 100%;
    margin: 0 auto 7em auto;
}


.slider-diapo-imgfull {
  position: relative;
}
@media screen and (max-width: 39.9375em) {
  .hide-for-small-only {
    display: none !important;
  }
}
.slider-content.desc-gauche {
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: center;
  background-color: rgba(152, 152, 152, 0.7);
  top: 0;
  bottom: 0;
  left: 8%;
  width: 27%;
  padding: 1.75em !important;
}
#content .slider-content.desc-gauche h3 {
  margin: 0 0 1em 0;
  padding: 0;
  color: ' .
table_valeur($Pile["vars"], (string)'c_triadec', null) .
';
  font-family: \'Oswald\', sans-serif;
  font-weight: 300;
  font-size: 2.15em;
  line-height: 1.15em;
  text-align: left;
}
.slider-content.desc-gauche p {
  font-size: 1.25em;
  color: white;
  line-height: 1.35;
}
@media screen and (max-width: 100em) {
  .slider-content.desc-gauche h3 {
    margin: 0 0 .5em;
    font-size: 1.75em;
  }
  .slider-content.desc-gauche p {
    font-size: 1.1em;
  }
}
@media screen and (max-width: 80em) {
  .slider-content.desc-gauche {
    left: 8%;
    width: 346px;
    padding: 1.5em !important;
  }
  .slider-content.desc-gauche h3 {
    margin: 0 0 .5em;
    font-size: 1.5em;
  }
  .slider-content.desc-gauche p {
    font-size: 1.1em;
  }
}
@media screen and (max-width: 410px) {
  .slider-content.desc-gauche {
    left: 0;
    width: 100%;
  }
}




#masonry {
  max-width: ' .
table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
'px;
  margin: 0 auto;
  padding-left: 20px;
  text-align: center;
}
.grid {
  text-align: center;
}
.grid-item {
  margin-bottom: 20px;
  -webkit-transition: all .25s ease;
  transition: all .25s ease;
  background-color: #eae9e5;
  float: left;
  margin-right: 20px;
}
.grid-item .content-actus:hover,
.grid-item .content-actus:focus {
  /* Si le fond est clair, on va le prendre comme couleur de fond, sinon, la couleur d\'écriture Texte : ' .
table_valeur($Pile["vars"], (string)'c_header', null) .
'(' .
filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_header', null)) .
')/ Fond : ' .
table_valeur($Pile["vars"], (string)'c_header_bk', null) .
'(' .
filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_header_bk', null)) .
') */
  background-color: rgba(' .
sc_rgb(((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_header_bk', null)) == 'ffffff') ? table_valeur($Pile["vars"], (string)'c_header_bk', null):table_valeur($Pile["vars"], (string)'c_header', null))) .
', 0.2);
  -webkit-transition: all .25s ease;
  transition: all .25s ease;
}
.grid-item .content-actus {
  /* Si le fond est clair, on va le prendre comme couleur de fond, sinon, la couleur d\'écriture Texte : ' .
table_valeur($Pile["vars"], (string)'c_header', null) .
'(' .
filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_header', null)) .
')/ Fond : ' .
table_valeur($Pile["vars"], (string)'c_header_bk', null) .
'(' .
filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_header_bk', null)) .
') */
  background-color: #' .
filtrer('couleur_foncerluminosite',((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_header_bk', null)) == 'ffffff') ? table_valeur($Pile["vars"], (string)'c_header_bk', null):table_valeur($Pile["vars"], (string)'c_header', null)),'20') .
';
}
.grid-item .content-actus:nth-child(2) {
  margin-top: 16px;
}
.grid-item header {
  font-size: 1.5em;
  font-weight: 300;
  line-height: 21px;
  overflow: auto;
}
.agenda strong {
  font-size: 1.8em;
  vertical-align: bottom;
}
.agenda .annee {
  font-size: 1.8em;
}
.agenda time {
  padding: 0 .25em;
}
.agenda {height: 95px; }
.grid-item .h2 {
  display: flex;
  flex-direction: row;
  width: 100%;
  height: 95px;
  margin: 0;
  font-size: 21px;
  font-weight: 400;
  color: ' .
((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_header_bk', null)) == '000000') ? table_valeur($Pile["vars"], (string)'c_header_bk', null):table_valeur($Pile["vars"], (string)'c_header', null)) .
';
  line-height: 21px;
  padding: 10px;
  text-align: right;
  border: none;
}
.grid-item .agenda .h2 {
  font-size: 18px;
}
.grid-item .agenda .date {
  padding: 0;
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}
.agenda time {
    text-align: center;
}
.agenda .debutfin time {
    text-align: left;
}
.grid-item .agenda .date.debutfin {
  display: block;
  align-items: left;
  justify-content: left;
}

.grid-item .h2 .icon {
  font-size: 0;
  align-self: center;
  padding: 7px 0 7px 7px;
}
.grid-item .h2 .titre-actus {
    width: 100%;
    align-self: center;
    padding: 10px 10px 10px 0;
    border-right: 1px solid;
}
.grid-item img {
  max-width: 100%;
}
.grid-item {
  margin-bottom: 20px;
}
/* Affichage des dates. cf https://codepen.io/jpyrat/pen/EmZrpR */
.date {
  width: 95px;
  height: 95px;
  position: relative;
  background: ' .
((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_header_bk', null)) == '000000') ? table_valeur($Pile["vars"], (string)'c_header_bk', null):table_valeur($Pile["vars"], (string)'c_header', null)) .
';
  color: ' .
((filtrer('couleur_extreme',table_valeur($Pile["vars"], (string)'c_header_bk', null)) == '000000') ? table_valeur($Pile["vars"], (string)'c_header', null):table_valeur($Pile["vars"], (string)'c_header_bk', null)) .
';
}

.debutfin:after {
  content: "";
  position: absolute;
  right: 0;
  top: 0;
  border-top: 2px solid #fff;
  width: 142%;
  transform: rotate(-45deg);
  transform-origin: 99% 0%;
}

.debut, .fin {
  width: 75%;
  height: 50%;
  position: absolute;
  text-align: left;
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: #fff;
  line-height: 1.2em;
  font-size: 75%;
}

.agenda .debutfin time.fin {
  right: 0;
  top: 50%;
  text-align: right;
}

.ladate {
  margin:0;
  padding:0;
}

.annee {
  font-size: 1.2em;
  line-height: 0.82em;
  display: block;
}


/*
M : ' .
plus(mult(table_valeur($Pile["vars"], (string)'masonry', null),'3'),'100') .
'
LC: ' .
table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
'*/
.gutter-sizer { width: 20px; }
' .
(((plus(mult(table_valeur($Pile["vars"], (string)'masonry', null),'3'),'100') <= table_valeur($Pile["vars"], (string)'LargeurContaineur', null)))  ?
		(' ' . (	'
	.grid-sizer, .grid-item {
	  width: calc(25% - 20px);
	}
	.grid-item {
	  height: calc(340px + 65px);
	}
	.grid-item-demie {
	  height: calc(127px + 65px);
	  margin-bottom: 0;
	}
	.grid-item-x2 {
	  width: calc(50% - 20px);
	}
	.grid-item-x3 {
	  width: calc(75% - 20px);
	}
	@media only screen and (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
	  .grid-item {
		height: calc(340px + 90px);
	  }
	  .grid-item-demie {
		height: calc(127px + 90px);
		margin-bottom: 0;
	  }
	}
')) :
		'') .
'
' .
(!((plus(mult(table_valeur($Pile["vars"], (string)'masonry', null),'3'),'100') <= table_valeur($Pile["vars"], (string)'LargeurContaineur', null)))  ?
		(' ' . '
	.grid-sizer, .grid-item {
	  width: calc(33.333% - 20px);
	}
	.grid-item {
	height: calc(340px + 90px);
	}
	.grid-item-demie {
	height: calc(127px + 90px);
	margin-bottom: 0;
	}
	.grid-item-x2 {
	width: calc(66.666% - 20px);
	}
	.grid-item-x3 {
	width: calc(100% - 20px);
	}
') :
		'') .
'
@media only screen and (max-width:' .
plus(mult(table_valeur($Pile["vars"], (string)'masonry', null),'3'),'100') .
'px) {
  .grid-sizer, .grid-item {
    width: calc(33.333% - 20px);
  }
  .grid-item {
    height: calc(340px + 90px);
  }
  .grid-item-demie {
    height: calc(127px + 90px);
	margin-bottom: 0;
  }
  .grid-item-x2 {
    width: calc(66.666% - 20px);
  }
  .grid-item-x3 {
    width: calc(100% - 20px);
  }
}
@media only screen and (max-width: ' .
plus(mult(table_valeur($Pile["vars"], (string)'masonry', null),'2'),'80') .
'px) {
  .grid-sizer, .grid-item {
    width: calc(50% - 20px);
  }
  .grid-item {
    height: calc(340px + 90px);
  }
  .grid-item-demie {
    height: calc(127px + 90px);
	margin-bottom: 0;
  }
  .grid-item-x2 {
    width: calc(100% - 20px);
  }
}
@media only screen and (max-width: ' .
plus(mult(table_valeur($Pile["vars"], (string)'masonry', null),'1'),'60') .
'px) {
  .grid-sizer, .grid-item {
    width: calc(100% - 20px);
  }
  .grid-item {
    height: auto;
  }
}
#lesprojets {
  margin-top: 5em;
  margin-bottom: 4em;
}
#projets {
  margin: 0;
  padding: 0;
}
#projets .projet {
  background-color: #777;
}
@media only screen and (min-width: 641px) {
 #projets .projet {
  width: 50%;
  float: left;
 }
}


#projets .projet:hover {
  background-color: #aaa;
}

@media only screen and (max-width:' .
table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
'px) {
  #projets h2 {
    font-size: 36px;
    line-height: 38px;
  }
}
@media only screen and (max-width: 768px) {
  #projets h2 {
    font-size: 30px;
    line-height: 34px;
  }
}
@media only screen and (max-width: 640px) {
  #projets article {
    width: 100%;
    float: none;
  }
  #projets article a {
    height: auto;
  }
  #projets h2 {
    padding: 1rem;
    font-size: 26px;
    line-height: 30px;
  }
}

#pratique {
  margin-bottom: 4em;
}

' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("lesscss", "est_actif")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(find_in_path('images/stylesportailcognac_perso.less.html')  ?
			('/* Surcharge eventuelle */' . (	'
	
		' .
		(($t3 = strval(file_get_contents(appliquer_filtre(supprimer_timestamp(produire_fond_statique( 'images/stylesportailcognac_perso.less' , array('format' => 'less' ), array('compil'=>array('plugins/auto/soyezcreateurs/v4.3.16/stylesportailcognac.css.html','html_2444481be58df166f23367004a678c7e','',40,$GLOBALS['spip_lang'])), _request('connect'))),'less_css'))))!=='' ?
				($t3 . (	'
		' .
			vide($Pile['vars'][$_zzz=(string)'lessdone'] = '1'))) :
				'') .
		'
	')) :
			'') .
	'
')) :
		'') .
'
' .
(!(table_valeur($Pile["vars"], (string)'lessdone', null))  ?
		(' ' . (	'
' .
	(find_in_path('images/stylesportailcognac_perso.css')  ?
			('/* Surcharge eventuelle */' . (	'
' .
		filtre_compacte_dist(charge_scripts(url_absolue_css(find_in_path('images/stylesportailcognac_perso.css')),false),'css') .
		'
')) :
			'') .
	'
')) :
		''));

	return analyse_resultat_skel('html_2444481be58df166f23367004a678c7e', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/stylesportailcognac.css.html');
}
?>