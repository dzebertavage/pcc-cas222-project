<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Register | Ace in the Hole Multisports Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- NAVBAR ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- SOCIAL ICONS -->
    <script src="https://kit.fontawesome.com/531acaed37.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/col.css">
    <link rel="stylesheet" href="css/12cols.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Hind+Madurai%7CLora%7CMontserrat&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="courses.php">Courses</a>
                <a href="#" class="active">Register</a>
                <a href="whattobring.php">What to Bring</a>
                <a href="faq.php">FAQs</a>
                <a href="contact.php">Contact</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>

        <figure id="hero">
            <div id="titlecontainer">
                <h1>Ace in the Hole</h1>
                <hr>
                <h3>Register</h3>
            </div>
        </figure>
    </header>

    <main class="section group">

        <article class="col span_12_of_12">
            <table id="events">
                <tr>
                    <td>Long Course</td>
                    <td class="rightAlign">$240</td>
                </tr>
                <tr>
                    <td>Olympic</td>
                    <td class="rightAlign">$110</td>
                </tr>
                <tr>
                    <td>10K</td>
                    <td class="rightAlign">$50</td>
                </tr>
                <tr>
                    <td>Half Marathon</td>
                    <td class="rightAlign">$75</td>
                </tr>
                <tr>
                    <td>Sprint</td>
                    <td class="rightAlign">$90</td>
                </tr>
                <tr>
                    <td>Try-a-Tri</td>
                    <td class="rightAlign">$65</td>
                </tr>
            </table>
        </article>

        <aside class="col span_12_of_12">

            <h3>Cost Includes</h3>
            <p><em>NOTE: Tech shirts guaranteed to pre-registered participants only!</em></p>
            <div class="included-container">
                <ul id="included">
                    <li>Food &amp; beer</li>
                    <li>Access to the weekend's live entertainment &amp; Fitness Expo</li>
                    <li>Commemorative Finisher medal</li>
                    <li>Accurate Chip Timing for competitive races</li>
                    <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
                    <li>Post-event party &amp; entertainment</li>
                </ul>
            </div>
        </aside>

        <article class="col span_12_of_12">

            <h3>Packet Pick Up</h3>
            <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon.</p>
            <p><em>No day of event packet pick up.</em></p>
            <img src="img/run3.jpg" alt="people's legs as they run in a marathon">
        </article>

        <aside class="col span_12_of_12">
            <?php

        include 'includes/config.php';

        if(!empty($_POST['fullname'])){
            $fullname               = $_POST['fullname'];
            $age                    = $_POST['age'];
            $gender                 = $_POST['gender'];
            $athletevolunteer       = $_POST['athletevolunteer'];
            $event                  = $_POST['event'];
            $email                  = $_POST['email'];
            $emergencyname          = $_POST['emergencyname'];
            $emergencyphone         = $_POST['emergencyphone'];
            $accommodations         = $_POST['accommodations'];

            try {
                $sql = 'INSERT INTO registration SET
                fullname = :fullname,
                age = :age,
                gender = :gender,
                athletevolunteer = :athletevolunteer,
                event = :event,
                email = :email,
                emergencyname = :emergencyname,
                emergencyphone = :emergencyphone,
                accommodations = :accommodations';

                $s = $dbh->prepare($sql);
                $s->bindValue(':fullname', $_POST['fullname']);
                $s->bindValue(':age', $_POST['age']);
                $s->bindValue(':gender', $_POST['gender']);
                $s->bindValue(':athletevolunteer', $_POST['athletevolunteer']);
                $s->bindValue(':event', $_POST['event']);
                $s->bindValue(':email', $_POST['email']);
                $s->bindValue(':emergencyname', $_POST['emergencyname']);
                $s->bindValue(':emergencyphone', $_POST['emergencyphone']);
                $s->bindValue(':accommodations', $_POST['accommodations']);
                $s->execute();
            }
            catch (PDOException $e) {
                echo 'Error adding form data to database. ' . $e->GetMessage();
                exit();
            }

            echo '<h4>Registration Complete</h4><p>Your information has been submitted successfully. Thank you for registering with Ace in the Hole Multisports Events!</p>';
        }
        else {
            include 'includes/registration.php';
        }

        ?>
        </aside>

    </main>

    <footer>
        <a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/"><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.twitter.com/pcccas222"><i class="fab fa-twitter-square"></i></a>
        <p>Website design by Devin Zebertavage &copy; <?php echo date("Y"); ?></p>
    </footer>

    <script src="js/navbar.js"></script>

</body>

</html>
