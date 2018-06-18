@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-12">

<section style="color: red; font-style: italic; font-size: 1.2rem; font-weight: bold; text-align: right;">
	<p>* Attention, tous les champs doivent être remplis obligatoirement.</p>
</section>

<a href="{{ url('/tickets') }}"><button type="button" class="btn btn-secondary" >Accueil</button></a>
<a href="{{ url('/commande') }}"><button type="button" class="btn btn-secondary" >Commande</button></a>
<a href="{{ url('/reclamation') }}"><button type="button" class="btn btn-secondary" value="reclamation">Reclamation</button></a>
<a href="{{ url('/remarque') }}"><button type="button" class="btn btn-secondary" value="reclamation">Remarque</button></a>

<!-- Indiquer abonné existant -->
			<form style="box-shadow: 10px 5px 5px grey; border: 2px solid black; padding: 2rem; margin: 2rem">
					<label>Entrez le nom</label>
				      <input type="text" class="form-control" placeholder="First name">
					<label>Entrez le prenom</label>
				      <input type="text" class="form-control" placeholder="Last name">
			</form>


<!-- Debut de la class reclamation -->
						<div  id="reclamation" style="box-shadow: 10px 5px 5px grey; border: 2px solid black; padding: 2rem; margin: 2rem">
							<h1>Réclamation</h1>
							<!-- Choix de l'objet reclamation  -->
									<div class      ="form-group">
											<label for      ="sel1">Objet de la réclamation : </label>
											<select class   ="form-control" id="sel1" name="sellist1" required>
												<option selected disabled>Choisir l'objet</option>
												<option selected disabled>Choisir l'objet de la reclamation</option>
												@foreach ($objet_reclamations as $objet_reclamations)
													<option value="{{ $objet_reclamations->id }}">{{ $objet_reclamations->name }}</option>
												@endforeach
											</select>
									</div>

							<!-- Ajout d'une categorie par l'admin -->
									<div class="form-group">
										<form action="reclamation.php" method="POST" enctype="multipart/form-data">
											<label><i>à voir seulement par l admin // </i> Ajouter un nom de catégorie : </label>
												<input type="text" name="name">
												<input type="submit" name="valider">
										</form>
									</div>

							<!-- New Task Form -->
                        <form action="/reclamation" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <!-- Task title -->
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Tâche</label>

                                <div class="col-sm-6">
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-plus"></i> Ajouter tâche
                                    </button>
                                </div>
                            </div>
                        </form>

								<!-- date de la reclamation -->
											<label for="plage_horaire">Indiquer la date de reclamation : </label><br>
												<input type="date" name="plage_horaire">
								<!-- detail  -->
								<div class      ="form-group">
									<label for      ="comment">Détail : </label>
									<textarea class ="form-control" rows="5" id="comment" placeholder="Merci d'ajouter les détails de la reclamation."></textarea>
								</div>

						<button type="submit" class="btn btn-primary">Envoyer</button>			
						</div>

		</div>
	</div>
</div>

@endsection