 <!-- ======= Facts Section ======= -->
 <section id="facts" class="facts">
    <div class="container">

      <div class="section-title">
        <h2>{{($titre[2]->titre)}}</h2>
        <p>{{($titre[2]->description)}}</p>
      </div>

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
          <div class="count-box">
            <i class="icofont-simple-smile"></i>
            <span data-toggle="counter-up">{{($statistique[0]->nombre)}}</span>
            <p><strong>{{($statistique[0]->titre)}}</strong> consequuntur quae</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="count-box">
            <i class="icofont-document-folder"></i>
            <span data-toggle="counter-up">{{($statistique[1]->nombre)}}</span>
            <p><strong>{{($statistique[1]->titre)}}</strong> adipisci atque cum quia aut</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="count-box">
            <i class="icofont-live-support"></i>
            <span data-toggle="counter-up">{{($statistique[2]->nombre)}}</span>
            <p><strong>{{($statistique[2]->titre)}}</strong> aut commodi quaerat</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="count-box">
            <i class="icofont-users-alt-5"></i>
            <span data-toggle="counter-up">{{($statistique[3]->nombre)}}</span>
            <p><strong>{{($statistique[3]->titre)}}</strong> rerum asperiores dolor</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Facts Section -->