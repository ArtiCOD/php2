<?php

use Geekbrains\Blog\Repositories\InMemoryUsersRepository;
use Geekbrains\Blog\User;
use Geekbrains\Person\{Name, Person};
use Geekbrains\Blog\Post;
use Geekbrains\Blog\Repositories\InMemoryUsersRepository;

// spl_autoload_register('load');
include __DIR__ . "/vendor/autoload.php";

function load($className)
{
    $file = $className . ".php";
    $file = str_replace("src", "Geekbrains", $file);
    if (file_exists($file)) {
        include $file;
    }
}

$faker = Faker\Factory::create('ru_RU');
echo $faker->name() . PHP_EOL;
echo $faker->realText(rand(20,40)) . PHP_EOL;



$user = new User(1, "Ivan Ivanov", "Admin");
$name = new Name("Arti", "cod");
$person = new Person($name, new DateTimeImmutable());
$post = new Post(
    1,
    $person,
    'Всем привет!' . PHP_EOL
);

echo $post;

$name2 = new Name('Иван', 'Таранов');
$user2 = new User(2, $name2, "User");
$userRepository = new InMemoryUsersRepository();
try {
$userRepository->save($user);
$userRepository->save($user2);


    echo $userRepository->get(1);
    echo $userRepository->get(2);
    echo $userRepository->get(3);
} catch (UserNotFoundException | Exception $e) {
    echo $e->getMessage();
}
