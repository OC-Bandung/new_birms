<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 bdg-city">
        <form action="{{ url('search') }}" method="get">
        <div class="img-bg" style="background-image:url('{{ url('img/bandung.png') }}')">
          <div class="row justify-content-md-center">
          	<div class="col-12 col-lg-6 bg-primary bg-opacity p-4 mt-4">
            <h4><span class="font-weight-700">Cari</span> Tender dan kontrak</h4>
            <div class="input-group">
              <input type="text" class="form-control" name="q" placeholder="Isikan kata yang dicari" aria-label="Search" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
              <div class="input-group-append">
                <button class="btn btn-dark" type="submit">Cari</button>
              </div>
            </div>

            <div class="pt-2">
              <span><small>* Gunakan Filter Sebagai Pilihan <!-- Use advanced filters for more options.--></small></span>
              <span id="show-search-filters" class="float-right"><a class="h6 no-underline " href="#">Tampilkan Filter <i class="material-icons align-middle"> arrow_drop_down </i> </a></span>
            </div>


            <div id="search-filters" class="pt-3 d-none">

              <div class="row">
                <div class="col">
                    <div class="form-group">
                       <h6> Tahun </h6>
                        <select class="form-control" name="tahun" id="tahun">
                          @for ($i = date("Y"); $i >= 2013; $i--)
                          <option value="{{ $i }}">{{ $i }}</option>
                          @endfor
                        </select>
                    </div>
                </div>
                <div class="col">
                  <div class="form-group">
                     <h6> Tahapan </h6>
                      <select class="form-control" name="tahap" id="tahap">
                        <option value="" disabled selected>Pilih Tahapan</option>
                        <option value="1">Perencanaan</option>
                        <option value="2">Pengadaan</option>
                        <option value="3">Pemenang</option>
                        <option value="4">Kontrak</option>
                        <option value="5">Implementasi</option>
                      </select>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                     <h6> Klasifikasi </h6>
                      <select class="form-control" name="klasifikasi" id="klasifikasi">
                        <option value="" disabled selected>Pilih Klasifikasi</option>
                        <option value="01">Konstruksi</option>
                        <option value="02">Pengadaan Barang</option>
                        <option value="03">Jasa Konsultansi</option>
                        <option value="04">Jasa Lainnya</option>
                      </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <div class="form-group justify-content-between">
                     <h6> Pagu Anggaran / Nilai Kontrak </h6>
                     <div class="row">
                       <div class="col">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="cmin">Rp.</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Min" name="min" id="min" aria-label="Min" aria-describedby="cmin">
                        </div>
                       </div>
                       <div class="col">
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="cmax">Rp.</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Max" name="max" id="max" aria-label="Max" aria-describedby="cmax">
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <div class="form-group justify-content-between">
                     <h6>Tanggal</h6>
                     <div class="row">
                       <div class="col">
                         <input type="date" class="form-control" name="startdate" id="startdate">
                       </div>
                        <div class="col">
                          <input type="date" class="form-control" name="enddate" id="enddate" >
                        </div>
                     </div>
                   </div>
                 </div>
              </div>

            </div>
          </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</section>