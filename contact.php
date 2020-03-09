<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Contact Us | Ace in the Hole Multisports Events</title>
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
                <a href="registration.php">Register</a>
                <a href="whattobring.php">What to Bring</a>
                <a href="faq.php">FAQs</a>
                <a href="#" class="active">Contact</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>

        <figure id="hero">
            <div id="titlecontainer">
                <h1>Ace in the Hole</h1>
                <hr>
                <h3>Contact Us</h3>
            </div>
        </figure>
    </header>

    <main class="section group">

        <article class="col span_12_of_12">
            <p>Contact Ace in the Hole with questions or comments.</p>
            <div id="form-container">

                <form id="aith_form" method="post" action="contactengine.php">
                    <ul>
                        <li id="li_1">
                            <label class="description" for="element_1">Name:</label>
                            <input type="text" name="Name" id="element_1" maxlength="50" required />
                        </li>

                        <li id="li_4">
                            <label class="description" for="Email">Email:</label>
                            <input type="text" name="Email" id="Email" maxlength="320" required />
                        </li>

                        <li id="li_9">
                            <label class="description" for="element_9">I am a/an</label>
                            <select class="element select medium" id="element_9" name="Designation" required>
                                <option value="" selected="selected"></option>
                                <option value="Athlete">Athlete</option>
                                <option value="Volunteer">Volunteer</option>
                                <option value="Interested Party">Interested Party</option>
                            </select>
                        </li>

                        <li id="li_6">
                            <label class="description" for="Message">Message:</label><br />
                            <textarea name="Message" rows="20" cols="20" id="Message" maxlength="2000" required></textarea>
                        </li>

                        <li class="formSubmit">
                            <input type="submit" name="submit" value="Submit" class="button_text submit-button" />
                        </li>

                    </ul>
                </form>

            </div>
        </article>

    </main>

    <footer>
        <a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/"><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.twitter.com/pcccas222"><i class="fab fa-twitter-square"></i></a>
        <p>Website design by Devin Zebertavage &copy; <?php echo date("Y"); ?></p>
    </footer>

    <script src="js/navbar.js"></script>

</body>

</html>
