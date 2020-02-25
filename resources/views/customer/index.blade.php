<h1>Customers</h1>  

<a href="/customers/create">Add new customer</a>
<a href="/customers?active=1">Active customer</a>
<a href="/customers?active=0">Inactive customer</a>

@forelse($customers as $customer)
<p>
    <strong>
        <a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
        
    </strong>

    {{ $customer->email }}

</p>
@empty
    <p>Customer to show</p>
@endforelse