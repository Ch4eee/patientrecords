      <?php if($this->session->flashdata('patientrecord_updated')): ?>

      <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('patientrecord_updated') ."</div>" ?>
      <?php endif; ?>


      <?php if($this->session->flashdata('patientrecord_failed')): ?>

      <?php echo "<div style='bg-color:#e74a3b;' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                ".$this->session->flashdata('patientrecord_failed') ."<h6><i class='con fa fa-check'></i></h6></div>" ?>

      <?php endif; ?>


      <hr>
      <div class="row ">
          <!-- ROW 1 -->
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
              <h6 class="text-center"><b>VALENZUELA NATIONAL HIGH SCHOOL</b></h6>
              <h5 class="text-center"><b>STUDENT RECORD</b></h5>
          </div>
          <div class="col-sm-4"></div>
      </div>

      <?php $attributes = array('id' => 'opd_form', 'class' => 'form-horizontal user'); ?>
      <?php echo form_open('admissioncontrol/edit_opd_form/'.$pr_id->pr_id.'', $attributes); ?>

      <div class="row">
          <!-- ROW 2 -->

          <div class="col-sm-12 ">
              <!-- first column -->
              <div class="row">


                  <div class="row">

                  </div>

                  <div style="margin-left: 900px;" class="col-xs-5 ">


                      <?php echo form_label('Date'); ?>
                      <input type="date" class="form-control  <?= (form_error('date') == "" ? '':'is-invalid') ?>"
                          name="date" value="<?php echo $pr_id->pr_date ?>">
                      <div class="text-danger text-center"><?php echo form_error('date'); ?></div>
                  </div>

              </div><!--  ROW -->
              <div style="margin-left: 1px;" class="col-sm-4 mb-3">
                  <?php echo form_label('Learner Reference Number'); ?>
                  <input type="text" minlenght="12" maxlength="12"
                      class="form-control  <?= (form_error('lrn') == "" ? '':'is-invalid') ?>" name="lrn"
                      placeholder="LRN" value="<?php echo $pr_id->pr_id ?>">
                  <div class="text-danger text-center"><?php echo form_error('lrn'); ?></div>
              </div>

              <div class="row">
                  <div style="margin-left: 4px;" class="col-sm-3">
                      <?php echo form_label('Lastname'); ?>
                      <input type="text" class="form-control  <?= (form_error('lname') == "" ? '':'is-invalid') ?>"
                          name="lname" placeholder="Lastname" value="<?php echo $pr_id->pr_lname ?>">
                      <div class="text-danger text-center"><?php echo form_error('lname'); ?></div>
                  </div>
                  <div class="col-sm-4">
                      <?php echo form_label('Firstname'); ?>
                      <input type="text" style="margin-left: 4px;"
                          class="form-control  <?= (form_error('fname') == "" ? '':'is-invalid') ?>" name="fname"
                          placeholder="Firstname" value="<?php echo $pr_id->pr_fname ?>">
                      <div class="text-danger text-center"><?php echo form_error('fname'); ?></div>
                  </div>
                  <div class="col-sm-3">
                      <?php echo form_label('Middlename'); ?>
                      <input type="text" style="margin-left: 2px;"
                          class="form-control  <?= (form_error('middlen') == "" ? '':'is-invalid') ?>" name="middlen"
                          placeholder="Middlename" value="<?php echo $pr_id->pr_mname ?>">
                      <div class="text-danger text-center"><?php echo form_error('middlen'); ?></div>
                  </div>
                  <div class="col-sm-1">
                      <?php echo form_label('Suffix'); ?>
                      <input type="text" style="margin-left: 2px;"
                          class="form-control  <?= (form_error('suffix') == "" ? '':'is-invalid') ?>" name="suffix"
                          placeholder="Suffix" value="<?php echo $pr_id->pr_suffix ?>">
                      <div class="text-danger text-center"><?php echo form_error('suffix'); ?></div>
                  </div>
              </div>
              <div class="row">
                  <div style="margin-left: 4px; margin-top: 10px;" class="col-sm-11">
                      <?php echo form_label('Address'); ?>
                      <input type="text" style="margin-left: 7px;"
                          class="form-control  <?= (form_error('address') == "" ? '':'is-invalid') ?>" name="address"
                          placeholder="Permanent Address" value="<?php echo $pr_id->pr_addrs ?>">
                      <div class="text-danger text-center"><?php echo form_error('address'); ?></div>
                  </div>
              </div>

              <div class="row">

                  <div style="margin-left: 15px; margin-top: 10px;" class="col-xs-9">
                      <?php echo form_label('Birthdate'); ?>
                      <input type="date" class="form-control <?= (form_error('datebirth') == "" ? '':'is-invalid') ?>"
                          name="datebirth" value="<?php echo $pr_id->pr_bdate ?>">
                      <div class="text-danger text-center"><?php echo form_error('datebirth'); ?></div>
                  </div>

                  <div style="margin-left: 4px; margin-top: 10px;" class="col-sm-2">
                      <?php echo form_label('Age'); ?>
                      <input type="text" class="form-control  <?= (form_error('age') == "" ? '':'is-invalid') ?>"
                          name="age" placeholder="Age" value="<?php echo $pr_id->pr_age ?>">
                      <div class="text-danger text-center"><?php echo form_error('age'); ?></div>
                  </div>

                  <div style="margin-left: 4px; margin-top: 10px;" class="col-sm-3">
                      <?php echo form_label('Birthplace'); ?>
                      <input type="text" class="form-control  <?= (form_error('birthplace') == "" ? '':'is-invalid') ?>"
                          placeholder="Birthplace" name="birthplace" value="<?php echo $pr_id->pr_bplace ?>">
                      <div class="text-danger text-center"><?php echo form_error('birthplace'); ?></div>
                  </div>

                  <div style="margin-left: 4px; margin-top: 10px;" class="col-sm-3">
                      <?php echo form_label('Vaccination Status'); ?>
                      <select class="form-control" name="vaccinestat">
                          <option
                              value=<?php echo $pr_id->pr_vaccinestat; ?><?php echo set_select('vaccinestat', $pr_id->pr_vaccinestat); ?>>
                              <?php echo $pr_id->pr_vaccinestat; ?></option>
                          <?php if(count($get_vaccinestat)): ?>
                          <?php foreach($get_vaccinestat as $vaccinestat): ?>
                          <option
                              value=<?php echo $vaccinestat->v_name; ?><?php echo set_select('vaccinestat', $vaccinestat->v_name); ?>>
                              <?php echo $vaccinestat->v_name; ?></option>
                          <?php endforeach; ?>
                          <?php endif; ?>
                      </select>
                      <div class="text-danger text-center"><?php echo form_error('vaccinestat'); ?></div>
                  </div>

                  <div style="margin-left: 4px; margin-top: 10px;" class="col-sm-4">
                      <?php echo form_label('Region'); ?>
                      <select class="form-control" name="civilstat">
                          <option
                              value=<?php echo $pr_id->pr_civilstat; ?><?php echo set_select('civilstat', $pr_id->pr_civilstat); ?>>
                              <?php echo $pr_id->pr_civilstat; ?></option>
                          <?php if(count($get_civilstat)): ?>
                          <?php foreach($get_civilstat as $civilstat): ?>
                          <option
                              value=<?php echo $civilstat->c_name; ?><?php echo set_select('civilstat', $civilstat->c_name); ?>>
                              <?php echo $civilstat->c_name; ?></option>
                          <?php endforeach; ?>
                          <?php endif; ?>
                      </select>
                      <div class="text-danger text-center"><?php echo form_error('civilstat'); ?></div>
                  </div>

                  <div style="margin-left: 4px; margin-top: 10px;" class="col-sm-3">
                      <?php echo form_label('Division'); ?>
                      <select class="form-control" name="divi">
                          <option
                              value=<?php echo $pr_id->pr_divi; ?><?php echo set_select('divi', $pr_id->pr_divi); ?>>
                              <?php echo $pr_id->pr_divi; ?></option>
                          <?php if(count($get_divi)): ?>
                          <?php foreach($get_divi as $divi): ?>
                          <option value=<?php echo $divi->d_name; ?><?php echo set_select('divi', $divi->d_name); ?>>
                              <?php echo $divi->d_name; ?></option>
                          <?php endforeach; ?>
                          <?php endif; ?>
                      </select>
                      <div class="text-danger text-center"><?php echo form_error('divi'); ?></div>
                  </div>

                  <div style="margin-left: 5px; margin-top: 10px;" class="col-sm-4">
                      <?php echo form_label('School'); ?>
                      <input type="text" class="form-control <?= (form_error('occup') == "" ? '':'is-invalid') ?>"
                          placeholder="School name" name="occup" value="<?php echo $pr_id->pr_occup ?>">
                      <div class="text-danger text-center"><?php echo form_error('occup'); ?></div>
                  </div>

              </div>

          </div>
          <div class="row">
              <div style="margin-left: 30px; margin-top: 10px;" class="col-xs-3">
                  <?php echo form_label('Gender'); ?>
                  <select name="gen" class="form-control " name="gen">
                      <option value=<?php echo $pr_id->pr_gen; ?><?php echo set_select('gen', $pr_id->pr_gen); ?>>
                          <?php echo $pr_id->pr_gen; ?></option>
                      <?php if(count($get_gender)): ?>
                      <?php foreach($get_gender as $gender): ?>
                      <option value=<?php echo $gender->g_name; ?><?php echo set_select('gen', $gender->g_name); ?>>
                          <?php echo $gender->g_name; ?></option>
                      <?php endforeach; ?>
                      <?php endif; ?>
                  </select>
                  <div class="text-danger text-center"><?php echo form_error('gen'); ?></div>
              </div>

              <div style="margin-left: 30px; margin-top: 10px;" class="col-xs-3">
                  <?php echo form_label('Mobile/Tel No.'); ?>
                  <input type="number" class="form-control  <?= (form_error('number') == "" ? '':'is-invalid') ?>"
                      placeholder="Mobile/Tel No." name="number" value="<?php echo $pr_id->pr_number ?>">
                  <div class="text-danger text-center"><?php echo form_error('number'); ?></div>

              </div>

              <div style="margin-left: 20px; margin-top: 10px;" class="col-xs-3">
                  <?php echo form_label('Parent/Guardian'); ?>
                  <input type="text" class="form-control <?= (form_error('religion') == "" ? '':'is-invalid') ?>"
                      placeholder="Parent/Guardian" name="religion" value="<?php echo $pr_id->pr_religion ?>">
                  <div class="text-danger text-center"><?php echo form_error('religion'); ?></div>
              </div>

          </div>
      </div>
      <br><br>
      <button style="margin-left:471px;" id="submitbtn" type="submit" class="btn btn-primary bg-blue" name="submit">
          <span class="icon text-white-100">
              <i class="fas fa-arrow-right"></i>
              Save Record
          </span>
      </button>

      <?php echo form_close(); ?>





      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.min.js"></script>