<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="https://drait.edu.in/assets/images/favicon.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGA DR.AIT - LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="ss.css" rel="stylesheet">
</head>



<body style="background-color: #262626">
    <div class=" container-fluid d-flex justify-content-center bg-white">
        <div style="max-height:200px; width: 800px;">
            <img src="https://drait.edu.in/assets/images/full_logo-wide.png" alt="BMSIT LOGO" class="container-fluid">
        </div>
    </div>
    <br>
    <br>
    <h1 style="text-align:center;"><b id="hover-underline-animation" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;color:rgb(162, 25, 25)">P<b style="color: white;">G</b>A</b></h1>
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
    <br>
    <div class="container-fluid" style="background-color: #b3b3b3;">
        <br>

        <center>
            <u class="h3"><b id="hover-underline-animation">
                    Lecture 2</b></u><br><br>
            <div class="justify-content-center" style="color: black;text-align: center;">
                <hr>
                <table class="table table-dark" style="color:black;border:2px solid black;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Student's Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Semester</th>
                        </tr>
                    </thead>
                    <?php
                    include 'db_config.php';

                    $query = "SELECT `student name`, `email`, `semester` from lecture2";
                    $check = mysqli_query($connectdb, $query);
                    while ($row = mysqli_fetch_array($check)) {
                        $name = $row['student name'];
                        $email = $row['email'];
                        $semester = $row['semester'];
                        echo "<tr>";
                        echo "<td scope='row'>$name</td>";
                        echo "<td>$email</td>";
                        echo "<td>$semester</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
                <hr>
            </div>
        </center>
    </div>

</body>

</html>