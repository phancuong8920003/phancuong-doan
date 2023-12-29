
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>

  <h2>Thêm danh mục sản phẩm</h2>

  <form action="modules/quanlydanhmucsp/xuly.php" method="POST">
    <table>
      <tr>
        <th>Tên danh mục</th>
        <td><input type="text" name="tendanhmuc"></td>
      </tr>

      <tr>
        <th>Thứ tự</th>
        <td><input type="text" name="thutu"></td>
      </tr>
      
      <tr>
        <td colspan="2" style="text-align:center;">
          <input type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm">
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
