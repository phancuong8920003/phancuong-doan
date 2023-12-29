<p style="margin:20px ; font-size: 20px;font-weight:bold;color:#FE5858;">CHI TIẾT SẢN PHẨM</p>
<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham ,tbl_danhmuc where
     tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc and tbl_sanpham.id_sanpham =  '$_GET[id]'
          limit 1";
    $query_chitiet = mysqli_query($mysqli , $sql_chitiet);
     while($row_chitiet = mysqli_fetch_array($query_chitiet)){      
     ?>
<div class="wrapper_chitiet">

    <div class="hinhanh_sanpham">
    <img width="100%" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
    
    </div>
    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">

        <div class="chitiet_sanpham">
            <h3>Tên sản phẩm :  <?php  echo $row_chitiet['tensanpham'] ?></h3>
            <p class="gia">Giá sản phẩm :  <?php  echo number_format($row_chitiet['giasp'],0,',','.').'vnd'  ?> </p>
            <p>Mã sản phẩm :  <?php  echo $row_chitiet['masp'] ?> </p>
            <p>Số lượng sản phẩm :  <?php  echo $row_chitiet['soluong'] ?> </p>
            <p>Danh mục sản phẩm :  <?php  echo $row_chitiet['tendanhmuc'] ?> </p>
            <p><input class="mua" type="submit" name="themgiohang" value="Thêm vào giỏ "></p>
    
        </div>
    </form>
</div>
<?php
     }
     ?> 