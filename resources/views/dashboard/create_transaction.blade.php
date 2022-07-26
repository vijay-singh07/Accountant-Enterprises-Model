<form action="{{route('transaction-save')}}" method="post">
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    @csrf
    <div class="text-center">
        <h1>Create a fresh Transaction</h1>
    </div>
    <div>
        <p>Date*</p>
        <input type="date" name="date" placeholder="Enter Date" value="{{old('date')}}">
        <span class="text-danger">@error('date') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Discription*</p>
        <input type="text" name="description" placeholder="Enter description" value="{{old('description')}}">
        <span class="text-danger">@error('description') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Paid by/to*</p>
        <input type="text" name="paid" placeholder="Paid to/by" value="{{old('paid')}}">
        <span class="text-danger">@error('paid') {{$message}} @enderror </span>
        </div>
    <div>
        <p>Unit Amount*</p>
        <input type="text" name="unit_amount" placeholder="Enter unit Amount" value="{{old('unit_amount')}}">
        <span class="text-danger">@error('unit_amount') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Unit Quanity*</p>
        <input type="text" name="unit_quantity" placeholder="Enter Unit Qauntity " value="{{old('unit_quantity')}}">
        <span class="text-danger">@error('unit_quantity') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Unit Name*</p>
        <input type="text" name="unit_name" placeholder="Enter Unit Name" value="{{old('unit_name')}}">
        <span class="text-danger">@error('unit_name') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Type*</p>
        <select name="type" value="{{old('type')}}">
    <option >Revenue</option>
    <option >Expense</option>
  </select>
  <span class="text-danger">@error('type') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Status*</p>
        <select name="status" value="{{old('status')}}">
    <option >Due</option>
    <option >Cleared</option>
    <option >Cancelleda</option>
  </select>
  <span class="text-danger">@error('status') {{$message}} @enderror </span>
    </div>
    <div>
        <p>UTR</p>
        <input type="text" name="utr" placeholder="Enter Your Comment" value="{{old('utr')}}">
        <span class="text-danger">@error('utr') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Comments</p>
        <input type="text" name="comments" placeholder="Enter Your Comment" value="{{old('comments')}}">
        <span class="text-danger">@error('Comments') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Project*</p>
        <input type="text" name="project" placeholder="Enter tahe Project Name" value="{{old('project')}}">
        <span class="text-danger">@error('project') {{$message}} @enderror </span>
    </div>
    <div>
    <button type="submit" class="btn btn-block btn-primary">Create</button>
    </div>
    <div class="text-center">
        <p>Review old Transactions? <a href="transaction-list">Review old Transaction</a></p>
    </div>
</form>