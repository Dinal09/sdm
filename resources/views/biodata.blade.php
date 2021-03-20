@extends('template')
@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>{{ $tools['title2'] }}</h1>

                    <div class="top-right-button-container">
                        <div class="btn-group">
                            <button class="btn btn-outline-primary btn-lg" type="button" data-toggle="modal"
                                data-backdrop="static" data-target="#tambah">
                                Tambah
                            </button>
                        </div>
                    </div>

                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Layanan</li>
                        </ol>
                    </nav>
                    <div class="mb-2">
                        <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
                            role="button" aria-expanded="true" aria-controls="displayOptions">
                            Display Options
                            <i class="simple-icon-arrow-down align-middle"></i>
                        </a>
                        <div class="collapse dont-collapse-sm" id="displayOptions">
                            <div class="d-block d-md-inline-block">
                                <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                    <input class="form-control" placeholder="Search Table" id="searchDatatable">
                                </div>
                            </div>
                            <div class="float-md-right dropdown-as-select" id="pageCountDatatable">
                                <span class="text-muted text-small">Displaying 1-10 of 40 items </span>
                                <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    10
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">5</a>
                                    <a class="dropdown-item active" href="#">10</a>
                                    <a class="dropdown-item" href="#">20</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="separator"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
                    <table id="datatableRows" class="data-table responsive nowrap"
                    data-order="[[ 1, &quot;desc&quot; ]]">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Foto</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data2 as $index => $data):
                                <tr>
                                    <td>
                                        <p class="text-muted">{{ $data->nama }}</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">{{ $data->tempat_lahir }}</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">{{ $data->tanggal_lahir }}</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">{{ $data->foto }}</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">{{ $data->alamat }}</p>
                                    </td>
                                    {{-- <td style="width: 250px">
                                        <a class="btn btn-outline-info mb-1" data-toggle="modal" data-backdrop="static"
                                            data-target="#update{{ $data->uuid }}">
                                            Edit
                                        </a>
                                        <a class="btn btn-outline-info mb-1"
                                            href="{{ url('layanan/delete/' . $data->uuid) }}"
                                            onclick="return confirm('Anda yakin?')">
                                            Hapus
                                        </a>
                                    </td> --}}
                                </tr>
                            @endforeach                  
                        </tbody>
                </table>
                </div>
            </div>
        </div>
        <div class="modal fade modal-right" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Artis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('tambah') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Nama Artis</label>
                                <input type="text" id="nama" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" id="tempatLahir" name="tempatLahir" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" id="tanggalLahir" name="tanggalLahir" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" id="alamatTinggal" name="alamatTinggal" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <select class="form-control" name="profinsi" id="profinsi">
                                    <option selected>Pilih Profinsi</option>
                                    @foreach($profinsi as $p)
                                    <option value={{ $p->id }}>{{ $p->nama }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Kabupaten Kota</label>
                                <select class="form-control" name="kabKota" id="kabKota">
                                    <option selected>Pilih Profinsi</option>
                                    @foreach($kabKota as $p)
                                    <option value={{ $p->id }}>{{ $p->nama }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <select class="form-control" name="kecamatan" id="kecamatan">
                                    <option selected>Pilih Profinsi</option>
                                    @foreach($kecamatan as $p)
                                    <option value={{ $p->id }}>{{ $p->nama }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" id="foto" name="foto" class="form-control" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary"
                            onclick="return confirm('Anda yakin?')">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function(){
            $('#profinsi').change(function(){
                $id = 
            })
        });
    </script>
@endsection
