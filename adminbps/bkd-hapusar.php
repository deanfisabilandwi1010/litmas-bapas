<?php
include '../config.php';

$id_litmas = $_GET['id_litmas'];
$sql = "DELETE FROM litmas WHERE id_litmas ='$id_litmas'";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>
                  alert('Data berhasil dihapus');
                  window.location = '../adminbps/bkd-asimilasi rumah.php';
                </script>";
} else {
    echo mysqli_error($conn);
}
