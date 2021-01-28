<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://office.watchanhospital.com/assets/img/logo.png" width="40" height="30"
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
                <li class="nav-item dropdown {{ (request()->is('tracking')) ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ระบบบริหารจัดการเวชระเบียนผู้ป่วยใน
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/tracking/create_orderslist"><i class="fas fa-folder-plus"></i> สร้าง Orders List</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-file-export"></i> ยืมเวชระเบียนผู้ป่วยใน</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-database"></i> คลังเวชระเบียนผู้ป่วยใน</a>
                        <a class="dropdown-item" href="/tracking"><i class="fas fa-paper-plane"></i> ติดตามเวชระเบียนผู้ป่วยใน</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="ระบุหมายเลข Orders ID" style="font-size: 11px;" size="30" required>
                <button class="btn btn-success btn-sm my-2 my-sm-0" type="submit"><i class="fa fa-search"></i> ค้นหาเวชระเบียน</button>
            </form>
        </div>
    </div>
</nav>
