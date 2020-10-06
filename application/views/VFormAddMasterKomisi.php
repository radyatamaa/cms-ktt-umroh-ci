<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Tambah Data Komisi</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <form action="<?php echo site_url('Welcome/AddDataMasterKomisi'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
                <label>Nama Komisi</label>
                <input type="text" class="form-control" name="nama_komisi" placeholder="Masukan Nama Komisi ">
            </div>
            <div class="form-group">
                <label>Kategori Komisi</label>
                <select class="form-control" name="id_kategori_komisi" required>
                    <option selected disabled>Pilih Kategori</option>
                    <?php
                    //  $kategori = $this->MSudi->GetDataWhere('tbl_master_komisi', 'is_active', 1)->result();
                    foreach ($kategori as $ReadDS) {
                    ?>
                        <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_kategori; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Level Member</label>
                <select class="form-control" name="kd_level_member" required>
                    <option selected disabled>Pilih Level Member</option>
                    <?php
                    //  $kategori = $this->MSudi->GetDataWhere('tbl_master_komisi', 'is_active', 1)->result();
                    foreach ($level_member as $ReadDS) {
                    ?>
                        <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->kd_level; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label>Target</label>
                <input type="text" class="form-control" name="target" placeholder="Target Jumlah Orang ">
            </div>
            <div class="form-group">
                <label>Level Target</label>
                <select class="form-control" name="kd_level_target" required>
                    <option selected disabled>Pilih Level target</option>
                    <?php
                    //  $kategori = $this->MSudi->GetDataWhere('tbl_master_komisi', 'is_active', 1)->result();
                    foreach ($level_target as $ReadDS) {
                    ?>
                        <option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->kd_level; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            
            <label>Target Hari</label>
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="target_hari" id="target_hari" value="30" checked>
                                    30 Hari
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="target_hari" id="target_hari" value="60" >
                                    60 Hari
                                </label>
                            </div>
                        </div>
                        <label>Target Bonus</label>
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="target_bonus" id="target_bonus" value="Mobil" checked>
                                    Mobil
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="target_bonus" id="target_bonus" value="Motor" >
                                    Motor
                                </label>
                            </div>
                        </div>
            <div class="form-group">
                <label>Nominal Ujroh Satuan</label>
                <input type="number" class="form-control" name="nominal_ujroh_satuan" placeholder="Nominal Komisi Per Jamaah">
            </div>
        


            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>
</div>