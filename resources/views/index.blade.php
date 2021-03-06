@extends('layouts.master')


@section('main')

    {{--nav--}}
    <nav>
        <div class="grid">
            <div class="left" style="margin: 0;">

                <h1>JS<span class="blue">.</span></h1>

            </div>
            <div class="right">
                <ul>
                    <a href="/" class="active"><li>Home</li></a>
                    <a href="/about"><li>About</li></a>
                    <a href="/portfolio"><li>Portfolio</li></a>
                    <a href="/contact"><li>Contact</li></a>

                </ul>
            </div>
        </div>
    </nav>
    <div class="line_nav"></div>
    {{--end nav--}}


    {{--landing header--}}
    <div class="head">
        <div class="text" data-aos="fade-down">
            <h1>Hoi, Ik ben Jelle &mdash; een <span class="blue">Front-End</span> Developer in de regio Amsterdam.</h1>
            <div class="light_spacing"></div>
            <a href="/portfolio" class="p_button">Projecten</a>
            <a href="{{asset('downloads/CV.pdf')}}" download class="cv_button"><img src="{{asset('images/icon/download.png')}}" alt="">Download CV</a>
        </div>
        <div class="img" data-aos="fade-left">
            <img src="{{asset('images/head.png')}}" alt="image">
        </div>
    </div>
    {{--End landing header--}}

    <div class="main-info">
        <div class="big_spacing"></div>
        <div class="sidetext">
            <p class="" data-aos="fade-right">- About me</p>
        </div>
        <div class="text" data-aos="fade-down">
            <h1>Wie ben ik en<br> wat doe ik<span class="blue">.</span></h1>
        </div>
        <div class="light_spacing"></div>
            <div class="about1" data-aos="fade-up">
                <p>Hoi, Ik ben Jelle Stekelenburg, een 18 jarige gemotiveerde Front-End Developer uit Schagen. Ik volg de opleiding Mediadeveloper op het Mediacollege Amsterdam waar ik leer progammeren. Momenteel progammeer ik veel met de framework Laravel, waar deze website ook in is gemaakt. En probeer ik mezelf steeds meer te leren, door middel van stage of eigen initiatief<span class="blue">.</span>
                </p>
            </div>
        <div class="big_spacing"></div>
    </div>
    <div class="big_spacing"></div>
    <div class="projects pmain">
        <div class="sidetext">
            <p class="" data-aos="fade-right">- Latest projects</p>
        </div>
        <div class="width">
            <h1 data-aos="fade-down">Mijn werk<span class="blue">.</span></h1>
            <div class="grid">
                <div class="prj" data-aos="fade-right">
                    <div class="bg">
                        <h3>Portfolio<span class="blue">.</span></h3>
                        <div class="next_button"><a href="/case-portfolio" class="next"><img src="{{asset('images/icon/next.png')}}" alt=""></a></div>
                    </div>
                </div>
                <div class="prj" data-aos="fade-up">
                    <div class="bg">
                        <h3>Coming Soon<span class="blue">.</span></h3>
                        <div class="next_button"><a href="" class="next"><img src="{{asset('images/icon/next.png')}}" alt=""></a></div>
                    </div>
                </div>
                <div class="prj pmr" data-aos="fade-left">
                    <div class="bg">
                        <h3>Coming Soon<span class="blue">.</span></h3>
                        <div class="next_button"><a href="" class="next"><img src="{{asset('images/icon/next.png')}}" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="big_spacing"></div>

    <div class="photo">
        <h2><span class="blue">"</span>Creativity is nothing but a mind set free<span class="blue">"</span><br>&mdash; Torrie T. Asai<span class="blue">.</span></h2>
    </div>

    <div class="bigger_spacing"></div>

    <div class="contact">
        <div class="sidetext">
            <p class="" data-aos="fade-right">- Contact me</p>
        </div>

        <div class="heading" data-aos="fade-down">
            <h1>Neem contact<br> met mij op<span class="blue">.</span></h1>
        </div>
        <div class="width">
            <div class="grid">
                <div class="left" data-aos="fade-right">
                    <p class="b">Heb je een opmerking of vraag?<br>Stuur mij een bericht.</p>
                    <div class="light_spacing"></div>
                    <p>Tel: (+031) 6 24421363</p>
                    <p><a href="mailto:jelle@nwave.nl">Mail: Jelle@nwave.nl</a></p>
                    <div class="light_spacing"></div>
                </div>
                <div class="right" data-aos="fade-left">
                    <form class="contact-form" action="{{asset('contactform.php')}}" method="post">
                        <input type="text" name="afd1" placeholder="Naam">
                        <input type="text" name="afd2" placeholder="Mail">
                        <textarea name="afd3" placeholder="Bericht" ></textarea>
                        <button type="submit" name="submit">Stuur</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bigger_spacing"></div>

@endsection
