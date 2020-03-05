<?php include("include/header.php"); ?>

<body>
    <div class="container-fluid">
        <div class="title-top flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
            <h5 class="my-0 mr-md-auto font-weight-normal"><i class="fas fa-sitemap title-icon"></i> Data Assets Computer, Network & Peripheral</h5>
        </div>
    </div>

    <div class="col-md-12">
        <div class="action-add">
            <a class="btn btn-custom-add" id="btnTambah" href="#" data-toggle="modal" data-target="#modalTambah" role="button"><i class="fas fa-plus"></i> Tambah</a>
            
            <a class="btn btn-custom-del btnHapus" id="btnTambah" id="deleteBtn" href="#" role="button"><i class="far fa-trash-alt"></i></i> Hapus</a>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Tabel asset  untuk menampilkan data asset  dari database -->
                <table id="tabel-asset" class="table table-striped table-bordered" title="Double click to edit data">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No. Asset</th>
                            <th>Kode Asset</th>
                            <th>Tgl. Pemeriksaan</th>
                            <th>Category</th>
                            <th>Device Name</th>
                            <th>Brand</th>
                            <th>Type</th>
                            <th>Motherboard</th>
                            <th>Central Proccessing Unit (CPU)</th>
                            <th>Random Access Memory (RAM)</th>
                            <th>Graphic Processing Unit (GPU)</th>
                            <th>Storage</th>
                            <th>Optical Disk Drive (ODD)</th>
                            <th>Power Supply Unit (PSU)</th>
                            <th>Display Unit</th>
                            <th>Oprating System</th>
                            <th>Komputer Type</th>
                            <th>IP Address</th>
                            <th>MAC Address</th>
                            <th>Connectivity</th>
                            <th>Internet Link</th>
                            <th>Current User</th>
                            <th>Password</th>
                            <th>Location</th>
                            <th>Link To</th>
                            <th>Maintenance Date</th>
                            <th>Maintenance Next Date</th>
                            <th>
                                <a class="btn btn-secondary" href="#" role="button" id="btnTabel" href="#" data-toggle="modal" data-target="#modalTable">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>

                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal tambah data asset  -->
    <?php include('modal/modal_tambah.php');?>

    <!-- Modal ubah data asset  -->
    <?php include('modal/modal_ubah.php');?>

    <!-- Footer -->
    <?php include("include/footer.php"); ?>
    <?php include("comp_datas.php"); ?>
</body>
</html>