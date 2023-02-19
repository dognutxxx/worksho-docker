<?php
$weight = isset($_POST["weight"]) ? strip_tags($_POST["weight"]) : 0;
$height = isset($_POST["height"]) ? strip_tags($_POST["height"]) : 0;
$value = 0;
$text = null;
if ($weight != 0 && $height != 0) {
    $value = $weight / (pow($height / 100, 2));
}

if ($value >= 30) {
    $text = "คุณจัดว่าอ้วนระดับ2 คุณเสี่ยงต่อการเกิดโรคที่มากับความอ้วน หากคุณมีเส้นรอบเอวมากกว่าเกณฑ์ปกติคุณจะเสี่ยงต่อการเกิดโรคสูง คุณต้องควบคุมอาหาร และออกกำลังกายอย่างจริงจัง";
} elseif ($value >= 25 && $value <= 29.9) {
    $text = "คุณจัดว่าเป็นคนอ้วนระดับ1 และหากคุณมีเส้นรอบเอวมากกว่า 90 ซม.(ชาย) 80 ซม.(หญิง) คุณจะมีโอกาศเกิดโรคความดัน เบาหวานสูง จำเป็นต้องควบคุมอาหาร และออกกำลังกาย";
} elseif ($value >= 23 && $value <= 24.9) {
    $text = "คุณเริ่มจะมีน้ำหนักเกิน หากคุณมีกรรมพันธ์เป็นโรคเบาหวานหรือไขมันในเลือดสูงต้องพยายามลดน้ำหนักให้ดัชนีมวลกายต่ำกว่า 23";
} elseif ($value >= 18.5 && $value <= 22.9) {
    $text = "คุณมีน้ำหนักปกติและมีปริมาณไขมันอยู่ในเกณฑ์ปกติ มักจะไม่ค่อยมีโรคร้าย อุบัติการณ์ของโรคเบาหวาน ความดันโลหิตสูงต่ำกว่าผู้ที่อ้วนกว่านี้";
} elseif ($value  < 18.5) {
    $text = "คุณมีน้ำหนักน้อยเกินไป ซึ่งอาจจะเกิดจากนักกีฬาที่ออกกำลังกายมาก และได้รับสารอาหารไม่เพียงพอ วิธีแก้ไขต้องรับประทานอาหารที่มีคุณภาพ และมีปริมาณพลังงานเพียงพอ และออกกำลังกายอย่างเหมาะสม";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Doker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="jumbotron text-center">
        <h1>ดัชนีมวลกายของคุณ</h1>
        <p>65230035 อานนท์ พรมมูล</p>
    </div>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <labe>น้ำหนัก</labe>
                <input type="text" class="form-control" id="weight" name="weight" placeholder="ระบุน้ำหนัก" value="<?= $weight ?>" />
            </div>
            <div class="form-group">
                <label>ส่วนสูง</label>
                <input type="text" class="form-control" id="height" name="height" placeholder="ระบุส่วนสูง" value="<?= $height ?>" />
            </div>
            <div class="form-group">
                <label>ดัชนีมวลกายของคุณคือ</label> <label style="color:red"><?= $value ?></label>

            </div>
            <div class="form-group">
                <label>คำอธิบาย </label> <label style="color:blue">
                    <?= $text ?>
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>