<?php
    $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky 
    where tbl_cart.id_khachhang =tbl_dangky.id_dangky
    ORDER BY tbl_cart.id_cart DESC";
    $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>
<p class="lk">Liệt kê danh mục sản phẩm </p>

<table style="width:100%" border="1" style="border-collapse:collapse;" >
    <tr>
        <th>ID</th>
        <th>Mã đơn hàng </th>
        <th>Tên khách hàng </th>
        <th>Địa chỉ </th>
        <th>Email</th>

        <th>Số điện thoại </th>
        <th>Tình trạng </th>

        <th>Quản lý </th>


    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array( $query_lietke_dh)){
        $i++;

    
    ?>

    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart']?></td>
        <td><?php echo $row['tenkhachhang'] ?></td>
        <td><?php echo $row['diachi'] ?></td>
        <td><?php echo $row['email'] ?></td>

        <td><?php echo $row['dienthoai'] ?></td>
        <td>
            <?php 
            if($row['cart_status']==1){
                echo'<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].' "> Đơn hàng mới </a>';    
           
            }else{
                echo ' Đã xem';
            }
             ?>
        </td>




        <td><a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>
    </td>
    </tr>
    <?php
    }
    ?>
</table>



<style>
    .lk{
        font-size: 1.5em;
        font-weight: bold;
    }
    body {
      font-family: Arial, sans-serif;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      border: 1px solid #ddd;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #f5f5f5;
    }
  </style>