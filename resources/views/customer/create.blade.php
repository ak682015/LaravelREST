<h1>Add new Customeer</h1>

<form action="/customers" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name') <p>{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="email">Email</label>
        <input type="text" name="email" value="{{ old('email') }}">
            @error('email') <p>{{ $message }}</p> @enderror

    </div>

    @csrf
    <button> Add new cust</button>

</form>