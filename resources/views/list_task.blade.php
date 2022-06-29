

<h2>list task table</h2>

<Table>
    <head>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone</th>
        </tr>
    </head>
    <body>
        @foreach ($tasks as $task)


        <tr>
            <td>{{$task->id}}</td>

         <td>{{$task->name}}</td>
         <td>{{$task->age}}</td>
         <td>{{$task->phone}}</td>

        </tr>

        @endforeach

    </body>
</Table>
