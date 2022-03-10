<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <style>
      
    body{

  background:#eee;
}
     padding:50px;

}

#btn{
    color:#blue;
    background:#337ab7;
    padding:10px;
    margin-left:50%;


}
.frm2{
     border:solid gray 1px;
     width:50%;
     border-radius:10px;
     margin:100px auto;
     background: white
   }
   .log1{
     text-align:center;
   }
   .in1{

   margin-left:80px;
   }

    </style>
  </head>
  <body>
    <div id="frm1">
     
   </div>
     <div class="frm2">
      <form action="process.php"method="POST">
        <img src=img/LogoMPhar.png style="padding:20px; margin-left:20%;width:60%;">
        <div class="log1">
        <p class="use1">
          <label>Username:</label>
          <input type="text" id="user" name="user">
        </p>
        <p class="pass1">
          <label>Password:</label>
          <input type="Password" id="pass" name="pass">
        </p>
        <p class="in1">
          <input type="submit" id="btn" value="Login">
        </p>
      </div>
      </form> 
    </div>


  </body>
</html>