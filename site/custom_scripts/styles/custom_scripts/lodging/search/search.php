<?php
  if (isset($_SERVER['HTTP_ORIGIN'])) {
      header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
      header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
      header('Access-Control-Max-Age: 1000');
      header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
  }

  $response = [];

  $page = 1;
  $next = true;
  while ($next) {
      $file = $page . '.json';
      $str = file_get_contents($page . '.json');
      $result = json_decode($str, true);
      //echo $result['next_page_token'] . '<br>';

      $valid = true;
      for ($i = 0; $i < count($result['results']); ++$i) {
          $data = $result['results'][$i];
          $types = $data['types'];
          for ($j = 0; $j < count($types); ++$j) {
              //echo $types[$j] . '<br>';
              if ($types[$j] == 'rv_park') {
                  $valid = false;
                  //echo $data['name'] . '<br>';
                  break;
              }
          }

          //echo $data['name'] . '<br>';
          if ($valid) {
              $response[] = $data;
          }
      }

      ++$page;
      $file = $page . '.json';
      $next = isset($result['next_page_token']);
  }

  $json = json_encode($response);
  $result = $json;
  print $result;
