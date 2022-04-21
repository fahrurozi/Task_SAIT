<?php


if (isset($_POST["action"])) {

  if ($_POST["action"] = 'insert') {
    $form_data = array(
      'name' => $_POST['name'],
      'description'  => $_POST['description']
    );
    $api_url = "192.168.56.69:8000/api/options";
    $client = curl_init($api_url);
    curl_setopt($client, CURLOPT_POST, true);
    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    curl_close($client);
    $result = json_decode($response, true);
    foreach ($result as $keys => $values) {
      if ($result[$keys]['success'] == '1') {
        echo 'insert';
      } else {
        echo 'error';
      }
    }
  }

  if ($_POST["action"] == 'delete') {
    echo "halo";
    $id = $_POST['id'];
    $api_url = "192.168.56.69:8000/api/options/" . $id;
    $client = curl_init($api_url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    echo $response;
  }
}
