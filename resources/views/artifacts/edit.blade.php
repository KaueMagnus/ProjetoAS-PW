<form action="{{ url(path: 'artifacts/'.$artifact->id) }}" method="POST"> @csrf
   @method('PUT')
<input type="text" name="name" placeholder="Name" value="{{ $artifact->name }}" required>
<input type="number" name="discovery_time" placeholder="Identification" value="{{ $artifact->discovery_time }}" required>
<input type="text" name="code" placeholder="Email" value="{{ $artifact->code }}" required>
<button type="submit">Update Artifact</button>