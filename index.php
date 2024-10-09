<?php
include 'sql_connection.php';
include 'inc/header.php';
?>
<tbody>
  <?php
  $sql = "SELECT *FROM product";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    echo mysqli_error($conn);
  } else {
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $name = $row['name'];
      $description = $row['description'];
      $quantity = $row['quantity'];
      $price = $row['price'];
      $expire_date = $row['expire_date'];

      echo '<tr>
            <td scope="row" >' . $name . '</td>
            <td>' . $description . '</td>
            <td> ' . $quantity . '</td>
            <td> ' . $price . '</td>
            <td> ' . $expire_date . '</td>
            <td> 
            <button class="btn " style="background-color: #b1c8ed;"><a href="edit.php?editid=' . $id . '" class="text-dark" style="text-decoration:none"><i
            class="fa-solid fa-pen-to-square fs-5 me-3"></i></a></button>
            <button class="btn " style="background-color: #b1c8ed;"><a href="delete.php?deleteid=' . $id . '" class="text-dark" style="text-decoration:none"><i
            class="fa-solid fa-trash fs-5"></i></a></button>
            </td>           
          </tr>';
    }
  }
  ?>

</tbody>
</table>
</body>

<!-- java script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<p>you can do may things</p>

</html>