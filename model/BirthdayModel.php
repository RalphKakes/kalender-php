<?php

function getAllBirthdays() 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function addUser() 
{
	$db = openDatabaseConnection();
	$person = $_POST['person'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$sql = "INSERT INTO birthdays(person, day, month, year)VALUES ('$person','$day','$month', '$year')";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null; 
}

function deleteUser($id) 
{
	$db = openDatabaseConnection();
	$sql = "DELETE FROM birthdays WHERE id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}

function editUser($id){
	$db = openDatabaseConnection();
	$person = $_POST['person'];	
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$sql = "UPDATE birthdays SET person='$person', day='$day', month='$month', year='$year' WHERE id=$id";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function getUser($id){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays WHERE id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}