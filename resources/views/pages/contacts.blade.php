@extends('layouts.app')

@section('title')
    NTVC | Contacts
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="mt-2">Contact <small>We'd Love to Hear From You!</small></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
        </div>
        <div class="col-lg-12">
            <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
            <iframe width="100%" scrolling="no" height="400px" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28018.39252484876!2d36.511248284779604!3d-0.8813336449146213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18292feb33e28c37%3A0x8d08c762331780ae!2sNaivasha%20Technical%20and%20Vocational%20College!5e1!3m2!1sen!2ske!4v1570720656474!5m2!1sen!2ske" marginwidth="0" marginheight="0"></iframe>
        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-sm-8">
            <h3>Let's Get In Touch!</h3>
            <p>Visit our offices at the school grounds. You will be served by Esther. </p>
            <form action="/message" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="input1">Name</label>
                        <input type="text" id="input1" class="form-control" name="name" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="input2">Email Address</label>
                        <input type="email" id="input2" class="form-control" name="email" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="input3">Phone Number</label>
                        <input type="phone" id="input3" class="form-control" name="contact" required>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12">
                        <label for="input4">Message</label>
                        <textarea id="input4" rows="6" class="form-control" name="message" required></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="hidden" value="contact" name="save">
                        <button class="btn btn-primary" type="submit" disabled>Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-4">
            <h3>Naivasha TVC</h3>
            <p>
                P.O Box 574 - 20117.<br>
                Naivasha, Kenya.<br>
            </p>
            <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: 0740 429 247</p>
            <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:info@ntvc.ac.ke">info@ntvc.ac.ke</a></p>
            <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:principalnaivashatechnical@gmail.com">principalnaivashatechnical@gmail.com</a></p>
            <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: Monday - Friday: 8:00 AM to 5:00 PM</p>
            <ul class="list-unstyled list-inline list-social-icons">
                <li class="tooltip-social facebook-link"><a title="Facebook" data-placement="top" data-toggle="tooltip" href="https://www.facebook.com/naivashatvc/"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                {{-- <li class="tooltip-social linkedin-link"><a title="LinkedIn" data-placement="top" data-toggle="tooltip" href="#linkedin-company-page"><i class="fa fa-linkedin-square fa-2x"></i></a></li> --}}
                <li class="tooltip-social twitter-link"><a title="Twitter" data-placement="top" data-toggle="tooltip" href="#twitter-profile"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                {{-- <li class="tooltip-social google-plus-link"><a title="Google+" data-placement="top" data-toggle="tooltip" href="#google-plus-page"><i class="fa fa-google-plus-square fa-2x"></i></a></li> --}}
            </ul>
        </div>
    </div><!-- /.row -->
</div>

@endsection