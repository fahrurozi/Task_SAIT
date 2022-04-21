<?php


if (isset($_POST["action"])) {
  if ($_POST["action"] == 'delete') {
    $id = $_POST['id'];
    $url = "192.168.56.69:8000/api/options/".$id."";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
  }
}
    