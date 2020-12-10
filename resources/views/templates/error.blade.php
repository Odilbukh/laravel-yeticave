@if($errors->any())
    <div class="alert alert-danger">
        <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif
