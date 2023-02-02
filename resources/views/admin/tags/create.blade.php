@extends('layouts.admin')

@section('content')
    <h1>Crea Tag</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul class="list-unstyled">
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    <div>
        <form action="{{route('admin.tags.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il nome del tag" value="{{old('name')}}">
            </div>

            <button type="submit" class="btn btn-success">Conferma</button>
        </form>
    </div>
    <a href="{{route('admin.tags.index')}}" class="btn btn-primary my-4">Torna alla Lista</a>
@endsection