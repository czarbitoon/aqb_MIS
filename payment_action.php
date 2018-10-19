<?
require 'connect.php';
session_start();

if(isset($_POST['submit']))
{
	$quantity = $_POST['quantity'];
	$payment = $_POST['payment'];

	$sql = "INSERT INTO transaction_t("
}