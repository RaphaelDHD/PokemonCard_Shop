PokemonProjectPHP

Démarrer le projet

Démarrer le site en production
Pour démarrer le site en production avec la dernière migration effectué il faut faire cette commande

./bin/cake server --no-dev



Démarrer le site pour développement
Pour démarrer le site afind d'effectuer du développement il faut le lancer avec la commande suivante

./bin/cake server 


Après avoir fini le développement, il faut refaire une migration si vous souhaitez livrer le site en production

./bin/cake bake migration <nom de la migration>
./bin/cake migrations migrate




Pour récuperer les pokemons de la base au format Json
L'URL pour récupérer la liste de pokémon au format Json est :
http://localhost:8765/pokemons/renderJson

Effectuer des recherches :
Pour effectuer des recherches dans l'api vous pouvez ajouter ceci au lien :
http://localhost:8765/pokemons/renderJson?method=[name , type]?value=[valeur du nom ou du type de pokemon]
Cela permet de faire des recherches afin de retourner des pokémon en fonction de leur nom ou de leur type;
Si la variable value n'est pas bien définie l'api sera retournée vide, vérifié bien le nom ou le type que vous souhaitez, tout en sachant que les informations sont en anglais.