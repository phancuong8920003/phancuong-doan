<?php


if(isset($_POST['dangnhap'])){
    $email = $_POST['email'];
    $matkhau =md5($_POST['password']);
    $sql="select * from tbl_dangky where email= '".$email."' and matkhau= '".$matkhau."' limit 1";
    $row = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($row);
    if($count>0){
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['tenkhachhang'];
        $_SESSION['id_khachhang'] = $row_data['id_dangky'];

        header("Location:index.php?quanly=giohang");
    }
    else{ 
        echo ' <p style ="color:red">Mật khẩu hoặc email sai ,vui lòng nhập lại </p> ';
    }
}
?>
<form action="" autocomplete="off" method="POST">

        <table border="1" style="text-align:center;border-collapse:collapse;">
            <tr>
                <td colspan="2"><h3>Đăng nhập khách hàng</h3></td>
            </tr>
            <tr>
                <td>Tài khoản</td>
                <td><input type="text" name="email" placeholder="Email ...."></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="password" placeholder="Mật khẩu...."></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
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

    form {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
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

    h3 {
        margin: 0;
        color: #333;
        font-size: 20px;
    }

    input[type="text"], input[type="password"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
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

    ::placeholder {
        color: #aaa;
    }
</style>
