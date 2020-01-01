@extends('layout.main')

@section('container')
<section class="contact_area p_120">
            <div class="container">
                <div id="mapBox" class="mapBox" 
                    data-lat="40.701083" 
                    data-lon="-74.1522848" 
                    data-zoom="13" 
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083"
                    data-mlon="-74.1522848">
                </div>

                <div class="row">
                    
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Kota Kendari</h6>
                                <p>Kecamatan Kemaraya</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">081241292894</a></h6>
                                <p>Hubungi saya jika ada saran</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">iqbalmipa17@gmail.com</a></h6>
                                <p>Kirim saran kalian melalui email atau website resmi saya</p>
                            </div>
                        </div>
                    </div>

<!-- ======== ini isi pesan ====== -->
                <div class="card-body">
                
                   <!-- <b><u><h5> kirim saran dam masukan kalian di kolom komentar berikut yahh..:)</h5></U></b> -->
				   <form method="POST" action="/contact">
  					<!-- {{ csrf_field()}} -->
                      @csrf
							<div class="form-group">
							<div class="col-7">
									<label for="nama">Nama</label>
									<input type="nama" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama" name="nama">
							</div>
							</div>
							<div class="form-group">
							<div class="col-7">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan Email" name="email">
							</div>
							</div>
							<div class="form-group">
							<div class="col-7">
							<label for="email">Pesan</label><br>
							<textarea placeholder="Masukkan Pesan" name="pesan" rows="5" cols="90"></textarea>
							</div>
							</div>
							<div class="col-6">
                            <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
							<button type="reset" value="reset" class="btn reset_btn">reset</button>
                            @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
							</div>
							</form>
							
							<a href="{{ url('/contact')}}">Lihat Coment</a>
							
                </div>
                
            </div>
        </div>
    </div>
</div>
</section>

@endsection