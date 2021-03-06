<?php
    require 'db/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php echo $config['title'];?></title>
</head>

<body>
    <div id="wrapper">

        <header>
            <img class="logo" src="assets/img/logo.png" alt="">

            <button class="nav-btn open-btn">
                <i class="fas fa-bars"></i>
            </button>

            <nav id="nav">

                <div id="nav_groups">
                    <div id="nav_header">
                        <h2> <a href="/">HOME</a></h2>
                        <button class="nav-btn close-btn">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div id="_group" class="group">
                        <h2>Gruppe</h2>
                        <div class="nav_list_wrapper">
                            <ul>
                                <li> <a href="#">Menschen</a> </li>
                                <li> <a href="#">Die Strategien</a> </li>
                                <li> <a href="#">Die Kreativen</a> </li>
                                <li> <a href="#">Die Entwickler</a> </li>
                                <li> <a href="#">Networking</a> </li>
                                <li> <a href="#">Qualitätsstandart</a> </li>

                            </ul>
                        </div>
                    </div>

                    <div id="_expertise" class="group">
                        <h2>Expertise</h2>
                        <div class="nav_list_wrapper">
                            <ul>
                                <li> <a href="#">Digital Business Transformaton</a> </li>
                                <li> <a href="#">Produkte</a> </li>
                                <li> <a href="#">Akademie</a> </li>
                                <li> <a href="#">Nachchaltigkeit</a> </li>

                            </ul>
                        </div>
                    </div>

                    <div id="_markets" class="group">
                        <h2>Märkte</h2>
                        <div class="nav_list_wrapper">
                            <ul>
                                <li> <a href="#">Zielgebiet Dach</a> </li>
                                <li> <a href="#">Zielgruppe</a> </li>
                                <li> <a href="#">Branchen</a> </li>


                            </ul>
                        </div>
                    </div>

                    <div id="_mitmachen" class="group">
                        <h2>Mitmachen</h2>
                        <div class="nav_list_wrapper">
                            <ul>
                                <li> <a href="#">Kunde werden</a> </li>
                                <li> <a href="#">Investor werden</a> </li>
                                <li> <a href="#">Mitarbeiter werden</a> </li>
                                <li> <a href="#">Kollaborieren</a> </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
        </header>

        <main>

            <section id="welcome">

                <div class="welcome_message">
                    <h2>Willkommen..</h2>
                    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                </div>

                <article class="welcome_a">
                    <div class="img"> </div>

                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea tak</p>
                    </div>
                </article>

                <article class="welcome_a second">


                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea tak</p>
                    </div>

                    <div class="img"></div>
                </article>



            </section>

            <section id="second_part">

                <article class="not_paralax">
                    <p id="thinking_text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                </article>

            </section>

            <section id="news">

                <h2>NEWS</h2>

                <div id="wrapper_news_line">

                    <div class="news_item">
                        <div class="news_img"></div>
                        <div class="news_info">
                            <p class="pub_date">24.06.2021</p>
                            <h4>Das ist eine Headline</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur s..</p>
                            <a class="button_info" href="#">READ</a>
                        </div>
                    </div>
                    <div class="news_item">
                        <div class="news_img second"></div>
                        <div class="news_info">
                            <p class="pub_date">24.06.2021</p>
                            <h4>Das ist eine Headline</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur s..</p>
                            <a class="button_info" href="#">READ</a>
                        </div>
                    </div>
                    <div class="news_item">
                        <div class="news_img third"></div>
                        <div class="news_info">
                            <p class="pub_date">24.06.2021</p>
                            <h4>Das ist eine Headline</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur s..</p>
                            <a class="button_info" href="#">READ</a>
                        </div>
                    </div>
                    <div class="news_item">
                        <div class="news_img fourth"></div>
                        <div class="news_info">
                            <p class="pub_date">24.06.2021</p>
                            <h4>Das ist eine Headline</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur s..</p>
                            <a class="button_info" href="#">READ</a>
                        </div>
                    </div>

                </div>

            </section>

            <section class="vision">
                <h2>VISION</h2>
                <div class="vision_img">
                    <div class="playbeck_button">
                        <img src="assets/img/Ellipse 1@1X.png" alt="">
                        <div class="arrow-right"></div>
                    </div>


                </div>

                <form class="form" method='POST' action='handle.php'>

                    <div class="form-wrapper">
                        <div class="user-data">
                            <input type="text" name="name" placeholder="Name">
                            <input type="text" name="vorname" placeholder="Vorname">
                            <input type="text" name="firma" placeholder="Firma">
                            <input type="email" name="email" placeholder="E-Mail">
                            <input type="number" name="phone" placeholder="Telefon">
                        </div>

                        <div class="user-message">
                            <select name="betreff" id="betreff" form="betreff_form">
                                <option value="betref1">Betreff</option>
                                <option value="betreff2">betreff2</option>
                                <option value="betreff3">betreff3</option>
                                <option value="betreff4">betreff4</option>
                            </select>

                            <div class="radio_wrapper">
                                <input type="radio" id="anruf" name="anruf" value="HTML">
                                <label for="anruf">Bitte rufen Sie mich an!</label><br>
                            </div>

                            <textarea name="message" id="message" cols="30" rows="10"
                                placeholder="Ihre Nachricht an uns"></textarea>
                        </div>
                    </div>
                    <div class="button_wrapper">

                        <button id="submit_form" type="submit">Submit</button>
                    </div>

                </form>
            </section>
        </main>

        <footer>
            <img class="logo_bottom" src="assets/img/logo.png" alt="">
            <div class="first_line_footer">
                <div class="land_infos">
                    <p>Für Deutschland:&nbsp;&nbsp;&nbsp;&nbsp;AM Zollhafen 5 &nbsp;|&nbsp; 41460 Neuss
                        (Germany)&nbsp;&nbsp;|&nbsp;&nbsp; Telefon +49(0)2131 40 636-0&nbsp;&nbsp;|&nbsp;&nbsp;
                        tach@apfeleins-group.de
                    </p>
                </div>

                <div class="nav_footer">
                    <ul>
                        <li> <a href="#">Glossar</a></li>
                        <li> <a href="#">Impressum</a></li>
                        <li> <a href="#">Datenschutz</a></li>
                        <li> <a href="#">Kontact</a></li>

                    </ul>
                </div>
                <br>
            </div>

            <div class="land_infos oneliner">
                <p>Für die Schweiz:&nbsp;&nbsp;&nbsp;&nbsp;Postplatz 1 &nbsp;|&nbsp; 6300 Zug
                    (CH)&nbsp;&nbsp;|&nbsp;&nbsp; Telefon +41(0)56 622 77 77&nbsp;&nbsp;|&nbsp;&nbsp;
                    tach@apfeleins-group.de
                </p>
            </div>
            <a id="linkedin" href="https://www.linkedin.com/">
                <img id="linkedi" src="assets/img/linked-in-icon-26.jpg" alt="linkedin">
            </a>
    </div>
    </footer>

    </div>

    <script src="assets/js/script.js"></script>
</body>

</html>