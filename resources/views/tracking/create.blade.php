@extends('layouts.app')
@section('title',"WATCHAN CHART MANAGEMENT :: ระบบบริหารจัดการเวชระเบียนผู้ป่วยใน รพช.วัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา")
@section('content')

<div class="container-fluid">
    <article class="card">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-folder-plus"></i> สร้าง Orders List ใหม่</li>
            </ol>
        </nav>
        <div class="card-body">
            <div class="container-fluid">
                <table id="visitList" class="display nowrap table" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th></th>
                            <th class="text-center">VN</th>
                            <th class="text-center">HN</th>
                            <th class="">รหัสแพทย์</th>
                            <th class=""><i class="fas fa-user-md"></i> แพทย์ผู้ตรวจ</th>
                            <th class="text-center">สถานะ</th>
                            <th class="text-center"><i class="far fa-calendar-check"></i> วันที่ Discharge</th>
                        </tr>
                    </thead>
                </table>
                <div class="container-fluid">
                    <button id="btnSubmit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </article>
</div>

@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        var table = $('#visitList').DataTable( {
        ajax: {
            url: "/api/discharge_list",
            dataSrc: ""
        },
        columns: [
            { 'data': 'visit_vn', className: "text-center" },
            { 'data': 'visit_vn', className: "text-center" },
            { 'data': 'visit_hn', className: "text-center" },
            { 'data': 'visit_patient_self_doctor' },
            { 'data': 'doctor',
                render: function (data, type, row, meta) {
                return row.employee_firstname + ' ' + row.employee_lastname
            }
            },
            { 'data': 'visit_bed', className: "text-center" },
            { 'data': 'visit_ipd_discharge_date_time', className: "text-center" },
        ],
        columnDefs: [
            {
                'targets': 0,
                'checkboxes': {
                'selectRow': true
                }
            }
        ],
        select: {
            'style': 'multiple'
        },
        language: {
            select: {
                rows: {
                    _: "<small class='text-danger'>เลือกแล้ว %d รายการ</small>",
                }
            }
        },
        order: [[1, 'asc']],
        lengthMenu: [
            [20, 50, 100, -1],
            [20, 50, 100, "All"]
        ],
        responsive: true,
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        oLanguage: {
            oPaginate: {
                sFirst: '<small>หน้าแรก</small>',
                sLast: '<small>หน้าสุดท้าย</small>',
                sNext: '<small>ถัดไป</small>',
                sPrevious: '<small>กลับ</small>'
            },
            sInfo: "<small>ทั้งหมด _TOTAL_ รายการ</small>",
            sLengthMenu: "<small>แสดง _MENU_ รายการ</small>",
            sSearch: "<i class='fa fa-search'></i> ค้นหา : ",
        }
    });

    $('#btnSubmit').click( function () {
        var array = [];
        table.rows('.selected').every(function(rowIdx) {
            array.push(table.row(rowIdx).data())
        })   
        console.log(array);
    });
});
</script>
@endsection