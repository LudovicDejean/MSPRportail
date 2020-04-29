# DEPLOIEMENT DU PORTAIL

## 1 - Création de la base de données
La page : 
'~/deploiementPortail/deploiement.php'

Va exécuter le script de création de la base de données.


# ENDPOINT API

il faut pouvoir :
- se logguer
- créer des users ??
- supprimer des users ??
- modifier des users
- créer des cliniques ??
- supprimer des cliniques ??
- modifier des cliniques ??


# SECURITÉ PORTAIL

## CLIC DROIT
Nous avons interdit le clic droit.

## ANTI BRUTE FORCE (à peaufiner)
La table `users` possède les attributs 'nombreDeTentatives' et 'estAutorise'.
Par défault, 'nombreDeTentatives'  = 0 et 'estAutorise' = true.
Ainsi, lorsqu'un utilisateur se connecte, le nombre de tentative est incrémenté.
Lors de la première connection, il passe donc de 0 à 1 et nous contactons l'API pour tenter de connecter l'utilisateur
Si la connection échoue, il passe de 1 à 2 et l'API est contactée etc...
Si ce nombre est strictement supérieur à 3 
et que l'intervalle entre la première et la dernière connexion est inférieur à 3 minutes
Alors 'estAutorise' = false et l'API n'est pas contactée. 
Un message invite l'utilisateur à pateinter avant déssayer de se reconnecter.



Lorsque l'utilisateur est connecté, 
