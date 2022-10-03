@extends('back.layout.index')

@section('content')

<form action="" method="POST" enctype="multipart/form-data">
    @csrf
<input type="file" name="img"><button>ajoutez un fichier</button>
</form>

@endsection
