@extends('layouts.main', ['title' => 'Edit Pengguna'])
@section('content')
	<div class="row"> {{-- Card --}}
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="col-md-4">
                <h4 class="card-title">Edit Password</h4>
                <p class="card-description">
                  Kelola password anda disini
                </p>
                </div>
                <form class="forms-sample" id="isi-password" method="post" action="{{ route('biro.UpdatedPassword') }}">
                  @csrf

                <div class="form-group">
                    <div class="col-md-4">
                      <label for="validationCustom01" class="form-label" style="font-size: medium;">Password Lama</label>
                        <div class="input-group has-validation">
                            <input name="passwordlama" type="password" class="form-control" id="passwordlama"/>
                            <span class="input-group-text" onclick="password_show_hide1();">
                                <i class="mdi mdi-eye" id="show_eye"></i>
                                <i class="mdi mdi-eye-off d-none" id="hide_eye"></i>
                            </span>
                            <div class="input-group has-validation">
                              <label class="text-danger error-text passwordlama_error"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                      <label for="validationCustom01" class="form-label" style="font-size: medium;">Password Baru</label>
                        <div class="input-group has-validation">
                            <input name="password" type="password" class="input form-control" id="password"/>
                            <span class="input-group-text" onclick="password_show_hide2();">
                                <i class="mdi mdi-eye" id="show_eye2"></i>
                                <i class="mdi mdi-eye-off d-none" id="hide_eye2"></i>
                            </span>
                            <div class="input-group has-validation">
                                <label class="text-danger error-text password_error"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                      <label for="validationCustom01" class="form-label" style="font-size: medium;">Konfirmasi Password Baru</label>
                        <div class="input-group has-validation">
                            <input name="konfirmasipasswordbaru" type="password" class="input form-control"
                                id="konfirmasipasswordbaru"/>
                            <span class="input-group-text" onclick="password_show_hide3();">
                                <i class="mdi mdi-eye" id="show_eye3"></i>
                                <i class="mdi mdi-eye-off d-none" id="hide_eye3"></i>
                            </span>
                            <div class="input-group has-validation">
                                <label class="text-danger error-text konfirmasipasswordbaru_error"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-3">
                  <button type="submit" class="btn btn-dark mr-2 btn-block py-3" style="border: none;background: #4747A1;border-radius: 10px;">Simpan Perubahan</button>
                </div>
                </form>
              </div>
            </div>
          </div>
	</div>
@endsection
@section('script')
<script>
$('#isi-password').on('submit', function(e){
  e.preventDefault();
  $.ajax({
    url:$(this).attr('action'),
    method:$(this).attr('method'),
    data:new FormData(this),
    processData:false,
    dataType:'json',
    contentType:false,
    beforeSend:function(){
      // $(document).find('span.error-text').text('');
      $(document).find('label.error-text').text('');
    },
    success:function(data){
      if(data.status == 0){
        $.each(data.error, function(prefix, val){
          $('label.'+prefix+'_error').text(val[0]);
          // $('span.'+prefix+'_error').text(val[0]);
        });
      }
      else{
        $('#isi-password')[0].reset();
        // alert(data.msg);
        swal("Berhasil!", data.msg, "success");
      }
    }
  });
});

function password_show_hide1() {
  var x = document.getElementById("passwordlama");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
function password_show_hide2() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye2");
  var hide_eye = document.getElementById("hide_eye2");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
function password_show_hide3() {
  var x = document.getElementById("konfirmasipasswordbaru");
  var show_eye = document.getElementById("show_eye3");
  var hide_eye = document.getElementById("hide_eye3");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
</script>
@endsection