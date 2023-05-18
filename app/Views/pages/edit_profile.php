<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Dashboard</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">
                                Profil
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">
                                Ubah Profil
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
        <a href="<?= base_url('user/profile') ?>" class="btn-icon btn btn-secondary btn-round btn-sm">
            <i data-feather="arrow-left"></i>
        </a>
    </div>
</div>

<div class="content-body">
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills mb-2">
                <!-- Akun -->
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab-fill" data-bs-toggle="pill" href="#akun" aria-expanded="true">
                        <i data-feather="user" class="font-medium-3 me-50"></i>
                        <span class="fw-bold">Profil</span>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="akun" aria-labelledby="home-tab-fill" aria-expanded="true">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Detail Profil</h4>
                        </div>
                        <div class="card-body py-2 my-25">
                            <form class="validate-form pt-50" action="<?= base_url('ubahprofil') ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <!-- header section -->
                                <div class="d-flex mb-2">
                                    <a href="#" class="me-25">
                                        <img src="<?= base_url() ?>/images/portrait/small/<?= $peserta['foto'] ?>" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100" />
                                    </a>
                                    <!-- upload and reset button -->
                                    <div class="d-flex align-items-end mt-75 ms-1">
                                        <div>
                                            <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Unggah</label>
                                            <input type="file" id="account-upload" hidden name="foto" />
                                            <button type="button" id="account-reset" class="btn btn-sm btn-flat-secondary mb-75">Atur Ulang</button>
                                            <p class="mb-0">File yang diunggah dalam format: png, jpg, jpeg.</p>
                                        </div>
                                    </div>
                                    <!--/ upload and reset button -->
                                </div>
                                <!--/ header section -->
                                <div class="row">
                                    <input type="hidden" class="form-control" name="id" value="<?= $pelanggan['user_id'] ?>" />
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountName">Nama</label>
                                        <input type="text" class="form-control" id="name" name="nama" value="<?= $pelanggan['nama_lengkap'] ?>" />
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountPhoneNumber">Nomor Telepon</label>
                                        <input type="number" class="form-control account-number-mask" id="accountPhoneNumber" name="nomor_telepon" value="<?= $pelanggan['nomor_telepon'] ?>" />
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountAddress">Alamat</label>
                                        <input type="text" class="form-control" id="accountAddress" name="alamat" value="<?= $pelanggan['alamat'] ?>" />
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountEmail">Email</label>
                                        <input type="email" class="form-control" id="accountEmail" name="email" value="<?= $pelanggan['email'] ?>" />
                                    </div>
                                    <div class="col-12 mt-1">
                                        <button type="submit" class="btn btn-primary me-1">Simpan</button>
                                        <button type="reset" class="btn btn-flat-secondary">Batal</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>