<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4f23ae4e7d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <!--SideMenu-->
    <section id="menu">
        <div class="logo">
            <img src="assets/imgs/274785.svg"/>
            <h2>CEB APP</h2>
        </div>

        <div class="items">
            <li><i class="fas fa-tachometer "></i><a href="#">Dashboard</a></li>
            <li><i class="fas fa-history "></i><a href="#">E-Meter History</a></li>
            <li><i class="fas fa-chart-line"></i><a href="#">Forecast</a></li>
            <li><i class="fas fa-map "></i><a href="#">Live Map</a></li>
            <li><i class="fas fa-user-circle"></i><a href="#">Users</a></li>
            <li><i class="fas fa-edit"></i><a href="#">Device Control</a></li>
            <li><i class="fas fa-hourglass-half "></i><a href="#">Energy & Costs Saver</a></li>
            <li><i class="fas fa-file-text "></i><a href="#">Reports</a></li>
            <li><i class="fas fa-thumbs-o-down"></i><a href="#">Complains</a></li>
            <li><i class="fas fa-exclamation "></i><a href="#">Alerts</a></li>
            <li><i class="fas fa-newspaper"></i><a href="#">Daily News</a></li>
            <li><i class="fas fa-phone "></i><a href="#">Contact</a></li>
        </div>

    </section>
    <section id="interface">
        <div class="navigation">
            <!--Search-->
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fas fa-bars"></i>
                </div>
                <div class="search">
                    <i class="fas fa-search"></i>
                    <form>
                        <input type="text" placeholder="search"/>
                    </form>
                </div>
            </div>
            
            <!--Profile-->
            <div class="profile">
                <i class="far fa-bell"></i>
                <img src="assets/imgs/avata-1.jpg"/>
            </div>
        </div>
        <!--Cards-->
        <div class="values">
            <div class="container bootstrap snippets bootdey">
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <div class="circle-tile ">
                      <a href="#"><div class="circle-tile-heading green"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                      <div class="circle-tile-content green">
                        <div class="circle-tile-description text-faded">Active Users</div>
                        <div class="circle-tile-number text-faded ">1</div>
                        <a class="circle-tile-footer" href="#">More Info<i class="fa fa-chevron-circle-right"></i></a>
                      </div>
                    </div>
                  </div>
                   
                  <div class="col-lg-3 col-sm-6">
                    <div class="circle-tile ">
                      <a href="#"><div class="circle-tile-heading red"><i class="fa fa-exclamation-triangle fa-fw fa-3x"></i></div></a>
                      <div class="circle-tile-content red">
                        <div class="circle-tile-description text-faded"> Usage Anomalies </div>
                        <div class="circle-tile-number text-faded ">10</div>
                        <a class="circle-tile-footer" href="#">More Info<i class="fa fa-chevron-circle-right"></i></a>
                      </div>
                    </div>
                  </div> 
                   
                  <div class="col-lg-3 col-sm-6">
                    <div class="circle-tile ">
                      <a href="#"><div class="circle-tile-heading orange"><i class="fa fa-plug fa-fw fa-3x"></i></div></a>
                      <div class="circle-tile-content orange">
                        <div class="circle-tile-description text-faded"> connected Devices</div>
                        <div class="circle-tile-number text-faded ">10</div>
                        <a class="circle-tile-footer" href="#">More Info<i class="fa fa-chevron-circle-right"></i></a>
                      </div>
                    </div>
                  </div> 
                   
                  <div class="col-lg-3 col-sm-6">
                    <div class="circle-tile ">
                      <a href="#"><div class="circle-tile-heading blue"><i class="fa fa-credit-card-alt  fa-fw fa-3x"></i></div></a>
                      <div class="circle-tile-content blue">
                        <div class="circle-tile-description text-faded"> Monthy Bill </div>
                        <div class="circle-tile-number text-faded ">rs:100.00</div>
                        <a class="circle-tile-footer" href="#">More Info<i class="fa fa-chevron-circle-right"></i></a>
                      </div>
                    </div>
                  </div> 
                </div> 
              </div>  
        </div>
        <!--Graph prediction-->
        <div class="container">
        <div>
            <canvas id="canvas"></canvas>
        </div>
        </div>

        
       <!--Table--> 
       <div class="board">
        <table width="100%">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Title</td>
                    <td>Status</td>
                    <td>Role</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="people">
                    <p><img src="assets/imgs/user.jpg"/></p>
                    <div class="people-description">
                        <h5>Jhon</h5>
                        <p>jhon@gmail.com</p>
                    </div>
                </td>
                <td class="people-des">
                    <h5>Software Engineer</h5>
                    <p>Web developer</p>
                </td>
                <td class="active">
                    <p>active</p>
                </td>
                <td class="role">
                    <p>employee</p>
                </td>
                <td class="edit">
                    <p><a href="#">Edit</a></p>
                </td>
                </tr>

                <tr>
                    <td class="people">
                        <p><img src="assets/imgs/user2.jpg"/></p>
                        <div class="people-description">
                            <h5>Jhon</h5>
                            <p>jhon@gmail.com</p>
                        </div>
                    </td>
                    <td class="people-des">
                        <h5>Software Engineer</h5>
                        <p>Web developer</p>
                    </td>
                    <td class="active">
                        <p>active</p>
                    </td>
                    <td class="role">
                        <p>employee</p>
                    </td>
                    <td class="edit">
                        <p><a href="#">Edit</a></p>
                    </td>
                    </tr>

                    <tr>
                        <td class="people">
                            <p><img src="assets/imgs/user3.jpg"/></p>
                            <div class="people-description">
                                <h5>Jhon</h5>
                                <p>jhon@gmail.com</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>Software Engineer</h5>
                            <p>Web developer</p>
                        </td>
                        <td class="active">
                            <p>active</p>
                        </td>
                        <td class="role">
                            <p>employee</p>
                        </td>
                        <td class="edit">
                            <p><a href="#">Edit</a></p>
                        </td>
                        </tr>

                        <tr>
                            <td class="people">
                                <p><img src="assets/imgs/user4.jpg"/></p>
                                <div class="people-description">
                                    <h5>Jhon</h5>
                                    <p>jhon@gmail.com</p>
                                </div>
                            </td>
                            <td class="people-des">
                                <h5>Software Engineer</h5>
                                <p>Web developer</p>
                            </td>
                            <td class="active">
                                <p>active</p>
                            </td>
                            <td class="role">
                                <p>employee</p>
                            </td>
                            <td class="edit">
                                <p><a href="#">Edit</a></p>
                            </td>
                            </tr>
            </tbody>
        </table>
       </div>
    </section>
<script>
    $('#menu-btn').click(function(){
        $('#menu').toggleClass('active');
    })
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
</body>
</html>