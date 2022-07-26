<div class="container">
    <div class="row">
        <h2> Welcome to Transaction Listing </h2>
        <hr>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Date</th>
                <th>Description</th>
                <th>Paid to/by</th>
                <th>Unit Amount</th>
                <th>Unit Quantity</th>
                <th>Total</th>
                <th>Unit Name</th>
                <th>Type</th>
                <th>Status</th>
                <th>UTR</th>
                <th>INVOICE</th>
                <th>Comments</th>
                <th>Project</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Download</th>
            </thead>
            <tbody>
                @foreach ($lists as $list)
                <tr>
                <td>{{$list['id']}}</td>
                    <td>{{$list['date']}} </td>
                    <td>{{$list['description']}}</td>
                    <td>{{$list['paid']}}</td>
                    <td>{{$list['unit_amount']}}</td>
                    <td>{{$list['unit_quantity']}}</td>
            <td>{{ $list['unit_amount']*$list['unit_quantity'] }}</td>
                    <td>{{$list['unit_name']}}</td>
                    <td>{{$list['type']}}</td>
                    <td>{{$list['status']}}</td>
                    <td>{{$list['utr']}}</td>
                    <td>{{$list['invoice_number']}}</td>
                    <td>{{$list['comments']}}</td>
                    <td>{{$list['project']}}</td>
                    <td><a href='/edit/{{$list['id']}}'>Edit</a></td>
                    <td><a href='/delete/{{$list['id']}}'>Delete</a></td>
                    <td><a href='/download/{{$list['id']}}'>Download</a></td>
                </tr>
                @endforeach
    </div>
</div>

<div>
    <a href="/home">Home</a>
    <a href="transaction">Create new transaction</a>
    <a href="/logout">Logout</a>
</div>