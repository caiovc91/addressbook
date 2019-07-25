@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Message
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('messages.update', $message->id_contact) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="message">Message</label>
          <input type="text" class="form-control" name="message" value={{ $message->message }} />
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>
</div>
@endsection