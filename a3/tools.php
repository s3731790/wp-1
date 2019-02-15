<?php
  session_start();
  echo session_id();
?>

<?php
print_e($_SESSION);
?>

function preShow( $arr, $returnAsString=false ) {
$ret = '<pre>' . print_r($arr, true) . '</pre>';
if ($returnAsString)
return $ret;
else
echo $ret;
}

function printMyCode() {
$lines = file($_SERVER['SCRIPT_FILENAME']);
echo "<pre class='mycode'><ol>";
foreach ($lines as $line)
echo '<li>'.rtrim(htmlentities($line)).'</li>';
echo '</ol></pre>';
}

function php2js( $arr, $arrName ) {
$lineEnd="";
echo "<script>\n";
echo " var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
echo "</script>\n\n";
}

function styleCurrentNavLink( $css ) {
$here = $_SERVER['SCRIPT_NAME'];
$bits = explode('/',$here);
$filename = $bits[count($bits)-1];
echo "<style>nav a[href$='$filename'] { $css }</style>";
}

?>

