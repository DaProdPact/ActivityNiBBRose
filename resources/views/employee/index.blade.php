@foreach ($supervisors as $supervisor)
    <p>Supervisor Number {{$supervisor -> id}} : {{$supervisor -> firstname}} {{$supervisor -> lastname}}</p>


    @foreach ($employees as $employee)
    @if ($employee -> supervisor_id == $supervisor -> id)

    <p>--Employee id : {{$employee -> id}} > Name : {{$employee -> firstname}} {{$employee -> lastname}}</p>

    @else
    @endif  
    @endforeach

@endforeach