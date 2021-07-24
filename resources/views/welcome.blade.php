<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <!--<link rel="stylesheet" href="css/icon-font.css">-->

    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" type="image/png" href="resources/img/favicon.png">

    <title>LAZY READER </title>
</head>

<body>
<div class="navigation">
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

    <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
    </label>

    <div class="navigation__background">&nbsp;</div>

    <nav class="navigation__nav">
        <ul class="navigation__list">
            <li class="navigation__item"><a href="/register" class="navigation__link"><span>01</span>Register</a></li>
            <li class="navigation__item"><a href="/login" class="navigation__link"><span>02</span> Login</a></li>
            <li class="navigation__item"><a href="#section-test" class="navigation__link"><span>03</span>Try For Free</a></li>
            <li class="navigation__item"><a href="#section-tours" class="navigation__link"><span>04</span>Check Plans</a></li>
            <li class="navigation__item"><a href="#section-stories" class="navigation__link"><span>05</span>Stories</a></li>
        </ul>
    </nav>
</div>

<header class="header">

    <div class="header__logo-box">
        <img src="/images/logo-white.png" alt="Logo" class="header__logo">
    </div>

    <div class="header__text-box">
        <h1 class="heading-primary">
            <span class="heading-primary--main">lazy reader</span>
            <span class="heading-primary--sub">Read less, gain more</span>
        </h1>

        <a href="#section-test" class="btn btn--white btn--animated">Try Our product</a>
    </div>
</header>

<main>
    <section class="section-about">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
               This section suppose to be about us
            </h2>
        </div>

        <div class="row">
            <div class="col-1-of-2">
                <h3 class="heading-tertiary u-margin-bottom-small"> Who are we?</h3>
                <p class="paragraph">
                    we are a group of communication and computer engineers graduated from Helwan university 2020/21
                </p>

                <h3 class="heading-tertiary u-margin-bottom-small">What Do we do?</h3>
                <p class="paragraph">
                    We Are Providing a symmetrization service that summarizes articles, Books, and researches with text or audio formats
                </p>

                <a href="#" class="btn-text"></a>
            </div>
            <div class="col-1-of-2">
                <div class="composition">

                    <img srcset="/images/nat-1.jpg 300w, /images/nat-1-large.jpg 1000w"
                         sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                         alt="Photo 1"
                         class="composition__photo composition__photo--p1"
                         src="/images/nat-1-large.jpg">

                    <img srcset="/images/nat-2.jpg 300w, /images/nat-2-large.jpg 1000w"
                         sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                         alt="Photo 2"
                         class="composition__photo composition__photo--p2"
                         src="/images/nat-2-large.jpg">

                    <img srcset="/images/nat-3.jpg 300w, /images/nat-3-large.jpg 1000w"
                         sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                         alt="Photo 3"
                         class="composition__photo composition__photo--p3"
                         src="/images/nat-3-large.jpg">

                    <!--
                    <img src="/images/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                    <img src="/images/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                    <img src="/images/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                    -->
                </div>
            </div>
        </div>
    </section>

    <section class="section-features" id="section-test">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class=" heading-secondary heading-secondary--sub">
                Try it for free
            </h2>
        </div>
        <div class="row">
            <div class="col-2-of-4">
                <form id="test-form" action="/">
                    <div class="feature-box">

                        <h3 class="heading-tertiary u-margin-bottom-small">Put your text sample here</h3>
                        <textarea class="form__input u-full-width" id="form-sample" rows="15"></textarea>
                    </div>
                    <div class="form__group" id="form-submit">
                        <button class="btn btn--summarize u-margin-top-small ">Summarize</button>
                    </div>
                </form>
            </div>

            <div class="col-2-of-4">
                <div class="feature-box form__group">
                    <h3 class="heading-tertiary u-margin-bottom-small">The summarization output</h3>
                    <textarea class="form__input u-full-width" readonly id="form-result" rows="15"></textarea>
                </div>
            </div>


        </div>
    </section>

    <section class="section-tours" id="section-tours">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Select Your plan
            </h2>
        </div>

        <div class="row">
            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--1">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--1">The lazy Reader</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>upload plain text</li>

                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-1">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Only</p>
                                <p class="card__price-value">Free</p>
                            </div>
                            <a href="#section-test" class="btn btn--white">Try it</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--2">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--2">the laziest reader</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>Upload Plain Text</li>
                                <li>Upload word & PDF files</li>


                            </ul>
                        </div>

                    </div>
                    <div class="card__side card__side--back card__side--back-2">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Only</p>
                                <p class="card__price-value">$497</p>
                            </div>
                            <a href="#popup" class="btn btn--white">Book now!</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--3">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--3">The Slooooth guy</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>Upload Plain Text</li>
                                <li>Upload word & PDF files</li>
                                <li>Upload voice formats</li>



                            </ul>
                        </div>

                    </div>
                    <div class="card__side card__side--back card__side--back-3">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Only</p>
                                <p class="card__price-value">$897</p>
                            </div>
                            <a href="#popup" class="btn btn--white">Book now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="u-center-text u-margin-top-huge">
            <a href="#" class="btn btn--green">Register Now</a>
        </div>
    </section>

    <section class="section-stories" id="section-stories">
        <div class="bg-video">
            <video class="bg-video__content" autoplay muted loop>
                <source src="img/video.mp4" type="video/mp4">
                <source src="img/video.webm" type="video/webm">
                Your browser is not supported!
            </video>
        </div>

        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                We make people genuinely happy
            </h2>
        </div>

        <div class="row">
            <div class="story">
                <figure class="story__shape">
                    <img src="/images/nat-8.jpg" alt="Person on a tour" class="story__img">
                    <figcaption class="story__caption">Mary Smith</figcaption>
                </figure>
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">oh my god it was the best thing that i ever put money on</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                        ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                        repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="story">
                <figure class="story__shape">
                    <img src="/images/nat-9.jpg" alt="Person on a tour" class="story__img">
                    <figcaption class="story__caption">Jack Wilson</figcaption>
                </figure>
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">I was stupid because i don't read, now I have false sense of intellect and superiority  </h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                        ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                        repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                    </p>
                </div>
            </div>
        </div>

        <div class="u-center-text u-margin-top-huge">

        </div>
    </section>


</main>

<footer class="footer">
    <div class="footer__logo-box">

        <picture class="footer__logo">

            here should be a logo
        </picture>



    </div>
    <div class="row">
        <div class="col-1-of-2">
            <div class="footer__navigation">
                <ul class="footer__list">
                    <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Carrers</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                </ul>
            </div>
        </div>
        <div class="col-1-of-2">
            <p class="footer__copyright">
                Built by <a href="#" class="footer__link">me, duh </a> for the graduation project <a href="#" class="footer__link">Lazy Reader</a>.
                no need to thank me

            </p>
        </div>
    </div>
</footer>

<div class="popup" id="popup">
    <div class="popup__content">
        <div class="popup__left">
            <img src="/images/nat-8.jpg" alt="Tour photo" class="popup__img">
            <img src="/images/nat-9.jpg" alt="Tour photo" class="popup__img">
        </div>
        <div class="popup__right">
            <a href="#section-tours" class="popup__close">&times;</a>
            <h2 class="heading-secondary u-margin-bottom-small">Start booking now</h2>
            <h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read these terms before booking</h3>
            <p class="popup__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Sed sed risus pretium quam. Aliquam sem et tortor consequat id. Volutpat odio facilisis mauris sit
                amet massa vitae. Mi bibendum neque egestas congue. Placerat orci nulla pellentesque dignissim enim
                sit. Vitae semper quis lectus nulla at volutpat diam ut venenatis. Malesuada pellentesque elit eget
                gravida cum sociis natoque penatibus et. Proin fermentum leo vel orci porta non pulvinar neque laoreet.
                Gravida neque convallis a cras semper. Molestie at elementum eu facilisis sed odio morbi quis. Faucibus
                vitae aliquet nec ullamcorper sit amet risus nullam eget. Nam libero justo laoreet sit. Amet massa
                vitae tortor condimentum lacinia quis vel eros donec. Sit amet facilisis magna etiam. Imperdiet sed
                euismod nisi porta.
            </p>
            <a href="#" class="btn btn--green">Book now</a>
        </div>
    </div>

</div>

<!--
<section class="grid-test">
    <div class="row">
        <div class="col-1-of-2">
            Col 1 of 2
        </div>
        <div class="col-1-of-2">
            Col 1 of 2
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-3">
            Col 1 of 3
        </div>
        <div class="col-1-of-3">
            Col 1 of 3
        </div>
        <div class="col-1-of-3">
            Col 1 of 3
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-3">
            Col 1 of 3
        </div>
        <div class="col-2-of-3">
            Col 2 of 3
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-2-of-4">
            Col 2 of 4
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-3-of-4">
            Col 3 of 4
        </div>
    </div>
</section>
-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="js/summarize.js"></script>
<script src="js/particles.js"></script>
<script>
    $('#start').click(function(){
        particlesJS.load('particles-js', 'particles.json', function() {
            console.log('callback - particles.js config loaded');
        });
    })

</script>

</body>
</html>
