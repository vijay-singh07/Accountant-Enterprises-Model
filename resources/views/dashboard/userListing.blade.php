<div class="container">
    <div class="row">
        <h2> Welcome to User Listing </h2>
        <hr>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Adress</th>
                <th>Phone number</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                <td>{{$user['id']}}</td>
                    <td>{{$user['fname']}} </td>
                    <td>{{$user['lname']}}</td>
                    <td>{{$user['mail']}}</td>
                    <td>{{$user['phone']}}</td>
                </tr>
                @endforeach
    </div>
</div>

<div>
    <a href="/logout">Logout</a>
</div>