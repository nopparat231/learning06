   <?php 
      $ss = '';
      if (isset($_SESSION["Userlevel"])) {
      $ss = $_SESSION["Userlevel"];
    } ?>
   <div class="col-md-3">
   	<ul class="list-group">
   		
   		<?php if(isset($_SESSION["Userlevel"]) == "A"): ?>

         <a href="index.php" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><img src="../img/014-homepage.png" width="25%" height="25%">หน้าหลัก </a>

         <a href="index.php?su" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><img src="../img/006-customer-support.png" width="25%" height="25%">ผู้ดูแลระบบ </a>

         <a href="index.php?sc" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><img src="../img/017-time-management.png" width="25%" height="25%">จัดการแบบทดสอบ </a>

         <a href="../index1.php?learning" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><img src="../img/005-ux.png" width="25%" height="25%"> บทเรียน </a>

         <a href="index.php?anw" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><img src="../img/015-target-1.png" width="25%" height="25%">จัดการสมาชิก </a>

         <a class="dropdown-toggle border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action" data-toggle="dropdown"><img src="../img/003-customer-review.png" width="25%" height="25%">  ข้อมูล </a>

         <ul class="dropdown-menu">
          <li>
           <a href="index.php?sp&user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action">ข้อมูลผู้ใช้ </a>
         </li>
         <li>
           <a href="index.php?pw&user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> เปลี่ยนรหัสผ่าน </a>
         </li>


       </ul>

       <a href="../score.php?user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><img src="../img/011-visitor.png" width="25%" height="25%"> ข้อมูลคะแนน </a>

       <a href="index.php?in" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> <img src="../img/001-project.png" width="25%" height="25%">ข้อมูลคะแนนทั้งหมด </a>

       
       
       <a href="index.php?send" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> 
        <img src="../img/008-target.png" width="25%" height="25%">แจ้งเตือนสมาชิก</a>



       <a href="logout.php" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><img src="../img/020-keywords.png" width="25%" height="25%"> ออกจากระบบ </a>
     <?php endif ?>
   </ul>
 </div>

</li>