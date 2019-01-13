<?php
/*
* Correspondance des articles pour ne pas mettre trop dans les autres fichiers
* Realisation : Yohann : prigent.yohann@gmail.com
* et RealET : real3t@gmail.com
* Attention, fichier en UTF-8 sans BOM
*/

if (!defined('_ECRIRE_INC_VERSION')) return;

include_spip("inc/lang");
include_spip("inc/charsets");	

function trouve_article_sc($article) {
	$contenu = array();
	// Les articles du site

	/* 10. Premiers pas dans le squelette SoyezCreateurs */
	if ($article == "10. Premiers pas dans le squelette SoyezCreateurs") {
		$contenu['titre'] = "10. Premiers pas dans le squelette SoyezCreateurs";
		$contenu['texte'] = <<<EOF
Bravo !!!!

Vous avez correctement passé la première étape en installant ce squelette.

Et maintenant vous vous demandez « Que faire ? »

Ce squelette est entièrement personnalisable et il va vous permettre de changer les différents critères suivants : 
-* Pour changer l'Édito, créer un article et lui affecter le mot clef <code>EDITO</code>
-* Pour changer le nom du site et son logo : {URL de votre site}<code>/ecrire/?exec=configurer_identite</code>
_ Le logo de survol s'il est présent est utilisé comme bannière en haut du site[[Lui donner précisément la taille voulue]]
-* Configuration du Squelette SoyezCreateurs {URL de votre site}<code>/ecrire/?exec=configurer_soyezcreateurs&cfg=soyezcreateurs</code> (ex : position Logo) [[Attention, l'accès à cette configuration est réservée aux webmestres du site, par défaut, l'auteur n°1 avec ce squelette.]]
-* Choisir la disposition des différents parties du site parmi 40 modèles disponibles {URL de votre site}<code>/ecrire/?exec=configurer_soyezcreateurs&cfg=soyezcreateurs_layout</code> (source: [LayoutGala->http://blog.html.it/layoutgala/index.html])

Vous trouverez aussi plusieurs documentations disponibles aux adresses ci-dessous : 
-* [pyrat.net->https://www.pyrat.net/] :
-** [Rédacteurs SPIP : la boîte à outils->https://www.pyrat.net/556]
-** [Les raccourcis typographiques indispensables de SPIP->https://www.pyrat.net/452]
-** [Rédiger pour Internet afin d’être lu et trouvé->https://www.pyrat.net/313]
-** [Erreurs classiques de mise en forme typographique->https://www.pyrat.net/351]
-* Les 2 groupes de Mots Clés : 
-** [Navigation->https://www.pyrat.net/@mot.html]
-** [Fonctionnels->https://www.pyrat.net/@motsfonctionnels.html]
EOF;
		$contenu['nom_site'] = "Original de l'article";
		$contenu['url_site'] = "https://contrib.spip.net/?article3075";
	}

	/* Contact */
	if ($article == "Contact") {
		$contenu['titre'] = "Contact";
		$contenu['virtuel'] = "aut1";
		$contenu['descriptif'] = "Prenez contact avec nous";
	}

	/* 20. Raccourcis Typographiques de SPIP, mode d'emploi */
	if ($article == "20. Raccourcis Typographiques de SPIP, mode d'emploi") {
		$contenu['titre'] = "20. Raccourcis Typographiques de SPIP, mode d'emploi";
		$contenu['chapo'] = <<<EOF
{{Un préalable important}} : la mise en page d'un texte est au service du {{sens}} de celui-ci, pas du goût personnel de celui qui se trouve devant l'écran! Or, les raccourcis typographiques de SPIP portent en eux-mêmes du {{sens}}. Il est {{important}} d'avoir une correspondance entre le {{sens}} typographique et le {{sens}} du texte. Par exemple, un titre du point de vue du texte doit aussi l'être du point de vue typographique.

N'oubliez pas non plus que votre site sera lu par des visiteurs pouvant être dans des résolutions d'écran différentes de la vôtre et qu'une «belle» mise en page chez vous pourrait être complètement différente pour le visiteur.

Avant d'aller plus loin, vous pouvez lire avec profit : [Raccourcis typographiques indispensables de SPIP->https://www.pyrat.net/452].
EOF;
		$contenu['texte'] = <<<EOF
{{{Le texte préexiste à la mise en page}}}

C'est peut-être une évidence, mais pour mettre en page un texte, il faut que le texte existe.

Dans le cas de SPIP, ça veut dire qu'il vaut mieux (au moins dans un premier temps):

-* disposer de tout le texte sans aucun raccourci typographique,
-* sauter une ligne à chaque changement d'idée (ce qui donne un changement de paragraphe, voire un titre),
-* faire un retour à la ligne avant chaque élément d'une énumération.

Ce n'est qu'ensuite que les raccourcis typographiques de SPIP pourront être appliqués avec discernement.

{{{Distinction entre paragraphes et caractères}}}

Certains attributs typographiques ne peuvent s'appliquer qu'à des paragraphes entiers, d'autres doivent être appliqués à des caractères dans le {{même}} paragraphe.

Dans la Barre Typographique de SPIP, les attributs de caractères forment le premier groupe sur la gauche, les attributs typographiques de paragraphes le deuxième.[definition_ancre<-]

{{{**Paragraphes}}}

Un paragraphe dans SPIP est précédé d'une ligne vide et suivi d'une ligne vide[[Sauf les listes à puce et les tableaux]].

Une règle générale est de ne mettre qu'un attribut de paragraphe par paragraphe.

Si deux paragraphes de suite ont le même attribut, il faut appliquer {{deux}} fois l'attribut, une fois pour chaque paragraphe.

Les attributs de paragraphe ne sont pas disponibles dans les champs de SPIP n'ayant qu'une ligne.

Les attributs de paragraphe sont :

-* les titres <code>{{{</code>Paragraphe du titre<code>}}}</code> et sous-titres <code>{{{*</code>Texte du titre<code>}}}</code>, avec un nombre d'* (étoiles) variant de 2 à 5, la barre de raccourcis ne proposant que 2 et 3.
_ [*Attention*]: il est essentiel de respecter la {{hiérarchie}} de la titraille et de ne pas commencer par un élément sans qu'il soit précédé de son niveau supérieur (on ne doit pas commencer à 2 !). Voir les exemples de [titraille->#titraille]
_ [*Remarque*] : <code>{{{</code>Titre de premier niveau<code>}}}</code> est strictement équivalent à <code>{{{*</code>Titre de premier niveau<code>}}}</code>.

-* centrer <code>[|</code>Paragraphe centré<code>|]</code> : à n'utiliser que de manière {{exceptionnelle}}[[J'avais mis ça en place à l'époque de la version 1.7 de SPIP qui gérait mal le centrage des images]] !

[|Paragraphe centré|]

-* aligner à droite <code>[/</code>Paragraphe aligné à droite<code>/]</code> : essentiellement pour mettre la signature d'un auteur

[/Paragraphe aligné à droite/]

-* encadrer <code>[(</code>Paragraphe à encadrer<code>)]</code>

[(Paragraphe à encadrer)]

Certains attributs sont un peu spéciaux :

-* Poésie <code><poesie></code>Le texte de la poésie, sur plusieurs lignes, les retour à la ligne simple {{étant}} pris en compte<code></poesie></code>

<poesie>Le geai gélatineux gégnait dans le jasmin
Voici mes infins le plus beau vers de la langue française.</poesie>

-* Cadre <code><cadre></code>Texte qui apparaitra dans une zone de formulaire facilitant le copier/coller[[Essentiellement utilisé sur spip-contrib pour donner des exemples de code]]<code></cadre></code>

<cadre>
Ceci est du texte dans un cadre.
      les espaces en début de ligne comptent !
Les retours à la ligne simples aussi !
</cadre>

{{{***Citation}}}

Soit à l'intérieur d'un paragraphe :<code><quote></code>Texte d'une citation<code></quote></code>

Proverbe connu : <quote>C'est en forgeant que l'on devient forgeron.</quote>

Soit formant un bloc :

<code><quote>
L'amour naît d'un cœur déchiré tant il s'est agrandi.
</quote></code>

<quote>
L'amour naît d'un cœur déchiré tant il s'est agrandi.
</quote>


{{{**Caractères}}}

Les attributs de caractères {{doivent}} être ouverts et fermés à l'intérieur du même paragraphe (pas question de débuter le gras sur un premier paragraphe et de le terminer sur un deuxième).

Ils peuvent être utilisés dans {{tous}} les champs de SPIP.

{{{***Mise en forme}}}

-* gras : <code>{{</code>texte en gras<code>}}</code>; à utiliser pour un élément que l'on souhaite appuyer (sera prononcé plus fort dans un logiciel de lecture vocal) : {{texte en gras}}
-* italique : <code>{</code>italique<code>}</code>; à utiliser pour une élément sur lequel on veut insister (sera prononcé avec emphase) : {italique}
-* mise en évidence <code>[*</code>texte en évidence<code>*]</code> : élément que l'on souhaite appuyer en attirant le regard par un changement de couleur : [*texte en évidence*]
-* mise en exposant : <code><sup></code>texte en exposant<code></sup></code> : pour l'abréviation de saint : S<sup>t</sup>
-* petites capitales : <code><sc></code>texte en petite capitales<code></sc></code> : à utiliser essentiellement pour les noms propres : Charles <sc>de Gaulle</sc>
-* code : <html><tt>&lt;code&gt;</tt></html>du code (raccourcis typographiques, html...)<html><tt>&lt;/code&gt;</tt></html> que l'on ne souhaite pas que SPIP interprète
-* biffé : <code><del></code>texte biffé<code></del></code> : pour indiquer qu'on avait pensé à un autre mot et que l'on a changé d'avis : SPIP, c'est <del>bien</del> fantastique!

{{{***Comportement spécifique}}}

{{{****Aides à la compréhension du texte}}}

-* bulle d'aide : <code>[GPL|Gnu Public Licence]</code> : pour donner la signification d'un terme ou d'une abréviation : [GPL|Gnu Public Licence]
_ Ce raccourcis est beaucoup moins nécessaire depuis que vous disposez de [->444] automatiques.

{{{****Liens internes et externes}}}

-* lien : <code>[texte du lien->https://www.spip.net/]</code> : lien : [texte du lien->https://www.spip.net/]
_ À noter qu'il est possible de faire des liens à l'intérieur du site SPIP à l'aide des {{numéros}} des éléments et de leur type (se reporter à l'aide en ligne fournie par SPIP).
-* lien avec bulle d'aide : <code>[texte du lien|Le site officiel de SPIP->https://www.spip.net/]</code> : [texte du lien|Le site officiel de SPIP->https://www.spip.net/]
-* lien avec langue de destination (non visible sur Internet Explorer) : <code>[texte du lien|{fr}->https://www.spip.net/]</code> : [texte du lien|{fr}->https://www.spip.net/]
-* lien avec bulle d'aide et langue de destination : <code>[texte du lien|Le site officiel de SPIP{fr}->https://www.spip.net/]</code> : [texte du lien|Le site officiel de SPIP{fr}->https://www.spip.net/]
-* ancre et retour à l'ancre : <code>[definition_ancre<-]</code> et <code>[retour à l'ancre->#definition_ancre]</code> : [retour à l'ancre->#definition_ancre]
-* définition dans Wikipedia : <code>[?GPL]</code> : appelle l'encyclopédie libre Wkipedia pour obtenir la définition du mot[[Si le mot n'existe pas, vous pouvez le créer vous-même!]] : [?GPL]
_ Avec bulle d'aide : <code>[?GPL|Définition sur Wikipédia]</code> : [?GPL|Définition sur Wikipédia]
-* note de bas de page : <code>texte[[note de bas de page]]</code> : crée une note de bas de page avec le texte entre les doubles crochets[[Et la note de bas de page est automatiquement numérotée, rendue clicable, pour la consulter, et pour revenir au texte l'ayant appelée]]

{{{**Listes}}}

Les listes sont à utiliser pour tout ce qui à le {{sens}} d'une énumération.

{{Attention}}: il faut entourer un bloc de listes à puces d'une ligne vide avant et après.

{{{***Listes à puces}}}

<cadre>
-* première ligne
-* deuxième ligne
-** une sous liste à puce
-* de retour dans le niveau initial
</cadre>

Donnera :

-* première ligne
-* deuxième ligne
-** une sous liste à puce
-* de retour dans le niveau initial

{{{***Listes numérotées}}}

<cadre>
-# première ligne
-# deuxième ligne
-## une sous liste à puce
-# de retour dans le niveau initial
</cadre>

Donnera :

-# première ligne
-# deuxième ligne
-## une sous liste numérotée
-# de retour dans le niveau initial

{{{**Tableaux}}}

Pour être complètement accessible, un tableau dans SPIP doit avoir un titre et une description.

Ainsi :

<cadre>
||Produits bio et prix|Ce tableau sert d'exemple de mise en forme spip||
| {{Produit}} | {{Prix €}} |
| Beurre Bio | 5€ |
| Lait Bio | 3€ |
| Choux Bio | 4€ |
</cadre>

Donnera :

||Produits bio et prix|Ce tableau sert d'exemple de mise en forme spip||
| {{Produit}} | {{Prix €}} |
| Beurre Bio | 5€ |
| Lait Bio | 3€ |
| Choux Bio | 4€ |

Notez les doubles <code>||</code>[[Le signe | se fait sous Windows avec la combinaison AltGR-6.]] sur la première ligne du tableau !

[*Attention*]: les pièges classiques avec les tableaux sont :

-* ne pas avoir le même nombre de | sur une ligne
-* avoir un espace {{après}} le dernier | de la ligne (un moyen simple de vérifier : la touche fin du clavier amène à la fin de la ligne)

{{{**Tableaux avec fusion de cellules}}}

<cadre>
||Tableau avec fusion|Ce tableau sert d'exemple de mise en forme spip||
| {{Colonne 1}} | {{Colonne 2}} | {{Colonne 3}} |
| ligne 1 | Cellule fusionnée avec la suivante |<|
| ligne 2 | Cellule fusionnée
_ avec celle du dessous | normale |
| ligne 2 |^| normale aussi |
</cadre>

Donnera :

||Tableau avec fusion|Ce tableau sert d'exemple de mise en forme spip||
| {{Colonne 1}} | {{Colonne 2}} | {{Colonne 3}} |
| ligne 1 | Cellule fusionnée avec la suivante |<|
| ligne 2 | Cellule fusionnée
_ avec celle du dessous | normale |
| ligne 2 |^| normale aussi |

Principe :
-* <code>|<|</code> fusionne avec la cellule de gauche
-* <code>|^|</code> fusionne avec la cellule au dessus

{{{Images}}}

Pour les images et documents, reportez-vous à l'aide en ligne de SPIP. Seule contrainte pour l'accessibilité (et donc un meilleur référencement) : donnez un titre à {{toutes}} vos images décrivant le {{[sens|signification]}} de chacune d'elles.

{{{Caractères spéciaux}}}

-* <code>~</code> (espace insécable ou espace dur -- correspond au <code>&nbsp;</code> du [HTML|Hyper Text Markup Language]) placé entre deux mots remplace l'espace en ayant l'avantage d'être insécable, c'est-à-dire, qu'il empêchera les deux mots d'être séparés par un retour à la ligne malvenu. S'utilise en particulier entre le prénom et le nom propre.
-* <code>--></code> : --> (flèche vers la droite)
-* <code><--</code> : <-- (flèche vers la gauche)
-* <code><--></code> : <--> (flèche vers la gauche et vers droite)
-* <code>==></code> : ==> (double flèche vers la droite)
-* <code><==</code> : <== (double flèche vers la gauche)
-* <code><==></code> : <==> (double flèche vers la gauche et vers droite)
-* <code>--</code> : -- (tiret cadratin) à utiliser pour les incises dans un texte
-* <code>...</code> : ... (3 petits points) points de suspension
-* <code>(c)</code> : (c) : CopyRight
-* <code>(r)</code> : (r) : Registered
-* <code>(tm)</code> : (tm) : Trade Mark

{{{Ligne horizontale}}}

<code>----</code>: 4 signes moins en seuls sur une ligne (précédés d'une ligne vide et suivis d'une ligne vide) donneront un trait de séparation horizontal.

---- 

{{{Éléments dangereux}}}

Il y a deux éléments {{dangereux}} dans SPIP :

-* le retour à la ligne simple : <code>_ </code> (souligné espace) en début de ligne.
_ Usage toléré pour donner adresse et numéro de téléphone/fax.
_ Usage toléré : dans une liste à puce pour passer à la ligne sans passer à une nouvelle puce (comme ici).
_ Usage {{[*interdit*]}}: pour mettre plus d'espace vertical entre deux éléments de la page.
-* le [?HTML] pur : il est {possible} dans SPIP de mettre du code [HTML|Hyper Text Markup Language]. Le faire est fortement déconseillé :
-** parce que c'est la porte ouverte à toutes les dérives, ne serait-ce que celle de sortir de la charte graphique du site, ou celle de produire un code HTML non valide (voire non interprétable ailleurs que sur [Internet Explorer->115]
-** parce que c'est partir du postulat que votre site ne sera visité qu'en tant que site web ; il pourrait très bien être un jour disponible sous forme de fichiers PDF...

[titraille<-]

{{{Exemples de titraille : Titre principal}}}

<code>{{{</code>Exemples de titraille : Titre principal<code>}}}</code>

{{{**Titre niveau deux}}}

<code>{{{**</code>Titre niveau deux<code>}}}</code>

{{{***Titre niveau trois}}}

<code>{{{***</code>Titre niveau trois<code>}}}</code>

{{{****Titre niveau quatre}}}

<code>{{{****</code>Titre niveau quatre<code>}}}</code>

{{{*****Titre niveau cinq}}}

<code>{{{*****</code>Titre niveau cinq<code>}}}</code>

{{{Placement des images}}}

<img1|left><code><img1|left></code>

----

<img1|center>
<code><img1|center></code>

----

<img1|right><code><img1|right></code>

----

<doc1|left><code><doc1|left></code>

----

<doc1|center>
<code><doc1|center></code>

----

<doc1|right><code><doc1|right></code>

----

<emb1|left><code><emb1|left></code>

----

<emb1|center>
<code><emb1|center></code>

----

<emb1|right><code><emb1|right></code>

----

EOF;
		$contenu['ps'] = <<<EOF
Une extension pour FireFox est très utile pour savoir rapidement si vous avez fait une erreur de raccourcis typographiques : [HTML VALIDATOR (based on Tidy)->http://users.skynet.be/mgueury/mozilla/].

Quant à l'écriture pour le Web, vous pouvez visiter l'excellent [Redaction.be|Le site des spécialistes de l'information en ligne->http://www.redaction.be/]
EOF;
		$contenu['surtitre'] = "Ceci est un surtitre";
		$contenu['soustitre'] = "Ceci est un soustitre";
		$contenu['nom_site'] = "Original de l'article";
		$contenu['url_site'] = "https://www.pyrat.net/Raccourcis-Typographiques-de-SPIP-mode-d-emploi.html";
	}

	/* Politique d'accessibilité du site */
	if ($article == "Politique d'accessibilité du site") {
		$contenu['titre'] = "Politique d'accessibilité du site";
		$contenu['chapo'] = <<<EOF
Le [squelette SPIP SoyezCreateurs->https://contrib.spip.net/SoyezCreateurs,1237] utilisé sur ce site est conçu pour faciliter la mise en œuvre des bonnes pratiques de l'accessibilité des sites pour tous.
EOF;
		$contenu['texte'] = <<<EOF
SoyezCreateurs accorde un soin tout particulier à la qualité de réalisation de ses sites Internet. Il est ainsi engagée dans une démarche d’optimisation de l’accessibilité de ses contenus web. Cette démarche vise dans un premier temps à faciliter la consultation de nos sites par les personnes handicapées, non voyantes, malvoyantes ou malentendantes. Mais plus généralement, la démarche d’accessibilité est indispensable pour garantir le plus large accès à nos contenus par tous les internautes et tous les dispositifs de lecture.

{{{L’accessibilité des services de communication publique de l’État}}}

La loi n° 2005-102 du 11 février 2005 « pour l’égalité des droits et des chances, la participation et la citoyenneté des personnes handicapées » instaure au titre de l’article 47, l’obligation pour les services de communication publique en ligne des services de l’Etat, des collectivités territoriales et des établissements publics qui en dépendent d’être accessibles aux personnes handicapées.

<quote>Article 47 : « Les services de communication publique en ligne des services de l’Etat, des collectivités territoriales et des établissements publics qui en dépendent doivent être accessibles aux personnes handicapées.

L’accessibilité des services de communication publique en ligne concerne l’accès à tout type d’information sous forme numérique quels que soient le moyen d’accès, les contenus et le mode de consultation. Les recommandations internationales pour l’accessibilité de l’internet doivent être appliquées pour les services de communication publique en ligne.

Un [décret en Conseil d’État->http://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000020616980&dateTexte=20090527] fixe les règles relatives à l’accessibilité et précise, par référence aux recommandations établies par l’Agence pour le développement de l’administration électronique, la nature des adaptations à mettre en œuvre ainsi que les délais de mise en conformité des sites existants, qui ne peuvent excéder trois ans, et les sanctions imposées en cas de non-respect de cette mise en accessibilité. Le décret énonce en outre les modalités de formation des personnels intervenant sur les services de communication publique en ligne ».</quote>

Le [Référentiel général d’accessibilité pour les administrations->https://references.modernisation.gouv.fr/] (RGAA) est le guide de référence (compatible avec les recommandations du W3C) pour assurer la mise en conformité des sites Internet publics.

SoyezCreateurs, respecte[[En ce qui concerne le contenant ; le contenu devant lui aussi être rendu accessible par les rédacteurs du site...]] l’intégralité des points de contrôle obligatoires et le plus grand nombre de points de contrôle recommandés.

Néanmoins, si vous rencontrez des difficultés techniques pour consulter notre site, merci de nous contacter.

{{{Conseils et astuces pour faciliter votre navigation}}}

{{{**Naviguez comme vous le souhaitez}}}

L’ensemble du site est consultable au clavier. Vous pouvez ainsi parcourir la page dans son ordre logique de lecture, de liens en liens, en utilisant la touche « tabulation » de votre clavier.

{{{**Agrandissez les caractères}}}

En appuyant simultanément sur les touches <code>Ctrl et +</code>, vous grossissez par effet de loupe l’ensemble de la page (Internet Explorer et Firefox).

<code>Ctrl + 0</code> permet de revenir à la taille par défaut

{{{**Imprimez une version adaptée au papier}}}

Toutes les pages sont imprimables (Fichier > Impression ou touches <code>CTRL + P</code>) dans une version adaptée au papier : le texte et plus aéré et les différents éléments inutiles à la lecture (principalement les menus de navigation) ont été supprimés.

{{{**Utilisez une version récente de navigateur}}}

En mettant à jour gratuitement la version de votre navigateur, vous vous assurez une lecture la plus conforme aux standards et donc la plus accessible. Pour télécharger les dernières versions des principaux navigateurs :

-* [Mozilla FireFox->http://www.mozilla-europe.org/fr/firefox/]
-* [Apple Safari->http://www.apple.com/fr/safari/]
-* [Opera->http://www.opera.com/browser/]
-* [Google Chrome->http://www.google.com/chrome]
-* [Microsoft Internet Explorer->http://windows.microsoft.com/fr-FR/internet-explorer/products/ie/home]

Nous vous invitons en particulier à ne plus utiliser les versions 6 et inférieures d’Internet Explorer, considérées aujourd’hui comme obsolètes en terme de sécurité et de conformité aux standards.

{{{**Ouverture des liens dans une nouvelle fenêtre/onglet}}}

Vous avez le choix ! C'est vous qui décidez ! Rien ne vous est imposé.

Pour ouvrir un lien dans une nouvelle fenêtre (ou un nouvel onglet), il suffit :
-* à la souris de cliquer avec la molette sur le lien
-* pas de molette ? <code>Ctrl + clic gauche</code>
-* ou encore, bouton droit sur le lien et choisir l'option adéquate 

Bonne navigation !
EOF;
	}

	/* Mentions légales */
	if ($article == "Mentions légales") {
		$contenu['titre'] = "Mentions légales";
		$contenu['texte'] = <<<EOF
{{{Propriétaire du site}}}

[ToDo : nom du propriétaire du site, lien vers sa page de contact].

{{{Hébergeur}}}

[Siegler informatique->http://www.siegler-informatique.fr/], hébergeur SPIP + SoyezCréateurs

{{{Liens vers ce site}}}

Le site autorise tout site Internet ou tout autre support à le citer ou à mettre en place un lien hypertexte pointant vers son contenu.

L'autorisation de mise en place d'un lien est valable pour tout support, à l'exception de ceux diffusant des informations à caractère polémique, pornographique, xénophobe ou pouvant, dans une plus large mesure porter atteinte à la sensibilité du plus grand nombre.

La reprise intégrale du contenu d'une page est aussi autorisée, sous réserve d'établir un lien clair vers sa source. C'est la [licence CC-By-SA|Attribution - Partage dans les Mêmes Conditions 4.0 International (CC BY-SA 4.0)->https://creativecommons.org/licenses/by-sa/4.0/deed.fr] qui s'applique.

{{{Traitement automatisé d'informations nominatives}}}

Ce site ne collecte sur les visiteurs du site aucune autre information nominative ou personnelle que celles qui lui sont ouvertement et volontairement fournies en particulier par l'intermédiaire des adresses électroniques de ses correspondants.

Nous vous rappelons que vous disposez d'un droit d'accès, de modification, de rectification et de suppression des données vous concernant (article 34 de la loi "Informatique et Libertés" du 6 janvier 1978). 
Pour exercer ce droit, contactez-nous.

{{{Cookies}}}

Des cookies peuvent être utilisés par ce site :
-* pour accéder à l'interface d'administration (mais SPIP sait aussi fonctionner sans)
-* pour se souvenir de vous quand vous remplissez un formulaire (fonctionne aussi sans)
-* par Google pour vous pister partout (mais ça devrait fonctionner sans)

{{{Réalisation}}}

[PYRAT.net|Expert SPIP->https://www.pyrat.net/] en utilisant l'outil [SPIP->https://www.spip.net/].

[PYRAT.net|Expert SPIP->https://www.pyrat.net/] a réalisé ce site dans les respect des [normes pour l'accessibilité->https://www.pyrat.net/Accessibilite-d-un-site-web,193.html] des sites web à tous.


EOF;
	}

	/* Conseil n°3 */
	if ($article == "Conseil n°3") {
		$contenu['titre'] = "Conseil n°3";
		$contenu['texte'] = <<<EOF
3 types de citations :
-* aphorismes pour transmettre vos valeurs
-* pour faire de l'humour décalé
-* pour donner des conseils (comme ici)
EOF;
	}

	/* Conseil n°4 */
	if ($article == "Conseil n°4") {
		$contenu['titre'] = "Conseil n°4";
		$contenu['texte'] = <<<EOF
C'est [le sens qui est premier->452] sur la forme.
EOF;
	}

	/* Conseil n°2 */
	if ($article == "Conseil n°2") {
		$contenu['titre'] = "Conseil n°2";
		$contenu['texte'] = <<<EOF
Prenez le temps de lire la [documentation->https://www.pyrat.net/556]
EOF;
	}

	/* Conseil n°1 */
	if ($article == "Conseil n°1") {
		$contenu['titre'] = "Conseil n°1";
		$contenu['texte'] = <<<EOF
[Écrivez pour vos lecteurs->https://www.pyrat.net/313], pas pour les moteurs de recherche.
EOF;
	}

	/* 10. Outil 1 */
	if ($article == "10. Outil 1") {
		$contenu['titre'] = "10. Outil 1";
	}

	/* 20. Outil 2 */
	if ($article == "20. Outil 2") {
		$contenu['titre'] = "20. Outil 2";
	}

	/* 30. Outil 3 */
	if ($article == "30. Outil 3") {
		$contenu['titre'] = "30. Outil 3";
	}

	/* 40. Outil 4 */
	if ($article == "40. Outil 4") {
		$contenu['titre'] = "40. Outil 4";
	}

	/* 50. Documentation */
	if ($article == "50. Documentation") {
		$contenu['titre'] = "50. Documentation";
		$contenu['chapo'] = <<<EOF
=https://www.pyrat.net/556
EOF;
	}

	/* Logo de survol */
	if ($article == "Logo de survol") {
		$contenu['titre'] = "Logo de survol";
		$contenu['texte'] = <<<EOF

{{{Inter se reprehensiones non sunt vituperandae}}}

Maledicta, contumeliae, tum iracundiae, contentiones concertationesque in disputando pertinaces indignae philosophia mihi videri solent.

Accedat huc suavitas quaedam oportet sermonum atque morum, haudquaquam mediocre condimentum amicitiae. Tristitia autem et in omni re severitas habet illa quidem gravitatem, sed amicitia remissior esse debet et liberior et dulcior et ad omnem comitatem facilitatemque proclivior.


{{{Post hanc adclinis Libano monti Phoenice}}}

Regio plena gratiarum et venustatis, urbibus decorata magnis et pulchris; in quibus amoenitate celebritateque nominum Tyros excellit, Sidon et Berytus isdemque pares Emissa et Damascus saeculis condita priscis.

Ex his quidam aeternitati se commendari posse per statuas aestimantes eas ardenter adfectant quasi plus praemii de figmentis aereis sensu carentibus adepturi, quam ex conscientia honeste recteque factorum, easque auro curant inbracteari, quod Acilio Glabrioni delatum est primo, cum consiliis armisque regem superasset Antiochum. 

Quam autem sit pulchrum exigua haec spernentem et minima ad ascensus verae gloriae tendere longos et arduos, ut memorat vates Ascraeus, Censorius Cato monstravit. qui interrogatus quam ob rem inter multos... 

Statuam non haberet malo inquit ambigere bonos quam ob rem id non meruerim, quam quod est gravius cur inpetraverim mussitare.
EOF;
	}

	/* Derniers articles */
	if ($article == "Derniers articles") {
		$contenu['titre'] = "Derniers articles";
		$contenu['texte'] = <<<EOF

{{{De quibus tres video sententias ferri}}}

Quarum nullam probo, unam, ut eodem modo erga amicum adfecti simus, quo erga nosmet ipsos, alteram, ut nostra in amicos benevolentia illorum erga nos benevolentiae pariter aequaliterque respondeat, tertiam, ut, quanti quisque se ipse facit, tanti fiat ab amicis.

Eius populus ab incunabulis primis ad usque pueritiae tempus extremum, quod annis circumcluditur fere trecentis, circummurana pertulit bella, deinde aetatem ingressus adultam post multiplices bellorum aerumnas 


{{{Alpes transcendit et fretum}}}

In iuvenem erectus et virum ex omni plaga quam orbis ambit inmensus, reportavit laureas et triumphos, iamque vergens in senium et nomine solo aliquotiens vincens ad tranquilliora vitae discessit.

Proinde die funestis interrogationibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum

Cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.
EOF;
	}

	/* Titre de la rubrique */
	if ($article == "Titre de la rubrique") {
		$contenu['titre'] = "Titre de la rubrique";
		$contenu['texte'] = <<<EOF
Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? Num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?

Quanta autem vis amicitiae sit, ex hoc intellegi maxime potest, quod ex infinita societate generis humani, quam conciliavit ipsa natura, ita contracta res est et adducta in angustum ut omnis caritas aut inter duos aut inter paucos iungeretur.
EOF;
	}

	/* 30. Articles avec le Mot clef : "ALaUne" */
	if ($article == "30. Articles avec le Mot clef : \"ALaUne\"") {
		$contenu['titre'] = "30. Articles avec le Mot clef : \"ALaUne\"";
		$contenu['texte'] = <<<EOF

{{{Quod quidem ut res ire coepit}}}

Haud scio an aliquando futurum sit. Mihi autem non minori curae est, qualis res publica post mortem meam futura, quam qualis hodie sit.

Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent :
-* omnes mihi Epicuri 
-* sententiae satis 
-* notae sunt. 


{{{**Atque eos}}}

uos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus

{{{**Neque erat umquam }}}

Controversia, quid ego intellegerem, sed quid probarem.

Sed laeditur hic coetuum magnificus splendor levitate paucorum incondita, ubi nati sunt non reputantium, sed tamquam indulta licentia vitiis ad errores lapsorum ac lasciviam. ut enim Simonides lyricus docet, beate perfecta ratione vieturo ante alia patriam esse convenit gloriosam.


{{{Latius iam disseminata }}}

Licentia onerosus bonis omnibus Caesar nullum post haec adhibens modum orientis latera cuncta vexabat nec honoratis parcens nec urbium primatibus nec plebeiis.

Et prima post Osdroenam quam, ut dictum est, ab hac descriptione discrevimus, Commagena, nunc Euphratensis, clementer adsurgit, Hierapoli, vetere Nino et Samosata civitatibus amplis inlustris.
EOF;
	}

	/* 40. Image = logo */
	if ($article == "40. Image = logo") {
		$contenu['titre'] = "40. Image = logo";
		$contenu['texte'] = <<<EOF

{{{Tempore quo primis auspiciis}}}

In mundanum fulgorem surgeret victura dum erunt homines Roma, ut augeretur sublimibus incrementis, foedere pacis aeternae Virtus convenit atque Fortuna plerumque dissidentes, quarum si altera defuisset, ad perfectam non venerat summitatem.

Quam quidem partem accusationis admiratus sum et moleste tuli potissimum esse Atratino datam:
-* neque enim decebat neque aetas illa postulabat neque, 
-* id quod animadvertere poteratis, pudor patiebatur optimi adulescentis in tali illum oratione versari,
-* vellem aliquis ex vobis robustioribus hunc male dicendi locum suscepisset


{{{Aliquanto liberius et fortius}}}

Et magis more nostro refutaremus istam male dicendi licentiam. Tecum, Atratine, agam lenius, quod et pudor tuus moderatur orationi meae et meum erga te parentemque tuum beneficium tueri debeo.

Haec dum oriens diu perferret, caeli reserato tepore Constantius consulatu suo septies et Caesaris ter egressus Arelate Valentiam petit, in Gundomadum et Vadomarium fratres Alamannorum reges arma moturus, quorum crebris excursibus vastabantur confines limitibus terrae Gallorum.

Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit. 

Post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.
EOF;
	}

	/* Le nombre d'article affiché est administrable */
	if ($article == "Le nombre d'article affiché est administrable") {
		$contenu['titre'] = "Le nombre d'article affiché est administrable";
		$contenu['texte'] = <<<EOF
{{{Sortietur an non? }}}

Nam et non sortiri absurdum est, et, quod sortitus sis, non habere. Proficiscetur paludatus? Quo? Quo pervenire ante certam diem non licebit. ianuario, Februario, provinciam non habebit; Kalendis ei denique Martiis nascetur repente provincia.

Nec sane haec sola pernicies orientem diversis cladibus adfligebat. Namque et Isauri, quibus est usitatum saepe pacari saepeque inopinis excursibus cuncta miscere, ex latrociniis occultis et raris, alente inpunitate adulescentem in peius audaciam ad bella gravia proruperunt.


{{{Diu quidem perduelles }}}

Spiritus inrequietis motibus erigentes, hac tamen indignitate perciti vehementer, ut iactitabant, quod eorum capiti quidam consortes apud Iconium Pisidiae oppidum in amphitheatrali spectaculo feris praedatricibus obiecti sunt praeter morem.
EOF;
	}

	/* Un sourire peut changer une vie */
	if ($article == "Un sourire peut changer une vie") {
		$contenu['titre'] = "Un sourire peut changer une vie";
		$contenu['chapo'] = <<<EOF
<iframe width="344" height="260" src="//www.youtube-nocookie.com/embed/Cbk980jV7Ao?rel=0" allowfullscreen></iframe>
EOF;
	}

	/* 20. Et prima post Osdroenam quam */
	if ($article == "20. Et prima post Osdroenam quam") {
		$contenu['titre'] = "20. Et prima post Osdroenam quam";
		$contenu['texte'] = <<<EOF

{{{Quam ob rem circumspecta}}}

Cautela observatum est deinceps et cum edita montium petere coeperint grassatores, loci iniquitati milites cedunt. ubi autem in planitie potuerint reperiri, quod contingit adsidue, nec exsertare lacertos nec crispare permissi tela, quae vehunt bina vel terna, pecudum ritu inertium trucidantur.

Sed maximum est in amicitia parem esse inferiori. Saepe enim excellentiae quaedam sunt, qualis erat Scipionis in nostro, ut ita dicam, grege. 

{{{Numquam se ille Philo}}}

Numquam Rupilio, numquam Mummio anteposuit, numquam inferioris ordinis amicis, Q. vero Maximum fratrem, egregium virum omnino, sibi nequaquam parem, quod is anteibat aetate, tamquam superiorem colebat suosque omnes per se posse esse ampliores volebat.

Hac ita persuasione reducti intra moenia bellatores obseratis undique portarum aditibus, propugnaculis insistebant et pinnis, congesta undique saxa telaque habentes in promptu, ut si quis se proripuisset interius, multitudine missilium sterneretur et lapidum.

Denique Antiochensis ordinis vertices sub uno elogio iussit occidi ideo efferatus, quod ei celebrari vilitatem intempestivam urgenti, cum inpenderet inopia, gravius rationabili responderunt; et perissent ad unum ni comes orientis tunc Honoratus fixa constantia restitisset.
EOF;
	}

	/* 30. Ideo urbs venerabilis */
	if ($article == "30. Ideo urbs venerabilis") {
		$contenu['titre'] = "30. Ideo urbs venerabilis";
		$contenu['texte'] = <<<EOF

{{{Quod opera consulta cogitabatur astute}}}

Ut hoc insidiarum genere Galli periret avunculus, ne eum ut praepotens acueret in fiduciam exitiosa coeptantem. verum navata est opera diligens hocque dilato Eusebius praepositus cubiculi missus est Cabillona aurum secum perferens, quo per turbulentos seditionum concitores occultius distributo et tumor consenuit militum et salus est in tuto locata praefecti. deinde cibo abunde perlato castra die praedicto sunt mota.

His cognitis Gallus ut serpens adpetitus telo vel saxo iamque spes extremas opperiens et succurrens saluti suae quavis ratione colligi omnes iussit armatos et cum starent attoniti, districta dentium acie stridens adeste inquit viri fortes mihi periclitanti vobiscum.


{{{Ob haec et huius modi multa}}}

Omnibus timeri sunt coepta. et ne tot malis dissimulatis paulatimque serpentibus acervi crescerent aerumnarum, nobilitatis decreto legati mittuntur.

Praetextatus ex urbi praefecto et ex vicario Venustus et ex consulari Minervius oraturi, ne delictis supplicia sint grandiora, neve senator quisquam inusitato et inlicito more tormentis exponeretur.

Quo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes de industria milites agentes in civitatibus perviis.
EOF;
	}

	/* 10. Nos obsecuturos */
	if ($article == "10. Nos obsecuturos") {
		$contenu['titre'] = "10. Nos obsecuturos";
		$contenu['texte'] = <<<EOF

{{{Bellicosus sane milesque semper }}}

Et militum ductor sed forensibus iurgiis longe discretus, qui metu sui discriminis anxius cum accusatores quaesitoresque subditivos sibi consociatos ex isdem foveis cerneret emergentes, quae clam palamve agitabantur, occultis Constantium litteris edocebat inplorans subsidia, quorum metu tumor notissimus Caesaris exhalaret.

Et est admodum mirum videre plebem innumeram mentibus ardore quodam infuso cum dimicationum curulium eventu pendentem. haec similiaque memorabile nihil vel serium agi Romae permittunt. ergo redeundum ad textum.


{{{Cum autem commodis intervallata temporibus}}}

Convivia longa et noxia coeperint apparari vel distributio sollemnium sportularum, anxia deliberatione tractatur an exceptis his quibus vicissitudo debetur, peregrinum invitari conveniet, et si digesto plene consilio id placuerit fieri, is adhibetur qui pro domibus excubat aurigarum aut artem tesserariam profitetur aut secretiora quaedam se nosse confingit.

Siquis enim militarium vel honoratorum aut nobilis inter suos rumore tenus esset insimulatus fovisse partes hostiles, iniecto onere catenarum in modum beluae trahebatur et inimico urgente vel nullo, quasi sufficiente hoc solo, quod nominatus esset aut delatus aut postulatus, capite vel multatione bonorum aut insulari solitudine damnabatur.

Dum haec in oriente aguntur, Arelate hiemem agens Constantius post theatralis ludos atque circenses ambitioso editos apparatu diem sextum idus Octobres, qui imperii eius annum tricensimum terminabat, insolentiae pondera gravius librans, siquid dubium deferebatur aut falsum, pro liquido accipiens et conperto, inter alia excarnificatum Gerontium Magnentianae comitem partis exulari maerore multavit.
EOF;
	}

	/* 20. Mensarum enim */
	if ($article == "20. Mensarum enim") {
		$contenu['titre'] = "20. Mensarum enim";
		$contenu['texte'] = <<<EOF

{{{Praetermitto illuc transiturus}}}

Quod quidam per ampla spatia urbis subversasque silices sine periculi metu properantes equos velut publicos signatis quod dicitur calceis agitant, familiarium agmina tamquam praedatorios globos post terga trahentes ne Sannione quidem, ut ait comicus, domi relicto. quos imitatae matronae complures opertis capitibus et basternis per latera civitatis cuncta discurrunt.


{{{Dum haec in oriente aguntur}}}

Arelate hiemem agens Constantius post theatralis ludos atque circenses ambitioso editos apparatu diem sextum idus Octobres, qui imperii eius annum tricensimum terminabat, insolentiae pondera gravius librans, siquid dubium deferebatur aut falsum, pro liquido accipiens et conperto, inter alia excarnificatum Gerontium Magnentianae comitem partis exulari maerore multavit.

Quaestione igitur per multiplices dilatata fortunas cum ambigerentur quaedam, non nulla levius actitata constaret, post multorum clades Apollinares ambo pater et filius in exilium acti cum ad locum Crateras nomine pervenissent, villam scilicet suam quae ab Antiochia vicensimo et quarto disiungitur lapide, ut mandatum est, fractis cruribus occiduntur.
EOF;
	}

	/* 30. Iamque non umbratis */
	if ($article == "30. Iamque non umbratis") {
		$contenu['titre'] = "30. Iamque non umbratis";
		$contenu['texte'] = <<<EOF

{{{Muros armatis omne circumdedit}}}

Ingressusque obscuro iam die, ablatis regiis indumentis Caesarem tunica texit et paludamento communi, eum post haec nihil passurum velut mandato principis iurandi crebritate confirmans et statim inquit exsurge et inopinum carpento privato inpositum ad Histriam duxit prope oppidum.

Polam, ubi quondam peremptum Constantini filium accepimus Crispum.


{{{Post hoc impie perpetratum}}}

Quod in aliis quoque iam timebatur, tamquam licentia crudelitati indulta per suspicionum nebulas aestimati quidam noxii damnabantur. quorum pars necati, alii puniti bonorum multatione.

Actique laribus suis extorres nullo sibi relicto praeter querelas et lacrimas, stipe conlaticia victitabant, et civili iustoque imperio ad voluntatem converso cruentam, claudebantur opulentae domus et clarae.
EOF;
	}

	/* Les derniers articles modifiés */
	if ($article == "Les derniers articles modifiés") {
		$contenu['titre'] = "Les derniers articles modifiés";
		$contenu['texte'] = <<<EOF
Ias iusso sine ulla culpa proscribi ideoque hausto veneno voluntaria morte deleto et tributaria facta est et velut hostiles eius exuviae classi inpositae in urbem advectae sunt per Catonem, nunc repetetur ordo gestorum.

Post hanc adclinis Libano monti Phoenice, regio plena gratiarum et venustatis, urbibus decorata magnis et pulchris; in quibus amoenitate celebritateque nominum Tyros excellit, Sidon et Berytus isdemque pares Emissa et Damascus saeculis condita priscis.

Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca.
EOF;
	}

	/* 10. Urbibus decorata */
	if ($article == "10. Urbibus decorata") {
		$contenu['titre'] = "10. Urbibus decorata";
		$contenu['texte'] = <<<EOF
{{{Tyros excellit Sidon et Berytus }}}

Isdemque pares Emissa et Damascus saeculis condita priscis.

Coactique aliquotiens nostri pedites ad eos persequendos scandere clivos sublimes etiam si lapsantibus plantis fruticeta prensando vel dumos ad vertices venerint summos, inter arta tamen et invia nullas acies explicare permissi nec firmare nisu valido gressus: hoste discursatore rupium abscisa volvente


{{{Ruinis ponderum inmanium consternuntur}}}

Aut ex necessitate ultima fortiter dimicante, superati periculose per prona discedunt.

Post haec Gallus Hierapolim profecturus ut expeditioni specie tenus adesset, Antiochensi plebi suppliciter obsecranti ut inediae dispelleret metum, quae per multas difficilisque causas adfore iam sperabatur, non ut mos est principibus, quorum diffusa potestas localibus subinde medetur aerumnis.

Disponi quicquam statuit vel ex provinciis alimenta transferri conterminis, sed consularem Syriae Theophilum prope adstantem ultima metuenti multitudini dedit id adsidue replicando quod invito rectore nullus egere poterit victu.
EOF;
	}

	/* 20. Rogatus ad ultimum */
	if ($article == "20. Rogatus ad ultimum") {
		$contenu['titre'] = "20. Rogatus ad ultimum";
		$contenu['texte'] = <<<EOF

{{{Caesar sciens quod si cessaveris}}}

Et tuas et palatii tui auferri iubebo prope diem annonas. hocque solo contumaciter dicto subiratus abscessit nec in conspectum eius postea venit saepius arcessitus.

Ob haec et huius modi multa, quae cernebantur in paucis, omnibus timeri sunt coepta. et ne tot malis dissimulatis paulatimque serpentibus acervi crescerent aerumnarum, nobilitatis decreto legati mittuntur.


{{{Praetextatus ex urbi praefecto}}}

Et ex vicario Venustus et ex consulari Minervius oraturi, ne delictis supplicia sint grandiora, neve senator quisquam inusitato et inlicito more tormentis exponeretur.

Iamque non umbratis fallaciis res agebatur, sed qua palatium est extra muros, armatis omne circumdedit. ingressusque obscuro iam die, ablatis regiis indumentis Caesarem tunica texit et paludamento communi, eum post haec nihil passurum velut mandato principis iurandi crebritate confirmans et statim inquit exsurge et inopinum carpento privato inpositum ad Histriam duxit prope oppidum Polam, ubi quondam peremptum Constantini filium accepimus Crispum.
EOF;
	}

	/* 10. Oportunum est */
	if ($article == "10. Oportunum est") {
		$contenu['titre'] = "10. Oportunum est";
		$contenu['texte'] = <<<EOF

{{{Aginatium inpulit iam }}}

Inde a priscis maioribus nobilem, ut locuta est pertinacior fama. nec enim super hoc ulla documentorum rata est fides.

Quibus ita sceleste patratis Paulus cruore perfusus reversusque ad principis castra multos coopertos paene catenis adduxit in squalorem deiectos atque maestitiam, quorum adventu intendebantur eculei uncosque parabat carnifex et tormenta. et ex is proscripti sunt plures actique in exilium alii


{{{Non nullos gladii consumpsere poenales}}}

Nec enim quisquam facile meminit sub Constantio, ubi susurro tenus haec movebantur, quemquam absolutum.

Eminuit autem inter humilia supergressa iam impotentia fines mediocrium delictorum nefanda Clematii cuiusdam Alexandrini nobilis mors repentina; cuius socrus cum misceri sibi generum, flagrans eius amore, non impetraret, ut ferebatur, per palatii pseudothyrum introducta, oblato pretioso reginae monili id adsecuta est, ut ad Honoratum tum comitem orientis formula missa letali omnino scelere nullo contactus idem Clematius nec hiscere nec loqui permissus occideretur.

EOF;
	}

	/* 20. Quis enim */
	if ($article == "20. Quis enim") {
		$contenu['titre'] = "20. Quis enim";
		$contenu['texte'] = <<<EOF
{{{Coluntur tamen simulatione dumtaxat ad tempus}}}

Quod si forte, ut fit plerumque, ceciderunt, tum intellegitur quam fuerint inopes amicorum. Quod Tarquinium dixisse ferunt, tum exsulantem se intellexisse quos fidos amicos habuisset, quos infidos, cum iam neutris gratiam referre posset.


{{{Primi igitur omnium statuuntur}}}

Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso vivendi termino his vocabulis appellatos fabricarum culpasse tribunos ut adminicula futurae molitioni pollicitos.
EOF;
	}

	/* 30. Altera sententia est */
	if ($article == "30. Altera sententia est") {
		$contenu['titre'] = "30. Altera sententia est";
		$contenu['texte'] = <<<EOF

{{{Hoc quidem est nimis exigue }}}

Et exiliter ad calculos vocare amicitiam, ut par sit ratio acceptorum et datorum. Divitior mihi et affluentior videtur esse vera amicitia nec observare restricte, ne plus reddat quam acceperit; neque enim verendum est, ne quid excidat, aut ne quid in terram defluat, aut ne plus aequo quid in amicitiam congeratur.

Et quoniam inedia gravi adflictabantur, locum petivere Paleas nomine, vergentem in mare, valido muro firmatum, ubi conduntur nunc usque commeatus distribui militibus omne latus Isauriae defendentibus adsueti. 

Circumstetere igitur hoc munimentum per triduum et trinoctium et cum neque adclivitas ipsa sine discrimine adiri letali, nec cuniculis quicquam geri posset.


{{{Nec procederet ullum obsidionale commentum}}}

Maesti excedunt postrema vi subigente maiora viribus adgressuri.

Nihil est enim virtute amabilius, nihil quod magis adliciat ad diligendum, quippe cum propter virtutem et probitatem etiam eos, quos numquam vidimus, quodam modo diligamus. Quis est qui C. Fabrici, M'. Curi non cum caritate aliqua benevola memoriam usurpet, quos numquam viderit? 

Quis autem est, qui Tarquinium Superbum, qui Sp. Cassium, Sp. Maelium non oderit? Cum duobus ducibus de imperio in Italia est decertatum, Pyrrho et Hannibale; ab altero propter probitatem eius non nimis alienos animos habemus, alterum propter crudelitatem semper haec civitas oderit.
EOF;
	}

	/* Historique des versions de SPIP */
	if ($article == "Historique des versions de SPIP") {
		$contenu['titre'] = "Historique des versions de SPIP";
		$contenu['texte'] = <<<EOF
[SPIP->https://www.spip.net/fr_rubrique155.html].
EOF;
	}

	return $contenu;
}
