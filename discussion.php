<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shuffle</title>
        <link rel="icon" type="image/x-icon" href="./Shuffle.png">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="./css/bootstrap.css">


</head>
<body>

 <div class="row">
     <div class="col-sm nav-col-grey ">
       <nav class="nav1">

         <a href="SignUp.html">Sign Up</a>
         <a href="LogIn.html">Log In</a>

       </nav>
     </div>

     <div class="col-sm nav-col-grey">
       <center><a href="project.php"><img src="./Shuffle.png" alt=""></a></center>
     </div>

     <div class="col-sm nav-col-grey" >
       <p id="user" class="user-name">
         <?php
         session_start();
         echo "Welcome " .  ($_SESSION['email3'][0]);


          ?>
         </p>
     </div>
   </div>


  <div class="div2">
   <nav class="nav2">
     <a href="#">News</a>
     <a href="#">Information</a>
     <a href="discussion.php">Discussion</a>
     <a href="#">Development</a>
     <a href="#">More</a>
   </nav>
  </div>

  <div class="card">
    <h5 class="card-header">Featured</h5>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="card">
    <h5 class="card-header">Featured</h5>
    <div class="card-body">

      <p class="card-text"><form method="post" action="">
                               <textarea name="comment" placeholder="Write your comment"></textarea><br>
                               <input type="submit" value="Post Comment" class="btn btn-primary">
                           </form>
                           </p>

    </div>
  </div>
<?php

// Establish database connection (replace these with your actual database credentials)
$conn = mysqli_connect("localhost", "root", "", "login");
$username = mysqli_real_escape_string($conn, ($_SESSION['email3'][0]));
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if it's a comment or a reply
    if (isset($_POST['comment'])) {
        // Insert new comment into the comments table
        $comment = mysqli_real_escape_string($conn, $_POST['comment']);
        $username = mysqli_real_escape_string($conn, ($_SESSION['email3'][0]));
        $date = date("Y-m-d H:i:s");
        $sql = "INSERT INTO comments (comment, date,username) VALUES ('$comment', '$date','$username')";
        if (mysqli_query($conn, $sql)) {
            echo "Comment added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } elseif (isset($_POST['reply']) && isset($_POST['comment_id'])) {
        // Insert new reply into the replies table
        $reply = mysqli_real_escape_string($conn, $_POST['reply']);
        $comment_id = mysqli_real_escape_string($conn, $_POST['comment_id']);

        $date = date("Y-m-d H:i:s");
        $sql = "INSERT INTO replies (comment_id, reply, date,username) VALUES ('$comment_id', '$reply', '$date','$username')";
        if (mysqli_query($conn, $sql)) {
            // Optionally, you can echo a success message or perform other actions upon successful reply insertion
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

// Fetch comments and their replies from the database
$sql = "SELECT * FROM comments ORDER BY date DESC";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($comment = mysqli_fetch_assoc($result)) {
        echo "<div style='display: inline-block;'>";
        echo "<p><strong>{$comment['username']}</strong>: {$comment['comment']}</p>";


        // Fetch replies for this comment
        $comment_id = $comment['comment_id'];
        $sql = "SELECT * FROM replies WHERE comment_id = '$comment_id' ORDER BY date ASC";
        $reply_result = mysqli_query($conn, $sql);

        if ($reply_result) {
            while ($row = mysqli_fetch_assoc($reply_result)) {

                    echo "<p><strong>-{$row['username']}</strong>: {$row['reply']}</p>";
                }
        } else {
            echo "Error fetching replies: " . mysqli_error($conn);
        }
        ?>
        <form method="post" action="" style="margin-left: 20px;">
            <input type="hidden" name="comment_id" value="<?php echo $comment['comment_id']; ?>">
            <textarea name="reply" placeholder="Write your reply"></textarea><br>
            <input type="submit" value="Post Reply">
        </form>
        <?php
        echo "</div>";
    }
} else {
    echo "Error fetching comments: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);

?>
<!-- HTML form to submit comments and replies -->


</body>
</html>
