# OnlyDays
Agence immobiliere

Les Gones

-----------------------------------------------------------------------------

installer le projet:

git clone https://github.com/Rachid9302/OnlyDays.git

composer install

composer require --dev doctrine/doctrine-fixtures-bundle

composer require knplabs/knp-paginator-bundle

php bin/console doctrine:database:create

php bin/console doctrine:schema:update --force

php bin/console doctrine:fixtures:load

-----------------------------------------------------------------------------

Faire un commit:

git add .

git commit -m "ton message"

(git remote add origin https://github.com/Rachid9302/OnlyDays.git)

git push -u origin master




