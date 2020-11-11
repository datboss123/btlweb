<div class="row">
    <div class="col-md-12">
        <div class="section-heading">
            <h2>Liên hệ với chúng tôi</h2>
        </div>
    </div>
    <?php
    include("webdataconnect.php");
    $sql = "Select * from aboutus where id=1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>
    <div class="col-md-6">
        <div class="left-content">
        <p> <?php echo $row["description"] ?></p>
        <a href="about-us.php" class="filled-button">Đọc thêm</a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="right-image">
            <img src="<?php echo $row["linkImage"] ?>" alt="">
        </div>
    </div>
    <?php
        }   
        } ?>


</div>