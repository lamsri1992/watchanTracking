@extends('layouts.app')
@section('title',"WATCHAN CHART MANAGEMENT :: ระบบบริหารจัดการเวชระเบียนผู้ป่วยใน รพช.วัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา")
@section('content')

<div class="container-fluid">
    <article class="card">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="/tracking"> <i class="fa fa-map-marked-alt"></i> ระบบติดตามเวชระเบียนผู้ป่วยใน</a></li>
                <li class="breadcrumb-item active" aria-current="page">WCC23736{{ str_pad($order->track_id, 4, '0', STR_PAD_LEFT) }} </li>
            </ol>
        </nav>
        <div class="card-body">
            <article class="card">
                <div class="card-body row">
                    <div class="col-3">
                        <div class="text-center">
                            <strong><i class="far fa-folder-open"></i> TRACK_ID : </strong>
                            <span class="btn btn-secondary btn-sm">WCC23736{{ str_pad($order->track_id, 4, '0', STR_PAD_LEFT) }} </span>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="text-center">
                            <strong><i class="fas fa-list-ol"></i> CASE : </strong>
                            <span class="btn btn-info btn-sm"> 
                                จำนวน <span class="badge badge-light">{{ $order->track_case }} เคส</span>
                            </span>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="text-center">
                            <strong><i class="far fa-calendar"></i> DATE CREATE : </strong>
                            <span>{{ $order->create_at }}</span>
                        </div>
                    </div>
                    <div class="col-3"> 
                        <div class="text-center">
                            <span class="{{ $order->t_stat_color }}"> 
                                @php echo $order->t_stat_text @endphp
                            </span>
                        </div>
                    </div>
                </div>
            </article>
            <div class="track">
                <div class="step active"> 
                    <span class="icon" data-toggle="tooltip" data-placement="top" title="งานผู้ป่วยในดำเนินการ Discharge"><i class="fa fa-external-link-alt"></i></span> 
                    <span class="text"><i class="fa fa-check text-success"></i> IPD Discharge</span>
                </div>
                <div class="step"> 
                    <span class="icon" data-toggle="tooltip" data-placement="top" title="งานเภสัชกรรมตรวจสอบเวชระเบียนผู้ป่วยใน + พิมพ์ใบ 16 รายการ"><i class="fa fa-notes-medical"></i></span>
                    <span class="text">งานเภสัชกรรม</span> 
                </div>
                <div class="step">
                    <span class="icon" data-toggle="tooltip" data-placement="top" title="กลุ่มการแพทย์ตรวจสอบเวชระเบียนผู้ป่วยใน"><i class="fa fa-user-md"></i></span>
                    <span class="text">กลุ่มการแพทย์</span>
                    <small>แพทย์เจ้าของเคส</small>
                </div>
                <div class="step">
                    <span class="icon" data-toggle="tooltip" data-placement="top" title="ตรวจสอบ + สแกนเวชระเบียนเก็บในระบบ"><i class="fa fa-clipboard-check"></i></span>
                    <span class="text">งานเวชระเบียน</span>
                    <small>วนิดา พิทยาการนุรัตน์</small>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <h6><i class="fa fa-clipboard-list"></i> รายการเวชระเบียนผู้ป่วยใน</h6>
            <table class="table table-striped table-borderless table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">เลข VN</th>
                        <th class="text-center"><i class="fas fa-id-card"></i> เลข HN</th>
                        <th><i class="fas fa-user-md"></i> แพทย์</th>
                        <th class="text-center"><i class="far fa-clock"></i> วันที่/เวลา Admit</th>
                        <th class="text-center">สถานะ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $lists)
                    <tr>
                        <th class="text-center">{{ $lists->list_vn }}</th>
                        <td class="text-center">{{ $lists->list_hn }}</td>
                        <td>{{ $lists->list_doctor }}</td>
                        <td class="text-center">{{ $lists->list_discharge }}</td>
                        <td class="text-center {{ $lists->t_stat_color }}">@php echo $lists->t_stat_text @endphp</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </article>
</div>

@endsection
@section('script')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
