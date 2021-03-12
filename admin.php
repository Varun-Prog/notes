<?php
        if(isset($_GET['adminid']))
        {
            $conn=mysqli_connect("localhost","root","","project2");
            $id=$_GET['adminid'];
            $sel1="select * from users where ID=$id";
            $res1=mysqli_query($conn,$sel1);
            $res2=mysqli_fetch_array($res1);
        }
        else
        {
            header("location:index.php?ad=1");
        }
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Dashboard-<?php echo " ".$res2[3];?></title>
    <style>
        #wrapper {
    overflow-x: hidden;
 }

#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}
@media screen and (min-width:768px)
    {
        .ff
        {
           display:none;
        }
    }
    @media screen and (max-width:1199px)
    {
        .cc
        {
           margin-left:0px !important;
        }
    }
    </style>
  </head>
  <body>
        <?php
            if(isset($_POST['update']))
            {
        ?>
                    <script>
                        var error="";
                    </script>
        <?php
            $name=$_POST['q1'];
            $email=$_POST['q2'];
            $bio=$_POST['q3'];
            $current=$_POST['q4'];
            $newpass=$_POST['q5'];
            $renewpass=$_POST['q6'];
            if($newpass!="")
            {
                if($newpass==$renewpass && $current=="")
                {
            ?>
                    <script>
                        error+="Current password requires in order to change password\n";
                    </script>
            <?php
                }
                if($newpass!=$renewpass && $current=="")
                {
            ?>
                    <script>
                        error+="Password and Confirm password must be same";
                    </script>
            <?php
                }
                if($newpass!=$renewpass && $current==$res2[4])
                {
            ?>
                    <script>
                        error+="Password and Confirm password must be same";
                    </script>
            <?php
                }
                if($newpass==$renewpass && $current!=$res2[4] && $current!="")
                {
            ?>
                    <script>
                        error+="Please enter correct Current password\n";
                    </script>
            <?php      
                }
                if($newpass!=$renewpass && $current!=$res2[4] && $current!="")
                {
            ?>
                <script>
                    error+="Password and Confirm password must be same\n";
                </script>
            <?php 
                }
            }
            else
            {
                if($newpass!=$renewpass && $current=="")
                {
        ?>
                    <script>
                        error+="Password and Confirm password must be same";
                    </script>
        <?php
                }
            }
            // $name=$_POST['q1'];
            // $email=$_POST['q2'];
            // $bio=$_POST['q3'];
            // $current=$_POST['q4'];
            // $newpass=$_POST['q5'];
            // $renewpass=$_POST['q6'];
            if($name==$res2[1] && $email==$res2[2] && $bio==$res2[9] && $newpass==$renewpass && $newpass=="")
            {
        ?>
                        <script>
                            error+="Everything is same.So,nothing will be updated\n";
                        </script>
        <?php
            }
            else
            {
                if($current==$res2[4])
                {
                    if($newpass=="" && $newpass==$renewpass)
                    {
                        $update="update users set Name='$name',email='$email',About='$bio' where ID=$res2[0]";
                        mysqli_query($conn,$update);
            ?>
                        <script>
                            alert("Successfully updated");
                        </script>
            <?php
                    }
                    if($newpass!="" && $newpass==$renewpass)
                    {
                        $update="update users set Name='$name',email='$email',About='$bio',Password='$newpass' where ID=$res2[0]";
                        mysqli_query($conn,$update);
            ?>
                        <script>
                            alert("Successfully updated");
                        </script>
            <?php
                    }
                }
                else
                {
        ?>
                    <script>
                        error+="Please enter correct Current Password\n";
                    </script>
        <?php
                }
            }
        ?>
                <script>
                    if(error!="")
                    {
                        alert(error);
                    }
                </script>
        <?php
        }
        ?>
        <?php
            if(isset($_POST['photo']))
            {
                $file1=$_FILES["ab"]["name"];
                if(move_uploaded_file($_FILES["ab"]["tmp_name"],"Logo/$file1"))
                {
                    $update="update users set Image='$file1' where ID=$res2[0];";
                    mysqli_query($conn,$update);
            ?>
                    <script>
                        alert("Profile photo uploaded successfully");
                    </script>
            <?php
                }
            }
        ?>
        <?php
            if(isset($_GET['approve']))
            {
                $id1=$_GET['approve'];
                $sel5="select STATUS from uploads where FILE_ID=$id1";
                $res8=mysqli_query($conn,$sel5);
                $res9=mysqli_fetch_array($res8);
                if($res9[0]=='Approved')
                {
            ?>
                    <script>
                        alert("Notes already approved");
                    </script>
            <?php
                }
                else
                {
                    $update="update uploads set STATUS='Approved' where FILE_ID=$id1";
                    mysqli_query($conn,$update);
            ?>
                     <script>
                        alert("Notes approved successfully");
                    </script>
            <?php
                }
            }
        ?>
        <?php
            if(isset($_GET['delete']))
            {
                $id2=$_GET['delete'];
                $delete="delete from uploads where FILE_ID=$id2";
                mysqli_query($conn,$delete);
            ?>
                <script>
                    alert("Notes deleted successfully");
                </script>
            <?php
            }
            if(isset($_GET['del']))
            {
                $id4=$_GET['adminid'];
                $id3=$_GET['del'];
                $del="delete from users where ID=$id3";
                mysqli_query($conn,$del);
            ?>
                <script>
                    alert("User deleted successfully");
                </script>
            <?php
            }
        ?>
        <div class="d-flex" id="wrapper">
            <div class="bg-dark border-right text-white" id="sidebar-wrapper">
                <div class="sidebar-heading"><p class="h4">COLLEGE NOTES</p></div>
                    <div class="list-group list-group-flush">
                        <a href="admin.php?adminid=<?php echo $res2[0];?>" class="list-group-item text-white list-group-item-action bg-dark">Dashboard</a>
                        <a href="admin.php?adminid=<?php echo $res2[0];?>&myusers=1" class="list-group-item text-white list-group-item-action bg-dark">View All Users</a>
                        <a href="admin.php?adminid=<?php echo $res2[0];?>&viewprof=1" class="list-group-item text-white list-group-item-action bg-dark">View Profile</a>
                        <a href="admin.php?adminid=<?php echo $res2[0];?>&editprof=1" class="list-group-item text-white list-group-item-action bg-dark">Edit Profile</a>
                    </div>
                </div>
                <div id="page-content-wrapper">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
                        <p class="h3 text-white aa">COLLEGE NOTES</p>
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>   
                        </button>
                        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                <li class="nav-item">
                                    <a href="admin.php?adminid=<?php echo $res2[0];?>" class="ff nav-link text-white">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="admin.php?adminid=<?php echo $res2[0];?>&myusers=1" class="ff nav-link text-white">View All Users</a>
                                </li>
                                <li class="nav-item">
                                    <a href="admin.php?adminid=<?php echo $res2[0];?>&viewprof=1" class="ff nav-link text-white">View Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="admin.php?adminid=<?php echo $res2[0];?>&editprof=1" class="ff nav-link text-white">Edit Profile</a>
                                </li>
                                <?php
                                    $sel2="select * from users where ID=$res2[0]";
                                    $res2=mysqli_query($conn,$sel2);
                                    $res3=mysqli_fetch_array($res2);
                                ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $res3[1];?>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="admin.php?adminid=<?php echo $res3[0];?>&editprof=1">Account</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="index.php">Log Out</a>
                                    </div>
                                </li>
                        </div>
                    </nav>
                    <?php
                        if(isset($_GET['adminid']) && !isset($_GET['myusers']) && !isset($_GET['viewprof']) && !isset($_GET['editprof']) && !isset($_GET['admin1id']))
                        {
                            $sel3="select * from users where ID=$id";
                            $res4=mysqli_query($conn,$sel3);
                            $res5=mysqli_fetch_array($res4);
                    ?>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="mt-4 ml-3 mr-3" style="float:left;">Welcome</h1>
                                        <h3 class="text-success" style="margin-top:35px"><?php echo $res5[1];?></h3>
                                        <hr/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 mx-auto mt-3">
                                        <marquee scrollamount=10>
                                            <h3 class="text-success">Notes uploaded by various users</h3>
                                        </marquee>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="jj col-md-12 mr-3" style="overflow-x:scroll">
                                        <table class="text-center mb-5 w-100 table-hover table-bordered table-striped" cellpadding=10>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Type</th>
                                                <th>Uploaded By</th>
                                                <th>Uploaded on</th>
                                                <th>Status</th>
                                                <th>View</th>
                                                <th>Approve</th>
                                                <th>Delete</th>
                                            </tr>
                                            <?php
                                                $sel4="select * from uploads order by FILE_ID desc";
                                                $res6=mysqli_query($conn,$sel4);
                                                while($res7=mysqli_fetch_array($res6))
                                                {
                                                    $sel6="select ID from users where Username='$res7[4]'";
                                                    $res10=mysqli_query($conn,$sel6);
                                                    $res11=mysqli_fetch_array($res10);
                                            ?>
                                                    <tr>
                                                        <td><?php echo $res7[1];?></td>
                                                        <td><?php echo $res7[2];?></td>
                                                        <td><?php echo $res7[3];?></td>
                                                        <td><a href="admin.php?adminid=<?php echo $res5[0];?>&admin1id=<?php echo $res11[0];?>&viewprof=1" target="_blank"><?php echo $res7[4];?></a></td>
                                                        <td><?php echo $res7[5];?></td>
                                                        <td><?php echo $res7[8];?></td>
                                                        <td><a href="Uploads/<?php echo $res7[7];?>" target="_blank" class="btn btn-success">View</a></td>
                                                        <td><a href="admin.php?adminid=<?php echo $res5[0];?>&approve=<?php echo $res7[0];?>" onclick="return confirm('Are you sure you want to approve this notes?');" class="btn btn-primary">Approve</a></td>
                                                        <td><a href="admin.php?adminid=<?php echo $res5[0];?>&delete=<?php echo $res7[0];?>" onclick="return confirm('Are you sure you want to delete this notes?');" class="btn btn-primary">Delete</a></td>
                                                    </tr>
                                            <?php
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        if(isset($_GET['myusers']))
                        {
                    ?>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="mt-4 ml-3 mr-3">All Users</h1>
                                        <hr/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mr-3" style="overflow:scroll;">
                                        <table class="table table-hover table-bordered table-striped text-center w-100">
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Course</th>
                                                <th>Delete</th>
                                            </tr>
                                            <?php
                                                $a=$_GET['adminid'];
                                                $sel7="select * from users where Role!='Admin'";
                                                $res12=mysqli_query($conn,$sel7);
                                                while($res13=mysqli_fetch_array($res12))
                                                {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $res13[0];?></td>
                                                        <td><a href="admin.php?adminid=<?php echo $a;?>&admin1id=<?php echo $res13[0];?>&viewprof=1" target="_blank"><?php echo $res13[4];?></a></td>
                                                        <td><?php echo $res13[1];?></td>
                                                        <td><?php echo $res13[2];?></td>
                                                        <td><?php echo $res13[6];?></td>
                                                        <td><?php echo $res13[7];?></td>
                                                        <td><a href="admin.php?adminid=<?php echo $a;?>&del=<?php echo $res13[0];?>&myusers=1" onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-primary">Delete</a></td>
                                                    </tr>
                                            <?php
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                        if(isset($_GET['viewprof']) && !isset($_GET['admin1id']))
                        {
                            $id5=$_GET['adminid'];
                            $sel8="select * from users where ID=$id5";
                            $res14=mysqli_query($conn,$sel8);
                            $res15=mysqli_fetch_array($res14);
                ?>
                            <div class="container-fluid">
                                <div class="row justify-content-center" style="background-color:rgb(224,224,224);">
                                    <div class="col-xl-3 text-center">
                                        <img src="Logo/<?php echo $res15[8];?>" style="margin-top:70px" width="250px" height="250px" />
                                    </div>
                                    <div class="col-xl-6 mt-4">
                                        <table class="cc w-100 text-center ml-3 mb-4" border=1 cellpadding=10>
                                            <tr>
                                                <td colspan=2><p class="h2 text-center"><?php echo $res15[1];?></p></td>
                                            </tr>
                                            <tr>
                                                <td><p class="h6 text-danger text-right">Department:</p></td>
                                                <td class="text-left"><p class="h6"><?php echo $res15[7];?></p></td>
                                            </tr>
                                            <tr>
                                                <td><p class="h6 text-danger text-right">Role:</p></td>
                                                <td class="text-left"><p class="h6"><?php echo $res15[6];?></p></td>
                                            </tr>
                                            <tr>
                                                <td><p class="h6 text-danger text-right">Gender:</p></td>
                                                <td class="text-left"><p class="h6"><?php echo $res15[5];?></p></td>
                                            </tr>
                                            <tr>
                                                <td><p class="h6 text-danger text-right">Email:</p></td>
                                                <td class="text-left"><p class="h6"><?php echo $res15[2];?></p></td>
                                            </tr>
                                            <tr>
                                                <td><p class="h6 text-danger text-right">Join Date:</p></td>
                                                <td class="text-left"><p class="h6"><?php echo $res15[10];?></p></td>
                                            </tr>
                                            <tr>
                                                <td><p class="h6 text-danger text-right">Bio:</p></td>
                                                <td class="text-left"><p class="h6"><?php echo $res15[9];?></p></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                        if(isset($_GET['admin1id']))
                        {
                            $r=$_GET['admin1id'];
                            $ser="select * from users where ID=$r";
                            $rq=mysqli_query($conn,$ser);
                            $ress17=mysqli_fetch_array($rq);
                ?>
                            <div class="container-fluid">
                                <div class="row justify-content-center" style="background-color:rgb(224,224,224);">
                                    <div class="col-xl-3 text-center">
                                        <img src="Logo/<?php echo $ress17[8];?>" style="margin-top:70px" width="250px" height="250px" />
                                    </div>
                                    <div class="col-xl-6 mt-4">
                                        <table class="cc w-100 text-center ml-3 mb-4" border=1 cellpadding=10>
                                        <tr>
                                            <td colspan=2><p class="h2 text-center"><?php echo $ress17[1];?></p></td>
                                        </tr>
                                        <tr>
                                            <td><p class="h6 text-danger text-right">Department:</p></td>
                                            <td class="text-left"><p class="h6"><?php echo $ress17[7];?></p></td>
                                        </tr>
                                        <tr>
                                            <td><p class="h6 text-danger text-right">Role:</p></td>
                                            <td class="text-left"><p class="h6"><?php echo $ress17[6];?></p></td>
                                        </tr>
                                        <tr>
                                            <td><p class="h6 text-danger text-right">Gender:</p></td>
                                            <td class="text-left"><p class="h6"><?php echo $ress17[5];?></p></td>
                                        </tr>
                                        <tr>
                                            <td><p class="h6 text-danger text-right">Email:</p></td>
                                            <td class="text-left"><p class="h6"><?php echo $ress17[2];?></p></td>
                                        </tr>
                                        <tr>
                                            <td><p class="h6 text-danger text-right">Join Date:</p></td>
                                            <td class="text-left"><p class="h6"><?php echo $ress17[10];?></p></td>
                                        </tr>
                                        <tr>
                                            <td><p class="h6 text-danger text-right">Bio:</p></td>
                                            <td class="text-left"><p class="h6"><?php echo $ress17[9];?></p></td>
                                        </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                        if(isset($_GET['editprof']))
                        {
                ?>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex flex-row justify-content-around bd-highlight mb-3">
                                            <div class="p-2 bd-highlight">
                                                <h2 class="mt-4">Welcome to your Profile</h2>
                                            </div>
                                            <?php
                                                $id6=$_GET['adminid'];
                                                $sel9="select * from users where ID=$id6";
                                                $res16=mysqli_query($conn,$sel9);
                                                $res17=mysqli_fetch_array($res16);
                                            ?>
                                            <div class="p-2 bd-highlight">
                                                <h3 class="mt-4 pt-2 text-danger"><?php echo $res17[1];?></h3>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-12">
                                            <h6>Profile Image</h6>
                                        </div>
                                        <?php
                                            $sel10="select Image from users where ID=$id6";
                                            $res18=mysqli_query($conn,$sel10);
                                            $res19=mysqli_fetch_array($res18);
                                        ?>
                                        <div class="col-md-12">
                                            <img src="Logo/<?php echo $res19[0];?>" width="200px"/>
                                        </div>
                                        <form action="" method="post" name="F2" enctype="multipart/form-data">
                                            <table class="ml-3 mt-2">
                                                <tr>
                                                    <td>
                                                        <input type="file" name="ab"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="submit" name="photo" class="mt-2 btn btn-primary" value="Upload Photo"/>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                </div>
                                <hr/>
                                    <form action="" method="post" name="F3">
                                        <div class="row">
                                            <table class="w-100 ml-3 mr-3" cellpadding=5>
                                                <tr>
                                                    <th>
                                                        Username
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" value="<?php echo $res17[3];?>" disabled/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Name
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="q1" class="form-control" value="<?php echo $res17[1];?>"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Email
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="q2" class="form-control" value="<?php echo $res17[2];?>"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Bio
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <textarea class="form-control" name="q3" rows=6 cols=3><?php echo $res17[9];?></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Current Password
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="password" name="q4" class="form-control" placeholder="Enter current password"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <p style="float:left" class="pr-1">New Password</p><p class="text-danger">(changing password is optional)</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="password" style="margin-top:-15px" name="q5" class="form-control" placeholder="Enter new password"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Confirm New Password
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="password" name="q6" class="form-control" placeholder="Re-enter new password"/>
                                                        <hr/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="submit" name="update" class="btn btn-primary mb-4" value="Update User"/>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>  
                                    </form>
                            </div>
                <?php
                         }
                        ?>
                </div>
            </div>
        </div>
                
        <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
      $("#wrapper").toggleClass("toggled");
      });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
 </body>
</html>