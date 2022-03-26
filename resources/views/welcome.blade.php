<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">

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
      <!--- http://127.0.0.1:8000/ --->
      <div class="boxToDo">
  
  <div class="InBox">
    <h1 style="font-family: 'Fredoka', sans-serif;color: #E8F70A;">To-Do List</h1>
      <a href="create" class="btn btn-info">Create To Do list</a>
     <table class="table" style="font-family: 'Fredoka', sans-serif;">
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Created At</td>
                    <td>Action</td>
                </tr>
               @foreach($todo_arr as $todo)
                <tr>
                    <td>{{$todo->id}}</td>
                    <td>{{$todo->name}}</td>
                    <td>{{$todo->created_at}}</td>
                    <td><a href="edit/{{$todo->id}}">Edit</a> | <a onclick="return confirm('Sure Want Delete?')" href="delete/{{$todo->id}}">Delete</a> </td>
                </tr> 
                @endforeach
            </table>
   
  </div>

</div>
    </body>
</html>
