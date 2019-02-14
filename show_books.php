<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
$sql="select * from books";
$books=$db->query($sql);
$arrayBooks=$books->fetchAll(PDO::FETCH_ASSOC);
//print_r($arrayBooks);
 ?>
<h1>Kirjalista</h1>
<table border="1">
  <thead>
    <tr>
      <th>Kirja id</th> <th>Kirjan nimi</th> <th>Tekijä</th> <th>ISBN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>id</td> <td>nimi</td> <td>tekijä</td> <td>isbn</td>
    </tr>
    <?php
    foreach ($arrayBooks as $row) {
      echo '<tr>';
        echo '<td>'.$row['books_id'].'</td>';
        echo '<td>'.$row['books_name'].'</td>';
        echo '<td>'.$row['author'].'</td>';
        echo '<td>'.$row['isbn'].'</td>';
      echo '</tr>';
    }
     ?>
  </tbody>
</table>
<?php include "footer.php"; ?>
