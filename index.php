<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<?php include 'script_choices.php';  ?>

<style>
  .h-form .form-body .h-form-label {
    height: auto !important;
  }
</style>

<body>
  <?php include 'header.php'; ?>
  <div class="container-fluid">
    <div class="col s12">
      <h4 style="text-align:center;">แบบสำรวจความพึงพอใจในการสัมมนากลยุทธ์เด็ด มัดใจลูกค้า รู้เขา รู้เรา ขายร้อย ได้ล้าน</h4>
      <h4 style="text-align:center;">เวลา 12:30-17:30 น. ชั้น 8 Meeting room 5 อาคารไทยซัมมิททาวเวอร์ ถ.เพชรบุรีตัดใหม่</h4><br />
      <div class="card">

        <!-- Start Form -->
        <iframe id="iframe" name="iframe" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
        <!-- <iframe id="iframe" name="iframe" src="#" ></iframe> -->
        <form id="form_survey" method="POST">

          <!-- Description  -->
          <div class="card-header">
            <h5>โปรดเลือกคำตอบที่ตรงกับระดับความพึงพอใจของท่าน โดยท่านจะใช้เวลาราว 3-5 นาที ในการทำแบบสำรวจความพึงพอใจนี้</h5>
          </div><br />
          <!-- End Description  -->

          <!-- Date -->
          <div class="card-body">
            <h5>ท่านเข้าร่วมงานสัมมนาในวันใด <span class="required" style="color:red;">*</span></h5><br />

            <div>
              <label>
                <input class="with-gap" name="date_event" type="radio" value="วันศุกร์ที่ 23 สิงหาคม 2562" required />
                <span for="">วันศุกร์ที่ 23 สิงหาคม 2562</span>
              </label>

              <label>
                <input class="with-gap" name="date_event" type="radio" value="วันพุธที่ 28 สิงหาคม 2562" required />
                <span for="">วันพุธที่ 28 สิงหาคม 2562</span>
              </label>
            </div><br />

            <!-- Q1. -->
            <h5>1. ด้านเนื้อหา <span class="required" style="color:red;">*</span></h5><br />

            <table class="table table-bordered table-responsive">
              <thead class="thead-light">
                <tr style="text-align:center;">
                  <th scope="col">รายการประเมิน</th>
                  <th scope="col" style="width: 7%;">มากที่สุด</th>
                  <th scope="col" style="width: 7%;">มาก</th>
                  <th scope="col" style="width: 7%;">ปานกลาง</th>
                  <th scope="col" style="width: 7%;">น้อย</th>
                  <th scope="col" style="width: 7%;">น้อยที่สุด</th>
                </tr>
              </thead>
              <tbody>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">1.1 เนื้อหาที่บรรยายแต่ละหัวข้อเป็นประโยชน์โดยตรงต่อธุรกิจ</th>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">1.2 ได้ความรู้ และมีความเข้าใจเพิ่มขึ้นหลังจากเข้าร่วม</th>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c1" data-col="1" value="1" required></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- End Q1. -->

          <!-- Q2. -->
          <div class="card-body">
            <h5>2. ด้านการถ่ายทอดเนื้อหา <span class="required" style="color:red;">*</span></h5><br />

            <table class="table table-bordered table-responsive">
              <thead class="thead-light">
                <tr style="text-align:center;">
                  <th scope="col">รายการประเมิน</th>
                  <th scope="col" style="width: 7%;">มากที่สุด</th>
                  <th scope="col" style="width: 7%;">มาก</th>
                  <th scope="col" style="width: 7%;">ปานกลาง</th>
                  <th scope="col" style="width: 7%;">น้อย</th>
                  <th scope="col" style="width: 7%;">น้อยที่สุด</th>
                </tr>
              </thead>
              <tbody>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">2.1 มีการถ่ายทอดได้ตรงกับหัวข้อสัมมนา และอย่างครบถ้วน</th>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">2.2 มีการถ่ายทอดได้อย่างชัดเจน เข้าใจง่าย</th>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">2.3 มีการสร้างบรรยากาศที่ดีในการถ่ายทอด</th>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">2.4 เปิดโอกาสให้ผู้เข้าร่วมได้มีส่วนร่วม</th>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c1" data-col="1" value="1" required></td>
                </tr>

              </tbody>
            </table>
          </div>
          <!-- End Q2. -->

          <!-- Q3. -->
          <div class="card-body">
            <h5>3. ด้านสถานที่และอุปกรณ์ <span class="required" style="color:red;">*</span></h5><br />

            <table class="table table-bordered table-responsive">
              <thead class="thead-light">
                <tr style="text-align:center;">
                  <th scope="col">รายการประเมิน</th>
                  <th scope="col" style="width: 7%;">มากที่สุด</th>
                  <th scope="col" style="width: 7%;">มาก</th>
                  <th scope="col" style="width: 7%;">ปานกลาง</th>
                  <th scope="col" style="width: 7%;">น้อย</th>
                  <th scope="col" style="width: 7%;">น้อยที่สุด</th>
                </tr>
              </thead>
              <tbody>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">3.1 ความเหมาะสมของสถานที่จัดงาน และการเดินทาง</th>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">3.2 ความเหมาะสมของวันและเวลาที่จัดสัมมนา</th>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">3.3 ความพร้อมของอุปกรณ์นำเสนอ ภาพ เครื่องเสียง</th>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">3.4 ของว่างรับรอง และของที่ระลึก</th>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c1" data-col="1" value="1" required></td>
                </tr>

              </tbody>
            </table>
          </div>
          <!-- End Q3. -->

          <!-- Q4. -->
          <div class="card-body">
            <h5>4. ด้านการจัดงาน <span class="required" style="color:red;">*</span></h5><br />

            <table class="table table-bordered table-responsive">
              <thead class="thead-light">
                <tr style="text-align:center;">
                  <th scope="col">รายการประเมิน</th>
                  <th scope="col" style="width: 7%;">มากที่สุด</th>
                  <th scope="col" style="width: 7%;">มาก</th>
                  <th scope="col" style="width: 7%;">ปานกลาง</th>
                  <th scope="col" style="width: 7%;">น้อย</th>
                  <th scope="col" style="width: 7%;">น้อยที่สุด</th>
                </tr>
              </thead>
              <tbody>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">4.1 การประชาสัมพันธ์งาน</th>
                  <td><input type="radio" name="q4_s1" id="q4_s1_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q4_s1" id="q4_s1_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q4_s1" id="q4_s1_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q4_s1" id="q4_s1_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q4_s1" id="q4_s1_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">4.2 การลงทะเบียนเข้าร่วมงาน</th>
                  <td><input type="radio" name="q4_s2" id="q4_s2_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q4_s2" id="q4_s2_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q4_s2" id="q4_s2_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q4_s2" id="q4_s2_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q4_s2" id="q4_s2_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">4.3 การอำนวยความสะดวกโดยเจ้าหน้าที่</th>
                  <td><input type="radio" name="q4_s3" id="q4_s3_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q4_s3" id="q4_s3_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q4_s3" id="q4_s3_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q4_s3" id="q4_s3_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q4_s3" id="q4_s3_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">4.4 ความสะดวกในการลงทะเบียนเข้าร่วมงาน (ผ่าน Application)</th>
                  <td><input type="radio" name="q4_s4" id="q4_s4_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q4_s4" id="q4_s4_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q4_s4" id="q4_s4_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q4_s4" id="q4_s4_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q4_s4" id="q4_s4_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">4.5 ช่องทางการรับข่าวสาร (ผ่าน Application) เช่น เอกสารเพิ่มเติม, แบบสอบถาม</th>
                  <td><input type="radio" name="q4_s5" id="q4_s5_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q4_s5" id="q4_s5_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q4_s5" id="q4_s5_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q4_s5" id="q4_s5_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q4_s5" id="q4_s5_c1" data-col="1" value="1" required></td>
                </tr>

              </tbody>
            </table>
          </div>
          <!-- End Q4. -->

          <!-- Q5. -->
          <div class="card-body">
            <h5>5. หากมีงานสัมมนาครั้งต่อไป คุณยินดีเข้าร่วมหรือไม่ <span class="required" style="color:red;">*</span></h5><br />

            <div>
              <label>
                <input class="with-gap" name="q5" type="radio" value="เข้าร่วม" required />
                <span for="">เข้าร่วม</span>
              </label>

              <label>
                <input class="with-gap" name="q5" type="radio" value="ไม่เข้าร่วม" required />
                <span for="">ไม่เข้าร่วม</span>
              </label>
            </div>
          </div>
          <!-- End Q5. -->

          <!-- Q6. -->
          <div class="card-body">
            <h5>6. การจัดงานครั้งต่อไป ท่านสะดวกเข้าร่วมช่วงเวลาใด <span class="required" style="color:red;">*</span></h5><br />

            <div>
              <label>
                <input class="with-gap" name="q6" type="radio" value="ช่วงเช้า (9:00 - 12:00 น.)" required />
                <span for="">ช่วงเช้า (9:00 - 12:00 น.)</span>
              </label>

              <label>
                <input class="with-gap" name="q6" type="radio" value="ช่วงบ่าย (13:00 - 16:00 น.)" required />
                <span for="">ช่วงบ่าย (13:00 - 16:00 น.)</span>
              </label>
            </div>

          </div>
          <!-- End Q6. -->

          <!-- Q7. -->
          <div class="card-body">
            <h5>7. กิจกรรมที่ต้องการให้จัดในครั้งถัดไป (เลือกได้มากกว่า 1 ข้อ) <span class="required" style="color:red;">*</span></h5><br />

            <div class="choice-checkbox">
              <div class="custom-control custom-checkbox checkbox-lg">
                <input type="checkbox" class="custom-control-input" size="lg" id="q7_1" name="q7[]" value="กลยุทธ์จัดการร้านเล็บ">
                <label class="custom-control-label" for="q7_1">กลยุทธ์จัดการร้านเล็บ</label>
              </div>
              <div class="custom-control custom-checkbox checkbox-lg">
                <input type="checkbox" class="custom-control-input" id="q7_2" name="q7[]" value="เทคโนโลยี แอปพลิเคชันที่เหมาะสำหรับร้านเล็บ">
                <label class="custom-control-label" for="q7_2">เทคโนโลยี แอปพลิเคชันที่เหมาะสำหรับร้านเล็บ</label>
              </div>
              <div class="custom-control custom-checkbox checkbox-lg">
                <input type="checkbox" class="custom-control-input" id="q7_3" name="q7[]" value="แข่งขันทำเล็บ">
                <label class="custom-control-label" for="q7_3">แข่งขันทำเล็บ</label>
              </div>
              <div class="custom-control custom-checkbox checkbox-lg">
                <input type="checkbox" class="custom-control-input" id="q7_4" name="q7[]" value="Loga Workshop การใช้งานแอป Loga สำหรับร้านเล็บ">
                <label class="custom-control-label" for="q7_4">Loga Workshop การใช้งานแอป Loga สำหรับร้านเล็บ</label>
              </div>
              <div class="custom-control custom-checkbox checkbox-lg">
                <input type="checkbox" class="custom-control-input" id="q7_5" name="q7[]" value="รวมร้านเล็บ แชร์ ประสบการณ์ความสำเร็จ">
                <label class="custom-control-label" for="q7_5">รวมร้านเล็บ แชร์ ประสบการณ์ความสำเร็จ</label>
              </div>
              <div class="custom-control custom-checkbox checkbox-lg">
                <input type="checkbox" class="custom-control-input " id="q7_6" name="q7[]" value="Beauty Blogger แชร์เคล็ดลับ content ในการทำเล็บ">
                <label class="custom-control-label" for="q7_6">Beauty Blogger แชร์เคล็ดลับ content ในการทำเล็บ</label>
              </div>
              <div class="custom-control custom-checkbox checkbox-lg">
                <input type="checkbox" class="custom-control-input" id="q7_7" name="q7[]" value="อื่นๆ" onclick="Q7_Another()">
                <label class="custom-control-label" for="q7_7">อื่นๆ</label>
                <textarea class="form-control" name="another_Q7_7" id="another_Q7_7" style="width:50%; height:30%; display:none"></textarea>

              </div>
            </div>
          </div>
          <!-- End Q7. -->



          <!-- Q8. -->
          <div class="card-body">
            <h5>8. ทำไมถึงตัดสินใจเข้าร่วมงานสัมมนา <span class="required" style="color:red;">*</span></h5><br />

            <div>
              <label class="container" style="padding-left:50px;">
                <textarea class="form-control" name="seminar_detail" id="seminar_detail" value="" style="width:60%; height:30%;" required></textarea>
              </label>
            </div>
          </div>
          <!-- End Q8. -->

          <!-- Q9. -->
          <div class="card-body">
            <h5>9. ข้อคิดเห็นและข้อเสนอแนะอื่นๆ</h5><br />

            <div>
              <label class="container" style="padding-left:50px;">
                <textarea class="form-control" name="suggestions_detail" id="suggestions_detail" value="" style="width:60%; height:30%;"> </textarea>
              </label>
            </div>
          </div>
          <!-- End Q9. -->

          <!-- Button submit -->
          <div class="card-body">
            <div class="form-action" style="text-align:center;">
              <button class="btn btn-outline-success" type="submit" name="submit" value="submit">ส่งแบบสอบถาม</button>
            </div>
          </div>

        </form>
        <!-- End form -->

      </div>
    </div>
  </div><br />
  <!-- End container-fluid -->
  <?php include 'footer.php'; ?>

  <!-- script submit -->
  <script>
    $("#form_survey").on("submit", function(e) {

      e.preventDefault();


      $.ajax({
        url: "checksubmit.php",
        type: "post",
        data: $(this).serialize(),
        success: function(result) {
          jQuery("#form_survey input[type=radio]").prop("checked", false);
          console.log("result= " + result);
          if (result == "1") {
            swal({
              position: 'center',
              type: 'success',
              title: 'บันทึกข้อมูลเรียบร้อย',
              showConfirmButton: true,
            }).then((result) => {
              if (result.value) {
                window.location = "thankyou.php";
              }
            });
          } else {
            swal({
              position: 'center',
              type: 'warning',
              title: 'กรุณาใส่คำตอบให้ครบ',
              showConfirmButton: true,
            });
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          swal(
            'เกิดข้อผิดพลาด!',
            'ลองอีกครั้ง!',
            'error'
          );
        }
      });

    });
  </script>
  <!-- end script submit -->

  <script>
    //   $(document).ready(function() {
    //     $('#dtHorizontalExample').DataTable({
    //       "scrollX": true
    //     });
    //     $('.dataTables_length').addClass('bs-select');
    //   });
    // 
  </script>

  <style>
    .dtHorizontalExampleWrapper {
      max-width: 600px;
      margin: 0 auto;
    }

    #dtHorizontalExample th,
    td {
      white-space: nowrap;
    }

    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
      bottom: .5em;
    }
  </style>

</body>

</html>