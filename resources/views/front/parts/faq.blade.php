@extends('front.layouts.mainText')

@section('content')
    <section id="faqs-part" class="pt-120 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3>Preguntas Frecuentes</h3>
                        <div class="underline">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="faq">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseOne"
                                       aria-expanded="true" aria-controls="collapseOne" href="faq.html#">¿Que necesito
                                        para poner KinderGestion en mi centro educativo?</a>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Para que KinderGestion pueda operar en el centro educativo, se necesita una
                                            terminal (computadora, tablet o celular) conectado a internet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                       aria-expanded="true" aria-controls="collapseTwo" href="faq.html#">¿Cómo tiene que
                                        ser mi nivel técnico en informatica?</a>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>No necesita altos niveles técnicos en informatica para poder operar nuestra
                                            herrmienta. Igualmente usted cuenta con nuestro centro de ayuda para
                                            cualquier problema o consulta que tenga.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseThree"
                                       aria-expanded="true" aria-controls="collapseThree" href="faq.html#">¿Los familiares pueden escribir todo el tiempo?</a>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>La herramienta imita el cuarderno, los familiares pueden comunicarse con el centro infantil todo el tiempo y las veces que sea necesarias.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseFour"
                                       aria-expanded="true" aria-controls="collapseFour" href="faq.html#">¿Los docentes pasaran más tiempo con la herramienta que con los niños?</a>
                                </div>

                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>KinderGestion es una aplicación pensada para optimizar el tiempo en el que el docente pasa escribiendo en cada cuaderno, esta aplicación reemplaza el cuaderno y las notas repetitas para cada alumno.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseFive"
                                       aria-expanded="true" aria-controls="collapseFive" href="faq.html#">¿Cuando me puedo dar de baja de la aplicación?</a>
                                </div>

                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>En el momento que desee el centro educativo se podrá dar de baja de la aplicación.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection