<div class="container">
    <div class="row">
        <h2> Welcome to User Listing </h2>
        <hr>
        <table class="table">
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Adress</th>
                <th>Phone number</th>
            </thead>
            <tbody>
                @foreach ($accountants as $accountant)
                <tr>
                    <td>{{ $accountant-> fname}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
    </div>
</div>