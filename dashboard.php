<?php
    if(!isset($_GET['loginid']))
    {
        header("location:index.php?lo=1");
    }
    else
    {
        $conn=mysqli_connect("localhost","root","","project2");
        $id=$_GET['loginid'];
        $sel1="select * from users where ID=$id";
        $res1=mysqli_query($conn,$sel1);
        $res2=mysqli_fetch_array($res1);
    }
?>
<?php
    if(isset($_GET['login1id']))
    {
        $id3=$_GET['login1id'];
        $sel9="select * from users where ID=$id3";
        $res17=mysqli_query($conn,$sel9);
        $res18=mysqli_fetch_array($res17);
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
        .aa
        {
            display:none;
        }
    }
    @media screen and (max-width:333px)
    {
        .bb
        {
            width:80% !important;
        }
    }
    @media screen and (max-width:1199px)
    {
        .cc
        {
           margin-left:0px !important;
        }
    }
    @media screen and (min-width:768px)
    {
        .ff
        {
           display:none;
        }
    }
    </style>
    <script>
        function fileValidation() 
        { 
            var fileInput=document.getElementById('t3');     
            var filePath=fileInput.value; 
            var allowedExtensions=/(\.txt|\.pdf|\.doc|\.docx|\.ppt|\.pptx|\.zip)$/i; 
            if(!allowedExtensions.exec(filePath)) 
            { 
                alert('Invalid file type'); 
                fileInput.value=''; 
                return false; 
            }  
            const fi = document.getElementById('t3');
            if (fi.files.length > 0) 
            {
                for(const i=0;i<=fi.files.length-1;i++) 
                {
                    const fsize=fi.files.item(i).size;
                    const file=Math.round((fsize / 1024));
                    if (file>30720) 
                    {
                        alert("File too Big, please select a file less than 30mb");
                        fileInput.value='';
                        return false;
                    } 
                }
            }
        }
    </script>
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
        if(isset($_GET['delete']))
        {
            $id1=$_GET['delete'];
            $delete="delete from uploads where FILE_ID=$id1";
            mysqli_query($conn,$delete); 
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
        if(isset($_POST['btn']))
        {
    ?>
    <?php
            $filename=$_POST['t1'];
            $filedesc=$_POST['t2'];
            $file=$_FILES["t3"]["name"];
            $filetype= pathinfo($file, PATHINFO_EXTENSION);
            date_default_timezone_set("Asia/Kolkata");
            $date=date("Y/m/d")." ".date("h:i:sa");
            $fileuploader=$res2[3];
            $fileuploadedto=$res2[7];
            $status='Not approved yet';
            if(move_uploaded_file($_FILES["t3"]["tmp_name"],"Uploads/$file"))
            {
        ?>
        <?php
                $insert="insert into uploads values('','$filename','$filedesc','$filetype','$fileuploader','$date','$fileuploadedto','$file','$status')";
                mysqli_query($conn,$insert);
        ?>
        <?php
                header("location:dashboard.php?loginid="."$res2[0]"."&mynotes=1&as=1");
            }
        }
        if(isset($_GET['loginid']) && isset($_GET['mynotes']) && isset($_GET['as']))
        {
    ?>
            <script>
                alert("File uploaded successfully.It will be uploaded when admin approves it.");
            </script>
    <?php
        }
        ?>
    <div class="d-flex" id="wrapper">
        <div class="bg-dark border-right text-white" id="sidebar-wrapper">
            <div class="sidebar-heading"><p class="h4">COLLEGE NOTES</p></div>
                <div class="list-group list-group-flush">
                    <a href="dashboard.php?loginid=<?php echo $res2[0];?>" class="list-group-item text-white list-group-item-action bg-dark">Dashboard</a>
                    <a href="dashboard.php?loginid=<?php echo $res2[0];?>&upload=1" class="list-group-item text-white list-group-item-action bg-dark">Upload Notes</a>
                    <a href="dashboard.php?loginid=<?php echo $res2[0];?>&mynotes=1" class="list-group-item text-white list-group-item-action bg-dark">View All Notes</a>
                    <a href="dashboard.php?loginid=<?php echo $res2[0];?>&viewprof=1" class="list-group-item text-white list-group-item-action bg-dark">View Profile</a>
                    <a href="dashboard.php?loginid=<?php echo $res2[0];?>&editprof=1" class="list-group-item text-white list-group-item-action bg-dark">Edit Profile</a>
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
                                <a href="dashboard.php?loginid=<?php echo $res2[0];?>" class="ff nav-link text-white">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard.php?loginid=<?php echo $res2[0];?>&upload=1" class="ff nav-link text-white">Upload Notes</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard.php?loginid=<?php echo $res2[0];?>&mynotes=1" class="ff nav-link text-white">View All Notes</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard.php?loginid=<?php echo $res2[0];?>&viewprof=1" class="ff nav-link text-white">View Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard.php?loginid=<?php echo $res2[0];?>&editprof=1" class="ff nav-link text-white">Edit Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="dashboard.php?loginid=<?php echo $res2[0];?>&upload=1">UPLOAD</a>
                            </li>
                            <?php
                                $sel5="select * from users where ID=$res2[0]";
                                $res9=mysqli_query($conn,$sel5);
                                $res10=mysqli_fetch_array($res9);
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <?php echo $res10[1];?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="dashboard.php?loginid=<?php echo $res2[0];?>&editprof=1">Account</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="index.php">Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <?php
                  if(isset($_GET['upload']))
                  { 
                ?>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <h1 class="mt-4">UPLOAD NOTES</h1>
                          <hr/>
                          <form action="" method="post" name="F1" enctype="multipart/form-data">
                            <table class="w-100" cellpadding=10>
                                <tr>
                                    <th>
                                        Note Title
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="t1" class="bb form-control" placeholder="Eg: Php Tutorial File" id="t1" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Short Note Description
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="t2" class="bb form-control" placeholder="Eg: Php Tutorial File includes basic php programming........." id="t2" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Select File
                                        <p class="h6 text-danger">(allowed file type: 'pdf','doc','ppt','txt','zip' |   allowed maximum size:30mb)</p>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-file">
                                            <input type="file" name="t3" id="t3" onchange="return fileValidation()" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="btn" class="btn btn-primary" value="Upload Notes"/>
                                    </td>
                                </tr>
                            </table>
                          </form> 
                        </div>
                      </div>
                    </div>
                <?php
                  }
                  if(isset($_GET['mynotes']))
                  {
                ?>
                    <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-12 text-center">
                              <div class="row">
                                  <div class="col-md-4 text-left">
                                      <a href="dashboard.php?loginid=<?php echo $res2[0];?>&upload=1" style="margin-top:30px" class="btn btn-primary">Add New Notes</a>
                                  </div>
                                  <div class="col-md-3 text-center">
                                      <h1 class="mt-4">MY NOTES</h1>
                                  </div>
                              </div>
                              <hr/>
                          </div>
                        </div>
                        <div class="row">
                            <div class="table col-md-12 mr-3" style="overflow:scroll">
                                  <table class="table table-hover table-bordered table-striped" border=1 cellpadding=10 >
                                      <tr>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Type</th>
                                          <th>Uploaded On</th>
                                          <th>Status</th>
                                          <th>View</th>
                                          <th>Delete</th>
                                      </tr>
                                      <?php
                                          $sel2="select * from uploads where FILE_UPLOADER='$res2[3]'";
                                          $res3=mysqli_query($conn,$sel2);
                                          while($res4=mysqli_fetch_array($res3))
                                          {
                                      ?>
                                              <tr>
                                                  <td><?php echo $res4[1];?></td>
                                                  <td><?php echo $res4[2];?></td>
                                                  <td><?php echo $res4[3];?></td>
                                                  <td><?php echo $res4[5];?></td>
                                                  <td><?php echo $res4[8];?></td>
                                                  <td><a href="Uploads/<?php echo $res4[7];?>" target="_blank" class="btn btn-primary">View</a></td>
                                                  <td><a href="dashboard.php?loginid=<?php echo $res2[0];?>&mynotes=1&delete=<?php echo $res4[0];?>" onclick="return confirm('Are you sure you want to delete this uploaded notes?')" class="btn btn-primary">Delete</a></td>
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
                  if(isset($_GET['login1id']))
                  {
                ?>
                    <div class="container-fluid">
                        <div class="row justify-content-center" style="background-color:rgb(224,224,224);">
                            <div class="col-xl-3 text-center">
                                <img src="Logo/<?php echo $res18[8];?>" style="margin-top:70px" width="250px" height="250px" />
                            </div>
                            <div class="col-xl-6 mt-4">
                                <table class="cc w-100 text-center ml-3 mb-4" border=1 cellpadding=10>
                                <tr>
                                    <td colspan=2><p class="h2 text-center"><?php echo $res18[1];?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="h6 text-danger text-right">Department:</p></td>
                                    <td class="text-left"><p class="h6"><?php echo $res18[7];?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="h6 text-danger text-right">Role:</p></td>
                                    <td class="text-left"><p class="h6"><?php echo $res18[6];?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="h6 text-danger text-right">Gender:</p></td>
                                    <td class="text-left"><p class="h6"><?php echo $res18[5];?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="h6 text-danger text-right">Email:</p></td>
                                    <td class="text-left"><p class="h6"><?php echo $res18[2];?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="h6 text-danger text-right">Join Date:</p></td>
                                    <td class="text-left"><p class="h6"><?php echo $res18[10];?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="h6 text-danger text-right">Bio:</p></td>
                                    <td class="text-left"><p class="h6"><?php echo $res18[9];?></p></td>
                                </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php
                  }
                  if(isset($_GET['viewprof']) && !isset($_GET['login1id']))
                  {
                ?>
                      <div class="container-fluid">
                          <div class="row justify-content-center" style="background-color:rgb(224,224,224);">
                              <div class="col-xl-3 text-center">
                                  <img src="Logo/<?php echo $res2[8];?>" style="margin-top:70px" width="250px" height="250px" />
                              </div>
                              <div class="col-xl-6 mt-4">
                                  <table class="cc w-100 text-center ml-3 mb-4" border=1 cellpadding=10>
                                    <tr>
                                        <td colspan=2><p class="h2 text-center"><?php echo $res2[1];?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="h6 text-danger text-right">Department:</p></td>
                                        <td class="text-left"><p class="h6"><?php echo $res2[7];?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="h6 text-danger text-right">Role:</p></td>
                                        <td class="text-left"><p class="h6"><?php echo $res2[6];?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="h6 text-danger text-right">Gender:</p></td>
                                        <td class="text-left"><p class="h6"><?php echo $res2[5];?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="h6 text-danger text-right">Email:</p></td>
                                        <td class="text-left"><p class="h6"><?php echo $res2[2];?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="h6 text-danger text-right">Join Date:</p></td>
                                        <td class="text-left"><p class="h6"><?php echo $res2[10];?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="h6 text-danger text-right">Bio:</p></td>
                                        <td class="text-left"><p class="h6"><?php echo $res2[9];?></p></td>
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
                                        $sel4="select * from users where ID=$res2[0]";
                                        $res7=mysqli_query($conn,$sel4);
                                        $res8=mysqli_fetch_array($res7);
                                    ?>
                                    <div class="p-2 bd-highlight">
                                        <h3 class="mt-4 pt-2 text-danger"><?php echo $res8[1];?></h3>
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
                                    $sel3="select Image from users where ID=$res2[0]";
                                    $res5=mysqli_query($conn,$sel3);
                                    $res6=mysqli_fetch_array($res5);
                                ?>
                                <div class="col-md-12">
                                    <img src="Logo/<?php echo $res6[0];?>" width="200px"/>
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
                                                <input type="text" class="form-control" value="<?php echo $res8[3];?>" disabled/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Name
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" name="q1" class="form-control" value="<?php echo $res8[1];?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Email
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" name="q2" class="form-control" value="<?php echo $res8[2];?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Bio
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea class="form-control" name="q3" rows=6 cols=3><?php echo $res8[9];?></textarea>
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
                  if(isset($_GET['loginid']) && !isset($_GET['upload']) && !isset($_GET['mynotes']) && !isset($_GET['viewprof'])&& !isset($_GET['editprof']))
                  {
                ?>
                        <?php
                            $sel6="select * from users where ID=$res2[0]";
                            $res11=mysqli_query($conn,$sel6);
                            $res12=mysqli_fetch_array($res11);
                        ?>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="mt-4 ml-3 mr-3" style="float:left;">Welcome</h1>
                                    <h3 class="text-success" style="margin-top:35px"><?php echo $res12[1];?></h3>
                                    <hr/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 mx-auto mt-3">
                                    <marquee scrollamount=10>
                                        <h3 class="text-success pr-2" style="float:left"><?php echo $res12[7];?></h3>
                                        <h3 class="text-danger">notes uploaded by various users</h3>
                                    </marquee>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-12 mr-3" style="overflow:scroll;">
                                    <table class="text-center mb-5 w-100 table-hover table-bordered table-striped" cellpadding=10>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Type</th>
                                            <th>Uploaded By</th>
                                            <th>Uploaded on</th>
                                            <th>Download</th>
                                        </tr>
                                        <?php
                                            $sel7="select * from uploads where FILE_UPLOADED_TO='$res12[7]' and STATUS='Approved' order by FILE_ID desc";
                                            $res13=mysqli_query($conn,$sel7);
                                            while($res14=mysqli_fetch_array($res13))
                                            {
                                        ?>
                                                <?php
                                                    $sel8="select ID from users where Username='$res14[4]'";
                                                    $res15=mysqli_query($conn,$sel8);
                                                    $res16=mysqli_fetch_array($res15);
                                                ?>
                                                <tr>
                                                    <td><?php echo $res14[1];?></td>
                                                    <td><?php echo $res14[2];?></td>
                                                    <td><?php echo $res14[3];?></td>
                                                    <td><a href="dashboard.php?loginid=<?php echo $res2[0];?>&login1id=<?php echo $res16[0];?>&viewprof=1" target="_blank"><?php echo $res14[4];?></a></td>
                                                    <td><?php echo $res14[5];?></td>
                                                    <td><a href="Uploads/<?php echo $res14[7];?>" target="_blank" class="btn btn-primary">Download</a></td>
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