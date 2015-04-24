<!DOCTYPE html>
<html lang="en">
    
    <head>
  <meta charset="utf-8">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="css/yash.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
function showmarriage(){
  document.getElementById("marriage").innerHTML="
  <label>
    <input type='checkbox' name='first'  >
    1st Degree
  </label>

    
  <label>
    <input type='checkbox' name='second' >
    2nd Degree
  </label>


  <label>
    <input type='checkbox' name='third'  >
    3rd Degree
  </label>";
}  

  $(function() {
    enable_cb();
    $("#group1").click(enable_cb);
});

function enable_cb() {
    $("input.group1").prop("disabled", !this.checked);
}
  </script>
    <style>-
    </style>
</head>

    <head>
        
        <div class="container">
        
            <title>SIGN UP</title>
        
            <link href="css/bootstrap.min.css" rel="stylesheet">
        
            <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        
            <link href="css/style.css" rel="stylesheet">    
                            
         </div>
        <style>p{
            margin-left: 100px;
        }
        p1
            {
                font-size: 50;
                color: black;
            }</style>

        
    </head>

    
    <body>
  
        <div class="container">

            <div class="row">
    
                <div class="page-header">
        
                    <h1><p><marquee>SIGN IN FOR EXTERNAL EXAM PORTAL</marquee></p></h1>
        
                </div>
    
                <div class="col-md-4 col-md-offset-4">

                    <form action="signup_db.php" method="POST">
    
                        <div class="jumbotron">
                            
                            
                            
                             <div class="input-gruop input-group-md">
    
                                <label for="exampleInputText">User Name</label>
    
                                <input type="text" class="form-control" id="exampleInputText" placeholder="Enter Text" name="user_name" required pattern="\w+">
  
                            </div>
                            
                              
  
                            <div class="form-group">
    
                                <label for="exampleInputEmail1">Email address</label>
    
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
  
                            </div>
                            
                               <div class="form-group">
    
                                <label for="exampleInputPassword1">Password</label>
    
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password">
  
                            </div>
                            
                            <div class="form-group">
    
                                <label for="exampleInputPassword1">Confirm Password</label>
    
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="c_password" onclick="setdate()">
  
                            </div>
                            
                            
                            
   <div>
                                  <p1>Password Mismatched please enter correct password</p1>
                            </div>
                      
                             <button type="submit" class="btn btn-success">Sign up</button>
        
                        </div>
                       

                    </form>
    
                </div>
    
            </div>
   
        </div>
      
        <div class="footer">
                    <p>&copy :  Exam Portal, Information Tech Department@2015</p>
            </div>
        
            
        </div>
    
    <script src="js/jquery.js"></script>
        
    <script src="js/bootstrap.min.js"></script> 
    <script type="text/javascript">
    function setdate(){
  alert("hi gm");
var date=document.getElementById("datepicker").value;
    //alert("date is picked.");
    if(date=="")
    {
        alert("Enter date first.");
    }
    else
    {
        document.getElementById("lmp").value=date;
    }
}
</script>
    </body>
    
</html>