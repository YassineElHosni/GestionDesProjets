<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container">
		 <table class="table table-condensed">
		 	<thead>
		 		<tr>
		 			<th>#</th>
		 			<th>title</th>
		 			{{-- <th>description</th> --}}
		 			<th>date limite</th>
		 			<th>date debut</th>
		 			<th>date fin</th>
		 			<th>deplacement</th>
		 			<th>etat</th>
		 			{{-- <th>commentaire</th> --}}
		 		</tr>
		 	</thead>
		 	<tbody>
		 		@foreach($projets as $p)
		 		<tr>
		 			<th scope="row">{{$p->id}}</th>
		 			<td>{{$p->intitulee}}</td>
		 			{{-- <td>{{$p->description}}</td> --}}
		 			<td>{{date('d-m-Y', strtotime($p->date_limite))}}</td>
		 			<td>{{date('d-m-Y', strtotime($p->date_debut))}}</td>
		 			<td>{{date('d-m-Y', strtotime($p->date_fin))}}</td>
		 			<td>{{$p->deplacement}}</td>
		 			<td>{{$p->état}}</td>
		 		{{-- 	<td>{{$p->commentaire}}</td> --}}
		 		</tr>
		 		@endforeach
		 	</tbody>
		 </table> 
	</div>
</body>
</html>