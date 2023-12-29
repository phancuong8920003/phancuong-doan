
<?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc order by id_danhmuc desc";
            $query_danhmuc = mysqli_query($mysqli , $sql_danhmuc);
           
            ?>
            <?php
            if(isset($_GET['dangxuat'])&& $_GET['dangxuat']==1){
                unset($_SESSION['dangky']);
            }
            ?>
<div class="menu" >
        <div class="danhmucsp">
            <ul>
                <li><a href="index.php">Trang chủ </a></li>
                <?php
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
                <?php
                }
                ?>
                  
                <li><a href="index.php?quanly=giohang">Giỏ hàng </a></li>
                <?php
                if(isset($_SESSION['dangky'])){
                    
                   
                ?>
                <li><a href="index.php?dangxuat=1">Đăng xuất</a></li> 
                <?php
                }else{
                ?>
                <li><a href="index.php?quanly=dangky">Đăng ký </a></li> 

                <?php
                }
                ?>
                
                    
                
            </ul>
            <p>
                <form action="index.php?quanly=timkiem" method="POST">

                    <input type="text" placeholder="Tìm kiếm sản phẩm" name="tukhoa">
                    <input type="submit" name="timkiem" value="Tìm kiếm">
                </form>
            </p>
        </div>
        <style>
            form {
    display: flex;
    justify-content: center;
    line-height: 20px;
    align-items: center;
}

input[type="text"] {
    padding: 6px;
    margin-right: 5px;
}

input[type="submit"] {
    padding: 8px 15px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

        </style>
    </div>
    <div class="clear"></div>   
    