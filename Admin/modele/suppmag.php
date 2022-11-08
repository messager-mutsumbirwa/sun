<?php
  require_once '../controleur/control.php'; 

  require_once '../modele/connect_bd.php';
  $cmd="DELETE FROM mag WHERE id_fournisseur = :id_fournisseur";
  $id_fournisseur=$_POST['id'];
  echo $id_fournisseur;
  $result=verifsupp($id_fournisseur,$cmd);
  header('location:../vue/gestion-mag.php');
?>
