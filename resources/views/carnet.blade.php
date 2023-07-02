



    <style>
        /* Styles CSS personnalisés */

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }

        .vaccine-card {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .vaccine-card h3 {
            font-size: 20px;
            color: #007bff;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .vaccine-card p {
            margin: 0;
            font-size: 16px;
        }

        .add-vaccine-btn {
            text-align: center;
            margin-bottom: 30px;
        }

        button {
            padding: 12px 24px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>


  <!DOCTYPE html>
@include('welcome')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnet de Vaccination</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        /* Styles CSS personnalisés */

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .patient-info {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }

        .patient-info h2 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .patient-info p {
            font-size: 14px;
            color: #777;
            margin-bottom: 5px;
        }

        .vaccine-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .vaccine-item {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }

        .vaccine-item h3 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .vaccine-item p {
            font-size: 14px;
            color: #777;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    @php
    $dateNaissance = new DateTime(Auth::user()->patient->datenaissance);
    $date = date('d-m-y h:i:s');
    $age = $dateNaissance->diff(new DateTime())->format('%y');
    @endphp
    <div class="container">
        <center>
            <h1>Carnet de Vaccination</h1>
        </center>

            <p>Nom: {{ Auth::user()->patient->prenom }} {{ Auth::user()->patient->nom }}</p>
            {{-- <p>Date de naissance: {{ $dateNaissance->format('d-m-Y') }}</p> --}}
            <p>Âge: {{ $age }} ans</p>
            <p>Téléphone: {{ Auth::user()->patient->telephone }}</p>


        <ul class="vaccine-list">
            @if ($vaccinations && $vaccinations->count() > 0)
                @foreach ($vaccinations as $vaccination)
                    <li class="vaccine-item">
                        <h3>{{ $vaccination->vaccin->nomvaccin }}</h3>
                        <p>{{ $vaccination->date }}</p>
                        <p>Lieu: Centre de vaccination XYZ</p>
                    </li>
                @endforeach
            @else
                <center><p>Aucune vaccination effectuée</p></center>
            @endif
        </ul>

        @if (Auth::user()->role == "patient")
            <div class="add-vaccine-btn">
                <a href="choixvaccin"><button type="button">Ajouter une vaccination</button></a>
            </div>
        @endif
    </div>
</body>
</html>
