 <!-- ======= Facts Section ======= -->
 <section id="facts" class="facts">
    <div class="container">

      <div class="section-title">
        <h2>{{($titre[2]->titre)}}</h2>
        <p>{{($titre[2]->description)}}</p>
      </div>

      <div class="row no-gutters">

        @foreach($statistique as $statistiques)

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">{{($statistiques->nombre)}}</span>
              <p><strong>{{($statistiques->titre)}}</strong> consequuntur quae</p>
            </div>
          </div>

        @endforeach

      </div>

    </div>
  </section><!-- End Facts Section -->