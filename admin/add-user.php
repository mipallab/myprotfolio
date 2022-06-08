<?php


include ("header.php");
?>


      
        <div class="sign-up w-50 mx-auto my-5">
        
            <div class="card shadow">
                <div class="card-header">
                    <h2>Add User</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Full Name">
                        </div>
                        <div class="mb-3">
                            <label for="user-name" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="user-name" placeholder="User Name">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Role</label>
                            <select class="form-select" aria-label=".form-select example">
                                <option value="1">Visitor</option>
                                <option value="2">Editor</option>
                                <option value="3">Admin</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" class="form-control" id="email" placeholder="email">
                        </div>
                        <div class="mb-3">
                            <label for="profession" class="form-label">Profession</label>
                            <input type="text" class="form-control" id="profession" placeholder="Profession">
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" class="form-control" id="age" placeholder="Age">
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="photo">
                        </div><br><br>
                        <input type="submit" value="Save" class="btn btn-primary">
                    </form>
                </div>
                    

                <div class="card-footer">  
                    <a href="#">Already have an account.</a>
                </div>
            </div>
        </div>
    </div>

    
<?php
    include ("footer.php");
?>