@extends('products.layout')
  
@section('content')
    <div class="container"> 
         <h2>Add New Advertising Compaign</h2>

<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
</div>
</div>
</div>
//display errors
@if ($errors->any())
<div class="alert alert-danger">
<strong>OOPS!!</strong> There were some problems with your input.<br><br>
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif



        <form action="{{ route('products.store') }}" method="POST">
            @csrf
        <div class="form-group">
          <label>Advertise Name:</label>
          <input type="text" class="form-control"  name="name" placeholder="Enter Advertise Name" >
        </div>
      
        <div class="row form-group">
            <div class="col-md-2">
                Select Advertising Compaign Start Date:
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control datetimepicker" name="start_date"> 
            </div>
          </div>
        </div>
      
      
         <div class="row form-group">
            <div class="col-md-2">
                Select Advertising Compaign End Date:
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control datetimepicker" name="end_date"> 
            </div>
          </div>
        </div>
                          <div class="form-group">
                              <label>Enter Daily Budget </label>
                          <input class="form-control" type="number" name="daily_budget">
                          </div>
      
                           <div class="form-group">
                              <label>Enter Total </label>
                          <input class="form-control" type="number"  name="total" />
                          </div>
      
                          <div class="form-group">
                              <label for="images" class="form-label">Select images</label>
                              <input class="form-control" type="file" id="images" name="image_names[]" multiple="multiple">
                          </div>
                          <input type="submit" class="btn btn-primary">
                        </form></div>
    

@endsection