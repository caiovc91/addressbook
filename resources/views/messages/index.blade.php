@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Contact Name</td>
          <td>Messages</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
        <tr>
            <td>{{$message->id_contact}}</td>
            <td>{{$message->message}}</td>
            <td><a href="{{ route('messages.edit',$message->id_contact)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('messages.destroy', $message->id_contact)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                <form action="{{ route('messages.update', $message->id_contact)}}" method="post">
                  @csrf
                  @method('UPDATE')
                  <button class="btn btn-danger" type="submit">Edit</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection