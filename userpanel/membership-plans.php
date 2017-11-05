<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <?php include("title.php");?>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700' rel='stylesheet' type='text/css'>

    <link href="css/epoch.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- SugarRush CSS -->
    <!-- <link href="css/sugarrush.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="">
    <div class="animsition">  
    
    <?php include("sidebar.php");?>


      <main id="playground">

            
      
         <?php include("top.php");?>
   


        <!-- PAGE TITLE -->
        <section id="page-title" class="row">

          <div class="col-md-8">
            <h1>Membership Plans</h1>
            <!--<p><a href="#" target="_blank" class="btn btn-danger btn-sm">DataTables documentation</a></p>-->
          </div>

          <div class="col-md-4">

            <ol class="breadcrumb pull-right no-margin-bottom">
              <li><a href="#">Membership Plans</a></li>
            </ol>

          </div>
        </section> <!-- / PAGE TITLE -->

        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">

              <section class="panel panel-primary">
                <header class="panel-heading">
                  <h4 class="panel-title">Membership Plans</h4>
                </header>
                <div class="panel-body">

                  <table width="100%" class="table table-bordered table-striped table-hover" style="font-weight:bold;">
                  <tr style="background:#0f527d; color:#fff;">
                    <td>Membership Plans</td>
                    <td colspan="2">Prospect Membership</td>
                    <td colspan="2">Client Membership</td>
                    <td colspan="2">Marketer Membership</td>
                    <td colspan="2">Networker Membership</td>
                  </tr>
                  <tr style="background:#0f527d; color:#fff;">
                    <td>Description</td>
                    <td colspan="2">Didn't purchase yet</td>
                    <td colspan="2">Purchase as Client</td>
                    <td colspan="2">Purchase as Marketer</td>
                    <td colspan="2">Purchase as Networker</td>
                  </tr>
                  <tr style="background:#0f527d; color:#fff;">
                    <td>Commission Status</td>
                    <td>*Locked</td>
                    <td>**Free</td>
                    <td>*Locked</td>
                    <td>**Free</td>
                    <td>*Locked</td>
                    <td>**Free</td>
                    <td>*Locked</td>
                    <td>**Free</td>
                  </tr>
                  <tr>
                    <td>Direct Commission</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                  </tr>
                  <tr>
                    <td>Best Client Moneybox</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                  </tr>
                  <tr>
                    <td>Team Building Commission</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                  </tr>
                  <tr>
                    <td>Best Marketer Moneybox</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                  </tr>
                  <tr>
                    <td>Matching Commission</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                  </tr>
                  <tr>
                    <td>Matching Center Upgrade</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                  </tr>
                  <tr>
                    <td>Voucher Bounus</td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                    <td>&nbsp;</td>
                    <td><i class="fa fa-check green"></i></td>
                  </tr>
                </table>
                <br />
                <h4>* Locked = Waiting of Purchasing to be transferred according immmediatly to wallet and become usable.</h4>
                
                <h4>** Free = Transferable to Wallet immediatly and usable.</h4>
				<br />

                </div>
              </section>
            

            </div> <!-- /col-md-6 -->

  

          </div>

      
        </div> <!-- / container-fluid -->


     <?php include("footer.php");?>


    </main> <!-- /playground -->


    <!-- - - - - - - - - - - - - -->
    <!-- start of NOTIFICATIONS  -->
    <!-- - - - - - - - - - - - - -->
     <?php include("rightside-panel.php");?>
    <!-- - - - - - - - - - - - - -->
    <!-- start of NOTIFICATIONS  -->
    <!-- - - - - - - - - - - - - -->

    <div class="scroll-top">
      <i class="ti-angle-up"></i>
    </div>
  </div> <!-- /animsition -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/raphael-min.js"></script>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/jquery.animsition.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>

  <script src="js/includes.js"></script>
  <script src="js/sugarrush.js"></script>
  <script src="js/sugarrush.tables.js"></script>
  </body>
</html>