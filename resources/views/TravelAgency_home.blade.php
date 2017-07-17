@extends('layouts.headlogo') @section('title', 'Home') @section('content')
<div class="container">
    <form action="/addtripround" method="POST">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="col-lg-12">
                    <h2 class="page-header">HELLO {{$trips[0]->agency_name_en}} !!!!</h2>
                </div>
                <div class="col-md-6">
                    {{$trips[0]->agency_description}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h3>OUR TRIP
                            <div class="btn-group" align="right">
                                <a href="#" id="list" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-th-list"></span>List</a>
                                <a href="#" id="grid" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-th"></span>Grid</a>
                            </div>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="products" class="row list-group">
                 @foreach ($trips as $trip)
                <div class="item  col-xs-4 col-lg-4">
               
                    <div class="thumbnail">
                        <!--<a href="portfolio-item.html">
                            <img class="img-responsive img-portfolio img-hover" src="{{ asset( $trip->trip_pic ) }}" >
                        </a>-->
                        <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                {{$trip->trips_name}}</h4>
                            <div class="panel-body">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span> 40% BOOKING
                                    </div>
                                </div>
                                <!-- Table -->
                                <table class="table">
                                    <tr>
                                        <td>{{$trip->start_date}} - {{$trip->departure_date}}</td>
                                    </tr>
                                    <tr>
                                        <td>NUMBER OF ADULT</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>TOTAL</td>
                                        <td>100</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endforeach
<!-- Marketing Icons Section -->

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                COMMENTION
            </h1>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="glyphicon glyphicon-pencil"></i>TRIP </h4>
                </div>
                <div class="panel-body">
                    <p>
                        <div class="alert alert-success" role="alert">
                            Well done! You have n new COMMENTION .
                        </div>
                    </p>
                    <a href="comment_TRIP.html" class="btn btn-default">SHOW NOW</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="glyphicon glyphicon-pencil"></i>COMPANY </h4>
                </div>
                <div class="panel-body">
                    <p>
                        <div class="alert alert-success" role="alert">
                            Well done! You have n new COMMENTION .
                        </div>
                    </p>
                    <a href="comment_TRIP.html" class="btn btn-default">SHOW NOW</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    $(document).ready(function () {
        $('#list').click(function (event) {
            event.preventDefault();
            $('#products .item').addClass('list-group-item');
        });
        $('#grid').click(function (event) {
            event.preventDefault();
            $('#products .item').removeClass('list-group-item');
            $('#products .item').addClass('grid-group-item');
        });
    });
</script>
@endsection
</body>

</html>