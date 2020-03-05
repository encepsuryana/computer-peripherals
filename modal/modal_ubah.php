    <div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="modalUbah" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title" id="exampleModalLabel"> Ubah Data asset </span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="formUbah">
                    <div class="modal-body">

                     <div class="col-sm-12">
                        <div class="row">

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>No. Asset</label>
                                    <input type="text" class="form-control" id="no_asset_edit" name="no_asset" autocomplete="off" minlength="1" maxlength="3" onKeyPress="return goodchars(event,'0123456789',this)">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Kode Assets</label>
                                    <input type="text" class="form-control" id="id_asset_edit" name="id_asset" autocomplete="off" minlength="1" maxlength="10" onkeyup="splitInDots(this)" onKeyPress="return goodchars(event,'0123456789',this)" readonly>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                 <label>Tanggal Pemeriksaan</label>
                                 <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" id="tanggal_pemeriksaan_edit" name="tanggal_pemeriksaan" autocomplete="off">
                             </div>
                         </div>

                         <div class="col-sm-3">
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control custom-select" id="kategori_edit" name="kategori" value ="-">
                                    <option value ="-" selected="true" disabled="disabled">-- Pilih Kategori --</option>
                                    <option value="Note Book">Note Book</option>
                                    <option value="Komputer">Komputer</option>
                                    <option value="Server">Server</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Device Name</label>
                                <input type="text" class="form-control text-uppercase" id="nama_device_edit" name="nama_device" autocomplete="off" minlength="1" maxlength="50">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Brand</label>
                                <input type="text" class="form-control text-capitalize" id="brand_edit" name="brand" autocomplete="off" minlength="1" maxlength="25">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Type</label>
                                <input type="text" class="form-control text-capitalize" id="type_edit" name="type" autocomplete="off" minlength="1" maxlength="100">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Motherboard</label>
                                <input type="text" class="form-control text-capitalize" id="motherboard_edit" name="motherboard" autocomplete="off" minlength="1" maxlength="100">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Central Processing Unit (CPU)</label>
                                <input type="text" class="form-control text-capitalize" id="cpu_edit" name="cpu" autocomplete="off" minlength="1" maxlength="100">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Random Access Memory (RAM)</label>
                                <input type="text" class="form-control text-capitalize" id="ram_edit" name="ram" autocomplete="off" minlength="1" maxlength="50">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Graphical Processing Unit (GPU)</label>
                                <input type="text" class="form-control text-capitalize" id="gpu_edit" name="gpu" autocomplete="off" minlength="1" maxlength="100">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Storage</label>
                                <input type="text" class="form-control text-capitalize" id="storage_edit" name="storage" autocomplete="off" minlength="1" maxlength="50">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Optical Disk Drive (ODD)</label>
                                <input type="text" class="form-control text-capitalize" id="optical_drive_edit" name="optical_drive" autocomplete="off" minlength="1" maxlength="50">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Power Supply Unit (PSU)</label>
                                <input type="text" class="form-control text-capitalize" id="psu_edit" name="psu" autocomplete="off" minlength="1" maxlength="100">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Display Unit</label>
                                <input type="text" class="form-control text-capitalize" id="display_unit_edit" name="display_unit" autocomplete="off" minlength="1" maxlength="100">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Operating System</label>
                                <input type="text" class="form-control text-capitalize" id="operating_system_edit" name="operating_system" autocomplete="off" minlength="1" maxlength="20">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Komputer Type</label>
                                <select class="form-control custom-select" id="komputer_type_edit" name="komputer_type" value ="-">
                                    <option value ="-" selected="true" disabled="disabled">-- Pilih Komputer Type --</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Office">Office</option>
                                    <option value="CAD Programming">CAD Programming</option>
                                    <option value="Server">Server</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>IP Address</label>
                                <input type="text" class="form-control text-capitalize" id="ip_address_edit" name="ip_address" autocomplete="off" minlength="1" maxlength="20" ip-mask>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>MAC Address</label>
                                <input type="text" class="form-control text-uppercase" id="mac_address_edit" name="mac_address" autocomplete="off" minlength="1" maxlength="17">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Connectivity</label>
                                <select class="form-control custom-select" id="connectivity_edit" name="connectivity" value ="-">
                                    <option value ="-" selected="true" disabled="disabled">-- Pilih Connectivity Type --</option>
                                    <option value="Wireless">Wireless</option>
                                    <option value="Wire">Wire</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Internet Link</label>
                                <select class="form-control custom-select" id="internet_edit" name="internet" value ="-">
                                    <option value ="-" selected="true" disabled="disabled">-- Pilih Intenet Link --</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Current User</label>
                                <select class="form-control custom-select" id="user_edit" name="user" value ="-">
                                    <option value ="-" selected="true" disabled="disabled">-- Pilih Current User --</option>
                                    <?php
                                    $sql = "SELECT * FROM tbl_users";
                                    $resultset = mysqli_query($mysqli, $sql) or die("database error:". mysqli_error($mysqli));
                                    while( $rows = mysqli_fetch_assoc($resultset) ) {
                                        ?>

                                        <option value="<?php echo $rows["nama_depan"]." ".$rows["nama_belakang"]; ?>"><?php echo $rows["nama_depan"]." ".$rows["nama_belakang"]; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="password_edit" name="password" autocomplete="off" minlength="1" maxlength="20">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Location</label>
                                <select class="form-control custom-select" id="location_edit" name="location" value ="-">
                                    <option value ="-" selected="true" disabled="disabled">-- Pilih Location --</option>
                                    <option value ="Mobile">Mobile</option>
                                    <option value ="Kantor Atas">Kantor Atas</option>
                                    <option value ="CNC CAD CAM Shop">CNC CAD CAM Shop</option>
                                    <option value ="Conv. Shop">Conv. Shop</option>
                                    <option value ="R. Inventory">R. Inventory</option>
                                    <option value ="Lemari R. Meeting">Lemari R. Meeting</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Link To</label>
                                <select class="form-control custom-select" id="link_to_edit" name="link_to" value ="-">
                                    <option value ="-" selected="true" disabled="disabled">-- Pilih Link To --</option>
                                    <option value ="WiFi Router">WiFi Router</option>
                                    <option value ="Router HUB">Router HUB</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-3">
                         <div class="form-group">
                             <label>Maintenance Date</label>
                             <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" id="maint_date_edit" name="maint_date" autocomplete="off">
                         </div>
                     </div>
                 </div>

             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-info btn-submit" id="btnUbah">Ubah</button>
                <button type="button" class="btn btn-secondary btn-reset" data-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
</div>
</div>