@extends('layouts.headlogo') 
@section('title', 'add trip')
 @section('content')
<div class="container">
    <header2>
        <h2>Add Trip</h2>
    </header2>
    <div class="row">
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                        <span class="round-tab"><i class="glyphicon glyphicon-folder-open"></i>
                        </span>
                    </a>
                    </li>
                    <li role="presentation">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                        <span class="round-tab">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </span>
                    </a>
                    </li>
                    <li role="presentation">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                        <span class="round-tab">
                            <i class="glyphicon glyphicon-picture"></i>
                        </span>
                    </a>
                    </li>
                    <li role="presentation">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                    </a>
                    </li>
                </ul>
            </div>
            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3><strong>Step 1 </strong> - Basic Information</h3>
                        <div class="step1">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Trip Name</label>
                                    <input type="text" class="form-control" id="tripName" placeholder="Trip Name">
                                </div>
                                <div class="col-md-2">
                                    <label for="exampleInputEmail1">Day(s)</label>
                                    <input type="text" class="form-control" id="tripDay" placeholder="Day(s)">
                                </div>
                                <div class="col-md-2">
                                    <label for="exampleInputEmail1">Night(s)</label>
                                    <input type="text" class="form-control" id="tripNight" placeholder="Night(s)">
                                </div>
                                <div class="col-md-2">
                                    <label for="exampleInputEmail1">Meal(s)</label>
                                    <input type="text" class="form-control" id="tripMeal" placeholder="Meal(s)">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea rows="5" cols="10" class="form-control" name="trip_description" required data-validation-required-message="Please enter your description"
                                        maxlength="999" style="resize:none"></textarea>
                                </div>
                                <div class="col-lg-3">
                                    <label for="exampleInputEmail1">Source Station</label>
                                    <input type="textarea" class="form-control" id="tripDes" placeholder="สถานีต้นทาง">
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleInputEmail1">Province</label>
                                    <input type="text" class="form-control" id="tripPro" placeholder="จังหวัด">
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleInputEmail1">Destination Station</label>
                                    <input type="text" class="form-control" id="tripPro" placeholder="สถานีปลายทาง">
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleInputEmail1">Province</label>
                                    <input type="text" class="form-control" id="tripPro" placeholder="จังหวัด">
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3><strong>Step 2 </strong> - Round Information</h3>
                        <div class="step2">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>start_day</label>
                                    <input class="form-control start_day" name="start_date" type="date" value='' required data-validation-required-message="Please enter your ROUND TRIP">
                                </div>
                                <div class="col-md-3">
                                    <label>Departure_Date :</label>
                                    <input class="form-control Departure_Date" type="date" value='' required data-validation-required-message="Please enter your ROUND TRIP">
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <label>Price_Children : </label>
                                    <input type="number" class="form-control" name="Price_Children">
                                </div>
                                <div class="col-md-3">
                                    <label>Price_ADUIT : </label>
                                    <input type="number" class="form-control" name="Price_ADUIT" required data-validation-required-message="Please enter Price_ADUIT ">
                                </div>
                            </div>
                            
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Step 3 - Activity information</h3>
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label>รายละเอียดทัวร์ : </label>
                                        <br>
                                        <label>DAY <input type="number"> :</label>
                                    </div>
                                    <div class="control-group form-group con" id='controls'>
                                        <!--for Add Activity-->
                                    </div>
                                    <div class="control-group form-group con" id='controlss'>
                                        <!--for Add Activity-->
                                    </div>
                                    <script type="text/javascript">
                                        let i = 0;
                                        let components = [];
                                        const button =
                                            `<label><button type="button" class="btn btn-primary" id='btn' >ADD Activity</button></label>`;
                                        const componentTemplate = (id1) =>
                                            `<div class="controls" id='${id1}'>
                                                            <table class="table">
                                                                <tr>
                                                                    <td>TIME</td>
                                                                    <td>LOCATION</td>
                                                                    <td>DETAILS</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-control" type="time"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-control" type="time"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                </tr>
                                                            </table>
                                                        </div>`;
                                        const bindComponent = (components) => {
                                            document.getElementById('controls').innerHTML = ''
                                            components.map(component => {
                                                document.getElementById('controls').innerHTML +=
                                                    component;
                                            });
                                            document.getElementById('controls').innerHTML += button;
                                            document.getElementById('btn').addEventListener('click',
                                                onClickHandler);
                                        }

                                        const onClickHandler = (e) => {
                                            let latestComponent = document.getElementById(i - 1);
                                            components[i - 1] =
                                                `<div class="controls" id1='${i-1}'>
        		                                                ${latestComponent.innerHTML}
        		                                            </div>`;
                                            const newComponent = componentTemplate(i);
                                            components.push(newComponent);
                                            i++;
                                            bindComponent(components);
                                        }

                                        let component = componentTemplate(i);
                                        i++;
                                        components.push(component);
                                        bindComponent(components);
                                    </script>
                                    <script type="text/javascript">
                                        let i = 0;
                                        let components = [];
                                        const button =
                                            `<label><button type="button" class="btn btn-primary" id='btn'>ADD Day</button></label>`;
                                        const componentTemplate = (id2) =>
                                            `<div class="controlss" id='${id2}'>
                                                            <div class="col-md-6">
                                                                <label>รายละเอียดทัวร์ : </label>
                                                                <br>
                                                                <label>DAY <input type="number"> :</label>
                                                            </div>
                                                            <table class="table">
                                                                <tr>
                                                                    <td>TIME</td>
                                                                    <td>LOCATION</td>
                                                                    <td>DETAILS</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-control" type="time"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-control" type="time"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                </tr>
                                                            </table>
                                                        </div>`;

                                        const bindComponent = (components) => {
                                            document.getElementById('controls').innerHTML = ''
                                            components.map(component => {
                                                document.getElementById('controls').innerHTML +=
                                                    component;
                                            });
                                            document.getElementById('controls').innerHTML += button;
                                            document.getElementById('btn').addEventListener('click',
                                                onClickHandler);
                                        }

                                        const onClickHandler = (e) => {
                                            let latestComponent = document.getElementById(i - 1);
                                            components[i - 1] =
                                                `<div class="controls" id1='${i-1}'>
        		                                                ${latestComponent.innerHTML}
        		                                            </div>`;
                                            const newComponent = componentTemplate(i);
                                            components.push(newComponent);
                                            i++;
                                            bindComponent(components);
                                        }

                                        let component = componentTemplate(i);
                                        i++;
                                        components.push(component);
                                        bindComponent(components);
                                    </script>
                                </div>
                            </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Complete</h3>
                        <p>You have successfully completed all steps.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
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
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }
</script>
@endsection

</body>

</html>