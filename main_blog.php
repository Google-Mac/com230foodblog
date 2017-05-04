<!DOCTYPE html>
<html lang="en">

<head>
    <title>Food Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">COM230 Group Project</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#who">WHO</a></li>
                    <li><a href="#what">WHAT</a></li>
                    <li><a href="#where">WHERE</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- First Container -->
    <div id="who" class="container-fluid bg-1 text-center">
        <h3 class="margin">Who Are We?</h3>
        <img src="./img/foodies1.svg" class="img-responsive margin" style="display:inline" alt="foodies-logo" width="350" height="350">
        <h3>A little about us..</h3>
        <br/>
        <p>
            ...INSERT BIO...
        </p>
    </div>

    <!-- Second Container -->
    <div id="what" class="container-fluid bg-2 text-center">
        <h3 class="margin">What Did We Do?</h3>
        <p>
            ...INSERT INFO ON HOW WE CAME UP WITH TOPIC, ETC...
        </p>
    </div>

    <!-- Third Container (Grid) -->
    <div id="where" class="container-fluid bg-3 text-center">
        <h3 class="margin">Where Did We Go?</h3>
        <br>

        <!-- 1st Row -->
        <h3 class="margin">American Food</h3>
        <div class="row">
            <div class="col-sm-4">
                <p>I expected it to be fresh, light, and healthy- it delivered! This may actually be a new favorite and I had never even paid attention to it before challenging myself to try new things..</p>
                <img src="./img/chickfila_sandwich.jpg" class="img-responsive text-center margin" style="width:80%" alt="sandwich">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <img src="birds2.jpg" class="img-responsive margin" style="width:80%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <img src="birds3.jpg" class="img-responsive margin" style="width:80%" alt="Image">
            </div>
        </div>

        <br/>

        <!-- 2nd Row -->
        <h3 class="margin">Mexican Food</h3>
        <div class="row">
            <div class="col-sm-4">
                <p>I like shrimp, but diced tomatoes and cabbage make me gag slightly. I got pretty close to finishing it, and then just ate the shrimp. ;)</p>
                <img src="./img/shrimp_taco.jpg" class="img-responsive margin" style="width:80%" alt="shrimp_taco">
            </div>
            <div class="col-sm-4">
                <p>I've always wanted to learn how to make tamales. They taste great, but the culture that surrounds them is so fun!</p>
                <img src="./img/tamales.JPG" class="img-responsive margin" style="width:80%" alt="tamales">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <img src="birds3.jpg" class="img-responsive margin" style="width:80%" alt="Image">
            </div>
        </div>

        <br/>

        <!-- 3rd Row -->
        <h3 class="margin">Asian Food</h3>
        <div class="row">
            <div class="col-sm-4">
                <p>Benihana's teppanyaki comes with an experience everyone should get. All of the fire and flying food is awesome! Just be sure to tell them your allergies BEFORE they start flinging food at you..</p>
                <img src="./img/benihana.jpg" class="img-responsive margin" style="width:80%" alt="benihana">
            </div>
            <div class="col-sm-4">
                <p>"Eww, sushi.." If that is what you think, try again. First of all, this is a great group hangout culture. Second, the food is fantastic- just start with the more mild types and work your way up as you get used to the exotic flavors.</p>
                <img src="./img/sushi.jpg" class="img-responsive margin" style="width:80%" alt="sushi">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <img src="birds3.jpg" class="img-responsive margin" style="width:80%" alt="Image">
            </div>
        </div>

        <br/>

        <!-- 4th Row -->
        <h3 class="margin">Italian Food</h3>
        <div class="row">
            <div class="col-sm-4">
                <p>The fine dining here at Olive Garden may have a touch of American in it, but I think Italy should be proud of how amazing their food is! Unlimited soup, salad, and breadsticks is what I go for every time.</p>
                <img src="./img/gnocchi_soup.jpg" class="img-responsive margin" style="width:80%" alt="gnocchi">
            </div>
            <div class="col-sm-4">
                <p>Imagine your favorite pizza folded in half, baked to a crispy brown, and then drizzled with sauce. Yep, that's a calzone. The best one locally might just be at Floridino's.</p>
                <img src="./img/calzone.jpg" class="img-responsive margin" style="width:80%" alt="calzone">
            </div>
            <div class="col-sm-4">
                <p>Italian food just couldn't be Italian without pizza. It has been Americanized quite a bit, but this is an American-favorite for sure..</p>
                <img src="./img/pizza.jpeg" class="img-responsive margin" style="width:80%" alt="pizza">
            </div>
        </div>

        <br/>

        <!-- 5th Row -->
        <h3 class="margin">Misc. Food</h3>
        <div class="row">
            <div class="col-sm-4">
                <p>I like shrimp, but diced tomatoes and cabbage make me gag slightly. I got pretty close to finishing it, and then just ate the shrimp. ;)</p>
                <img src="./img/wienershnitzel.jpg" class="img-responsive margin" style="width:80%" alt="wienershnitzel">
            </div>
            <div class="col-sm-4">
                <p>I haven't been to a restaurant with so many tattooed employees. They were super chill and the food came quickly. My only issue was figuring out what half of the menu items were because of the lingo. My meal was delicious though- just the sandwich filled me up.</p>
                <img src="./img/philly_steak.jpg" class="img-responsive margin" style="width:80%" alt="pita">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <img src="birds3.jpg" class="img-responsive margin" style="width:80%" alt="Image">
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="container-fluid bg-4 text-center">
        <p>Food Blog Made By Parker McMullin</p>
    </footer>

</body>

<script>
    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });
</script>

</html>