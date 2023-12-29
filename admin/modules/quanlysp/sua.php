<?php
    $sql_sua_sp = "SELECT * FROM tbl_sanpham where id_sanpham = '$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>
<h2>Sửa sản phẩm</h2>
<?php
while($row = mysqli_fetch_array($query_sua_sp)){

?>

<form action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" method="POST" enctype="multipart/form-data">
  <table>
    <tr>
      <th>Tên sản phẩm</th>
      <td><input type="text" value="<?php echo $row['tensanpham']?> "name="tensanpham"></td>
    </tr>

    <tr>
      <th>Mã sp</th>
      <td><input type="text"value="<?php echo $row['masp']?>" name="masp"></td>
    </tr>

    <tr>
      <th>Giá sp</th>
      <td><input type="text" value="<?php echo $row['giasp']?>" name="giasp"></td>
    </tr>
    
    <tr>
      <th>Số lượng</th>
      <td><input type="text" value="<?php echo $row['soluong']?>"name="soluong"></td>
    </tr>
    <tr>
      <th>Hình ảnh</th>
      <td>
        <input type="file" name="hinhanh">
        <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>"width="150px">
    </td>
    </tr>

    <tr>
      <th>Tóm tắt</th>
      <td><textarea rows="5" name="tomtat" <?php echo $row['tomtat']?>></textarea></td>
    </tr>

    <tr>
      <th>Nội dung</th>
      <td><textarea rows="5" name="noidung" <?php  echo $row['noidung']?>></textarea></td>
    </tr>

    <tr>
        <th>Danh mục sản phẩm</th>
        <td>
          <select name="danhmuc">
            <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc order by id_danhmuc desc";
            $query_danhmuc = mysqli_query($mysqli , $sql_danhmuc);
            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
              if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){

            ?>
            <option selected value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
            <?php
              }else{
                ?>
                <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                <?php
              }
            }
            ?>
          </select>
        </td>
      </tr>

    <tr>
      <th>Tình trạng</th>
      <td>
        <select name="tinhtrang">
          <?php
          if($row['tinhtrang']==1){
            
          ?>
          <option value="1" selected>Kích hoạt</option>
          <option value="0">Ẩn</option>
          <?php
          }else{
            ?>
            <option value="1">Kích hoạt</option>
          <option value="0" selected>Ẩn</option>
         
            <?php
          }
          ?>


        </select>
      </td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center;">
        <input type="submit" name="suasanpham" value="Sửa sản phẩm">
      </td>
    </tr>
  </table>
  <?php 
  }
?>
</form>
<style>
  body {
    font-family: Arial, sans-serif;
  }

  table {
    width: 50%;
    margin-top: 20px;
    border: 1px solid #ddd;
    border-collapse: collapse;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #f5f5f5;
  }

  input[type="text"] {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>

</body>
</html>
