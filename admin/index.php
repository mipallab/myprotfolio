<?php
    include('header.php');
?>
<style>
    #menu-btn {
        display: none;
    }
</style>

<div class="container">
   <div class="card w-25 mx-auto my-5 shadow">
       <div class="card-header">
           <h2 class="card-title">Log In</h2>
       </div>
       <div class="card-body">
           <form action="" method="POST">
               <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="password" required>
                </div>
                <input type="submit" class="form-control btn btn-secondary" value="Log In">
           </form>
       </div>
   </div>
</div>

<?php
    include('footer.php');
?>