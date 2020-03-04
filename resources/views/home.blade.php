@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="submit">
            {{csrf_field()}}
                <label for="todo">Insert what todo:</label>
                <input type="text" id="todo" name="todo">
                <br>
                <br>
                <input id="id" name="id" type="hidden" value="{{((Auth()->user()->id))}}">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div><br><br><br><br>

    <table class="table table-dark">
    <thead>
    <tr>
      <th scope="col">What To DO</th>
      <th scope="col">Done</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
    @foreach($results as $result)
        
  <tbody>
  <tr>
            <td>{{$result->whattodo}}</td>
            <td><a href="{{url('home/done')}}/{{$result->id}}"> <i class="material-icons">beenhere</i> </a></td>
            <td><a href="{{url('home/delete')}}/{{$result->id}}"> <i class="material-icons">delete</i> </a></td>
        </tr>
    </tbody>
    
    @endforeach
    </table>
</div>
@endsection
