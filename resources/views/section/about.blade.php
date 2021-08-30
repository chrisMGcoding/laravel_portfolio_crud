<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>{{($titre[0]->titre)}}</h2>
        <p>{{($titre[0]->description)}}</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{($titre[1]->titre)}}</h3>
          <p class="font-italic">
          {{($titre[1]->description)}}
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{($coordonnee[0]->anniversaire)}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{($coordonnee[0]->website)}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{($coordonnee[0]->phone)}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{($coordonnee[0]->ville)}}</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{($coordonnee[0]->age)}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{($coordonnee[0]->diplome)}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> {{($coordonnee[0]->email)}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{($coordonnee[0]->freelance)}}</li>
              </ul>
            </div>
          </div>
          <p>
          {{($titre[2]->description)}}
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->