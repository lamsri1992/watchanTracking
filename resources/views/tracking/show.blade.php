@extends('layouts.app')
@section('title',"WATCHAN CHART MANAGEMENT :: ระบบบริหารจัดการเวชระเบียนผู้ป่วยใน รพช.วัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา")
@section('content')

<div class="container-fluid">
    <article class="card">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/tracking"><i class="far fa-folder"></i> เวชระเบียนผู้ป่วยใน</a></li>
                <li class="breadcrumb-item active" aria-current="page">WCC237360001 </li>
            </ol>
        </nav>
        <div class="card-body">
            <article class="card">
                <div class="card-body row">
                    <div class="col-3">
                        <div class="text-center">
                            <strong><i class="far fa-folder-open"></i> Orders ID : </strong>
                            <span class="btn btn-secondary btn-sm">WCC237360001</span>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="text-center">
                            <strong><i class="fas fa-list-ol"></i> Orders Case : </strong>
                            <span class="btn btn-info btn-sm"> 
                                จำนวน <span class="badge badge-light">3 เคส</span>
                            </span>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="text-center">
                            <strong><i class="far fa-calendar"></i> Orders Date : </strong>
                            <span>2021-01-27</span>
                        </div>
                    </div>
                    <div class="col-3"> 
                        <div class="text-center">
                            <strong>สถานะ : </strong>
                            <span class="btn btn-danger btn-sm"> 
                                <i class="fa fa-tasks"></i> อยู่ในกระบวนการ
                            </span>
                        </div>
                    </div>
                </div>
            </article>
            <div class="track">
                <div class="step active"> 
                    <span class="icon" data-toggle="tooltip" data-placement="top" title="งานผู้ป่วยในดำเนินการ Discharge แล้ว"><i class="fa fa-external-link-alt"></i></span> 
                    <span class="text"><i class="fa fa-check text-success"></i> IPD Discharge</span>
                </div>
                <div class="step active"> 
                    <span class="icon" data-toggle="tooltip" data-placement="top" title="งานเภสัชกรรมตรวจสอบ + พิมพ์ใบ 16 รายการแล้ว"><i class="fa fa-notes-medical"></i></span>
                    <span class="text"><i class="fa fa-check text-success"></i> งานเภสัชกรรม</span> 
                </div>
                <div class="step active"> 
                    <span class="icon" data-toggle="tooltip" data-placement="top" title="งานศูนย์ข้อมูลคัดแยกเวชระเบียนผู้ป่วยในตามแพทย์แล้ว"><i class="fa fa-database"></i></span>
                    <span class="text">งานศูนย์ข้อมูล</span> 
                    <small><i class="fa fa-check text-success"></i> เกียรติศักดิ์ เด่นแสงจันทร์</small>
                </div>
                <div class="step">
                    <span class="icon" data-toggle="tooltip" data-placement="top" title="กลุ่มการแพทย์กำลังดำเนินการ"><i class="fa fa-user-md"></i></span>
                    <span class="text"><i class="far fa-clock text-danger"></i> กลุ่มการแพทย์</span>
                    <small><i class="fa fa-check text-success"></i> นัฐยา กิติกูล</small><br>
                    <small><i class="fa fa-check text-success"></i> ประจินต์ เหล่าเที่ยง</small><br>
                    <small class="text-secondary"><i class="fa fa-spinner fa-spin"></i> ชาติชาย เชวงชุติรัตน์</small><br>
                </div>
                <div class="step">
                    <span class="icon" data-toggle="tooltip" data-placement="top" title="รอดำเนินการ"><i class="fa fa-clipboard-check"></i></span>
                    <span class="text"><i class="far fa-clock text-danger"></i> งานเวชระเบียน</span>
                    <small>วนิดา พิทยาการนุรัตน์</small>
                </div>
            </div>
        </div><br>
        <div class="container-fluid">
            <h6><i class="fa fa-sync-alt"></i> กระบวนการการทำงาน</h6>
            <table class="table table-striped table-borderless table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th><i class="fas fa-map-marker-alt"></i> หน่วยบริการ</th>
                        <th><i class="fas fa-search"></i> รายละเอียด</th>
                        <th class="text-center"><i class="far fa-clock"></i> วันที่/เวลา</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center">1</th>
                        <td>IPD Discharge</td>
                        <td>Discharge คนไข้หอผู้ป่วยใน จำนวน 3 เคส</td>
                        <td class="text-center">2021-01-27 08:30:00</td>
                    </tr>
                    <tr>
                        <th class="text-center">2</th>
                        <td>งานเภสัชกรรม</td>
                        <td>ตรวจสอบและพิมพ์ใบ 16 รายการเสร็จสิ้น</td>
                        <td class="text-center">2021-01-27 09:30:00</td>
                    </tr>
                    <tr>
                        <th class="text-center">3</th>
                        <td>งานศูนย์ข้อมูล</td>
                        <td>คัดแยกเวชระเบียนผู้ป่วยใน ตามแพทย์ผู้ตรวจ และดำเนินการจำหน่ายแล้ว</td>
                        <td class="text-center">2021-01-27 09:45:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container-fluid">
            <h6><i class="fa fa-clipboard-list"></i> Orders List</h6>
            <table class="table table-striped table-borderless table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">VN/AN</th>
                        <th class="text-center"><i class="fas fa-id-card"></i> HN</th>
                        <th><i class="fas fa-user-injured"></i> ผู้ป่วย</th>
                        <th><i class="fas fa-user-md"></i> แพทย์</th>
                        <th class="text-center"><i class="far fa-clock"></i> วันที่/เวลา Admit</th>
                        <th class="text-center">สถานะ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center">164001</th>
                        <td class="text-center">000000121</td>
                        <td>นายปีเตอร์ ตาโต</td>
                        <td>นัฐยา กิติกูล</td>
                        <td class="text-center">2021-01-27 08:30:00</td>
                        <td class="text-center text-success"><i class="fas fa-check"></i> เสร็จสิ้น</td>
                    </tr>
                    <tr>
                        <th class="text-center">164002</th>
                        <td class="text-center">000000122</td>
                        <td>นางสาวคริส หอพระ</td>
                        <td>ประจินต์ เหล่าเที่ยง</td>
                        <td class="text-center">2021-01-27 09:30:00</td>
                        <td class="text-center text-success"><i class="fas fa-check"></i> เสร็จสิ้น</td>
                    </tr>
                    <tr>
                        <th class="text-center">164003</th>
                        <td class="text-center">000000123</td>
                        <td>เด็กชายหม่อง ถ้วยทอง</td>
                        <td>ชาติชาย เชวงชุติรัตน์</td>
                        <td class="text-center">2021-01-27 09:45:00</td>
                        <td class="text-center text-danger"><i class="fas fa-spinner fa-spin"></i> รอดำเนินการ</td>
                    </tr>
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
