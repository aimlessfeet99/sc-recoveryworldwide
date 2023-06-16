<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eatery Entries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <main>
    <div class="container" style="height: 100vh;">
        <div class="d-flex justify-content-center my-4">
        <form action="{{ route('search.me') }}" method="GET">
  <div class="input-group mt-4">


  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" name="s" class="form-control" placeholder="search here" aria-label="Username" aria-describedby="basic-addon1">
  <button class="btn btn-dark" type="submit">Search</button>

</div>
</form>
</div>
@if(isset($search))
    <h3 style="text-transform: capitalize">{{ $_GET['s'] }} results:</h3>
    <ul class="my-4">
        @foreach($search as $item)
        <li>{{$item->name}}:</li>
        <ul>
            <li>Owned by: {{$item->first_name.' '.$item->last_name}} | Phone: {{ $item->phone}}</li>
            <li>Located at: {{$item->city. ' '. $item->state. ' '. $item->zip}} </li>
        </ul>
        @endforeach
    </ul>
    <hr>
@endif
<div class="d-flex justify-content-between">
    <div class="col-md-5">
        <h1>Eatery Owners</h1>
<table class="table table-dark">
<thead>
    <tr>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Phone</th>
</tr>
  </thead>
  <tbody>
@foreach($owners as $owner)
    <tr>
    <td> {{ $owner->first_name}}</td>
    <td> {{ $owner->last_name}}</td>
    <td> {{ $owner->phone}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
<div class="col-md-5">
<h1>Eatery Entries</h1>
<table class="table table-dark">
<thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">City</th>
    <th scope="col">State</th>
    <th scope="col">Zip</th>
</tr>
  </thead>
  <tbody>
@foreach($eateries as $eatery)
    <tr>
        <td> {{ $eatery->id}}</td>
    <td> {{ $eatery->name}}</td>
    <td> {{ $eatery->city}}</td>
    <td> {{ $eatery->state}}</td>
    <td> {{ $eatery->zip}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
