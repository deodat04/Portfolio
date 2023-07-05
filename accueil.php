<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
</head>

<body>
    <header>
        <?php include_once('header.php'); ?>
    </header>

    <section>
        <div class="main">
            <div class="detail"><!---Sarah -->
                <h1><span>Hi, It's Me</span> <br> I'm <span style="color:#00E8F8;">@deodat04</span></h1>
                <p>Fullstack Developer <br> printf("Welcome in my world"); </p>
                <div class="social">
                    <a href="https://github.com/deodat04"><i class="bi bi-github"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
            <div class="images">
                <img src="mitm2.jpg" alt="" width="100%">
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

    <div id="title_skills">
        <h2>@deodat04 skills</h2>
    </div>

    <div class="container">
        <div class="column">
            <a href="#"><i class="bi bi-instagram"></i></a>
            <h2>Fullstack Developer</h2>
            <p>I like to code things from scratch, and enjoy bringing ideas to life in the browser.</p>
            <p class="Languages">Languages I speak:</p>
            <p>HTML, Pug, Slim, CSS, Sass, Git</p>
            <p id="tools_dev">Dev Tools:</p>
            <ul>
                <li>Atom</li>
                <li>Bitbucket</li>
                <li>Bootstrap</li>
                <li>Bulma</li>
                <li>Codekit</li>
                <li>Github</li>
                <li>Surge</li>
                <li>Terminal</li>
                <li>Vercel</li>
            </ul>
        </div>

        <div class="column">
            <a href="#"><i class="bi bi-instagram"></i></a>
            <h2>Analyste SOC</h2>
            <p>I like to code things from scratch, and enjoy bringing ideas to life in the browser.</p>
            <p class="Languages">Languages I speak:</p>
            <p>HTML, Pug, Slim, CSS, Sass, Git</p>
            <p id="tools_soc">Analyste SOC Tools:</p>
            <ul>
                <li>Atom</li>
                <li>Bitbucket</li>
                <li>Bootstrap</li>
                <li>Bulma</li>
                <li>Codekit</li>
                <li>Github</li>
                <li>Surge</li>
                <li>Terminal</li>
                <li>Vercel</li>
            </ul>
        </div>

        <div class="column ">
            <a href="#"><i class="bi bi-instagram"></i></a>
            <h2>Designer</h2>
            <p>I like to code things from scratch, and enjoy bringing ideas to life in the browser.</p>
            <p class="Languages">Languages I speak:</p>
            <p>HTML, Pug, Slim, CSS, Sass, Git</p>
            <p id="tools_design">Designer Tools:</p>
            <ul>
                <li>Atom</li>
                <li>Bitbucket</li>
                <li>Bootstrap</li>
                <li>Bulma</li>
                <li>Codekit</li>
                <li>Github</li>
                <li>Surge</li>
                <li>Terminal</li>
                <li>Vercel</li>
            </ul>
        </div>
    </div>
    <section class="my work">
        <div class="contain">
            <h1 class="work">My Recent Work</h1>
            <h2>Here are a few past design projects I've worked on. Want to see more? <a class="has-text-weight-normal"
                    href="mailto:deodatadandedjan2000@gmail.com">Email me</a>.</h2>

            <div class="myproject">
                <div class="listproject">
                    <div class="list1">
                        <div id="project1">
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <h1>Application | C++</h1>
                        </div>
                        <div id="project2">
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <h1>Design | Web Print</h1>

                        </div>
                        <div id="project3">
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <h1>Python | turtle</h1>
                            <br>

                        </div>
                    </div>

                    <div class="list2">
                        <div id="project4">
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <h1>Maquette Application</h1>

                        </div>
                        <div id="project5">
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <h1>Interface Web</h1>

                        </div>
                        <div id="project6">
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <h1>Certification | Cybersecurity</h1>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script src="script.js"></script>
    <script src="project.js"></script>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
</style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer>
    <?php include_once('footer.php'); ?>
</footer>

</html>