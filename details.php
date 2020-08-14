<?php
  require_once "./main-components/head.php";
?>

<body>

<div class="details-main-section">
<div class="opacity"></div>
<div id="detail-back-div">
    <a href="home.php"><button id="back-btn">back</button></a>
</div>

    <div class="inner-details-section">

<?php

$id = $_GET['id'];

include "./includes/photodb.php";

$sql = "SELECT * FROM images WHERE id = $id";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        ?>
         <img id="detail-gallery-image" src="gallery/<?php echo $row['image']?>" alt="">
         <p id="detail-gallery-para"><?php echo $row['text'];?></p>
        <?php
    }
}
?>
    </div>
</div>
</body>