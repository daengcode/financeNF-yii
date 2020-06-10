<?php

use kartik\icons\Icon;
use yii\bootstrap\Html;

/* @var $this yii\web\View */

$this->title = 'Selamat Datang';
Icon::map($this);
?>
<div class="site-index">

    <div class="jumbotron">
        <!-- <i class="fa fa-user-tie fa-3x"></i> -->
        <h2>Selamat datang, <?= Yii::$app->user->identity->username ?></h2>
        <p>Pilihlah menu-menu dibawah untuk melihat aktivitas pembayaran Mahasiswa.</p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <a href="#" data-toggle="tooltip" title="Registrasi Pembayaran Mahasiswa">
                            <div class="thumbnail">
                                <?= Icon::show('money-check-alt', ['class' => 'fa-5x', 'title' => 'Registrasi Pembayaran Mahasiswa']) ?>
                                <div class="caption">
                                    <h3>Registrasi Pembayaran</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <a href="#" data-toggle="tooltip" title="Laporan Pembayaran Mahasiswa">
                            <div class="thumbnail" style="margin-left: 25px;">
                                <?= Icon::show('file-signature', ['class' => 'title fa-5x', 'title' => 'Laporan Pembayaran Mahasiswa']) ?>
                                <div class="caption">
                                    <h3>Laporan Pembayaran</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <a href="#" data-toggle="tooltip" title="Rekap Pembayaran Mahasiswa">
                            <div class="thumbnail">
                                <?= Icon::show('file-invoice-dollar', ['class' => 'fa-5x', 'title' => 'Rekap Pembayaran Mahasiswa']) ?>
                                <div class="caption">
                                    <h3>Rekap Pembayaran</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>