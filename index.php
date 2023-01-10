<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  
                <form method="POST" action="conf/autentikasi.php" class="needs-validation" novalidate="">
                  <div class="form-group">
              
                    <table border="1">
                      <tr>
                        <td rowspan="5"><img src="kunci.jpg" width="130px"></td>
                      </tr>
                      <tr>
                        <td><label>username</label></td>
                        <td><input type="text" name="username" class="form-control"></td>
                        
                      </tr>
                  
                       <tr>
                           <td><label>level </label></td>
                           <td><select name=""  id="", class="form-control">
                             <option value="satu"></option>
                              <option value="dua"></option>
                           </select></td>
                      </tr>
                      <tr>
                          <td><label>password</label></td>
                          <td><input type="password" name="password" class="form-control"></td>
                     </tr>
                     <tr>
                      
                      <td><input type="submit" value="login" name="proses_login"></td>
                      
                       
                       <td><input type="submit" value="Riset" name=""></td>

      
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
