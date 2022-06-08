<?php
    include('header.php');
?>       
        <div class="container">
            <h1 class="my-5 my">MY Skill Section</h1>
            <form class="bg-light border shadow p-5">
              
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
                <legend class="col-form-label col-sm-2 pt-0">Progress Section</legend>
                <div class="col-sm-10 border p-4">
                    <div class="row">
                        
                        <div class="row">
                            <div class="input-group input-group-sm m-3">
                                <input type="number" class="form-control" placeholder="HTML5" aria-label="HTML5">
                                <span class="input-group-text mr-3">%</span>
                            
                                <input type="number" class="form-control" placeholder="CSS3" aria-label="CSS3">
                                <span class="input-group-text mr-3">%</span>

                                <input type="number" class="form-control" placeholder="JavaScript" aria-label="JavaScript">
                                <span class="input-group-text mr-3">%</span>
                            
                                <input type="number" class="form-control" placeholder="React" aria-label="React">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group input-group-sm m-3">
                                <input type="number" class="form-control" placeholder="PHP" aria-label="PHP">
                                <span class="input-group-text mr-3">%</span>
                            
                                <input type="number" class="form-control" placeholder="WordPress" aria-label="WordPress">
                                <span class="input-group-text mr-3">%</span>

                                <input type="number" class="form-control" placeholder="MySQL" aria-label="MySQL">
                                <span class="input-group-text mr-3">%</span>
                            
                                <input type="number" class="form-control" placeholder="Photoshop" aria-label="Photoshop">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                            
                    </div>
                    

                        <hr>
                        <br>
                        <fieldset>
                            <h4>Add Progress Section</h4>
                        <div class="row">
                            <!-- progress -->
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control mr-3" placeholder="title name" aria-label="MySQL">
                                
                            
                                <input type="number" class="form-control" placeholder="percentage" aria-label="Photoshop">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                            
                        </fieldset>

                </div>

              </fieldset>
              <br>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>


<?php
    include('footer.php');
?>