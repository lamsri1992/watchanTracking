@extends('layouts.app')
@section('title',"WATCHAN CHART MANAGEMENT :: ระบบบริหารจัดการเวชระเบียนผู้ป่วยใน รพช.วัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา")
@section('content')

<div class="container-fluid">
    <article class="card">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-briefcase-medical"></i> สร้าง Orders แพทย์</li>
            </ol>
        </nav>
        <div class="card-body">
            <div class="container-fluid">
                <table id="visitList" class="display nowrap table" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">หมายเลข VN</th>
                            <th class="text-center"><i class="far fa-calendar-check"></i> วันที่ Admit</th>
                            <th class="text-center">หมายเลข HN</th>
                            <th class=""><i class="fas fa-user-md"></i> แพทย์ผู้ตรวจ</th>
                            <th class="text-center"><i class="fa fa-bed"></i> เตียง/ห้อง</th>
                            <th class="text-center"><i class="fa fa-plus-circle"></i>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
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
            url: "/api/drug_list",
            dataSrc: ""
        },
        columns: [
            { 'data': 'visit_vn', className: "text-center" },
            { 'data': 'visit_begin_admit_date_time', className: "text-center" },
            { 'data': 'visit_hn', className: "text-center" },
            { 'data': 'doctor',
                render: function (data, type, row, meta) {
                return row.employee_firstname + ' ' + row.employee_lastname
            }
            },
            { 'data': 'visit_bed', className: "text-center" },
            { 'targets': -1, 'data': null, className: "text-center",
                'defaultContent': '<button class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i> Orders</button>'}
        ],
        order: [[0, 'asc']],
        lengthMenu: [
            [10, 50, 100, -1],
            [10, 50, 100, "All"]
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

    $('#visitList tbody').on('click', 'button', function () {
        var formData = table.row( $(this).parents('tr') ).data();
        var token = "{{ csrf_token() }}";
        // console.log(formData);
        // console.log(token);
        event.preventDefault();
        Swal.fire({
            title: 'ยืนยันการสร้าง Drug Order ?',
            text: 'โปรดตรวจสอบรายการ ก่อนสร้างรายการใหม่ทุกครั้ง',
            showCancelButton: true,
            confirmButtonText: `สร้างรายการ`,
            cancelButtonText: `ยกเลิก`,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"{{ route('drug.createOrder')}}",
                    method:'POST',
                    data:{formData: formData,_token: token},
                    success:function(data){
                        Swal.fire({
                            icon: 'success',
                            title: 'สร้างรายการสำเร็จ',
                            showConfirmButton: false,
                            timer: 3000
                        })
                        window.setTimeout(function () {
                                location.replace('/drugOrder/')
                        }, 1500);
                    }
                });
            }
        })
    });
});
</script>
@endsection
