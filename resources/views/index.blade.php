<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#523f3f">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Consultanse - Consulting Services</title>
</head>
<body class="container-fluid" style="opacity: 0;">

<!-- Header -->
<header class="sticky-top">
    <nav class="nav-contact py-1">
        <div class="container nav-contact-container">
            <a href="mailto:consulting@namesurname.com">
                <i class="fa-regular fa-envelope"></i>
                consulting@namesurname.com
            </a>
            <ul>
                <li class="me-4">
                    <a href="https://www.instagram.com" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.tiktok.com/" target="_blank">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="container py-3">
        <a class="logo" onclick="scrollToTop()">
            Name Surname
            <span>Consulting</span>
        </a>
        <ul class="menu">
            <li class="me-4">
                <a class="menu-link" data-relation="about" onclick="go('about')">Who am I?</a>
            </li>
            <li class="me-4">
                <a class="menu-link" data-relation="services" onclick="go('services')">Services</a>
            </li>
            <li>
                <a class="menu-link" data-relation="consulting" onclick="go('consulting')">Contact</a>
            </li>
        </ul>
        <ul>
            <li>
                <a class="appointment" onclick="go('consulting')">Get Consultancy</a>
            </li>
        </ul>
        <a class="hamburger" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-bars"></i>
        </a>
        <ul class="dropdown-menu mobile-menu">
            <li class="container">
                <a class="dropdown-item" onclick="go('about')">Who am I?</a>
            </li>
            <li class="container">
                <a class="dropdown-item" onclick="go('services')">Services</a>
            </li>
            <li class="container">
                <a class="dropdown-item" onclick="go('consulting')">Contact</a>
            </li>
        </ul>
    </nav>
</header>

<!-- Banner -->
<section class="banner">
    <div class="container banner-container">
        <div class="content">
            <h1>WHAT DOES IT TAKE TO START A NEW LIFE IN GERMANY?</h1>
            <h2>Get consulting now and start making your dreams come true.</h2>
            <div class="operations">
                <a class="operation me-4" onclick="go('consulting')">Get Consultancy</a>
                <a class="operation operation-light" onclick="go('services')">More Information</a>
            </div>
        </div>
    </div>
</section>

<!-- About -->
<section class="about" id="about">
    <div class="container about-container pt-5 pb-4">
        <div class="about-content">
            <h2>Who am I?</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras feugiat, augue non eleifend pulvinar, diam odio sollicitudin felis, eget vulputate mauris arcu non eros. Praesent facilisis venenatis euismod. Aenean vel nunc neque. Pellentesque eleifend, magna vitae sodales rhoncus, tortor dolor pulvinar orci, vitae semper arcu quam nec purus. Aliquam tincidunt congue feugiat. Maecenas nibh sapien, maximus dictum nulla nec, egestas pretium urna. Maecenas efficitur elit at interdum congue. Nunc dignissim, orci vitae ornare ornare, libero lectus pellentesque urna, vel vulputate dui diam ac risus. Fusce laoreet tincidunt mauris mollis volutpat. Suspendisse pulvinar risus et augue dignissim, quis gravida justo fermentum. Fusce euismod nisl velit, in consequat massa rutrum sed. Sed lectus ligula, condimentum fringilla massa in, placerat rhoncus odio.
            </p>
            <p>
                Donec eu feugiat metus. Etiam rutrum, ex sit amet semper condimentum, nulla dui laoreet mi, sed pulvinar dolor elit sit amet orci. Cras finibus interdum quam id ullamcorper. Nunc eu facilisis lacus. Quisque ac iaculis mi. Quisque auctor sodales urna, non sagittis nisl eleifend quis. Suspendisse tincidunt commodo justo sit amet suscipit. Praesent blandit libero sed felis placerat, at fermentum ipsum vestibulum. Vivamus eu eros risus. Etiam sit amet venenatis ipsum. Maecenas ac enim non ante interdum maximus.
            </p>
            <p>
                Sed facilisis placerat ullamcorper. Nullam sed est quam. Phasellus ac sagittis quam. Etiam at purus sed libero dictum vulputate. Sed sagittis nunc aliquam gravida scelerisque. Nullam diam magna, pretium rhoncus augue ac, tempor maximus augue. Suspendisse potenti. Quisque feugiat dolor ut neque ornare, vel vulputate diam laoreet.
            </p>
        </div>
        <img src="{{ asset('images/person.jpg') }}" alt="Person">
    </div>
</section>

<!-- Services -->
<section class="services my-4" id="services">
    <div class="container services-container py-4">
        <h2>Services</h2>
        <p>I provide professional consultancy services to those who want to settle in Germany.</p>
        <div class="service-cards mt-4">
            <div class="service-card">
                <i class="fa-solid fa-clipboard-list mb-4"></i>
                <p class="service-title">Appointment</p>
                <p>
                    Nam id nisl ligula. Maecenas congue eleifend nibh blandit porta. Nam gravida enim et malesuada suscipit. Proin cursus eros eget lectus pulvinar viverra. In congue diam dapibus leo finibus, sit amet malesuada est commodo. Praesent sit amet cursus orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sed sapien sed augue scelerisque facilisis at sit amet justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam nulla elit, dapibus sit amet felis ut, cursus viverra mi. Phasellus auctor facilisis feugiat. Curabitur mauris nulla, luctus ac viverra sit amet, varius vel metus. Vestibulum placerat nunc et dui vehicula egestas. Vestibulum faucibus luctus nibh a vehicula. Cras nisi nulla, maximus at vestibulum ut, molestie eget tellus. Class aptent taciti sociosqu ad litora.
                </p>
                <button type="button" class="service-price" data-bs-toggle="modal" data-bs-target="#service-1">More Information</button>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-graduation-cap mb-4"></i>
                <p class="service-title">Equivalence Consultancy</p>
                <p>
                    Nam id nisl ligula. Maecenas congue eleifend nibh blandit porta. Nam gravida enim et malesuada suscipit. Proin cursus eros eget lectus pulvinar viverra. In congue diam dapibus leo finibus, sit amet malesuada est commodo. Praesent sit amet cursus orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sed sapien sed augue scelerisque facilisis at sit amet justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam nulla elit, dapibus sit amet felis ut, cursus viverra mi. Phasellus auctor facilisis feugiat. Curabitur mauris nulla, luctus ac viverra sit amet, varius vel metus. Vestibulum placerat nunc et dui vehicula egestas. Vestibulum faucibus luctus nibh a vehicula. Cras nisi nulla, maximus at vestibulum ut, molestie eget tellus. Class aptent taciti sociosqu ad litora.
                </p>
                <button type="button" class="service-price" data-bs-toggle="modal" data-bs-target="#service-2">More Information</button>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-user-doctor mb-4"></i>
                <p class="service-title">Resume Preparation</p>
                <p>
                    Nam id nisl ligula. Maecenas congue eleifend nibh blandit porta. Nam gravida enim et malesuada suscipit. Proin cursus eros eget lectus pulvinar viverra. In congue diam dapibus leo finibus, sit amet malesuada est commodo. Praesent sit amet cursus orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sed sapien sed augue scelerisque facilisis at sit amet justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam nulla elit, dapibus sit amet felis ut, cursus viverra mi. Phasellus auctor facilisis feugiat. Curabitur mauris nulla, luctus ac viverra sit amet, varius vel metus. Vestibulum placerat nunc et dui vehicula egestas. Vestibulum faucibus luctus nibh a vehicula. Cras nisi nulla, maximus at vestibulum ut, molestie eget tellus. Class aptent taciti sociosqu ad litora.
                </p>
                <button type="button" class="service-price" data-bs-toggle="modal" data-bs-target="#service-3">More Information</button>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-clipboard-check mb-4"></i>
                <p class="service-title">Document Control</p>
                <p>
                    Nam id nisl ligula. Maecenas congue eleifend nibh blandit porta. Nam gravida enim et malesuada suscipit. Proin cursus eros eget lectus pulvinar viverra. In congue diam dapibus leo finibus, sit amet malesuada est commodo. Praesent sit amet cursus orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sed sapien sed augue scelerisque facilisis at sit amet justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam nulla elit, dapibus sit amet felis ut, cursus viverra mi. Phasellus auctor facilisis feugiat. Curabitur mauris nulla, luctus ac viverra sit amet, varius vel metus. Vestibulum placerat nunc et dui vehicula egestas. Vestibulum faucibus luctus nibh a vehicula. Cras nisi nulla, maximus at vestibulum ut, molestie eget tellus. Class aptent taciti sociosqu ad litora.
                </p>
                <button type="button" class="service-price" data-bs-toggle="modal" data-bs-target="#service-4">More Information</button>
            </div>
        </div>
    </div>
</section>

<!-- Service 1 Modal -->
<div class="modal fade" id="service-1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">
                    <i class="fa-solid fa-clipboard-list me-2"></i>
                    Appointment
                </h1>
                <i type="button" class="fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body">
                <h4>How to get an appointment?</h4>
                <video controls>
                    <source src="{{ asset('videos/example.mp4') }}" type=video/ogg>
                </video>
                <h4>More Information</h4>
                <p class="modal-detail">Nullam sed erat diam. Integer et dui auctor leo rhoncus dignissim placerat nec sapien. Fusce tempor sapien in rhoncus sagittis. Etiam commodo laoreet volutpat. Cras at tempor justo. Curabitur convallis velit eu dui aliquam, nec mattis nulla pulvinar. Fusce urna diam, consectetur et nulla vitae, vulputate sagittis augue. Pellentesque nibh dolor, tristique in efficitur non, facilisis at lacus. Nullam sed erat diam. Integer et dui auctor leo rhoncus dignissim placerat nec sapien. Fusce tempor sapien in rhoncus sagittis. Etiam commodo laoreet volutpat. Cras at tempor justo.</p>
                <p class="modal-detail">Fusce tempor sapien in rhoncus sagittis. Etiam commodo laoreet volutpat. Cras at tempor justo. Curabitur convallis velit eu dui aliquam.</p>
                <p class="modal-detail">Curabitur convallis velit eu dui aliquam, nec mattis nulla pulvinar. Fusce urna diam, consectetur et nulla vitae, vulputate sagittis augue. Pellentesque nibh dolor, tristique in efficitur non, facilisis at lacus. Nullam sed erat diam. Integer et dui auctor leo rhoncus dignissim placerat nec sapien. Fusce tempor sapien in rhoncus sagittis. Etiam commodo laoreet volutpat. Cras at tempor justo. Curabitur convallis velit eu dui aliquam, nec mattis nulla pulvinar. Fusce urna diam, consectetur et nulla vitae, vulputate sagittis augue. Pellentesque nibh dolor, tristique in efficitur non, facilisis at lacus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="contact('service-1')">Get in touch</button>
            </div>
        </div>
    </div>
</div>

<!-- Service 2 Modal -->
<div class="modal fade" id="service-2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">
                    <i class="fa-solid fa-graduation-cap me-2"></i>
                    Equivalence Consultancy
                </h1>
                <i type="button" class="fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body">
                <h4>What is equivalence consultancy?</h4>
                <video controls>
                    <source src="{{ asset('videos/example.mp4') }}" type=video/ogg>
                </video>
                <h4>More Information</h4>
                <p class="modal-detail">Nullam sed erat diam. Integer et dui auctor leo rhoncus dignissim placerat nec sapien hexastic. Nullam sed erat diam. Integer et dui auctor leo rhoncus dignissim placerat nec sapien hexastic. Nullam sed erat diam. Integer et dui auctor leo rhoncus dignissim placerat nec sapien hexastic. Nullam sed erat diam. Integer et dui auctor leo rhoncus dignissim placerat nec sapien hexastic.</p>
                <p class="modal-detail">Nullam sed erat diam. Integer et dui auctor leo rhoncus dignissim placerat nec sapien hexastic.</p>
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="contact('service-2')">Get in touch</button>
            </div>
        </div>
    </div>
</div>

<!-- Service 3 Modal -->
<div class="modal fade" id="service-3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">
                    <i class="fa-solid fa-user-doctor me-2"></i>
                    Resume Preparation
                </h1>
                <i type="button" class="fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body">
                <h4>What is resume preparation?</h4>
                <video controls>
                    <source src="{{ asset('videos/example.mp4') }}" type=video/ogg>
                </video>
                <h4>More Information</h4>
                <p class="modal-detail">Nullam sed erat diam. Integer et dui auctor leo rhoncus dignissim placerat nec sapien. Fusce tempor sapien in rhoncus sagittis. Etiam commodo laoreet volutpat.</p>
                <p class="modal-detail">Integer et dui auctor leo rhoncus dignissim placerat nec sapien. Fusce tempor sapien in rhoncus sagittis. Etiam commodo laoreet volutpat. Cras at tempor justo.</p>
                <p class="modal-detail">Fusce tempor sapien in rhoncus sagittis. Etiam commodo laoreet volutpat. Cras at tempor justo. Curabitur convallis velit eu dui aliquam. Curabitur convallis velit eu dui aliquam, nec mattis nulla pulvinar. Fusce urna diam, consectetur et nulla vitae, vulputate sagittis augue.</p>
                <p class="modal-detail">Pellentesque nibh dolor, tristique in efficitur non, facilisis at lacus. Cras at tempor justo. Curabitur convallis velit eu dui aliquam, nec mattis nulla pulvinar. Fusce urna diam, consectetur et nulla vitae, vulputate sagittis augue. Pellentesque nibh dolor, tristique in efficitur non, facilisis at lacus. Nullam sed erat diam.</p>
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="contact('service-3')">Get in touch</button>
            </div>
        </div>
    </div>
</div>

<!-- Service 4 Modal -->
<div class="modal fade" id="service-4" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">
                    <i class="fa-solid fa-clipboard-check me-2"></i>
                    Document Control
                </h1>
                <i type="button" class="fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body">
                <h4>What is document control?</h4>
                <video controls>
                    <source src="{{ asset('videos/example.mp4') }}" type=video/ogg>
                </video>
                <h4>More Information</h4>
                <p class="modal-detail">Nullam sed erat diam. Integer et dui auctor leo rhoncus dignissim placerat nec sapien. Fusce tempor sapien in rhoncus sagittis. Etiam commodo laoreet volutpat. Cras at tempor justo. Curabitur convallis velit eu dui aliquam, nec mattis nulla pulvinar. Fusce urna diam, consectetur et nulla vitae, vulputate sagittis augue. Pellentesque nibh dolor, tristique in efficitur non, facilisis at lacus. Nullam sed erat diam. Integer et dui auctor leo rhoncus dignissim placerat nec sapien. Fusce tempor sapien in rhoncus sagittis. Etiam commodo laoreet volutpat. Cras at tempor justo.</p>
                <p class="modal-detail">Fusce tempor sapien in rhoncus sagittis. Etiam commodo laoreet volutpat. Cras at tempor justo. Curabitur convallis velit eu dui aliquam.</p>
                <p class="modal-detail">Curabitur convallis velit eu dui aliquam, nec mattis nulla pulvinar. Fusce urna diam, consectetur et nulla vitae, vulputate sagittis augue. Pellentesque nibh dolor, tristique in efficitur non, facilisis at lacus. Nullam sed erat diam. Integer et dui auctor leo rhoncus dignissim placerat nec sapien. Fusce tempor sapien in rhoncus sagittis. Etiam commodo laoreet volutpat. Cras at tempor justo. Curabitur convallis velit eu dui aliquam, nec mattis nulla pulvinar. Fusce urna diam, consectetur et nulla vitae, vulputate sagittis augue. Pellentesque nibh dolor, tristique in efficitur non, facilisis at lacus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="contact('service-4')">Get in touch</button>
            </div>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div class="modal success-modal fade" id="success-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">
                    <i class="fa-solid fa-face-smile me-2"></i>
                    Thank you.
                </h1>
                <i type="button" class="fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body">
                <i class="fa-regular fa-circle-check"></i>
                <h4>Success!</h4>
                <p class="modal-detail">Your form has been sent successfully. I will reply back as soon as possible.</p>
            </div>
        </div>
    </div>
</div>

<!-- Consulting -->
<section class="consulting" id="consulting">
    <div class="container consulting-container pt-4 pb-5">
        <h2>Contact</h2>
        <p>
            To get consultancy, you can contact me by filling out the form below. Please specify which service or services you would like to benefit from in the message section.
        </p>
        <form action="{{ route('contact-form') }}" method="post" autocomplete="off">

            @csrf

            <div class="form-field">
                <input class="form-input" type="text" name="name" id="name" maxlength="24" autocomplete="off">
                <label for="name">Name</label>
            </div>

            <div class="form-field">
                <input class="form-input" type="text" name="surname" id="surname" maxlength="24" autocomplete="off">
                <label for="surname">Surname</label>
            </div>

            <div class="form-field">
                <input class="form-input" type="email" name="email" id="email" maxlength="32" autocomplete="off">
                <label for="email">E-Mail Address</label>
            </div>

            <div class="form-field">
                <input class="form-input" type="tel" name="phone" id="phone" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.+]/g, '').replace(/(\..*)\./g, '$1');" autocomplete="off">
                <label for="phone">Phone Number</label>
            </div>

            <div class="form-field">
                <input class="form-input" type="text" name="education" id="education" maxlength="24" autocomplete="off">
                <label for="education">Education</label>
            </div>

            <div class="form-field">
                <input class="form-input" type="text" name="job" id="job" maxlength="24" autocomplete="off">
                <label for="job">Job</label>
            </div>

            <div class="form-field w-100">
                <textarea class="form-input" name="message" id="message" maxlength="999" cols="30" rows="5" autocomplete="off"></textarea>
                <label for="message">Message</label>
                <span class="character-remaining d-none"></span>
            </div>

            <button type="button" onclick="sendForm()">Send</button>

        </form>
    </div>
</section>

<!-- Footer -->
<footer class="py-4">
    <div class="container footer-container">
        <a class="logo" onclick="scrollToTop()">
            Name Surname
            <span>Consulting</span>
        </a>
        <p class="copyright">&copy; 2023 Consultanse - Consulting Services. All Rights Reserved.</p>
        <ul>
            <li class="me-4">
                <a href="https://www.instagram.com" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://www.tiktok.com/" target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
            </li>
        </ul>
    </div>
</footer>

<!-- Scroll Top Button -->
<button type="button" class="go-top d-none" onclick="scrollToTop()">
    <i class="fa-solid fa-angle-up"></i>
</button>

<script type="text/javascript" src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>

    $(document).ready( function () {

        $('.character-remaining').text($('.form-field textarea').attr('maxlength'));

        @if(session()->has('success'))
            go('consulting');
            $('#success-modal').modal('show');
            setTimeout(function () {
                $('#success-modal').modal('hide');
            }, 7500);
        @endif

    });

    $(window).on('load', function () {
        $('body').css('opacity', 1);
    });

    $(window).on("scroll", function () {
        window.scrollY > 250 ? $(".go-top").removeClass("d-none") : $(".go-top").addClass("d-none");
        menu();
    });

    // Page Links
    function go(target) {
        let top = $('#' + target).offset().top - 107;
        window.scrollTo({top: top});
    }

    // Menu Active
    function menu() {
        let current = window.scrollY;
        let about = $('#about').offset().top - 200;
        let services = $('#services').offset().top - 200;
        let consulting = $('#consulting').offset().top - 200;
        if(current < about) {
            $('a[data-relation]').removeClass('active');
        }
        else if(current >= about && current < services) {
            $('a[data-relation]').removeClass('active');
            $(`a[data-relation="about"]`).addClass('active');
        }
        else if(current >= services && current < consulting) {
            $('a[data-relation]').removeClass('active');
            $(`a[data-relation="services"]`).addClass('active');
        }
        else if(current >= consulting) {
            $('a[data-relation]').removeClass('active');
            $(`a[data-relation="consulting"]`).addClass('active');
        }
    }

    // Service Details Contact Button
    function contact(service) {

        $('#' + service).modal('hide');
        go('consulting');

    }

    // Input & Textarea Labels
    $('input').focus( function () {
        $(this).parent().removeClass('not-validated');
        $(this).attr('placeholder', '');
        $(this).siblings('label').removeClass('move-down');
        $(this).siblings('label').addClass('move-top');
    });
    $('input').on("blur", function () {
        let isEmpty= $(this).val();
        if(isEmpty == '' || isEmpty == null) {
            $(this).siblings('label').removeClass('move-top');
            $(this).siblings('label').addClass('move-down');
        }
    });
    $('textarea').focus( function () {
        $('.character-remaining').removeClass('d-none');
        $(this).parent().removeClass('not-validated');
        $(this).attr('placeholder', '');
        $(this).siblings('label').removeClass('move-down');
        $(this).siblings('label').addClass('move-top');
    });
    $('textarea').on("blur", function () {
        $('.character-remaining').addClass('d-none');
        let isEmpty= $(this).val();
        if(isEmpty == '' || isEmpty == null) {
            $(this).siblings('label').removeClass('move-top');
            $(this).siblings('label').addClass('move-down');
        }
    });

    // Textarea Remaining Character Counter
    $('.form-field textarea').on('input', function () {

        let typed = $(this).val().length;
        let remaining = $(this).attr('maxlength') - typed;
        $('.character-remaining').text(remaining);
        remaining <= 20 ? $('.character-remaining').css('color', '#D60000') : $('.character-remaining').css('color', 'black');

    });

    // Consulting Form
    function sendForm() {

        let isValidated = true;

        $('.form-field input').each( function () {
            if($(this).val() == '' || $(this).val() == null) {
                $(this).parent().addClass('not-validated');
                $(this).siblings('label').removeClass('move-down');
                $(this).siblings('label').addClass('move-top');
                $(this).attr('placeholder', 'This field is required!');
                isValidated = false;
            }
        });

        if($('.form-field textarea').val() == '' || $('.form-field textarea').val() == null) {
            $('.form-field textarea').parent().addClass('not-validated');
            $('.form-field textarea').siblings('label').removeClass('move-down');
            $('.form-field textarea').siblings('label').addClass('move-top');
            $('.form-field textarea').attr('placeholder', 'This field is required!');
            isValidated = false;
        }

        // E-Mail Validation
        let email = $('.form-field input[type="email"]');
        const validateEmail = (email) => {

            return email.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g);

        };

        if(!validateEmail(email.val()) && email.val() != '') {

            email.val('');
            email.parent().addClass('not-validated');
            email.attr('placeholder', 'Please enter a valid E-Mail Address!');
            isValidated = false;

        } else if(!validateEmail(email.val()) && email.val() == '') {

            email.attr('placeholder', 'This field is required!');
            isValidated = false;

        }

        let phone = $('.form-field input[type="tel"]');
        const validatePhone = (phone) => {

            return phone.match(/([(]?)([+90|0|5])([0-9]{2})([)]?)([\s]?)([0-9]{3})([\s]?)([0-9]{2})([\s]?)([0-9]{2})$/g);

        }

        if(!validatePhone(phone.val()) && phone.val() != '') {

            phone.val('');
            phone.parent().addClass('not-validated');
            phone.attr('placeholder', 'Please enter a valid phone number!');
            isValidated = false;

        } else if(!validatePhone(phone.val()) && phone.val() == '') {

            phone.attr('placeholder', 'This field is required!');
            isValidated = false;

        }

        $('.form-input').each( function (){

            let scrollTo = $(this).offset().top - 128;
            if($(this).parent().hasClass('not-validated')) {
                window.scrollTo({top: scrollTo});
                return false;
            }

        });

        if(isValidated) {
            $('form').submit();
        }

    }

    // Scroll Top
    function scrollToTop() {
        window.scrollTo({top: 0});
    }

</script>

</body>
</html>
