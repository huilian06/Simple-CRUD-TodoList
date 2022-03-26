<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .boxToDo{
                padding: 5%;
                display: flex;
                align-items: center;
                text-align: center;
                margin: auto;
                justify-content: center;
            }
            .InBox{
                border: 3px solid black;
                padding: 5%;
            }
        </style>
    </head>
    <body>
         <div class="boxToDo">
  
  <div class="InBox">
    <div><a class="btn btn-info" href="/">View To Do list</a></div>
   
    <div class="container text-center">
        <form action="todo_submit">
            <input type="text" name="name" placeholder="Enter to do list" class='form-control' style="    margin-top: 10px;margin-bottom: 10px;">
            <input type="submit" value='Save' class="btn btn-success">
    </form>
    </div>
</div>
</div>
         
    </body>
</html>
<?php /**PATH D:\All after ssd\xampp\htdocs\laravel\todolist\resources\views/create_new_list.blade.php ENDPATH**/ ?>