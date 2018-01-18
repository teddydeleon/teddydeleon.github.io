@extends('layouts.app_t')

@section('content')

    <section id="pricing">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2> Download Packages </h2>
                    <p class="lead">Pellentesque habitant morbi tristique senectus et netus et <br>malesuada fames ac turpis egestas.</p>
                </div><!--/.center-->
                <div class="big-gap"></div>
                <div id="pricing-table" class="row">
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Basic</li>
                            <li class="plan-price">$29</li>
                            <li>Software Basic Package</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Download</a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                    <div class="col-sm-4">
                        <ul class="plan featured">
                            <li class="plan-name">Standard</li>
                            <li class="plan-price">$49</li>
                            <li>Software Standard Package</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Download</a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Advanced</li>
                            <li class="plan-price">$199</li>
                            <li>Software Advanced Package</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Download</a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                </div>
            </div>
        </div>
    </section><!--/#pricing-->

@endsection
