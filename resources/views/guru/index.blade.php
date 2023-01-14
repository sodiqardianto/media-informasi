@extends('layouts.main')
@section('title', 'Guru')
@section('content')
<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">@yield('title')</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="{{ route('guru.create') }}" class="btn btn-primary"><i class="fe fe-plus me-2"></i> Tambah @yield('title')</a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered text-nowrap border-bottom">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">No</th>
                                            <th class="border-bottom-0">NIPN</th>
                                            <th class="border-bottom-0">Nama Guru</th>
                                            <th class="border-bottom-0">Pendidikan Terakhir</th>
                                            <th class="border-bottom-0">Keahlian Bahasa</th>
                                            <th class="border-bottom-0">Foto</th>
                                            <th class="border-bottom-0">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--app-content closed-->

    <!-- Inout modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Foto</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="gambar" src="" width="100%" height="100%">
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('after-script')
<script>
    $(document).on('click', '.show-modal', function () {
        var gambar = $(this).attr('data-gambar');
        $('#gambar').attr('src', '/assets/images/guru/' + gambar);
        $('#myModal').modal('show');
    });
</script>

<script>
    $('#example2').DataTable({
        responsive: true,
        destroy: true,
        processing: true,
        serverSide: true,
        language: {
            searchPlaceholder: "Cari ..."
        },
        ajax: {
            url: "{{ route('guru.data') }}",
            type: "GET",
        },
        columns: [{
                data: "DT_RowIndex",
                name: "DT_RowIndex",
                orderable: false,
                searchable: false
            },
            {
                data: 'nipn',
                name: 'nipn'
            },
            {
                data: 'namaguru',
                name: 'namaguru'
            },
            {
                data: 'pendidikanterakhir',
                name: 'pendidikanterakhir'
            },
            {
                data: 'keahlianbahasa',
                name: 'keahlianbahasa'
            },
            {
                data: 'picture',
                name: 'picture',
                "render": function (data, type, full, meta) {
                    return `
                    <a type="button" data-gambar="${data}" class="show-modal">
                        <img src="/assets/images/guru/${data}" height=\"50\"/>
                    </a>`;
                },
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
            
        ],
        order: [
            [0, 'desc']
        ],
    });

    $(document).on("click", ".delete", function(e) {
        var id = $(this).attr('data-id');
        Swal.fire({
            title: "Hapus Guru?",
            icon: 'error',
            text: "Apakah kamu ingin menghapus guru! ",
            showCancelButton: !0,
            confirmButtonText: "Hapus",
            cancelButtonText: "Cancel",
            reverseButtons: !0
        }).then(function (e) {
            if (e.value === true) {
                $.ajax({
                    url: "{{url('/guru')}}/" + id,
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    dataType: 'json',
                    success: function (data) {
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Guru berhasil dihapus!",
                            icon: "success",
                            confirmButtonText: "Ok"
                        }).then(function() {
                            $('#example2').DataTable().ajax.reload();
                        });
                    }
                });
            } else {
                e.dismiss;
            }
        }, function (dismiss) {
            return false;
        }
    )});
</script>
@endpush