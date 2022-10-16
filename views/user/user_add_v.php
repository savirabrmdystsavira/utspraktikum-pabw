<?php
    $this->load->view("template/header2");
?>   
    <div class="container">              
        <h2>Registrasi</h2>
            <?php echo form_open_multipart('user/tambah_aksi'); ?>
                <!-- <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Masukan Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                </div> -->
                
                <section class="vh-100 bg-image"
                    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
                    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                        <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Buat Akun</h2>

                                <form>

                                    <div class="form-outline mb-4">
                                    <label class="form-label" for="nama">Nama</label>
                                    <input type="text"  class="form-control form-control-lg" name="nama"/>                                    
                                    </div>

                                    <div class="form-outline mb-4">
                                    <label class="form-label" for="username">Email</label>
                                    <input type="email"  class="form-control form-control-lg" name="username" />
                                    </div>

                                    <div class="form-outline mb-4">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control form-control-lg" name="password"/>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn btn-primary">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                                        class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </section>
           
            <br>
            <br>
    </div>


<?php
    $this->load->view("template/footer");
?>


