<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Hoonigan Motoring</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="all" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all" />
</head>

<body>
    <nav class="light-blue lighten-1">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.html" class="brand-logo center"><i class="material-icons prefix">directions_car</i></a>
        </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <h3 class="header center">Race Participants:</h3>
            <table class="highlight">
                <thead>
                    <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">Age</th>
                        <th data-field="price">Email</th>
                        <th data-field="price">Vehicle</th>
                        <th data-field="price">Options</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <?php print $_POST['name']?>
                        </td>
                        <td>
                            <?php print $_POST['age']?>
                        </td>
                        <td>
                            <?php print $_POST['email']?>
                        </td>
                        <td>
                            <?php print $_POST['vehicle']?>
                        </td>
                        <td>
                            <?php 
                                $options = $_POST['options'];
                                print_r(implode(", ",$options));
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>


        </div>
    </div>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

</body>

</html>