<?php
    include('header.php');
    
    $connect = mysqli_connect("localhost","root",'',"myprotfolio") or die("Server Connection Failed!");
      $user_sql = "SELECT * FROM users";
      $user_query = mysqli_query($connect, $user_sql) ;
      $user_row = mysqli_fetch_assoc($user_query);
?>
        
        <div class="container">
            <h1 class="py-2">Header Section</h1>
            <form class="bg-light p-5 border shadow">
              <div class="row mb-3">
                <label for="greatting" class="col-sm-2 col-form-label">Greattings</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="greatting">
                </div>
              </div>
              <div class="row mb-3">
                <label for="heading" class="col-sm-2 col-form-label">Heading</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="heading">
                </div>
              </div>
              <fieldset class="row mb-3 ">
                <legend class="col-form-label col-sm-2 pt-0">Social Links</legend>
                <div class="col-sm-10 border p-4">
                    
                    <!-- facebook -->
                    <label for="facebook" class="col-sm-2 col-form-label col-form-label-sm">Facebook</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="facebook">
                    </div>

                     <!-- twitter -->
                    <label for="twitter" class="col-sm-2 col-form-label col-form-label-sm">twitter</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="twitter">
                    </div>

                     <!-- skype -->
                    <label for="skype" class="col-sm-2 col-form-label col-form-label-sm">skype</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="skype">
                    </div>

                     <!-- instagram -->
                    <label for="instagram" class="col-sm-2 col-form-label col-form-label-sm">instagram</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="instagram">
                    </div>

                     <!-- linkedin -->
                    <label for="linkedin" class="col-sm-2 col-form-label col-form-label-sm">linkedin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="linkedin">
                    </div>

                     <!-- behance -->
                    <label for="behance" class="col-sm-2 col-form-label col-form-label-sm">behance</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="behance">
                    </div>

                     <!-- redit -->
                    <label for="redit" class="col-sm-2 col-form-label col-form-label-sm">redit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="redit">
                    </div>

                     <!-- what's app -->
                    <label for="whatsapp" class="col-sm-2 col-form-label col-form-label-sm">what's app</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="whatsapp">
                    </div>

                     <!-- imo -->
                    <label for="imo" class="col-sm-2 col-form-label col-form-label-sm">imo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="imo">
                    </div>

                     <!-- email -->
                    <label for="email" class="col-sm-2 col-form-label col-form-label-sm">email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control form-control-sm" id="email">
                    </div>

                     <!-- phone -->
                    <label for="phone" class="col-sm-2 col-form-label col-form-label-sm">phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="phone">
                    </div>

                </div>

              </fieldset>
              <br>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>

    </section>


<?php
    include('footer.php');
?>