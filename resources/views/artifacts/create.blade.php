<form action="{{ url('artifacts') }}" method="POST"> @csrf
    <input type="text" name="name" placeholder="Name" required> 
    <input type="number" name="discovery_time" placeholder="Discovery Time" required>
    <input type="text" name="code" placeholder="Code" required>
    <button type="submit">Register Artifact</button>
</form>