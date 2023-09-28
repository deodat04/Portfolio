<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="project.css">
    <title>Portfolio | deodat04</title>
</head>

<body>

    <header>
        <?php include_once('header.php'); ?>
    </header>
    <section>
        <div class="main">
            <div class="detail"><!---Sarah -->
                <h1><span>Hi, It's Me</span> <br> I'm <span style="color:#00E8F8;">@deodat04</span></h1>
                <p style="font-weight : 600; letter-spacing: 0.2rem;">Fullstack Developer <br> Analyste SOC <br> Design
                    graphic </p>

                <div class="social">
                    <a href="https://github.com/deodat04"><i class="bi bi-github"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="http://linkedin.com/in/déodat-adandedjan-4b2672241"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
            <div class="images">
                <img src="images/mitm2.jpg" alt="" width="100%">
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

    <div id="cursor">
        <ul class='tags-cloud'>
            <li class='tag'> <span class='wrap'>HTML</span> </li>
            <li class='tag'> <span class='wrap'>CSS</span> </li>
            <li class='tag'> <span class='wrap'>JavaScript</span> </li>
            <li class='tag'> <span class='wrap'>Python</span> </li>
            <li class='tag'> <span class='wrap'>C</span> </li>
            <li class='tag'> <span class='wrap'>C++</span> </li>
            <li class='tag'> <span class='wrap'>Php</span> </li>
            <li class='tag'> <span class='wrap'>Bootstrap</span> </li>
            <li class='tag'> <span class='wrap'>Java</span> </li>
            <li class='tag'> <span class='wrap'>Illustrator</span> </li>
            <li class='tag'> <span class='wrap'>Photoshop</span> </li>
            <li class='tag'> <span class='wrap'>Xd</span> </li>
            <li class='tag'> <span class='wrap'>Linux</span> </li>
            <li class='tag'> <span class='wrap'>Github</span> </li>
            <li class='tag'> <span class='wrap'>Canvas</span> </li>
            <li class='tag'> <span class='wrap'>Cybersecurity</span> </li>
            <li class='tag'> <span class='wrap'>Wordpress</span> </li>
            <li class='tag'> <span class='wrap'>SpringBoot</span> </li>
            <li class='tag'> <span class='wrap'>MySql</span> </li>
            <li class='tag'> <span class='wrap'>Sketchup</span> </li>
            <li class='tag'> <span class='wrap'>Bash</span> </li>
            <li class='tag'> <span class='wrap'>Terminal</span> </li>
            <li class='tag'> <span class='wrap'>VirtualBox</span> </li>
        </ul>
    </div>

<script>
     class FibonacciSphere {
            #points;

            get points() {
                return this.#points;
            }

            constructor(N) {
                this.#points = [];

                const goldenAngle = Math.PI * (3 - Math.sqrt(5));

                for (let i = 0; i < N; i++) {
                    const y = 1 - (i / (N - 1)) * 2;
                    const radius = Math.sqrt(1 - y ** 2);
                    const a = goldenAngle * i;
                    const x = Math.cos(a) * radius;
                    const z = Math.sin(a) * radius;

                    this.#points.push([x, y, z]);
                }
            }
        }


        class TagsCloud {
            #root;
            #size;
            #sphere;
            #tags;
            #rotationAxis;
            #rotationAngle;
            #rotationSpeed;
            #frameRequestId;

            constructor(root) {
                this.#root = root;
                this.#size = this.#root.offsetWidth;
                this.#tags = root.querySelectorAll('.tag');
                this.#sphere = new FibonacciSphere(this.#tags.length);
                this.#rotationAxis = [1, 0, 0];
                this.#rotationAngle = 0;
                this.#rotationSpeed = 0;

                this.#updatePositions();
                this.#initEventListeners();
                this.#root.classList.add('-loaded');
            }

            #initEventListeners() {
                window.addEventListener('resize', this.#updatePositions.bind(this));
                document.addEventListener('mousemove', this.#onMouseMove.bind(this));
            }

            #updatePositions() {
                const sin = Math.sin(this.#rotationAngle);
                const cos = Math.cos(this.#rotationAngle);
                const ux = this.#rotationAxis[0];
                const uy = this.#rotationAxis[1];
                const uz = this.#rotationAxis[2];

                const rotationMatrix = [
                    [
                        cos + (ux ** 2) * (1 - cos),
                        ux * uy * (1 - cos) - uz * sin,
                        ux * uz * (1 - cos) + uy * sin,
                    ],
                    [
                        uy * ux * (1 - cos) + uz * sin,
                        cos + (uy ** 2) * (1 - cos),
                        uy * uz * (1 - cos) - ux * sin,
                    ],
                    [
                        uz * ux * (1 - cos) - uy * sin,
                        uz * uy * (1 - cos) + ux * sin,
                        cos + (uz ** 2) * (1 - cos)
                    ]
                ];

                const N = this.#tags.length;

                for (let i = 0; i < N; i++) {
                    const x = this.#sphere.points[i][0];
                    const y = this.#sphere.points[i][1];
                    const z = this.#sphere.points[i][2];

                    const transformedX =
                        rotationMatrix[0][0] * x
                        + rotationMatrix[0][1] * y
                        + rotationMatrix[0][2] * z;
                    const transformedY =
                        rotationMatrix[1][0] * x
                        + rotationMatrix[1][1] * y
                        + rotationMatrix[1][2] * z;
                    const transformedZ =
                        rotationMatrix[2][0] * x
                        + rotationMatrix[2][1] * y
                        + rotationMatrix[2][2] * z;

                    const translateX = this.#size * transformedX / 2;
                    const translateY = this.#size * transformedY / 2;
                    const scale = (transformedZ + 2) / 3;
                    const transform =
                        `translateX(${translateX}px) translateY(${translateY}px) scale(${scale})`;
                    const opacity = (transformedZ + 1.5) / 2.5;

                    this.#tags[i].style.transform = transform;
                    this.#tags[i].style.opacity = opacity;
                }
            }

            #onMouseMove(e) {
                const rootRect = this.#root.getBoundingClientRect();
                const deltaX = e.clientX - (rootRect.left + this.#root.offsetWidth / 2);
                const deltaY = e.clientY - (rootRect.top + this.#root.offsetHeight / 2);
                const a = Math.atan2(deltaX, deltaY) - Math.PI / 2;
                const axis = [Math.sin(a), Math.cos(a), 0];
                const delta = Math.sqrt(deltaX ** 2 + deltaY ** 2);
                const speed = delta / Math.max(window.innerHeight, window.innerWidth) / 10;

                this.#rotationAxis = axis;
                this.#rotationSpeed = speed;
            }

/*
            #update() {
                this.#rotationAngle += 0.01;  // Incrémente l'angle de rotation
                this.#updatePositions();      // Met à jour les positions
                requestAnimationFrame(this.#update.bind(this)); // Appelle à nouveau cette méthode
            }
            */
            
                #update() {
                    this.#rotationAngle += this.#rotationSpeed;
            
                    this.#updatePositions();
                }
        
            start() {
                this.#update();

                this.#frameRequestId = requestAnimationFrame(this.start.bind(this));
            }

            stop() {
                cancelAnimationFrame(this.#frameRequestId);
            }
        }


        function main() {
            {
                const root = document.querySelector('.tags-cloud');
                const cloud = new TagsCloud(root);

                cloud.start();
            }
            
                {
                    const cursor = document.getElementById('cursor');
                    const isActivated = false;
            
                    document.addEventListener('mousemove', (e) => {
                        if (!isActivated) {
                            cursor.classList.add('-activated');
                        }
            
                        cursor.style.transform =
                            `translateX(${e.clientX}px) translateY(${e.clientY}px)`;
                    });
                }
            
        }

        document.addEventListener('DOMContentLoaded', () => {
            main();
        });

</script>
    
    <script src="project.js"></script>
</body>
<br>
<br>
<br>
<footer>
    <?php include_once('footer.php'); ?>
</footer>

</html>