<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	crossorigin="anonymous">

<title>S'identifier</title>

</head>

<body>
	<div class="container-fluid">
	<br> <br> <br> <br> <br> <br> <br>
		<div  style="border: 1px solid #000;width: 50%;text-align:center; padding:20px 30px;margin-left:20%;">
		<h3>S'identifier</h3>
    		<form action="view/BackOffice/admin.php" method="post" style="text-align:center;">
    			<div class="form-group" >
    				<label for="exampleInputEmail1">Email </label> <input type="email"
    					class="form-control" id="exampleInputEmail1"
    					aria-describedby="emailHelp" placeholder="Enter email"> <small
    					id="emailHelp" class="form-text text-muted"></small>
    			</div>
    			<div class="form-group" >
    				<label for="exampleInputPassword1">Mot de passe</label> <input
    					type="password" class="form-control" id="exampleInputPassword1"
    					placeholder="Mot de passe" name="mot_de_passe">
    			</div>
    
    			<button type="submit" class="btn btn-primary">Se Connecter</button>
    		</form>
    	</div>	

		<!-- 

        <form action="view/BackOffice/admin.php" method="post">

            <p>
           Identifiant:     <input type="text" name="pseudo" /> <br>

          Mot de passe:   <input type="password" name="mot_de_passe" /> <br> <br>

            <input type="submit" value="Valider" />

            </p>

        </form>
 -->
		



	</div>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>

</body>

</html>