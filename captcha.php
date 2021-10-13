<?PHP
// https://www.linkedin.com/in/muhammetalisahin/
// bilisimarsivi.com
$image = @imagecreatetruecolor(200, 50) or die("hata oluştu");

// imagecolorallocate($image, RED, GREEN, BLUE);
$background = imagecolorallocate($image, 0xCC, 0xCC, 0xCC);
imagefill($image, 0, 0, $background);
$linecolor1 = imagecolorallocate($image, 255, 94, 91);
$linecolor2 = imagecolorallocate($image, 216, 216, 216);
$linecolor3 = imagecolorallocate($image, 255, 255, 234);
$linecolor4 = imagecolorallocate($image, 0, 206, 203);
$linecolor5 = imagecolorallocate($image, 255, 237, 102);

$linecolor11 = imagecolorallocate($image, 123, 223, 242);
$linecolor21 = imagecolorallocate($image, 242, 181, 212);
$linecolor31 = imagecolorallocate($image, 178, 247, 239);
$linecolor41 = imagecolorallocate($image, 247, 214, 224);
$linecolor51 = imagecolorallocate($image, 239, 247, 246);

$textcolor = imagecolorallocate($image, 0, 0, 0);
for ($i = 0; $i < 5; $i++) {
    imagesetthickness($image, rand(2, 5));
    imageline($image, 0, rand(0, 60), 200, rand(0, 60), $linecolor1);
    imageline($image, 0, rand(0, 60), 200, rand(0, 60), $linecolor2);
    imageline($image, 0, rand(0, 60), 200, rand(0, 60), $linecolor3);
    imageline($image, 0, rand(0, 60), 200, rand(0, 60), $linecolor4);
    imageline($image, 0, rand(0, 60), 200, rand(0, 60), $linecolor5);
	
    imageline($image, 0, rand(0, 60), 200, rand(0, 60), $linecolor11);
    imageline($image, 0, rand(0, 60), 200, rand(0, 60), $linecolor21);
    imageline($image, 0, rand(0, 60), 200, rand(0, 60), $linecolor31);
    imageline($image, 0, rand(0, 60), 200, rand(0, 60), $linecolor41);
    imageline($image, 0, rand(0, 60), 200, rand(0, 60), $linecolor51);
}

session_start();
$font = imageloadfont('small/small ('.rand(1,26).').gdf');
// $font = imageloadfont('medium/medium ('.rand(1,5).').gdf');
// $font = imageloadfont('big/big ('.rand(1,6).').gdf');


$sayilar = '';
for ($x = 30; $x <= 150; $x += 30) {
    $sayilar .= ($sayi = substr(md5(microtime()),rand(0,26),1));
    imagechar($image, $font, $x, rand(10, 20), $sayi, $textcolor);
}

$_SESSION['captcha'] = $sayilar;

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>