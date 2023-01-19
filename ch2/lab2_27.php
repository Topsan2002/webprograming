<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ข้อมูลนักศึกษา</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
</head>
<style>
    body {
        font-family: "Kanit", serif;
    }
</style>
<body>
    <!-- <h2>แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2> -->
	<div class="costainer p-5">
        <h2 class="text-center fw-bold">แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2>
        <form action="lab2_27.php" method="post" name="form1" id="form1">

            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">รหัสนักศึกษา : <?php echo $_REQUEST['stdId'] ?></label>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ชื่อ-นามสกุลนักศึกษา</label>
                            <input type="text" class="form-control" id="" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">รหัส่ผ่าน</label>
                            <input type="password" class="form-control" name="password">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-0">
                            <label for="" class="form-label">เพศ</label>

                        </div>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="sex1" value="male">
                                <label class="form-check-label" for="sex1">ชาย</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="sex2" value="female">
                                <label class="form-check-label" for="sex2">หญิง</label>
                            </div>
                        </div>

                        <div class="mb-0">
                            <label for="exampleInputEmail1" class="form-label">งานอดิเรก </label>
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="hobby[]" id="hobby1" value="option1">
                                <label class="form-check-label" for="hobby1">อ่านหนังสือ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="hobby[]" id="hobby2" value="option2">
                                <label class="form-check-label" for="hobby2">ดูโทรทัศน์</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="hobby[]" id="hobby3" value="option2">
                                <label class="form-check-label" for="hobby3">เล่นกีฬา</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">อัพโหลดข้อมูล</label>
                            <input type="file" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ความคิดเห็น</label>
                            <div class="form-floating">
                                <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">ความคิดเห็น</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"> Please select color.  </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="chkColor[]" id="flexCheckDefault" value="option1">
                                <label class="form-check-label" for="">Red</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="chkColor[]" id="color1" value="option2">
                                <label class="form-check-label" for="color1">Green</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="chkColor[]" id="color2" value="option2">
                                <label class="form-check-label" for="color2">Blue</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="chkColor[]" id="color3" value="option2">
                                <label class="form-check-label" for="color3">orange</label>
                            </div>
                            <div class="form-check form-check-inline   ">
                                <input class="form-check-input" type="checkbox" name="chkColor[]" id="color4" value="option2">
                                <label class="form-check-label" for="color4">Black</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="chkColor[]" id="color5" value="option2">
                                <label class="form-check-label" for="color5">Pink</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success me-3">Submit</button>
                            <button type="reset" class="btn btn-primary">reset</button>

                        </div>

                    </div>
                </div>
            </div>



        </form>
    </div>
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