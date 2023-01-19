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
        background:gainsboro    ;
    }
</style>
<body>
    <!-- <h2>แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2> -->
    <?php 
    $stdId = $_REQUEST['stdId'];
    $name = $_REQUEST['name'];
    $pass = $_REQUEST['password'];
    $sex = $_REQUEST['sex'];
    $hobby = "";
    foreach ($_REQUEST['hobby'] as $key => $value) {
        $hobby .= ( $key != count($_REQUEST['hobby'])-1 ? $value.", " : $value);
    }
    

     ?>
	<div class="costainer p-5 bg-white m-5">
        <h2 class="text-center fw-bold">    ข้อมูลนักศึกษา</h2>
        

            <div class="d-flex justify-content-start">
                <div class="row">
                    <div class="col-md-12">
                        <?php 
studentData($stdId,$name,$pass,$sex,$hobby);


                         ?>
                       <!--  <div class="mb-3">
                            <label for="exampleInputEmail1"  class="form-label fw-bolder">รหัสนักศึกษา : <?php echo $_REQUEST['stdId']; ?></label>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ชื่อ-นามสกุลนักศึกษา</label>
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bolder">รหัส่ผ่าน : <?php echo $_REQUEST['password'] ?></label>
                        </div>
                        <div class="mb-0">
                            <label for="" class="form-label">เพศ : <?php echo $_REQUEST['sex'] ?></label>
                        </div>
                        <div class="mb-0">
                            <label for="exampleInputEmail1" class="form-label fw-bolder">งานอดิเรก :  </label>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bolder">ความคิดเห็น : </label>
                            <div class="form-floating">
                              
                                    <?php echo $_REQUEST['comment'] ?>
                               
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bolder">Select color.  </label>
                            <p>
                                <?php 

                                    foreach ($_REQUEST['chkColor'] as $key => $value) {
                                     echo "chkColor : ".$key." = ".$value."<br>";
                                 }   

                                 ?>
                            </p>
                        </div>

                        <a class="btn btn-primary"href="form_2_27.html">Back</a>

                        <div>
                            <b class="fw-bolder">ffdd</b>dddd
                        </div>


                    </div> -->

                     <a class="btn btn-primary"href="form_2_27.html">Back</a>

                </div>
            </div>
    </div>

</body>
</html>

<?php 
    // function stdId() {return $_REQUEST['stdId'];}
    // function name() {return $_REQUEST['name'];}
    // function password() {return $_REQUEST['password'];}
    // function sex() {return $_REQUEST['sex'];}
    // function hobby() {
    // $hobby = "";
    // foreach ($_REQUEST['hobby'] as $key => $value) {
    //     $hobby .= ( $key != count($_REQUEST['hobby'])-1 ? $value.", " : $value);
    // }
    // return $hobby;

    // }

function studentData($id,$name,$pass, $sex, $hobby){

    echo "<b class='fw-bolder mb-1'> รหัสนักศึกษา : "."</b>".$id."<br>";
    echo "<b class='fw-bolder mb-1'> ชื่อ-นามสกุลนักศึกษา : "."</b>".$name."<br>";
    echo "<b class='fw-bolder mb-1'> รหัส่ผ่าน : "."</b>".$pass."<br>";
    echo "<b class='fw-bolder mb-1'> เพศ : "."</b>".$sex."<br>";
    echo "<b class='fw-bolder mb-1'> งานอดิเรก : "."</b>".$hobby."<br>";

}



 ?>