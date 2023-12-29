<?php
// session_start();
if(isset($_POST['dangky'])){
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];
    $matkhau = md5($_POST['matkhau']);
    $sql_dangky =mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,
    matkhau,dienthoai) VALUE('".$tenkhachhang."','". $email."','".$diachi."' ,'".$matkhau."' ,'". $dienthoai."')");
    if($sql_dangky){
        echo ' <p style ="color:green">Bạn đã đăng ký thành công </p> ';
        $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
       
        header('Location:index.php?quanly=giohang');

    }


}
?>
<p>Đăng ký tài khoản</p>
<form action="" method="post">

    <table class="dangky" border="1" width="50%" style="border-collapse:collapse;">
        <tr>
            <td>Họ và tên</td>
            <td><input type="text" size="50" name="hovaten"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" size="50" name="email"></td>
        </tr>
        <tr>
            <td>Điện thoại</td>
            <td><input type="text" size="50" name="dienthoai"></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text" size="50" name="diachi"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="text" size="50" name="matkhau"></td>
        </tr>
        <tr>
            <td ><input type="submit" name="dangky" value="Đăng ký"></td>
            <td><a href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a> </td>
            
        </tr>
    </table>
</form>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .dangky {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 50%;
        margin: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table, th, td {
        border: none;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    input[type="text"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        
        margin-left: 240px;
        background-color: #4CAF50;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
