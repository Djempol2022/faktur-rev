@extends('layouts.main', ['title' => 'Edit Pengguna'])

@section('content')
	<div class="row"> {{-- Card --}}
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Profil</h4>
                <p class="card-description">
                  Kelola profil anda disini
                </p>
                <form class="forms-sample" method="post" action="{{ route('UpdatedProfil') }}" enctype="multipart/form-data">
                  @csrf
                  {{-- <div class="row">
                    <div class="col-md-3 mb-3 stretch-card transparent">
                      <div class="form-group form-group-default">
                        <center>
                          @if (Auth::user()->foto != null)
                            <img id="preview-Foto"
                            src="{{ asset('storage') }}/{{ Auth::user()->foto }}"
                            alt="preview image" style="width: 100%; height: 150%; border-radius:50%">
                          @else
                            <img id="preview-Foto"
                            src="{{ asset('images/404.jpg') }}"
                            alt="preview image" style="width: 100%; height: 150%; border-radius:50%">
                          @endif
                        </center>
                    </div>
                  </div> --}}
                  <div class="row ">
                  <div class="col-md-12 stretch-card grid-margin grid-margin-md-0 ">
                    <div class="card data-icon-card-primary" style="border: none">
                      <div class="row pb-5">
                        <div class="col-sm-2">
                          <center>
                            @if (Auth::user()->foto != null)
                              <img id="preview-Foto"
                              src="{{ asset('storage') }}/{{ Auth::user()->foto }}"
                              alt="preview image" class="rounded-circle" width="200" height="200" style="padding: 5%;">
                            @else
                              <img id="preview-Foto"
                              src="{{ asset('images/404.jpg') }}"
                              alt="preview image" class="rounded-circle" width="200" height="200" style="padding: 5%;">
                            @endif
                          </center>
                          
                        </div>
                          <div class="col-md-2 text-white d-flex justify-content-center align-self-center">
                            <label class="btn" style="color:white; border: none;background: #4747A1;border-radius: 10px;">
                              Pilih Gambar<input name="foto" id="foto" accept="image/png, image/jpeg" type="file" style="display: none;" name="image">
                            </label>                                
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                        {{-- <ul class="icon-data-list">
                          <li>
                            <div class="d-flex">
                              <div class="col-sm-3">
                                <center>
                                  @if (Auth::user()->foto != null)
                                    <img id="preview-Foto"
                                    src="{{ asset('storage') }}/{{ Auth::user()->foto }}"
                                    alt="preview image" style="width: 100%; height: 150%; border-radius:50%">
                                  @else
                                    <img id="preview-Foto"
                                    src="{{ asset('images/404.jpg') }}"
                                    alt="preview image" style="width: 100%; height: 150%; border-radius:50%">
                                  @endif
                                </center>
                              </div>
                              <div>
                                <small>9:30 am</small>
                                <div class="col-8 col-sm-6">
                                  <label class="btn" style="color:white; border: none;background: #4747A1;border-radius: 10px;">
                                    Pilih Gambar<input name="foto" id="foto" accept="image/png, image/jpeg" type="file" style="display: none;" name="image">
                                  </label>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul> --}}
                      {{-- <div class="row">
                        <div class="col-sm-3">
                          <center>
                            @if (Auth::user()->foto != null)
                              <img id="preview-Foto"
                              src="{{ asset('storage') }}/{{ Auth::user()->foto }}"
                              alt="preview image" style="width: 100%; height: 150%; border-radius:50%">
                            @else
                              <img id="preview-Foto"
                              src="{{ asset('images/404.jpg') }}"
                              alt="preview image" style="width: 100%; height: 150%; border-radius:50%">
                            @endif
                          </center>
                        </div>
                        <div class="col-sm-9">
                          <div class="row">
                            <div class="col-8 col-sm-6">
                              <label class="btn" style="color:white; border: none;background: #4747A1;border-radius: 10px;">
                                Pilih Gambar<input name="foto" id="foto" accept="image/png, image/jpeg" type="file" style="display: none;" name="image">
                              </label>
                            </div>
                          </div>
                        </div>
                      </div> --}}
                    
                    {{-- <div class="form-group">
                    <label class="btn" style="color:white; border: none;background: #4747A1;border-radius: 10px;">
                      Pilih Gambar<input name="foto" id="foto" accept="image/png, image/jpeg" type="file" style="display: none;" name="image">
                    </label>
                    </div> --}}

                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputName1" style="font-size: medium;">Name</label>
                    <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" placeholder="Name">
                  </div>
                  <div class="form-group pt-4">
                    <label for="exampleInputEmail3" style="font-size: medium;">Email address</label>
                    <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}"  placeholder="Email">
                  </div>
                  
                  <div class="pt-4">
                    <button type="submit" class="btn btn-dark mr-2 btn-block py-3 " style="border: none;background: #4747A1;border-radius: 10px;">Simpan Perubahan</button>
                    {{-- <a href="{{ route('biro.Pengaturan') }}" class="btn btn-light">Cancel</a> --}}
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
	</div>
@endsection
@section('script')
<script>      
      $(document).ready(function (e) {
        $('#foto').change(function () {

            let file = this.files[0];
            // console.log(file);
            let reader = new FileReader();

            if (file['size'] < 2111775) {
                reader.onload = (e) => {
                    $('#preview-Foto').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            } else {
                swal({
                    title: "Error",
                    text: "File gambar terlalu besar",
                    icon: "error",
                    dangerMode: true,
                })
                $('#foto').val(null);
                // $('#preview-Foto').attr('src', '')
            }

        });
    });

      
</script>
@endsection