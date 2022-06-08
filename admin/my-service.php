<?php
    include('header.php');
?>  
        <div class="container">
            <h1 class="my-5">My Service Section</h1>
            <form class="bg-light p-5 border shadow">
                <div class="row mb-3">
                    <label for="heading" class="col-sm-2 col-form-label">Section Title Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="" id="description" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <fieldset class="row mb-3 ">
                    <legend class="col-form-label col-sm-2 pt-0">Icon Section</legend>
                    <div class="col-sm-10 border p-4">                       
                        
                        <!--  -->
                        <div class="row">
                            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100"><img class="mb-2" src="../images/services/web-design.svg" width="96" height="96" alt="web design"/>
                                <div class="h5">Web Design</div>
                            </div>
                            <!-- graphic design -->
                            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100"><img class="mb-2" src="../images/services/graphic-design.svg" width="96" height="96" alt="graphic design"/>
                                <div class="h5">graphic Design</div>
                            </div>
                            <!-- ui-ux design -->
                            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100"><img class="mb-2" src="../images/services/ui-ux.svg" width="96" height="96" alt="ui-ux design"/>
                                <div class="h5">UI-UX Design</div>
                            </div>
                            <!-- App Development -->
                            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100"><img class="mb-2" src="../images/services/app-development.svg" width="96" height="96" alt="App Development"/>
                                <div class="h5">App Development</div>
                            </div>
                        </div>
                            <hr>
                            <br>
                        <fieldset>
                            <h4>Add Icon Section</h4>
                            <!-- Icon -->
                            <label for="input" class="col-sm-2 col-form-label col-form-label-sm">Icon Image</label>
                            <div class="col-sm-10">
                                <input class="form-control form-control-sm" id="input" type="file">
                            </div>

                            <!-- Icon -->
                            <label for="icon title" class="col-sm-2 col-form-label col-form-label-sm">Icon Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="icon title">
                            </div>
                        </fieldset>
                    </div>
                </fieldset>
              <br>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>

            <!-- add form -->
            <h3 class="mt-5">Add Icon Section</h3>
            <form class="bg-light p-5 border shadow">
                <fieldset class="row mb-3 ">
                    <legend class="col-form-label col-sm-2 pt-0">Add Icon</legend>
                    <div class="col-sm-10 border p-4">
                        <fieldset>
                            <h4>Add Icon Section</h4>
                            <!-- Icon -->
                            <label for="input" class="col-sm-2 col-form-label col-form-label-sm">Icon Image</label>
                            <div class="col-sm-10">
                                <input class="form-control form-control-sm" id="input" type="file">
                            </div>

                            <!-- Icon -->
                            <label for="icon title" class="col-sm-2 col-form-label col-form-label-sm">Icon Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="icon title">
                            </div>
                        </fieldset>
                    </div>
                </fieldset>
              <br>
            <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>


<?php
    include('footer.php');
?>