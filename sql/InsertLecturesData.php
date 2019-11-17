<html>
<head>
</head>

<body>

<?php

// Create connection
$con = mysqli_connect('localhost', 'root', '');

// Check connection
if(!$con){
	
	die("Can not connect: " . mysqli_error($con));
}

mysqli_select_db($con, "LECTURES_FOR_UIU_STUDENT");

// sql to insert data


$sql = "insert into lectures(Lecture_ID, Department, Course_code, Course_title, Download_Link, Provide_by, Faculty) 
values('', 'CSE', 'CSI 122', 'Structured Programming Language Laboratory', 'https://drive.google.com/uc?download&id=1o8ikZiCZ7iuFuDz6dAcEwYw4T9ViceIP', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 121', 'Structured Programming Language', 'https://drive.google.com/uc?download&id=1Y3QSEcb9v7Fcymtrv3600JNUAk7_Zirs', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'MATH 003', 'Elementary Calculus', 'https://drive.google.com/uc?download&id=1KB8eAFxF8kzFvjzT7n6pAsxAuV0-N_YL', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'ENG 101', 'English I', 'https://drive.google.com/uc?download&id=1SGKZixT7T8EZ-xtddee79gev4o5S1ua1', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 219', 'Discrete Mathematics', 'https://drive.google.com/uc?download&id=1wwg0mdHrYrH9NaBlAEDQx0tIqCjIebbN', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 124', 'Advanced Programming Laboratory', 'https://drive.google.com/uc?download&id=1FwXlYBPdo8j1711pEC8gNk2jXunpIT7U', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'ENG 103', 'English II', 'https://drive.google.com/uc?download&id=1SEVo-6qcxBFfnG6373jNjtkZNP5sr32B', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 342', 'Artificial Intelligence Laboratory', 'https://drive.google.com/uc?download&id=1ckSya-SxK_7q3FxalVD4U3whS_gxXpsW', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 341', 'Artificial Intelligence', 'https://drive.google.com/uc?download&id=1a_f0OYOxDr3zvaf15W_UYBMefvRtxX-5', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSE 465', 'Web Programming', 'https://drive.google.com/uc?download&id=13BybzNQrJyJ7lbhdmTGfd7iE6-kLsbHQ', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 228', 'Algorithms Laboratory', 'https://drive.google.com/uc?download&id=1pueMneBrSQxLg5pwZnIswP09oOQJ9YO_', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 227', 'Algorithms', 'https://drive.google.com/uc?download&id=1_EuHIyWLrGDYpY3DRMy8sypaqdWWdyBQ', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSE 487', 'Cloud Computing', 'https://drive.google.com/uc?download&id=1APSHx5YZubDWWC_6A3V5hrX02UUoe6QO', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 412', 'Compiler Laboratory', 'https://drive.google.com/uc?download&id=12eqADrVJ-1LjF8lh6Armny7QB5q3RPRy', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 411', 'Compiler', 'https://drive.google.com/uc?download&id=1YBkUbSTClqe51s4vc1eyqo8liufqEi33', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 422', 'Computer Graphics Laboratory', 'https://drive.google.com/uc?download&id=19S2qBKIG8I3Zv8jpQtFMrnMYCXEOiYve', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 421', 'Computer Graphics', 'https://drive.google.com/uc?download&id=1nwXHCvoL2sdmNhjQhCUEbWNI_PLYkqyb', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSE 313', 'Computer Architecture', 'https://drive.google.com/uc?download&id=1f5vhHPFtbBbXb4rZmn-eueMD9-qrrHkT', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSE 315', 'Data Communication', 'https://drive.google.com/uc?download&id=1ueWBzJr2MdBJUL2BFhd6Jow0kmtWAWX2', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 218', 'Data Structure Laboratory', 'https://drive.google.com/uc?download&id=1OmBfWhp-lctm2uBhH4XS0l1m2zTNmdSE', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 217', 'Data Structure', 'https://drive.google.com/uc?download&id=1dW7bvZEQjF5DmImUx6vh8372klPHf5VN', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 222', 'Database Management Systems Laboratory', 'https://drive.google.com/uc?download&id=1Loymva5BQ6duAZG6dHw9h4ztkz27hhmj', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 221', 'Database Management Systems', 'https://drive.google.com/uc?download&id=1WUPD_jhZhi6gSPIY3AN4DiOZ6JnLFtnS', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'ECO 213', 'Economics', 'https://drive.google.com/uc?download&id=1-zGUY2QvZjsgUxQsoUyCh67_zfAjVGvw', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSE 113', 'Electrical Circuits', 'https://drive.google.com/uc?download&id=1DTOHMXttVxwcfg-c6BCMGf1vXA4JTZjz', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 310', 'Object-Oriented Programming Laboratory', 'https://drive.google.com/uc?download&id=1HkMjwIdxkyV9LhZH4XoJDNx2rGcKcLbh', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 309', 'Object-Oriented Programming', 'https://drive.google.com/uc?download&id=1LXr-g00HSGyElBVYtmbWHGNXXSwyRLex', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSE 489', 'Machine Learning', 'https://drive.google.com/uc?download&id=19-6RlKXwbFyliO7l1bNgK6gZib_AELWg', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'MATH 151', 'Differential and Integral Calculus', 'https://drive.google.com/uc?download&id=1DgyaSX3p3Y14bwuH9XS0L8_Iu9OnPiWE', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'MATH 183', 'Linear Algebra, Ordinary & Partial Differential Equations', 'https://drive.google.com/uc?download&id=1I4n5JTfoRA775h8jnwlq_s8nvaDcuX43', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'MATH 187', 'Fourier & Laplace Transformations & Complex Variable', 'https://drive.google.com/uc?download&id=1Y-kyF8lD08ipXnetg44a8U-vkpE1m-oQ', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'MATH 201', 'Coordinate Geometry and Vector Analysis', 'https://drive.google.com/uc?download&id=1Cjpkb3UP-A1826DCpNrm2aoa8umJZzAB', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSE 426', 'Microprocessor, Microcontroller and Interfacing Laboratory', 'https://drive.google.com/uc?download&id=1XGKRl40RQ0zik-9U7qS-1jo8OqlyDYR2', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSE 425', 'Microprocessor, Microcontroller and Interfacing', 'https://drive.google.com/uc?download&id=1gI6IcbewnCj_B5EB8F-N-9vx58AXA4NT', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSE 324', 'Computer Networks Laboratory', 'https://drive.google.com/uc?download&id=1Q5xq9nvyqUFvJfmE_hF22YVSqOm3BTTR', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSE 323', 'Computer Networks', 'https://drive.google.com/uc?download&id=1z2SHoDy_LZWEKNbwauxAydjqlbDOMqbq', 'Nasir Uddin Ahmed', ''),
('', 'CSE', 'CSI 310', 'Operating System Concepts Laboratory', 'https://drive.google.com/uc?download&id=17-eXdL_mMIdaz7x20W6pYi4g6OQ-7v6x', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 309', 'Operating System Concepts', 'https://drive.google.com/uc?download&id=1LLpzBgVDXqnTKanbox_s2AzLVQN-gufP', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 416', 'Pattern Recognition Laboratory', 'https://drive.google.com/uc?download&id=1O1O4aQViOAkoRVhTl-Ab5g3s-0Z9G9ts', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 415', 'Pattern Recognition', 'https://drive.google.com/uc?download&id=1UroBO0ph5HzTpUUVh7EGqXUUguR-HP1i', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'PHY 106', 'Physics Laboratory', 'https://drive.google.com/uc?download&id=1lAzz8Su7ckOEsxsCqlSLUGyoylyxzG6r', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'PHY 105', 'Physics', 'https://drive.google.com/uc?download&id=1M7wge0oPMlRuPkOGnLpWnzr84narHDgy', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSE 469', 'Project Management', 'https://drive.google.com/uc?download&id=1naw_LxH-6J4iSynqkKaCMzLwtWWtzgeT', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 312', 'System Analysis and Design Laboratory', 'https://drive.google.com/uc?download&id=1Y6cY8xM7m3_fjb1lT7JJzaigNiztju61', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 311', 'System Analysis and Design', 'https://drive.google.com/uc?download&id=1fIMi1kM6-4MPOWm-RbAYT9XJ05chMLCd', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 322', 'Software Engineering Laboratory', 'https://drive.google.com/uc?download&id=1gtdQgGubBrYl8BrYXFjXkrzDcpwKK2S_', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 321', 'Software Engineering', 'https://drive.google.com/uc?download&id=1S_GnpuhIPfZnadWYozpztzYOQM7XU5jn', 'Nasir Uddin Ahmed', '-'),
('', 'CSE', 'CSI 341', 'Artificial Intelligence', 'https://drive.google.com/uc?download&id=1xdaU_BzndfjLs1kHnlMDqZ16Vl1qaS9y', 'Muhtasim Fuad', '-'),
('', 'CSE', 'CSI 342', 'Artificial Intelligence Laboratory', 'https://drive.google.com/uc?download&id=13E8K8dJXU9d_TguvRn9lkqfindFv4aMl', 'Muhtasim Fuad', '-'),
('', 'CSE', 'CSI 222', 'Database Management Systems Laboratory', 'https://drive.google.com/uc?download&id=1-KM_pYU_q8TpF4GSgTesLvV0hzfj50Wq', 'Muhtasim Fuad', 'Mohammad Imam Hossain'),
('', 'CSE', 'CSI 221', 'Database Management Systems', 'https://drive.google.com/uc?download&id=1KYnjvHF9kHXZrsV0g6RoDWlHVpmeWSnZ', 'Muhtasim Fuad', 'Zakaria Sir'),
('', 'CSE', 'CSI 309', 'Operating System Concepts', 'https://drive.google.com/uc?download&id=11JBRZ9zrJ0At3p5tOK7nuWLeEgL_ftly', 'Muhtasim Fuad', '-'),
('', 'CSE', 'CSI 311', 'System Analysis and Design', 'https://drive.google.com/uc?download&id=1T7ikIATxDAQ7hSbx35vZ-ejch-qHKYEb', 'Muhtasim Fuad', '-'),
('', 'CSE', 'CSI 341', 'Artificial Intelligence', 'https://drive.google.com/uc?download&id=12AX4kPMKqQ12HPDwQXExmul2pOXiIGAR', 'Md. Shakil Mahmud', 'Swakkhar Shatabda'),
('', 'CSE', 'CSE 323', 'Computer Networks', 'https://drive.google.com/uc?download&id=1s4HO4nTp59ffSkbBsyvBAT4SOJs2bquZ', 'Md. Shakil Mahmud', 'Mr. Mohammad Mamun Elahi'),
('', 'CSE', 'CSI 411', 'Compiler', 'https://drive.google.com/uc?download&id=1jcvHGJmkahpxLKhEwiEAzMjwRJ-BoRjf', 'Md. Shakil Mahmud', '-'),
('', 'CSE', 'MATH 187', 'Fourier & Laplace Transformations & Complex Variable', 'https://drive.google.com/uc?download&id=1ANwSbcYBajOgpqER-EkqUYfABYmZWbZI', 'Md. Shakil Mahmud', '-'),
('', 'CSE', 'CSI 421', 'Computer Graphics', 'https://drive.google.com/uc?download&id=1ynaK3wk0jTg6GfRSzCgynxvJXNbZutK8', 'Md. Shakil Mahmud', '-'),
('', 'CSE', 'CSI 309', 'Operating System Concepts', 'https://drive.google.com/uc?download&id=15A6-4dyWGrmdDKJBnI1-8MuWWFQms1D0', 'Md. Shakil Mahmud', '-'),
('', 'CSE', 'CSE 469', 'Project Management', 'https://drive.google.com/uc?download&id=18RIY3PuOgXo4uX6eDfzvPriY5RZ3Es2S', 'Md. Shakil Mahmud', 'Prof. Dr. Hasan Sarwar'),
('', 'CSE', 'CSI 311', 'System Analysis and Design', 'https://drive.google.com/uc?download&id=1V6dM7AFnFFL2_x_JkiTiad5ACOVbz6lH', 'Md. Shakil Mahmud', 'Sheikh Adilina'),
('', 'CSE', 'CSI 233', 'Theory of Computing', 'https://drive.google.com/uc?download&id=1h_C781ilOL0wSUEpVNQvhRcwbqNOVcdP', 'Md. Shakil Mahmud', '-'),
('', 'CSE', 'CSE 123', 'Electronics', 'https://drive.google.com/uc?download&id=1ERu0rpZLXQG7a6LaiXq6mRzWuWGWAXoo', 'Md.Mahatab Uddin Shuvo', 'MD. Sakibur Rahman Sajal'),
('', 'CSE', 'CSE 469', 'Project Management', 'https://drive.google.com/uc?download&id=1-fjP_8NrkbsSZMFH0QRKIjsk2goYkLqf', 'Md.Mahatab Uddin Shuvo', 'Prof. Dr. Hasan Sarwar'),
('', 'CSE', 'CSI 121', 'Structured Programming Language', 'https://drive.google.com/uc?download&id=1rsK_FvGPsm_DyLL7bccPmTo3EN3BpJc7', 'Md.Mahatab Uddin Shuvo', '-'),
('', 'CSE', 'CSI 341', 'Artificial Intelligence', 'https://drive.google.com/uc?download&id=1rBY8vd8tdb9Y7MHvIPATFBmVVEhTIxpW', 'Shirajum Monira', 'Swakkhar Shatabda'),
('', 'CSE', 'CSE 323', 'Computer Networks', 'https://drive.google.com/uc?download&id=1TWb60b6Eja5ShtfFGlRHUaM1TrjpdqkL', 'Shirajum Monira', 'Sumit Tarafder'),
('', 'CSE', 'CSE 315', 'Data Communication', 'https://drive.google.com/uc?download&id=10_meS5SAS2slKF0o2Qyeut0fSLWl4sjy', 'Shirajum Monira', 'Dr. A.K.M. Muzahidul Islam'),
('', 'CSE', 'CSI 221', 'Database Management Systems', 'https://drive.google.com/uc?download&id=1d0c-Eioq0H-OuQPRkcJtJS0wb1f4bCUp', 'Shirajum Monira', 'Zakaria Sir'),
('', 'CSE', 'CSE 429', 'Digital System Design', 'https://drive.google.com/uc?download&id=1-UQb5Za4QgR8czyw7D6SXwSgcP9trUw7', 'Shirajum Monira', 'Md. Adnan Arefeen'),
('', 'CSE', 'MATH 187', 'Fourier & Laplace Transformations & Complex Variable', 'https://drive.google.com/uc?download&id=1LnOgWds6xoZI0E97NJGy6qqrGhRhjs5o', 'Shirajum Monira', '-'),
('', 'CSE', 'IPE 401', 'Industrial Management', 'https://drive.google.com/uc?download&id=188YQMjXyUFeoe2CPhBcawgoLzWr1Gd1o', 'Shirajum Monira', 'Gourab Kumar Roy'),
('', 'CSE', 'CSE 477', 'Network Security', 'https://drive.google.com/uc?download&id=1dDh_j9BWV-Ualn7kPGwVzl8ovl0cWAKc', 'Shirajum Monira', 'Md. Ishtiaq Ashiq Khan'),
('', 'CSE', 'CSI 415', 'Pattern Recognition', 'https://drive.google.com/uc?download&id=1cdrOoU5dQV5wCEJmzOail8--FT3rEXRt', 'Shirajum Monira', 'Dr. Dewan Md. Farid'),
('', 'CSE', 'CSE 469', 'Project Management', 'https://drive.google.com/uc?download&id=1CfPwn74R3XHInTazCWW2rl20sC9JKHZq', 'Shirajum Monira', 'Prof. Dr. Hasan Sarwar'),
('', 'CSE', 'CSI 233', 'Theory of Computing', 'https://drive.google.com/uc?download&id=1WnLuRVf4_QxRQdmprofFt7FLDYMZd7_1', 'Shirajum Monira', 'Novia Mam'),
('', 'CSE', 'CSE 236', 'Assembly Programming Laboratory', '', 'Shirajum Monira', '-'),
('', 'CSE', 'ACT 111', 'Financial and Managerial Accounting', '', 'Shirajum Monira', 'Lamia Alam'),
('', 'CSE', 'CSI 222', 'Database Management Systems Laboratory', '', 'Shirajum Monira', 'Zakaria Sir'),
('', 'CSE', 'CSE 430', 'Digital System Design Laboratory', '', 'Shirajum Monira', 'Md. Adnan Arefeen'),
('', 'CSE', 'CSI 229', 'Numerical Methods', '', 'Shirajum Monira', 'Khairul Mottakin'),
('', 'CSE', 'CSI 309', 'Operating System Concepts', '', 'Shirajum Monira', '-')";



if (mysqli_query($con, $sql)) {
    echo "Data inserted successfully";
	echo '</br>';
} else echo "Error inserting data: " . mysqli_error($con);


echo '</br>';

$sql2 = "insert into admin(Admin_name, password_ ) 
values('aaa', '789')";


if (mysqli_query($con, $sql2)) {
    echo "Admins information inserted successfully";
	echo '</br>';
} else echo "Error inserting data: " . mysqli_error($con);


echo '</br>';


?>


</body>
</html>