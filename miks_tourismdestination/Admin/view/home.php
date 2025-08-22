<?php require_once('header.php');?> 
<?php require_once('../database/Admin-process.php');?> 
            <div class="row">
                <div class="col-md-9">
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
                            while ($data = mysqli_fetch_array($getcardDataquery)) {
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
                                <button class="btn btn-primary btn-sm"
                                        title="View card"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal1<?= $card_id ?>">
                                <span data-feather="eye" title="Card"></span>
                                </button>
                            </td>
                            </tr>
                        <?php
                            // Append modal after row
                            $modals .= "
                            <div class='modal fade' id='modal1$card_id' tabindex='-1' role='dialog' aria-labelledby='modalLabel$card_id' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered-top'>
                                <div class='modal-content rounded-4 py-4 px-4'>
                                <form action='http://localhost/Sabillo/miks_tourismdestination/Admin/view/home.php?page=Home_card' method='post'>
                                    <div class='modal-header p-4 border-bottom-0'>
                                    <h1 class='fw-bold fs-4 mb-0' id='modalLabel$card_id'>Update Hero Featured</h1>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body p-4 border border-dark'>
                                    <img src='$card_img' alt='Card Image' class='img-fluid rounded mb-3'>
                                    <div class='mb-2'><b>image:</b></div>
                                    <input class='form-control mb-3' type='text' name='img' value='$card_img' required>
                                    <div class='mb-2'><b>Title:</b></div>
                                    <input class='form-control mb-3' type='text' name='title' value='$card_title' required>
                                    <div class='mb-2'><b>Description:</b></div>
                                    <textarea class='form-control auto-resize' name='desc' oninput='autoResizeTextarea(this)' required>$card_prg</textarea>
                                    <div class='mb-2'><b></b></div>
                                    <input class='form-control mb-3' type='hidden' name='Time' value='$card_time' required>
                                    <input type='hidden' value='$card_id' name='id' />
                                    </div>
                                    <div class='modal-footer justify-content-end'>
                                    <button type='button' class='btn btn-warning btn-sm' data-bs-dismiss='modal'><span data-feather='trash'></span></button>
                                    <button type='submit' class='btn btn-success btn-sm' name='heroftBtn'><span data-feather='save'></span></button>
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
                <div class="col-md-9">
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
                            while ($data = mysqli_fetch_array($getcarouselDataquery)) {
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
                                        title="View Carouse"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal2<?= $card_id ?>">
                                <span data-feather="eye" title="Card"></span>
                                </button>
                            </td>
                            </tr>
                        <?php
                            // Append modal after row
                            $modals .= "
                            <div class='modal fade' id='modal2$card_id' tabindex='-1' role='dialog' aria-labelledby='modalLabel$card_id' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered-top'>
                                <div class='modal-content rounded-4 py-4 px-4'>
                                <form action='http://localhost/Sabillo/miks_tourismdestination/Admin/view/home.php?page=Home_card' method='post'>
                                    <div class='modal-header p-4 border-bottom-0'>
                                    <h1 class='fw-bold fs-4 mb-0' id='modalLabel$card_id'>Update Hero Featured</h1>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body p-4 border border-dark'>
                                    <img src='$card_img' alt='Card Image' class='img-fluid rounded mb-3'>
                                    <div class='mb-2'><b>image:</b></div>
                                    <input class='form-control mb-3' type='text' name='img' value='$card_img' required>
                                    <div class='mb-2'><b>Title:</b></div>
                                    <input class='form-control mb-3' type='text' name='title' value='$card_title' required>
                                    <div class='mb-2'><b>Description:</b></div>
                                    <textarea class='form-control auto-resize' name='desc' oninput='autoResizeTextarea(this)' required>$card_prg</textarea>
                                    <input type='hidden' value='$card_id' name='id' />
                                    </div>
                                    <div class='modal-footer justify-content-end'>
                                    <button type='button' class='btn btn-warning btn-sm' data-bs-dismiss='modal'><span data-feather='trash'></span></button>
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
            </div>
         </main>
        </div>
      </div>
    </div>
  </div>
  <?php require_once('footer.php');?>