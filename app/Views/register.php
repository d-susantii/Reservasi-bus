<body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">Registrasi</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2 text-center mt-3">Sistem Informasi 
                <br>Reservasi Bus Pariwisata</h4>
              <p class="mb-4 text-center">Silakan Registrasi Terlebih Dahulu</p>

              <form id="formAuthentication" class="mb-3 was-validated" action="<?= base_url('cekRegistrasi') ?>" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Nama</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nama"
                    name="register_nama"
                    placeholder="Masukkan Nama Anda"
                    autofocus
                    required
                  />
                  <div class="valid-feedback">Sudah Diisi</div>
                  <div class="invalid-feedback">Harus Diisi</div>
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label,">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="register_username"
                    placeholder="Masukkan Username Anda"
                    autofocus
                    required
                  />
                  <div class="valid-feedback">Sudah Diisi</div>
                  <div class="invalid-feedback">Harus Diisi</div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input 
                  type="text" 
                  class="form-control" 
                  id="email" 
                  name="register_email" 
                  placeholder="Masukkan Email Anda" 
                  autofocus 
                  required
                   />
                  <div class="valid-feedback">Sudah Diisi</div>
                  <div class="invalid-feedback">Harus Diisi</div>
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="register_password"
                      placeholder="Masukkan Password Anda"
                      minlength="8"
                      required oninvalid="this.setCustomValidity('Password minimal 8 karakter')" oninput="this.setCustomValidity('Password minimal 8 karakter')" onchange="this.setCustomValidity('')"
                      autofocus
                      required
                       />
                       
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  <div class="valid-feedback">Sudah Diisi</div>
                  <div class="invalid-feedback">Harus Diisi</div>
                </div>
                
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Ulangi Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="register_ulangipassword"
                      placeholder="Masukkan Password Anda"
                      minlength="8"
                      required oninvalid="this.setCustomValidity('Password minimal 8 karakter')" oninput="this.setCustomValidity('Password minimal 8 karakter')" onchange="this.setCustomValidity('')"
                      autofocus
                      required
                       />
                       
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  <div class="valid-feedback">Sudah Diisi</div>
                  <div class="invalid-feedback">Harus Diisi</div>
                </div>
                
                <div class="mb-3">
                  <label for="email" class="form-label">Alamat</label>
                  <input 
                  type="text" 
                  class="form-control" 
                  id="email" 
                  name="register_alamat" 
                  placeholder="Masukkan Alamat Anda" 
                  autofocus 
                  required
                   />
                  <div class="valid-feedback">Sudah Diisi</div>
                  <div class="invalid-feedback">Harus Diisi</div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Nomor Telepon</label>
                  <input 
                  type="number" 
                  class="form-control" 
                  id="email" 
                  name="register_nomor_telepon"  
                  placeholder="Masukkan Nomor Telepon Anda" 
                  autofocus 
                  required
                  />
                  <div class="valid-feedback">Sudah Diisi</div>
                  <div class="invalid-feedback">Harus Diisi</div>
                </div>
                <button class="btn btn-primary d-grid w-100 mb-3">Registrasi</button>
              </form>

              <p class="text-center">
                <span>Sudah Punya Akun?</span>
                <a href="<?= base_url() ?>">
                  <span>Silakan Login</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->