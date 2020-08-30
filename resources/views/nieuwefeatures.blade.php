@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Roadmap</div>

                    <div class="panel-body">
                        Ah, je bent benieuwd welke vette nieuwe features in de MACTOOL zullen worden gebouwd? Dat vind ik leuk!

                        <hr>

                        <h3>Toevoegen van nieuwe invoerregels</h3>
                        <p>
                          De volgende regels wil ik gaan implementeren bij het aanmaken en bewerken van apparaten:
                            <li>Of het apparaat al is gepatcht (is_patched)</li>
                            <li>Welk IP adres het heeft (ip_address)</li>
                            <li>Wat van type het apparaat is (type)</li>
                        </p>

                        <hr>

                        <h3>Snel afvinken van openstaande items</h3>
                        <p>
                            Zonder dat je elk apparaat individueel hoeft te openen, kan je binnenkort op de homepage
                            al direct een item afvinken door deze als 'verwerkt' te markeren.
                        </p>

                        <hr>

                        <h3>Multi-user support</h3>
                        <p>
                            Het had er eigenlijk al lang in moeten zitten... Eigenlijk wil je met je eigen account inloggen
                            en daarmee een nieuwe projectlocatie aan willen maken, die je tevens kan delen met collega's.
                            Maakt het tevens een stukje veiliger - vind mijn Firewall prettig ;-).
                        </p>
                        <p>
                            Extra toevoeging hierop is dat je dus uiteindelijk kan inloggen met je eigen Van Breda account! - Als het mag van Beheer ^-^
                        </p>

                        <hr>

                        <h3>2FA</h3>
                        <p>
                            Hier kan je niet onderuit komen bij een aankomend Security Specialist (in spé). Two-Factor Authentication:
                            Iets wat je weet. Iets wat je hebt. Dat kan een smartphone met een Random Number Generator of bijvoorbeeld een Yubikey zijn.
                        </p>
                        <p>
                            Geen zorgen, dit went wel ;-).
                        </p>

                        <hr>

                        <h3>Export functie</h3>
                        <p>
                            @if(Auth::guest())
                                Er komt een exportfunctie naar Excel
                            @else
                                Er komt een exportfunctie naar Excel (https://github.com/maatwebsite/Laravel-Excel)
                            @endif()
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
