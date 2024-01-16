<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sga512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJy7Yy7tcenmpDlypASozpmT/E0iPtmFIB46ZmdAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="project.css">
    <title>Project | deodat04</title>
</head>

<body>

    <header>
        <?php include_once('header.php'); ?>
    </header>
    <section>
        <div id="slider">
            <h2>@deodat04, vous souhaite la Bienvenue dans son univers</h2>
            <img src="images/dev3.jpg" alt="img1">
            <img src="images/mitm3.jpg" alt="img2">
            <img src="images/mitm4.jpg" alt="img3">
            <img src="images/dev4.jpg" alt="img4">
            <a href="button.html" class="slider-button">Bouton</a>
            <a href="contact.php"><button type="button">Créer votre univers</button></a>
        </div>
    </section>
    <br>
    <br>
    <br>
    <div class="presentation">
        <div class="design">
            <h4> Site web / Maquette <br> <br> <span style="font-size :1rem; letter-spacing: 0.5rem;color:#fff;">
                    Découvrez
                    mes récents projets réalisés </span> </h4>
            <br>
            <div class="container">
            <div class="work-list">
                <div class="work">
                    <img src="images/portfolio_@deodat04view.png" alt="">
                    <div class="layer">
                        <h2>PORTFOLIO</h2>
                        <p> HTML | CSS | JS </p>
                        <a href="https://github.com/deodat04"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/ecommerce_view.png" alt="">
                    <div class="layer">
                        <h2>MAQUETTE SITE E-COMMERCE</h2>
                        <p>With Figma</p>
                        <a href="https://github.com/deodat04"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/sportiva_view.png" alt="">
                    <div class="layer">
                        <h2>MAQUETTE SITE FITNESS</h2>
                        <p>With Figma</p>
                        <a href="https://github.com/deodat04"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <br>
        <br>
        <div class="design">
            <h4> Cybersecurity Certifications <br> <br> <span
                    style="font-size :1rem; letter-spacing: 0.5rem;color:#fff;"> Découvrez
                    mes certificats en cybersecurité </span> </h4>
            <br>
            <div class="work-list">
                <div class="certif">
                    <a href="https://training.fortinet.com/mod/customcert/verify_certificate.php?id=ktAE1Wewu1">
                        <img src="images/NSE1.png" alt="" style="max-width: 70%;">
                    </a>
                </div>
                <div class="certif">
                    <a href="https://training.fortinet.com/mod/customcert/verify_certificate.php?id=l3VkWhZRmT">
                        <img src="images/NSE2.png" alt="" style="max-width: 70%;">
                    </a>

                </div>
                <div class="certif">
                    <a href="https://training.fortinet.com/mod/customcert/verify_certificate.php?id=sY7us3u6Ca">
                        <img src="images/NSE3.png" alt="" style="max-width: 70%;">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <script src="project.js"></script>
</body>
<br>
<br>
<br>
<footer>
    <?php include_once('footer.php'); ?>
</footer>

</html>