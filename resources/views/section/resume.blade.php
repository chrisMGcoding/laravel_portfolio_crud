  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>{{($titre[4]->titre)}}</h2>
        <p>{{($titre[4]->description)}}</p>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-up">
          <h3 class="resume-title">{{($titre[5]->titre)}}</h3>
          <div class="resume-item pb-0">
            <h4>{{($titre[6]->titre)}}</h4>
            <p><em>{{($titre[6]->description)}}</em></p>
            <ul>
              <li>{{($coordonnee[0]->ville)}}</li>
              <li>{{($coordonnee[0]->phone)}}</li>
              <li>{{($coordonnee[0]->email)}}</li>
            </ul>
          </div>

          <h3 class="resume-title">{{($titre[7]->titre)}}</h3>
          <div class="resume-item">
            <h4>{{($titre[8]->titre)}}</h4>
            <h5>{{$annee[0]->annee}} - {{$annee[1]->annee}}</h5>
            <p><em>{{($titre[8]->description)}}</p>
          </div>
          <div class="resume-item">
            <h4>{{($titre[9]->titre)}}</h4>
            <h5>{{$annee[2]->annee}} - {{$annee[3]->annee}}</h5>
            <p><em>{{($titre[9]->description)}}</p>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="resume-title">{{($titre[10]->titre)}}</h3>
          <div class="resume-item">
            <h4>{{($titre[11]->titre)}}</h4>
            <h5>{{$annee[4]->annee}} - Present</h5>
            <p><em>Experion, New York, NY </em></p>
            <ul>
              <li>{{($titre[12]->description)}}</li>
              <li>{{($titre[13]->description)}}</li>
              <li>{{($titre[14]->description)}}</li>
              <li>{{($titre[15]->description)}}</li>
            </ul>
          </div>
          <div class="resume-item">
            <h4>{{($titre[16]->titre)}}</h4>
            <h5>{{$annee[5]->annee}} - {{$annee[6]->annee}}</h5>
            <p><em>Stepping Stone Advertising, New York, NY</em></p>
            <ul>
              <li>{{($titre[17]->description)}}</li>
              <li>{{($titre[18]->description)}}</li>
              <li>{{($titre[19]->description)}}</li>
              <li>{{($titre[20]->description)}}</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->