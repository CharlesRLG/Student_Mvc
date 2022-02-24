<?php
require_once('modele/Student.php');
$allusers = $pdo->query('SELECT * FROM student ORDER BY id DESC');
$student = new Student;
// var_dump($student->allStudentAllTags($barreRecherche));
$allUsers = $student ->allStudentAllTags($barreRecherche);
require_once('vue/recherche.php');