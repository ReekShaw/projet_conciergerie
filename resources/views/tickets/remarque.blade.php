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
			<a href="{{ url('/remarque') }}"><button type="button" class="btn btn-secondary" value="remarque">Remarque</button></a>

<!-- Indiquer abonné existant -->
			<form method="POST" action="/remarque" style="box-shadow: 10px 5px 5px grey; border: 2px solid black; padding: 2rem; margin: 2rem">
				{{ csrf_field() }}
					<label>Entrez le nom</label>
				      <input type="text" id="name" class="form-control" placeholder="First name">
					<label>Entrez le prenom</label>
				      <input type="text" id="last_name" class="form-control" placeholder="Last name">
			

<!-- Debut de la class remarque -->
				<!-- choix de l objet remarque -->
						<h1>Remarque</h1>
							<form >
								<div class      ="form-group">
									<label for      ="sel1">Objet de la remarque : </label>
									<select class   ="form-control" id="sel1" name="sellist1" required>
										<option selected disabled>Choisir l'objet de la remarque</option>
										@foreach ($objet_remarques as $objet_remarques)
											<option value="{{ $objet_remarques->id }}">{{ $objet_remarques->name }}</option>
										@endforeach
									</select>
								</div>

				<!-- Détail de la remarque -->
								<div class      ="form-group">
									<label for      ="remarque">Détail : </label>
									<textarea class ="form-control" rows="5" id="description" placeholder="Merci d'ajouter les détails de la remarque." name="description"></textarea>
								</div>
							
						<button type="submit" class="btn btn-primary">Envoyer</button>	
			</form>
		</div>
	</div>
</div>


@endsection