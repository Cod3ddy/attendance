
<!-- add student form
 action="./connection/addStudent.php"
 -->
<section id="addStudent" class="addStudentModalForm">
        <div class="modalForm-content">
            <div class="modalForm-header">
                 
                <div class="modalHeader-items">
                     <h2>Add Student</h2>
                </div>
                <div class="modalHeader-items">
                    <span class="modalCloseBtn">&times;</span>
                </div>   
          </div>
          <div class="modalForm-body">
            <form  action="./connection/addStudent.php" method="POST" id="myModalForm" class="formModal">
                <div class="form-items">
                    
                    <p>Fullname</p>
                    <input type="text" name="fullName" placeholder="enter fullname">
                   <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "studentNameExist"){
                               ?>
                               <p style="color: red;
                                        font-size: 13px;
                                        margin-left: 10px;
                                        margin-top: 5px;
                                        letter-spacing: 2px;">
                                        Student Already Exist
                                    </p>
                               <?php
                            }
                        }
                    ?>
                </div>

                <div class="form-items">
                    <p>Registration ID</p>
                    <input type="text" name="regiID"   placeholder="enter registration ID">
                    <?php include ('message.php'); ?>
                </div>

                <div class="form-items">
                    <p>Phone Number</p>
                    <input type="number" name="phone"  placeholder="enter phonenumber">
                    <?php include ('message.php'); ?>
                </div>

                <div class="form-items">
                    <p>Birthdate</p>
                    <input type="date" name="birthDate">
                    <?php include ('message.php'); ?>
                </div>
                <div class="form-items">
                    <p>Gender</p>
                    <select name="gender">
                        <option value="gender" selected hidden>Select Gender</option>
                        <option value="Male" >Male</option>
                        <option value="Female">Female</option>
                      </select>
                    <?php include ('message.php'); ?>
                </div>

                <div class="form-items">
                    <p>Course</p>
                    <select name="course">
                        <option value="course" selected hidden>Select Course</option>
                        <option value="ICT">DICT</option>
                        <option value="NURSING">DCN</option>
                    </select>
                    <?php include ('message.php'); ?>
                </div>

                <div class="form-items">
                    <p>Year Level</p>
                    <select name="yearLevel">
                        <option value="year" selected hidden>Select year level</option>
                        <option value="1">First year</option>
                        <option value="2">Second year</option>
                        <option value="3">Third year</option>
                        <option value="4">Fourth year</option>
                    </select>
                    <?php include ('message.php'); ?>
                </div>

                <div class="form-items">
                    <p>Semester No</p>
                    <select name="semesterNo">
                        <option value="semester" selected hidden>Select semester no</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <?php include ('message.php'); ?>
                </div>

                <div class="form-items">
                    <p>Email</p>
                    <input type="email" name="email"  placeholder="enter email" >
                    <?php include ('message.php'); ?>
                </div>

                <div class="form-items">
                    <p>Password</p>
                    <input type="password" name="password"  autocomplete="off" placeholder="enter password" >
                    <?php include ('message.php'); ?>
                </div>
                <div class="form-items">
                    <p>Password</p>
                    <input type="password" name="passwordMatch"  autocomplete="off" placeholder="re-enter password">
                    <?php include ('message.php'); ?>
                </div>

                
                
                
                <div class="form-items button">
                    <button type="submit" name="submit" class="btnSubmit" id="subBtn">Add now</button>
                </div>
            </form>
          </div>

          <div class="modalForm-footer">
              <h3 class="modalFooter-text">MyAttendance</h3>
          </div>
        </div>
</section>
