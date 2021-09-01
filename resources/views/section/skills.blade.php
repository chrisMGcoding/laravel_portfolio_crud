  <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>{{($titre[3]->titre)}}</h2>
        <p>{{($titre[3]->description)}}</p>
      </div>

      <div class="row skills-content">

        @foreach($competence as $competences)

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">{{($competences->competence)}}<i class="val">{{($competences->pourcentage)}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{($competences->pourcentage)}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

        @endforeach

        </div>

      </div>

    </div>
  </section><!-- End Skills Section -->