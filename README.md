## my-uber

Pour installer le projet, suivre les étapes suivantes :

# Installation 

- Démarrer Laragon

- Créer une base de données nommée my-uber

- Ouvrir le terminal de commande dans le dossier racine du projet et effectuer la commande suivante : php artisan migrate

- Exécuter le script dans postman

# Utilisation

Les routes disponibles pour l'API sont les suivantes :

- /api/client/product -> le frontend pourra effectuer un getAll et affichera les colonnes produit et description

- /api/client/profile -> le frontend pourra effectuer un POST (store) enregistrant l'adresse et le numéro de téléphone

- /api/client/profile/{id} -> le frontend pourra effectuer un SHOW (qui affichera les informations propres au profil sélectionné via l'id) et affichera l'adresse et le numéro de téléphone

- /api/client/cart -> le frontend pourra effectuer un POST (store) enregistrant l'id du produit et celui du profil

- /api/client/order/{id} -> le frontend pourra effectuer un SHOW (qui affichera les informations propres à la commande sélectionné via l'id) et affichera les produits et les informations du profil

- /api/state/order/{id} -> le frontend pourra effectuer un SHOW (qui affichera les informations propres à la commande sélectionné via l'id) et affichera la progression du traitement de la commande (progress)

- /api/seller/order -> le frontend pourra effectuer un getAll et affichera les produits commandés

- /api/seller/order/{id} -> le frontend pourra effectuer un SHOW et un PATCH (update) du statut de préparation de la commande sélectionnée via l'id. Le SHOW montrera les produits commandés et le PATCH permettra de mettre à jour la colonne sellerStatus

- /api/shipper/order -> le frontend pourra effectuer un getAll et affichera les adresses de livraison

- /api/shipper/order/{id} -> le frontend pourra effectuer un SHOW et un PATCH (update) du statut de préparation de la commande sélectionnée via l'id. Le SHOW montrera les adresses de livraison et le PATCH permettra de mettre à jour la colonne shipperStatus