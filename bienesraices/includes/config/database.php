<?php


function conectarDB() : mysqli {
  $db = new mysqli('localhost', 'root', 'root', 'bienesraices_crud');

  if(!$db) {
    echo "Error: No se conecto a la DB";
    exit;
  }

  return $db;
}