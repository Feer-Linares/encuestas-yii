<?php 
use yii\helpers\Url;
use yii\helpers\Html;
 ?>
 <h1 style="text-align: center;"> Encuesta nueva</h1>
 <h3><?= $mensaje ?></h3>
 <?= Html::beginForm(
 		Url::toRoute("site/request"),
 		"get",
 		['class' => 'form-inline']
 		);
 ?>
 <div class="">
 		<div class="col-sm-4">
 		</div>
 		<div class="col-sm-4">
 		</div>
 		<div class="col-sm-4" style="text-align: right;">
 			<?= Html::img('images/add.jpg', ['alt' => 'My logo']); ?>
 		</div>
 	</div>
 <div class="form-group">
 	<?= Html::textArea("pregunta",null,["class" => "form-control"])?>
 	<?= Html::textInput("nombre",null,["class" => "form-control"]) ?>
 	<?= Html::submitInput("Enviar nombre",["class => btn btn-primary"]) ?>
 </div>
 <?= Html::endForm()?>