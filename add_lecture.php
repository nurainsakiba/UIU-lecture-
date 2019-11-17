<?php include('add_lec_c.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Lecture</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <div class="register-photo">
        <div class="form-container">
            <form action="add_lecture.php" method="POST">
                <h2 class="text-center"><strong>Add New Lecture</strong></h2>
                <div class="form-group"><input class="form-control" type="text" name="dept" placeholder="Department" required=""></div>  
                <div class="form-group"><input class="form-control" type="text" name="course_code" placeholder="Course Code" required="" ></div>  
                <div class="form-group"><input class="form-control" type="text" name="course_title" placeholder="Course Title" required=""></div>				
                <div class="form-group"><input class="form-control" type="text" name="download_link" placeholder="Download Link" required=""></div>
				<div class="form-group"><input class="form-control" type="text" name="provide_by" placeholder="Provide By" required=""></div>
				<div class="form-group"><input class="form-control" type="text" name="faculty" placeholder="Faculty" required=""></div>
				
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="insert"  >Insert</button></div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>