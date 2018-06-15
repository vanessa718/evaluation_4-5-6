# Évaluation C4,5,6
Compétences concernées :
- Développer une interface utilisateur
- Développer des composants d'accès aux données
- Développer des pages web en lien avec une base de données

## Objectifs
- Créer l'application avec les pages suivantes:
	- une page « liste des chambres »
	Pour chaque chambre, la liste doit afficher :
		- le nom de la chambre
		- le type de chambre : « suite » ou « standard »
		- le prix par nuit
		- l'accessiblité aux PMR
		- le type de lit

		Chaque chambre de la liste est cliquable et renvoie vers la page « chambre »
		correspondante.
	- une page « chambre » qui affiche tous les détails de la chambre et
	qui contient un bouton « réservation » qui renvoie vers la page
	« réservation » pour la chambre
	- une page « réservation » qui permet de saisir une nouvelle réservation.
	Cette page montre le nom de la chambre et un formulaire avec les éléments
	suivants :
		- un calendrier « Arrival date »
		- un calendrier « Departure date »
		- un select « Customer »
		- un select « Status »
		- un bouton « Submit »
- Installer la base de données (tables et données)
- Créer les composants d'accès aux données
- Créer les pages selon les maquettes
- Développer des tests unitaires
- Suivre le design pattern MVC, et bien séparer les trois types de modules
- Ajouter des tests unitaires pour tester :
	- L'unicité des noms des chambres
	- La disponibilité des services par chambre

## Resources
- La base de données est fournie (voire repository)
- L'utilisation de Bootstrap est autorisé
- Le framework backend est Laravel
- Les composants Module, View et Controller doivent être séparés
- Le code doit être documenté en anglais
- Le code doit être formatté suivant les règles du PSR-2

## Liens utiles
- [Bootstrap](https://getbootstrap.com/)
- [PSR-2](https://www.php-fig.org/psr/psr-2/)
- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/)
