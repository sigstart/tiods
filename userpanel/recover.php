
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:900,300,400' rel='stylesheet' type='text/css'>

    <link href="css/style.css" rel="stylesheet" type="text/css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="login-page">
    <div class="animsition">

      <main class="container recover-container">
        <div class="panel-container">
          <section class="panel">
            <header class="panel-heading">
              <img src="images/logo.png" class="big-logo" alt="SugarCrush">
              <p>Password recovery</p>
            </header>
            <div class="panel-body">

              <form>
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="text" class="form-control" id="email" placeholder="E-mail">
                </div>
                <div class="form-group text-center">
                  <a href="index.html" class="btn-login btn btn-primary">Recover</a>
                </div>
              </form> 
              <hr>
              <div class="register-now">
                Not registered? <a href="register.html">Register now</a>
              </div>
            </div>
          </section>
          <div class="go-back">
            <a href="login.html"><i class="ti-arrow-left"></i> Go back</a>
          </div>
        </div>
      </main>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="js/jquery-1.11.2.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/jquery.animsition.min.js"></script>
      <script src="js/login.js"></script>

    </div>
  </body>
</html>