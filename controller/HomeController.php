<?php

require(ROOT . "model/BirthdayModel.php");

function index()
{
	render("home/index");
}

function birthdays()
{
	render("birthdays/index", array(
		'birthdays' => getAllBirthdays()
	));	
}

function create()
{
	render("birthdays/create");
}

function insert(){
	addUser();
	header("Location: /school/Kalender/home/index/");
}

function delete($id){
	deleteUser($id);
	header("Location: /school/Kalender/home/birthdays");
}

function edit($id)
{
	render("birthdays/edit", array(
		'result' => getUser($id)
	));	
}

function postEdit($id)
{
	editUser($id);
	header("Location: /school/Kalender/home/birthdays");
} 