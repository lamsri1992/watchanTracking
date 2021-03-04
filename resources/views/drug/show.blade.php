@extends('layouts.app')
@section('title',"WATCHAN MDR MANAGEMENT :: ระบบบริหารจัดการเวชระเบียนผู้ป่วยใน รพช.วัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา")
@section('content')

<div class="container-fluid">
    <article class="card">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/drugOrder"><i class="fas fa-notes-medical"></i> รายการแพทย์สั่งยา</li></a>
                <li class="breadcrumb-item active" aria-current="page">ODL23736{{ str_pad($list->drug_id, 4, '0', STR_PAD_LEFT) }}</li>
            </ol>
        </nav>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-7">
                        <table class="table table-striped table-borderless">
                            <tr>
                                <th class="text-center">หมายเลข VN</th>
                                <td>{{ $list->drug_vn }}</td>
                            </tr>
                            <tr>
                                <th class="text-center">หมายเลข HN</th>
                                <td>{{ $list->drug_hn }}</td>
                            </tr>
                            <tr>
                                <th class="text-center">เตียง/ห้อง</th>
                                <td>{{ $list->drug_bed }}</td>
                            </tr>
                            <tr>
                                <th class="text-center">วันที่สร้าง</th>
                                <td>{{ $list->create_at }}</td>
                            </tr>
                            <tr>
                                <th class="text-center"><i class="far fa-folder-open"></i> ไฟล์ Order</th>
                                <td>
                                    @php
                                        $path = "/MDR/".$list->drug_vn."/Order/";
                                        $objOpen = opendir('MDR/'.$list->drug_vn.'/Order');
                                        while (($file = readdir($objOpen)) !== false)
                                        {
                                            if ($file == '.' || $file == '..')continue;
                                            echo "<a href='".$path.$file."' target='_blank'><i class='far fa-file-pdf'></i> ".$file."</a><br>";
                                        }
                                    @endphp
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-5">
                        <h3>อัพโหลด Order</h3>
                        <form action="{{ url('/drugOrder/uploadFile') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="vn_file" required>
                                <input type="text" class="form-control" name="vn_id" value="{{ $list->drug_vn }}" hidden>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-upload"></i> Upload</button>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>

@endsection
@section('script')
<script>
   
</script>
@endsection
