<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Learning - Daftar</title>

    <link rel="stylesheet" href="{{URL::to('vendor/be/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('vendor/be/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{URL::to('vendor/be/assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{URL::to('vendor/be/assets/images/logo-atas.png')}}" />
    <style type="text/css">
        label #gender-error,{
           margin-top: 100px;
        }
    </style>
</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo text-center">
                                <a href="{{ url('/') }}"> <img src="{{URL::to('vendor/be/assets/images/3.svg')}}"></a>
                            </div>
                            <h4>Baru disini?</h4>
                            <h6 class="font-weight-light">Mendaftar itu mudah. Hanya perlu beberapa langkah. Pilihlah salah satu Tab dibawah</h6>

                            <div class="card">
                                <ul class="nav nav-tabs profile-tab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link show active" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Siswa</a> </li>
                                    <li class="nav-item"> <a class="nav-link show" data-toggle="tab" href="#settings" role="tab" aria-selected="true">Guru</a> </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="profile" role="tabpanel">
                                        <form class="forms-sample pt-3 register-student" action="{{ url('register') }}" method="post" autocomplete="off">
                                            @csrf

                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Nomor Induk Siswa</label>
                                                <input name="nis" value="{{ old('nis') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control" placeholder="NIS">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Nama Lengkap <span class="text-danger">*</span></label>
                                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nama">
                                                @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Nomor Telepon <span class="text-danger">*</span></label>
                                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control" placeholder="Nomor Telepon">
                                                @error('phone_number')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Alamat Email <span class="text-danger">*</span></label>
                                                <input name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="Email">
                                                @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Kata Sandi <span class="text-danger">*</span></label>
                                                <input type="password" id="password" name="password" class="form-control" placeholder="Kata Sandi">
                                                @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputConfirmPassword1">Ulangi Kata Sandi <span class="text-danger">*</span></label>
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi Sandi">
                                            </div>

                                            <div class="form-group">
                                                <label>Tahun Ajaran <span class="text-danger">*</span></label>
                                                <select name="school_year_id" class="form-control">
                                                    <option selected disabled>-- Pilih Tahun Ajaran --</option>
                                                    @foreach($school_years as $school_year)
                                                    <option value="{{ $school_year->scy_id }}">{{ $school_year->scy_name }}</option>
                                                    @endforeach  
                                                </select>
                                                @error('entry_year')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Jenis Kelamin</label>

                                                <div class="col-sm-4">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="gender" value="Pria" value="{{ old('gender') }}"> Pria <i class="input-helper"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="gender" value="Perempuan" value="{{ old('gender') }}"> Wanita <i class="input-helper"></i></label>
                                                    </div>
                                                </div>
                                                @error('gender')
                                                <div class="col-sm-12 col-form-label text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="place_of_birth">Tempat Lahir</label>
                                                <input type="text" value="{{ old('place_of_birth') }}" name="place_of_birth" class="form-control" placeholder="Kota Lahir">
                                            </div>

                                            <div class="form-group">
                                                <label for="date_of_birth">Tanggal, Bulan, Tahun Lahir</label>
                                                <input  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="date_of_birth" value="{{ old('name_of_birth') }}" class="form-control" type="date">
                                            </div>

                                            <div class="form-group">
                                                <label for="religion">Agama</label>
                                                <select name="religion" class="form-control">
                                                    <option selected disabled>-- Pilih Agama --</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="address">Alamat Lengkap</label>
                                                <input type="text" value="{{ old('address') }}" name="address" class="form-control" placeholder="Alamat">
                                            </div>
                                            <input type="hidden" name="role" value="siswa">
                                            <input type="hidden" name="user_role" value="4">
                                            <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">DAFTAR</button>
                                        </form>
                                    </div>

                                    <div class="tab-pane show" id="settings" role="tabpanel">
                                        <form action="{{ url('register') }}" method="post" class="pt-3 register-teacher" autocomplete="off">
                                            @csrf
                                            <div class="form-group">
                                                <label for="nip">Nomor Identitas Pegawai <span class="text-danger">*</span></label>
                                                <input type="text" name="nip" value="{{ old('nip') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" placeholder="NIP">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Nama Lengkap <span class="text-danger">*</span></label>
                                                <input type="text" name="teacher_name" value="{{ old('teacher_name') }}" class="form-control" placeholder="Nama">
                                                @error('teacher_name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Nomor Telepon <span class="text-danger">*</span></label>
                                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control" placeholder="Nomor Telepon">
                                                @error('phone_number')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Alamat Email <span class="text-danger">*</span></label>
                                                <input name="teacher_email" value="{{ old('teacher_email') }}" type="email" class="form-control" placeholder="Email">
                                                @error('teacher_email')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Kata Sandi <span class="text-danger">*</span></label>
                                                <input type="password" id="password-teacher" name="password" class="form-control" placeholder="Kata Sandi">
                                                @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputConfirmPassword1">Ulangi Kata Sandi <span class="text-danger">*</span></label>
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi Sandi">
                                            </div>

                                            <div class="form-group">
                                                <label>Tahun Masuk <span class="text-danger">*</span></label>
                                                <input class="form-control year_picker" name="entry_year" placeholder="Masukan tahun masuk">
                                                @error('entry_year')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Jenis Kelamin </label>

                                                <div class="col-sm-4">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="gender" value="Pria" value="{{ old('gender') }}"> Pria <i class="input-helper"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="gender" value="Perempuan" value="{{ old('gender') }}"> Wanita <i class="input-helper"></i></label>
                                                    </div>
                                                </div>
                                                @error('gender')
                                                <div class="col-sm-12 col-form-label text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="place_of_birth">Tempat Lahir</label>
                                                <input type="text" value="{{ old('place_of_birth') }}" name="place_of_birth" class="form-control" placeholder="Kota Lahir">
                                            </div>

                                            <div class="form-group">
                                                <label for="date_of_birth">Tanggal, Bulan, Tahun Lahir</label>
                                                <input name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control" type="date">
                                            </div>

                                            <div class="form-group">
                                                <label for="address">Alamat Lengkap</label>
                                                <input type="text" name="address" value="{{ old('address') }}" class="form-control" placeholder="Alamat">
                                            </div>
                                            <input type="hidden" name="role" value="guru">
                                            <input type="hidden" name="user_role" value="3">
                                            <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">DAFTAR</button>
                                        </form>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4 font-weight-light"> Anda sudah memiliki akun? <a href="{{ route('login') }}" class="text-primary">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="{{URL::to('vendor/be/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{URL::to('vendor/be/assets/js/off-canvas.js')}}"></script>
    <script src="{{URL::to('vendor/be/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{URL::to('vendor/be/assets/js/misc.js')}}"></script>
    <script src="{{ URL::to('vendor/be/assets/js/preloader.js')}}"></script>


    <script src="{{URL::to('vendor/fe/assets/vendor/validator/jquery.validate.js')}}"></script>
    <script src="{{URL::to('vendor/fe/assets/vendor/validator/validator-init.js')}}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
    <script>
    $('.year_picker').datepicker({
        autoclose: true,
        minViewMode: 2,
        format: 'yyyy',
        orientation: "auto",
    });
</script>
</body>

</html>