<?php
include("config.php");

$sqlanggota = mysqli_query($conn, "SELECT count(*) AS username FROM anggota");
$sqlsimpanan = mysqli_query($conn, "SELECT SUM(simpanan) AS simpanan FROM anggota");
$fetchanggota = mysqli_fetch_array($sqlanggota);
$fetchsimpanan = mysqli_fetch_array($sqlsimpanan);

$totalsimpanan = $fetchsimpanan['simpanan'];






?>

<html>

<body>
    <div class="col-lg-12">
        <h1>Dashboard <small>Koperasi</small></h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
        </ol>

        <div class="row">
            <div class="col-lg-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-6 text-right">
                                <p class="announcement-heading"><h3><?= $fetchanggota['username'] ?></h3></p>
                                <p class="announcement-text">Total Jumlah Member</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="fa fa-dollar fa-5x"></i>
                            </div>
                            <div class="col-xs-6 text-right">
                                <p class="announcement-heading"> <h3> <?= number_format($totalsimpanan) ?> </h3></p>
                                <p class="announcement-text">Total Jumlah Simpanan</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>