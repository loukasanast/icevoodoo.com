<!DOCTYPE html>
<html lang="de">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-75213723-10"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-75213723-10');
        </script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="../favicon32px.ico" type="image/x-icon" />
        <link rel="icon" href="../favicon32px.ico" type="image/x-icon" />
        <title>Loukas Anastasiou | Design, Architektur, Kreatives Denken usw.</title>
        <link rel="stylesheet" href="../rules.css" />
        <script>
            window.addEventListener('load', function(){
                document.getElementsByTagName('body')[0].classList.remove('preload');
            }, false);
        </script>
    </head>
    <body class="preload">
        <iframe id="mob" src="https://rcm-eu.amazon-adsystem.com/e/cm?o=3&p=42&l=ur1&category=de_piv&banner=10QJEG92VW3S57RE9AG2&f=ifr&linkID=6f68f3687a2a23b78e71482ce7647ef5&t=icevoodoo-21&tracking_id=icevoodoo-21" width="234" height="60" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>

        <iframe id="des" src="https://rcm-eu.amazon-adsystem.com/e/cm?o=3&p=48&l=ur1&category=computer&banner=160GN795Y7B8SC5D9202&f=ifr&linkID=df503adb8f65c3e2da163e6bd900ad77&t=icevoodoo-21&tracking_id=icevoodoo-21" width="728" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
        <div class="wrapper">
            <header>
                <img class="logo" src="../images/logo.png" alt="" />
                <img class="puzzle" src="../images/puzzle.png" alt="" />
                <nav>
                    <a class="lnkmain" href="/">HOME</a>
                    <a class="lnkmain" href="/archiv/">ARCHIV</a>
                    <a class="lnkmain" href="/comments/">COMMENTS</a>
                    <a class="lnkmain" href="/thefutur/">THE FUTUR</a>
                    <a class="lnkmain" href="/buecher/">BÜCHER</a>
                    <a class="lnkmain" href="/verweise/">VERWEISE</a>
                </nav>
                <div class="rect"></div>
                <div class="social">
                    <a href="https://www.facebook.com/loukas.anastasiou.77"><img src="../images/001-facebook-logo-button.svg" alt="" /></a>
                    <a href="https://www.linkedin.com/in/loukas-anastasiou-92877b115/?originalSubdomain=de"><img src="../images/002-linkedin.svg" alt="" /></a>
                    <a href="https://www.behance.net/loukasanast"><img src="../images/003-behance-logo-button.svg" alt="" /></a>
                </div>
            </header>
            <main>
                <section class="sidebar">
                    <h2>LOUKAS ANASTASIOU</h2>
                    <a class="lnkemail" href="mailto:loukas@anastasiou.io">LOUKAS@ANASTASIOU.IO</a>
                    <h3>MEHR INFORMATION</h3>
                    <div class="tabs">
                        <div class="tab btninfo">INFO</div>
                        <div class="tab btnkontakt">KONTAKT</div>
                        <div class="box">
                            Loukas Anastasiou, fokussiert auf dem Web.
                        </div>
                    </div>
                    <img class="anim" src="../images/anim.gif" alt="" />
                </section>
                <div class="content">
                    <?php
                    date_default_timezone_set('UTC');
            
                    include("comment.php");
                    comment("index");
                    ?>
                </div>
            </main>
            <footer>
                <div class="topleft">
                    #?$%&
                </div>
                <div class="bottom">
                    COPYRIGHT &copy; 2021 ICEVOODOO.COM
                    <a class="dasauge" href="https://dasauge.de/-ironheaddigital/"><img src="../images/dasauge.png" alt="" /></a>
                </div>
            </footer>
        </div>
        <script>
            (function(){
                document.querySelector('.btninfo').addEventListener('click', function(){
                    document.querySelector('.box').style.background = '#000';
                    document.querySelector('.box').innerHTML = 'Loukas Anastasiou, fokussiert auf dem Web.';
                }, false);
                document.querySelector('.btnkontakt').addEventListener('click', function(){
                    document.querySelector('.box').style.background = '#10b3dc';
                    document.querySelector('.box').innerHTML = 'Email loukas@<br />anastasiou.io<br />München, Deutschland';
                }, false);
            }());
        </script>
    </body>
</html>