<!DOCTYPE html>
<html>
  
<head>
    <title>FOLLOWERS</title>
    <title>Web Technology Mini Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
  <style>
    logo {
      margin: 10px 34px;
    }

    #logo {
      height: 59px;
      margin: 3px 6px;
    }
  </style>
</head>
  
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img id="logo" src="MV1.jpg" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#verzeo"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="verzeo">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="visvesvaraya.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="mvabout.html">About</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="mveducation.html">Education</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="mvbook.html">Books</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="mvachivements.html">Achivements</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="insert.php">Subscribe</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <center>
    <div class="container mt-4">
    <h1>To Follow M.S Visveswaraya</h1>
    <form action="insert1.php" method="POST">
        <table>
            <tr>
                <td>Name :</td><br>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Phone No</td>
                <td>
                    <select name="phonecode" required>
                        <option selected hidden value="">Select Code</option>
                        <option value="+91">+91</option>
                        <option value="+1">+1</option>
                        <option value="+977">977</option>
                    </select>
                    <input type="text" name="phone" required>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    </div>
    </center>
</body>
  
</html>