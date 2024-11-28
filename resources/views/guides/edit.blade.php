<form action="{{ url(path: 'guides/'.$guide->id) }}" method="POST"> @csrf
   @method('PUT')
<input type="text" name="name" placeholder="Name" value="{{ $guide->name }}" required>
<input type="text" name="expertise" placeholder="Expertise" value="{{ $guide->expertise }}" required>
<input type="text" name="email" placeholder="Email" value="{{ $guide->email }}" required>
<button type="submit">Update Guide</button>