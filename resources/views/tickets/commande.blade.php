@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-12" >

<section style="color: red; font-style: italic; font-size: 1.2rem; font-weight: bold; text-align: right;">
	<p>* Attention, tous les champs doivent être remplis obligatoirement.</p>
</section>


			<a href="{{ url('/tickets') }}"><button type="button" class="btn btn-secondary">Accueil</button></a>
			<a href="{{ url('/commande') }}"><button type="button" class="btn btn-secondary" >Commande</button></a>
			<a href="{{ url('/reclamation') }}"><button type="button" class="btn btn-secondary" value="reclamation">Reclamation</button></a>
			<a href="{{ url('/remarque') }}"><button type="button" class="btn btn-secondary" value="remarque">Remarque</button></a>

			



<!-- Indiquer abonné existant -->
			<form style="box-shadow: 10px 5px 5px grey; border: 2px solid black; padding: 2rem; margin: 2rem">
					<label>Choisissez une communauté</label>
					<select class="form-control" name="community_name">
						@foreach ($communities as $community)
							<option value="{{ $community->id }}">{{ $community->name }}</option>
						@endforeach
					</select>


					<label>Nom de l'abonnée : </label>
					<select class="form-control" name="subscriber_name">
						@foreach ($subscribers as $subsriber)
							<option value="{{ $subsriber->id }}">{{ $subsriber->name }}</option>
						@endforeach
					</select>

				    
			</form>

<!-- debut de class commande  -->

<div  id="commande" style="box-shadow: 10px 5px 5px grey; border: 2px solid black; padding: 2rem; margin: 2rem">
	<h1>Commande</h1>
<!-- choix de la categorie de commande -->
						<div class="form-group">
							<label for="sel1">Catégorie : </label>
							<select class="form-control" name="category_name">
								@foreach ($categorys as $category)
									<option value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
							</select>
						</div>

		<!-- ajout des articles de la commande -->
						<div class="form-group">
							<label for="comment">Articles:</label>
							<textarea class="form-control" rows="5" id="comment" placeholder="Merci d'aller à la ligne pour chaque article."></textarea>
						</div>
						

		
<form id='form'>
	
		<input type="radio" name="choix_livraison" value="permanence">
		<label for="permanance">Livraison lors de la prochaine permanence</label><br>

		<div id="permanence">
			<input type="checkbox">Heure prochaine permanence			
		</div>

		<input type="radio" name="choix_livraison" value="dediee">
		<label for="dediee">Livraison sur une plage horaire dédiée</label><br>

		<div id="dediee">
			<label for="dediee"></label>
			<select name="dediee" id="dediee">
				<option value="choix_1">Heure 1</option>
				<option value="choix_2">Heure 2</option>
			</select>
		</div>

		<input type="radio" name="choix_livraison" value="personalisee">
		<label for="personalisee">Requête spéciale avec livraison personnalisée</label>

		<div id="personalisee">
			<input type="time">
			<input type="time">
		</div>
</form>



<br><br><br>
	<button type="submit" class="btn btn-primary">Envoyer</button>		
</div>




	



		</div>
	</div>
</div>

@endsection