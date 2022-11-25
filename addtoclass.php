<?php
header("Refresh:2; url= pupildoessubject.php");
array_map("htmlspecialchars", $_POST);
include_once("connection.php");

$stmt = $conn->prepare("INSERT INTO Tblpupilstudies (Subjectid, Userid, Classposition, Classgrade, Examark, Comment)VALUES (:SubjectID, :UserID,null,null,null,null)");
$stmt->bindParam("SubjectID", $_POST ["class"]);
$stmt->bindParam("UserID, ", $_POST ["student"]);
$stmt->execture();
$conn=null;
?>