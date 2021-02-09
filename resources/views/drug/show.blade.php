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
                    <div class="col-6">
                        <table class="table table-striped text-center table-borderless">
                            <tr>
                                <th>หมายเลข VN</th>
                                <td>{{ $list->drug_vn }}</td>
                            </tr>
                            <tr>
                                <th>หมายเลข HN</th>
                                <td>{{ $list->drug_hn }}</td>
                            </tr>
                            <tr>
                                <th>เลขเตียง/ห้อง</th>
                                <td>{{ $list->drug_bed }}</td>
                            </tr>
                            <tr>
                                <th>วันที่สร้าง</th>
                                <td>{{ $list->create_at }}</td>
                            </tr>
                            <tr>
                                <th>แก้ไข</th>
                                <td>{{ $list->update_at }}</td>
                            </tr>
                            <tr>
                                <th>ไฟล์</th>
                                <td><a href="#"><i class="far fa-file-pdf"></i> Drug_Order_090221</a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-6 table-bordered">
                       <i class="far fa-file-pdf text-danger"></i> Show (PDF File)
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
