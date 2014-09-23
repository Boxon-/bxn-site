LOG SITE BOXON.INFO
--------------------
contributeurs : Xavier Klein, Étienne Ozeray, Alexandre Cormier, Ivan Murit, Antoine Gelgon

## 22/09/2014 : Étienne

Mise en place de [GitPhp](http://www.gitphp.org/) pour la page Git de Boxon.

![capture](http://etienneozeray.fr/bordel/boxon4.png)

Pour voir en live, c'est ![ici](http://www.boxon.info/boxonGit/). Sur cette version, il y a tout les Git de chacun. Ivan, tu n'a rien sur ton profil GitHub, tu peux giter tes projets pour pouvoir les ajouter.

Pour la version gitée, il n'y a que quelques Gits en guise d'exemple, l'ensemble étant trop lourd pour GitHub. Mais il est possible de tous les récupérer sur le serveur de Boxon (www.boxon.info/boxonGit/gits).

Voir *BoxonGit/README* pour l'usage.

Pour l'instant, c'est la structure de base de GitPhp, juste un peu pimpé. Mais dans l'idée, je pense qu'il faudrait virer la structure tableau/liste pour mettre plus en avant l'image. Peut-être reprendre la structure du blog en mettant en avant le readme. Ensuite faudrait voir comment on peut imaginer du versionning d'image ou de typo. Pour la typo, ca serait cool de reprendre [ofont](http://ofont.net/) pour par exemple avoir un live preview des différentes versions, soit avec un slider, soit avec un jeu de superposition ([un truc dans ce genre](https://github.com/blog/1633-3d-file-diffs)). Ça serait aussi envisageable pour du svg. 

De la [lecture](http://w.xuv.be/projects/design_with_git) sur le sujet. Ou [ça](http://f-u-t-u-r-e.org/r/24_David-Reinfurt_Versionnage-infini_FR.md). ou encore [ça](http://ospublish.constantvzw.org/blog/tools/diff-git-imagemagick). 

Par ailleurs, maintenant qu'on a une *organisation* Boxon sur GitHub, je pense qu'on s'y retrouverais mieux s'il l'on avait un projet par partie (un pour le blog, un pour le git, etc). Ça serait plus clair et moins lourd que d'avoir tout sous le projet Bxn-site.


## 17/08/2014 : Étienne

Les styles du menu suivent maintenant les styles des catégories :

![capture](http://etienneozeray.fr/bordel/boxon3.png)

Du coup le menu déborde, on peut soit faire un overflow-y: scroll ou retirer la position:fixed. J'ai choisi la seconde solution mais c'est à voir.

## 15/08/2014 : Étienne

Intégration de masonry.js

J'ai commencé des tests de style en fonction des catégories
Il faudrait définir trois types de catégories :

	· celles qui désignent un type (outil, texte...)
	
	· celles qui désignent un domaine (design graphique,
	  web, art...)
	  
	· celles qui désignent un support (web, livre, vidéo...)
	
il faut que les styles de chaque type soient cumulables, par exemples jouer sur les titres pour le type, les bordures pour le domaine et le texte courant pour le support. Il serait même bien qu'à l'intérieur du type elles puissent être cumulables (design graphique + web ou art + web...). + un style par défaut pour chaque type.

Voici donc les catégories définies pour le moment :

	· type : outils, textes, événéments, documentaires
	 
	· domaine : typographie, art, design graphique, design d'objet
	 
	· support : vidéos, web, libres
	 
À compléter donc, tout en associant un style aux nouvelles catégories.
Tout ça c'est surtout indicatif, rien de décisif, hesitez pas à changer les styles !
Ça risque d'être un peu la galère pour visualiser avec vos bases de données, donc voici des captures d'écran :

![capture](http://etienneozeray.fr/bordel/boxon1_2.png)
![capture](http://etienneozeray.fr/bordel/boxon2_2.png)

Si vous voulez voir ce que ça donne en live, il faut créer une petite dizaine d'articles et leur attribuer chacun 3 catégories (type, domaine, support) tout en respectant les catégories définies ci-dessus.

Du coup ça serait peut-être pas mal que chaque catégorie du menu reprenne le style qui lui est associé.


## 03/08/2014 : Étienne & Antoine

Les fontes

· textes courants : Karmilla

· textes liens et metadonnées : Luximono

Création d'un dossier référence, avec des PDf et images de magazines d'informatique :
radical Software, Whole Earth Catalog.
(peut-être, partir des ces bases là pour commencer le design ?)
![exemple](http://scri.ch/nie.png)

Pour la home du blog utiliser masonery.js http://masonry.desandro.com/

On peut changer le style d'un post selon sa catégorie,
en lui donnant un class au nom de cette catégorie.
Donc chaque post a un style associé à sa catégorie.
Exemple: mettre des borders ovale juste sur les posts "référence".

Intégration du script foutreBoxon.js dans le header du blog.
  Todo: réécrire le script pour un random au chargement de la page et non au clique.
