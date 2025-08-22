<?php include '../nav/admin-header.php';?>

        <section class="vh-100" style="background-color: #f4f5f7;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0">
                <?php 
                    foreach ($profile as $pf){
                    ?>  
                        <div class="col-md-4 gradient-custom text-center text-dark"
                        style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                        <img src="<?= $pf['img']?>"
                            alt="Avatar" class="img-fluid my-5" style="width: 80px; border-radius: 20px;" />
                        <h5><?= $pf['fullname']?></h5>
                        <p> web developer</p>
                        <?php
                         echo "<button class='btn btn-primary btn-sm mx-5'
                                    title='Edit Profile'
                                    data-bs-toggle='modal'
                                    data-bs-target='#modal1'>
                                    <i class='far fa-edit'></i>
                                </button>";
                        ?>
                        </div>
                        <div class="col-md-8">
                        <div class="card-body p-4">
                            <h6>Information</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                            <div class="col-6 mb-3">
                                <h6>Email</h6>
                                <p class="text-muted"><?= $pf['email']?></p>
                            </div>
                            <div class="col-6 mb-3">
                                <h6>Phone</h6>
                                <p class="text-muted"><?= $pf['phone']?></p>
                            </div>
                            </div>
                            <h6>Projects</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                            <div class="col-6 mb-3">
                                <h6>Recent</h6>
                                <p class="text-muted">Lorem ipsum</p>
                            </div>
                            <div class="col-6 mb-3">
                                <h6>Most Viewed</h6>
                                <p class="text-muted">Dolor sit amet</p>
                            </div>
                            </div>
                            <div class="d-flex justify-content-start">
                            <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                            <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                            <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                         <?php
                        }?>
                            <?php
                                $n = 0;
                                $modals = "";
                                foreach ($profile as $data) {
                                    $n++;
                                    $card_id = htmlspecialchars($data['id']);
                                    $card_profile = htmlspecialchars($data['img']);
                                    $card_fname = htmlspecialchars($data['fullname']);
                                    $card_email = htmlspecialchars($data['email']);
                                    $card_phone = htmlspecialchars($data['phone']);

                                    // Add missing variables or initialize them
                                    $card_img = $card_profile;
                                    // Trigger Button
                                   

                                    // Modal Content
                                    $modals .= "
                                    <div class='modal fade' id='modal1' tabindex='-1' aria-labelledby='modalLabel$card_id' aria-hidden='true'>
                                        <div class='modal-dialog modal-dialog-centered'>
                                            <div class='modal-content rounded-4 py-4 px-4'>
                                                <form action='http://localhost/Sabillo/miks_tourismdestination/Admin/view/profile.php?page=Profile' method='post'>
                                                    <div class='modal-header p-4 border-bottom-0'>
                                                        <h1 class='fw-bold fs-4 mb-0' id='modalLabel$card_id'>Update Profile</h1>
                                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                    </div>
                                                    <div class='modal-body p-4 border border-dark'>
                                                        <img src='$card_img' alt='Card Image' class='img-fluid rounded mb-3'>

                                                        <div class='mb-2'><b>Image URL:</b></div>
                                                            <input class='form-control mb-3' type='text' name='img' value='$card_img' required>

                                                        <div class='mb-2'><b>Fullname:</b></div>
                                                            <input class='form-control mb-3' type='text' name='Fullname' value='$card_fname ' required>

                                                        <div class='mb-2'><b>Email:</b></div>
                                                            <input class='form-control mb-3' type='text' name='Email' value='$card_email' required>

                                                        <div class='mb-2'><b>Phone Number:</b></div>
                                                            <input class='form-control mb-3' type='tel' name='Phone' value='$card_phone' required>

                                                        <div class='mb-2'><b></b></div>
                                                            <input class='form-control mb-3' type='hidden' name='id' value='$card_id' required>
                                                    </div>
                                                    <div class='modal-footer justify-content-end'>
                                                        <button type='button' class='btn btn-warning btn-sm' data-bs-dismiss='modal'><span data-feather='trash'></span></button>
                                                        <button type='submit' class='btn btn-success btn-sm' name='btnpf'><span data-feather='save'></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                                }
                                echo $modals;
                                ?>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
   
<?php include '../nav/admin_footer.php';?>