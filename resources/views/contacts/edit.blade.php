@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Contact
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
      <form method="post" action="{{ route('contacts.update', $contact->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="name" value={{ $contact->name }} />
        <div class="form-group">
          <label for="name">Last Name:</label>
          <input type="text" class="form-control" name="lastname" value={{ $contact->lastname }} />
        </div>
        </div>
        <div class="form-group">
          <label for="phone">Phone :</label>
          <input type="text" class="form-control" name="phone" value={{ $contact->phone }} />
        </div>
        <div class="form-group">
          <label for="mail">Mail:</label>
          <input type="text" class="form-control" name="mail" value={{ $contact->mail }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="listmsg" class="btn btn-primary">View Messages</button>
      </form>
  </div>
</div>
@endsection