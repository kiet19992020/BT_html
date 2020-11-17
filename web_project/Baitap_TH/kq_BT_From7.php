<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $hoten = $_REQUEST["hoten"];
    $gioitinh = $_REQUEST["gioitinh"];
    $diachi = $_REQUEST["diachi"];
    $email = $_REQUEST["email"];
    $sdt = $_REQUEST["sdt"];
    $quoctich = $_REQUEST["quoctich"];
    $ghichu = $_REQUEST["ghichu"];
    
    ?>
	<h4>Bạn đã gửi thành công, ....</h4>
    Họ Tên : <?php echo $hoten; ?>
    <br/>
    Giới Tính  : <?php echo $gioitinh; ?>
    <br/>
    Địa chỉ  : <?php echo $diachi; ?>
    <br/>
    Email  : <?php echo $email; ?>
    <br/>
    Số ĐT  : <?php echo $sdt; ?>
    <br/>
    Quốc tịch  : <?php echo $quoctich; ?>
    <br/>
    Môn học  : <?php 
                    if (isset($_POST['monhoc'])) 
                        foreach($_POST['monhoc'] as $value) 
                          echo $value ." ";                                         
                ?>
    <br/>
    Ghi Chú  : <?php echo $ghichu; ?>



    
           <p> <a href="javascript:window.history.back(-1);">Trở về trang trước</a></p>
  

</body>
</html>