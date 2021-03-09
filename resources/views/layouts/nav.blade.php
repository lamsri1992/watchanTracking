<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://dis.watchanhospital.com/assets/img/logo.png" width="40" height="30"
                class="d-inline-block align-top">
            <small> โรงพยาบาลวัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา</small>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                    <a class="nav-link" href="/"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li class="nav-item {{ (request()->is('drugOrder')) ? 'active' : '' }}">
                    <a class="nav-link" href="/drugOrder"><i class="fa fa-notes-medical"></i> รายการสั่งยาผู้ป่วยใน</a>
                </li>
                <li class="nav-item {{ (request()->is('tracking')) ? 'active' : '' }}">
                    <a class="nav-link" href="/tracking"><i class="fa fa-map-marked-alt"></i> ระบบติดตามเวชระเบียนผู้ป่วยใน</a>
                </li>
                {{-- <li class="nav-item dropdown {{ (request()->is('tracking')) ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ระบบบริหารจัดการเวชระเบียนผู้ป่วยใน
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/store"><i class="fas fa-database"></i> คลังเวชระเบียนผู้ป่วยใน</a>
                        <a class="dropdown-item" href="/tracking"><i class="fas fa-map-marker-alt"></i> ติดตามเวชระเบียนผู้ป่วยใน</a>
                    </div>
                </li> --}}
                {{-- <li class="nav-item dropdown {{ (request()->is('admin')) ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ระบบจัดการ Order
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/drugOrder/createDrugOrder"><i class="fas fa-briefcase-medical"></i> สร้าง Orders แพทย์</a>
                        <a class="dropdown-item" href="/tracking/createOrderList"><i class="fas fa-folder-plus"></i> สร้าง Orders List</a>
                        <a class="dropdown-item" href="/drugOrder"><i class="fas fa-comment-medical"></i> Drug IPD Order</a>
                    </div>
                </li> --}}
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="ระบุหมายเลข VN" style="font-size: 11px;" size="20" required>
                <button class="btn btn-success btn-sm my-2 my-sm-0" type="submit"><i class="fa fa-search"></i> ค้นหา</button>
            </form>
        </div>
    </div>
</nav>
