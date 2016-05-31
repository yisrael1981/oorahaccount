Someone hit an error on the  tuition page
<br>

<?php
print_r($error);
echo '<br>';
if (isset($request) ) {
print_r($request);
}
echo '<br>';
if (isset($data) ) {
print_r($data);
}
echo '<br>';
foreach ($_COOKIE as $key=>$val)
  {
    echo $key.' is '.$val."<br>\n";
  }
 ?>