<!DOCTYPE html>
<html>
<head>
	<title>Willy SIO</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<style type="text/css">
		
	form{
	background-color: rgba(255,255,255,0.8);
}
	h1{ 

		text-align: center;
		color: black;
		font-size: 40px;

		font-style: oblique;
		background-color: rgba(192,192,192,0.9);
		padding: 15px

	}
	body
	{
		background-color: #0000ff;
		background-image: url('images/riss.jpg') ;
		
		
		background-size: cover;
		
		




	}


</style>



</head>
<body>

	<?php include('navbar2.php');?>

	<h1>Immagini e Referti RIS</h1>


	<body>



		<form>
			<div class="row">
				<div class="col-md-4 mb-3">
					<label style="font-weight: bold" for="validationDefault01">NOME</label>
					<input type="text" class="form-control" id="validationDefault01" placeholder="Nome" minlength="2" required>
				</div>
				<div class="col-md-4 mb-3">
					<label style="font-weight: bold" for="validationDefault02">COGNOME</label>
					<input type="text" class="form-control" id="validationDefault02" placeholder="Cognome" minlength="2" required>
					<div class="invalid-feedback">
						Please provide a valid name.
					</div>      
				</div>
				<div class="col-md-4 mb-3">
					<label style="font-weight: bold" for="validationDefault01">CODICE FISCALE</label>
					<input type="text" class="form-control" id="validationDefault01" placeholder="Codice fiscale" minlength="2" required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mb-3">
					<label style="font-weight: bold" for="validationDefault01">DATA DI NASCITA</label>
					<input class="form-control" id="validationDefault01"id="date" type="date">
				</div>
				<div class="col-md-4 mb-3">

					<label style="font-weight: bold">SESSO</label><br>
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

					<div class="form-group">
						<label style="font-weight: bold" for="exampleFormControlSelect2">ESAME EFFETTUATO</label>
						<select  class="form-control" id="exampleFormControlSelect2">
							<option>Endoscopia</option>
							<option>Eco color doppler</option>
							<option>Radiografia</option>
							<option>Risonanza magnetica</option>
							<option>Tomografia computerizzata</option>
							<option>Visita cardiologica</option>
							<option>Visita neurologica</option>
							<option>Visita ginecologica</option>
							<option>Visita endocrinologica</option>
							<option>Visita oculistica</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
<div class="col-md-4 mb-3">
					<label style="font-weight: bold" for="validationDefault01">DATA ESECUZIONE ESAME</label>
					<input class="form-control" id="validationDefault01"id="date" type="date">
				</div>
				<div class="col-md-4 mb-3">

					<label style="font-weight: bold" for="image_uploads">INSERISCI IMMAGINE</label>
					<input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" multiple>
				</div>
				<div class="col-md-4 mb-3">

					<label style="font-weight: bold" for="image_uploads">INSERISCI REFERTO</label>
					<input type="file" id="text" name="text" accept=".txt, .doc , .docx , .odt , .pdf" multiple>
				</div>

			</div>
		</div>

		<button class="btn btn-primary btn-lg" type="submit">INVIA</button>
		<button type="reset" class="btn btn-danger" value="Reset">Reset</button>
	</form>

	<?php include('script.php');?>
</body>
</html>









</body>

</html>