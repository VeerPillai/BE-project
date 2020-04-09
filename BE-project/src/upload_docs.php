
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eduGO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="fontawesome\css\all.css" rel="stylesheet"> 


    <!-- Google Fonts -->
    

    <!-- Bootstrap CSS File -->
    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">


    <!-- UserDefined JavaScript -->
    <script src="js/main.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <!--==========================
                Header
    ============================-->
    <header id="header" style="">

    </header>
 
<nav class="navigation navbar navbar-expand-lg sticky-top">
  <a class="navbar-brand" href="index.php"><img style="height: 60px; padding-bottom:10px;" src="images/logo2.png" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">
      <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
    </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav mr-auto">
      <a class="nav-item nav-link active" href="index.html">HOME</a>
      <a class="nav-item nav-link" href="browsecourses.php">COURSES</a>
      <a class="nav-item nav-link" href="aboutus.php">ABOUT US</a>

    </div>

    <div class="navbar-right navbar-nav">
        <button type="submit" name="logout-submit" class="nav-buttons btn btn-primary"><a class="nav-item nav-link" href="#logout">LOGOUT</a></button>
<!--          
        <button type="submit" class="nav-buttons btn btn-primary"><a class="nav-item nav-link" href="login.html">LOGIN</a></button>
        <button type="submit" class="nav-buttons btn btn-primary"><a class="nav-item nav-link" href="signup.html">SIGN UP</a></button>
      -->
    </div>
  </div>

   
</nav>

<body>
    <div class="indbody">
        <div class="container11">
            <div class="jumbotron jumbotron-fluid" style="text-align: left;">
                <div class="contrainer">
                    <h1 class="display-5" id="fsize">Upload your documents here</h1>
                    <p class="lead">Engineering Concepts on the GO!!</p>
                    <input type="radio" id="Upload" name = "UploadDOC" value="upload">
                    <label for="">Upload your own documents</label>
                    <br>
                    <input type="radio" id="Upload" name = "UploadDOC" value="useourown">
                    <label for="">Use our documents</label>
                    <br> <br>

                    <!-- Depending on the value in radio display  either upload doc or select from already present -->
                    
                    <div class="form-group">
                        <label for="Upload_document">Upload your text document here</label>
                        <input type="file" class="form-control" id="Upload_document" name="phone">
                    </div>

                    <label for="">Choose Document :  </label>
                    <!-- Select Docs from db -->
                    <select name="Docs" id="">
                        <option value="t1">text1</option>
                        <option value="t2">text2</option>
                        <option value="t3">text3</option>
                        <option value="t4">text4</option>
                    </select>      <br>              
                    <button type="submit" class="btn btn-primary" name="doc_submit">Submit</button>
                    <button class="btn btn-primary">Appear for test</button>
                </div>
            </div>
        </div>
    </div>
</body>
<footer id="footer">
    <div class="container-fluid text-md-left" style="padding-top: 30px;">
        <div class="row">
            <div class="col-lg-10 col-md-12 footer-left-desc" style="padding-left: 40px;">
                <h5 class="foorter-heading">eduGO Tech</h5>
                <p>Engineering Concepts on the GO!!</p>
                <p>Start Learning from the best!</p>
            </div>

            

            <div class="col-lg-2 col-md-12 footer-links">
                <ul class="">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="browsecourses.php">Courses</a>
                    </li>
                    <li>
                        <a href="aboutus.php">About us</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr style="background-color: white;">
    </div>
    
    <!-- Copyright -->
    <div class="copyright center">© 2019 Copyright:
        <a href="index.html"> eduGO Tech</a>
    </div>
    <!-- Copyright -->  
</footer>

</body>
</html>