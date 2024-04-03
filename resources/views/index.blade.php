<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kapsel Anime - UAS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
{{--    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">--}}

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.4.1
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="toggle-sidebar">

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Kapita Selecta</h1>
        {{--<nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>--}}
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @foreach($data_total_studio as $item)
                        <div class="col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Studios</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="ps-3">
                                            <h6>{{ $item->studio_total }}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach


                    @foreach($data_status_anime as $item)
                        <div class="col-md-3">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->status }}</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="ps-3">
                                            <h6>{{ $item->total }}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach



                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item filter_rating_all">All</a></li>
                                    @foreach($data_rating as $item)
                                        <li><a class="dropdown-item filter_rating_{{ $item->id }}">{{ $item->rating }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Source by Rating</h5>

                                <!-- Bar Chart -->
                                <div id="barChart"></div>
                                <!-- End Bar Chart -->
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item filter_rate_studio_all">All</a></li>
                                    @foreach($data_studio as $item)
                                        <li><a class="dropdown-item filter_rate_studio_{{ $item->id }}" >{{ $item->studio }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Rating</h5>

                                <!-- Pie Chart -->
                                <div id="pieChartRating"></div>
                                <!-- End Pie Chart -->
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item filter_studio_rating_all" >All</a></li>
                                    @foreach($data_rating as $item)
                                        <li><a class="dropdown-item filter_studio_rating_{{ $item->id }}" >{{ $item->rating }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Studio Members</h5>

                                <!-- Bar Chart -->
                                <div id="barChartStudioMember"></div>
                                <!-- End Bar Chart -->
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item filter_studio_score_rating_all">All</a></li>
                                    @foreach($data_rating as $item)
                                        <li><a class="dropdown-item filter_studio_score_rating_{{ $item->id }}">{{ $item->rating }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Studio Scores</h5>

                                <!-- Bar Chart -->
                                <div id="barChartStudioScore"></div>
                                <!-- End Bar Chart -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- Vendor JS Files -->
<script src="{{ asset('assets/js/jquery-3.6.2.min.js') }}"></script>
<script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>



    $(document).ready(function() {

        function sourceChart(LabelSource, dataSource){

            console.log(dataSource);

            let options = {
                series: [{
                    data: dataSource
                }],
                chart: {
                    type: 'bar',
                    height: 350
                },
                plotOptions: {
                    bar: {
                        borderRadius: 4,
                        horizontal: true,
                    }
                },
                dataLabels: {
                    enabled: false
                },
                xaxis: {
                    categories: LabelSource,
                }
            }

            const chart = new ApexCharts(document.querySelector("#barChart"), options);

            chart.render();
        }
        function loadSource() {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'GET',
                dataType: 'json',
                url: 'dataSource',
                success: function (response) {
                    let labels = response.data.map(function (e) {
                        return e.source
                    })

                    let data = response.data.map(function (e) {
                        return e.total
                    })

                    sourceChart(labels, data)
                }
            });
        }
        loadSource()
        function loadSourceByRating($input) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'GET',
                data: {
                    'rating': $input,
                },
                dataType: 'json',
                url: 'getDataSource',
                success: function (response) {
                    let labels = response.data.map(function (e) {
                        return e.source
                    })

                    let data = response.data.map(function (e) {
                        return e.total
                    })
                    $('#barChart').empty();
                    sourceChart(labels, data)
                }, error: function (response) {
                    alert('error');
                }
            });
        }


        function loadRatingPie(LabelSource, dataSource){
            let options = {
                series: dataSource,
                chart: {
                    height: 350,
                    type: 'pie',
                    toolbar: {
                        show: true
                    }
                },
                labels: LabelSource
            }
            const chart = new ApexCharts(document.querySelector("#pieChartRating"), options);
            chart.render();
        }
        function loadDataRating(){
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'GET',
                dataType: 'json',
                url: 'getRatingAll',
                success: function (response) {
                    let labels = response.data.map(function (e) {
                        return e.rating
                    })

                    let data = response.data.map(function (e) {
                        return e.total
                    })

                    loadRatingPie(labels, data)
                }
            });
        }
        loadDataRating()
        function loadDataRatingByStudio($input) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'GET',
                data: {
                    'studio': $input,
                },
                dataType: 'json',
                url: 'getRatingByStudio',
                success: function (response) {
                    let labels = response.data.map(function (e) {
                        return e.rating
                    })

                    let data = response.data.map(function (e) {
                        return e.total
                    })
                    $('#pieChartRating').empty();
                    loadRatingPie(labels, data)
                }
            });
        }
        @foreach($data_studio as $item)
        $(document).on('click', '.filter_rate_studio_{!! $item->id !!}', function(){
            loadDataRatingByStudio("{!! $item->studio !!}");
        });
        @endforeach
        $(document).on('click', '.filter_rate_studio_all', function(){
            loadDataRatingByStudio('');
        });



        function studioMemberChart(LabelSource, dataSource){
            let options = {
                series: [{
                    data: dataSource
                }],
                chart: {
                    type: 'bar',
                    height: 800
                },
                plotOptions: {
                    bar: {
                        borderRadius: 4,
                        horizontal: true,
                    }
                },
                dataLabels: {
                    enabled: false
                },
                xaxis: {
                    categories: LabelSource,
                }
            }

            const chart = new ApexCharts(document.querySelector("#barChartStudioMember"), options);

            chart.render();
        }
        function loadStudioMemberChart() {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'GET',
                dataType: 'json',
                url: 'getStudioMember',
                success: function (response) {
                    let labels = response.data.map(function (e) {
                        return e.studios
                    })

                    let data = response.data.map(function (e) {
                        return e.members
                    })

                    studioMemberChart(labels, data)
                }
            });
        }
        loadStudioMemberChart()
        function loadStudioMemberByRating($input) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'GET',
                data: {
                    'data': $input,
                },
                dataType: 'json',
                url: 'getStudioMemberByRating',
                success: function (response) {
                    let labels = response.data.map(function (e) {
                        return e.studios
                    })

                    let data = response.data.map(function (e) {
                        return e.members
                    })
                    $('#barChartStudioMember').empty();
                    studioMemberChart(labels, data)
                }
            });
        }


        function studioScoreChart(LabelSource, dataSource){
            let options = {
                series: [{
                    data: dataSource
                }],
                chart: {
                    type: 'bar',
                    height: 800
                },
                plotOptions: {
                    bar: {
                        borderRadius: 4,
                        horizontal: true,
                    }
                },
                dataLabels: {
                    enabled: false
                },
                xaxis: {
                    categories: LabelSource,
                }
            }

            const chart = new ApexCharts(document.querySelector("#barChartStudioScore"), options);

            chart.render();
        }
        function loadStudioScoreChart() {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'GET',
                dataType: 'json',
                url: 'studioScore',
                success: function (response) {
                    let labels = response.data.map(function (e) {
                        return e.studios
                    })

                    let data = response.data.map(function (e) {
                        return e.scores
                    })

                    studioScoreChart(labels, data)
                }
            });
        }
        loadStudioScoreChart()
        function loadStudioScoreByRating($input) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'GET',
                data: {
                    'data': $input,
                },
                dataType: 'json',
                url: 'studioScoreByRating',
                success: function (response) {
                    let labels = response.data.map(function (e) {
                        return e.studios
                    })

                    let data = response.data.map(function (e) {
                        return e.scores
                    })
                    $('#barChartStudioScore').empty();
                    studioScoreChart(labels, data)
                }
            });
        }



        @foreach($data_rating as $item)
        $(document).on('click', '.filter_rating_{!! $item->id !!}', function(){
            loadSourceByRating('{!! $item->rating !!}');
        });
        $(document).on('click', '.filter_studio_rating_{!! $item->id !!}', function(){
            loadStudioMemberByRating('{!! $item->rating !!}');
        });
        $(document).on('click', '.filter_studio_score_rating_{!! $item->id !!}', function(){
            loadStudioScoreByRating('{!! $item->rating !!}');
        });
        @endforeach
        $(document).on('click', '.filter_rating_all', function(){
            loadSourceByRating('');
        });
        $(document).on('click', '.filter_studio_rating_all', function(){
            loadStudioMemberByRating('');
        });
        $(document).on('click', '.filter_studio_score_rating_all', function(){
            loadStudioScoreByRating('');
        });

    });

</script>

</body>

</html>
