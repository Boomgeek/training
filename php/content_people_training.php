<?php
session_start();
if(!isset($_SESSION["empID"]) || !isset($_SESSION["empRole"]))
{
	header("location:signin.php");
}
?>
		<div class="row">
            <div class="col-xs-5">
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead>
                  	<tr>
                  		<th>ชื่อ-นามสกุล</th>
                    	<th>ภาควิชา</th>
                    	<th>เลือก</th>
                  	</tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>ศุภณัฐ ดอกไม้ทอง</td>
                      <td>ครุศาสตร์วิศวกรรม</td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>...</td>
                      <td>...</td>
                      <td>...</td>
                    </tr>
                    <tr>
                      <td>...</td>
                      <td>...</td>
                      <td>...</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-xs-2">
            	<center>	
              <button type="button" class="btn btn-success" id="edit-project-btn">
                <span class="glyphicon glyphicon-arrow-right"></span>
              </button>
              <br><br>
              <button type="button" class="btn btn-success" id="delete-project-btn">
                <span class="glyphicon glyphicon-arrow-left"></span>
              </button>
              </center>
            </div>
            <div class="col-xs-5">
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ภาควิชา</th>
                    <th>เลือก</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>ศุภณัฐ ดอกไม้ทอง</td>
                      <td>ครุศาสตร์วิศวกรรม</td>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>...</td>
                      <td>...</td>
                      <td>...</td>
                    </tr>
                    <tr>
                      <td>...</td>
                      <td>...</td>
                      <td>...</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
		</div>