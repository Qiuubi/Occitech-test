# occitech-test

Bonjour à tous, 

Voici le résultat de mon projet pour le test. Quand j'ai eu des difficultés, et j'ai galéré, vous avez au la gentillesse d'accorder une attention à mes appels à l'aide et à mes questions, je vous remercie tous pour cela. Bien que le projet a l'air en apparence simple à mettre en place, j'ai eu pas mal de difficultés. Cela m'a même empêché de dormir et j'ai dû faire de sessions nocturnes prolongées, non pas parce que j'étais spécialement en galère, mais parce que j'ai trouvé le projet intéressant et j'étais dans mon élan et je ne voulais pas l'interrompre.

J'ai dû lire beaucoup d'articles et de documentations pour parvenir à ce résultat et ça m'a pris plus de temps que prévu. Du coup, je n'ai pas plu implémenter les fonctions que j'avais prévues initialement.

Vous devez retrouver normalement un fichier docker-compose.yml et il suffira de le build et ça devrait fonctionner. 

Par ailleurs, quant à l'affichage des images il faudra dans le dossier public/build créer un dossier img puis les dossiers suivants dedans : 
- main où seront les images principaux des pokémons (qu'on retrouve ici : https://github.com/fanzeyi/pokemon.json/tree/master/images).
  Attention il y a des erreurs à l'image 662 et 740. 
- sprites où seront les miniatures (https://github.com/fanzeyi/pokemon.json/tree/master/sprites)

Les images étant trop lourdes, je préfère qu'il soient ajoutés manuellement dans ces dossiers après clonage.

Je n'ai pas créé d'images pour faire tourner React car j'ai pu trouver comment l'intégrer directement dans Symfony via Webpack. On peut taper yarn encore dev-server dans la console, mais normalement il n'y a pas besoin. 

Le fait de travailler cet exercice a été intense pour moi. Il y a une semaine, je ne savais pas faire tout ça. Grâce à cet exercice et à vous, je sais le faire aujourd'hui et je continue à me former pour m'améliorer. Vous m'avez pris conscience des mes axes de progression et je sais ce que je dois travailler le plus, et je tiens à vous en remercier. 

N'hésitez pas à me faire part des remarques et critiques, ils me permettront de progresser et de travailler davantage ces points. 
