@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Contact
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
      <form method="post" action="{{ route('contacts.store') }}">
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="text" class="form-control" name="lastname"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" name="phone"/>
          </div>
          <div class="form-group">
              <label for="mail">Email</label>
              <input type="text" class="form-control" name="mail"/>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>
</div>
@endsection