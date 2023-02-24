 <!-- Content wrapper -->
 <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4> -->

              <section id="dashboard-ecommerce">
            <div class="row match-height">
                <!-- <h2 class="content-header-title float-start mb-2">Dashboard</h2> -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card-profile">
                        <img src="<?= base_url() ?>/images/banner/banner-12.jpg" class="img-fluid card-img-top" alt="Profile Cover Photo" />
                        <div class="card-body">
                            <div class="profile-image-wrapper">
                                <div class="profile-image">
                                    <div class="avatar">
                                        <img src="<?= base_url() ?>/images/portrait/small/<?= session()->get('foto') ?>" alt="Profile Picture" />
                                    </div>
                                </div>
                            </div>
                            <h3><?= ucfirst(session()->nama_pendaftar) ?></h3>
                            <span class="badge badge-light-primary profile-badge"><?= session()->level_user ?></span>
                        </div>
                        <div class="card-footer">
                            <div class="d-grid col-12">
                                <a href="<?= base_url('user/setting') ?>" class="btn btn-primary">
                                    <i data-feather="edit" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Edit Profil</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
                                                <label class="col-form-label" for="contact-info">Alamat</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="number" id="contact-info" class="form-control" name="contact" value="<?= session()->alamat ?>" disabled />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--/ Profile Card -->
            </div>
        </section>
              </div>
            </div>
            <!-- / Content -->