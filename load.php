<?php

	include("./config.php");
	$pass = $_GET['pass'];
	$my = "202cb962ac59075b964b07152d234b70";

		if(!empty($pass)){
			if($pass == $my){
				// echo "ok";
				// echo md5(123);
			}else{
				die("error");
			}
		}else{
			die("error");
		}



?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <title>استبيان - هيئة طلاب سوريا</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" />
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

   
<!-- 
    <meta name="description" content="FUTURESHAM.COM">
    <meta name="keywords" content="FUTURESHAM.COM,FUTURESHAM,Network,شام المستقبل,انترنت">
    <meta name="author" content="FUTURESHAM.COM">
    
    <meta property="og:title" content="FUTURESHAM.COM || شام المستقبل" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://futuresham.com/" />
    <meta property="og:image" content="http://futuresham.com/ext/images/icons/003-interface_poster_u2703.png" /> 

-->



    <script type="text/javascript" src="./ext/js/jquery.min.js"></script>   

    <link rel="stylesheet" type="text/css" href="ext/css/style.ex.css">
</head>
<body>





<table class="table">
  <thead>
    <tr>
      <th scope="col">رقم التسلسلي</th>
      <th scope="col">اسم الجامعة</th>
      <th scope="col">فرع</th>
      <th scope="col">شهادة</th>
      <th scope="col">المفاضلة</th>
      <th scope="col">نوع القبول</th>
      <th scope="col">العلامة</th>
      <th scope="col">وقت</th>
       <th scope="col">IP</th>
    </tr>
  </thead>
  <tbody>

<?php

	$query = $sqli->query("SELECT * FROM `resulet` ORDER BY `id` DESC");
	while ($fetchRow = $query->fetch_array()) {
		echo "<tr>
		<td>".$fetchRow["id"]."</td>
		<td>".$fetchRow["nameUNV"]."</td>
		<td>".$fetchRow["collegeName"]."</td>
		<td>".$fetchRow["cert"]."</td>
		<td>".$fetchRow["Utopia"]."</td>
		<td>".$fetchRow["typeAccept"]."</td>
		<td>".$fetchRow["Mark"]."</td>
		<td>".$fetchRow["time"]."</td>
		<td>".$fetchRow["ip"]."</td>
		</tr>";
	}

?>

  </tbody>
</table>





</body>
</html>