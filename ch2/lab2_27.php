<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ข้อมูลนักศึกษา</title>
</head>
<body>
    <h2>แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2>

<?php 
	$sex = $_REQUEST['sex'];
	$hobby = "";
	// $hobby1 = $_POST['hobby1'];
	// $hobby2 = $_POST['hobby2'];
	// $hobby3 = $_POST['hobby3'];
	foreach ($_REQUEST['hobby'] as $key => $value) {
		$hobby .= (	$key != count($_REQUEST['hobby'])-1 ? $value.", " : $value);
	}	

	echo "<b>รหัสนักศึกษา : </b> ".$_REQUEST['stdId']."<br>";
	echo "<b>ชื่อ-นามสกุลนักศึกษา : </b> ".$_REQUEST['name']."<br>";
	echo "<b>รหัส่ผ่าน : </b> ".$_REQUEST['password']."<br>";
	echo "<b>เพศ : </b> ".($sex == 1?"male":"female")."<br>";
	echo "<b>งานอดิเรก  : </b> ".$hobby."<br>";
	echo "<b>งานอดิเรก  : </b> <br>";
	if(isset($_POST['hobby1'])) echo $_POST['hobby1']."<br>";
	if(isset($_POST['hobby2'])) echo $_POST['hobby2']."<br>";
	if(isset($_POST['hobby3'])) echo $_POST['hobby3']."<br>";
	echo "<b>Color  : </b> <br>";

	foreach ($_REQUEST['chkColor'] as $key => $value) {
		echo "chkColor : ".$key." = ".$value."<br>";
	}	

 ?>

<a href="form_2_27.html">back</a>

</body>
</html>