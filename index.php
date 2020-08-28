<html>
<head>
    <title>Demo.com - a revolutionary way to hire local services</title>
    <link rel="stylesheet" type="text/css" href="/build/css/main.css?<?= intval(microtime(true)) ?>">
    <link rel="stylesheet" type="text/css" href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css?<?= intval(microtime(true)) ?>">

</head>
<body>

<nav class="navbar sticky-top navbar-expand demo-header  body-min-width header-shadow background-color-white py-0" id="demo-header">

    <div class="container">
        <a class="navbar-brand py-3" href="/en/gb/">
            <img class="img-fluid" src="https://d18jakcjgoan9.cloudfront.net/s/img/images/demologo-dark.png!d=KY4fXZ" width="106" height="32" title="Demo Logo" alt="Demo Logo">
        </a>
    </div>
</nav>

<div class="container">
    <section id="page-header">
        <div class="row">
            <div class="col-xl-6 col-md-9">
                <h1 class="text-nowrap">Find the perfect Professional for you</h1>
                <h4 class="text-light-grey mb-4">Get free quotes within minutes</h4>
                <form class="js-submit-lead">
                    <div class="form-group">
                        <label for="inputService">What service area you looking for?</label>
                        <select class="form-control js-autocomplete-services" id="inputService" name="services_id"
                                placeholder="Enter a service (Personal Trainers etc.)"
                                aria-describedby="serviceDescription"
                                autocomplete="off"></select>
                        <div class="invalid-feedback"></div>
                        <small id="serviceDescription" class="form-text text-muted">
                            We'll find the right Professionals for you
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="inputLocation">Where are you looking?</label>
                        <select class="form-control js-autocomplete-location" id="inputLocation" name="locations_id"
                                placeholder="Enter a location (London etc.)"
                                aria-describedby="locationDescription"
                                autocomplete="off"></select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Your Name</label>
                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter name" />
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" class="form-control" id="inputEmail" name="email"
                               aria-describedby="emailDescription" placeholder="Enter email"
                        />
                        <div class="invalid-feedback"></div>
                        <small id="emailDescription" class="form-text text-muted">
                            We'll let you know when we've got Professionals for you
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="inputTelephone">Telephone</label>
                        <input type="tel" class="form-control" id="inputTelephone" name="phone"
                               aria-describedby="telephoneDescription" placeholder="Enter telephone"
                        />
                        <div class="invalid-feedback"></div>
                        <small id="telephoneDescription" class="form-text text-muted">
                            So we can verify your information
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="inputExtraInformation">Any Extra Information?</label>
                        <textarea class="form-control" id="inputExtraInformation" name="extra"
                                  aria-describedby="extraInfoDescription" rows="3"></textarea>

                        <small id="extraInfoDescription" class="form-text text-muted">
                            Include as much information as you can, so we can find the best Professionals
                        </small>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Find Professionals</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>


<div id="new-lead-success" class="modal fade in">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header text-white text-center">
                <div class="icon-container py-3">
                    <i class="far fa-check-circle fa-8x"></i>
                </div>
                <button type="button" class="close text-md text-white" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body text-center">
                <h4>Great!</h4>
                <p>We've submitted your lead.</p>
                <button class="btn btn-primary" data-dismiss="modal">
                    <span>View matched professionals</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>


<script type="application/javascript" src="/node_modules/jquery/jquery.min.js"></script>
<script type="application/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.5/dist/latest/bootstrap-autocomplete.min.js"></script>

<script type="application/javascript" src="/build/js/index.js?<?= intval(microtime(true)) ?>"></script>

</body>
</html>