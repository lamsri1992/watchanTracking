@extends('layouts.app')
@section('title',"WATCHAN CHART MANAGEMENT :: ระบบบริหารจัดการเวชระเบียนผู้ป่วยใน รพช.วัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา")
@section('content')

<div class="container-fluid">
    <article class="card">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/drugOrder"><i class="fas fa-notes-medical"></i> รายการแพทย์สั่งยา</li></a>
                <li class="breadcrumb-item active" aria-current="page">VN {{ $list->drug_vn }} </li>
            </ol>
        </nav>
        <div class="card-body">
            <div class="container-fluid">
               
            </div>
        </div>
    </article>
</div>

@endsection
@section('script')
<script>
   
</script>
@endsection
