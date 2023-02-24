<!-- Content wrapper -->
<div class="content-wrapper">
  <div class="col-lg-8 col-md-6 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Detail Profil</h4>
      </div>
      <div class="card-body">
        <form class="form form-horizontal">
          <div class="row">
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-9">
                  <input hidden type="text" id="first-name" class="form-control" name="fname" value="<?= ucfirst(session()->id_pendaftaran) ?>" disabled />
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="first-name">Nama</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" id="first-name" class="form-control" name="fname" value="<?= ucfirst(session()->nama_pendaftar) ?>" disabled />
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="name">Tempat Lahir</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" id="name" class="form-control" name="fname" value="<?= session()->tempat_lahir ?>" disabled />
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="email-id">Tanggal Lahir</label>
                </div>
                <div class="col-sm-9">
                  <input type="email" id="email-id" class="form-control" name="email-id" value="<?= session()->tgl_lahir ?>" disabled />
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="email-id">Jenis Kelamin</label>
                </div>
                <div class="col-sm-9">
                  <input type="email" id="email-id" class="form-control" name="email-id" value="<?= session()->jenis_kelamin ?>" disabled />
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="email-id">Status</label>
                </div>
                <div class="col-sm-9">
                  <input type="email" id="email-id" class="form-control" name="email-id" value="<?= session()->status ?>" disabled />
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="contact-info">Nomor Telepon</label>
                </div>
                <div class="col-sm-9">
                  <input type="number" id="contact-info" class="form-control" name="contact" value="<?= session()->no_tlp ?>" disabled />
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="email-id">Berkas Persyaratan</label>
                </div>
                <?php if (session()->berkas == '') : ?>
                  <div class="col-sm-9">
                    <input type="file" id="email-id" class="form-control" name="email-id" />
                  </div>
                <?php else : ?>
                  <div class="col-sm-9">
                    <input type="text" id="email-id" class="form-control" name="email-id" value="<?= session()->berkas ?>" disabled />
                  </div>
                <?php endif ?>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>