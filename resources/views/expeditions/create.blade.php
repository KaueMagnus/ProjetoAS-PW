<form action="{{ url('expeditions') }}" method="POST"> @csrf
    <input type="text" name="name" placeholder="Name" required> 
    <input type="number" name="duration" placeholder="Duration" required>
    <button type="submit">Register Expedition</button>
</form>