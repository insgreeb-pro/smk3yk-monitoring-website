<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <!-- external css -->
        <title>Room Monitoring</title>
        
        <!-- font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet"> 

        <!-- include variabel database -->
        <?php include 'var_db.php';?>

    </head>

    <body class="mx-auto" style="background-image: url('Banner SMK.png');background-size: 100% 1450px;">
        
        <!-- show date -->
        <div class="card text-dark mx-auto mb-3 text-center" style="max-width: 40rem;margin-top: 300px">
            <div class="card-body">
                <h2 class="text-center" style="font-size:50px;"><?php echo $current_date;?></h2>
            </div>
        </div>

        <div class="row">

            <!-- outdoor -->
            <div class="col-lg-6">

                <div class="row mt-4 mx-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="card text-dark mb-3 text-center whole-card" style="max-width: 25rem;font-size: 35px;">
                            <div class="card-header shadow">Suhu<br>Luar Ruangan</div>
                            <div class="card-body">
                                <span class="card-text"><?php echo $rowout["tsht"];?></span>
                                <span class="value"> &#176;C</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                            <div class="card-header shadow">Kelembaban<br>Ruang</div>
                            <div class="card-body">
                                <span class="card-text"><?php echo $rowout["rhsht"];?></span>
                                <span class="value"> %RH</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                            <div class="card-header shadow">Arah<br>Angin</div>
                            <div class="card-body">
                                <span class="card-text"><?php echo $rowout["wd"];?></span>
                                <span class="value"> deg</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                            <div class="card-header shadow">Kecepatan<br>Angin</div>
                            <div class="card-body">
                                <span class="card-text"><?php echo $rowout["wsout"];?></span>
                                <span class="value"> m/s</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                            <div class="card-header shadow">Kuat Sinar<br>Matahari</div>
                            <div class="card-body">
                                <span class="card-text"><?php echo $rowout["sp"];?></span>
                                <span class="value"> W/m2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Indoor -->
            <div class="col-lg-6">

                <ul id='tabs'>
                    <li class='on d-none d-block'>

                        <div class="row mt-4 mx-5">
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Ruang<br>Kelas</div>
                                    <div class="card-body">
                                        <span class="card-text">R40</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Suhu<br>Ruang</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $_t40;?></span>
                                        <span class="value"> &#176;C</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Kelembaban<br>Ruang</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $_rh40;?></span>
                                        <span class="value"> %RH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-5">
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Konsentrasi<br>CO2</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $rowr40["co2"];?></span>
                                        <span class="value"> ppm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Kecepatan<br>Angin</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $rowr40["ws"];?></span>
                                        <span class="value"> m/s</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Intensitas<br>Cahaya</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $_ws40;?></span>
                                        <span class="value"> lux</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-none">

                        <div class="row mt-4 mx-5">
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Ruang<br>Kelas</div>
                                    <div class="card-body">
                                        <span class="card-text">R33</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Suhu<br>Ruang</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $_t33;?></span>
                                        <span class="value"> &#176;C</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Kelembaban<br>Ruang</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $_rh33;?></span>
                                        <span class="value"> %RH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-5">
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Konsentrasi<br>CO2</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $rowr33["co2"];?></span>
                                        <span class="value"> ppm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Kecepatan<br>Angin</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $_ws33;?></span>
                                        <span class="value"> m/s</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Intensitas<br>Cahaya</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $rowr33["li"];?></span>
                                        <span class="value"> lux</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-none">

                        <div class="row mt-4 mx-5">
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Ruang<br>Kelas</div>
                                    <div class="card-body">
                                        <span class="card-text">R15</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Suhu<br>Ruang</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $_t15;?></span>
                                        <span class="value"> &#176;C</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Kelembaban<br>Ruang</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $_rh15;?></span>
                                        <span class="value"> %RH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-5">
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Konsentrasi<br>CO2</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $rowr15["co2"];?></span>
                                        <span class="value"> ppm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Kecepatan<br>Angin</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $_ws15;?></span>
                                        <span class="value"> m/s</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-dark mb-3 text-center whole-card" style="max-width: 18rem;">
                                    <div class="card-header shadow">Intensitas<br>Cahaya</div>
                                    <div class="card-body">
                                        <span class="card-text"><?php echo $rowr15["li"];?></span>
                                        <span class="value"> lux</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

        <!-- set style for all card -->
        <script>
            myElements = document.querySelectorAll(".whole-card");

                for (let i = 0; i < myElements.length; i++) {
                    myElements[i].style.fontSize = "35px";
                    myElements[i].style.maxWidth = "30rem";
                }
        </script>
        
        <script>
        $(function() {

            //cache a reference to the tabs
            var tabs = $('#tabs li');

            //on click to tab, turn it on, and turn previously-on tab off
            tabs.click(function() { $(this).addClass('on d-block').siblings('.on').removeClass('on d-block'); });

            //auto-rotate every 5 seconds
            setInterval(function() {

                    //get currently-on tab
                var onTab = tabs.filter('.on');

                    //click either next tab, if exists, else first one
                var nextTab = onTab.index() < tabs.length-1 ? onTab.next() : tabs.first();
                nextTab.click();
            }, 5000);
            });
        </script>
        
        <script>
            $(".card-header").css("background-color", "#ecfeed");
            $(".card-body").css("background-color", "black").css("color", "green").css("font-size", "55px");
        </script>
    </body>
</html>
