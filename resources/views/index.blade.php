@include('layouts.header');
@include('layouts.sidebar');
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Administrador</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
        <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

                <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                    <li><a class="dropdown-item" href="#">Este Mes</a></li>
                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                </ul>
                </div>

                <div class="card-body">
                <h5 class="card-title">Trabalhos <span>| Hoje</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class='bx bx-paste'></i>
                    </div>
                    <div class="ps-3">
                    <h6>145</h6>
                    <span class="text-muted small pt-2 ps-1">registados</span>

                    </div>
                </div>
                </div>

            </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

                <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                    <li><a class="dropdown-item" href="#">Este Mes</a></li>
                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                </ul>
                </div>

                <div class="card-body">
                <h5 class="card-title">Temas <span>| Este Mes</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class='bx bx-user-pin'></i>
                    </div>
                    <div class="ps-3">
                    <h6>364</h6>
                    </span> <span class="text-muted small pt-2 ps-1">em uso</span>

                    </div>
                </div>
                </div>

            </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

                <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                    <li><a class="dropdown-item" href="#">Este Mes</a></li>
                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                </ul>
                </div>

                <div class="card-body">
                <h5 class="card-title">Estudantes <span>| Este Ano</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                    <h6>1244</h6>
                    <span class="text-muted small pt-2 ps-1">alunos</span>

                    </div>
                </div>

                </div>
            </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
            <div class="card">

                <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                    <li><a class="dropdown-item" href="#">Este Mes</a></li>
                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                </ul>
                </div>
                

            </div>
            </div><!-- End Reports -->


        </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

        <!-- Recent Activity -->
        <div class="card">
            <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Hoje</a></li>
                <li><a class="dropdown-item" href="#">Este Mes</a></li>
                <li><a class="dropdown-item" href="#">Este Ano</a></li>
            </ul>
            </div>

            <div class="card-body">
            <h5 class="card-title">Actividades Recentes <span>| Hoje</span></h5>

            <div class="activity">

                <div class="activity-item d-flex">
                <div class="activite-label">32 min</div>
                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                <div class="activity-content">
                    Registro de Aluno <a href="#" class="fw-bold text-dark">em espera</a>
                </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                <div class="activite-label">56 min</div>
                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                <div class="activity-content">
                    Registro de Docente
                </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                <div class="activite-label">2 hrs</div>
                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                <div class="activity-content">
                    Registro de Tema
                </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                <div class="activite-label">1 dia</div>
                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                <div class="activity-content">
                    Atribuição de tema <a href="#" class="fw-bold text-dark">ao Aluno João</a> em espera
                </div>
                </div><!-- End activity item-->

            </div>

            </div>
        </div><!-- End Recent Activity -->

        <!-- Website Traffic -->
        <div class="card">
            <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Hoje</a></li>
                <li><a class="dropdown-item" href="#">Este Mes</a></li>
                <li><a class="dropdown-item" href="#">Este Ano</a></li>
            </ul>
            </div>

            <div class="card-body pb-0">
            <h5 class="card-title">Situação de trabalhos <span>| Hoje</span></h5>

            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

            <script>
                document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                    trigger: 'item'
                    },
                    legend: {
                    top: '5%',
                    left: 'center'
                    },
                    series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                        }
                    },
                    labelLine: {
                        show: false
                    },
                    data: [{
                        value: 1048,
                        name: 'Em curso'
                        },
                        {
                        value: 735,
                        name: 'Aprovados'
                        },
                        {
                        value: 580,
                        name: 'Em Espera'
                        },
                        {
                        value: 484,
                        name: 'Rejeidados'
                        },
                        {
                        value: 300,
                        name: 'Feitos'
                        }
                    ]
                    }]
                });
                });
            </script>

            </div>
        </div><!-- End Website Traffic -->

        </div><!-- End Right side columns -->

    </div>
    </section>

</main><!-- End #main -->
@include('layouts.footer');