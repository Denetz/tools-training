<table class="table" cellpadding="0" cellspacing="0"><tbody>
<tr>
	<th class="foto">Фото</th><th class="name">Наименование</th><th class="maker">Производство</th><th class="topprice1">Цена (до 200$)</th><th class="topprice">Цена (свыше 200$)</th><th class="topprice">Цена за 1шт</th></tr>
<?php foreach(Tool::model()->findAll() as $tool) { ?>
	<tr>
		<td class="image"><a href=""><?=
			CHtml::image(Yii::app()->request->baseUrl . '/images/moto/' . explode('/', $tool->photo)[2], 'DORE');
		?>
		</a></td>
		<td class="title"><?=CHtml::link($tool->name, ['site/tool', 'id' => $tool->id])?></td>
		<td class="text"><?=$tool->manufacturer?></td>
		<td class="price"><div class="price"><?=$tool->price_below_200?> грн</div></td>
		<td class="price"><div class="price"><?=$tool->price_more_than_200?> грн</div></td>
		<td class="price"><div class="price"><?=$tool->price_per_one?> грн</div></td>
	</tr>
<?php } ?>
</tbody>
</table>