<?php
/**"RandomImages generator"
 * Plugin Name: RandomImages generator
 * author: Atero Marketing Group
 * Description: creates RandomImages via shortcode
 * version 1.0
 **/
?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
</script>

<script>
var path = 'RandomImagesJS/images/',
    imgs = ['PattyCriner.png', 'PaulFarris.png', 'RaymondRogers.png', 'SarahPhillips.png'],
    i = Math.floor(Math.random()*imgs.length);
$('div#one').append("<img src='"+path+imgs[i]+"'>").hide().fadeIn(2000);
</script>
    <?php
    function display_images() {
    ?>
    <style>
        div.feature-section {
            height: 600px;
        }

        div#section1 {
            height: 400px;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-template-rows: auto;
            grid-template-areas:
                    "divT divT divT divT"
                    "div1 div1 div1 div1"
                    "div2 div2 div2 div2"
                    "div3 div3 div3 div3"
                    "div4 div4 div4 div4"
                    "div5 div5 div5 div5";
        }

        div#section1 div > img {
            width: 100%;
            height: 150px;
            box-shadow: 0 0 0 0;
            border: none;
        }

        div#text {
            grid-area: divT;
            color: white;
            text-align: center;
            display: none;
        }

        div#one {
            grid-area: div1;
        }

        div#two {
            grid-area: div2;
        }

        div#three {
            grid-area: div3;
        }

        div#four {
            grid-area: div4;
        }

        div#five {
            display: none;
            grid-area: div5;
        }

        @media only screen and (min-width: 760px) {
            div.feature-section {
                height: 600px;
            }

            div#section1 div > img {
                width: 60%;
                height: 150px;
                margin-left: 20%;
            }

            div.home-page-hero_bg {
                padding: 0;
            }
        }

        @media only screen and (min-width: 999px) {
            div#section1 {
                grid-template-areas:
                        "divT divT divT divT"
                        "div1 div1 div2 div2"
                        ". div5 div5 ."
                        "div3 div3 div4 div4";
            }

            div#section1 div > img {
                width: 100%;
                height: 200px;
                margin-left: 0;
            }

            div#five {
                display: inherit;
            }

            div.home-page-hero_bg {
                padding: 0;
            }
        }

        @media only screen and (min-width: 1280px) {

            div#section1 div > img {
                width: 70%;
                margin-left: 15%;
                height: 210px;
            }

        }

    </style>
    <div class="feature-section">
        <div id="section1">
            <div id="text">
                <p>Hello There hou are you doing today</p>
                <p>Pretty sunny?</p>
                <p>thanks for the support</p>
            </div>
            <div id="one">
            </div>
            <div id="two">
            </div>
            <div id="three">
            </div>
            <div id="four">
            </div>
            <div id="five"
            </div>
        </div>
    </div>
<?php
}
    add_action('image-grid', 'display_images');
    do_action('image-grid');

