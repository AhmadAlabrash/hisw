@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                <li>Fuck YoUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU ALLLLLLLLL</li>
            @endforeach
        </ul>
    </div>
@endif