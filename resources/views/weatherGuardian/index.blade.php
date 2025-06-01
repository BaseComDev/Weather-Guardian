 
 <div>
    @extends('layouts.app')
    @section('content')
        <!-- <h1>Weather Guardian</h1> -->
         <section class="container pb-5">
    <div class="row g-4 justify-content-center">
        <div class="col-md-3 col-sm-6">
            <div class="stats-card">
                <div class="stat-title">Current Temp</div>
                <div class="stat-value">41°C</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="stats-card">
                <div class="stat-title">Humidity</div>
                <div class="stat-value">38%</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="stats-card">
                <div class="stat-title">Wind</div>
                <div class="stat-value">13 km/h</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="stats-card">
                <div class="stat-title">Air Quality</div>
                <div class="stat-value">Moderate</div>
            </div>
        </div>
    </div>
   
</section>
    @endsection
</div>
