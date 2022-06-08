<?php
    include('header.php');
?>
    <div class="container">
        <div class="card shadow">
            <div class="card-header clearfix">
                <h2 class="card-title float-start">Users List</h2>
                <a href="add-user.php" class="btn btn-primary float-end"> Add People</a>
            </div>            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Profession</th>
                            <th scope="col">Age</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Satus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Majadul Islam Pallab</td>
                                <td>MI_Name</td>
                                <td>pallab4842@gmail.com</td>
                                <td>1650 Monohardi, Narshingdi, Dhaka, Bangladesh (BD)</td>
                                <td>Full Stack Dev.</td>
                                <td>26</td>
                                <td><img src="assects/media/img/users/pallab2.png" width="100px" alt=""></td>
                                <td>
                                    <a href="edit.php" class="btn btn-sm btn-info">Edit</a>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#viewModel">View</button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModel">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->
            
            <!-- Modal View -->
            <div class="modal fade" id="viewModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Profile</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="my-profile bg-light py-5 border">
                        <div class="profile-img text-center bg-light ">
                            <img class="rounded-circle" src="assects/media/img/users/pallab2.png" width="200px" alt="porfile Pic">
                            <br><small class="fs-6 d-block fw-light p-2">Admin</small>
                        </div>
                        <br>
                        <div class="oner-name text-center">
                            <h3>Majadul Islam Pallab </h3>
                            <h6>Front-End-Developer</h6>
                        </div>
                        <br><br>
                    </div>

                    <div class="profile-table table-responsive p-4 ">
                    <table class="table table-hover border">
                       
                        <tbody>
                            <tr>
                                
                                <th>Name</th>
                                <td>Majadul Islam Pallab</td>
                            </tr>
                            <tr>
                                
                                <th>Username</th>
                                <td>MI_Pallab</td>
                            </tr>
                            <tr>
                                
                                <th>Profession</th>
                                <td>Full Stack Dev.</td>
                            </tr>
                            <tr>
                               
                                <th>Age</th>
                                <td>26</td>
                            </tr>
                            <tr>
                              
                                <th>Password</th>
                                <td>Pallab@123</td>
                            </tr>
                            <tr>
                                
                                <th>Email</th>
                                <td>pallab4842@gmail.com</td>
                            </tr>
                            <tr>
                                
                                <th>Address</th>
                                <td>1650 Monohardi, Narshingdi, Dhaka, Bangladesh (BD)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>


            <!-- Modal edit -->
            <div class="modal fade" id="editModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Profile</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="my-profile bg-light py-5 border">
                        <div class="profile-img text-center  ">
                            <img class="rounded-circle" src="assects/media/img/users/pallab2.png" width="200px" alt="porfile Pic">
                            <br><br>
                            <select class=" w-25 mx-auto form-select form-select-sm" name="" id="">
                                <option value="">Admin</option>
                                <option value="">Editor</option>
                                <option value="">Visitor</option>
                            </select>
                            
                        </div>
                        <br>
                        <div class="oner-name text-center">
                            <h3>Majadul Islam Pallab <small>admin</small></h3>
                            <h6>Front-End-Developer</h6>
                        </div>
                    </div>

                    <div class="profile-table table-responsive p-4 ">
                        <form action="" method="POST">
                            <table class="table table-hover border">
                            
                                <tbody>
                                    <tr>
                                        
                                        <th>Name</th>
                                        <td><input class="form-control" value="Majadul Islam Pallab"></td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <th>Username</th>
                                        <td><input class="form-control" value="MI_Name"></td>
                                    </tr>
                                    <tr>
                                        
                                        <th>Profession</th>
                                        <td><input class="form-control" value="Full Stack Dev."></td>
                                    </tr>
                                    <tr>
                                    
                                        <th>Age</th>
                                        <td><input class="form-control" value="26"></td>
                                    </tr>
                                    <tr>
                                    
                                        <th>Password</th>
                                        <td><input class="form-control" value="Pallab@123"></td>
                                    </tr>
                                    <tr>
                                        
                                        <th>Email</th>
                                        <td><input class="form-control" value="pallab4842@gmail.com"></td>
                                    </tr>
                                    <tr>
                                        
                                        <th>Address</th>
                                        <td><input class="form-control" value="1650 Monohardi, Narshingdi, Dhaka, Bangladesh (BD)"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                </div>
                </div>
            </div>
            </div>

            <!-- delete modal -->
            <div class="modal  fade" id="deleteModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog w-25">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are Your Sure ?
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
                </div>
            </div>
            </div>
    </div>


<?php
    include('footer.php');
?>