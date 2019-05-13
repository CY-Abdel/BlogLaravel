@extends('layouts/main')

@section('content')
<p class="p1">Contact</p>
@endsection

<link rel="stylesheet" type="text/css" href="css/form.css">
@section('formulaire')
<div class="callout container form" style="width:70%;">
<p>Votre message</p>
<form action="{{ url('/contact') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="text" class="form-control {{ $errors->has('contact_name') ? 'is-invalid' : '' }}" 
        name="contact_name" id="contact_name" placeholder="Votre nom"
            value="{{ old('contact_name') }}"> {!! $errors->first('contact_name', '
        <div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <input type="email" class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" 
        name="contact_email" id="contact_email" placeholder="Votre email"
            value="{{ old('contact_email') }}"> {!! $errors->first('contact_email', '
        <div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <textarea class="form-control {{ $errors->has('contact_message') ? 'is-invalid' : '' }}" 
        name="contact_message" id="contact_message" placeholder="Votre message" style="height: 150px;">{{ old('contact_message') }}</textarea>                            {!! $errors->first('contact_message', '
        <div class="invalid-feedback">:message</div>') !!}
    </div>
    <button style="background-color: #007BFF;" type="submit" class="btn btn-secondary">Envoyer !</button>
</form>
</div>
@endsection

<link rel="stylesheet" type="text/css" href="css/comment.css">
@isset($name)
@section('Msg_enregistre')
<div class="comment1" style="width:70%;" >
<h3>{{ $name . ' : votre message a bien été ajouté, Merci !' }}</h3>
</div>
@endsection
@endisset

@isset($listes)
@section('Liste_contact')
    @foreach($listes as $contact)
    <div class="comment2">
        <p class="p0">{{ $contact->contact_name }}</p>
        <p class="p2">{{ $contact->post_date }}</p>
        <p class="p3">{{ $contact->contact_message }}</p>
    </div>

    @endforeach
@endsection
@endisset