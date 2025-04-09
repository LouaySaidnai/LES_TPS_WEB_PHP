<?php
session_start();
require_once 'db.php';
require_once 'students.php';

if (!isset($_GET['id'])) {
  echo "ID not provided";
  header("Location: liste_Etudiant.php");
  exit;
}

$id = $_GET['id'];
$stconn = new Student($conn);
$student = $stconn->getStudentById($id);

if (!$student) {
  echo "Student not found";
  header("Location: liste_Etudiant.php");
  exit;
}

if (isset($_POST['submit'])) {
  $name = htmlspecialchars($_POST['name']);
  $image = filter_var($_POST['image'], FILTER_SANITIZE_URL);
  $section = htmlspecialchars($_POST['section']);
  $birthday = htmlspecialchars($_POST['birthday']);
  $stconn->updateStudent($id, $name, $birthday, $image, $section);

  header("Location: liste_Etudiant.php");
  exit;
}
?>
