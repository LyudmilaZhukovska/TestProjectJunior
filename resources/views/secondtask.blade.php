<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second task</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/pricing.css" rel="stylesheet">
</head>
<body>
    <div class="content">
        

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4"> Second task</h1>
        </div>

        <div class="container">
        <div class="card-deck mb-3 text-center">
        <div class="d-flex flex-column bd-highlight mb-3">

        <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">
                        <p>Написать алгоритм решения задачи: 
                        <p> В классе 28 учеников. 75% из них занимаются спортом. Сколько учеников в классе занимаются спортом и сколько всего учеников в классе?

                    </h4>
                </div>
                <div class="card-body">
                    
                    <h4 class="card-title pricing-card-title">
                        <code>

                        <p>
                        <p>   $students = 28;
                        <p>   $sportStudents = $students * 0.75;
                        <p>   $sportStudents = round( $sportStudents, 0, PHP_ROUND_HALF_DOWN);

                        </code>
                    </h4>

                    <?php
                        $students = 28;
                        $sportStudents = $students * 0.75;

                        $sportStudents = round( $sportStudents, 0, PHP_ROUND_HALF_DOWN);

                        echo 'Загальна кількість учнів: ' . $students ."<br>\n" . 'Кількість учнів, які займаються спортом: ' . $sportStudents;
                     
                    ?>

                    

                    <!-- <p> {{  $students}}
                    <p> {{  $sportStudents}} -->

                    
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
            
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">
                        <a class="btn btn-outline-primary" href="{{ url('/') }}">Home page</a>
                    </h1>
                </div>
            </div>
        </div>
        </div>
        </div>


        
    </div>
</body>
</html>