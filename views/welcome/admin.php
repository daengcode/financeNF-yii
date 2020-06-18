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
            <!-- <div class="col-md-2">
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
            <div class="col-md-2">
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
            <div class="col-md-2">
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
            </div> -->
            <div class="col-md-2">
                <a href="#" title="Laporan Pembayaran Mahasiswa" data-toggle="tooltip" data-original-title="Laporan Pembayaran Mahasiswa">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-file-signature fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Laporan Pembaya...</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="#" title="Rekap Pembayaran Mahasiswa" data-toggle="tooltip" data-original-title="Rekap Pembayaran Mahasiswa">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-file-invoice-dollar fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Rekap Pembaya...</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>