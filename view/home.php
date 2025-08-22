<?php include '../nav/admin-header.php';?>
            <div class="row table-responsive">
                <div class="col-md-12">
                    <h2>Card Featured </h2>
                    <div class="table-responsive">
                    <table id="table2" class=" table-hover ">
                        <thead class="table1  ">
                        <tr align="center">
                            <th>No.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="table2 ">
                        <?php
                            $n = 0;
                            $modals = "";
                            foreach ($card as $data) {
                            $n++;
                            $card_id = htmlspecialchars($data['card_id']);
                            $card_title = htmlspecialchars($data['card_title']);
                            $card_prg = htmlspecialchars($data['card_prg']);
                            $card_img = htmlspecialchars($data['card_img']);
                            $card_time = htmlspecialchars($data['Time']);
                        ?>
                            <tr>
                            <td><?= $n ?></td>
                            <td style="
                                background-image: url(<?= $card_img ?>);
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;
                            ">
                                <b style="text-shadow: -1px -1px 0 white,
                                                1px -1px 0 white,
                                                -1px  1px 0 white, 
                                                1px  1px 0 white;">
                                <?= $card_title ?>
                                </b>
                            </td>
                            <td id="msg" style="text-align: justify;"><?= $card_prg ?></td>
                            <td><?= $card_time ?></td>
                            <td align="center">
                                <button class="btn btn-primary btn-sm "
                                        title="View & Edit card"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal1<?= $card_id ?>">
                                <span data-feather="edit" title="Card"></span>
                                </button>
                                <button type="button"
                                        title="Add New Card"
                                        class="btn btn-primary btn-sm m-2" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#exampleModal">
                                <span data-feather="save" title="Card"></span>
                                </button>
                            </td>
                            </tr>
                        <?php
                            // Append modal after row
                            $modals .= "
                            <div class='modal fade' id='modal1$card_id' tabindex='-1' role='dialog' aria-labelledby='modalLabel$card_id' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered-top'>
                                <div class='modal-content rounded-4 py-4 px-4'>
                                <form action='../page/admin_home.php?function=home' method='post'>
                                    <div class='modal-header p-4 border-bottom-0'>
                                    <h1 class='fw-bold fs-4 mb-0' id='modalLabel$card_id'>Update Hero Featured</h1>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body p-4 border border-dark'>
                                    <img src='$card_img' alt='Card Image' class='img-fluid rounded mb-3'>
                                    <div class='mb-2'><b>image Link:</b></div>
                                    <input class='form-control mb-3' type='text' name='img' value='$card_img' required>
                                    <div class='mb-2'><b>Title:</b></div>
                                    <input class='form-control mb-3' type='text' name='title' value='$card_title' required>
                                    <div class='mb-2'><b>Description:</b></div>
                                    <textarea class='form-control auto-resize' name='desc' oninput='autoResizeTextarea(this)' required>$card_prg</textarea>
                                    <div class='mb-2'><b></b></div>
                                    <input type='hidden' value='$card_id' name='id' />
                                    </div>
                                    <div class='modal-footer justify-content-end'>
                                    <a class='btn btn-warning btn-sm'
                                       href='../page/admin_home.php?function=deletehomecard&delete_id1=$card_id'
                                       title='DELETE'
                                       onclick='return confirm('Are you sure you want to delete this card?');'>
                                       <span data-feather='trash' title='DELETE'></span>
                                    </a>
                                    <button type='submit' class='btn btn-success btn-sm'><span data-feather='save'></span></button>
                                    </div>
                                </form>
                                </div>
                            </div>
                            </div>
                            ";
                        } ?>
                        </tbody>
                    </table>
                    </div>
                    <?= $modals ?>
                </div>
                <!-- Button trigger modal -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Card</h1> 
                            <div class='modal-header p-4 border-bottom-0'>
                                <h1 class='fw-bold fs-4 mb-0' id='modalLabel$card_id'></h1>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form action='../page/admin_home.php?function=INSERThomecard' method='post'>
                                <div class='modal-body p-4 border border-dark'>
                                    <div class='mb-2'><b>image Link:</b></div>
                                        <input class='form-control mb-3' type='text' name='img'>
                                    <div class='mb-2'><b>Title:</b></div>
                                        <input class='form-control mb-3' type='text' name='title'>
                                    <div class='mb-2'><b>Description:</b></div>
                                        <textarea class='form-control auto-resize' name='desc'></textarea>
                                    <div class='mb-2'><b></b></div>
                                        <input type='hidden' name='id' />
                                </div>
                                <div class='modal-footer justify-content-end'>
                                    <button type='submit' class='btn btn-success btn-sm'><span data-feather='save'></span></button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="p-3 m-3"></div>
                <div class="col-md-12">
                    <h2>carousel Featured </h2>
                    <div class="table-responsive">
                    <table id="table3" class=" table-hover ">
                        <thead class="table1  ">
                        <tr align="center">
                            <th>No.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="table2 ">
                        <?php
                            $n = 0;
                            $modals = "";
                            foreach ($carousel as $data){
                            $n++;
                            $card_id = htmlspecialchars($data['carousel_id']);
                            $card_title = htmlspecialchars($data['carousel_title']);
                            $card_prg = htmlspecialchars($data['carousel_desc']);
                            $card_img = htmlspecialchars($data['carousel_img']);
                        ?>
                            <tr>
                            <td><?= $n ?></td>
                            <td style="
                                background-image: url(<?= $card_img ?>);
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;
                            ">
                                <b style="text-shadow: -1px -1px 0 white,
                                                1px -1px 0 white,
                                                -1px  1px 0 white, 
                                                1px  1px 0 white;">
                                <?= $card_title ?>
                                </b>
                            </td>
                            <td id="msg" style="text-align: justify;"><?= $card_prg ?></td>
                            <td align="center">
                                <button class="btn btn-primary btn-sm"
                                        title="View & Edit Carouse"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal2<?= $card_id ?>">
                                <span data-feather="edit" title="Card"></span>
                                </button>
                                <button type="button"
                                        title="Add New Carousel"
                                        class="btn btn-primary btn-sm m-2" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#exampleModal2">
                                <span data-feather="save" title="Carousel"></span>
                                </button>
                            </td>
                            </tr>
                        <?php
                            // Append modal after row
                            $modals .= "
                            <div class='modal fade' id='modal2$card_id' tabindex='-1' role='dialog' aria-labelledby='modalLabel$card_id' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered-top'>
                                <div class='modal-content rounded-4 py-4 px-4'>
                                <form action='../page/admin_home.php?function=homecarouse' method='post'>
                                    <div class='modal-header p-4 border-bottom-0'>
                                    <h1 class='fw-bold fs-4 mb-0' id='modalLabel$card_id'>Update Card Featured</h1>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body p-4 border border-dark'>
                                    <img src='$card_img' alt='Card Image' class='img-fluid rounded mb-3'>
                                    <div class='mb-2'><b>image link:</b></div>
                                    <input class='form-control mb-3' type='text' name='img1' value='$card_img' required>
                                    <div class='mb-2'><b>Title:</b></div>
                                    <input class='form-control mb-3' type='text' name='title1' value='$card_title' required>
                                    <div class='mb-2'><b>Description:</b></div>
                                    <textarea class='form-control auto-resize' name='desc1' oninput='autoResizeTextarea(this)' required>$card_prg</textarea>
                                    <input type='hidden' value='$card_id' name='id1' />
                                    </div>
                                    <div class='modal-footer justify-content-end'>
                                    <a class='btn btn-warning btn-sm'
                                       href='../page/admin_home.php?function=deletehomecarouse&delete_id2=$card_id'
                                       title='DELETE'
                                       onclick='return confirm('Are you sure you want to delete this card?');'>
                                       <span data-feather='trash' title='DELETE'></span>
                                    </a>
                                    <button type='submit' class='btn btn-success btn-sm' name='carouselBtn'><span data-feather='save'></span></button>
                                    </div>
                                </form>
                                </div>
                            </div>
                            </div>
                            ";
                        } ?>
                        </tbody>
                    </table>
                    </div>
                    <?= $modals ?>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Carousel</h1> 
                                <div class='modal-header p-4 border-bottom-0'>
                                    <h1 class='fw-bold fs-4 mb-0' id='modalLabel$card_id'></h1>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                            </div>
                            <div class="modal-body">
                                <form action='../page/admin_home.php?function=Inserthomecarouse' method='post'>
                                    <div class='modal-body p-4 border border-dark'>
                                        <div class='mb-2'><b>image Link:</b></div>
                                            <input class='form-control mb-3' type='text' name='img2'>
                                        <div class='mb-2'><b>Title:</b></div>
                                            <input class='form-control mb-3' type='text' name='title2'>
                                        <div class='mb-2'><b>Description:</b></div>
                                            <textarea class='form-control auto-resize' name='desc2'></textarea>
                                        <div class='mb-2'><b></b></div>
                                            <input type='hidden' name='id2' />
                                    </div>
                                    <div class='modal-footer justify-content-end'>
                                        <button type='submit' class='btn btn-success btn-sm'><span data-feather='save'></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </main>
        </div>
      </div>
    </div>
  </div>
<?php include '../nav/admin_footer.php';?>