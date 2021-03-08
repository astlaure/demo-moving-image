<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">
        <div class="item" onclick="showModal()">
            <img class="back" src="python.jpg" alt="">
            <img class="front" src="css-3.svg" alt="">
            <div class="hover">
                <h2>Python</h2>
                <p>CSS</p>
            </div>
        </div>
        <div class="item" onclick="showModal()">
            <img class="back" src="python.jpg" alt="">
            <img class="front" src="css-3.svg" alt="">
            <div class="hover">
                <h2>Python</h2>
                <p>CSS</p>
            </div>
        </div>
    </div>

    <div id="item-modal">
        <div class="container">
            <div class="close">
                <div onclick="hideModal()">
                    <i></i>
                    <i></i>
                </div>
            </div>
            <div id="container-modal">
                <div class="arrow-left" onclick="previousSlide()">
                    <img src="/arrow_back_ios-24px.svg" alt="">
                </div>
                <div class="slide-container">
                    <div class="slide visible">
                        <div class="item">
                            <img class="back" src="python.jpg" alt="">
                            <img class="front" src="css-3.svg" alt="">
                        </div>
                        <div class="text">
                            <h2>Python</h2>
                            <h3>CSS</h3>
                            <p>Avid Cambridge supporter and Co-Founder of KOTA. Having left school at the wee age of 16, Jonny quickly discovered his calling as a Developer. A self-proclaimed 'Dogsbody', he is the glue that holds KOTA together, linking the clients, development, marketing and design teams. His knowledge and experience comes from working with some of the most respected brands in the world, including Apple, Google, YouTube and Unilever.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="item">
                            <img class="back" src="python.jpg" alt="">
                            <img class="front" src="css-3.svg" alt="">
                        </div>
                        <div class="text">
                            <h2>Potato</h2>
                            <h3>Chips</h3>
                            <p>Avid Cambridge supporter and Co-Founder of KOTA. Having left school at the wee age of 16, Jonny quickly discovered his calling as a Developer. A self-proclaimed 'Dogsbody', he is the glue that holds KOTA together, linking the clients, development, marketing and design teams. His knowledge and experience comes from working with some of the most respected brands in the world, including Apple, Google, YouTube and Unilever.</p>
                        </div>
                    </div>
                </div>
                <div class="arrow-right" onclick="nextSlide()">
                    <img src="/arrow_forward_ios-24px.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <script src="main.js"></script>
</body>

</html>