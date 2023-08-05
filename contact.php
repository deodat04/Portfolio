<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_contactform/icon.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style_contactform/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="style_contactform/style.css">
    <title>Contact | deodat04</title>
</head>

<body>
    <header>
        <?php include_once('header.php'); ?>
    </header>

    <div class="content">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">

                    <div class="row justify-content-center">
                        <div class="col-md-6">

                            <h3 class="heading mb-4">Parlons de tout!</h3>
                            <p style="color:white;">Projet, opportunités, collaboration ou autres motifs? <br> <span style="font-weight: bold;" > Contactez-moi ! </span></p>

                            <p><img src="images/undraw-contact.svg" alt="Image" class="img-fluid"></p>
                        </div>
                        <div class="col-md-6">

                            <form class="mb-5" method="post" id="contactForm" name="contactForm" action="send-mail.php">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Your name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="email" id="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="7"
                                            placeholder="Write your message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" value="Send Message"
                                            class="btn btn-primary rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </form>

                            <div id="form-message-warning mt-4"></div>
                            <div id="form-message-success">
                                Your message was sent, thank you!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>



</body>
<footer>
    <?php include_once('footer.php'); ?>
</footer>

</html>