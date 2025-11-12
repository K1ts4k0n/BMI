<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์การคำนวณค่า BMI</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #FF5733, #FFBD33, #75FF33, #33FF57, #33B5FF, #5733FF, #FF33A6);
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            padding: 30px;
            box-sizing: border-box;
            text-align: center;
        }

        h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 20px;
            background: linear-gradient(to left, #FF5733, #FFBD33, #75FF33, #33FF57, #33B5FF, #5733FF, #FF33A6);
            -webkit-background-clip: text;
            color: transparent;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        .result {
            font-size: 22px;
            font-weight: bold;
            margin: 15px 0;
            color: #2980b9;
        }

        .category {
            font-size: 18px;
            font-weight: normal;
            color: #27ae60;
        }

        .error {
            font-size: 18px;
            font-weight: normal;
            color: #e74c3c;
        }

        .back-link {
            margin-top: 20px;
            font-size: 16px;
            text-decoration: none;
            color: #fff;
            background: linear-gradient(45deg, #FF5733, #FFBD33, #75FF33);
            border: 1px solid transparent;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .back-link:hover {
            background: linear-gradient(45deg, #33B5FF, #FF33A6);
            color: #fff;
        }

        .result, .category, .error {
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

    </style>
</head>
<body>

<div class="container">
<h1>ผลลัพธ์การคำนวณ BMI</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // รับข้อมูลจากฟอร์ม
    $firstName = $_POST['first-name']; 
    $lastName = $_POST['last-name']; 
    $age = $_POST['age']; 
    $weight = $_POST['weight']; 
    $height = $_POST['height']; 

    // แปลงส่วนสูงเป็นเมตร
    $heightInMeters = $height / 100;  

    // คำนวณค่า BMI
    $bmi = $weight / ($heightInMeters * $heightInMeters);  

    // แสดงข้อมูลผู้ใช้
    echo "<div class='result'>";
    echo "<h3>ชื่อ: $firstName $lastName</h3>";
    echo "<h3>อายุ: $age ปี</h3>";
    echo "<h3>น้ำหนัก: $weight กิโลกรัม</h3>";
    echo "<h3>ส่วนสูง: $height เซนติเมตร</h3>";
    echo "<h3>BMI: " . number_format($bmi, 2) . "</h3>";

    // แสดงผลการประเมิน
    if ($bmi < 18.5) {
        echo "<p class='category'>ผลการประเมิน: น้ำหนักน้อยกว่ามาตรฐาน</p>";
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        echo "<p class='category'>ผลการประเมิน: น้ำหนักปกติ</p>";
    } elseif ($bmi >= 25 && $bmi < 29.9) {
        echo "<p class='category'>ผลการประเมิน: น้ำหนักเกิน</p>";
    } else {
        echo "<p class='category'>ผลการประเมิน: โรคอ้วน</p>";
    }
    echo "</div>";
} else {
    echo "<p class='error'>กรุณากรอกข้อมูลในฟอร์มเพื่อคำนวณ BMI</p>";
}
?>

    <a href="bmi_form.php" class="back-link">กลับไปหน้าคำนวณ BMI</a>
</div>

</body>
</html>