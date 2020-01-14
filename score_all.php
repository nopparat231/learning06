<?php session_start();?>
<!DOCTYPE html>
<html>

<?php 

include 'header.php';
include 'conn.php'; 


$query_learning = "SELECT * FROM choice as c , user as u, user_learning as l where l.user_learning_status <> 1 and l.choice_id = c.choice_id and l.user_id = u.id ORDER BY convert(l.user_learning_af, UNSIGNED INTEGER) DESC" ;
$learning = mysqli_query($con,$query_learning) or die(mysqli_error());
$row_learning = mysqli_fetch_assoc($learning);
$totalRows_learning = mysqli_num_rows($learning);


?>


<div class="container">
  <div class="row">
    <?php include 'menu.php'; ?>

    <div class="col-md-9">
     <div class="py-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">คะแนนผู้ใช้งานทั้งหมด</h1>
            <hr>
          </div>

        </div>
      </div>
    </div>

    <div class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive text-center">
              <table class="table table-striped table-bordered">
               <?php if ($totalRows_learning > 0) {?>

              
                <thead>
                  <tr class="text-center">
                    <th scope="col">วันที่</th>
                    <th scope="col">ชื่อ-นามสกุล</th>
                    <th scope="col">แบบทดสอบ</th>
                    
                    <th scope="col">คะแนนก่อนเรียน</th>
                    <th scope="col">คะแนนหลังเรียน</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                 
                  do { ?>


                    <tr class="text-center">
                      <td><?php echo date("d/m/Y" , strtotime($row_learning['user_learning_date'])); ?></td>
                      <td><?php echo $row_learning['Firstname']. "  " .$row_learning['Lastname']; ?></td>
                      <td><?php echo $row_learning['choice_name']; ?></td>
                      <td><?php echo $row_learning['user_learning_bf']; ?></td>
                      <td><?php echo $row_learning['user_learning_af']; ?></td>
                    </tr>

                    <?php 
                  
                  } while ($row_learning = mysqli_fetch_assoc($learning)); ?>

                </tbody>
            </table>
          <?php }else {
            echo "<h3> ยังไม่มีคะแนน </h3>";
          }

          mysqli_free_result($learning);?>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12"></div>
    </div>
  </div>
</div>
</div>
</div>
</div>


<style>
  .footer {
   position: fixed;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
 }
</style>

<?php include 'footer.php'; ?>
</html>