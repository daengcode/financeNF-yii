<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\widgets\Alert;
use kartik\icons\Icon;
use yii\bootstrap\Nav;
use app\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
Icon::map($this)
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Yii::$app->name ?> | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => "<b>KEUANGAN</b> STT-NF",
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top navbar',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Hi, ' . Yii::$app->user->identity->username],
                Yii::$app->user->isGuest ? (['label' => '']) : ('<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>')
            ],
        ]);
        NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) && (!Yii::$app->user->isGuest) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left"> <strong>Copyright © 2020 <a href="http://nurulfikri.ac.id" target="_blank">Sekolah Tinggi Teknologi Terpadu Nurul Fikri</a></strong>. All rights reserved.</p>
            <div class="pull-right">
                <p>Made with <i class="fa fa-heart" title="love" style="color: red;"></i> & <i class="fa fa-coffee" title="coffee"></i> by <a href="https://www.nurulfikri.ac.id">Group Three LnM</a></p>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>