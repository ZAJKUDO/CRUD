@extends ('layout.app')
@section('content')

</div>
<!-- Contact Section-->
<section class="page-section masthead" id="contact">
            <div class="container">
              @if (session()->has('message'))
            <div class="alert alert-primary" role="alert">
              {{session()->get('message')}}
            </div>
              @endif
                <!-- Contact Section Heading-->
                <h1 class="page-section-heading text-center masthead text-uppercase text-secondary mb-0">LISTA WPISÓW</h1>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Tytuł Bloga</th>
      <th scope="col">Zawartość</th>
      <th scope="col">Autor</th>
      <th scope="col">Możliwość</th>
    </tr>
  </thead>
  <tbody>
    
        @foreach ($wpisy as $wpis)
        <tr>  
    
      <td>{{ $wpis->title}}</td>
      <td>{{ $wpis->post }}</td>
      <td>{{ $wpis->addressee }}</td>
      <td><a class="btn btn-success" href="{{ route('edytuj',['id'=>$wpis->id]) }}">Edycja</a></td>
      <td><a class="btn btn-danger" href="{{ route('usun',['id'=>$wpis->id]) }}">Usuń</a></td>
    </tr>
        @endforeach
</tbody>
</table>
            </div>
        </section>
@endsection