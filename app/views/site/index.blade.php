@extends('layouts.master')
@section('content')

  <!-- Welcome -->
  <section class="welcome welcome2 section mainSection scrollAnchor lightSection" id="welcome">
    <div class="sectionWrapper">
      <div class="container">

        <div class="row">
          <div class="servicesCarousel servicesGallary">

            <div class="col-md-6 col-sm-6 item service singleServiceWrapper">
              <div class="singleService singleService2 clearfix">
                <div class="serviceIcon">
                  <div class="servicesIconBase servicesBg-1"></div>
                </div><!-- end of services icon -->
                <div class="servicesContents">
                  <h3 class="serviceName">Vos données sécurisés</h3>
                  <p class="servicesDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
                  <a class="readMore generalLink" href="#">En savoir plus</a>
                </div><!-- end of services contents -->
              </div><!-- end of single service -->
            </div><!-- end of single service wrapper -->

            <div class="col-md-6 col-sm-6 item service singleServiceWrapper">
              <div class="singleService singleService2 clearfix">
                <div class="serviceIcon">
                  <div class="servicesIconBase servicesBg-4"></div>
                </div><!-- end of services icon -->
                <div class="servicesContents">
                  <h3 class="serviceName">Accessible dans le monde entier</h3>
                  <p class="servicesDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
                  <a class="readMore generalLink" href="#">En savoir plus</a>
                </div><!-- end of services contents -->
              </div><!-- end of single service -->
            </div><!-- end of single service wrapper -->

          </div><!-- end of services gallary -->

        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of section wrapper -->
  </section><!-- end welcome section -->

  <!-- Pricing -->
  <section class="pricing pricing2 section mainSection scrollAnchor graySection" id="pricing">
    <div class="sectionWrapper">
      <div class="container">
        <div class="row">

          <div class="col-md-12 sectionTitle">
            <h2 class="sectionHeader">
              Différents forfaits et prix incroyables :)
              <span class="generalBorder"></span>
            </h2><!-- end of sectionHeader -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
          </div><!-- end of section title -->

          <div class="col-md-4">
            <div class="pricingTable">
              <header class="pricingHeader clearfix">
                <h3 class="pricingTitle planTitle">
                  Plan Basic <br><span>Idéal pour les particuliers </span>
                </h3>
                <span class="pricingPerMonth">Gratuit</span>
              </header><!-- end pricing header -->
              <ul class="pricingBody planBody">
                <li>Nombre max. de Riingers<span>50</span></li>
                <li>Support<span>par email</span></li>
                <li class="clearfix">
                  <p><a class="generalLink moreDetails" href="#" title="Plus de détails">Plus de détails</a></p>
                  <p><a class="generalLink orderNow" href="#" title="S'inscrire">S'inscrire</a></p>
                </li>
              </ul><!-- end pricing body -->
            </div><!-- end of pricing table -->
          </div>

          <div class="col-md-4">
            <div class="pricingTable">
              <header class="pricingHeader clearfix">
                <h3 class="pricingTitle planTitle">
                  Plan Professionnel<br><span>Idéal pour les PME</span>
                </h3>
                <div class="pricingPerMonth">50 CHF/Mois</div>
              </header><!-- end pricing header -->
              <ul class="pricingBody planBody">
                <li>Nombre max. de Riingers<span>500</span></li>
                <li>Support<span>par email et téléphone</span></li>
                <li class="clearfix">
                  <p><a class="generalLink moreDetails" href="#" title="Plus de détails">Plus de détails</a></p>
                  <p><a class="generalLink orderNow" href="#" title="S'inscrire">S'inscrire</a></p>
                </li>
              </ul><!-- end pricing body -->
            </div><!-- end of pricing table -->
          </div>

          <div class="col-md-4">
            <div class="pricingTable">
              <header class="pricingHeader clearfix">
                <h3 class="pricingTitle planTitle">
                  Plan Ultra <br>
                  <span>Idéal pour les grandes entreprises</span>
                </h3>
                <div class="pricingPerMonth">200 CHF/Mois</div>
              </header><!-- end pricing header -->
              <ul class="pricingBody planBody">
                <li>Nombre max. de Riingers<span>illimité</span></li>
                <li>Support<span>par email et téléphone</span></li>
                <li class="clearfix">
                  <p><a class="generalLink moreDetails" href="#" title="Plus de détails">Plus de détails</a></p>
                  <p><a class="generalLink orderNow" href="#" title="S'inscrire">S'inscrire</a></p>
                </li>
              </ul><!-- end pricing body -->
            </div><!-- end of pricing table -->
          </div>

        </div><!-- end of row-->
      </div><!-- end of container -->
    </div><!-- end of section wrapper -->
  </section><!-- end of pricing section -->

@stop
