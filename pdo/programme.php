<?php
require_once 'Database.php';
require_once 'Repository.php';
require_once 'UserRepository.php';
require_once 'SectionRepository.php';

ConnexionBD::connect('mydb', 'root', '');

$userRepo = new UserRepository();
$sectionRepo = new SectionRepository();

$userRepo->create(['name' => 'Alice']);
$userRepo->create(['name' => 'Bob']);

$sectionRepo->create(['title' => 'Informatique']);
$sectionRepo->create(['title' => 'Mathématiques']);

echo "Utilisateurs :\n";
print_r($userRepo->findAll());

echo "Sections :\n";
print_r($sectionRepo->findAll());

echo "Utilisateur ID 1 :\n";
print_r($userRepo->findById(1));

$userRepo->delete(1);
echo "Utilisateurs après suppression :\n";
print_r($userRepo->findAll());