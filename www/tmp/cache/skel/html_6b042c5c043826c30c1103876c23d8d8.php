<?php

/*
 * Squelette : plugins/auto/soyezcreateurs/v4.3.16/noisettes/googleanalytics.html
 * Date :      Thu, 26 Jul 2018 13:23:58 GMT
 * Compile :   Sat, 11 Aug 2018 14:48:54 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/soyezcreateurs/v4.3.16/noisettes/googleanalytics.html
// Temps de compilation total: 2.567 ms
//

function html_6b042c5c043826c30c1103876c23d8d8($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts((include_spip('inc/config')?lire_config('soyezcreateurs_google/google_analytics',null,false):''))))!=='' ?
		('<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'' . $t1 . '\', \'auto\');
  ga(\'require\', \'displayfeatures\');
  ga(\'send\', \'pageview\');

</script>') :
		'') .
'
' .
'<' . '?php header("X-Spip-Filtre: '.'mini_html' . '"); ?'.'>');

	return analyse_resultat_skel('html_6b042c5c043826c30c1103876c23d8d8', $Cache, $page, 'plugins/auto/soyezcreateurs/v4.3.16/noisettes/googleanalytics.html');
}
?>