<?php
session_start();
require_once 'vendor/connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/style/main.css" />
    <link rel="stylesheet" href="/style/reset.css" />
    <title>МЕДИАГИГАНТ</title>
    <link rel="icon" href="img/title.png">
</head>


<?php

// include 'header.php';

?>

<!DOCTYPE html>
<html>

<body>
    <div class="error">
        <div class="wrap">
            <div class="404">
                <pre><code>
<span class="green">&lt;!</span><span>DOCTYPE html</span><span class="green">&gt;</span>
<span class="orange">&lt;html&gt;</span>
<span class="orange">&lt;style&gt;</span>
* {
<span class="green">everything</span>:<span class="blue">awesome</span>;
}
<span class="orange">&lt;/style&gt;</span>
<span class="orange">&lt;body&gt;</span>
ОПАЧКИ 404!
файл не найден!
<span class="comment">&lt;!--Вернитесь назад,
для дальнейшего просмотра сайта.--&gt;
</span>
<span class="orange"></span>
</div>
<br />
<span class="info">
<br />
<span class="orange">&nbsp;&lt;/body&gt;</span>
<br/>
<span class="orange">&lt;/html&gt;</span>
</code></pre>
            </div>



<style>
    .error {
text-align: center;
font-family: 'Gilda Display', serif;
text-align: center;
width: 100%;
height: 120px;
margin: auto;
position: absolute;
top: 0;
bottom: 0;
left: -60px;
right: 0;
-webkit-animation: noise-3 1s linear infinite;
animation: noise-3 1s linear infinite;
overflow: default;
}
body:after {
content: 'error 404';
font-family: OCR-A;
font-size: 100px;
text-align: center;
width: 550px;
margin: auto;
position: absolute;
top: 25%;
bottom: 0;
left: 0;
right: 35%;
opacity: 0;
color: white;
-webkit-animation: noise-1 .2s linear infinite;
animation: noise-1 .2s linear infinite;
}
body:before {
content: 'error 404';
font-family: OCR-A;
font-size: 100px;
text-align: center;
width: 550px;
margin: auto;
position: absolute;
top: 25%;
bottom: 0;
left: 0;
right: 35%;
opacity: 0;
color: white;
-webkit-animation: noise-2 .2s linear infinite;
animation: noise-2 .2s linear infinite;
}
.info {
text-align: center;
width: 200px;
height: 60px;
margin: auto;
position: absolute;
top: 280px;
bottom: 0;
left: 20px;
right: 0;
-webkit-animation: noise-3 1s linear infinite;
animation: noise-3 1s linear infinite;
}
.info:before {
content: 'file not found';
font-family: OCR-A;
font-size: 100px;
text-align: center;
width: 800px;
margin: auto;
position: absolute;
top: 20px;
bottom: 0;
left: 40px;
right: 100px;
opacity: 0;
color: white;
-webkit-animation: noise-2 .2s linear infinite;
animation: noise-2 .2s linear infinite;
}
.info:after {
content: 'file not found';
font-family: OCR-A;
font-size: 100px;
text-align: center;
width: 800px;
margin: auto;
position: absolute;
top: 20px;
bottom: 0;
left: 40px;
right: 0;
opacity: 0;
color: white;
-webkit-animation: noise-1 .2s linear infinite;
animation: noise-1 .2s linear infinite;
}
@-webkit-keyframes noise-1 {
0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
10% {opacity: .1;}
50% {opacity: .5; left: -6px;}
80% {opacity: .3;}
100% {opacity: .6; left: 2px;}
}
@keyframes noise-1 {
0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
10% {opacity: .1;}
50% {opacity: .5; left: -6px;}
80% {opacity: .3;}
100% {opacity: .6; left: 2px;}
}
@-webkit-keyframes noise-2 {
0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
10% {opacity: .1;}
50% {opacity: .5; left: 6px;}
80% {opacity: .3;}
100% {opacity: .6; left: -2px;}
}
@keyframes noise-2 {
0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
10% {opacity: .1;}
50% {opacity: .5; left: 6px;}
80% {opacity: .3;}
100% {opacity: .6; left: -2px;}
}
@-webkit-keyframes noise {
0%, 3%, 5%, 42%, 44%, 100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}
4.3% {opacity: 1; -webkit-transform: scaleY(1.7); transform: scaleY(1.7);}
43% {opacity: 1; -webkit-transform: scaleX(1.5); transform: scaleX(1.5);}
}
@keyframes noise {
0%, 3%, 5%, 42%, 44%, 100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}
4.3% {opacity: 1; -webkit-transform: scaleY(1.7); transform: scaleY(1.7);}
43% {opacity: 1; -webkit-transform: scaleX(1.5); transform: scaleX(1.5);}
}
@-webkit-keyframes noise-3 {
0%,3%,5%,42%,44%,100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}
4.3% {opacity: 1; -webkit-transform: scaleY(4); transform: scaleY(4);}
43% {opacity: 1; -webkit-transform: scaleX(10) rotate(60deg); transform: scaleX(10) rotate(60deg);}
}
@keyframes noise-3 {
0%,3%,5%,42%,44%,100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}
4.3% {opacity: 1; -webkit-transform: scaleY(4); transform: scaleY(4);}
43% {opacity: 1; -webkit-transform: scaleX(10) rotate(60deg); transform: scaleX(10) rotate(60deg);}
}
</style>
</body>

</html>