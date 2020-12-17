<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" media="screen" href="https://cpwebassets.codepen.io/assets/fullpage/fullpage-4de243a40619a967c0bf13b95e1ac6f8de89d943b7fc8710de33f681fe287604.css" />
    <link rel="stylesheet" media="all"    href="https://cpwebassets.codepen.io/assets/global/global-031b289c73bf4e4d154ba7eb2675a0ae1333ced942cdba9a66c6f032629b8038.css" />
    <link rel="stylesheet" media="screen" href="https://cpwebassets.codepen.io/assets/packs/css/everypage-16510009.css" />
    <link rel="stylesheet" media="all"   href="https://cpwebassets.codepen.io/assets/page/page-4b32bcb381ab5382aabfb7053e21dfb332d0f40e9ec157b472146c969c557c8f.css" />
    <link rel="stylesheet" media="all"   href="https://cpwebassets.codepen.io/assets/editor/editor-7c55c25c22df3585de25b430b30c9732abd03476860ba6f67a8def874383a611.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <div class="container  y-5">
        <div class="wrapper animated bounce">
            <h1>Admin Dashbord</h1>
            <hr>
            @include('partials._errors')
            <form action="{{ route('admin.doLogin') }}" method="POST">
                @csrf
                <label id="icon" for="username"><i class="fa fa-envelope"></i></label>
                <input type="text" name="email" placeholder="email" id="username" autocomplete="off" required>
                <label id="icon" for="password"><i class="fa fa-key"></i></label>
                <input type="password" name="password" placeholder="Password" id="password" autocomplete="new-password" required>
                <input type="submit" value="Login In">
                <hr>
            </form>
        </div>
    </div>


    <script src="https://cpwebassets.codepen.io/assets/common/everypage-4025c9919b1e099ca17fb600099803befa6e2209626fb414225f61ba5e4e0e07.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/common/analytics_and_notifications-232064dbc8f51f7f5b71d27c423fed739858fbfee7b6bc4993331e66c8b46dda.js"></script>
    <script>
        LUX=(function(){var a=("undefined"!==typeof(LUX)&&"undefined"!==typeof(LUX.gaMarks)?LUX.gaMarks:[]);var d=("undefined"!==typeof(LUX)&&"undefined"!==typeof(LUX.gaMeasures)?LUX.gaMeasures:[]);var j="LUX_start";var k=window.performance;var l=("undefined"!==typeof(LUX)&&LUX.ns?LUX.ns:(Date.now?Date.now():+(new Date())));if(k&&k.timing&&k.timing.navigationStart){l=k.timing.navigationStart}function f(){if(k&&k.now){return k.now()}var o=Date.now?Date.now():+(new Date());return o-l}function b(n){if(k){if(k.mark){return k.mark(n)}else{if(k.webkitMark){return k.webkitMark(n)}}}a.push({name:n,entryType:"mark",startTime:f(),duration:0});return}function m(p,t,n){if("undefined"===typeof(t)&&h(j)){t=j}if(k){if(k.measure){if(t){if(n){return k.measure(p,t,n)}else{return k.measure(p,t)}}else{return k.measure(p)}}else{if(k.webkitMeasure){return k.webkitMeasure(p,t,n)}}}var r=0,o=f();if(t){var s=h(t);if(s){r=s.startTime}else{if(k&&k.timing&&k.timing[t]){r=k.timing[t]-k.timing.navigationStart}else{return}}}if(n){var q=h(n);if(q){o=q.startTime}else{if(k&&k.timing&&k.timing[n]){o=k.timing[n]-k.timing.navigationStart}else{return}}}d.push({name:p,entryType:"measure",startTime:r,duration:(o-r)});return}function h(n){return c(n,g())}function c(p,o){for(i=o.length-1;i>=0;i--){var n=o[i];if(p===n.name){return n}}return undefined}function g(){if(k){if(k.getEntriesByType){return k.getEntriesByType("mark")}else{if(k.webkitGetEntriesByType){return k.webkitGetEntriesByType("mark")}}}return a}return{mark:b,measure:m,gaMarks:a,gaMeasures:d}})();LUX.ns=(Date.now?Date.now():+(new Date()));LUX.ac=[];LUX.cmd=function(a){LUX.ac.push(a)};LUX.init=function(){LUX.cmd(["init"])};LUX.send=function(){LUX.cmd(["send"])};LUX.addData=function(a,b){LUX.cmd(["addData",a,b])};LUX_ae=[];window.addEventListener("error",function(a){LUX_ae.push(a)});LUX_al=[];if("function"===typeof(PerformanceObserver)&&"function"===typeof(PerformanceLongTaskTiming)){var LongTaskObserver=new PerformanceObserver(function(c){var b=c.getEntries();for(var a=0;a<b.length;a++){var d=b[a];LUX_al.push(d)}});try{LongTaskObserver.observe({type:["longtask"]})}catch(e){}};
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdn.speedcurve.com/js/lux.js?id=410041" async defer crossorigin="anonymous"></script>
    <script src="https://cpwebassets.codepen.io/assets/packs/js/vendor-d071d806aeafb00ba563.chunk.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/packs/js/2-0aad13e3c89b6c0d5a48.chunk.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/packs/js/everypage-2b41ff3c6e696f0b2d2b.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/editor/full/full_page_renderer-a1a24460a5f789e7d2b7546aa39c89301c6391212dd4068a9f570238330257e3.js"></script>
    <!-- custom js -->
   <script src="{{ asset('admin/js/custom.js')}}"></script>
</body>
</html>
