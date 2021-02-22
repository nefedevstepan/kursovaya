<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'База производственной практики';
?>
<div class="site-index">

    <div class="jumbotron">
        <a href="<?= \yii\helpers\Url::to(['/practice'])?>"> <button class="btn btn-success">Студент</button></a>
        <a href="<?= \yii\helpers\Url::to(['user/login'])?>"> <button class="btn btn-success">Работодатель</button></a>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                
            </div>
            <div class="col-lg-4">
               
            </div>
            <div class="col-lg-4">
                
            </div>
        </div>

    </div>
</div>
