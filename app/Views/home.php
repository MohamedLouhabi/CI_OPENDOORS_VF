<?= $this->extend('layouts/app.php'); ?>
<?= $this->section('content'); ?>

<!-- Slider Section -->
<div class="slide-one-item home-slider owl-carousel">
  <?php foreach ($allProps as $prop): ?>
    <div class="site-blocks-cover overlay" style="background-image: url(<?= base_url('public/assets/images/' . $prop['image']); ?>);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">For <?= $prop['type'] ?></span>
            <h1 class="mb-2 text-white"><?= $prop['name']; ?></h1>
            <p class="mb-5"><strong class="h2 text-warning font-weight-bold"><?= $prop['price']; ?> DH</strong></p>
            <p><a href="<?= url_to('prop.single', $prop['id']); ?>" class="btn btn-light py-3 px-5 rounded-0">See Details</a></p>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<!-- Search Section -->
<div class="site-section site-section-sm pb-0 bg-light">
  <div class="container">
    <div class="row">
      <form class="form-search col-md-12" method="POST" action="<?= url_to('props.search'); ?>" style="margin-top: -100px;">
        <div class="row align-items-end">
          <div class="col-md-3">
            <label for="list-types" class="form-label">Listing Types</label>
            <div class="select-wrap">
              <select name="home_type" id="list-types" class="form-control d-block rounded-0">
                <option value="Condo">Houses</option>
                <option value="Commercial">Commercial Building</option>
                <option value="Land">Land Property</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <label for="offer-types" class="form-label">Offer Type</label>
            <div class="select-wrap">
              <select name="type" id="offer-types" class="form-control d-block rounded-0">
                <option value="buy">For Buy</option>
                <option value="rent">For Rent</option>
                <option value="lease">For Lease</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <label for="select-city" class="form-label">Select City</label>
            <div class="select-wrap">
              <select name="location" id="select-city" class="form-control d-block rounded-0">
                <option value="agadir">Agadir</option>
                <option value="meknes">Meknes</option>
                <option value="marrakech">Marrakech</option>
                <option value="rabat">Rabat</option>
                <option value="oujda">Oujda</option>
                <option value="safi">Safi</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <input type="submit" class="btn btn-primary text-white btn-block rounded-0" value="Search">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Properties Section -->
<div class="site-section site-section-sm bg-light">
  <div class="container">
    <div class="row">
      <?php foreach ($allProps as $prop): ?>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="property-entry h-100 shadow-sm">
            <a href="<?= url_to('prop.single', $prop['id']); ?>" class="property-thumbnail">
              <div class="offer-type-wrap">
                <span class="offer-type bg-success"><?= $prop['type']; ?></span>
              </div>
              <img src="<?= base_url('public/assets/images/' . $prop['image']); ?>" alt="Image" class="img-fluid">
            </a>
            <div class="p-4 property-body">
              <h2 class="property-title"><a href="<?= url_to('prop.single', $prop['id']); ?>"><?= $prop['name']; ?></a></h2>
              <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> <?= $prop['location']; ?></span>
              <strong class="property-price text-primary mb-3 d-block"><?= $prop['price']; ?> DH</strong>
              <ul class="property-specs-wrap">
                <li><span>Beds:</span> <?= $prop['num_beds']; ?></li>
                <li><span>Baths:</span> <?= $prop['num_baths']; ?></li>
                <li><span>Sq Ft:</span> <?= $prop['sq_ft']; ?></li>
              </ul>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- Why Choose Us Section -->
<div class="site-section">
  <div class="container text-center">
    <h2>Why Choose Us?</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores quisquam saepe architecto error corporis aliquam. Cum ipsam a consectetur aut sunt sint animi, pariatur corporis, eaque, deleniti cupiditate officia.</p>
  </div>
</div>

<?= $this->endSection(); ?>
