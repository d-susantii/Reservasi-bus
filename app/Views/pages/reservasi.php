 <!-- Content wrapper -->
 <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4> -->

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic with Icons -->
                <div class="col-lg-12">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Reservasi Bus Pariwisata</h5>
                      <!-- <small class="text-muted float-end">Merged input group</small> -->
                    </div>
                    <div class="card-body">
                      <form>
                      <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-kategori">Nama Perusahaan Otobus (PO)</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-kategori" class="input-group-text">
                              <i class='bx bx-bus'></i>
                              </span>
                              <select class="select2 form-select" id="dashboard-kategori" name="dashboard-kategori" placeholder="Perusahaan Otobus (PO)" autofocus>
                            <option disabled selected value="Perusahaan Otobus">--Perusahaan Otobus--</option>
                              <option value="PO. Trans Saba">PO. Trans Saba</option>
                              <option value="PO. Putra Bahagia Sejahtera">PO. Putra Bahagia Sejahtera</option>
                          </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-dari">Tujuan Awal</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-dari2" class="input-group-text">
                              <i class='bx bx-map-pin'></i>
                              </span>
                              
                              
                                <select class="form-control" name="provinsi" id="provinsi">
                                    <option>Pilih</option>
                                </select>
                              
                            </div>
                          </div>
                        </div>       
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-ke">Tujuan Akhir</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-ke2" class="input-group-text">
                              <i class='bx bx-map-pin'></i>
                              </span>
                              
                              <select class="form-control" name="kota" id="kota">
                                    <option>Pilih</option>
                                </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-keberangkatan">Tanggal Berangkat</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class='bx bx-calendar'></i></span>
                              <input
                                type="date"
                                id="basic-icon-default-keberangkatan2"
                                class="form-control"
                                placeholder="Pilih Tanggal Keberangkatan"
                                aria-describedby="basic-icon-default-keberangkatan2"
                              />
                            </div>
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-pulang">Tanggal Pulang</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-pulang2" class="input-group-text">
                              <i class='bx bx-calendar'></i>
                              </span>
                              <input
                                type="date"
                                id="basic-icon-default-pulang2"
                                class="form-control phone-mask"
                                placeholder="Pilih Tanggal Pulang"
                                aria-describedby="basic-icon-default-pulang2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-jam">Jam</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-jam" class="input-group-text">
                              <i class='bx bx-time'></i>
                              </span>
                              <input
                                type="time"
                                id="basic-icon-default-jam"
                                class="form-control"
                                placeholder="Pilih Jumlah Kursi"
                                aria-describedby="basic-icon-default-jam"
                              ></input>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-kategori">Kategori Bus</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-kategori" class="input-group-text">
                              <i class='bx bx-bus'></i>
                              </span>
                              <select class="select2 form-select" id="dashboard-kategori" name="dashboard-kategori" placeholder="Kategori Bus" autofocus>
                            <option disabled selected value="Kategori Bus">--Kategori Bus--</option>
                              <option value="Bus Kecil">Bus Kecil</option>
                              <option value="Bus Sedang">Bus Sedang</option>
                              <option value="Bus Besar">Bus Besar</option>
                          </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-penjemputan">Penjemputan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-penjemputan" class="input-group-text">
                              <i class='bx bx-map-pin'></i>
                              </span>
                              <select class="select2 form-select" id="dashboard-penjemputan" name="dashboard-penjemputan" placeholder="Lokasi Penjemputan" autofocus>
                            <option disabled selected value="Lokasi Penjemputan">--Lokasi Penjemputan--</option>
                              <option value="Magetan">Magetan</option>
                              <option value="Ngawi">Ngawi</option>
                              <option value="Ponorogo">Ponorogo</option>
                              <option value="Madiun">Madiun</option>
                          </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-penjemputan">Jumlah Pesan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-pesan" class="input-group-text">
                              <i class='bx bx-list-check'></i>
                              </span>
                              <input
                                type="text"
                                id="basic-icon-default-pesan2"
                                class="form-control"
                                placeholder="Masukkan Jumlah Pesan"
                                aria-describedby="basic-icon-default-pesan"
                              ></input>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-penjemputan">Total Harga</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-pesan" class="input-group-text">
                              <i class='bx bx-list-check'></i>
                              </span>
                              <input
                                type="text"
                                id="basic-icon-default-pesan2"
                                class="form-control"
                                aria-describedby="basic-icon-default-pesan"
                              ></input>
                            </div>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Reservasi</button>
                            <a href="<?= base_url('pembayaran') ?>" class="banner-two__link-overlay"></a> 
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
            
<!-- Javascript API Lokasi -->
     <script>
        fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
            .then((response) => response.json())
            .then((provinces) => {
                var data = provinces;
                var tampung = `<option>Pilih</option>`;
                data.forEach((element) => {
                    tampung += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                });
                document.getElementById("provinsi").innerHTML = tampung;
            });
    </script>
    <script>
        const selectProvinsi = document.getElementById('provinsi');
        const selectKota = document.getElementById('kota');

        selectProvinsi.addEventListener('change', (e) => {
            var provinsi = e.target.options[e.target.selectedIndex].dataset.prov;
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
                .then((response) => response.json())
                .then((regencies) => {
                    var data = regencies;
                    var tampung = `<option>Pilih</option>`;
                    document.getElementById('kota').innerHTML = '<option>Pilih</option>';
                    // document.getElementById('kecamatan').innerHTML = '<option>Pilih</option>';
                    // document.getElementById('kelurahan').innerHTML = '<option>Pilih</option>';
                    data.forEach((element) => {
                        tampung += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById("kota").innerHTML = tampung;
                });
        });

        selectKota.addEventListener('change', (e) => {
            var kota = e.target.options[e.target.selectedIndex].dataset.prov;
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${kota}.json`)
                .then((response) => response.json())
                .then((districts) => {
                    var data = districts;
                    var tampung = `<option>Pilih</option>`;
                    // document.getElementById('kecamatan').innerHTML = '<option>Pilih</option>';
                    // document.getElementById('kelurahan').innerHTML = '<option>Pilih</option>';
                    data.forEach((element) => {
                        tampung += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    // document.getElementById("kecamatan").innerHTML = tampung;
                });
        });
        // selectKecamatan.addEventListener('change', (e) => {
        //     var kecamatan = e.target.options[e.target.selectedIndex].dataset.prov;
        //     fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/villages/${kecamatan}.json`)
        //         .then((response) => response.json())
        //         .then((villages) => {
        //             var data = villages;
        //             var tampung = `<option>Pilih</option>`;
        //             document.getElementById('kelurahan').innerHTML = '<option>Pilih</option>';
        //             data.forEach((element) => {
        //                 tampung += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
        //             });
        //             document.getElementById("kelurahan").innerHTML = tampung;
        //         });
        // });
    </script> 