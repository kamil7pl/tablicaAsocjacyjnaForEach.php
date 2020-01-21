<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
$tab["login"]='Kamil';
$tab["punkty"]=5;
echo 'klucz=>wartosc <br/>';
foreach($tab as $klucz=>$wartosc){
	echo $klucz.' '.$wartosc.'<br/>';
}
echo 'wartosc <br/>';
foreach($tab as $wartosc){
	echo $wartosc.'<br/>';
}
?>
</body>
</html>
