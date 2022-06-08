<?php
    include('header.php');
?>
<div class="container">
    <h1 class="my-5">MY Client-Testimonials Section</h1>

    <!-- Section Title -->
    <form class="bg-light my-5 p-5 border shadow clearfix" action="" method="POST">              
        <div class="row  mb-5">
            <label for="heading" class="col-sm-2 col-form-label">Section Title Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="heading">
            </div>
        </div>
            <button type="submit" class="btn btn-primary float-end">Update</button>
    </form>                
    
    <!-- testimonials Section -->
    <form class="bg-light p-5 border shadow clearfix" action="" method="POST" >
        <fieldset class="row bg-light mb-3 ">
            <legend class="col-form-label col-sm-2 pt-0">Testimonials Section</legend> 
            <div class="col-sm-10 border p-4">
                <h4 class="mb-5">Living  testimonials in website</h4>
                <!-- one exp -->
                <div class="row">                        
                    <div class="row mb-3">
                        <label for="file" class="col-sm-2 col-form-label col-form-label-sm">Client Img</label>
                        <div class="col-sm-10">
                          <!-- <input type="file" class="form-control form-control-sm" id="file"> -->
                           <img src="../images/testimonials/client1.jpg" width="100px" alt="client">
                        </div>
                    </div>
              
                    <div class="row mb-3">
                        <label for="ex-title" class="col-sm-2 col-form-label col-form-label-sm">Client Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="ex-title"  value="Braiden">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="company-name" class="col-sm-2 col-form-label col-form-label-sm">Company Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="company-name" value="Web Designer">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ex-description" class="col-sm-2 col-form-label col-form-label-sm">Testimonial</label>
                        <div class="col-sm-10">
                            <textarea class="form-control form-control-sm" id="ex-description" rows="5" value="">MI Pallab is a great co-worker and problem solver. He is quick to extend his helping hand and makes a good team player. 1</textarea>
                        </div>
                    </div>                            
                    <hr>                 
                </div>

                <!-- two exp -->
                <div class="row">                        
                    <div class="row mb-3">
                        <label for="file" class="col-sm-2 col-form-label col-form-label-sm">Client Img</label>
                        <div class="col-sm-10">
                          <!-- <input type="file" class="form-control form-control-sm" id="file"> -->
                           <img src="../images/testimonials/client2.jpg" width="100px" alt="client2">
                        </div>
                    </div>
              
                    <div class="row mb-3">
                        <label for="ex-title" class="col-sm-2 col-form-label col-form-label-sm">Client Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="ex-title"  value="Ariya">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="company-name" class="col-sm-2 col-form-label col-form-label-sm">Company Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="company-name" value="Web Developer">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ex-description" class="col-sm-2 col-form-label col-form-label-sm">Testimonial</label>
                        <div class="col-sm-10">
                            <textarea class="form-control form-control-sm" id="ex-description" rows="5" value="">MI Pallab is a great co-worker and problem solver. He is quick to extend his helping hand and makes a good team player 2</textarea>
                        </div>
                    </div>                            
                    <hr>                 
                </div>

                <!-- three exp -->
                <div class="row">                        
                    <div class="row mb-3">
                        <label for="file" class="col-sm-2 col-form-label col-form-label-sm">Client Img</label>
                        <div class="col-sm-10">
                          <!-- <input type="file" class="form-control form-control-sm" id="file"> -->
                           <img src="../images/testimonials/client3.jpg" width="100px" alt="client3">
                        </div>
                    </div>
              
                    <div class="row mb-3">
                        <label for="ex-title" class="col-sm-2 col-form-label col-form-label-sm">Client Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="ex-title"  value="Aiyana">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="company-name" class="col-sm-2 col-form-label col-form-label-sm">Company Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="company-name" value="CEO / Web Design Company">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ex-description" class="col-sm-2 col-form-label col-form-label-sm">Testimonial</label>
                        <div class="col-sm-10">
                            <textarea class="form-control form-control-sm" id="ex-description" rows="5" value="">MI Pallab displays exemplary professionalism and is able to take on challenges. He learns quickly and is an asset to any team. 3</textarea>
                        </div>
                    </div>                            
                    <hr>                 
                </div>

                <!-- four exp -->
                <div class="row">                        
                    <div class="row mb-3">
                        <label for="file" class="col-sm-2 col-form-label col-form-label-sm">Client Img</label>
                        <div class="col-sm-10">
                          <!-- <input type="file" class="form-control form-control-sm" id="file"> -->
                           <img src="../images/testimonials/client4.jpg" width="100px" alt="client4">
                        </div>
                    </div>
              
                    <div class="row mb-3">
                        <label for="ex-title" class="col-sm-2 col-form-label col-form-label-sm">Client Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="ex-title"  value="Alexander">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="company-name" class="col-sm-2 col-form-label col-form-label-sm">Company Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="company-name" value="CEO / Web Design Company">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ex-description" class="col-sm-2 col-form-label col-form-label-sm">Testimonial</label>
                        <div class="col-sm-10">
                            <textarea class="form-control form-control-sm" id="ex-description" rows="5" value="">MI Pallab is a great co-worker and problem solver. He is quick to extend his helping hand and makes a good team player. 4</textarea>
                        </div>
                    </div>                            
                    <hr>                 
                </div>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary float-end mt-5">Update</button>
    </form>

    <!-- add new  -->
    <div class=" bg-light mt-5">
        <form class="bg-light border shadow clearfix p-5">
            <fieldset class="row mb-3 ">
                <legend class="col-form-label col-sm-2 pt-0">Add Client Testimonial Section</legend> 
                <div class="col-sm-10 border p-4">
                    <h4 class="fs-6">Add Client exprience</h4><br>
                    <!-- one exp -->
                    <div class="row">                                
                        <div class="row mb-3">
                            <label for="file" class="col-sm-2 col-form-label col-form-label-sm">Client Img</label>
                            <div class="col-sm-10">
                               <input type="file" class="form-control form-control-sm" id="file"> 
                              <!--  <img src="../images/services/ui-ux.svg" alt="ui-ux"> -->
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ex-title" class="col-sm-2 col-form-label col-form-label-sm">Testimonial Tilte</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="ex-title" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="company-name" class="col-sm-2 col-form-label col-form-label-sm">Company Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="company-name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ex-description" class="col-sm-2 col-form-label col-form-label-sm">Testimonial</label>
                            <div class="col-sm-10">
                                <textarea class="form-control form-control-sm" id="ex-description" rows="5" value=""></textarea>
                            </div>
                        </div>    
                    </div>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary float-end mt-4">Save</button>
        </form>
    </div>
</div>



<?php
    include('footer.php');
?>