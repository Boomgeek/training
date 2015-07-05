<?php 
session_start();
if(!isset($_SESSION["empID"]) || !isset($_SESSION["empRole"]))
{
  header("location:../signin.php");
}
?>
<body>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title glyphicon glyphicon-floppy-disk"> บันทึกโครงการ</h3>
        </div>
        <div class="panel-body">
          <div class="form-inline">
            <div class="form-group">
              <label>ปีงบประมาณ (ค.ศ.)</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>ชื่อโครงการ</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>วัน/เดือน/ปี</label>
              <input type="date" class="form-control">
            </div>
          </div>
          <div class="form-inline">
            <div class="form-group">
              <label>จำนวนชั่วโมง</label>
              <input type="number" class="form-control" min="0" value="0" style="width:80px;">
            </div>
            <div class="form-group">
              <label>การนำไปใช้ประโยชน์</label>
              <textarea autocomplete="off" class="form-control" id="textareaCode" wrap="logical" rows="2" cols="30"></textarea>
            </div>
            <div class="form-group">
              <label>รายละเอียด</label>
              <textarea autocomplete="off" class="form-control" id="textareaCode" wrap="logical" rows="2" cols="30"></textarea>
            </div>
          </div>
          <div class="form-inline">
            <div class="form-group">
              <button type="button" class="btn btn-success btn-lg" id="save-project-btn">
                <span class="glyphicon glyphicon-floppy-disk"></span>
                บันทึก
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="./js/content/save_traning.js"></script>