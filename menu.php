            <?php 
            $ss = '';
            if (isset($_SESSION["Userlevel"])) {
             $ss = $_SESSION["Userlevel"];
           } ?>

           <div class="col-md-3">
             <ul class="list-group">
              <a href="index1.php" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><!img src="./img/014-homepage.png" width="25%" height="25%"> หน้าหลัก <i class="fa fa-home text-muted fa-lg"></i></a>
              <?php if($ss == "M"){ ?>

               <a href="index1.php?learning" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> บทเรียน <i class="fa fa-list text-muted fa-lg"></i></a>

               <a class="dropdown-toggle border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action" href="#" data-toggle="dropdown"> ข้อมูล </a>


               <ul class="dropdown-menu">
                <li>
                 <a href="editprofile.php?user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ข้อมูลผู้ใช้ </a>
               </li>
               <li>
                 <a href="edit_password.php?user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> เปลี่ยนรหัสผ่าน </a>
               </li>


             </ul>

             <a href="score.php?user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ข้อมูลคะแนน <i class="fa fa-check text-muted fa-lg"></i></a>

             <a href="score_all.php" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ข้อมูลคะแนนทั้งหมด <i class="fa fa-list-ol text-muted fa-lg"></i></a>


             <a href="logout.php" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ออกจากระบบ <i class="fa fa-sign-out text-muted fa-lg"></i></a>

           <?php }elseif($ss == "A"){ ?>

             <a href="admin/index.php?su" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><!img src="./img/006-customer-support.png" width="25%" height="25%">ผู้ดูแลระบบ <i class="fa fa-users text-muted fa-lg"></i></a>

             <a href="admin/index.php?sc" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><!img src="./img/017-time-management.png" width="25%" height="25%">จัดการแบบทดสอบ<i class="fa fa-pencil-square-o text-muted fa-lg"></i></a>

             <a href="index1.php?learning" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><!img src="./img/005-ux.png" width="25%" height="25%">บทเรียน<i class="fa fa-list text-muted fa-lg"></i></a>

             <a href="admin/index.php?anw" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><!img src="./img/015-target-1.png" width="25%" height="25%">จัดการสมาชิก </a>

             <a class="dropdown-toggle border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action" href="#" data-toggle="dropdown"><!img src="./img/003-customer-review.png" width="25%" height="25%">ข้อมูล</a>
             <ul class="dropdown-menu">

              <li>
                <a href="editprofile.php?user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ข้อมูลผู้ใช้ </a>
              </li>
              <li>
                <a href="edit_password.php?user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> เปลี่ยนรหัสผ่าน </a>
              </li>


            </ul>

            <a href="score.php?user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><!img src="./img/011-visitor.png" width="25%" height="25%">ข้อมูลคะแนน <i class="fa fa-check text-muted fa-lg"></i></a>

            <a href="admin/index.php?in" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><!img src="./img/001-project.png" width="25%" height="25%"> ข้อมูลคะแนนทั้งหมด <i class="fa fa-list-ol text-muted fa-lg"></i></a>


            <a href="admin/index.php?send" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><!img src="./img/008-target.png" width="25%" height="25%"> แจ้งเตือนสมาชิก <i class="fa fa-envelope text-muted fa-lg"></i></a>



            <a href="logout.php" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"><!img src="./img/020-keywords.png" width="25%" height="25%"> ออกจากระบบ <i class="fa fa-sign-out text-muted fa-lg"></i></a>
          <?php } ?>

        </ul>
      </div>

    </li>