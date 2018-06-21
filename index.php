 <?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SLOW GRAM</title>

    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./FRAME/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 60px;
        background-color: #222;
      }

      .form-signin {
        max-width: 500px;
		min-width: 400px;
		min-height: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 10px;
           -moz-border-radius: 10px;
                border-radius: 10px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>	
	<script language="javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script language="javascript" src="./FRAME/js/bootstrap.min.js"></script>
	<script>
function goForm(){
//alert("gdgddg");
document.form2
.submit();
}
</script>
  </head>

  <body>

    <div class="container">
      <div class="form-signin" action ="">
        <center>
        <h2 class="form-signin-heading">SLOW GRAM</h2>
        </center>
        <form id="form2" name="form2" action="./DB/logincheck.php" method="POST">
           <center><input type="text" class="input-block-level" name="username" style="margin-top: 30px; width:300px;" placeholder="ID"></center>
           <center><input type="password" class="input-block-level" name="userpw" style="width:300px;" placeholder="PASSWORD"></center>
        </form>
        <button class="btn btn-large btn-primary" style="margin-top: 0px; width:300px;margin-left: 100px"  onclick="goForm()">로그인</button></p>

      </div>

    </div> <!-- /container -->
  </body>
</html>
