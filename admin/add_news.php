<!DOCTYPE html>
<html lang="ru">
<head>
	<?php 
	require_once "../functions/functions.php"; 
	require_once "../blocks/head.php";

	?>
</head>
<body>
	<section>
		<div class="container">
			<form method="POST" action="index.php" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-12 stat">
						<h1 style="margin-top: 120px;">Категория новости</h1>
						<select name="type" type="text" size="1">
							<option selected value="Соревнования">Соревнования</option>
							<option value="Проекты">Проекты</option>
							<option value="ТФСО">ТФСО</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 stat">
						<h4 style="margin-top: 10px;">1 - соревнования; 2 - проекты; 3 - тфсо</h4>
						<select name="category_id" type="text" size="1">
							<option selected value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 stat">
						<h4 style="margin-top: 10px;">Короткий текст</h4>
						<label>
							<textarea type="text" name="intro_text" style="margin-top: 10px; width: 500px;"></textarea>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 stat">
						<h1 style="margin-top: 50px;">Заголовок</h1>
						<label>
							<input type="text" name="title" style="margin-top: 10px; width: 500px;">
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 stat">
						<h1 style="margin-top: 50px;">Картинка</h1>
						<label>
							<input type="file" name="picture">
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 stat">
						<p>Полный текст</p>
						<label>
							<textarea type="text" name="full_text" style="margin-top: 10px; width: 500px;" required ></textarea>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="info2 admin__panel stat d-flex">
							<ul class="info d-flex">
								<li class="info__item">
									<h4 style="">Дата 1</h4>
									<label>
										<input type="text" name="date_sor" style=""  >
									</label>
								</li>
								<li class="info__item">
									<h4 style="">Время 1</h4>
									<label>
										<input type="text" name="time" style=""  >
									</label>
								</li>
								<li class="info__item">
									<h4 style="">Дисциплина 1</h4>
									<label>
										<input type="text" name="dis" style=""  >
									</label>
								</li>
							</ul>
							<ul class="info d-flex">
								<li class="info__item">
									<h4>Заявка 1</h4>
									<label>
										
										<input type="text" name="zayavka" value="Заявка"   >
										<input type="text" name="link1" value="" >
									</label>
								</li>
								<li class="info__item">
									<h4>Информация 1</h4>
									<label>
										<input type="text" name="info" value="Информация"   >
										<input type="text" name="link2" value="" >
									</label>
								</li>
								<li class="info__item">
									<h4>Старт 1</h4>
									<label>
										<input type="text" name="start" value="Старт"   >
										<input type="text" name="link3" value="" >
									</label>
								</li>
								<li class="info__item">
									<h4>Результат 1</h4>
									<label>
										<input type="text" name="rezult" value="Результаты"   >
										<input type="text" name="link4" value="" >
									</label>
								</li>
							</ul>
						</div>
						<div class="info2 admin__panel stat d-flex">
							<ul class="info d-flex">
								<li class="info__item">
									<h4 >Дата 2</h4>
									<label>
										<input type="text" name="date_sor2"  >
									</label>
								</li>
								<li class="info__item">
									<h4 >Время 2</h4>
									<label>
										<input type="text" name="time2"   >
									</label>
								</li>
								<li class="info__item">
									<h4 >Дисциплина 2</h4>
									<label>
										<input type="text" name="dis2"  >
									</label>
								</li>
							</ul>
							<ul class="info d-flex">
								<li class="info__item">
									<h4>Заявка 2</h4>
									<label>
										
										<input type="text" name="zayavka2" value="Заявка"  >
										<input type="text" name="link5" value="">
									</label>
								</li>
								<li class="info__item">
									<h4>Информация 2</h4>
									<label>
										<input type="text" name="info2" value="Информация" >
										<input type="text" name="link6" value="" >
									</label>
								</li>
								<li class="info__item">
									<h4>Старт 2</h4>
									<label>
										<input type="text" name="start2" value="Старт"   >
										<input type="text" name="link7" value="">
									</label>
								</li>
								<li class="info__item">
									<h4>Результат 2</h4>
									<label>
										<input type="text" name="rezult2" value="Результаты"   >
										<input type="text" name="link8" value="" >
									</label>
								</li>
							</ul>
						</div>
						<div class="info2 admin__panel stat d-flex">
							<ul class="info d-flex">
								<li class="info__item">
									<h4 >Дата 3</h4>
									<label>
										<input type="text" name="date_sor3"   >
									</label>
								</li>
								<li class="info__item">
									<h4 >Время 3</h4>
									<label>
										<input type="text" name="time3"  >
									</label>
								</li>
								<li class="info__item">
									<h4 >Дисциплина 3</h4>
									<label>
										<input type="text" name="dis3"  >
									</label>
								</li>
							</ul>
							<ul class="info d-flex">
								<li class="info__item">
									<h4>Заявка 3</h4>
									<label>
										
										<input type="text" name="zayavka3" value="Заявка"   >
										<input type="text" name="link9" value="" >
									</label>
								</li>
								<li class="info__item">
									<h4>Информация 3</h4>
									<label>
										<input type="text" name="info3" value="Информация"   >
										<input type="text" name="link10" value="" >
									</label>
								</li>
								<li class="info__item">
									<h4>Старт 3</h4>
									<label>
										<input type="text" name="start3" value="Старт"  >
										<input type="text" name="link11" value="" >
									</label>
								</li>
								<li class="info__item">
									<h4>Результат 3</h4>
									<label>
										<input type="text" name="rezult3" value="Результаты"   >
										<input type="text" name="link12" value="" >
									</label>
								</li>
							</ul>
						</div>
						<div class="info2 admin__panel stat d-flex">
							<ul class="info d-flex">
								<li class="info__item">
									<h4 >Дата 4</h4>
									<label>
										<input type="text" name="date_sor4"   >
									</label>
								</li>
								<li class="info__item">
									<h4 >Время 4</h4>
									<label>
										<input type="text" name="time4"  >
									</label>
								</li>
								<li class="info__item">
									<h4 >Дисциплина 4</h4>
									<label>
										<input type="text" name="dis4"   >
									</label>
								</li>
							</ul>
							<ul class="info d-flex">
								<li class="info__item">
									<h4>Заявка 4</h4>
									<label>	
										<input type="text" name="zayavka4" value="Заявка"   >
										<input type="text" name="link13" value="" >
									</label>
								</li>
								<li class="info__item">
									<h4>Информация 4</h4>
									<label>
										<input type="text" name="info4" value="Информация"   >
										<input type="text" name="link14" value="" >
									</label>
								</li>
								<li class="info__item">
									<h4>Старт 4</h4>
									<label>
										<input type="text" name="start4" value="Старт"   >
										<input type="text" name="link15" value="" >
									</label>
								</li>
								<li class="info__item">
									<h4>Результат 4</h4>
									<label>
										<input type="text" name="rezult4" value="Результаты"   >
										<input type="text" name="link16" value="" >
									</label>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 stat">
						<h4>Второй заголовок</h4>
						<label>
							<input type="text" name="title2" style="margin-top: 10px; width: 500px;"  >
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 stat">
						<h4>Второй полный текст</h4>
						<label>
							<textarea type="text" name="full_text2" style="margin-top: 10px; width: 500px;" ></textarea>
						</label>
					</div>
				</div>
				<input type="submit" name="upload" value="Создать" class="btn stat" style="background-color: orange">
			</form>
		</div>
	</section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/js.js"></script>	
</html>