<?php
$code = "";
$cod = rand(1,11);
  switch($cod){
    case 1:
      $code = array(
          'nome' => 'blender',
          'code' => '3d809f187c3321e2fc2c4b008978f2d3'
      );
      break;

    case 2:
      $code = array(
          'nome' => 'marelo',
          'code' => '8fd6b8720ef0c701b6e0bbbd3e311595'
      );
      break;

    case 3:
      $code = array(
          'nome' => 'italiano',
          'code' => 'ccb14d6f3212fde822299d00d24a4ebf'
      );
      break;

    case 4:
      $code = array(
          'nome' => 'medieval',
          'code' => 'a2a1d979fd2481423974659c8050234e'
      );
      break;

    case 5:
      $code = array(
          'nome' => 'arduino',
          'code' => '75f5750f6dd6afbec57b0928a0ec306b'
      );
      break;

    case 6:
      $code = array(
          'nome' => 'sideral',
          'code' => '2398ada59c5da12ec02d89a8151fc75d'
      );
      break;

    case 7:
      $code = array(
          'nome' => 'esporte',
          'code' => '736df0d339f4f6fb5c4beef004be2210'
      );
      break;

    case 8:
      $code = array(
          'nome' => 'jardins',
          'code' => 'dc2ff86485057ab9636cbd0d50326e6e'
      );
      break;

    case 9:
      $code = array(
          'nome' => 'relevo',
          'code' => 'a1695a125cae93a415cde2fead28c439'
      );
      break;

    case 10:
      $code = array(
          'nome' => 'profundo',
          'code' => '4194e0896b6c9aa6c604f23ec71f2245'
      );
      break;

    case 11:
      $code = array(
          'nome' => 'historia',
          'code' => '7967791d08c33bfa3caa5e521b7957bb'
      );
      break;

  }
echo json_encode($code);
?>
