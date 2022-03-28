@extends('Admin.Master')

@section('content')

    <div class="row">
        
        <div class="col-12" >
            <div class="card mb-4 p-4">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 " href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm active" aria-current="page">Data Produk</li>
                </ol>
                <div class="card-header pb-0">
                <h4>Data Produk</h4>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Produk</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 0;
                            ?>
                            @foreach($produk as $pr)
                            <?php
                                $no += 1;
                            ?>
                            <tr>
                            <td class="align-middle text-center">
                                {{$no}}
                            </td>
                            <td  class="align-middle text-center">
                                {{$pr->nama_produk}}
                            </td>
                            <td class="align-middle text-center text-sm">
                            {{$pr->stok_produk}}
                            </td>
                            <td class="align-middle text-center">
                                {{$pr->harga}}
                            </td>
                            <td class="align-middle text-center"> 
                                <a href="" class="btn btn-info" ><i class="fa fa-info" aria-hidden="true" style="margin-right: 10px;"></i>Detail</a>
                                <a href="" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true" style="margin-right: 10px;"></i>Ubah</a>
                                <a href="" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true" style="margin-right: 10px;"></i>Hapus</a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
      

@endsection