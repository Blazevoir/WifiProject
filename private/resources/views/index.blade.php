@extends('main')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row col-md-10">
                    <a href="{{url('AP')}}">
                        <div style="height:400px; width:400px; margin-top: 25px;">
                             <canvas id="myChart0"  height="300"></canvas>     
                        </div>  
                    </a>
                    <a href="{{url('PD')}}">
                        <div style="height:400px; width:430px; margin-top: 25px;">
                             <canvas id="myChart1" height="300"></canvas>     
                        </div>
                    </a>
                    <a href="{{url('PM')}}">
                        <div style="height:400px; width:400px; margin-top: 25px;">
                             <canvas id="myChart2"  height="300px"></canvas>     
                        </div>   
                    </a>
                    <a href="{{url('PMacs')}}">
                        <div style="height:400px; width:400px; margin-top: 25px;">
                             <canvas id="myChart3"  height="300px"></canvas>     
                        </div>   
                    </a>
                    <a href="{{url('PL')}}">
                        <div style="height:400px; width:400px; margin-top: 25px;">
                             <canvas id="myChart4"  height="300"></canvas>     
                        </div>  
                    </a>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection