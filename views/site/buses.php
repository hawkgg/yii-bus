<?php
/* @var $this yii\web\View */

$this->title = 'Автобусы';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Автобусы</h1>
        <table border="1">
            <thead>
            <th>ID</th>
            <th>Марка</th>
            <th>Модель</th>
            <th>Год выпуска</th>
            <th>Средняя скорость</th>
            </thead>
            <tbody>
            <? foreach($buses as $bus): ?>
                <tr>
                    <td><?= $bus->id ?></td>
                    <td><?= $bus->vendor ?></td>
                    <td><?= $bus->model ?></td>
                    <td><?= $bus->release_year ?></td>
                    <td><?= $bus->avg_speed ?></td>
                </tr>
            <? endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
