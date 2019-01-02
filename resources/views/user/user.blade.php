{{$page}}<br/>
@foreach($info as $v)
    {{$v['name']}}.{{$v['age']}}.{{$v['email']}}<br/>
    @endforeach