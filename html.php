<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Document</title>
</head>
<body> 
    <?php 
//ការប្រកាស់អថេរ​ត្រង់ចំណុចនេះ ពេល echo ទើបវាបង្ហាញតម្លៃស
$age1=$age2=$age3=$age4=$age5=$age6=$age7="";
$age1=$_POST['age1'];
$age2=$_POST['age2'];
$s=1/2*$age1*$age2;
if(empty($age1)){
  echo "not is empty !";
}



//ការប្រកាស់អថេរ​ត្រង់ចំណុចនេះ ពេល echo គឺវាមិនបង្ហាញតម្លៃ


echo "តម្លៃ= $s cm";
?>
    </tbody>
  </table>

</body>
</html>
