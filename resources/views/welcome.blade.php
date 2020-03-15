<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/pricing.css" rel="stylesheet">
    
</head>
<body>

    <div class="content">
   
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Home page</h1>
        </div>


        <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">First task</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">
                    <a class="btn btn-outline-primary" href="{{ url('/task_first') }}">First task</a>
                </h1>
            </div>
            </div>
            

            <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Second task</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">
                    <a class="btn btn-outline-primary" href="{{ url('/task_second') }}">Second task</a>
                </h1>
            </div>
            </div>

            <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Third task</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">
                    <a class="btn btn-outline-primary" href="{{ url('/task_third') }}">Third task</a>
                </h1>
            </div>
            </div>

            <!-- <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Fourth task</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">
                    <a class="btn btn-outline-primary" href="{{ url('/task_fourth') }}">Fourth task</a>
                </h1>
            </div>
            </div> -->
        </div>
        </div>
    </div>
</body>
</html>