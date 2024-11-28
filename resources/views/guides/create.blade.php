<form action="{{ url('guides') }}" method="POST"> @csrf
    <input type="text" name="name" placeholder="Name" required> 
    <input type="text" name="expertise" placeholder="Expertise" required>
    <input type="text" name="email" placeholder="Email" required>
    <button type="submit">Register Guide</button>
</form>