<?php include "menu.php"; ?>
<?php
include 'connection.php';
	$stmt=$db->prepare("UPDATE books SET books_name=:books_name, author=:author, isbn=:isbn
    WHERE books_id=:books_id");

		$stmt->bindParam(':books_id', $_POST['books_id']);
		$stmt->bindParam(':books_name', $_POST['books_name']);
		$stmt->bindParam(':author', $_POST['author']);
		$stmt->bindParam(':isbn', $_POST['isbn']);


	$stmt->execute();
  if($stmt) {
    echo 'Päivitettiin kirja:<br>';
    print_r($_POST);
  }
  ?>
  }<?php include "footer.php"; ?>
