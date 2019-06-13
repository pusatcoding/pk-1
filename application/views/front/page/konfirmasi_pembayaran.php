<div class="modal fade rating_modal" id="bayar" tabindex="-1" role="dialog" aria-labelledby="rating_modal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="rating_modal">Mohon Data Di isi Dengan Valid</h3>
                <h4></h4>
            </div>
            <!-- end /.modal-header -->

            <div class="modal-body">
                
                <?php echo form_open('konfirmasi_kirim') ?>
                <ul>
                    <li>
                        <input type="hidden" name="invoice" class="form-control" placeholder="Invoice"
                            value="PK#<?php echo $customer_data->id_trans ?>">
                    </li>
                    <li>
                        <p>Bank Asal</p>
                        <div class="right_content">
                            <div class="select-wrap">
                                <select name="bank_asal">
                                    <option value="BNI">BNI</option>
                                    <option value="BRI">BRI</option>
                                    <option value="MANDIRI">MANDIRI</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BANK LAINYA">BANK LAINYA</option>
                                </select>

                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p>Bank Tujuan</p>
                        <div class="right_content">
                            <div class="select-wrap">
                                <select name="bank_tujuan">
                                    <?php  foreach($data_bank as $bank){ ?>
                                    <option
                                        value="<?php echo($bank->nama_bank).' | '.$bank->atas_nama.' '. $bank->norek ?>">
                                        <?php echo($bank->nama_bank).' | '.$bank->atas_nama.' '. $bank->norek ?>
                                    </option>
                                    <?php } ?>
                                </select>

                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p>Jumlah</p>
                        <div class="right_content">
                            <input type="text" name="jumlah">
                        </div>
                    </li>
                    <li>
                        <p>Nama Pengirim</p>
                        <div class="right_content">
                            <input type="text" name="nama">
                        </div>
                    </li>

                </ul>

                <!-- <div class="rating_field">
                    <label for="rating_field">Comments</label>
                    <textarea name="rating_field" id="rating_field" class="text_field"
                        placeholder="Please enter your rating reason to help the author"></textarea>
                    <p class="notice">Your review will be ​publicly visible​ and the author may reply to your comments.
                    </p>
                </div> -->
                <button type="submit" class="btn btn--round btn--default">Konfirmasi</button>
                <button class="btn btn--round modal_close" data-dismiss="modal">Batal</button>
                <?php echo form_close() ?>
                <!-- end /.form -->
            </div>
            <!-- end /.modal-body -->
        </div>
    </div>
</div>