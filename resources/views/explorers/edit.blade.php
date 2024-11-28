<form action="{{ url(path: 'explorers/'.$explorer->id) }}" method="POST"> @csrf
   @method('PUT')
<input type="text" name="name" placeholder="Name" value="{{ $explorer->name }}" required>
<input type="text" name="identification" placeholder="Identification" value="{{ $explorer->identification }}" required>
<input type="text" name="email" placeholder="Email" value="{{ $explorer->email }}" required>
<button type="submit">Update Explorer</button>