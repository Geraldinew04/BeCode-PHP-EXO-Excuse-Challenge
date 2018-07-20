<?php include('Partials/header.php')?>

<?php 

	if (!empty($girl) && !empty($studentLastName) && !empty($studentFirstName) && !empty($teacher) && !empty($parentFirstName) && !empty($parentLastName)) {


	}

?>

	<h1>EN RECHERCHE DE TITRE</h1>

	<form method="post" action="./Assets/PHP/main.php">

		<div class="form-group"> <!-- Nom de l'élève -->
			<div class="row">
			    <div class="col">
			      <input type="text" class="form-control" name="studentFN" placeholder="Prénom de l'élève">
			    </div>
			    <div class="col">
			      <input type="text" class="form-control" name="studentN" placeholder="Nom de famille de l'enfant">
				</div>
	 	 	</div>	
		</div>

 	 	<div class="form-check">
		  	<input class="form-check-input" type="radio" name="genre" id="genre-boy" value="boy" checked>
		  	<label class="form-check-label" for="genre-boy">
		    	Garçon
		  	</label>
		</div>
		<div class="form-check">
		  	<input class="form-check-input" type="radio" name="genre" id="exampleRadios2" value="girl">
		  	<label class="form-check-label" for="genre-girl">
		    	Fille
		  	</label>
		</div>

		<div class="form-group"> <!-- Nom du parent -->
			<div class="row">
			    <div class="col">
			      <input type="text" class="form-control" name="parentFN" placeholder="Prénom du parent">
			    </div>
			    <div class="col">
			      <input type="text" class="form-control" name="parentN" placeholder="Nom de famille du parent">
				</div>
	 	 	</div>	
		</div>

	  	<div class="form-group"> <!-- Nom du Pro -->
    		<input type="text" class="form-control" name="teacher" placeholder="Nom du Professeur">
 	 	</div>		 

	 	<label>L'année scolaire</label> <!-- Année Scolaire -->
 	 	<select class="form-control" name="grade">
	  		<option value="1ere">1ere année</option>
	  		<option value="2eme">2eme année</option>
	  		<option value="3eme">3eme année</option>
	  		<option value="4eme">4eme année</option>
	  		<option value="5eme">5eme année</option>
	  		<option value="6eme">6eme année</option>
		</select>

		<label>Raison de l'absence</label> <!-- Absence -->
	 	 <select class="form-control" name="absence">
	  		<option value="maladie">Maladie</option>
	  		<option value="activite">Activité-Extra-Scolaire</option>
	  		<option value="deces">Décès</option>
	  		<option value="autre">Autre</option>
		</select>

		 <button type="submit" class="btn btn-danger disabled" aria-disabled="true">Générer</button>


<?php include('Partials/footer.php')?>