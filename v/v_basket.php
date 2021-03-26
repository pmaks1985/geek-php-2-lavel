<table border="1px">
	<tr>
		<th>Наименование товара</th>
		<th>Количество (шт.)</th>
		<th>Цена за ед. товара ($)</th>
		<th>Сумма покупок($)</th>
		<th>Действие</th>
	</tr>
	<?php
		$order = 0;
		if (isset($products)) {
			foreach ($products as $product) {
				echo "<tr><td>" . $product["title"] . "</td><td>" . $product["count"] . "</td><td>" . $product["price"] . "</td><td>" . $product["count"] * $product["price"] . "</td><td><form action='index.php?c=page&act=basket' method='post'><input type='submit' value='Удалить товар' class='btn btn-default'></form></td></tr>";
				$order += $product["count"] * $product["price"];
			}
		}
	?>
</table>
<h2><?= "Итоговая сумма заказов: " . $order . " USD"?></h2>
