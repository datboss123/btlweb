<?php
    include("webdataconnect.php");
    $sql = "Select * from blogs LIMIT 0, 3";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>
    <div class="col-lg-4 col-md-6">
        <div class="service-item">
            <a href="#" class="services-item-image"><img src="<?php echo $row["linkimage"]?>" class="img-fluid" alt=""></a>

            <div class="down-content">
                <h4><a href="#"><?php echo $row["description"]?></a></h4>

                <p style="margin: 0;"> <?php echo $row["author"]?> &nbsp;&nbsp;|&nbsp;&nbsp; <?php echo $row["date"]?>  </p>
            </div>
        </div>
    </div>
<?php
}   
} ?>