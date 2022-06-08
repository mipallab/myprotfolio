<?php
    include('header.php');
?>
        <div class="container">
            <h1 class="my-5">About Section</h1>
            <form class="bg-light p-5 shadow border">
               <div class="row mb-3">
                <label for="greatting" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                        <img src="./assects/media/img/users/pallab2.png" width="200px" alt="Profile Pic">
                    </div>
                </div> 
                <div class="row mb-3">
                    <label for="heading" class="col-sm-2 col-form-label">Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="" id="description" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <fieldset class="row mb-3 ">
                    <legend class="col-form-label col-sm-2 pt-0">About Me Details</legend>
                    <div class="col-sm-10 border p-4">                    
                        <!-- age -->
                        <label for="age" class="col-sm-2 col-form-label col-form-label-sm">Age</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="age">
                        </div>

                         <!-- email -->
                        <label for="email" class="col-sm-2 col-form-label col-form-label-sm">email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-sm" id="email">
                        </div>

                         <!-- skype -->
                        <label for="skype" class="col-sm-2 col-form-label col-form-label-sm">skype</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="skype">
                        </div>

                        <!-- phone -->
                        <label for="phone" class="col-sm-2 col-form-label col-form-label-sm">phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="phone">
                        </div>

                         <!-- Address -->
                        <label for="Address" class="col-sm-2 col-form-label col-form-label-sm">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="Address">
                        </div>

                         <!-- status -->
                        <label for="status" class="col-sm-2 col-form-label col-form-label-sm">status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="status">
                        </div>
                    </div>
                </fieldset>
              <br>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>


<?php
    include('footer.php');
?>