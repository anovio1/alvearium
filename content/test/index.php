
<html>
<head>
<link rel="stylesheet" type="text/css" href="test.css" media="all">
<script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
</head>
<body>
    <div class="modal">
        <span>X</span>
        <img class="unclickable" src="" alt="">
    </div>
    <div class="container">
    <div class="parent">
        <div class="top-one">
            <h1>Bringing Excellence to Something Something Something Something</h1>
        </div>
        <div class="bottom-one">
            <div class="button-top">
                <div class="icon"><img src="icon1.svg" alt=""></div>
                <h2>Comprehensive solutions</h2>
                <button>Learn More</button>
            </div>
            <div class="button-top">
            <div class="icon"><img src="icon2.svg" alt=""></div>
                <h2>Broad Therapeutic Exercises</h2>
                <button>Learn More</button>
            </div>
            <div class="button-top">
                <div class="icon"><img src="icon3.svg" alt=""></div>
                <h2>Industry Insights & News</h2>
                <button>Learn More</button>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        $('body > div.container > div > div.bottom-one > div:nth-child(3) > div > img').on('click',function(){
            $('.modal > img').attr('src',$(this).attr('src'));
            $('.modal').css('display','flex');
            $('.modal').on('click',function(e){
                if(!$(e.target).is(".unclickable")){
                    $('.modal').css('display','none');
                    $('body').css('overflow','auto');
                }
            });
            $('body').css('overflow','hidden');
        })
    </script>
</body>
</html>