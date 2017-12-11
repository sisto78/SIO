<!DOCTYPE html>
<html>
<?php include('head.php');?>
<body>

	<?php include('navbar2.php');?>
	<link rel="stylesheet" type="text/css" href="style.css">


	<h1> Scheda di diagnosi DRG</h1>
	<form>
		<div class="row">
			<div class="col-md-3">

			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleFormControlInput1">ID PAZIENTE</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ID PAZIENTE">
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">NOME</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="NOME">
				</div>
<div class="form-group">
					<label for="exampleFormControlInput1">COGNOME</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="COGNOME">
				</div>
<div class="form-group">
					<label for="validationDefault01">DATA DI NASCITA</label>
					<input class="form-control" id="validationDefault01"id="date" type="date">
				</div>
				
				<div class="form-group">

					<label>SESSO</label><br>
					<label class="custom-control custom-radio">
						<input id="radio1" name="radio" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Maschio</span>
					</label>
					<label class="custom-control custom-radio">
						<input id="radio2" name="radio" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Femmina</span>
					</label>

				</div>
				<div class="form-group">
					<label for="validationDefault01">DATA DI RICOVERO</label>
					<input class="form-control" id="validationDefault01"id="date" type="date">
				</div>
				<div class="form-group">

					<div class="form-group">
						<label for="exampleFormControlSelect1">DIAGNOSI DRG</label>
						<select class="form-control" id="exampleFormControlSelect1">
							<option>Malattie del sistema nervoso</option>
							<option>Malattie dell'apparato respiratorio</option>
							<option>Malattie dell'apparato cardiocircolatorio</option>
							<option>Malattie dell'apparato digerente</option>
							<option>Malattie epato-biliari</option>
							<option>Malattie dell'apparato muscoloscheletrico</option>
							<option>Malattie del sistema endocrino</option>
							<option>Malattie del rene e delle vie urinarie</option>
							<option>Malattie dell'apparato riproduttivo</option>
							<option>Malattie infettive</option>
							<option>Traumi</option>
							<option>Abuso di alcool,stupefacenti,farmaci</option>
							
						</select>
					</div>
				</div>
				

				<button class="btn btn-primary btn-lg" type="submit">INVIA</button>
				<div class="col-md-3">

				</div>
			</div>
		</div>


	</form>






	<?php include('script.php');?>


</body>
</html>