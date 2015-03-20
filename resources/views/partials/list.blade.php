<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>{!!Form::checkbox('selected')!!}</th>
            <th>{{trans('Surname')}}</th>
            <th>{{trans('Name')}}</th>
            <th>{{trans('Formation')}}</th>
            <th>{{trans('Inscription')}}</th>
        </tr>
    </thead>
    <tbody id="table">
        @foreach($students as $student)
        <tr class="{{($student->status=='publish')? 'success' : 'info'}}">
            <td>{!!Form::checkbox('students[]', $student->id, false, ['class'=>'action'])!!}</td>
            <td>{{ $student->surname}}</td>
            <td><span class="glyphicon glyphicon-edit"></span> <a
                    href="{{url('student/'.$student->id.'/edit')}}">{{$student->name}}</a></td>
            <td>{{$student->formation}} </td>
            <td>{{$student->created_at->format('d-m-Y h:i:s')}} </td>
        </tr>
        @endforeach
    </tbody>
    {!! Form::close() !!}
</table>