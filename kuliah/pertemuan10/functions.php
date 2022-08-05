<?php

// koneksi ke database & pilih Database
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_182101028');
}


// Query isi tabel mahasiswa
function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, "$query");


  // jika hasilnya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // ubah data ke dalam array
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }


  return $rows;
}
