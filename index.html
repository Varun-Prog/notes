<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Notes Sharing System</title>
    <style>
        @media screen and (min-width:991px)
        {
            .logo
            {
                width:140px;
                height:100px;
            }
            .aa
            {
               
            }
            .cc
            {
                margin-top:0px !important;
            }
        }
        @media screen and (max-width:991px)
        {
            .aa
            {
                margin-top:0px !important;
            }
            .bb
            {
                width:100% !important;
            }
        }
        @media screen and (max-width:767px)
        {
            .aa
            {
                padding-top:0px !important;
            }
        }
        @media screen and (max-width:768px)
        {
            .dd
            {
                height:350px;
            }
        }
        @media screen and (max-width:578px)
        {
            .ee
            {
                margin-left:0px !important;
            }
        }
    </style>
    <script>
        function func2()
        {
            var msg="";
            var usern=document.getElementById("sit3").value;
            var pass=document.getElementById("sit4").value;
            var confpass=document.getElementById("sit5").value;
            var len1=pass.length;
            var len2=usern.length;
            if(len2<4)
            {
                msg+="Username must be of four atleast characters\n";
            }
            if(len1<4)
            {
                msg+="Password must be of atleast 5 characters\n";
            }
            if(pass!=confpass)
            {
                msg+="Password and Confirm Password must be same\n";
            }
            if(msg!="")
            {
                alert(msg);
                return false;
            }
            else
            {
                return true;
            }
        }
    </script>
  </head>
  <body>
        <?php
            $conn=mysqli_connect("localhost","root","","project2") or die("worng database");
        ?>
        <?php
            if(isset($_POST['adminbtn']))
            {
                $user=$_POST['ad1'];
                $pass=$_POST['ad2'];
                $select="select * from users where Username='$user' and Password='$pass' and Role='Admin'";
                $res7=mysqli_query($conn,$select);
                $res8=mysqli_fetch_array($res7);
                if(mysqli_num_rows($res7)==1)
                {
                    header("location:admin.php?adminid=$res8[0]");
                }
                else
                {
            ?>  
                    <script>
                        alert("Invalid username or password");
                    </script>
            <?php
                }
            }
        ?>
        <?php
            if(isset($_POST['btn1']))
            {
                $username=$_POST['t1'];
                $password=$_POST['t2'];
                $select3="select id from users where Username='$username' and Password='$password' and Role!='Admin'";
                //echo $select3;
                $res5=mysqli_query($conn,$select3);
                //print_r($res5); 
                $res6=mysqli_fetch_array($res5);
                //print_r($res6);
                if(mysqli_num_rows($res5)==1)
                {
                    session_start();
                    header("location:dashboard.php?loginid=$res6[0]");
                }
                else
                {
            ?>
                    <script>
                        alert("Invalid username or password");
                    </script>
            <?php
                }
            }
        ?>
    <?php
        if(isset($_GET['up']))
        {
    ?>
            <div id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">LOGIN FIRST</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <p>Login first in order to upload notes</p>
                            <hr/>
                            <form>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">CLOSE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function(){
                    $("#myModal").modal('show');
                });
            </script>

    <?php
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="Logo/1.png" class="logo img-fluid mb-2 mt-2" alt="..."/>
            </div>
            <div class="col-md-6 text-center">
                <p class="h1 pt-4 text-dark aa" style="font-family:algerian;margin-top:10px">NOTES SHARING SYSTEM</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <button class="navbar-toggler" style="margin-left: auto;"type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto"> 
                            <li class="nav-item <?php if(!isset($_GET['si']) && !isset($_GET['lo']) && !isset($_GET['ab'])){ echo "active";}?>">
                                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item <?php if(isset($_GET['si'])){ echo "active";}?>">
                                <a class="nav-link" href="index.php?si=1">Sign Up</a>
                            </li>
                            <li class="nav-item <?php if(isset($_GET['lo'])){ echo "active";}?>">
                                <a class="nav-link" href="index.php?lo=1">Login</a>
                            </li>
                            <li class="nav-item <?php if(isset($_GET['ad'])){ echo "active";}?>">
                                <a class="nav-link" href="index.php?ad=1">Admin Panel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?up=1;">Upload Notes</a>
                            </li>
                            <li class="nav-item <?php if(isset($_GET['ab'])){ echo "active";}?>">
                                <a class="nav-link" href="index.php?ab=1">About Us</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control bb mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success mx-auto mt-2 cc" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <?php
            if(!isset($_GET['si']) && !isset($_GET['lo']) && !isset($_GET['ab']) && !isset($_GET['ad']))
            {
        ?>
                <div class="row">
                    <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel" data-interval="1500">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" style="background-color:black" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" style="background-color:black" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" style="background-color:black" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" style="background-color:black" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Logo/slide1.jpg" width="100%" class="dd mt-2" alt="...">
                                    <div class="carousel-caption d-none d-md-block" style="background-color:#ffffff;opacity:0.9">
                                        <h5 class="text-dark">Easy Notes Management</h5>
                                        <p class="text-dark">Now easily manage all kind of notes by uploading them here.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Logo/slide2.jpg" width="100%" class="dd mt-2" alt="...">
                                    <div class="carousel-caption d-none d-md-block" style="background-color:#ffffff;opacity:0.9">
                                        <h5 class="text-dark">Upload Various Files</h5>
                                        <p class="text-dark">User can upload various types of files like PDF, PPT, DOC etc..</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Logo/slide3.jpg" width="100%" class="dd mt-2" alt="...">
                                    <div class="carousel-caption d-none d-md-block" style="background-color:#ffffff;opacity:0.9">
                                        <h5 class="text-dark">Controlled By Admin</h5>
                                        <p class="text-dark">Everying is managed and controled by administrator.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Logo/slide4.jpg" width="100%" class="dd mt-2" alt="...">
                                    <div class="carousel-caption d-none d-md-block" style="background-color:#ffffff;opacity:0.9">
                                        <h5 class="text-dark">Login For Both Teacher and Student</h5>
                                        <p class="text-dark">Both teacher and student can login and upload notes.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="h4 d-inline-block text-dark">COPYRIGHT:</p>
                        <p class="h4 pl-2 d-inline-block" style="font-style:italic;font-family:art brush">2021 Algorithm Institute</p>
                    </div>
                </div>
        <?php
            }
        ?>
        <?php
            if(isset($_GET['lo']))
            {
        ?>
                <div class="row">
                    <div class="col-md-4 mx-auto mt-4 mb-2">
                        <form action="" method="post" name="F1">
                            <table cellpadding=10 class="w-100 text-center" style="background-color:rgb(232,232,232)">
                                <tr>
                                    <td>
                                        <p class="h1 text-center">LOGIN</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" style="border:1px solid black" name="t1" placeholder="Username" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="password" class="form-control" style="border:1px solid black" name="t2" placeholder="Password" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul>
                                            <li style="float:left">
                                                <a href="index.php?si=1" style="color:black;font-style:italic">Register</a>
                                            </li>
                                            <li style="float:right">
                                                <a href="#" style="color:black;font-style:italic">Forgot password</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <input type="submit" name="btn1" class="btn btn-primary" value="LOGIN"/>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <hr/>
        <?php
            }
        ?>
        <?php
            if(isset($_POST['btn2']))
            {
                $error="";
                $select1="select Username from users";
                $res1=mysqli_query($conn,$select1);
                while($res2=mysqli_fetch_array($res1))
                {
                    if($res2[0]==$_POST['sit3'])
                    {
                        $error.="Username already taken! Try a different one"."<br/>";
                        break;
                    }
                }
                $select2="select email from users";
                $res3=mysqli_query($conn,$select2);
                while($res4=mysqli_fetch_array($res3))
                {
                    if($res4[0]==$_POST['sit2'])
                    {
                        $error.="Email already taken! Try a different one"."<br/>";
                        break;
                    }
                }
            ?>
            <?php
                    if($error=="")
                    {
                        $name=$_POST['sit1'];
                        $email=$_POST['sit2'];
                        $username=$_POST['sit3'];
                        $password=$_POST['sit4'];
                        $gender=$_POST['sit6'];
                        $role=$_POST['sit7'];
                        $course=$_POST['sit8'];
                        $date=date("Y/m/d");
                        $insert="insert into users values('','$name','$email','$username','$password','$gender','$role','$course','profile.jpg','N/A','$date')";
                        //echo $insert;
                        mysqli_query($conn,$insert);
            ?>
                         <script>
                            alert("Registered Successfully");
                        </script>
            <?php
                    }
            ?>
            <?php
            }
        ?>
        <?php
            if(isset($_GET['si']))
            {
        ?>
                <div class="row">
                    <div class="col-md-6 offset-md-4 mt-4 mb-3">
                        <form action="" method="post" name="F2" onsubmit="return func2();">
                            <table cellpadding=10 class="w-100">
                                <tr>
                                    <td>
                                        <p class="h1 text-center">SIGN UP</p>
                                    </td>
                                </tr>
                                <?php
                                    if(@$error!="")
                                    {
                                ?>
                                        <tr>
                                            <td class="text-center text-danger">
                                                <p class="h5"><?php echo $error;?></p>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                ?>
                                <tr>
                                    <td>Name</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="ee ml-3 form-control" style="border:1px solid black" id="sit1" name="sit1" placeholder="First and last name" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>E-mail</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="email" class="ee ml-3 form-control" style="border:1px solid black" id="sit2" name="sit2" placeholder="example@domain.com" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Create a username</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="ee ml-3 form-control" style="border:1px solid black" id="sit3" name="sit3" placeholder="Username" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Create a password</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="password" class="ee ml-3 form-control" style="border:1px solid black" id="sit4" name="sit4" placeholder="Password" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Confirm your password</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="password" class="ee ml-3 form-control" style="border:1px solid black" id="sit5" name="sit5" placeholder="Re-enter password" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="ee custom-select ml-3" id="sit6" name="sit6" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>I am a</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="ee custom-select ml-3" id="sit7" name="sit7" required>
                                            <option value="Teacher">Teacher</option>
                                            <option value="Student">Student</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>I teach/study</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="ee custom-select ml-3" id="sit8" name="sit8" required>
                                            <option value="Computer Sc Enginnering">Computer Sc Enginnering</option>
                                            <option value="Electrical Enginnering">Electrical Enginnering</option>
                                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">
                                        <input type="submit" name="btn2" class="mt-3 btn btn-primary" value="SIGN ME UP!"/>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <hr/>
        <?php
            }
            if(isset($_GET['ab']))
            {
        ?>
                <div class="row">
                    <div class="col-md-8 mx-auto text-justify mt-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                         laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                          dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est 
                           laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                         laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                          dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est 
                           laborum.</p>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="h4 d-inline-block text-dark">COPYRIGHT:</p>
                        <p class="h4 pl-2 d-inline-block" style="font-style:italic;font-family:art brush">2021 Algorithm Institute</p>
                    </div>
                </div>
        <?php
            }
            if(isset($_GET['ad']))
            {
        ?>
                <div class="row">
                    <div class="col-md-4 mx-auto mt-4 mb-2">
                        <form action="" method="post" name="F3">
                            <table cellpadding=10 class="w-100 text-center" style="background-color:rgb(232,232,232)">
                                <tr>
                                    <td>
                                        <p class="h1 text-center">ADMIN LOGIN</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" style="border:1px solid black" name="ad1" placeholder="Username" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="password" class="form-control" style="border:1px solid black" name="ad2" placeholder="Password" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul type=none>
                                            <li>
                                                <a href="#" style="color:black;font-style:italic" class="mr-5">Forgot password</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="adminbtn" style="margin-top:-30px" class="btn btn-primary" value="LOGIN"/>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <hr/>
        <?php
            }
        ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
 </body>
</html>