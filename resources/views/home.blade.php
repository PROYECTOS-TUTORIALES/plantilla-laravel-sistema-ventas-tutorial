@extends('layouts.app')

@section('content')


<!--.side-menu-->

<h2 class="text-center text-secondary pb-2">PANEL DE CONTROL</h2>

<div class="container-fluid text-center">
    <div class="row">

        <!--.col-->
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <article class="statistic-box red">
                        <div>
                            <div class="number text-light">1000</div>
                            <div class="caption">
                                <div>PACIENTE</div>
                            </div>
                        </div>
                    </article>
                </div>
                <!--.col-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <article class="statistic-box purple">
                        <div>
                            <div class="number text-light">1000</div>
                            <div class="caption">
                                <div>MEDICO</div>
                            </div>
                        </div>
                    </article>
                </div>
                <!--.col-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <article class="statistic-box green">
                        <div>
                            <div class="number text-light">1000</div>
                            <div class="caption">
                                <div>ESPECIALIDAD</div>
                            </div>
                        </div>
                    </article>
                </div>
                <!--.col-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <article class="statistic-box yellow">
                        <div>
                            <div class="number text-light">1000</div>
                            <div class="caption">
                                <div>USUARIO</div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-12">
                    <article class="statistic-box bg-info">
                        <div>
                            <div class="number text-light">1000</div>
                            <div class="caption">
                                <div>CITAS PENDIENTES</div>
                            </div>
                        </div>
                    </article>
                </div>
                <!--.col-->
            </div>
            <!--.row-->
        </div>
        <!--.col-->

        <!--.col-->
        <div class="container" style="width: 100%;">
            <canvas id="grafica" height="90"></canvas>
        </div>
        <!--.row-->

    </div>
</div>

<!--.container-fluid-->
<!--.page-content-->
</body>





@endsection