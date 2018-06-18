@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-12">

			<section style="color: red; font-style: italic; font-size: 1.2rem; font-weight: bold; text-align: right;">
				<p>* Attention, tous les champs doivent être remplis obligatoirement.</p>
			</section>
<h1>Accueil</h1>

<!-- choix de l 'action -->
<div class="container ">
	<div class="row">
		<div class="col-12 col-md-6" >
			<a href="{{ url('/tickets') }}"><button type="button" class="btn btn-secondary btn-accueil">Accueil</button></a>
			<a href="{{ url('/commande') }}"><button type="button" class="btn btn-secondary btn-accueil">Commande</button></a>
			<a href="{{ url('/reclamation') }}"><button type="button" class="btn btn-secondary btn-accueil">Reclamation</button></a>
			<a href="{{ url('/remarque') }}"><button type="button" class="btn btn-secondary btn-accueil">Remarque</button></a>
		</div>
	</div>
</div>
<br><br>
<p style="color: red; font-weight: bold">Reste à faire : </p>
<ul>
	<li>mettre en relation le formulaire à la Bdd</li>
	<li>ajouter un access admin pour ajouter categorie d article + categorie de remarque + objet de la reclamation</li>
	<li>Systeme d envoie de mail</li>
</ul>


		</div>
	</div>
</div>







@endsection