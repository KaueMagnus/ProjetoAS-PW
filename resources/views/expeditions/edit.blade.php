<form action="{{ url(path: 'expeditions/'.$expedition->id) }}" method="POST"> @csrf
   @method('PUT')
<input type="text" name="name" placeholder="Name" value="{{ $expedition->name }}" required>
<input type="number" name="duration" placeholder="Duration" value="{{ $expedition->duration }}" required>

<button type="submit">Update Expedition</button>