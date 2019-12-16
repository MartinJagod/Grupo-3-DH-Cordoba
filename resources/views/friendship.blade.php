@extends('layouts.app')

@section('content')


<div class="container">


  <ul>
    @forelse($friend as $frien)

      <li>
        @if ($frien->status==9)
          <a class="btn btn-outline-success" href='/solicitud/{{$frien->id}}' role="button"> {{ucfirst($frien->name)}} 'Ya son amigo'</a>
        @else
          <a class="btn btn-outline-primary" href='/solicitud/{{$frien->id}}' role="button"> {{ucfirst($frien->name)}}</a>

        @endif
          <br>
          <br>
        </li>
    @empty
      <p>      No encontramos a la persona que buscas    </p>
    @endforelse
  </ul>

</div>

@endsection

{{-- <div class="container-fluid  col-md-12 banner principallogin ">
  <div class="row col-md-12 banner ">

    <div class=" container col-md-4 fondoGris">

      <form role="form" action= "validar.php" method='post' >
        <div class="form-group">
          <label for="exampleInputEmail1">
            Direccion de Email
          </label>
          <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">

          <label for="exampleInputPassword1">
            Password
          </label>
          <input type="password" class="form-control" name="password" id="password">
        </div>

        <button type="submit" class="btn btn-primary">
          Submit
        </button>
      </form>
    </div>

    <div class="container shadow p-3 mb-5 bg-white rouded col-md-4 ">
      <address>
        <img class="col-12 banner " alt="Bootstrap Image" src="img/logo1.jpg" />
        <br>
         <strong>Coordobeses, Inc.</strong><br /> Jose Baigorri 653.<br /> Cordoba, X5001AJM<br /> <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
    </div>
  </div>

</div> --}}
