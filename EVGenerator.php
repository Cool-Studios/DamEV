<?php
  //This is a simulator for testing web pages with dummy data
  
  $array = array();
  $array['Request'] = 'OK';
  $array['Charger'] = 8;
  $array['Mode'] = 3;
  $array['I1c'] = rand(28,29)/100;
  $array['I2c'] = rand(28,29)/100;
  $array['I3c'] = rand(28,29)/100;
  $array['I1r'] = rand(28,30)/100;
  $array['I2r'] = rand(28,30)/100;
  $array['I3r'] = rand(28,30)/100;
  $array['Temp1'] = rand(1000,1500)/100;
  $array['Temp2'] = rand(1000,1500)/100;
  $array['Energy'] = rand(0,65536);
  header('Content-type: application/json');
  echo json_encode($array);
?>