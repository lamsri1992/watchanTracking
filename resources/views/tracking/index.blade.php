@extends('layouts.app')
@section('title',"WATCHAN CHART MANAGEMENT :: ระบบบริหารจัดการเวชระเบียนผู้ป่วยใน รพช.วัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา")
@section('content')

<div class="container-fluid">
    <article class="card">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><i class="far fa-folder"></i> เวชระเบียนผู้ป่วยใน</li>
            </ol>
        </nav>
        <div class="card-body">
            <div class="container-fluid">
                <table id="trackList" class="table table-striped table-borderless table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">Orders ID</th>
                            <th class="text-center">Orders Case</th>
                            <th class="text-center"><i class="far fa-calendar-plus"></i> วันที่สร้าง</th>
                            <th class="text-center">สถานะ</th>
                            <th class="text-center">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-center">WCC237360001</th>
                            <td class="text-center"><span class="badge badge-danger" style="font-size: 14px;">3 เคส</span></td>
                            <td class="text-center">2021-01-27</td>
                            <td class="text-center text-secondary"><i class="fa fa-spinner fa-spin"></i> กำลังดำเนินการ</td>
                            <td class="text-center"><a href="/tracking/1" class="badge badge-success" style="font-size: 14px;"><i class="fa fa-paper-plane"></i> ติดตามเวชระเบียน</a></td>
                        </tr>
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
