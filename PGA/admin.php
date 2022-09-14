<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="https://drait.edu.in/assets/images/favicon.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGA DR.AIT - ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="ss.css" rel="stylesheet">
    <script src="open.js"></script>
    <script src="typer.js"></script>
</head>


<body style="background-color: #262626">
    <div class=" container-fluid d-flex justify-content-center bg-white" style="top:0;background-color:white;">
        <div style="max-height:200px; width: 800px;;">
            <img src="https://drait.edu.in/assets/images/full_logo-wide.png" alt="BMSIT LOGO" class="container-fluid">
        </div>
    </div>
    <br><br>
    <div class="container-fluid">

        <div style="background-color: #262626" class="container-fluid ">
            <br>
            <h1 style="text-align:center;"><b id="hover-underline-animation" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;color:rgb(162, 25, 25);">P<b style="color: white;">G</b>A</b></h1>
            <h2>
                <a href="" class="typewrite" data-period="2000" data-type='[ "(Project Guide Allotment)" ]'>
                    <span class="wrap"></span>
                </a>
            </h2>
            <script>
                // typing
                var TxtType = function(el, toRotate, period) {
                    this.toRotate = toRotate;
                    this.el = el;
                    this.loopNum = 0;
                    this.period = parseInt(period, 10) || 2000;
                    this.txt = '';
                    this.tick();
                    this.isDeleting = false;
                };

                TxtType.prototype.tick = function() {
                    var i = this.loopNum % this.toRotate.length;
                    var fullTxt = this.toRotate[i];

                    if (this.isDeleting) {
                        this.txt = fullTxt.substring(0, this.txt.length - 1);
                    } else {
                        this.txt = fullTxt.substring(0, this.txt.length + 1);
                    }

                    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

                    var that = this;
                    var delta = 200 - Math.random() * 100;

                    if (this.isDeleting) {
                        delta /= 2;
                    }

                    if (!this.isDeleting && this.txt === fullTxt) {
                        delta = this.period;
                        this.isDeleting = true;
                    } else if (this.isDeleting && this.txt === '') {
                        this.isDeleting = false;
                        this.loopNum++;
                        delta = 500;
                    }

                    setTimeout(function() {
                        that.tick();
                    }, delta);
                };

                window.onload = function() {
                    var elements = document.getElementsByClassName('typewrite');
                    for (var i = 0; i < elements.length; i++) {
                        var toRotate = elements[i].getAttribute('data-type');
                        var period = elements[i].getAttribute('data-period');
                        if (toRotate) {
                            new TxtType(elements[i], JSON.parse(toRotate), period);
                        }
                    }
                    // INJECT CSS
                    var css = document.createElement("style");
                    css.type = "text/css";
                    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
                    document.body.appendChild(css);
                };
            </script>
            <script src="open.js"></script>

        </div>
        <br>
        
        
        <br>
        <div style="background-color:white;">
            <br>
            <center>
                <br>
                <p class="h3 text-dark" id="hover-underline-animation">Click on Allote button to Suffle students and allote there to random lectures</p>
                <br>
                <br>
                <form action="randData.php" method="post">
                    <button class="btn btn-danger" type="submit" name="submit">Allote</button>
                </form>
                <br>
                <div class="dropdown">
                    <form action="dataFetch.php" method="post">
                        <a class="btn btn-danger dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Show Result
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="lecture1.php">Lecture1</a></li>
                            <li><a class="dropdown-item" href="lecture2.php">Lecture2</a></li>
                            <li><a class="dropdown-item" href="lecture3.php">Lecture3</a></li>
                            <li><a class="dropdown-item" href="lecture4.php">Lecture4</a></li>
                            <li><a class="dropdown-item" href="lecture5.php">Lecture5</a></li>
                            <li><a class="dropdown-item" href="lecture6.php">Lecture6</a></li>
                        </ul>
                    </form>
                </div>
                <br>
                <div>
                    <form action="cleardata.php" method='post'>
                        <button class="btn btn-outline-danger" type="submit" name='submit'>
                            Clear Results
                        </button>
                    </form>
                </div>



            </center>
            <br>
        </div>
        <br>
        <div style="position:left;background-color: #262626">
            <button class="tablink" onclick="openPage('Student', this, 'white')" id="defaultOpen"><b id="hover-underline-animation" style="color: black;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">STUDENT</b></button>
            <button class="tablink" onclick="openPage('Faculty', this, 'white')"><b id="hover-underline-animation" style="color: black;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">FACULTY</b></button>
            <button class="tablink" onclick="openPage('HOD', this, 'white')"><b id="hover-underline-animation" style="color: black;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">HOD</b></button>
            <button class="tablink" onclick="openPage('upload', this,'white')">
                <b id="hover-underline-animation" style="color: black; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                    Add Account<span class="badge rounded-pill text-bg-danger"><sup class="text-danger bg-light">&nbsp;&nbsp;NEW&nbsp;&nbsp;</sup></span>
                </b>
            </button>
            <script src="open.js"></script>
            <!-- UPLOAD -->
            <div id="upload" class="tabcontent" style="background-color: rgb(218, 213, 213);color: black;">
                <p class="h2 justify-content-center" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;text-align: center;color:black;">
                    <b id="hover-underline-animation">Add Account</b>
                </p>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <form action="adduser.php" method="post">

                        <label class="form-label text-dark">Email:</label>
                        <input type="email" class="form-control" name="email" required>
                        <label class="form-label text-dark">Password:</label>
                        <input type="password" class="form-control" name="password" required>
                        <br>
                        <select name="d" class="text-dark">
                            <option value="faculty_signin" class="text-dark">Lecture</option>
                            <option value="hod_signin" class="text-dark">HOD</option>
                            <option value="admin_signin" class="text-dark">Admin</option>
                        </select>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#adminsignin" name=submit> Add </button>
                    </form>
                </div>
            </div>
            <!-- Modal -->
            <!-- admin signin modal -->

            <!-- student -->
            <div id="Student" class="tabcontent">
                <p class="h2 justify-content-center" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;text-align: center;color:black;">
                    <b id="hover-underline-animation">Student</b>
                </p>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">


                    <button class="btn btn-outline-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#studentsdetials" aria-controls="studentsdetials">
                        Students Details
                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="studentsdetials" aria-labelledby="offcanvasBottomLabel" style="background-color:rgb(216, 213, 213);color:black;border:5px solid black;">
                        <div class="offcanvas-header justify-content-center" style="background-color:black;">
                            <h5 class="offcanvas-title justify-content-center" id="offcanvasBottomLabel" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><b id="hover-underline-animation">Student Details</b></h5>
                            <button type="button" style="background-color:white;" class="btn-close btn-light position-absolute end-0 translate-middle" data-bs-dismiss="offcanvas" aria-label="Close" style="align-items: right;"></button>
                        </div>

                        <div class="offcanvas-body">
                            <br>
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Semester
                                </button>
                                <ul class="dropdown-menu bg-black-50 text-light">
                                    <li type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#fstsem"><a class="dropdown-item">1<sup class="text-dark">st</sup></a></li>
                                    <li type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#sndsem"><a class="dropdown-item">2<sup class="text-dark">nd</sup></a></li>
                                    <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#trdsem">
                                        <li><a class="dropdown-item">3<sup class="text-dark">rd</sup></a></li>
                                    </button>
                                    <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#fthsem">
                                        <li><a class="dropdown-item">4<sup class="text-dark">th</sup></a></li>
                                    </button>
                                </ul>
                            </div>
                        </div>
                        <!-- 1st sem modal -->
                        <div class="modal fade" id="fstsem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-image: url(media/student.jpg);background-repeat: no-repeat;background-size:500px;background-position: center;">

                                        <h3 class="modal-title" id="staticBackdropLabel"><b style="color:darkred;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                                First Semester</b></h3>

                                        <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>

                                    </div>
                                    <div class="modal-body justify-content-center" style="color: black;text-align: center;">

                                        <u class="h3"><b id="hover-underline-animation">Student's List</b></u>
                                        <hr>
                                        <table class="table table-dark" style="color:black;border:2px solid black;">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Semester</th>
                                                    <th scope="col">Contact number</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            include_once('db_config.php');
                                            $query = "SELECT * FROM student_signup WHERE semester='1st sem'";
                                            $check = mysqli_query($connectdb, $query);
                                            while ($row = mysqli_fetch_array($check)) {
                                                $name = $row['name'];
                                                $email = $row['email'];
                                                $semester = $row['semester'];
                                                $contactno = $row['contactno'];
                                                echo "<tr>";
                                                echo "<td scope='row'>$name</td>";
                                                echo "<td>$email</td>";
                                                echo "<td>$semester</td>";
                                                echo "<td>$contactno</td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </table>
                                        <hr>
                                    </div>
                                    <div class="modal-footer bg-dark">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button type="button" class="btn btn-danger btn-md" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd sem modal -->
                        <div class="modal fade" id="sndsem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-image: url(media/student.jpg);background-repeat: no-repeat;background-size:500px;background-position: center;">

                                        <h3 class="modal-title" id="staticBackdropLabel"><b style="color:darkred;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                                First Semester</b></h3>

                                        <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>

                                    </div>
                                    <div class="modal-body justify-content-center" style="color: black;text-align: center;">

                                        <u class="h3"><b id="hover-underline-animation">Student's List</b></u>
                                        <hr>
                                        <table class="table table-dark" style="color:black;border:2px solid black;">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Semester</th>
                                                    <th scope="col">Contact number</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            include_once('db_config.php');
                                            $query = "SELECT * FROM student_signup WHERE semester='2nd sem'";
                                            $check = mysqli_query($connectdb, $query);
                                            while ($row = mysqli_fetch_array($check)) {
                                                $name = $row['name'];
                                                $email = $row['email'];
                                                $semester = $row['semester'];
                                                $contactno = $row['contactno'];
                                                echo "<tr>";
                                                echo "<td scope='row'>$name</td>";
                                                echo "<td>$email</td>";
                                                echo "<td>$semester</td>";
                                                echo "<td>$contactno</td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </table>
                                        <hr>
                                    </div>
                                    <div class="modal-footer bg-dark">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button type="button" class="btn btn-danger btn-md" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 3rd sem modal -->
                        <div class="modal fade" id="trdsem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-image: url(media/student.jpg);background-repeat: no-repeat;background-size:500px;background-position: center;">

                                        <h3 class="modal-title" id="staticBackdropLabel"><b style="color:darkred;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                                First Semester</b></h3>

                                        <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>

                                    </div>
                                    <div class="modal-body justify-content-center" style="color: black;text-align: center;">

                                        <u class="h3"><b id="hover-underline-animation">Student's List</b></u>
                                        <hr>
                                        <table class="table table-dark" style="color:black;border:2px solid black;">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Semester</th>
                                                    <th scope="col">Contact number</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            include_once('db_config.php');
                                            $query = "SELECT * FROM student_signup WHERE semester='3rd sem'";
                                            $check = mysqli_query($connectdb, $query);
                                            while ($row = mysqli_fetch_array($check)) {
                                                $name = $row['name'];
                                                $email = $row['email'];
                                                $semester = $row['semester'];
                                                $contactno = $row['contactno'];
                                                echo "<tr>";
                                                echo "<td scope='row'>$name</td>";
                                                echo "<td>$email</td>";
                                                echo "<td>$semester</td>";
                                                echo "<td>$contactno</td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </table>
                                        <hr>
                                    </div>
                                    <div class="modal-footer bg-dark">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button type="button" class="btn btn-danger btn-md" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 4th sem modal -->
                        <div class="modal fade" id="fthsem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-image: url(media/student.jpg);background-repeat: no-repeat;background-size:500px;background-position: center;">

                                        <h3 class="modal-title" id="staticBackdropLabel"><b style="color:darkred;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                                First Semester</b></h3>

                                        <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>

                                    </div>
                                    <div class="modal-body justify-content-center" style="color: black;text-align: center;">

                                        <u class="h3"><b id="hover-underline-animation">Student's List</b></u>
                                        <hr>
                                        <table class="table table-dark" style="color:black;border:2px solid black;">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Semester</th>
                                                    <th scope="col">Contact number</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            include_once('db_config.php');
                                            $query = "SELECT * FROM student_signup WHERE semester='4th sem'";
                                            $check = mysqli_query($connectdb, $query);
                                            while ($row = mysqli_fetch_array($check)) {
                                                $name = $row['name'];
                                                $email = $row['email'];
                                                $semester = $row['semester'];
                                                $contactno = $row['contactno'];
                                                echo "<tr>";
                                                echo "<td scope='row'>$name</td>";
                                                echo "<td>$email</td>";
                                                echo "<td>$semester</td>";
                                                echo "<td>$contactno</td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </table>
                                        <hr>
                                    </div>
                                    <div class="modal-footer bg-dark">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button type="button" class="btn btn-danger btn-md" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Faculty -->
            <div id="Faculty" class="tabcontent">
                <p class="h2 justify-content-center" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;text-align: center;color:black;">
                    <b id="hover-underline-animation">Faculty</b>
                </p>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">

                    <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#faculty" type="button" data-bs-toggle="offcanvas" data-bs-target="#studentsdetials" aria-controls="studentsdetials">
                        Faculty Detail
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="faculty" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header" style="background-image: url(media/90.jpg);background-repeat: no-repeat;background-size:500px;background-position: center;">

                                    <h3 class="modal-title" id="staticBackdropLabel"><b style="color:darkred;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><u id="hover-underline-animation" style="color:darkred;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                                Faculty Details</u></b></h3>

                                    <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>

                                </div>
                                <div class="modal-body justify-content-center" style="color: black;text-align: center;">

                                    <u class="h3"><b id="hover-underline-animation">Faculty List</b></u>
                                    <hr>
                                    <table class="table table-dark" style="color:black;border:2px solid black;">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Contact number</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        include_once('db_config.php');
                                        $query = "SELECT name,email,contactno FROM faculty_details ";
                                        $check = mysqli_query($connectdb, $query);
                                        while ($row = mysqli_fetch_array($check)) {
                                            $name = $row['name'];
                                            $email = $row['email'];
                                            $contactno = $row['contactno'];
                                            echo "<tr>";
                                            echo "<td scope='row'>$name</td>";
                                            echo "<td>$email</td>";
                                            echo "<td>$contactno</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
                                    <hr>
                                </div>
                                <div class="modal-footer bg-dark">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button type="button" class="btn btn-danger btn-md" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- admin signin modal -->

                </div>
            </div>

            <!-- HOD -->
            <div id="HOD" class="tabcontent">
                <p class="h2 justify-content-center" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;text-align: center;color:black;">
                    <b id="hover-underline-animation">HOD</b>
                </p>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hod">
                        Detials
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="hod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header" style="background-image: url(media/hod1.jpg);background-repeat: no-repeat;background-size:500px;background-position: center;">

                                    <h3 class="modal-title" id="staticBackdropLabel"><b style="color:darkred;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><u id="hover-underline-animation" style="color:darkred;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                                Hod Details</u></b></h3>

                                    <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>

                                </div>
                                <div class="modal-body justify-content-center" style="color: black;text-align: center;">

                                    <u class="h3"><b id="hover-underline-animation">HOD List</b></u>
                                    <hr>
                                    <table class="table table-dark" style="color:black;border:2px solid black;">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        include 'db_config.php';
                                        $query = "SELECT id,name,email FROM `hod_signin`";
                                        $check = mysqli_query($connectdb, $query);
                                        while ($row = mysqli_fetch_array($check)) {
                                            $name = $row['name'];
                                            $email = $row['email'];
                                            echo "<tr>";
                                            echo "<td scope='row'>$name</td>";
                                            echo "<td>$email</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
                                    <hr>
                                </div>
                                <div class="modal-footer bg-dark">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button type="button" class="btn btn-danger btn-md" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- admin signin modal -->

                </div>
            </div>
            <!-- guide allote button -->



        </div>
        <br>
    </div>
    <script src="open.js"></script>



</body>

</html>