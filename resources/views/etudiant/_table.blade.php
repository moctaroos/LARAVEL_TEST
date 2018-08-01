<table class="table">
	<tr>
		<th>
			{{ trans('etudiant.nom') }}
		</th>
		<th>
			{{ trans('etudiant.prenom') }}
		</th>
		<th>Action</th>
		<th>modification</th>
		<th>suppression</th>
	</tr>
	@foreach ($etudiants as $etudiant)
	<tr>
		<th>
			{{ $etudiant->nom }}
		</th>
		<th>
			{{ $etudiant->prenom }}
		</th>
		<th>
			<a href="{{route('showEtudiant',$etudiant->id)}}">{{trans('commun.details')}} </a> 
		</th>
		<th>
			<a href="{{route('editEtudiant',$etudiant->id)}}">{{trans('commun.modifier')}} </a> 
		</th>
		<th>
			<a href="{{route('deleteEtudiant',$etudiant->id)}}">{{trans('commun.supprimer')}} </a> 
		</th>
		
	</tr>
	@endforeach
	</table>