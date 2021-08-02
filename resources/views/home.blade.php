@extends('layouts.app')

@section('content')
<div class="container-fluid home-page">
    {{-- HEADER --}}
    <div class="row sticky-top justify-content-center home-header">
        <div class="col-md-11">
            <nav class="navbar navbar-expand-lg navbar-dark home-header-nav ">
                <div class="container-fluid">
                  <a class="navbar-brand home-header-nav__brand" href="#sobre"> <img src={{asset('img/svg/brand-logo-white.svg')}} alt="brand-icon" class="img-fluid" alt="Responsive image"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ml-auto home-header-nav__menu">
                      <li class="nav-item active">
                        <a class="nav-link"  href="#sobre">Sobre</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#classificacao">Classificação</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </div>
    {{-- CARROSSEL --}}
    <div id="sobre" class="row  justify-content-center home-intro">
        <div class="col-md-11">
            <div class="row justify-content-between">
                <div class="col-md-6 home-intro__carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="3000">
                                <img src={{asset('img/carousel-image-1.jpg')}} class="d-block w-100" alt="...">
                            </div>

                            <div class="carousel-item" data-interval="3000">
                                <img src={{asset('img/carousel-image-2.jpg')}} class="d-block w-100" alt="...">
                            </div>

                            <div class="carousel-item" data-interval="3000">
                                <img src={{asset('img/carousel-image-3.jpg')}} class="d-block w-100" alt="...">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="home-intro_about">
                            <h1>LOREM IPSUM</h1>
                            <hr class="col-md-4 blue-strap"/>
                            <h2>
                                Lorem Ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nemo sequi porro amet ad dolorum consequatur laborum iusto commodi, voluptatum modi neque ducimus consectetur illo exercitationem atque earum. Nihil, laudantium!
                            </h2>
                            <hr class="col-md-4 blue-strap-large"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- BRIEF --}}
    <div class="row justify-content-between home-brief">
        <div class="col-md-11">
            <div class="row justify-content-between">
                <div class="col-md-8 d-flex">
                    <h3>
                        Lorem Ipsum dolor sit amet consectetur adipisicing elit.
                    </h3>
                </div>
                <div class="col-md-4">
                    <h4>
                        Lorem Ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nemo sequi porro amet ad dolorum consequatur laborum iusto commodi, voluptatum modi neque ducimus...
                    </h4>
                    <h4>
                        Lorem Ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nemo sequi porro amet ad dolorum consequatur laborum iusto commodi, voluptatum modi neque ducimus...
                    </h4>
                </div>
            </div>
        </div>
    </div>
    {{-- TRAVEL --}}
    <div class="row justify-content-center py-5 home-travel">
        <div class="col-md-11">
            <div class="d-flex flex-column h-100 w-50 d-sm-none d-md-flex justify-content-center">
                <h3>
                    ADIPISC NG ELIT
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit eu...
                </p>
            </div>
        </div>
    </div>
    {{--  BLOG --}}
    <div id="blog" class="row justify-content-center home-blog">
        <div class="col-md-11">
            <div class="row  justify-content-between">
                <div class="col-md-3 blog-post">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Lorem Ipsum</h5>
                          <h6 class="card-subtitle">ALIQUAN</h6>
                          <hr />
                          <p class="card-text">Phasellus a suscipit eros. Curabitur eget imperdiet orci. Donec lacinia augue ac lectus volutpat, vitae malesuada metus aliquam. Integer nec iaculis risus, ac rhoncus felis. Sed cursus laoreet erat, nec hendrerit dolor sodales nec. Aliquam erat volutpat. Aliquam eget felis ac sem condimentum iaculis pharetra sed nibh.</p>
                        </div>
                        <div class="card-body post-tags">
                            <p>Lorem Ipsum</p>
                            <a href="#">ULLAMCORPER</a>
                              <div class="d-flex flex-row justify-content-center"><a href="#">VEHICULA</a><a href="#">AENEAN</a></div>
                            <a href="#">DONEC</a>
                        </div>
                      </div>
                </div>

                <div class="col-md-3 blog-post">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Lorem Ipsum</h5>
                          <h6 class="card-subtitle">ALIQUAN</h6>
                          <hr />
                          <p class="card-text">Phasellus a suscipit eros. Curabitur eget imperdiet orci. Donec lacinia augue ac lectus volutpat, vitae malesuada metus aliquam. Integer nec iaculis risus, ac rhoncus felis. Sed cursus laoreet erat, nec hendrerit dolor sodales nec. Aliquam erat volutpat. Aliquam eget felis ac sem condimentum iaculis pharetra sed nibh.</p>
                        </div>
                        <div class="card-body post-tags">
                            <p>Lorem Ipsum</p>
                            <a href="#">ULLAMCORPER</a>
                              <div class="d-flex flex-row justify-content-center"><a href="#">VEHICULA</a><a href="#">AENEAN</a></div>
                            <a href="#">DONEC</a>
                        </div>
                      </div>
                </div>

                <div class="col-md-3 blog-post">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Lorem Ipsum</h5>
                          <h6 class="card-subtitle">ALIQUAN</h6>
                          <hr />
                          <p class="card-text">Phasellus a suscipit eros. Curabitur eget imperdiet orci. Donec lacinia augue ac lectus volutpat, vitae malesuada metus aliquam. Integer nec iaculis risus, ac rhoncus felis. Sed cursus laoreet erat, nec hendrerit dolor sodales nec. Aliquam erat volutpat. Aliquam eget felis ac sem condimentum iaculis pharetra sed nibh.</p>
                        </div>
                        <div class="card-body post-tags">
                            <p>Lorem Ipsum</p>
                            <a href="#">ULLAMCORPER</a>
                              <div class="d-flex flex-row justify-content-center"><a href="#">VEHICULA</a><a href="#">AENEAN</a></div>
                            <a href="#">DONEC</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    {{-- TABELA DE CLASSIFICAÇÃO --}}
    <div id="classificacao" class="row  justify-content-center home-table">
        <div class="col-md-11">
            <div class="row justify-content-between">
                <div class="col-md-7 classification">
                    <table class="table classification-table">
                        <thead>
                          <tr>
                            <th scope="col">Classificação</th>
                            <th scope="col">Loja</th>
                            <th scope="col">Funcionário</th>
                            <th scope="col">Pontos</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($classification as $key => $row)
                            <tr>
                              @if($key < 3)
                              <td style="background-color: red; color: white;">
                              @else
                              <td>
                              @endif
                              {{ ++$key }}</td>
                              <td>{{ $row->store }}</td>
                              <td>{{ $row->employee }}</td>
                              <td>{{ $row->points }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
                <div class="col-md-5 classification-text">
                    <h4>
                        Select Rank
                    </h4>
                    <p>
                        <<<< DNEC MALESUADA ARCU ULLAMCORPER
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- FOOTER --}}
    <div id="contato" class="row justify-content-center home-footer">
        <div class="col-md-11">
            <div class="row justify-content-around">
                <div class="col-md-5 d-flex flex-column terms-container">
                <h5>
                    ADIPISC NG ELIT
                </h5>
                <!-- Button trigger modal -->
                <a data-toggle="modal" data-target="#terms">
                    TERMOS DE PRIVACIDADE
                </a>
                <!-- Modal -->
                <div class="modal fade" id="terms" tabindex="-1" aria-labelledby="termsTitle" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title" id="termsTitle">Termos de privacidade</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt quis ipsam commodi velit provident laboriosam dolorem magnam nihil nam! Modi totam ipsam alias pariatur quos, laudantium magni nulla eius minus!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                    @if(session()->has('message'))
                        <div style="width: 250px; font-size: 1rem; font-weight: 600; color: white;" class="alert alert-success fixed-top mx-auto text-center alert-dismissible fade show" role="alert">
                            {{ session()->get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form class="contact-form" type  action="/" method = "post">
                        <div class="mb-3">
                            <label for="inputFullName" class="form-label">Nome Completo</label>
                            <input type="text" name="fullname" class="form-control" id="inputFullName">
                        </div>
                        <div class="mb-3">
                          <label for="inputEmail" class="form-label">Email</label>
                          <input type="email" name="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="mb-3">
                            <label for="inputCellphone" class="form-label">Celular</label>
                            <input type="text" name="cellphone" class="form-control" id="inputCellphone">
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="acceptTerms">
                          <label class="form-check-label" for="acceptTerms">Concordo com os <a data-toggle="modal" data-target="#terms">TERMOS DE PRIVACIDADE</a></label>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-secondary">Enviar Agora >>></button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection