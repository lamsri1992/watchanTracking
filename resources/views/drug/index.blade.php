@extends('layouts.app')
@section('title',"WATCHAN CHART MANAGEMENT :: ระบบบริหารจัดการเวชระเบียนผู้ป่วยใน รพช.วัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา")
@section('content')

<div class="container-fluid">
    <article class="card">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-notes-medical"></i> รายการแพทย์สั่งยา (ผู้ป่วยใน)</li>
            </ol>
        </nav>
        <div class="card-body">
            <div class="container-fluid">
                <table id="trackList" class="display" width="100%">
                    <thead style="color:white;background-color:#343a40;">
                        <tr>
                            <th class="text-center">DrugID</th>
                            <th class="text-center">VN</th>
                            <th class="text-center">HN</th>
                            <th class="text-center">เตียง</th>
                            <th class="text-center"><i class="far fa-calendar-plus"></i> วันที่สร้าง</th>
                            <th class="text-center">Order</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $list)
                        <tr>
                            <th class="text-center">ODL23736{{ str_pad($list->drug_id, 4, '0', STR_PAD_LEFT) }}</th>
                            <td class="text-center">{{ $list->drug_vn }}</td>
                            <td class="text-center">{{ $list->drug_hn }}</td>
                            <td class="text-center">{{ $list->drug_bed }}</td>
                            <td class="text-center">{{ $list->create_at }}</td>
                            <td class="text-center">
                                <a href="{{ route('drug.show',base64_encode($list->drug_id)) }}" class="btn btn-sm btn-info">
                                    <i class="fa fa-clipboard-list"></i> Order View
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </article>
</div>

@endsection
@section('script')
<script>
    $(document).ready(function () {
        $('#trackList').dataTable({
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            order: [
                [0, 'desc']
            ],
            oLanguage: {
                oPaginate: {
                    sFirst: '<small>หน้าแรก</small>',
                    sLast: '<small>หน้าสุดท้าย</small>',
                    sNext: '<small>ถัดไป</small>',
                    sPrevious: '<small>กลับ</small>'
                },
                sSearch: '<small>ค้นหา</small>',
                sInfo: '<small>ทั้งหมด _TOTAL_ รายการ</small>',
                sLengthMenu: '<small>แสดง _MENU_ รายการ</small>',
                sInfoEmpty: '<small>ไม่มีข้อมูล</small>'
            }
        });
    });
</script>
@endsection
