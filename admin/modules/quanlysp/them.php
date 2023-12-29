
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>

  <h2>Thêm sản phẩm</h2>

  <form action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <th>Tên sản phẩm</th>
        <td><input type="text" name="tensanpham"></td>
      </tr>

      <tr>
        <th>Mã sp</th>
        <td><input type="text" name="masp"></td>
      </tr>

      <tr>
        <th>Giá sp</th>
        <td><input type="text" name="giasp"></td>
      </tr>
      
      <tr>
        <th>Số lượng</th>
        <td><input type="text" name="soluong"></td>
      </tr>
      <tr>
        <th>Hình ảnh</th>
        <td><input type="file" name="hinhanh"></td>
      </tr>

      <tr>
        <th>Tóm tắt</th>
        <td><textarea rows="5" name="tomtat"></textarea></td>
      </tr>

      <tr>
        <th>Nội dung</th>
        <td><textarea rows="5" name="noidung"></textarea></td>
      </tr>

      <tr>
        <th>Danh mục sản phẩm</th>
        <td>
          <select name="danhmuc">
            <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc order by id_danhmuc desc";
            $query_danhmuc = mysqli_query($mysqli , $sql_danhmuc);
            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            ?>
            <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
            <?php
            }
            ?>
          </select>
        </td>
      </tr>

      <tr>
        <th>Tình trạng</th>
        <td>
          <select name="tinhtrang">
            <option value="1">Kích hoạt</option>
            <option value="0">Ẩn</option>

          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align:center;">
          <input type="submit" name="themsanpham" value="Thêm sản phẩm">
        </td>
      </tr>
    </table>
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
