<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="Style.css">
<script src="s.js"> </script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

<link rel="icon" href="data:image/png;base64,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">
<title>  Table in php </title>
<meta name="viewport" content="width=device-width">
<meta name="description" content="table in php">
<meta charset="UTF-8">
    </head>
<body>
<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">اضافه کردن کاربر</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<div class="mb-3">
    <form action="index.php" method="get">
  <label for="codeP" class="form-label"><b>کد پرسنلی</b></label>
  <input name="code_p_user2" type="tel" class="form-control" id="codeP" placeholder="مثلا : 123"  maxlength="3" required >
</div>
<div class="mb-3">
  <label for="name" class="form-label"><b>نام</b></label>
  <input name="name_user2" type="text" class="form-control" id="name" placeholder=""  maxlength="20" required >
</div>
<div class="mb-3">
  <label for="namefamily" class="form-label"><b>نام خوانوادگی</b> </label>
  <input name="name_family2"  type="text" class="form-control" id="namefamily" placeholder=""  maxlength="30" required >
</div>
<div class="mb-3">
  <label for="tah" class="form-label"><b>تحصیلات</b></label>
  <input name="tahsilat2"  type="text" class="form-control" id="tah" placeholder=""  maxlength="30" required >
</div>
<div class="mb-3">
  <label for="ho" class="form-label"><b>حوزه</b></label>
  <input name="reshte2"  type="text" class="form-control" id="ho" placeholder="رشته تحصیلی" maxlength="30" required >
</div>
<div class="mb-3">
  <label for="hq" class="form-label"> <b>پایه حقوق</b></label>
  <input name="hoquq2"  type="text" class="form-control" id="hq" placeholder="به تومان" maxlength="30" required >
</div>
<div class="mb-3">
  <label for="tah2" class="form-label"><b>تاهل</b></label>
  <input name="tahol2"  type="text" class="form-control" id="tah2" placeholder="مجرد/متاهل"  maxlength="5" required>
</div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
        <button type="submit" class="btn btn-success">ثبت</button>
          <form>
      </div>
    </div>
  </div>
</div>
<!--  -->
<div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
  <div class="bg-dark p-4">
    <h5 class="text-body-emphasis h4"></h5>
    <span class="text-body-secondary"></span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <br>
    <span class="sp1"><h9><b>اطلاعات</b></h9></span>
    <span class="sp2"><h9><b>   <?php  date_default_timezone_set("Asia/Tehran");   $date1 = date("Y/m/d  h:i:sa"); echo $date1;?>  </b></h9></span>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> -->
      <!-- <span class="navbar-toggler-icon"></span> -->
    </button>
  </div>
</nav>
<div>
<!-- <table class="table table-striped">
    <tr>
        <th>
            کد پرسنلی
        </th>
        <th>
            نام
        </th>
        <th>
            نام خوانوادگی
        </th>
        <th>
            تحصیلات
        </th>
        <th>
            حوزه
        </th>
        <th>
            پایه حقوق
        </th>
        <th>
            تاهل
        </th>
        <th>
        </th>
    </tr>
    <tr>
        <td>
            758
        </td>
        <td>
            علی
        </td>
        <td>
            حسینی
        </td>
        <td>
            لیسانس
        </td>
        <td>
            فنی
        </td>
        <td>
            3,500,000
        </td>
        <td>
            مجرد
        </td>
        <td>
            <button class="btn btn-success">
                اضافه کردن
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                </svg>
            </button>
            <button class="btn btn-warning">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg>
                ویرایش
            </button>
            <button class="btn btn-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                    </svg>
                 حذف
            </button>
        </td>
    </tr>
</table> -->
</div>
    </body>

<?php

 /*  */
$a = mysqli_connect('localhost','root','','usergit');

$sql = mysqli_query($a , "select * from userg");

while($row = mysqli_fetch_assoc($sql)){

$code_p = $row['code_p_user'];
$name_users = $row['name_user'];
$name_familys = $row['name_family'];
$tah = $row['tahsilat'];
$reshteh = $row['reshte'];
$p_hqoq = $row['hoquq'];
$tahl = $row['tahol'];

$del_user = $row['id'];



echo'
    
    
    <table class="table table-striped">
    <tr>
        <th>
            کد پرسنلی
        </th>
        <th>
            نام
        </th>
        <th>
            نام خوانوادگی
        </th>
        <th>
            تحصیلات
        </th>
        <th>
            حوزه
        </th>
        <th>
            پایه حقوق
        </th>
        <th>
            تاهل
        </th>
        <th>
        </th>
    </tr>
    <tr>
        <td>
            ',$code_p,'
        </td>
        <td>
            ',$name_users,'
        </td>
        <td>
            ',$name_familys,'
        </td>
        <td>
            ',$tah,'        
        </td>
        <td>
            ',$reshteh,'
        </td>
        <td>
            ',$p_hqoq,'
        </td>
        <td>
            ',$tahl,'
        </td>
        <td>
            <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#Modal">
            <a class="a" href=""      data-bs-toggle="modal" data-bs-target="#Modal">
                اضافه کردن
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                </svg>
            </button>
            <button id="btn_v" class="btn btn-warning" onclick="btnn()">
            <a class="a" href="" >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg>
                ویرایش
            </button>
            <button class="btn btn-danger">
            <a class="a" href="index.php?del=',$del_user,'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                    </svg>
                 حذف
            </button>
        </td>
    </tr>
</table>
    
    
    
    
';

}

if(isset($_GET['del'])){

$del_user= $_GET['del'];
$sql=mysqli_query($a , "delete from userg where id='$del_user'");
$sql=mysqli_query($a , "update userg set  del='1' where id='$del_user'");

}

if(isset($_GET['name_user2'])){

$code_p2 = $_GET['code_p_user2'];
$name_users2 = $_GET['name_user2'];
$name_familys2 = $_GET['name_family2'];
$tah2 = $_GET['tahsilat2'];
$reshteh2 = $_GET['reshte2'];
$p_hqoq2 = $_GET['hoquq2'];
$tahl2 = $_GET['tahol2'];

$sql=mysqli_query($a , "insert into `userg` (`code_p_user`, `name_user`, `name_family`, `tahsilat`, `reshte`, `hoquq`, `tahol`)values('$code_p2','$name_users2','$name_familys2','$tah2','$reshteh2','$p_hqoq2','$tahl2')");
}

?>
</html>