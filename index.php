<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo "<b>preg_match :</b><br/>";
$string = 'The quick brown fox jumps over the lazy dog';
/**
 * preg_match
 */
if(strpos($string, 'fox') != false){
    echo $string."<br/>";
}

if(preg_match('/fox/i', $string)){
    echo $string;
}
/**
 * str_contains
 */
echo "<br/><b>str_contains :</b></br>";
if (strpos('Foo Bar Baz', 'Bar') != false) {
    echo 'Found';
}
echo "</br>";
if (str_contains('Foo Bar Baz', 'Foo')) {
    echo 'Found';
}
/**
 * str_ends_with
 */
$string = 'The lazy fox jumped over the fence';
echo "<br/><b>str_ends_with :</b><br/>";
if (str_ends_with($string, 'fence')) {
    echo "The string ends with 'fence'";
}
echo "</br>";
if (preg_match('/fence/m', $string)) {
    echo "The string ends with 'fence'\n";
}
echo "<br/><b>str_getcsv :</b></br>";
/**
 * str_getcsv
 */
$res = array_map('str_getcsv', file('data.csv'));
var_dump($res);
echo "</br>";
$res = fopen("data.csv","r");
while(! feof($res)) {
    var_dump(fgetcsv($res));
}
fclose($res);
/**
 *  str_pad
 */
echo "<br/><b>str_pad :</b></br>";
$input = "Alien";
echo str_pad($input,  7, "___");
echo "<br/>";
echo sprintf($input.substr('___',-2));
echo "<br/><b>str_replace :</b> <br/>";
/**
 *  str_replace
 */
$string = "foo fighters";
$str_replace = str_replace('foo','bar',$string);
$preg_replace = preg_replace('/foo/i','bar',$string);
echo $str_replace."<br/>";
echo $preg_replace;
echo "<br/><b>str_split :</b><br/>";
/**
 *   str_split
 */
$str = "Hello Friend";

$arr1 = str_split($str);
var_dump($arr1);
echo "<br/>";
//$str2 = chunk_split($str,1,'.');
$arr2 = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
var_dump($arr2);
echo "<br/><b>str_word_count :</b><br/>";
/**
 *  str_word_count
 */
$str = "Hello fri3nd, you're
       looking          good today!";
echo str_word_count($str);
echo "<br/>";
echo preg_match_all("/[a-z']+/i", $str);
/**
 *  str_shuffle
 */
echo "<br/><b>str_shuffle :</b><br/>";
$str = '123456';
echo str_shuffle($str);
echo "<br/>";
$arr = array();
for ($i = 0; $i < strlen($str); $i++) {
    $arr[$i] = $i;
}
shuffle($arr);
for ($i = 0; $i < strlen($str); $i++) {
    echo $arr[$i];
}
?>
</body>
</html>