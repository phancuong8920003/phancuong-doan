
<?php
            $sql_pro = "SELECT * FROM tbl_sanpham ,tbl_danhmuc where tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc order by tbl_sanpham.id_danhmuc desc limit 25";
            $query_pro = mysqli_query($mysqli , $sql_pro);
           
            ?>
<h3>Sản phẩm mới nhất</h3>
            <ul class="list_product">
                <?php
                while($row = mysqli_fetch_array($query_pro)){
                    ?>
                
                <li>
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">

                    <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                        <p class="title_product">Tên sản phẩm : <?php  echo $row['tensanpham']  ?></p>
                        <p class="price_product">Giá : <?php echo number_format($row['giasp'],0,',','.').'vnd'?> </p>
                        <p style="text-align: center; color :#777"><?php echo $row['tendanhmuc']?></p>
                    </a>
                    
                </li>
                <?php
                }
                ?>

            </ul>