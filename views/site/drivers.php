<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use Carbon\Carbon;
/* @var $this yii\web\View */

$this->title = 'Автобусы';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Водители</h1>
        <table border="1">
            <thead>
            <th>ID</th>
            <th>ФИО</th>
            <th>Возраст</th>
            </thead>
            <tbody>
                <? foreach($drivers as $driver): ?>
                    <tr>
                        <td><?= $driver->id ?></td>
                        <td><?= $driver->fio ?></td>
                        <td><?= Carbon::createFromFormat("Y-m-d", $driver->birth)->age ?></td>
                    </tr>
                <? endforeach; ?>
            </tbody>
        </table>
        <?= LinkPager::widget(['pagination' => $pagination]) ?>
    </div>
</div>
