<?php
    include('header.php');
?>
        <div class="container">
            <h1 class="my-5">Contact Section</h1>
            <form class="bg-light p-5 shadow border">
                <div class="row mb-3">
                <label for="heading" class="col-sm-2 col-form-label">Section title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="heading">
                    </div>
                </div> 
                <div class="row mb-3">
                    <label for="heading" class="col-sm-2 col-form-label">Heading title</label>
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
                    <legend class="col-form-label col-sm-2 pt-0">Contact Me Details</legend>
                    <div class="col-sm-10 border p-4">                    
                       
                        <!-- email -->
                        <label for="email" class="col-sm-2 col-form-label col-form-label-sm">email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-sm" id="email">
                        </div>

                        <!-- IMO -->
                        <label for="age" class="col-sm-2 col-form-label col-form-label-sm">IMO</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="IMO">
                        </div>

                        <!-- phone -->
                        <label for="phone" class="col-sm-2 col-form-label col-form-label-sm">phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="phone">
                        </div>

                        <!-- what's app -->
                        <label for="skype" class="col-sm-2 col-form-label col-form-label-sm">what's app</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="what's app">
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