<?php
session_start();
require_once 'db.php';
require_once 'sections.php';

if (!isset($_GET['id'])) {
  echo "ID not provided";
  header("Location: liste_Section.php");
  exit;
}

$id = $_GET['id'];
$stconn = new Section($conn);
$section = $stconn->getsectionById($id);

if (!$section) {
  echo "section not found";
  header("Location: liste_Section.php");
  exit;
}

if (isset($_POST['submit'])) {
  $designation = htmlspecialchars($_POST['designation']);
  $descriptiion = htmlspecialchars($_POST['description']);
  $stconn->updateSection($id, $designation, $descriptiion);

  header("Location: liste_Section.php");
  exit;
}
?>
