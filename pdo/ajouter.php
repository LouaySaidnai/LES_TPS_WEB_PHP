<?php
session_start();
require_once 'db.php';
require_once 'students.php';


$stconn = new Student($conn);

if (isset($_POST['submit'])) {
  $name = htmlspecialchars($_POST['name']);
  $image = filter_var($_POST['image'], FILTER_SANITIZE_URL);
  $section = htmlspecialchars($_POST['section']);
  $birthday = htmlspecialchars($_POST['birthday']);
  $stconn->addStudent($name, $birthday, $image, $section);

  header("Location: liste_Etudiant.php");
  exit;
}
?>
