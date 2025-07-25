this content too:

<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
   
     <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Juru Parkir</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!-- end::App Content Header -->

         <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-12">
                <table id="<?php $table ?>Table" class="display">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <?php for ($i=0; $i < count($fieldList); $i++) { 
                            ?><th><?= $fieldList[$i][1]; ?></th><?php 
                          } ?>
                          <th>action</th>
                      </tr>
                  </thead>
                </table>
              </div>
            </div>
            <!-- end::Row -->
          </div>
          <!-- end::container-fluid -->
        </div>
        <!-- end::app-Content -->
      </main>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script>
    $(document).ready(function () {
        $('#<?php $table ?>Table').DataTable({
            processing: true,
            serverSide: true,
            order:[
              [2,'desc'],
            ],
            ajax: {
                url: "<?= base_url($table.'/data') ?>",
                type: "POST"
            },
            columns: [
                { data: '<?= $primaryKey ?>' },
                <?php 
                  for($i=0; $i < count($fieldList); $i++){
                    ?>
                    { data: '<?= $fieldList[$i][0] ?>' },
                    <?php
                  }
                ?>
                { 
                 data: '',
                 render: (data,type,row) => {
                   return `<a class="btn btn-warning btn-sm" href='<?= $table ?>/${row.<?= $primaryKey ?>}/edit'>Edit</a>
                   <form action='<?= $table ?>/${row.<?= $primaryKey ?>}' method="post" style="display:inline" onsubmit="return confirm('Are you sure you want to delete this item?');">
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
      </form>

                 `;
                 }
              }

            ]
        });

     
    });
    </script>
<?= $this->endSection() ?>