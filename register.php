<?php 
  $title= 'register Form';
  require_once 'header.php';
 

 ?>
 
<div class="body m-5">
<div class="container">
    <div class="row">
        <div class="col-6 m-auto">
            <div class="card mb-3">
                <div class="card-header bg-info text-center ">
                    <h1>Register Frome</h1>
                </div>
                    <div class="card-body">
                        <form action="register_post.php" method="post">
                        <div class="form-group">
                            <label for="name">Enter Your Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name" name="name" value="<?php

                            if(isset($_GET['old_name'])){
                                echo $_GET['old_name'];
                            }
                            ?>" name="name">

                            <span style="color: red ">
                            <?php
                            if (isset($_GET['name_err'])){

                                echo $_GET['name_err'];
                            }
                            ?>
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="email">Enter your email</label>
                            <input type="text" class="form-control" placeholder="Enter your email" id="email1" name="email" value="<?php

                            if(isset($_GET['old_email'])){
                                echo $_GET['old_email'];
                            }

                            ?>">
                            <span style="color: red ">
                            <?php
                            if (isset($_GET['email_err'])) {
                                echo $_GET['email_err'];
                            }
                            ?>
                            </span>
                            <span style="color: red ">
                            <?php
                            if (isset($_GET['invalid_err'])) {
                                echo $_GET['invalid_err'];
                            }
                            ?>
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="phone">Enter your phone</label>
                            <input type="number" class="form-control" placeholder="Enter your phone" id="phone" name="phone" value="<?php

                            if(isset($_GET['old_phon'])){
                                echo $_GET['old_phon'];
                            }

                            ?>">
                            <span style="color: red ">
                            <?php
                            if (isset($_GET['phone_err'])) {
                                echo $_GET['phone_err'];
                            }
                            ?>
                            </span>
                            <span style="color: red ">
                            <?php
                            if (isset($_GET['string_err'])) {
                                echo $_GET['string_err'];
                            }
                            ?>
                            </span>

                        </div>

                        <div class="form-group">
                            <label for="password">Enter Password</label>
                            <input type="password" class="form-control" placeholder="Enter your password" id="password" name="password">
                            <?php
                            if (isset($_GET['password_err'])) {
                                echo $_GET['password_err'];

                            }

                            ?>
                            <span style="color: red ">
                            <?php
                            if (isset($_GET['strong_err'])) {
                                echo $_GET['strong_err'];

                            }

                            ?>
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="password"> confrem Password</label>
                            <input type="password" class="form-control" placeholder="Enter your confrem passwerd" id="password" name="confrem_password">
                            <?php
                            if (isset($_GET['confrem_password_err'])) {
                                echo $_GET['confrem_password_err'];

                            }

                            ?>
                            <span style="color: red ">
                            <?php
                            if (isset($_GET['confrem_password_err'])) {
                                echo $_GET['confrem_password_err'];

                            }

                            ?>
                            </span>

                        </div>

                        <div class="form-group">
                            <label>Gender</label><br>
                            <input type="radio"  value="male" name="gender"> Male
                            <input type="radio"  value="female" name="gender"> Female
                            <input type="radio"  value="others" name="gender"> Others <br>

                            <span style="color: red ">
                            <?php
                            if (isset($_GET['gender_err'])) {
                                echo $_GET['gender_err'];

                            }

                            ?>
                            </span>

                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>




<?php 
    require_once 'footer.php';
  ?>

   