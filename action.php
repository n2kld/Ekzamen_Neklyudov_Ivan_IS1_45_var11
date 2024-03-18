<?php

require_once(__DIR__ . '/src/index.php');

if(Auth::login($_POST['login'], $_POST['password']))
{
  echo Table::render('prokat');
}
else (
  Auth::register($_POST['Id_prokata'], $_POST['Client'], $_POST['Auto'], $_POST['Data_nachala_arendi'], $_POST['Data_konca_arendi'], $_POST['Status']));

endScript();