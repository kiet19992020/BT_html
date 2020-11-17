<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    td{
            text-align:center;
            border: solid 1px;
            width: 250px;
            height: 30px;
          
        }
    #so{
        font-size: 20px;
       
        color :blue;
    }
    #pt{
        font-size: 20px;
        
        color :red;
    }
    h3 {
        color :red;
        text-align:center;
        font-size: 25px;
        margin-top:10px;
    }
    table{
        margin-top: 50px;
        margin-left:500px;
    }
    p {
        font-size: 20px;
      
        color :red;
    }
    #cong{
        color: red;
        font-size: 5px;
        
    }
    
    </style>
<body>
    <?php
        
        // $stn = $_POST["stn"];
        // $sth = $_POST["sth"];
        // $gender = $_POST["gender"];

        // if($_POST['gender'] == "cong") {
        //     $gender = "Cộng";
        //     $kq = $stn + $sth;
        // }
       
        // else if($_POST['gender'] == "tru") {
        //     $gender = "Trừ";
        //     $kq = $stn - $sth;
        // }
        // else if($_POST['gender'] == "nhan") {
        //     $gender = "Nhân";
        //     $kq = $stn * $sth;
        // }
        // else if($_POST['gender'] == "chia") {
        //     $gender = "Chia";
        //     $kq = $stn / $sth;
        // }


        if(isset($_POST['stn']))
            $stn = trim($_POST['stn']);
        else 
            $stn=0;
        if(isset($_POST['sth']))  
            $sth=trim($_POST['sth']); 
        else 
            $sth=0;

        $pt = $_REQUEST["pt"];;
        
        $kq = 0;
        
        if(isset($_REQUEST["tinh"]))
        {
            if ($pt == "Cộng")
                $kq = $stn + $sth;
            
            elseif ($pt == "Trừ")
                $kq = $stn - $sth;
            
            elseif ($pt == "Nhân")
                $kq = $stn * $sth;
            
            elseif ($pt == "Chia")
                $kq = $stn / $sth;          
        }
        else 
        {         
            $pt = "Chưa chọn";  
            $kq = "";
        }     
       
    ?>
   


    <table  align="center" border ="1">
<tr>

    <th colspan="2" align="center"><h3><font color="blue">PHÉP TÍNH TRÊN HAI SỐ</font></h3></th>

</tr>

<tr>
    <td width="50px" id ="pt"  >Chọn Phép Tính</td>
    <td id ="pt">
         <?php echo $pt ?><br />
    </td>
        

</tr>


<tr>
    <td width="30px" id="so" >Số Thứ Nhất</td>
    <td>
        <label for="stn"></label>
        <input type="text " id="stn" size="40" name="stn" value="<?php echo $stn; ?>">
    </td>
        
</tr>

<tr>
    <td width="30px" id="so">Số Thứ Hai</td>
    <td>
        <label for="sth"></label>
        <input type="text " id="sth" size="40" name="sth" value="<?php echo $sth; ?>">
    </td>
        
</tr>


<tr>
            <td>Kết quả:</td>
            <td><input type="text" name="KetQua" disabled="disabled" value="<?php echo $kq; ?>"/></td>
</tr>
<tr>
            <td><a href="javascript:window.history.back(-1);">Trở về trang trước</a></td>
</tr>




</table>
</form>

</body>
</html>