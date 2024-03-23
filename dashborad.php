<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<title>Document</title>
</head>
<body>

 <?php
 //index Array
 $user=array(1,2,3,4,5,6,7,8,9);
 echo $user[0];
 foreach ($user  as $value_array){
	echo $value_array."<br>";
 }

 $using=array(array(1,2,3,4,5),array(1,3,4,5,6),array(2,4,5,6,6));
 echo $using[0][2];
 echo $using[0][3];
 echo $using[0][4];

 // Associative array
 $usingd=array(
	'home'=>'html.php',
	'product'=>'bang',
	'Bong' =>'Rank',
	'pang'=>'sang',


 );
 echo $usingd["home"];
 echo $usingd["product"];
 echo $usingd["Bong"];
 echo $usingd["pang"];

 foreach ($usingd as $key=>$value_array){
	echo $key.$value_array."<br>";
 }

 define("id",1);
 define("name","bunsak");
 define("sex",'M');
 define("height",1.65);
 define("width",100);
 define("bank",39);
 
 echo sex."<br>";
 echo height."<br>";
 echo height;
 echo width;
 echo bank;

 $sak=array(1,2,4,5,6,7);
 echo $sak[0];
 echo $sak[1];
 echo $sak[2];
 foreach($sak as $value){
	echo $value;
 }
 $sang=array(array(1,2,3,4,5,6),array(1,2,4,5,6));
 echo $sang[0][1];
 echo $sang[1][1];

 $value=array(
	'id'   => 1,
	'name' =>"bunsak",
	'sex'  =>"boy",


 );
 echo $value["id"];
 echo $value["name"];
 echo $value["sex"];

 foreach($value as $key => $value){
	echo $key.$value;
 }





?>
</body>
</html>