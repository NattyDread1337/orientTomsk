<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
	$title = 'Вопросы и ответы';
	require_once "functions/functions.php"; 
	require_once "blocks/head.php";
	?>
</head>
<body>
	<?php require_once "blocks/header.php" ?>
	<section>
		<div class="container faq">
			<div class="row">
				<div class="col-lg-6" id="stat" class="anchor1">
					<h1 style="font-family: 'Gilroy';">Вопросы и ответы </h1>
				</div>
				<div class="col-lg-6"></div>
			</div>
			<div class="row question">
				<div class="col-lg-12">
					<h3>1. Что такое спортивное ориентирование?</h3>
					<hr>
					<p>Спортивное ориентирование-вид спорта, в котором участники при помощи спортивной карты и компаса должны пройти неизвестную им трассу (дистанцию) через контрольные пункты (КП), расположенные на местности. Результаты определяются по времени прохождения дистанции (в определённых случаях с учётом штрафного времени) или по количеству набранных очков.
					<br><br>
					Подготовиться к определенным условиям практически невозможно. Соревнования по спортивному ориентированию проходят во всех уголках планеты. Старты могут быть и в горах, и в лесах, и в полях, и даже в городских условиях. По ходу дистанции ориентировщики могут столкнуться с препятствиями в виде ручьев, рек, валежника, крутых гор, непролазных кустов и любых других творений природы. Спортсмен любого другого вида спорта может только завидовать тому, с чем приходится сталкиваться ориентировщикам на соревнованиях.</p>
				</div>
			</div>
			<div class="row question">
				<div class="col-lg-12">
					<h3>2. Виды спортивного ориентирования.</h3>
					<hr>
					<h4>Ориентирование бегом.</h4>
					<p>Участники проходят дистанцию бегом. Ориентирование бегом проводится в разных дисциплинах, например: заданном направлении, по выбору и даже на маркированной трассе. Чемпионаты мира по спортивному ориентированию бегом проводятся с 1966 года.</p>
					<br>
					<h4>Ориентирование на лыжах.</h4>
					<p>
					Участники передвигаются на беговых лыжах. Естественно этот вид ориентирования проводится зимой. Дисциплины, в которых проводится ориентирование на лыжах: заданное направление, маркированная трасса, ориентатлон (Ski-O-thlon). Чемпионаты мира по спортивному ориентированию на лыжах проводятся с 1975 года.</p>
					<br>
					<h4>Ориентирование на велосипедах.</h4>
					<p>
					Участники преодолевают дистанцию на велосипедах. Соревнования по ориентированию на велосипедах проводятся в дисциплинах: заданное направление, маркированная трасса, по выбору или в комбинации этих видов. Чемпионаты мира по спортивному ориентированию на велосипедах проводятся с 2002 года.</p>
					<br>
					<h4>Точное ориентирование, трейл ориентирование.</h4>
					<p>
					Международное название — Trail Orienteering (TrailO, также PreO, старое российское название — «ориентирование по тропам») — вид ориентирования, заключающийся в точной интерпретации ситуации на местности с помощью карты. Участники за контрольное время преодолевают дистанцию, состоящую из пунктов, на каждом из которых в пределах видимости располагаются несколько призм (флагов). Участники должны определить и зафиксировать, какая из этих призм (флагов) на местности соответствует точке обозначенной на карте и заданной легенде (возможно и никакая). При этом на карте могут намеренно отсутствовать некоторые имеющиеся на местности ориентиры.<br><br>
					Участники могут передвигаться только по разрешенным тропинкам или маркированным участкам. Спортсмен может по своему выбору стартовать или пешком (бегом), или на велосипеде, или на одноместной коляске приводимой в движение руками или электромотором. Время прохождения дистанции в расчёт не принимается, результат определяется по количеству правильных ответов.</p>
				</div>
			</div>
			<div class="row question">
				<div class="col-lg-12">
					<h3>3. Виды соревнований.</h3>
					<hr>
					<h4>Ориентирование в заданном направлении.</h4>
					<p>Дистанцию проходят в заданном порядке, то есть участник получает карту в момент старта. На карте обозначены места старта, финиша и контрольные пункты, соединенные линией, которая обозначает последовательность прохождения. Победитель определяется по наименьшему времени прохождения дистанции.</p>
					<br>
					<h4>Соревнования по спортивному лабиринту (ультраспринт).</h4>
					<p>
					Эти соревнования проводятся на небольшой площади, оборудованной искусственными препятствиями. Длина дистанции составляет 100-500 м, карты лабиринта обычно имеют масштаб 1:100.</p>
					<br>
					<h4>Ориентирование по выбору.</h4>
					<p>
					Дистанция проходится в произвольном порядке. Перед стартом участникам выдается карта, с обозначенными на ней местами старта и финиша, а также контрольными пунктами. Существует три варианта проведения соревнований такого вида:<br>
— прохождение дистанции от старта до финиша, с требуемым количеством КП/очков за наименьшее время,<br>
— набор наибольшего количества очков/КП за назначенное контрольное время,<br>
— контрольным пунктам, в зависимости от сложности и дальности, назначаются баллы,<br> а за превышение контрольного времени назначается штраф, как правило, путем вычитания из результата по одному баллу за каждую полную минуту превышения контрольного времени.</p>
					<br>
					<h4>Ориентирование на маркированной трассе.</h4>
					<p>
					Участникам предоставляется карта с обозначенным стартом. Следуя по маркированной трассе, участник вносит в карту (иголкой или спец. компостером) расположение контрольных пунктов, которые он встречает по пути. На финише судьи проверяют точность определения расположения контрольного пункта и начисляют штраф в зависимости от ошибки участника.</p>
					<br>
					<h4>Различают соревнования и по другим критериям:</h4>
					<p>
					— по времени проведения: дневные и ночные,<br>
— по взаимодействию спортсменов: индивидуальные, эстафетные, групповые,<br>
— по способу организации старта: раздельный, гандикап, общий,<br>
— по характеру зачета результатов: личные, лично-командные, командные,<br>
— по способу определения результата соревнований: однократные, многократные, квалификационные.</p>
				</div>
			</div>
			<div class="row question">
				<div class="col-lg-12">
					<h3>3. Экипировка.</h3>
					<hr>
					<p>Спортивное ориентирование — один из тех видов спорта, в котором к подбору обуви и одежды стоит подойти наиболее ответственно. Ведь на кону не только победа, но и собственное здоровье. Хоть и основой ориентирование является бег, но далеко не вся одежда и обувь, даже кроссовая, подойдет для этого спорта.<br><br>
					Все дело в специфике бега в спортивном ориентировании. Даже участники кроссовых и трейловых забегов не сталкиваются с такими трудностями и препятствиями, с которыми встречаются ориентировщики. Тут приходится и через непролазные кусты пробежать, вскарабкаться по крутому склону, переходить ручьи и реки вброд. Обычная легкоатлетическая одежда и обувь очень быстро порвется в таких беговых условиях.</p>
					<br>
					<h4>Одежда.</h4>
					<p>
					Верхом» экипировки является специальная футболка, которую многие ориентировщики называют «беговухой». Она выполнена из плотного материала, чтобы не рвалась от каждой веточки. Практически на всех таких футболках воротник немного выше, чем на обычных. Для удобства в воротник вшивается молния. Существуют модели с длинным рукавом. На спринтах в городских условиях можно бегать и в майках.<br><br>
					«Низом» экипировки ориентировщика обычно являются штаны. Они очень легкие, но в тоже время прочные. Реже вместо штанов надевают лосины и тайтсы. Правда, они менее прочные, зато многим бегать в них удобнее. Также популярным вариантом является сочетание капри 3/4 + гетры. Капри, которые в народе еще известны как «велосипедки», покрывают ноги чуть ниже колена. Специальные гетры для ориентирования, которые еще и заменяют носки, закрывают оставшуюся часть ноги. Такие гетры делают из прочной, толстой и эластичной ткани. Такой вариант лучше подойдет для бега по местности, где много низких кустов, болот или ручьев, и в дождливую погоду. Поскольку штаны намокнут и будут неудобны. Кроме этого штаны и лосины не так будут защищать от удара веток. На городских спринтах бегают в обычных легкоатлетических шортах.<br><br>
					Что касается носков, то можно использовать обычные легкоатлетические носки. Правда, все же не следует надевать совсем короткие, даже со штанами. Ахиллово сухожилие должно быть закрыто полностью. Носки для спортивного ориентирования дополнительно укреплены в этом месте.</p>
					<br>
					<h4>Что еще нужно:</h4>
					<p>
					— специальный компас для спортивного ориентирования,<br>
— карта — выдается на старте,<br>
— легенды — подробное описание контрольных пунктов на местности в виде принятых символов,<br>
— чипы для отметки (SFR, SportIdent, Emit),<br>
— обувь (шиповки); копанки, оснащены металлическими впайками, которые обеспечивают лучшее сцепление по всей поверхности стопы — это снижает шанс падения при беге по камням, наклонной поверхности и в сырую погоду,<br>
— фонарь (для ночного ориентирования),<br>
— планшет — специальный инвентарь для лыжного и велоориентирования,<br>
— лыжи и палки (для лыжного ориентирования),<br>
— велосипед (для велоориентирования).</p>
				</div>
			</div>
		</div>
	</section>
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
<?php require_once "blocks/footer.php" ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>	
</body>
</html>