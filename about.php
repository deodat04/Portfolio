<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="project.css">
    <title>About | deodat04</title>
</head>

<body>

    <header>
        <?php include_once('header.php'); ?>
    </header>

    <!-- ----------ABOUT---------- -->
    <div id="about">
        <div class="containeur">
            <div class="row">
                <div class="about-col-1">
                    <img src="images/mitm4.jpg">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p> Je m'appelle Déodat ADANDEDJAN, nom de dev : @deodat04. Ma passion est tournée vers tout ce qui
                        touche à l'innovation, à la technologie et aux sciences informatiques. Très vite après
                        l'obtention de mon Baccalauréat série scientifique, j'ai commencé mes recherches dans cet
                        univers si captivant. J'ai dès lors entamé mes études à l'Institut de Formation et de Recherche
                        en Informatique (IFRI) en spécialité de Génie Logiciel. Actuellement en fin de 2ème année de
                        licence, j'ai pu apprendre énormément et développer plusieurs compétences. Cela ne m'a pas
                        empêché de suivre des formations dans d'autres branches de l'informatique, telles que le design
                        graphique et la cybersécurité (IBM). Je n'ai pas fini d'apprendre et d'explorer ce grand univers
                        qu'est l'informatique mais avec de la détermination tout est possible. </p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="openTab('skills')">Skills</p>
                        <p class="tab-links" onclick="openTab('experience')">Experience</p>
                        <p class="tab-links" onclick="openTab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>Développement d'applications</span><br>Développement d'application desktop</li>
                            <li><span>Développement Web</span><br>Développement d'application Web</li>
                            <li><span>UI/UX</span><br>Design d'interfaces web et d'applications</li>
                            <li><span>Analyse SOC</span><br>Analyse de systemes pour la sécurité</li>

                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>2021 - Current</span><br>UI/UX Design training at ET Institute</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>Juillet 2023</span><br> 2ème annnée de license en Génie Logiciel à l'IFRI
                                (Institut de Formation et de Recherche en Informatique)</li>
                            <li><span>Juillet 2023</span><br> NSE 2 Network Security Associate by Fortinet </li>
                            <li><span>Juin 2023</span><br> NSE 1 Network Security Associate by Fortinet </li>
                            <li><span>Juin 2023</span><br> Badge Cybersecurity Fundamentals by IBM, ITExperience INC
                            </li>
                            <li><span>Décembre 2022 à Janvier 2023</span><br>Formation en Design graphique</li>
                            <li><span>Juillet 2022</span><br> Formation en Anglais à TBC Africa (A2 elementary level)
                            </li>
                            <li><span>2021</span><br>BAC D au College Catholique Père Aupiais(Mention Bien)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <script>
        var tabLinks = document.getElementsByClassName('tab-links');
        var tabContents = document.getElementsByClassName('tab-contents');

        function openTab(tabName) {
            for (tabLink of tabLinks) {
                tabLink.classList.remove('active-link');
            }
            for (tabContent of tabContents) {
                tabContent.classList.remove('active-tab');
            }
            event.currentTarget.classList.add('active-link');
            document.getElementById(tabName).classList.add('active-tab');
        }

        // JavaScript for handling the mobile navigation menu
        document.querySelector('.fas.fa-bars').addEventListener('click', function () {
            document.querySelector('nav ul').classList.toggle('show');
        });

        document.querySelector('.fas.fa-times').addEventListener('click', function () {
            document.querySelector('nav ul').classList.remove('show');
        });

    </script>
</body>
<br>
<br>
<br>
<footer>
    <?php include_once('footer.php'); ?>
</footer>

</html>