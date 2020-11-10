<pre>
<form action="{{url('query')}}" method="post">
    @csrf
    <textarea name="sql" placeholder="Enter sql query..." style="width: 60%; min-height: 200px;">{{$sql}}</textarea>
        <input type="submit"/>
        <br/>
        {{$log}}
        @if(!empty((array)$result))
        {{print_r($result)}}
        @endif
</form>
</pre>
