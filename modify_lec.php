<?php include('modify_lec_c.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Lecture</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <div class="register-photo">
        <div class="form-container">
            <form action="modify_lec.php" method="POST">
			<a href="show_lec.php" class="btn btn-primary btn" role="button">Lecture List</a>
                <h2 class="text-center"><strong>Modify Lecture content</strong></h2>
                <div class="form-group"><input class="form-control" type="text" name="lec_id" placeholder="Lecture ID" required=""></div>  
                <div class="form-group"><input class="form-control" type="text" name="column" placeholder="Which Column Do You Want To Modify?" required=""></div>				
                <div class="form-group"><input class="form-control" type="text" name="value" placeholder="Udated Value" required=""></div>
				  
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="modify"  >Update</button></div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>