# Mini Framework MVC

Après avoir cloné le dépôt, ne pas oubliez d'installer les dépendances Composer : 

```bash
composer install
```

```bash
php -S 127.0.0.1:8000 -t public
```

```bash
composer require --dev symfony/var-dumper
```

```bash
composer require illuminate/collections
```

```bash
// Rapport d'erreur stylé
composer require filp/whoops
# $whoops = new \Whoops\Run;
# $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
# $whoops->register();
```