<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>CAPTCHA</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>

</head>
<body>

<br>

<strong>
   <h1>Görseldeki metni boşluk kullanmadan yazınız</h1>
</strong>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div style='margin:15px'>
        <img src="captcha.php" id="capt">
        <input type=button onClick=reload(); value='Tekrar Yükle'>
    </div>


    <input type="text" name="deger"/>
    <input type="submit" value="Giriş" name="submit"/>
</form>

<div style='margin-top:5px'>
    <?php


// https://www.linkedin.com/in/muhammetalisahin/
// bilisimarsivi.com

    session_start();
    if (isset($_POST['deger']))

        if ($_POST['deger'] == $_SESSION['captcha']){
            echo '<span style="color:green">BAŞARILI</span>';}
        else{
            echo '<span style="color:red">BAŞARISIZ</span>';}
    ?>
</div>
<br>
<center><a href="https://github.com/malisahin89"><h1>Muhammet Ali ŞAHİN</h1></a></center>

<script type="text/javascript">
    function reload() {
        img = document.getElementById("capt");
        img.src = "captcha.php"
    }
</script>

</body>
</html>