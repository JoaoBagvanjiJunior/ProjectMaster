@include('layouts.header');
@include('layouts.sidebar');

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Editar Docente</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Editar Docente</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">

                <h5 class="card-title">Adicionar Docente</h5>

                <!-- Form Elements -->
                <form method="POST" action="/docente/{{ $docente->id }}">

                  @csrf

                  <div class="row mb-3">

                        {{-- Nome --}}
                        <div class="col-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="iniciais" value="{{ $docente->iniciais }}">
                        </div>

                        {{-- Email --}}
                        <div class="col-9">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="docente" value="{{ $docente->designac }}">
                        </div>

                        {{-- Data de Nascimento --}}
                      <div class="col-6">
                        <label class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data" value="{{ $docente->data }}">
                     </div>

                      {{-- Genero --}}
                      <div class="form-group row ">
                        <div class="col-md-12">
                            <label for="gender" class= "col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label><br />
                            <div class="form-check form-check-inline" >
                              <input class="form-check-input" type="radio" name="gender" value="masculino">
                              <label class="form-check-label" for="masculino">Masculino</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" value="feminino">
                              <label class="form-check-label" for="feminino">Feminino</label>
                            </div>
                        </div>
                      </div>

                      {{-- Imagem --}}
                      <div class="form-group row ">
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="image" class= "col-md-4 col-form-label text-md-right">Imagem do Docente:</label>
                              <input type="file" name="image" id="image" class="form-control-file">
                              <img src="/img/events/{{$docente->image}}" class="img-preview" style="border-radius: 5px; max-width: 250px; max-height: 250px;">
                            </div>
                        </div>
                      </div>


                  </div>

                  <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{route('docente.index')}}" class="btn btn-secondary">Voltar</a>
                  </div>

                </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


@include('layouts.footer');