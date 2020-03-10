@extends('main')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                        <div style="height:600px; width:1000px; margin-top: 25px;">
                             <canvas id="myChart4"  height="400"></canvas>     
                        </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection