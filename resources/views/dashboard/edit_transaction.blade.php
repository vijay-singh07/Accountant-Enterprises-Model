<form action="{{route('update-transaction')}}" method="post">
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    @csrf

    <input type="hidden" value="{{$editable['id']}}" name="tid">
    <div class="text-center">
        <h1>Edit Transaction</h1>
    </div>
    <div>
        <p>Date*</p>
        <input type="text" name="date" value="{{$editable['date']}}" placeholder="Enter Date" value="{{old('date')}}">
        <span class="text-danger">@error('date') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Discription*</p>
        <input type="text" name="description" value="{{$editable['description']}}" placeholder="Enter description" value="{{old('description')}}">
        <span class="text-danger">@error('description') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Paid by/to*</p>
        <input type="text" name="paid" value="{{$editable['paid']}}" placeholder="Paid to/by" value="{{old('paid')}}">
        <span class="text-danger">@error('paid') {{$message}} @enderror </span>
        </div>
    <div>
        <p>Unit Amount*</p>
        <input type="text" name="unit_amount" value="{{$editable['unit_amount']}}" placeholder="Enter unit Amount" value="{{old('unit_amount')}}">
        <span class="text-danger">@error('unit_amount') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Unit Quanity*</p>
        <input type="text" name="unit_quantity" value="{{$editable['unit_quantity']}}" placeholder="Enter Unit Qauntity">
        <span class="text-danger">@error('unit_quantity') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Unit Name*</p>
        <input type="text" name="unit_name" value="{{$editable['unit_name']}}" placeholder="Enter Unit Name">
        <span class="text-danger">@error('unit_name') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Type*</p>
        <select name="type" value="{{$editable['type']}}">
    <option >Revenue</option>
    <option >Expense</option>
  </select>
  <span class="text-danger">@error('type') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Status*</p>
        <select name="status" value="{{$editable['status']}}">
    <option >Due</option>
    <option >Cleared</option>
    <option >Cancelleda</option>
  </select>
  <span class="text-danger">@error('status') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Comments</p>
        <input type="text" name="comments" value="{{$editable['comments']}}" placeholder="Enter Your Comment">
        <span class="text-danger">@error('Comments') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Project*</p>
        <input type="text" name="project" value="{{$editable['project']}}" placeholder="Enter tahe Project Name">
        <span class="text-danger">@error('project') {{$message}} @enderror </span>
    </div>
    <div>
    <button type="submit" class="btn btn-block btn-primary">update</button>
    </div>
</form>