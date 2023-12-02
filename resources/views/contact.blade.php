<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Contact</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="image/css/owl.carousel.min.css">
</head>
<body>

    <!-- contact -->
    <section class="p-5 bg-light">
        <div class="container-fluid">
             <!-- title -->
             <div class="row">
                <div class="col text-center mb-3">
                    <h1 class="display-2" style="color: #10182F;">Contactez-nous</h1>
                    <p class="lead text-secondary">Contactez-nous pour vos différentes questions et suggestion</p>
                </div>
            </div>
            <!-- end of title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <form action="{{ route('contact.submit') }}" class="text-muted" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" id="email" name="email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : ''}}" id="message" name="message" rows="3"></textarea>
                            @if ($errors->has('message'))
                                <span class="invalid-feedback">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                        <button class="btn btn-outline-primary btn-block m-2" type="submit">Envoyer votre Question</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end of contact -->

    <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
    <script src="image/js/owl.carousel.min.js"></script>
    <script src="OwlCarousel2-2.3.4/src/js/owl.animate.js"></script>
</body>
</html>