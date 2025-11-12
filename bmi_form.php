<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณค่า BMI</title>
    
<div class="container">
    <h1>คำนวณค่า BMI</h1>

    <form action="bmi.php" method="POST">
        <label for="first-name">ชื่อ</label>
        <input type="text" name="first-name" id="first-name" required> 

        <label for="last-name">นามสกุล</label>
        <input type="text" name="last-name" id="last-name" required> 

        <label for="age">อายุ (ปี)</label>
        <input type="text" name="age" id="age" required> 

        <label for="weight">น้ำหนัก (kg)</label>
        <input type="text" name="weight" id="weight" required> 

        <label for="height">ส่วนสูง (m)</label>
        <input type="text" name="height" id="height" required>                                                                                             

        <div class="button-group">
            <input type="submit" value="คำนวณ BMI">
            <input type="reset" value="รีเซ็ต" class="reset-btn">
        </div>
    </form>
    
    <div class="form-footer">
        <p>กรุณากรอกข้อมูลที่ถูกต้องสำหรับการคำนวณค่า BMI</p>
    </div>
</div>

</body>
</html>
