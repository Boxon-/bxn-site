LOG SITE BOXON.INFO
--------------------
contributeurs : Xavier Klein, Étienne Ozeray, Alexandre Cormier, Ivan Murit, Antoine Gelgon

# 15/08/2014 : Étienne

Intégration de masonry.js
J'ai commencé des tests de style en fonction des catégories
Il faudrait définir trois types de catégories :
	- celles qui désignent un type (outil, texte...)
	- celles qui désignent un domaine (design graphique,
	  web, art...),
	- celles qui désignent un support (web, livre, vidéo...)
il faut que les styles de chaque type soient cumulables, par exemples jouer sur les titres pour le type, les bordures pour le domaine et le texte courant pour le support. Il serait même bien qu'à l'intérieur du type elles puissent être cumulables (design graphique + web ou art + web...). + un style par défaut pour chaque type.

Voici donc les catégories définies pour le moment :
	- type : outils, textes, événéments, documentaires
	- domaine : typographie, art, design graphique, design d'objet
	- support : vidéos, web, libres
À compléter donc, tout en associant un style aux nouvelles catégories.
Tout ça c'est surtout indicatif, rien de décisif, hesitez pas à changer les styles !
Ça risque d'être un peu la galère pour visualiser avec vos bases de données, donc voici des captures d'écran :
![capture](http://etienneozeray.fr/bordel/boxon1.png)
![capture](http://etienneozeray.fr/bordel/boxon2.png)
Si vous voulez voir ce que ça donne en live, il faut créer une petite dizaine d'articles et leur attribuer chacun 3 catégories (type, domaine, support).

# 03/08/2014 : Étienne & Antoine

Les fontes
-textes courants : Karmilla
-textes liens et metadonnées : Luximono

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
