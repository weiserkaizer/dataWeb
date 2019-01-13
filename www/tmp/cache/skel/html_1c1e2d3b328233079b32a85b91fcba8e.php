<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/layout.css.html
 * Date :      Thu, 26 Jul 2018 13:24:01 GMT
 * Compile :   Sat, 11 Aug 2018 14:48:51 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/layout.css.html
// Temps de compilation total: 43.495 ms
//

function html_1c1e2d3b328233079b32a85b91fcba8e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 86400"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=86400"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>' .
vide($Pile['vars'][$_zzz=(string)'LargeurOmbre'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurombre','0',false):''))) .
vide($Pile['vars'][$_zzz=(string)'LargeurContaineurOmbres'] = interdire_scripts(plus(plus((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):''),table_valeur($Pile["vars"], (string)'LargeurOmbre', null)),table_valeur($Pile["vars"], (string)'LargeurOmbre', null)))) .
vide($Pile['vars'][$_zzz=(string)'LargeurContaineurOmbre'] = interdire_scripts(plus((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):''),table_valeur($Pile["vars"], (string)'LargeurOmbre', null)))) .
vide($Pile['vars'][$_zzz=(string)'LargeurContaineur'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurconteneur','960',false):''))) .
vide($Pile['vars'][$_zzz=(string)'LargeurMenuGaucheOmbre'] = interdire_scripts(plus((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurmenugauche','180',false):''),table_valeur($Pile["vars"], (string)'LargeurOmbre', null)))) .
vide($Pile['vars'][$_zzz=(string)'LargeurMenuGauche'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurmenugauche','180',false):''))) .
vide($Pile['vars'][$_zzz=(string)'LargeurMenuDroitOmbre'] = interdire_scripts(plus((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurmenudroit','180',false):''),table_valeur($Pile["vars"], (string)'LargeurOmbre', null)))) .
vide($Pile['vars'][$_zzz=(string)'LargeurMenuDroit'] = interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_layout/largeurmenudroit','180',false):''))) .
'/* http://blog.html.it/layoutgala/index.html */
' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '1')) ?' ' :''))))!=='' ?
		($t1 . '/* 1 */
div#wrapper{float:left;width:100%}
div#content{margin: 0 25%}
div#navigation{float:left;width:25%;margin-left:-100%}
div#extra{float:left;width:25%;margin-left:-25%}
div#footer{clear:left;width:100%}
') :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '2')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 2 */
div#wrapper{float:left;width:100%}
div#content{margin: 0 25%}
div#navigation{float:left;width:25%;margin-left:-25%}
div#extra{float:left;width:25%;margin-left:-100%}
div#footer{clear:left;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#navigation{float:right;width:50%}
div#extra{float:left;width:50%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '3')) ?' ' :''))))!=='' ?
		($t1 . '/* 3 */
div#wrapper{float:left;width:100%}
div#content{margin-right: 50%}
div#navigation{float:left;width:25%;margin-left:-50%}
div#extra{float:left;width:25%;margin-left:-25%}
div#footer{clear:left;width:100%}
') :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '4')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 4 */
div#wrapper{float:left;width:100%}
div#content{margin-right: 50%}
div#navigation{float:left;width:25%;margin-left:-25%}
div#extra{float:left;width:25%;margin-left:-50%}
div#footer{clear:left;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#navigation{float:right;width:50%}
div#extra{float:left;width:50%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '5')) ?' ' :''))))!=='' ?
		($t1 . '/* 5 */
div#wrapper{float:left;width:100%}
div#content{margin-left: 50%}
div#navigation{float:left;width:25%;margin-left:-100%}
div#extra{float:left;width:25%;margin-left:-75%}
div#footer{clear:left;width:100%}
') :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '6')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 6 */
div#wrapper{float:left;width:100%}
div#content{margin-left: 50%}
div#navigation{float:left;width:25%;margin-left:-75%}
div#extra{float:left;width:25%;margin-left:-100%}
div#footer{clear:left;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#navigation{float:right;width:50%}
div#extra{float:left;width:50%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '7')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 7 */
div#container{width:' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbres', null) .
	'px;margin:0 auto}
div#wrapper{float:left;width:100%}
div#content{margin: 0 ' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroitOmbre', null) .
	'px 0 ' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGaucheOmbre', null) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbre', null) .
	'px}
div#extra{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroitOmbre', null) .
	'px}
div#footer{clear:left;width:100%}
')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '8')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 8 */
div#container{width:' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbres', null) .
	'px;margin:0 auto}
div#wrapper{float:left;width:100%}
div#content{margin: 0 ' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px 0 ' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px}
div#footer{clear:left;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#navigation{float:right;width:50%}
div#extra{float:left;width:50%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '9')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 9 */
div#container{width:' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbres', null) .
	'px;margin:0 auto}
div#wrapper{float:left;width:100%}
div#content{margin-right:' .
	plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px;margin-left:-' .
	plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#extra{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px}
div#footer{clear:left;width:100%}
')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '10')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 10 */
div#container{width:' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbres', null) .
	'px;margin:0 auto}
div#wrapper{float:left;width:100%}
div#content{margin-right:' .
	plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px;margin-left:-' .
	plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#footer{clear:left;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#navigation{float:right;width:50%}
div#extra{float:left;width:50%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '11')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 11 */
div#container{width:' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbres', null) .
	'px;margin:0 auto}
div#wrapper{float:left;width:100%}
div#content{margin-left: ' .
	plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px}
div#extra{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px;margin-left:-' .
	moins(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null)) .
	'px}
div#footer{clear:left;width:100%}
')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '12')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 12 */
div#container{width:' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbres', null) .
	'px;margin:0 auto}
div#wrapper{float:left;width:100%}
div#content{margin-left: ' .
	plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px;margin-left:-' .
	moins(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#extra{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px}
div#footer{clear:left;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#navigation{float:right;width:50%}
div#extra{float:left;width:50%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '13')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 13 */
div#wrapper{float:left;width:100%;}
div#content{margin: 0 ' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px 0 ' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px;margin-left:-100%}
div#extra{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px}
div#footer{clear:left;width:100%}
')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '14')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 14 */
div#wrapper{float:left;width:100%}
div#content{margin: 0 ' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px 0 ' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px;margin-left:-100%}
div#footer{clear:left;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#navigation{float:right;width:50%}
div#extra{float:left;width:50%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '15')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 15 */
div#wrapper{float:left;width:100%}
div#content{margin-right: ' .
	plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px;margin-left:-' .
	plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#extra{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px}
div#footer{clear:left;width:100%}
')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '16')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 16 */
div#wrapper{float:left;width:100%}
div#content{margin-right: ' .
	plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px;margin-left:-' .
	plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#footer{clear:left;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#navigation{float:right;width:50%}
div#extra{float:left;width:50%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '17')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 17 */
div#wrapper{float:right;width: 100%;margin-left: -' .
	plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#content{margin-left:' .
	plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#navigation{float:right;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{float:right;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px}
div#footer{clear:right;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#navigation{float:right;width:50%}
div#extra{float:left;width:50%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '18')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 18 */
div#wrapper{float:right;width: 100%;margin-left: -' .
	plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#content{margin-left:' .
	plus(table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null),table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null)) .
	'px}
div#navigation{float:left;width: ' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{float:right;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px}
div#footer{clear:both;width:100%}
')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '19')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 19 */
div#wrapper{float:left;width:100%}
div#content{margin: 0 33% 0 ' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px;margin-left:-100%}
div#extra{float:left;width:33%;margin-left:-33%}
div#footer{clear:left;width:100%}
')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '20')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 20 */
div#wrapper{float:left;width:100%}
div#content{margin: 0 ' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px 0 33%}
div#navigation{float:left;width:33%;margin-left:-100%}
div#extra{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px}
div#footer{clear:left;width:100%}
')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '21')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 21 */
div#wrapper{float:left;width:100%;margin-left:-25%}
div#content{margin: 0 ' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px 0 25%}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{float:left;width:25%}
div#footer{clear:left;width:100%}
')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '22')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 22 */
div#wrapper{float:left;width:100%;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px}
div#content{margin: 0 25% 0 ' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px}
div#navigation{float:left;width:25%;margin-left:-25%}
div#extra{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuDroit', null) .
	'px}
div#footer{clear:left;width:100%}
')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '23')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 23 */
div#wrapper{float:left;width:100%;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#content{margin-left:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#navigation{float:right;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{float:right;clear:right;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#footer{clear:both;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#wrapper{margin-left:0}
div#navigation{float:left;width:50%}
div#extra{float:left;width:50%;}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '24')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 24 */
div#wrapper{float:right;width:100%;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#content{margin-left:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{float:left;clear:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#footer{clear:both;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#wrapper{margin-left:0}
div#navigation{float:left;width:50%}
div#extra{float:left;width:50%;clear:none;}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '25')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 25 */
div#wrapper{float:left;width:100%;margin-left:-33%}
div#content{margin-left:33%}
div#navigation{float:right;width:32.9%}
div#extra{float:right;clear:right;width:32.9%}
div#footer{clear:both;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#wrapper{margin-left:0}
div#navigation{float:left;width:50%}
div#extra{float:left;width:50%;clear:none;}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '26')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 26 */
div#wrapper{float:right;width:80%;}
div#navigation{float:left;width:20%}
div#extra{float:left;clear:left;width:20%}
div#footer{clear:both;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#wrapper{margin-left:0}
div#navigation{float:left;width:50%}
div#extra{float:left;width:50%;clear:none;}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '62')) ?' ' :''))))!=='' ?
		($t1 . '/* 26 modifie - identifiant 62 */
div#wrapper{float:right;width:80%;margin-left:-.5%}
div#navigation{float:left;width:20.5%}
div#extra{float:left;clear:left;width:20%}
div#footer{clear:both;width:100%}
') :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '27')) ?' ' :''))))!=='' ?
		($t1 . '/* 27 */
div#navigation{float:left;width:50%}
div#extra{float:left;width:49.9%}
div#footer{clear:left;width:100%}
') :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '28')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 28 */
div#navigation{float:right;width:50%}
div#extra{float:right;width:49.9%}
div#footer{clear:right;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#navigation{float:right;width:50%}
div#extra{float:left;width:50%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '29')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 29 */
div#wrapper{float:right;width:70%}
div#navigation{float:left;width:29.9%}
div#extra{clear:both;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#wrapper{float:none; width:100%;}
div#navigation{float:left;width:50%}
div#extra{float:left;width:50%;clear:none;}
div#footer{clear:left;width:100%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '30')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 30 */
div#wrapper{float:left;width:70%}
div#navigation{float:right;width:29.9%}
div#extra{clear:both;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#wrapper{float:none; width:100%;}
div#navigation{float:left;width:50%}
div#extra{float:left;width:50%;clear:none;}
div#footer{clear:left;width:100%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '31')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 31 */
div#wrapper{float:left;width:100%;}
div#content{margin-left:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px;margin-left:-100%}
div#extra{clear:left;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#wrapper{float:none; width:100%;}
div#navigation{float:left;width:50%}
div#extra{float:left;width:50%;clear:none;}
div#footer{clear:left;width:100%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '32')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 32 */
div#wrapper{float:left;width:100%}
div#content{margin-right:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px;margin-left:-' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{clear:left;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#wrapper{float:none; width:100%;}
div#navigation{float:left;width:50%}
div#extra{float:left;width:50%;clear:none;}
div#footer{clear:left;width:100%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '33')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 33 */
div#container{width:' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbres', null) .
	'px;margin:0 auto}
div#content{float:left;width:' .
	plus(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),(	'-' .
		table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null))) .
	'px}
div#navigation{float:right;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{float:right;clear:right;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#footer{clear:both;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#wrapper{margin-left:0}
div#navigation{float:left;width:50%}
div#extra{float:left;width:50%;}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '34')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 34 */
div#container{width:' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbres', null) .
	'px;margin:0 auto}
div#content{float:right;width:' .
	plus(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),(	'-' .
		table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null))) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{float:left;clear:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#footer{clear:both;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#wrapper{margin-left:0}
div#content{float:none;}
div#navigation{float:left;width:50%}
div#extra{float:left;width:50%;clear:none;}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '35')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 35 */
div#container{width:' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbres', null) .
	'px;margin:0 auto}
div#content{float:left;width:' .
	plus(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),(	'-' .
		table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null))) .
	'px}
div#navigation{float:right;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{float:left;width:' .
	plus(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),(	'-' .
		table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null))) .
	'px}
div#footer{clear:both;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#navigation{float:left;width:50%}
div#extra{float:left;width:50%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '36')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 36 */
div#container{width:' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbres', null) .
	'px;margin:0 auto}
div#content{float:right;width:' .
	plus(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),(	'-' .
		table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null))) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{float:right;width:' .
	plus(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),(	'-' .
		table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null))) .
	'px}
div#footer{clear:both;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#navigation{float:left;width:50%}
div#extra{float:left;width:50%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '37')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 37 */
div#container{width:' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbres', null) .
	'px;margin:0 auto}
div#content{float:left;width:' .
	moins(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null)) .
	'px}
div#navigation{float:right;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{clear:both;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#wrapper{float:none; width:100%;}
div#navigation{float:left;width:50%}
div#extra{float:left;width:50%;clear:none;}
div#footer{clear:left;width:100%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '38')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 38 */
div#container{width:' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbres', null) .
	'px;margin:0 auto}
div#content{float:right;width:' .
	moins(table_valeur($Pile["vars"], (string)'LargeurContaineur', null),table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null)) .
	'px}
div#navigation{float:left;width:' .
	table_valeur($Pile["vars"], (string)'LargeurMenuGauche', null) .
	'px}
div#extra{clear:both;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#wrapper{float:none; width:100%;}
div#navigation{float:left;width:50%}
div#extra{float:left;width:50%;clear:none;}
div#footer{clear:left;width:100%}
}')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '39')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 39 */
div#wrapper{float:left;width:100%}
div#container{width:' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbres', null) .
	'px;margin:0 auto}
div#navigation{float:left;width:50%}
div#extra{float:right;width:50%}
div#footer{clear:both;width:100%}
')) :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'layoutgala', null),true) == '40')) ?' ' :''))))!=='' ?
		($t1 . (	'/* 40 */
div#container{width:' .
	table_valeur($Pile["vars"], (string)'LargeurContaineurOmbres', null) .
	'px;margin:0 auto}
div#navigation{float:right;width:50%}
div#extra{float:left;width:50%}
div#footer{clear:both;width:100%}
@media (max-width: ' .
	table_valeur($Pile["vars"], (string)'LargeurContaineur', null) .
	'px) {
div#navigation{float:right;width:50%}
div#extra{float:left;width:50%}
}')) :
		'') .
'
');

	return analyse_resultat_skel('html_1c1e2d3b328233079b32a85b91fcba8e', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/layout.css.html');
}
?>