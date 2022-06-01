<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Document</title>
</head>
<body>

    <header class="header">
        <a href="Home.php" class="logo">
            <img src="logorico.png" width="220" height="130" >
        </a>
    </header>

    <div class="container">
    <h1>Vote your Anime of the Year!</h1>

    <div class="list-anime">
        
        <div class="anime1">
        <img src="anime/horimiya.jpg" width="300" height="400">
        <h2>Horimiya</h2>
        <h3>2020</h3>
        </div>

        <div class="anime2">
        <img src="anime/kaguyas3.jpg" width="300" height="400">
        <h2>Kaguya-Sama: Love is War Season 3</h2>
        <h3>2022</h3>
        </div>

        <div class="anime3">
        <img src="anime/mhas4.jpg" width="300" height="400">
        <h2>My Hero Academia Season 4</h2>
        <h3>2020</h3>
        </div>

        <div class="anime4">
        <img src="anime/spyxfamily.png" width="300" height="400">
        <h2>Spy X Family</h2>
        <h3>2022</h3>
        </div>

        <div class="anime5">
        <img src="anime/tsukigakirei.jpg" width="300" height="400">
        <h2>Tsuki ga Kirei</h2>
        <h3>2018</h3>
        </div>
    </div>
    
    <form action="vote.php" method="post">
    <div class="form-group">
                <input type="text" placeholder="your vote" name="vote" class="form-control" required>
            </div>
    </form>
    
    </div>
</body>
</html>
