<section class="content">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/ubahPassDosen/<?=$dosen[0]->id?>/do_update">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="Password" class="form-control" disabled value="<?=$dosen[0]->nama?>" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password Lama</label>
                    <input type="text" class="form-control" disabled value="<?=$dosen[0]->pass_asli?>" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password Baru</label>
                    <input type="password" class="form-control" name="pass" id="password2" onkeyup="checkPass();" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
                    <input type="password" class="form-control" name="pass1" id="confirm2" onkeyup="checkPass();" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                        <span id="confirm-message2" class="confirm-message"></span>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <script type="text/javascript">
    function checkPass()
    {
        //Store the password field objects into variables ...
        var password = document.getElementById('password2');
        var confirm  = document.getElementById('confirm2');
        //Store the Confirmation Message Object ...
        var message = document.getElementById('confirm-message2');
        //Set the colors we will be using ...
        var good_color = "#66cc66";
        var bad_color  = "#ff6666";
        //Compare the values in the password field 
        //and the confirmation field
        if(password.value == confirm.value){
            //The passwords match. 
            //Set the color to the good color and inform
            //the user that they have entered the correct password 
            confirm.style.backgroundColor = good_color;
            message.style.color           = good_color;
            message.innerHTML             = 'Password Cocok!';
        }else{
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            confirm.style.backgroundColor = bad_color;
            message.style.color           = bad_color;
            message.innerHTML             = 'Password Tidak Cocok!';
        }
    }  
</script>