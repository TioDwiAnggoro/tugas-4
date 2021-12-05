<?php
    include "header.php";
    include "koneksi.php";

    $qry_detail_buku=mysqli_query($conn, "select * from nama_buku where id_buku = '".$_GET['id_buku']."'");
    $dt_buku=mysqli_fetch_array($qry_detail_buku);
?>

<h2>Pinjam Buku</h2>
<div class="col-md-4">
    <div class="row">
       <img src="buku.jpg" class="card-img-top">
    </div>
<div class="col-md-8">
    <form action="masukkankeranjang.php?id_buku=<?=$dt_buku['id_buku']?>" method="POST">
        <table class="table table-hover table striped">
            <thead>
                <tr>
                    <td>Judul Buku</td>
                    <td><?=$dt_buku['judul_buku']?></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><?=$dt_buku['deskripsi']?></td>
                </tr>
                <tr>
                    <td>Jumlah Pinjam</td>
                    <td><input type="number" name="pinjam_buku" value="1"></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="btn btn-success" type="submit" value="PINJAM"></td>
                </tr>
            </thead>
        </table>
    </form>
</div>

<?php
    include "footer.php";
?>