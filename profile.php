<?php include('core/initsession.php');?>
<?php include('includes/overall/overallHeader.php');?>
<?php
  if(isset($_SESSION['user_id'])){
    echo "logado";
  }else{
    echo "não logado";
  }
?>
<?php include('includes/overall/overallFooter.php');?>
