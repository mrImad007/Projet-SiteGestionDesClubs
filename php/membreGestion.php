

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css'>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script>$(document).ready(function () {
      $('#example').DataTable();
  });</script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="assets/responsive.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Open+Sans:ital@1&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>YCclubs</title>
</head>
<body>
        <!-- start navigation -->
        <div class="nav">
            <div class="logo" style="margin: 0;">
                <a href="index.php" style="color: black;">
                <img src="logo.png" alt="logo">
            </a>
            </div>
            <div class="menu">
                <a href="gestionClub.php">Clubs</a>
                <a href="gestionMembre.php">Membres</a>
            </div>
        </div><br>
        <!-- end navigation -->
        
    <div class="cont" style="width:100%;">
        <table id="example" class="table custom-table" style="width:100% !important;">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Age</th>
                    <th style="width: 200px;">Role</th>
                    <th style="width: 300PX;">Club</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <img src="https://media-exp1.licdn.com/dms/image/D4E03AQHElWPpC3E_ug/profile-displayphoto-shrink_800_800/0/1666309256557?e=1674086400&v=beta&t=2ZTRh9dE5msRIrrdQZ29pJ3W4lVnZV1WzAGtUrTmTwA" style="width: 50px; height:50px; border-radius: 200px;"/></td>
                    <td>ZAOUI Imad Eddine</td>
                    <td>Ada lovelance</td>
                    <td>20 ans</td>
                    <td>Apprenant</td>
                    <td >
                    <a href="member.html" >Add Club</a>
                </td> 
              </tr>
              <tr>
                <td>
                    <img src="https://media-exp1.licdn.com/dms/image/D4E03AQHElWPpC3E_ug/profile-displayphoto-shrink_800_800/0/1666309256557?e=1674086400&v=beta&t=2ZTRh9dE5msRIrrdQZ29pJ3W4lVnZV1WzAGtUrTmTwA" style="width: 50px; height:50px; border-radius: 200px;"/></td>
                      <td>ZAOUI Imad Eddine</td>
                      <td>Ada lovelance</td>
                      <td>20 ans</td>
                       <td>Apprenant</td>
                       <td >Yc club<div class="dropdown"style="float:right;">
                         <a  color:black"><i class="fa fa-remove"></i></a>
                         <div class="dropdown-content" style="width: 350px; right: 0px; bottom: 5px;">
                         <p>Remove ZAOUI Imad Eddine from  Yc club</p>
                         <a href="">Remove</a>
                       </div> 
                       </td> 
                       </tr>
            </tfoot>
        </table>
    </div>
    <footer id="footer"  class="footer">
        <div class="footer-social">
            <a href="https://www.facebook.com/kenza.zafer.9"><i class="fa fa-facebook"></i></a>	
            <a href="https://www.instagram.com/kenza_zafer/"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/kenza-zafer-05a24921b/"><i class="fa fa-linkedin"></i></a>	
        </div>
        <p style="font-family:Inter ;">
            &copy;copyright. designed and developed by <a style="color:#0384EE;">ZAOUI Imad Eddine</a> 
        </p><!--/p-->
</footer>
</body>
</html>