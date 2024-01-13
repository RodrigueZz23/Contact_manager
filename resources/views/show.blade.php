<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <title>Manager</title>
</head>
<body>
    <div class="container mt-5">
    <a href="{{url('form_manager')}}" class="btn btn-primary" style="margin-left: 10px; padding:10px 80px;">CREATE CONTACT 🖊️</a>
    <a href="{{url('/')}}" class="btn btn-danger" style="margin-left: 10px; padding:10px 80px;">BACK 🏠</a>
    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
        <table class="table table-bordered table-striped table-custom"  style="margin-top: 50px;">
            <thead class="thead-dark thead-custom">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contact_managers as $contact_manager)
                    <tr>
                        <td>{{ $contact_manager['id'] }}</td>
                        <td>{{ $contact_manager['nom'] }}</td>
                        <td>{{ $contact_manager['prenom'] }}</td>
                        <td>{{ $contact_manager['email'] }}</td>
                        <td>{{ $contact_manager['telephone'] }}</td>
                        <td>
                            <a href="{{url('edit/'.$contact_manager->id)}}" class="btn btn-success">EDIT 🖊️</a>
                            <a href="{{url('delete/'.$contact_manager->id)}}" class="btn btn-danger">DELETE 🗑️</a>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Aucun contact trouvé.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        /* Ajoutez vos propres styles personnalisés ici */
        .table-custom {
            background-color: #f8f9fa; /* Couleur de fond */
            color: #495057; /* Couleur du texte */
        }

        .thead-custom {
            background-color: #343a40; /* Couleur de fond de l'en-tête */
            color: #ffffff; /* Couleur du texte de l'en-tête */
        }

        .table-custom tbody tr:hover {
            background-color: #e2e6ea; /* Couleur de fond au survol */
        }
    </style>
</body>
</html>
