@dump($errors)

@if(count($errors->all()) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all as $rror)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>    
@endif