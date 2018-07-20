<?php

	setlocale(LC_TIME, 'fr_FR.utf8','fra'); //mettre les données locales du doc en français

	@$studentLastName = filter_var($_POST['studentN'], FILTER_SANITIZE_STRING);
	@$studentFirstName = filter_var($_POST['studentFN'], FILTER_SANITIZE_STRING);

	$genre = isset($_POST['genre']) ? $_POST['genre'] : NULL;

	@$parentLastName = filter_var($_POST['parentN'], FILTER_SANITIZE_STRING);
	@$parentFirstName = filter_var($_POST['parentFN'], FILTER_SANITIZE_STRING);

	@$teacher = filter_var($_POST['teacher'], FILTER_SANITIZE_STRING);

	$grade = isset($_POST['grade']) ? $_POST['grade'] : NULL;

	$absence = isset($_POST['absence']) ? $_POST['absence'] : NULL;

	$date = strftime("%A %e %B %Y"); // Date en français
	//$date = date('N d F Y'); // Date en anglais (basic)

	$jsonFile = '../JSON/excuses.json';
	$excuse = file_get_contents($jsonFile);
	$decode_json = json_decode($excuse, true);

	function excuse($sub){
		global $decode_json;
		return $decode_json[$sub][array_rand($decode_json[$sub],1)];
	}



	$messageDebut = "Bonjour Professeur " . $teacher . " , <br> Mon enfant " . $studentFirstName . " " . $studentLastName . " , qui est en " . $grade . " année sera absent ce " . $date . " ";
	$messageRandom = "";
	$messageFin = '<br> Merci de votre compréhension. Cordialement, <br>' . $parentFirstName . " " . $parentLastName;


	// SI POSSIBLE AMELIORER EXCUSE SELON LA SAISON

	if ($genre == 'girl' && !empty($studentLastName) && !empty($studentFirstName) && !empty($teacher) && !empty($parentFirstName) && !empty($parentLastName)) {
		if ($absence == 'maladie') {
			echo $message = $messageDebut . excuse('maladie') . $messageFin;
		} elseif ($absence == 'activite') {
			echo $message = $messageDebut . excuse('activite') .  $messageFin;
		} elseif ($absence == 'deces') {
			echo $message = $messageDebut . excuse('deces') .  $messageFin;
		} elseif ($absence == 'autre') {
			echo $message = $messageDebut . excuse('autre') . $messageFin;
		} else {
			echo $message = 'error system';
		}
	} elseif ($genre == 'boy' && !empty($studentLastName) && !empty($studentFirstName) && !empty($teacher) && !empty($parentFirstName) && !empty($parentLastName)) {
		if ($absence == 'maladie') {
			echo $message = $messageDebut . excuse('maladie') .  $messageFin;
		} elseif ($absence == 'activite') {
			echo $message = $messageDebut . excuse('activite') .  $messageFin;
		} elseif ($absence == 'deces') {
			echo $message = $messageDebut . excuse('deces') .  $messageFin;
		} elseif ($absence == 'autre') {
			echo $message = $messageDebut . excuse('autre') .  $messageFin;
		} else {
			echo $message = 'error system';
		}
	} else {
		echo 'error system';
	}

echo "<br><button type='submit' class='btn btn-danger'><a href='../../index.php' alt='retour sur index'>Retour</a></button>";

/*	echo $message;*/

?>