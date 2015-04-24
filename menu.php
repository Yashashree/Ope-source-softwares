 <?php
    include'header.php';
?>
  <div class="row">
      
      <ul class="nav nav-pills nav-stacked">
       <li role="presentation" class="active"><a href="#">First</a></li>
        <li role="presentation" class="active"><a href="#">Second</a></li>
</ul>
</div>
<?php
include 'footer.html';

?>
</body>
</html>

 
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
                      //header('location:adminlogin.php');
                      echo('Login successfully.');
                      die();
                      //session_end();
                  }
                 else
                     echo('incorrect Username or password');
                 unset($_POST['username']);
                 unset($_POST['password']);

             }
         }


        }
        else
        {
            echo 'Please Enter USERNAME AND PASSWORD';
        }

    }

}
?>

