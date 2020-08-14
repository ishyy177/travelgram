<?php
require_once './main-components/head.php';
?>

<body id="home-body-bg">
    <header id="home-header">
    <?php
    if(isset($_GET['login'])){
        if($_GET['login'] == "success"){
            echo '<p id="home-para">You are logged in</p>';
        }
    }
    ?>
       <form id="logout-form" action="includes/login-process.php" method="post">
          <button class="logout-input" type="submit" name="logout-submit">logout</button>
       </form>

    </header>
    
    <div class="home-section">
        <div class="inner-home-section">
           <div class="todo-header">
               <h1 class="todo-h1">TravelDairy</h1>
               <form id="todo-form">
                   <input type="text" class="todo-input">
                   <button type="submit" class="todo-button">
                       <i class="fas fa-plus-square"></i>
                   </button>
                   <div class="select">
                       <select name="todos" class="filter-todo">
                           <option value="all">All</option>
                           <option value="completed">Completed</option>
                           <option value="uncompleted">Uncompleted</option>
                       </select>
                   </div>
               </form>
               <div class="todo-container">
                   <ul class="todo-list"></ul>
               </div>
           </div>
        </div>
    </div>
    
    <div id="gallery-header">
        <h1 id="gallery-title">Gallery</h1>
    </div>
    
    <div class="gallery-section">
        <div class="inner-gallery-section">
           <?php
            echo $msg = "";
            if(isset($_POST['upload'])){

                  $target = "gallery/".basename($_FILES['userfile']['name']);

                  include "./includes/photodb.php";
                   

                   $image = $_FILES['userfile']['name'];
                   $text = $_POST['text'];

                   $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
                   mysqli_query($conn, $sql);
               
               if(move_uploaded_file($_FILES['userfile']['tmp_name'], "gallery/".$_FILES['userfile']['name'])){
                   $msg = "image uploaded successfully";
               } else {
                   $msg = "there was a problem uploading image";
               }
               
            }  
                   

           ?>
            <form id="gallery-form" method="post" action="./home.php" enctype="multipart/form-data">
                 <div class="gallery-div">
                     <input type="file" name="userfile">
                 </div>
                 <div class="gallery-div">
                     <textarea id="gallery-textarea" name="text" cols="40" rows="4" placeholder="say something"></textarea>
                 </div>
                 <div class="gallery-div">
                     <button id="gallery-btn" type="submit" name="upload">upload</button>
                 </div>
            </form>

            <?php
             include "./includes/photodb.php";
             $sql = "SELECT * FROM images";
             $result = mysqli_query($conn, $sql);
             while($row = mysqli_fetch_array($result)){
                 echo "<div id='img_div'>";
                      echo "<div><a href='details.php?id= ".$row['id']."'><img id='gallery-image' src='gallery/".$row['image']."'></a></div>";
                      echo "<div><p id='gallery-para'>".$row['text']."</p></div>";
                      ?> 
                      <div class="delete-main-btn">
                          <div class="delete-btn">
                              <a href="includes/delete.php?id=<?php echo $row['id'] 
                              ?>"><button class="inner-delete-btn">delete</button></a> 
                          </div>
                      </div>
                      <?php
                 echo "</div>";
             }
            ?>
        </div>
    </div>

    <div class="footer">
        <a class="footer-links" href="about.php">about</a>
        <a class="footer-links" href="contact.php">contact</a>
    </div>


    
    <script src="JS/jscript.js"></script>
</body>
</html>


                        