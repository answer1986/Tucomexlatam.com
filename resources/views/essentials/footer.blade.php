
@section('footer')
<br>
<footer class="bg-img background-size-contain" id="footers" data-overlay-dark="9">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 sm-margin-30px-bottom">

                        <a href="javascript:void(0)" class="navbar-brand logodefault"><img id="logo" src="i" class="img-fluid xs-display-small" alt=""></a>
                        <!--<p class="margin-20px-top">Nemo enim enim voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequ magni dolores eos qui ratione voluptatem.</p>-->
                        <div class="margin-25px-top footer-social-icons">
                            <ul>
                                <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            
                                <img src="{{URL::asset('./img/gif/tucomexlatam.com-2.gif')}}" class="tucomexicon">
                            
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 sm-margin-30px-bottom sm-display-none xs-display-none">
                        <br>
                        <div class="row">
                            <div class="col-md-5 no-padding-right xs-padding-15px-right">
                                <ul class="footer-list xs-margin-5px-bottom">
                                    <li><a id="text-footer" href="{{url('/inicio')}}">Transporte internacional</a></li>
                                    <li><a id="text-footer"href="{{url('/quienes-somos')}}">Transporte local </a></li>
                                    <li><a id="text-footer"href="{{url('/preguntas-frecuentes')}}">Seguros</a></li> 
                                    <li><a id="text-footer"href="{{url('/preguntas-frecuentes')}}">Asesoria en comercio Internacional</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4 no-padding-right xs-padding-10px-right">
                                <ul class="footer-list xs-margin-5px-bottom">
                                    <li><a id="text-footer"href="{{url('/importacion')}}">Importacion</a></li>
                                    <li><a id="text-footer"href="{{url('/exportacion')}}">Exportacion</a></li>
                                    <li><a id="text-footer" href="{{url('/contacto')}}">Contacto</></li>
                                    <li><a id="text-footer"href="{{url('/preguntas-frecuentes')}}">Aduana</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-lg-3 col-md-4">
                        <br>
                        

                    </div>

            </div>

            <div class="footer-bar bg-transparent border-top border-color-light-white position-relative z-index-1">
                <div class="container">
                    <p id="text-footer" >© 2022 Tucomexlatam| Todos los Derechos Reservados</p>
                </div>
            </div>
 </footer>

            
@endsection