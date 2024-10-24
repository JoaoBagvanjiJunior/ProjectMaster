@include('layouts.header');
@include('layouts.sidebar');

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Docente</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Docentes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
            
            @if(session()->has('docente.create')) 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                    {{session()->get('docente.create')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if(session()->has('docente.update')) 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                    {{session()->get('docente.update')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if(session()->has('docente.delete')) 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                    {{session()->get('docente.delete')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lista dos Docentes</h5>
             
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data nascimento</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Imagem</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach (App\Models\docente::all() as $docente)
                        <tr>
                            <th scope="row">

                                <div class="dropdown">
                                    <a class="btn btn-secondary btn-sm" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i class="bi bi-three-dots text-white"></i>
                                    </a>
                                  
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <li><a class="dropdown-item" href="/docente/{{ $docente->id }}/view"> <i class="bi bi-eye-fill"></i> Consultar</a></li>
                                      <li><a class="dropdown-item" href="/docente/{{ $docente->id }}/edit"> <i class="bi bi-pencil-fill"></i> Editar</a></li>
        
                                      <form method="POST" action="/docente/{{ $docente->id }}/destroy">
                                        @csrf
                                        <li><button type="submit" class="dropdown-item"> <i class="bi bi-backspace-fill"></i> Eliminar</button></li>
                                      </form>
                                    </ul>
                                </div>
                            </th>
                            <td> {{ $docente->iniciais }} </td>
                            <td> {{ $docente->designac }} </td>
                            <td> {{ $docente->data }} </td>
                            <td> {{ $docente->gender }} </td>
                            <td> <img src="/img/events/{{$docente->image}}" style="border-radius: 5px; max-width: 60px; max-height: 60px;" class="img-fluid"></td>
                        </tr>
                    @endforeach

                </tbody>
              </table>
              <!-- End Table with stripped rows -->

              <a href="{{ route('docente.create') }}" type="button" class="btn btn-outline-primary"><i class="bi bi-plus me-1"></i> Adicionar</a>

            </div>
          </div>

        </div>
      </div>
    </section>

</main><!-- End #main -->

@include('layouts.footer');