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
            <li><i class="fas fa-tachometer "></i><a href="index.php">Dashboard</a></li>
            <li><i class="fas fa-history "></i><a href="#">E-Meter History</a></li>
            <li><i class="fas fa-chart-line"></i><a href="#">Forecast</a></li>
            <li><i class="fas fa-map "></i><a href="#">Live Map</a></li>
            <li><i class="fas fa-user-circle"></i><a href="admin.php">Users</a></li>
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

        <?php
        include('get_admin.php')
        ?>

       <!--Table--> 
       <div class="board">
        <table width="100%">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Image</td>
                    <td>Name</td>
                    <td>email</td>
                    <td>Password</td>
                    <td>Role</td>
                    <td>Status</td>
                    <td>Edit</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach($admin as $admin){?>
                <tr>
                    <td class="people">
                        <h5><?php echo $admin['id']; ?></h5>
                    </td>
                    <td class="people-des">
                        <p><img src="assets/imgs/<?php echo $admin['image']; ?>"/></p>
                    </td>
                    <td class="people-des">
                        <h5><?php echo $admin['name']; ?></h5>
                    </td>
                    <td class="role">
                        <h5><?php echo $admin['email']; ?></h5>
                    </td>
                    <td class="role">
                        <h5><?php echo $admin['password']; ?></h5>
                    </td>
                    <td class="role">
                        <h5><?php echo $admin['role']; ?></h5>
                    </td>
                    <td class="active">
                        <p>active</p>
                    </td>
                    <td class="edit">
                        <p><a href="#">Edit</a></p>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
       </div>
       <nav class="container mx-3" aria-label= "Page navigation example">
        <ul class="pagination">
            <li class="page-item <?php if($page_no<=1){echo 'disabled';}?>">
                <a class="page-link" herf="<?php if($page_no<=1){echo'#';}else{echo '?page_no='.($page_no-1);}?>">Previous</a>
            </li>

            <li class="page-item">
                <a class="page-link" href="?page_no=1">1</a>
            </li>

            <li class="page-item">
                <a class="page-link" href="?page_no=2">2</a>
            </li>

            <?php if($page_no>=3){?>
                <li class="page-item">
                    <a class="page-link" href="#">...</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="<?php echo "?page_no=".$page_no;?>"><?php echo $page_no;?></a>
                </li>
            <?php } ?>

            
            <li class="page-item <?php if($page_no>= $total_no_of_pages){echo 'disabled';}?>">
                <a class="page-link" herf="<?php if($page_no>=$total_no_of_pages){echo'#';}else{echo '?page_no='.($page_no+1);}?>">Next</a>
            </li>

        <ul>
        </nav>
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