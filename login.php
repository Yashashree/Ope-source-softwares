 <?php
include 'header.php';
?>

   
    <center>

     <form action="#" method="post" id="loginform">
       <div class="row ">
           <div class="col-md-4 col-md-offset-4">
       <div class="jumbotron">
  
                            <div class="form-group">
    
                                <label for="exampleInputEmail1">Username</label>
    
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username" id="username">
  
                            </div>
  
    <div class="form-group">
    
    <label for="exampleInputPassword1">Password</label>
    
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" id="username">
  <br>
    <input type="submit" class="btn btn-success" value="Sign in">
        
        
        &nbsp; <a href="forgotpass.php">Forgot password?</a>
        </div>
                   
<?php
if(isset($_GET['error']))
{
    if(!empty($_GET['error']))
    {
        echo $_GET['error'];
    }
}

echo ('
        <script type="text/jvascript">
        location.reload(true)
        </script>
        ');

if(!isset($_SESSION['id']))
    {
        //echo 'in admin';
if(isset($_POST['username'])&&isset($_POST['password']))
    {
        $uname=$_POST['username'];
        $pass=$_POST['password'];

        //echo($uname.$pass);
        if(!empty($uname)&&!empty($pass))
        {
         if(mysql_connect('localhost','root',''))
         {
             if(mysql_select_db('hospital'))
             {
                 $pass=md5($pass);

                 $query='select * from login where username=\''.$uname. '\'AND password=\''.$pass.'\'';
                 //echo $query;
                 $result=mysql_query($query);
                 $count=@mysql_num_rows($result);
                  if($count==1)
                  {  session_start();
                      $query_row=mysql_fetch_assoc($result);
                      $_SESSION['id']=$query_row['username'];
                      header('location:formtabs.php');
                    //  echo('Login successfully.');
                      die();
                      //session_end();
                  }
                 else
                     echo('<div class="alert alert-danger" role="alert">
        Incorrect Username Or Password.
</div>');
                 unset($_POST['username']);
                 unset($_POST['password']);

             }
         }


        }
        else
        {
            echo(' <div class="alert alert-danger" role="alert">
        Please Enter Username And Password.
</div>');
        }

    }

}
?>

               </div>
           </div>
  
    </form>
    </center>
   </div>

<?php
include 'footer.html';
?>
</div>
<script src="js/bootstrap.min.js">
</script>

    </body>
</html>

 