<?php
include "connection.php";

$siswa = $db->query("select * from siswa");  // prepare statement

$data_siswa = $siswa->fetchAll();   // execute and get data as array

// foreach($data_siswa as $key)
// {
//     echo "<br>",$key['nama']," ",$key['pekerjaan'],"<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>CRUD MYSQL</title>
</head>

<body>
<div class="container">
  <div class="row">
   <div class="col-12">
 
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Jurusan</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($data_siswa as $key) :?>
    <tr>
      <td><?php echo $key['nama'] ?></td>
      <td><?php echo $key['pekerjaan'] ?></td>
      <td><a href="delete.php?id_siswa=<?php echo $key['id_siswa'];?>">Hapus</a>| <a href="edit.php?id_siswa=<?php echo $key['id_siswa'];?>">edit</a></td>
    </tr>
    <?php endforeach ;?>
  </tbody>
</table>

</div>
</div>
</div>

<!-- form input siswa -->

<div class="container">
    <div class="row">
        <div class="col">

        <form action="input.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="nama" class="form-control">
            <div class="form-group">
                <label for="exampleInputEmail1">Jurusan</label>
                <input type="text" name="pekerjaan" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </form>
        </div>
    </div>
</div>

        

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>