<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Love by Load</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="pace.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"crossOrigin="anonymous">

</head>
<body>
        <h1 class="title"><i class="fas fa-heartbeat"></i>  Anh yêu em nhiều lắm vợ à  <i class="fas fa-heartbeat"></i></h1>

        <div id="preloader">
            <div class="p"><i class="fas fa-spinner"></i>  Loading ...</div>
        </div>

        <script>

        paceOptions = {
        ajax: true,
        document: true,
        eventLag: false
        };

        Pace.on('done', function() {
        $('.p').delay(500).animate({top: '30%', opacity: '0'}, 3000, $.bez([0.19,1,0.22,1]));


        $('#preloader').delay(1500).animate({top: '-100%'}, 2000, $.bez([0.19,1,0.22,1]));

        TweenMax.from(".title", 2, {
             delay: 1.8,
                  y: 10,
                  opacity: 0,
                  ease: Expo.easeInOut
            })
       });

      </script>

</body>
</html>
