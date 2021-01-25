<?php

require __DIR__ . "/../vendor/autoload.php";

$faker = Faker\Factory::create('fr_FR');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

try {
    $db = new PDO("{$_ENV['DB_CONNECTION']}:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
} catch (\PDOException $e) {
    die($e->getMessage());
}

$tempdate = $faker->date;

$finishedDate = $faker->dateTimeBetween($startDate = $tempdate, $endDate = 'now');


$statement = $db->prepare("INSERT INTO users (created_at,updated_at, first_name, last_name, email, password) VALUE (?,?,?,?,?,?)");
$result = $statement->execute([
    $tempdate,
    $finishedDate->format('Y/m/d'),
    $faker->firstName,
    $faker->lastName,
    $faker->email,
    hash('sha256',$faker->password),

]);






