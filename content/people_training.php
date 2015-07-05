<?php
session_start();
if(!isset($_SESSION["empID"]) || !isset($_SESSION["empRole"]))
{
  header("location:signin.php");
}
?>
<body>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title glyphicon glyphicon-user"> จัดผู้เข้าร่วมโครงการ</h3>
        </div>
        <div class="panel-body">
          <div class="form-inline">
            <div class="form-group">
              <label>ปีงบประมาณ</label>
              <select class="form-control">
                <option>2015</option>
                <option>2014</option>
              </select>
            </div>
            <div class="form-group">
              <label>ชื่อโครงการ</label>
              <select class="form-control">
                <option>ระบบการจัดการบนเว็บเรื่อง MySQL</option>
                <option>2</option>
              </select>
            </div>
            <div class="form-group">
              <label>วัน/เดือน/ปี</label>
              <input type="date" class="form-control" disabled="true">
            </div>
          </div>
          <div class="form-inline">
            <div class="form-group">
              <label>จำนวนชั่วโมง</label>
              <input type="number" class="form-control" min="0" style="width:80px;" disabled="true">
            </div>
            <div class="form-group">
              <label>การนำไปใช้ประโยชน์</label>
              <textarea autocomplete="off" class="form-control" id="textareaCode" wrap="logical" rows="2" cols="30" disabled="true"></textarea>
            </div>
            <div class="form-group">
              <label>รายละเอียด</label>
              <textarea autocomplete="off" class="form-control" id="textareaCode" wrap="logical" rows="2" cols="30" disabled="true"></textarea>
            </div>
          </div>

          <div class="form-inline">
            <div class="panel panel-default">
              <div class="panel-body" style="background:#fcf8e3">
                <div id="people-table"></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</body>
<script src="./js/content/people_training.js"></script>