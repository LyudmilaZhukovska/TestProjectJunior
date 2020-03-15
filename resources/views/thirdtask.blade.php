<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Third task </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/pricing.css" rel="stylesheet">
</head>
<body>
    <div class="content">
        

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4"> Third task </h1>
        </div>

        <div class="container">
        <div class="card-deck mb-3 text-center">
        <div class="d-flex flex-column bd-highlight mb-3">

        <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">
                        <p>Реализовать алгоритм  извлечения числовых значений со строки:
                            This server has 386 GB RAM and 500GB storage
                    </h4>
                </div>
                <div class="card-body">
                    
                    <h4 class="card-title pricing-card-title">
                        <code>
                            <p>$text = "This server has 386 GB RAM and 500GB storage";
                            <p>$pattern = "/[^0-9]/";
                            <p>$match = preg_replace( $pattern, '',  $text);   
                            
                        </code>
                    </h4>

                    <h4>
                    <?php 
                        $text = "This server has 386 GB RAM and 500GB storage";
                        $pattern = "/[^0-9]/";
                        $match = preg_replace( $pattern, '',  $text);  
                        
                        echo 'Числові значення рядка: ' . $match ;
                    
                    ?> 
                    </h4>

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