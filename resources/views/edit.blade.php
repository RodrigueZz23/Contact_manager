<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manager</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
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
                    <h1><i class="fas fa-graduation-cap icon-academic"></i> <b>EDIT 🖊️</b></h1>
                </div>
                <div class="card-body form-container">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <form action="/edit" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$data['id']}}">
                        <div class="mb-3">
                            <label for="nom" class="form-label"><i class="fas fa-user icon"></i> Nom</label>
                            <input type="text" name="nom" class="form-control" id="name"required value="{{$data['nom']}}">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label"><i class="fas fa-user icon"></i> Prenom</label>
                            <input type="text" name="prenom" class="form-control" id="name" required value="{{$data['prenom']}}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><i class="fas fa-envelope icon"></i> Adresse
                                e-mail</label>
                            <input type="email" name="email" class="form-control" id="email"required value="{{$data['email']}}">
                        </div>

                        <div class="mb-3">
                            <label for="telephone" class="form-label"><i class="fas fa-envelope icon"></i>
                                Téléphone</label>
                            <input type="text" name="telephone" class="form-control"required value="{{$data['telephone']}}">
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary"><i class="fas fa-arrow-right icon"></i>Modifier</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

<style>

body {
    background-color:#0078d4;
    font-family: Arial, sans-serif;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: green;
    color: white;
    text-align: center;
    padding: 20px;
}

.form-label {
    font-weight: bold;
    color: #333;
}

.form-control {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 12px;
    font-size: 18px;
    width: 100%;
    margin-bottom: 20px;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    padding: 12px 30px;
    font-size: 20px;
    color: white;
    transition: background-color 0.3s;
    display: block;
    margin: 0 auto;
}

.btn-primary:hover {
    background-color: #0056b3;
}
.icon-academic {
    font-size: 48px;
    color: #007bff;
    margin-bottom: 20px;
}
.form-container {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
}

.icon {
    font-size: 24px;
    color: #007bff;
    margin-right: 10px;
}

h1 {
    font-size: 32px;
    margin-bottom: 20px;
    text-align: center;
    color: white;
}

.footer {
    text-align: center;
    color: #777;
    margin-top: 20px;
}

</style>

</html>
