<x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

@component('mail::message')
# Confirmation de vaccination

Bonjour,

Nous vous confirmons que la vaccination a été effectuée avec succès.

Détails de la vaccination :
Vaccin : {{ $vaccination->vaccin->nomvaccin }}
Date : {{ $vaccination->date }}
avec le medecin : {{ $vaccination->medecin->nom }}

Merci.

Cordialement,
Votre application
@endcomponent
