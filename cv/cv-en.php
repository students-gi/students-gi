<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV-Manual-<?= date('Ymd') ?></title>
    <link rel="stylesheet" href="css/main.min.css">
</head>

<?php include_once "./functions.php"; ?>

<body>

    <page id="firstPage" class="cv" size="a4" layout="portrait">
        <aside class="sidebar">
            <section class="top">
                <img src="img/profile.jpg" alt="" class="pfp">
                <h1 class="name">Gatis Ieviņš</h1>
                <h3 class="job">Web developer</h3>
            </section>

            <!--
            <section class="identification">
                <div class="icon">
                    <?= embed_svg_element(
                        "img/icons/identification-card-circled.svg") ?>
                </div>
                <h2 class="title">Identification</h2>
                <div class="content">
                    <div class="label">Gender:</div>
                    <div class="text">Male</div>
                    <div class="label">Date of Birth:</div>
                    <div class="text">22/11/2001</div>
                    <div class="label">Nationality:</div>
                    <div class="text">Latvian</div>
                </div>
            </section>
            -->

            <section class="contact">
                <div class="icon">
                    <?= embed_svg_element(
                        "img/icons/address-book-circled.svg" ) ?>
                </div>
                <h2 class="title">Contact info</h2>
                <div class="content">
                    <div class="label icon">
                        <?= embed_svg_element(
                            "img/icons/envelope-simple.svg" ) ?>
                    </div>
                    <a href="mailto:personal@maskless.id.lv" class="text">personal@maskless.id.lv</a>
                    <div class="label icon">
                        <?= embed_svg_element(
                            "img/icons/phone.svg" ) ?>
                    </div>
                    <div class="text">+371 277 22 983</div>
                    <div class="label icon">
                        <?= embed_svg_element(
                            "img/icons/linkedin-logo.svg" ) ?>
                    </div>
                    <a href="https://www.linkedin.com/in/gatis-ievins/" class="text">linkedin.com/in/gatis-ievins/</a>
                    <div class="label icon">
                        <?= embed_svg_element(
                            "img/icons/github-logo.svg" ) ?>
                    </div>
                    <a href="https://github.com/students-gi/" class="text">github.com/students-gi/</a>
                </div>
            </section>

            <section class="certificates">
                <div class="icon">
                    <?= embed_svg_element(
                        "img/icons/certificate-circled.svg" ) ?>
                </div>
                <h2 class="title">TL;DR Certificates</h2>
                <div class="content">
                    <div class="node">
                        <div class="label">Google UX Design Specialization by Google
                        </div>
                        <div class="text">
                            <div class="about">
                                <a
                                    href="https://www.coursera.org/account/accomplishments/professional-cert/WWJBUEE3GZJ6"
                                    >Issued by Coursera</a>
                            </div>
                        </div>
                    </div>
                    <div class="node">
                        <div class="label">CodinGame Certification - PHP
                        </div>
                        <div class="text">
                            <div class="about">
                                <a
                                    href="https://www.codingame.com/certification/Jvte9mrnHRDF0ZFFD2C3WA"
                                    >Issued by CodinGame</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>

        <main class="content">
            <section class="work">
                <div class="icon">
                    <?= embed_svg_element(
                        "img/icons/briefcase-circled.svg" ) ?>
                </div>
                <h2 class="title">Work experience</h2>
                <div class="content">
                    <div class="node dashed">
                        <div class="label">Software Developer [Full-time]</div>
                        <div class="text">
                            <div class="about">CODELEX -
                                <a href="https://www.codelex.io/en/partners">Website</a>
                            </div>
                            <div class="references description">
                                <div class="label">References</div>
                                <label>[Owner] Sandris Artemjevs:</label> +371 298 948 39<br />
                                <label>[Mentor] Jānis Tumpelis:</label> +371 298 948 39<br />
                            </div>
                            <div class="description">
                                <div class="label">Job tasks</div>
                                - Creation of a RESTful API with CRUD functionality<br />
                                - In-memory and SQL database manipulations<br />
                                - Exception handling for code robustness<br />
                                - Development and utilization of existing and self-made Unit and Integration tests
                            </div>
                            <div class="date">May 2023 - Now</div>
                        </div>
                    </div>

                    <div class="node">
                        <div class="label">Front-end programmer [Internship]</div>
                        <div class="text">
                            <div class="about">Files.fm -
                                <a href="https://files.fm/">Website</a>
                            </div>
                            <div class="description">
                                <div class="label">Job tasks</div>
                                - Adapted UI according to design document<br />
                                - Developed UI from design document<br />
                                - AJAX scripts
                            </div>
                            <div class="date">Sept. 2022 - Dec. 2022</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="coding">
                <div class="icon">
                    <?= embed_svg_element(
                        "img/icons/code-circled.svg" ) ?>
                </div>
                <h2 class="title">Coding knowledge</h2>
                <div class="content">
                    <div class="text">
                        <div class="description">
                            <div class="label">Languages</div>
                            HTML, CSS (SCSS, Sass, Bootstrap, W3.CSS, Pure),
                            JavaScript (TypeScript, Twig),
                            PHP (7.4-8.0),
                            SQL,
                            Java (Maven & Gradle, Spring Boot)
                        </div>
                        <div class="description">
                            <div class="label">Databases</div>
                            MySQL, MariaDB, Microsoft SQL
                        </div>
                        <div class="description">
                            <div class="label">Web frameworks</div>
                            Laravel, Winter CMS, CouchCMS, Wordpress
                        </div>
                        <div class="description">
                            <div class="label">Work/version control</div>
                            git (GitHub), Jira
                        </div>
                    </div>
                </div>
            </section>

            <section class="education">
                <div class="icon">
                    <?= embed_svg_element(
                        "img/icons/graduation-cap-circled.svg" ) ?>
                </div>
                <h2 class="title">Education</h2>
                <div class="content">
                    <!--
                    <div class="node">
                        <div class="label">General secondary education</div>
                        <div class="text">
                            <div class="about">Jelgava State gymnasium -
                                <a href="http://https://vgim.jelgava.lv">Website</a>
                            </div>
                            <div class="date">Sept. 2017 - Jul. 2020</div>
                        </div>
                    </div>
                    -->

                    <div class="node dashed">
                        <div class="label">First level professional qualification of “Programmer”</div>
                        <div class="text">
                            <div class="about">University of Latvia, Faculty of Computing -
                                <a href="https://df.lu.lv/">Website</a>
                            </div>
                            <div class="date">Sept. 2020 - Now</div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </page>

    <page id="secondPage" class="cv" size="a4" layout="portrait">
        <main class="content">
            <section class="certificates">
                <div class="icon">
                    <?= embed_svg_element(
                        "img/icons/certificate-circled.svg" ) ?>
                </div>
                <h2 class="title">Certificates</h2>
                <div class="content">
                    <div class="node">
                        <div class="label">Google UX Design Specialization by Google
                            <div class="date">June 27, 2023</div>
                        </div>
                        <div class="text">
                            <div class="about">Issued by Coursera -
                                <a
                                    href="https://www.coursera.org/account/accomplishments/professional-cert/WWJBUEE3GZJ6"
                                    >Certificate</a>
                            </div>
                            <div class="description">
                                Went through the design process 3 times, developing skills in UX/UI design:<br />
                                - Empathizing with users, defining pain points & building personas<br />
                                - Ideating solutions<br />
                                - Creating wireframes and prototypes<br />
                                - Conducting usability testing on designs<br />
                                <separator></separator>
                                Utilized Figma and Adobe XD to create a professional UX portfolio with three projects:<br />
                                - Mobile app design<br />
                                - Responsive website design<br />
                                - Cross-platform experience design<br />
                            </div>
                        </div>
                    </div>
                    <div class="node">
                        <div class="label">CodinGame Certification - PHP
                            <div class="date">July 24, 2023</div>
                        </div>
                        <div class="text">
                            <div class="about">Issued by CodinGame -
                                <a
                                    href="https://www.codingame.com/certification/Jvte9mrnHRDF0ZFFD2C3WA"
                                    >Certificate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </page>

</body>

</html>