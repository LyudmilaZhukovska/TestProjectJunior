<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First task</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/pricing.css" rel="stylesheet">
</head>
<body>
    <div class="content">
        

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4"> First task</h1>
        </div>

        <div class="container">
        <div class="card-deck mb-3 text-center">
        <div class="d-flex flex-column bd-highlight mb-3">
            <!-------------------------------->

            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">1) Запрос, который выберет имя пользователя (bids.name) с самой высокой ценой заявки (bids.price)</h4>
                </div>
                <div class="card-body">
                    
                    <h4 class="card-title pricing-card-title">
                        <!-- CODE -->

                        <code>
                       <p> $currentValue = $tasks[1];
                       <p> $currentPrice = $tasks[1]->price;

                        
                       <p> foreach ($tasks as $value) {
                       <p>    if ($value->price >$currentPrice ) {
                       <p>        $currentValue = $value;
                       <p>        $currentPrice = $value->price;
                       <p>    }
                       <p>}
                        </code>


                    </h4>

                    <h2 class="card-title pricing-card-title">
                        Виведення:
                    </h2>

                    <?php
                    $currentValue = $tasks[1];
                    $currentPrice = $tasks[1]->price;

                    
                    foreach ($tasks as $value) {
                        if ($value->price >$currentPrice ) {
                            $currentValue = $value;
                            $currentPrice = $value->price;
                        }

                    }

                    ?>

                    <h2 class="card-title pricing-card-title">
                    {{  $currentValue->name }} 
                    <!-- {{  $currentValue->price }} -->
                    </h2>
                </div>
            </div>

            <!-------------------------------->

            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">
                        2) Напишите запрос, который выберет название мероприятия (events.caption), по которому нет заявок
                    </h4>
                </div>
                <div class="card-body">
                    
                    <h4 class="card-title pricing-card-title">
              
                        <code>

                        <p>
                        <p>    foreach ($captions as $value) {
                        <p>        $checkFind = false ; 
                        <p>        foreach ($tasks as $task) {
                        <p>            if ($task->id_event == $value->id) {
                        <p>                $checkFind = true ; 
                        <p>                break ;  }}
                        <p>        if  (!$checkFind) { 
                        <p>            {$value->caption} }}
                        <p>




                        </code>

                    </h4>

                    <h2 class="card-title pricing-card-title">
                        Виведення:
                    </h2>

                    <ul>            
                        <?php
                                
                            foreach ($captions as $value) {
                                $checkFind = false ; 
                                foreach ($tasks as $task) {
                                    if ($task->id_event == $value->id) {
                                        $checkFind = true ; 
                                        break ; 
                                    }
                                }

                                if  (!$checkFind) { 
                                    ?><li> {{  $value->caption }} </li> <?php  
                                }

                            }
                        ?>
                    </ul>
                </div>
            </div>

            <!-------------------------------->
            
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">
                        3) Напишите запрос, который выберет название мероприятия (events.caption), по которому больше трех заявок
                    </h4>
                </div>
                <div class="card-body">
                    
                    <h4 class="card-title pricing-card-title">
                        <code>

                            <p>foreach ($captions as $value) {
                            <p>    $checkFind = 0 ; 
                            <p>    foreach ($tasks as $task) {
                            <p>        if ($task->id_event == $value->id) {
                            <p>            $checkFind = $checkFind + 1 ; }}

                            <p> $captionsRequest[$value->id] = $checkFind;

                            <p>  if  ( $checkFind > 3 ) { 
                            <p>    {{  $value->caption }} 
                            <p>  }}

                        </code>
                    </h4>

                    <h2 class="card-title pricing-card-title">
                        Виведення:
                    </h2>

                    <ul>            
                        <?php
                                
                            foreach ($captions as $value) {
                                $checkFind = 0 ; 
                                foreach ($tasks as $task) {
                                    if ($task->id_event == $value->id) {
                                        $checkFind = $checkFind + 1 ; 
                                    }
                                }

                                $captionsRequest[$value->id] = $checkFind;

                                if  ( $checkFind > 3 ) { 
                                    ?><li> {{  $value->caption }} </li> <?php  
                                }

                            }
                        ?>
                    </ul>
                </div>
            </div>
   
            <!-------------------------------->

            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">
                        4) Напишите запрос, который выберет название мероприятия (events.caption), по которому больше всего заявок
                    </h4>
                </div>
                <div class="card-body">
                    
                    <h4 class="card-title pricing-card-title">
                       

                        <code>
                        <p>$currentRequest = null;
                        <p>$currentKey = null;
                                
                        <p>foreach ($captionsRequest as $key=>$value) {
                            <p>if  ( $value > $currentRequest ) { 
                                <p>$currentRequest =  $value ;
                                <p>$currentKey =  $key ;} }


                                <p>foreach ($captions as $value) {
                                    <p> if  ($value->id == $currentKey) { 
                                        <p>{{  $value->caption }}  
                                        <p>break;
                                }

                            }
                        </code>

                    </h4>

                    <h2 class="card-title pricing-card-title">
                        Виведення:
                    </h2>
                    <ul>            
                        <?php

                            $currentRequest = null;
                            $currentKey = null;
                                
                            foreach ($captionsRequest as $key=>$value) {
                            if  ( $value > $currentRequest ) { 
                                $currentRequest =  $value ;
                                $currentKey =  $key ;
                            }                  
                            }


                            foreach ($captions as $value) {
                                if  ($value->id == $currentKey) { 
                                    ?><li> {{  $value->caption }} </li> <?php  
                                    break;
                                }

                            }


                        ?>
                    </ul>
                </div>
            </div>

            
            <!-------------------------------->

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