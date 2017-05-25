<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;

$this->title = 'Summarize';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Summarize</h3>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th>Total Siswa Submit</th>
                        <th>Rata-rata Nilai</th>
                        <th>Siswa Nilai Terkecil</th>
                        <th>Siswa Nilai Terbesar</th>
                        <th>Standar Deviasi Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $summary['total_siswa'] ?></td>
                        <td><?= bcdiv($summary['rata_rata'], 1, 1) ?></td>
                        <td><?= $min['name'] ?></td>
                        <td><?= $max['name'] ?></td>
                        <td><?= bcdiv(sqrt($deviasi), 1, 1) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
