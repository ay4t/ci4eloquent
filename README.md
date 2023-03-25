# ci4eloquent
 menyambungkan eloquent ORM untuk codeigniter 4

```
composer config minimum-stability dev
composer config repositories.ci4eloquent vcs git@github.com:ay4t/ci4eloquent.git
composer require ay4t/ci4eloquent:main-dev
```

# Tambahkan pada app/Config/Autoload.php
```
public $psr4 = [
    'Ay4t\CI4Eloquent' => ROOTPATH . 'vendor/ay4t/ci4eloquent/src',
];
```
dan juga tambahkan pada 

```
public $files = [
    ROOTPATH . 'vendor/ay4t/ci4eloquent/src/DB.php',
];
```

# contoh penggunaan

```
$eloquent = \Config\Services::eloquent();

$users = \DB::table('tb_users')->get();

echo '<pre>';
var_dump($a);
echo '</pre>';
```