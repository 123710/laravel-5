@extends('layouts.app')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
 <h1 class="display-3">Contact aanpassen</h1>
 @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
<li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 <br />
 @endif
 <form method="post"
action="{{ route('contacts.update', $contact->id) }}">
 @method('PATCH')
 @csrf
 <div class="form-group">
 <label for="first_name">Voornaam:</label>
 <input type="text" class="form-control" name="first_name"
value={{ $contact->first_name }} />

<label for="last_name">Achternaam:</label>
<input type="text" class="form-control" name="last_name"
value={{ $contact->last_name }} />

<label for="email">Emial:</label>
<input type="text" class="form-control" name="email"
value={{ $contact->email }} />
 </div>

 <div class="form-group">
<label for="company">Bedrijf</label>
{!! Form::select('company_id', $companies,
$contact->company_id, ['class' => 'form-control']) !!}
</div>

 <button type="submit" class="btn btn-primary">Aanpassen</button>
 </form>
 </div>
</div>
