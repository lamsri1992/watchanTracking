@extends('layouts.app')
@section('title',"WATCHAN CHART MANAGEMENT :: ระบบบริหารจัดการเวชระเบียนผู้ป่วยใน รพช.วัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา")
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center"><i class="fa fa-tachometer-alt"></i> Dashboard : แสดงผลสรุปข้อมูลในรูปแบบแผนภูมิภาพ</h1>
            <div class="col-md-12">
                <iframe src="https://www.chartjs.org/samples/latest/scriptable/bar.html" frameborder="0" width="100%" height="500px"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script>

</script>
@endsection
