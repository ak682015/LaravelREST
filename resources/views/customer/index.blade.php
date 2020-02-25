<h1>Customers</h1>  

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