@extends('products.layout')
  
@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Compaign List Page</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('products.create') }}"> Create  new Compaign</a>
            <a class="btn btn-success" href="{{ route('products.edit') }}"> Edit Compaign</a>

        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Advertise Name</th>
        <th>Start Date</th>
        <th>end Date</th>
        <th>Total</th>
        <th>daily_budget</th>
        <th>images</th>



        <th width="280px">Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->start_date}}</td>
        <td>{{ $product->end_date}}</td>
        <td>{{ $product->total}}</td>
        <td>{{ $product->daily_budget}}</td>
        <td>{{ $product->images}}</td>




        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                @csrf
                @method('DELETE')
  
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $products->links() !!}
</div>
@endsection