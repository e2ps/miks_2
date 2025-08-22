
<?php
require_once('../database/Admin-process.php');

$dataList = [];
while ($row = mysqli_fetch_array($getDataquery, MYSQLI_ASSOC)) {
    $dataList[] = $row;
}
?>  
<h2>Message Featured</h2>  
<hr>
<div class="col-md-6 table-responsive">
    <table id="table" class="table table-striped table-hover table-md table-bordered mt-5">
        <thead class="table-dark">
            <tr align="center">
                <th>NO.</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $n = 0;
            foreach ($dataList as $data) {
                $n++;
                $isUnread = empty($data['message']);
            ?>
                <tr style="font-weight:<?= $isUnread ? 'bold' : 'normal' ?>;">
                    <td><?= $n ?></td>
                    <td><?= !empty($data['fullname']) ? $data['fullname'] : 'Anonymous' ?></td>
                    <td><?= $data['Email'] ?></td>
                    <td><?= $data['txtPhone'] ?></td>
                    <td align="center">
                        <button class="btn btn-primary btn-sm"
                            title="VIEW MESSAGE"
                            data-bs-toggle="modal" 
                            data-bs-target="#modal<?= $data['id'] ?>">
                            <span data-feather="eye" title="VIEW MESSAGE"></span>
                        </button>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="modal<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel<?= $data['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content rounded-4 py-4 px-4">
                            <div class="modal-header p-4 border-bottom-0">
                                <h1 class="fw-bold fs-4 mb-0" id="modalLabel<?= $data['id'] ?>">Message</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4 border border-dark">
                                <?= htmlspecialchars($data['message']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php  } ?>
           
        </tbody>
    </table>
</div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  feather.replace();
</script>
<script>
    new DataTable('#table');
</script>
<script>
    new DataTable('#table2');
</script>
<script>
    new DataTable('#table3');
</script>
  </body>
  
</html>