@extends('layouts.app')
@section('title',"WATCHAN CHART MANAGEMENT :: ระบบบริหารจัดการเวชระเบียนผู้ป่วยใน รพช.วัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา")
@section('content')

<div class="container-fluid">
    <article class="card">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-map-marked-alt"></i> ระบบติดตามเวชระเบียนผู้ป่วยใน</li>
            </ol>
        </nav>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row" style="margin-bottom: 1rem;">
                    <div class="col-6">
                        <h2>รายการเวชระเบียนผู้ป่วยในทั้งหมด</h2>
                    </div>
                    <div class="col-6 text-right">
                        <a href="/tracking/createOrderList" class="btn btn-danger"><i class="fa fa-plus-circle"></i> สร้างรายการใหม่</a>
                    </div>
                </div>
                <table id="trackList" class="table table-striped table-borderless table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">จำนวน</th>
                            <th class="text-center"><i class="far fa-calendar-plus"></i> วันที่สร้าง</th>
                            <th class="text-center">สถานะ</th>
                            <th class="text-center">ตัวเลือก</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $order)
                        <tr>
                            <th class="text-center">WCC23736{{ str_pad($order->track_id, 4, '0', STR_PAD_LEFT) }}</th>
                            <td class="text-center"><span class="badge badge-danger" style="font-size: 14px;">{{ $order->track_case }} เคส</span></td>
                            <td class="text-center">{{ $order->create_at }}</td>
                            <td class="text-center {{ $order->t_stat_color }}">@php echo $order->t_stat_text @endphp</td>
                            <td class="text-center">
                                <a href="{{ route('tracking.show',base64_encode($order->track_id)) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-search"></i> ติดตามเวชระเบียน
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
                [0, 'asc']
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
