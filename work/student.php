<?php
    include('conn.php')
 ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td, h2 {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        button{
            padding: 20px;
            border-radius: 15px;
        }
    </style>
    </head>
    <body>
        <h2>Student Information</h2>
        
        <?php
          $sql = "SELECT * FROM student";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
              echo "<table>
                      <tr>
                          <th>Student ID</th>
                          <th>Name</th>
                          <th>LastName</th>
                          <th>Major</th>
                          <th>Picture</th>
                          <th>Show</th>
                      </tr>";
          
              // แสดงข้อมูลในแต่ละแถว
              while($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>" . $row["stdId"] . "</td>
                          <td>" . $row["stdName"] . "</td>
                          <td>" . $row["stdLastName"] . "</td>
                          <td>" . $row["major"] . "</td>
                          <td>
                            <img src='" . $row["picture"] . "' alt='Student Picture' width='150'>
                          </td>
                          <td>
                            <form action='show_student.php' method='GET'>
                                <input type='hidden' name='stdId' value='" . $row["stdId"] . "'>
                                <button type='submit'>Show</button>
                            </form>
                          </td>
                        </tr>";
              }
          
              echo "</table>";
          } else {
              echo "ไม่มีข้อมูล";
          }
          ?>
    </body>
    </html>
<?php
    $conn->close();
?>