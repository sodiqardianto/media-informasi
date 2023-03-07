@extends('layouts.main')
@section('title', 'Guru')
@section('content')
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Ubah @yield('title')</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('guru.index') }}">@yield('title')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ubah @yield('title')</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Nama Guru</label>
                                    <input type="text" name="namaguru" class="form-control @error('namaguru') is-invalid state-invalid @enderror" placeholder="Nama Guru" value="{{ old('namaguru', $guru->namaguru) }}" autofocus>
                                    @error('namaguru')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">NIPN</label>
                                    <input type="text" name="nipn" class="form-control @error('nipn') is-invalid state-invalid @enderror" placeholder="Masukan NIPN" value="{{ old('nipn', $guru->nipn) }}" autofocus>
                                    @error('nipn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Pendidikan Terakhir</label>
                                    <select name="pendidikanterakhir" class="form-control form-select select2 select2-hidden-accessible @error('pendidikanterakhir') is-invalid state-invalid @enderror" data-bs-placeholder="Pilih Pendidikan Terakhir" tabindex="-1" aria-hidden="true">
                                        <option value="S3" {{$guru->pendidikanterakhir=='S3'?'selected':''}}>S3</option> 
                                        <option value="S2" {{$guru->pendidikanterakhir=='S2'?'selected':''}}>S2</option> 
                                        <option value="S1" {{$guru->pendidikanterakhir=='S1'?'selected':''}}>S1</option> 
                                        <option value="SMK" {{$guru->pendidikanterakhir=='SMK'?'selected':''}}>SMK</option> 
                                        <option value="SMA" {{$guru->pendidikanterakhir=='SMA'?'selected':''}}>SMA</option> 
                                        <option value="SMP" {{$guru->pendidikanterakhir=='SMP'?'selected':''}}>SMP</option> 
                                        <option value="SD" {{$guru->pendidikanterakhir=='SD'?'selected':''}}>SD</option> 
                                    </select>
                                    @error('pendidikanterakhir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Keahlian Bahasa</label>
                                    <input type="text" name="keahlianbahasa" class="form-control @error('keahlianbahasa') is-invalid state-invalid @enderror" placeholder="Masukan Keahlian Bahasa" value="{{ old('keahlianbahasa', $guru->keahlianbahasa) }}" autofocus>
                                    @error('keahlianbahasa')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Foto</label>
                                    <input type="file" class="form-control-file @error('picture') is-invalid state-invalid @enderror" id="picture" name="picture">
                                    @error('picture')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <?php 
                                            
                                        if($guru->picture==""){
                                            $picture = "default.jpg";
                                        }else{
                                            $picture = $guru->picture;
                                        }
                                        
                                        ?>
                                    <img id="image" src="{{asset("assets/images/guru/".$picture )}}" width="200px" height="200px">
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i> Perbarui</button>
                                <a href="{{ route('users.index') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
            <!-- End Row -->
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</div>
@endsection
@push('after-script')
<script>
// Mengambil element input file dan img
  const fileInput = document.getElementById('picture');
  const image = document.getElementById('image');

  // Menambahkan event listener untuk input file
  fileInput.addEventListener('change', function(event) {
    // Mengambil file yang diupload
    const file = event.target.files[0];

    // Membuat objek FileReader
    const reader = new FileReader();

    // Menambahkan event listener untuk objek FileReader
    reader.addEventListener('load', function() {
      // Menetapkan src attribute dari element img ke hasil pembacaan file
      image.src = reader.result;
    });

    // Membaca file sebagai URL
    reader.readAsDataURL(file);
  });
</script>
@endpush