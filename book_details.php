<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "<h2>Thank you for your purchase, $name!</h2>";
    echo "<p>We will send a confirmation to your email: $email</p>";
  
} else {
  ?>
     <h2>Purchase a Book</h2>
    <form method='post' action='cart.php' enctype='multipart/form-data'>
    <label for='name'>Name:</label>
   <input type='text' id='name' name='name' required  style='margin-bottom: 10px; border-radius: 5px; border: 2px solid #ccc;' >
    <br>
    <label for='email'>Email:</label>
    <input type='email' id='email' name='email' required  style='margin-bottom: 10px; border-radius: 5px; border: 2px solid #ccc;'>
    <br>
    <input type='hidden' name='image' value='<?php echo $_GET['image'];?>'>
    <input type='hidden' name='title' value='<?php echo $_GET['title'];?>'>
    <input type='hidden' name='author' value='<?php echo $_GET['author'];?>'>
    <input type='hidden' name='price' value='<?php echo $_GET['price'];?>'>
    <button type='submit'
     style='background-color: #4CAF50; color: white; border: none; padding: 10px 20px; 
    text-align: center; text-decoration: none; display: inline-block; 
    font-size: 16px; margin: 4px 2px; cursor: pointer;
     border-radius: 5px;'>Purchase</button>
    </form>
    <p>By purchasing a book, you agree to our terms and conditions.</p>
   <?php 
}
?>