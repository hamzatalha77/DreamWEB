@php
    $roles=\Spatie\Permission\Models\Role::where('id','!=',1)->get();
   // dd($roles);
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3">
                Choisir un role :
            </div>
            <div class="col-sm-9">
                <select name="users" id="users" class="form-control" onchange="change_user()" required>
                    @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-header">
                <h3>Formulaire</h3>
            </div>
            <div class="card-body">
                <div class="col-sm-12">


                        <div class="col-md-4" id="prenom">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom" required>
                        </div>
                        <div class="col-md-4" id="nom">
                            <label for="nom"  class="form-label">Nom</label>
                            <input type="text" name="name" class="form-control" id="nom" required>
                        </div>
                        <div class="col-md-4" id="date">
                            <label for="date" class="form-label">Date de naissance</label>
                            <input type="date" name="daten" class="form-control" id="date" required>
                        </div>
                        <div class="col-md-4" id="address">
                            <label for="adresse" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="adresse" required>
                        </div>
                        <div class="col-md-4" id="tel">
                            <label for="tel" class="form-label">Téléphone</label>
                            <input type="tel" name="tele" class="form-control" id="tel" required>
                        </div>
                        <div class="col-md-4" id="sexe">
                            <label class="form-label">Sexe</label>
                            <div>
                                <input type="radio" name="sexe" id="h" required>Homme
                                <input type="radio" name="sexe" id="f" required>Femme
                            </div>
                        </div>
                        <div class="col-md-4" id="login">
                            <label for="email" class="form-label">email</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="col-md-4" id="password">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="text" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="col-md-4" id="confirmation">
                            <label for="confirmation" class="form-label">Confirmer le mot de passe</label>
                            <input type="text"  name="password2" class="form-control" id="confirmation" required>
                        </div>
                        <div class="col-md-4" id="cin">
                            <label for="cin" class="form-label">CIN</label>
                            <input type="text" name="cin" class="form-control" id="cin" required >
                        </div>
                        <div class="col-md-4" style="display: none;" id="cne">
                            <label for="cne" class="form-label">CNE</label>
                            <input type="text" name="cne" class="form-control" id="cne" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>

                </div>
            </div>
        </div>
        </div>
</form>
</body>
<script>
function change_user() {
   var select_status=$('#users').val();
   if(select_status == '4'){
       $('#cne').show();
       $('#cin').hide();
       $('#tel').hide();
   }
   else{
        $('#cne').hide();
        $('#cin').show();
        $('#tel').show();
   }



}
</script>
</html>
