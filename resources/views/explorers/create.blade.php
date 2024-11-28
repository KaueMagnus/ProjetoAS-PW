<form action="{{ url('explorers') }}" method="POST"> @csrf
    <input type="text" name="name" placeholder="Name" required> 
    <input type="text" name="identification" placeholder="Identification" required>
    <input type="text" name="email" placeholder="Email" required>
    <button type="submit">Register Explorer</button>
</form>