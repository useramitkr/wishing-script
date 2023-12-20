<?php

    $showResult = '';
    $yName = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $yName = $_POST['name'];
        if(isset($_POST['engbtn'])) {
            $wpMsg = "$yName wishes you a Happy New Year!, May 2024 be your year of joy, success, and wonderful surprises. Cheers to new beginnings and endless smiles! Share this with your loved ones https://reliabledigitalservice.com/ame/newyear2024.php 🎉";
            $showResult = isset($_POST['engbtn']) ? $wpMsg : '';
            
        } else if(isset($_POST['hinbtn'])){
            
            $wphMsg = "आपको $yName की ओर से नया साल मुबारक हो! 2024 आपके लिए खुशी, सफलता, और अद्भुत आश्चर्य से भरा हो। नए आरंभों और अनगिनत मुस्कानों की ओर चिएर्स! इस खास मौके पर, इसे अपने प्रियजन के साथ साझा करें https://reliabledigitalservice.com/ame/newyear2024.php 🎉";
            $showResult = isset($_POST['hinbtn']) ? $wphMsg : '';
            
                }
    } 

    $wpLink = "https://wa.me/?text=" . urlencode($showResult);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy New Year 2024</title>

    <style>

        body {
            margin: auto;
            padding: auto;
            background-color: #BD0419;
        }

        #middleside {
            margin-right: 10%;
            margin-left: 10%;
            margin-top: 5%;
            overflow: hidden;
            padding-bottom: 5%;
            position: relative;
        }

        .midside {
            overflow: hidden;
        }

        .midside img {
            width: 50%;
            height: auto;
            border-radius: 20px;
            
        }

        .midside h1 {
            font-size: 24px;
            animation: bounceAnimation 1s infinite alternate;
            color: white;
        }

        @keyframes bounceAnimation {
            0% {
                transform: translateY(0);
            }
            80% {
                transform: translateX(-20px);
            }
        }

        .midside h2 {
            font-size: 16px;
            font-weight: 400;
            color: white;
        }
        
        p {
            color: white;
        }

        .name {
            font-size: 16px;
            border-radius: 5px;
            padding: 8px;
            margin-bottom: 3%;
            width: 80%;
            text-align: center;
            
        }

        .wpbtns {
            font-size: 12px;
            border-radius: 5px;
            padding: 8px;
            margin-bottom: 1%;
            margin-top: 1%;
            background-color: #FFFF00;
            font-weight: 700;
        }

        .wpbtn {
            font-size: 16px;
            border-radius: 5px;
            padding: 8px;
            margin-top: 1%;
            background-color: green;
            font-weight: 700;
        }

        .wpbtn a {
            text-decoration: none;
            color: white;
        }

        .result {
            border-color: transparent;
            font-size: 16px;
            width: 100%;
            background-color: transparent;
            color: white;
        }

        .confetti {
            position: absolute;
            background-color: #fff;
            width: 10px;
            height: 10px;
            border-radius: 50px;
            animation: confettiAnimation linear infinite;
        }

        @keyframes confettiAnimation {
            0% { 
                transform: translateY(0);
            }

            100% {
                transform: translateY(100vh) rotate(720deg);
            }
        }

        @media only screen and (max-device-width: 600px) {

            .midside img {
            width: 100%;
        
        }

        }

    </style>

</head>
<body>
    <script>
                  
        const numConfetti = 10;

        for (let i = 0; i < numConfetti; i++) {
            const confetti = document.createElement('div');
            confetti.className = 'confetti';
            confetti.style.left = Math.random() * window.innerWidth + 'px';
            confetti.style.animationDuration = (Math.random() * 2 + 1) + 's';
            document.body.appendChild(confetti);
        }
    </script>

    <div id="middleside">

        <div class="midside" align="center">

            <h1>Happy New Year 2024</h1>
            <img src="images/ny2024.gif" alt="Happy New Year 2024">
            <br><br>
            <h2>Happy New Year! May 2024 be your year of joy, success, and wonderful surprises. Cheers to new beginnings and endless smiles!</h2>
            <h2>नया साल मुबारक! 2024 आपके लिए खुशी, सफलता, और अद्वितीय आश्चर्यों का साल हो। नए आरंभों और अनगिनत हंसी के लिए चियर्स! 🎉</h2>
            <p>Share this message with your love once</p>

            <div class="midform">
                <form action="" method="post">

                    <input class="name" type="text" name="name" placeholder="Your Name" value="<?php echo $yName;   ?>"><br>
                    <button class="wpbtns" name="engbtn">Create Message [Eng]</button>
                    <button class="wpbtns" name="hinbtn">Create Message [हिंदी]</button>
                    <br><br>
                    <input type="text" class="result" name="result" value="<?php echo $showResult;  ?>" readonly>
                    <br><br>
                    <button class="wpbtn" name="wpbtns"><a href="<?php  echo $wpLink;  ?>" target="_blank">Share on Whatsapp</a></button>


                </form>

            
            </div>

        </div>

    </div>

</body>
</html>