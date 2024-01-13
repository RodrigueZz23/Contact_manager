<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-6m4gyMcLHz6VcncbQg5yGrh4qWXSAYDPYmPVraFAT6z5sjcJ4p8f+gny5ZinP+mW" crossorigin="anonymous">
    <link rel="stylesheet" href="create_electors.css">
    <link rel="stylesheet" href="form_manager.css">
</head>

<body>
    <div class="container">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <img src="images/lbs.jpg" alt="" style="width: 200px;">
                    <h1><i class="fas fa-graduation-cap icon-academic"></i> <b>CREATE 🖊️</b></h1>
                </div>
                <div class="card-body form-container">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <form ction="{{ route('contact_manager') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label"><i class="fas fa-user icon"></i> Nom</label>
                            <input type="text" name="nom" class="form-control" id="name"required>
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label"><i class="fas fa-user icon"></i> Prenom</label>
                            <input type="text" name="prenom" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><i class="fas fa-envelope icon"></i> Adresse
                                e-mail</label>
                            <input type="email" name="email" class="form-control" id="email"required>
                        </div>

                        <div class="mb-3">
                            <label for="telephone" class="form-label"><i class="fas fa-envelope icon"></i>
                                Téléphone</label>
                            <input type="text" name="telephone" class="form-control"required>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" style="padding:10px 40px;"><i class="fas fa-arrow-right icon"></i>Ajouter</button>
                            <a href="{{url('show')}}" class="btn btn-danger"style="margin-left:120px; padding:10px 55px; margin-top: 20px;" ><div style="font-size:18px;">Show</div></a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
