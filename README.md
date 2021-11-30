## my-uber

Pour installer le projet, suivre les étapes suivantes :

# Installation 

- Démarrer Laragon
- Créer une base de données nommée my-uber
- Ouvrir le terminal de commande dans le dossier racine du projet et effectuer la commande suivante : php artisan migrate
- Exécuter le script dans postman

# Utilisation

Les routes disponibles pour l'API sont les suivantes :
- /api/client/product -> le frontend pourra effectuer un getAll
- /api/client/profile -> le frontend pourra effectuer un POST (store)
- /api/client/profile/{id} -> le frontend pourra effectuer un SHOW (qui affichera les informations propres au profil sélectionné via l'id)
- /api/client/cart -> le frontend pourra effectuer un POST (store)
- /api/client/cart/{id} -> le frontend pourra effectuer un SHOW (qui affichera les informations propres au panier sélectionné via l'id)
- /api/client/order/{id} -> le frontend pourra effectuer un SHOW (qui affichera les informations propres à la commande sélectionné via l'id)
- /api/client/state/{id} -> le frontend pourra effectuer un SHOW (qui affichera les informations propres à la commande sélectionné via l'id)
- /api/seller/order -> le frontend pourra effectuer un getAll
- /api/seller/order/{id} -> le frontend pourra effectuer un SHOW et un PATCH (update) du statut de préparation de la commande sélectionnée via l'id
- /api/shipper/order -> le frontend pourra effectuer un getAll
- /api/shipper/order/{id} -> le frontend pourra effectuer un SHOW et un PATCH (update) du statut de préparation de la commande sélectionnée via l'id