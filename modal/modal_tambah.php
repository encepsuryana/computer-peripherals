 <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="exampleModalLabel"> Input Data Asset</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <form id="formTambah">
                <div class="modal-body">
                   <div class="col-sm-12">
                    <div class="row">

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>No. Asset</label>
                                <input type="text" class="form-control" id="no_asset_add" name="no_asset" autocomplete="off" minlength="1" maxlength="3" onKeyPress="return goodchars(event,'0123456789',this)">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Kode Assets</label>
                                <input type="text" class="form-control" id="id_asset_add" name="id_asset" autocomplete="off" minlength="1" maxlength="10" onkeyup="splitInDots(this)" onKeyPress="return goodchars(event,'0123456789',this)">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                               <label>Tanggal Pemeriksaan</label>
                               <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" id="tanggal_pemeriksaan_add" name="tanggal_pemeriksaan" autocomplete="off" value="<?php echo date("d-m-Y"); ?>">
                           </div>
                       </div>

                       <div class="col-sm-3">
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control" id="kategori_add" name="kategori" autocomplete="off" minlength="1" maxlength="25">
                            <!-- <select class="form-control custom-select" id="kategori_add" name="kategori" value ="-">
                                <option class="dropdown-header" disabled selected>Pilih Kategori</option>
                                <option value="Note Book">Note Book</option>
                                <option value="Komputer">Komputer</option>
                                <option value="Server">Server</option>
                                <option value="All In One PC">All In One PC</option>
                            </select> -->
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Device Name</label>
                            <input type="text" class="form-control text-uppercase" id="nama_device_add" name="nama_device" autocomplete="off" minlength="1" maxlength="50">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Brand</label>
                            <input type="text" class="form-control text-capitalize" id="brand_add" name="brand" autocomplete="off" minlength="1" maxlength="25">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" class="form-control text-capitalize" id="type_add" name="type" autocomplete="off" minlength="1" maxlength="100">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Motherboard</label>
                            <input type="text" class="form-control text-capitalize" id="motherboard_add" name="motherboard" autocomplete="off" minlength="1" maxlength="100">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Central Processing Unit (CPU)</label>
                            <input type="text" class="form-control text-capitalize" id="cpu_add" name="cpu" autocomplete="off" minlength="1" maxlength="100">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Random Access Memory (RAM)</label>
                            <input type="text" class="form-control text-capitalize" id="ram_add" name="ram" autocomplete="off" minlength="1" maxlength="50">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Graphical Processing Unit (GPU)</label>
                            <input type="text" class="form-control text-capitalize" id="gpu_add" name="gpu" autocomplete="off" minlength="1" maxlength="100">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Storage</label>
                            <input type="text" class="form-control text-capitalize" id="storage_add" name="storage" autocomplete="off" minlength="1" maxlength="50">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Optical Disk Drive (ODD)</label>
                            <input type="text" class="form-control text-capitalize" id="optical_drive_add" name="optical_drive" autocomplete="off" minlength="1" maxlength="50">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Power Supply Unit (PSU)</label>
                            <input type="text" class="form-control text-capitalize" id="psu_add" name="psu" autocomplete="off" minlength="1" maxlength="100">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Display Unit</label>
                            <input type="text" class="form-control text-capitalize" id="display_unit_add" name="display_unit" autocomplete="off" minlength="1" maxlength="100">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Operating System</label>
                            <input type="text" class="form-control text-capitalize" id="operating_system_add" name="operating_system" autocomplete="off" minlength="1" maxlength="20">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Komputer Type</label>
                            <input type="text" class="form-control" id="komputer_type_add" name="komputer_type" autocomplete="off" minlength="1" maxlength="50">
                            <!-- <select class="form-control custom-select" id="komputer_type_add" name="komputer_type" value ="-">
                                <option class="dropdown-header" disabled selected>Pilih Komputer Type</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Office">Office</option>
                                <option value="CAD Programming">CAD Programming</option>
                                <option value="Server">Server</option>
                                <option value="Lain-lain">Lain-lain</option>
                            </select> -->
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>IP Address</label>
                            <input type="text" class="form-control text-capitalize" id="ip_address_add" name="ip_address" autocomplete="off" minlength="1" maxlength="20" ip-mask>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>MAC Address</label>
                            <input type="text" class="form-control text-uppercase" id="mac_address_add" name="mac_address" autocomplete="off" minlength="1" maxlength="17">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Connectivity</label>
                            <input type="text" class="form-control" id="connectivity_add" name="connectivity" autocomplete="off" minlength="1" maxlength="20">
                            <!-- <select class="form-control custom-select" id="connectivity_add" name="connectivity" value ="-">
                                <option class="dropdown-header" disabled selected>Pilih Connectivity Type</option>
                                <option value="Wireless">Wireless</option>
                                <option value="Wire">Wire</option>
                            </select> -->
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Internet Link</label>
                            <input type="text" class="form-control" id="internet_add" name="internet" autocomplete="off" minlength="1" maxlength="5">
                            <!-- <select class="form-control custom-select" id="internet_add" name="internet" value ="-">
                                <option class="dropdown-header" disabled selected>Pilih Intenet Link</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select> -->
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Current User</label>
                            <input type="text" class="form-control" id="user_add" name="user" autocomplete="off" minlength="1" maxlength="50">
                            
                            <!--<select class="form-control custom-select" id="user_add" name="user" value ="-">
                                <option class="dropdown-header" disabled selected>Pilih Current User</option>
                                <?php
                                $sql = "SELECT * FROM tbl_users";
                                $resultset = mysqli_query($mysqli, $sql) or die("database error:". mysqli_error($mysqli));
                                while( $rows = mysqli_fetch_assoc($resultset) ) {
                                    ?>

                                    <option value="<?php echo $rows["nama_depan"]." ".$rows["nama_belakang"]; ?>"><?php echo $rows["nama_depan"]." ".$rows["nama_belakang"]; ?></option>
                                <?php } ?>
                            </select> -->
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password_add" name="password" autocomplete="off" minlength="1" maxlength="20" style="padding-right: 50px;">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" class="form-control" id="location_add" name="location" autocomplete="off" minlength="1" maxlength="50">
                            <!-- <select class="form-control custom-select" id="location_add" name="location" value ="-">
                                <option class="dropdown-header" disabled selected>Pilih Location</option>
                                <option value ="Mobile">Mobile</option>
                                <option value ="Kantor Atas">Kantor Atas</option>
                                <option value ="CNC CAD CAM Shop">CNC CAD CAM Shop</option>
                                <option value ="Conv. Shop">Conv. Shop</option>
                                <option value ="R. Inventory">R. Inventory</option>
                                <option value ="Lemari R. Meeting">Lemari R. Meeting</option>
                            </select> -->
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Link To</label>
                            <input type="text" class="form-control" id="link_to_add" name="link_to" autocomplete="off" minlength="1" maxlength="50">
                            <!--<select class="form-control custom-select" id="link_to_add" name="link_to" value ="-">
                                <option class="dropdown-header" disabled selected>Pilih Link To</option>
                                <option value ="WiFi Router">WiFi Router</option>
                                <option value ="Router HUB">Router HUB</option>
                            </select>-->
                        </div>
                    </div>

                    <div class="col-sm-3">
                       <div class="form-group">
                           <label>Maintenance Date</label>
                           <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" id="maint_date_add" name="maint_date" autocomplete="off" value="<?php echo date("d-m-Y"); ?>">
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-info btn-submit" id="btnSimpan">Simpan</button>
        <button type="button" class="btn btn-secondary btn-reset" data-dismiss="modal">Batal</button>
    </div>
</form>
</div>
</div>
</div>