<!DOCTYPE html>
<html>
	<?php include('head.php');?>
<body>
	
	<?php include('navbar2.php');?>


	<h1>Scheda di dimissione ospedaliera SDO </h1>

<form>
			<div class="row">
				<div class="col-md-4 mb-3">
					<label for="validationDefault01">NOME</label>
					<input type="text" class="form-control" id="validationDefault01" placeholder="Nome" minlength="2" required>
				</div>
				<div class="col-md-4 mb-3">
					<label for="validationDefault02">COGNOME</label>
					<input type="text" class="form-control" id="validationDefault02" placeholder="Cognome" minlength="2" required>
					<div class="invalid-feedback">
						Please provide a valid name.
					</div>      
				</div>
				<div class="col-md-4 mb-3">
					<label for="validationDefault01">ID PAZIENTE</label>
					<input type="text" class="form-control" id="validationDefault01" placeholder="ID paziente" minlength="2" required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mb-3">
					<label for="validationDefault01">DATA DI NASCITA</label>
					<input class="form-control" id="validationDefault01"id="date" type="date">
				</div>
				<div class="col-md-4 mb-3">

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

				<div class="col-md-4 mb-3">

					
					<label for="validationDefault01">DATA DI RICOVERO</label>
					<input class="form-control" id="validationDefault01"id="date" type="date">
				
				</div>
			</div>
			
		</div>

		

<div class="row">
	<div class="col-md-4 mb-3">
					<label for="validationDefault01">DATA DI DIMISSIONE</label>
					<input class="form-control" id="validationDefault01"id="date" type="date">
				</div>
				<div class="col-md-4 mb-3">
				<div class="form-group">
					<label for="exampleFormControlSelect2">REPARTO</label>
					<select  class="form-control" id="exampleFormControlSelect2">
						<option>Chirurgia generale</option>
						<option>Cardiochirurgia</option>
						<option>Nefrologia</option>
						<option>Malattie infettive</option>
						<option>Ortopedia e traumatologia</option>
						<option>Neurologia</option>
						<option>Maxillo facciale</option>
						<option>Ostetricia</option>
						<option>Oncologia</option>
					</select>
				</div>  
				
			</div>
			<div class="col-md-4 mb-3">
				<div class="form-group">
					<label for="exampleFormControlSelect2">MOTIVO DIMISSIONE</label>
					<select  class="form-control" id="exampleFormControlSelect2">
						<option>Dimesso a domicilio</option>
						<option>Trasferito ad altro ospedale</option>
						<option>Dimesso contro il parere dei sanitari</option>
						<option>Deceduto</option>
					</select>
				</div>  

			</div>

		</div>



  </div>
 <button class="btn btn-primary btn-lg" type="submit">INVIA</button>
	
</form>



<?php include('script.php');?>


</body>
</html>