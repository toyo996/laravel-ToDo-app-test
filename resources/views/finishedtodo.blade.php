@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    </div><br><br><br><br>

    <table class="table table-dark">
    <thead>
    <tr>
      <th scope="col">What To DO</th>
      <th scope="col">Finished date</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
    @foreach($results as $result)
        
  <tbody>
  <tr>
            <td>{{$result->whattodo}}</td>
            <td>{{$result->updated_at}}</td>
            <td><a href="{{url('home/delete')}}/{{$result->id}}"> <i class="material-icons">delete</i> </a></td>
        </tr>
    </tbody>
    
    @endforeach
    </table>
</div>
@endsection
