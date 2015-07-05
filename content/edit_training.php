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
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title glyphicon glyphicon-pencil"> แก้ไขโครงการ</h3>
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
          </div>
          <div class="form-inline">
            <div class="panel panel-default">
              <div class="panel-body" style="background:#eee">
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
              </div>
            </div>
          </div>
          <div class="form-inline">
            <div class="form-group">
              <button type="button" class="btn btn-success btn-lg" id="edit-project-btn">
                <span class="glyphicon glyphicon-floppy-disk"></span>
                บันทึกการแก้ไข
              </button>
              <button type="button" class="btn btn-danger btn-lg" id="delete-project-btn">
                <span class="glyphicon glyphicon-trash"></span>
                ลบโครงการ
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="./js/content/edit_training.js"></script>