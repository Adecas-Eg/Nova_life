@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <div class="bg-gray-200 container-fluid py-4">

        <section class="pt-3 pt-md-5 pb-md-5 pb-lg-7">
            <div class="container">
                <div class="col-12 mx-auto">
                    <div class="card shadow-lg">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-dark shadow-info border-radius-lg p-4">
                                <h3 class="text-white mb-0">FAQ</h3>
                                <p class="text-white opacity-8 mb-0">Last modified: Aug 30 2021</p>
                            </div>
                        </div>
                        <div class="card-body p-sm-5 pt-0">
                            <h5 class="my-4">Basics</h5>
                            <div class="accordion" id="accordionFaq">
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            How do I order?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body text-sm opacity-8">
                                            We’re not always in the position that we want to be at. We’re constantly
                                            growing.
                                            We’re constantly making mistakes. We’re constantly trying to express ourselves
                                            and
                                            actualize our dreams. If you have the opportunity to play this game
                                            of life you need to appreciate every moment. A lot of people don’t appreciate
                                            the
                                            moment until it’s passed.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            How can i make the payment?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionFaq">
                                        <div class="accordion-body text-sm opacity-8">
                                            It really matters and then like it really doesn’t matter. What matters is the
                                            people
                                            who are sparked by it. And the people who are like offended by it, it doesn’t
                                            matter. Because it's about motivating the doers. Because I’m here to
                                            follow my dreams and inspire other people to follow their dreams, too.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingThree">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            How much time does it take to receive the order?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body text-sm opacity-8">
                                            The time is now for it to be okay to be great. People in this world shun people
                                            for
                                            being great. For being a bright color. For standing out. But the time is now to
                                            be
                                            okay to be the greatest you. Would you believe in what you
                                            believe in, if you were the only one who believed it?
                                            If everything I did failed - which it doesn't, it actually succeeds - just the
                                            fact
                                            that I'm willing to fail is an inspiration. People are so scared to lose that
                                            they
                                            don't even try. Like, one thing people can't say is that I'm not
                                            trying, and I'm not trying my hardest, and I'm not trying to do the best way I
                                            know
                                            how.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingFour">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Can I resell the products?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body text-sm opacity-8">
                                            I always felt like I could do anything. That’s the main thing people are
                                            controlled
                                            by! Thoughts- their perception of themselves! They're slowed down by their
                                            perception of themselves. If you're taught you can’t do anything, you
                                            won’t do anything. I was taught I could do everything.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingFifth">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth"
                                            aria-expanded="false" aria-controls="collapseFifth">
                                            Where do I find the shipping details?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseFifth" class="accordion-collapse collapse"
                                        aria-labelledby="headingFifth" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body text-sm opacity-8">
                                            There’s nothing I really wanted to do in life that I wasn’t able to get good at.
                                            That’s my skill. I’m not really specifically talented at anything except for the
                                            ability to learn. That’s what I do. That’s what I’m here for. Don’t be
                                            afraid to be wrong because you can’t learn anything from a compliment.
                                            I always felt like I could do anything. That’s the main thing people are
                                            controlled
                                            by! Thoughts- their perception of themselves! They're slowed down by their
                                            perception of themselves. If you're taught you can’t do anything, you
                                            won’t do anything. I was taught I could do everything.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-5 mb-4">Account &amp; Settings</h5>
                            <div class="accordion" id="accordionFaq2">
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingOne1">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1"
                                            aria-expanded="false" aria-controls="collapseOne1">
                                            How do I change my password?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseOne1" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne1" data-bs-parent="#accordionFaq2">
                                        <div class="accordion-body text-sm opacity-8">
                                            Society has put up so many boundaries, so many limitations on what’s right and
                                            wrong
                                            that it’s almost impossible to get a pure thought out. It’s like a little kid, a
                                            little boy, looking at colors, and no one told him what colors are good, before
                                            somebody tells you you shouldn’t like pink because that’s for girls, or you’d
                                            instantly become a gay two-year-old.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingTwo1">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1"
                                            aria-expanded="false" aria-controls="collapseTwo1">
                                            How can I delete my account?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseTwo1" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo1" data-bs-parent="#accordionFaq2">
                                        <div class="accordion-body text-sm opacity-8">
                                            Why would anyone pick blue over pink? Pink is obviously a better color.
                                            Everyone’s
                                            born confident, and everything’s taken away from you <br><br>
                                            We’re not always in the position that we want to be at. We’re constantly
                                            growing.
                                            We’re constantly making mistakes.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingThree1">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1"
                                            aria-expanded="false" aria-controls="collapseThree1">
                                            How can I change account make account settings?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseThree1" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree1" data-bs-parent="#accordionFaq2">
                                        <div class="accordion-body text-sm opacity-8">
                                            People in this world shun people for being great. For being a bright color.
                                            We’re
                                            constantly trying to express ourselves and actualize our dreams. If you have the
                                            opportunity to play this game of life you need to appreciate every moment. A lot
                                            of
                                            people don’t appreciate the moment until it’s passed.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingFour1">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour1"
                                            aria-expanded="false" aria-controls="collapseFour1">
                                            How to reset my password?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseFour1" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour1" data-bs-parent="#accordionFaq2">
                                        <div class="accordion-body text-sm opacity-8">
                                            What matters is the people who are sparked by it. And the people who are like
                                            offended by it, it doesn’t matter. Because it's about motivating the doers.
                                            Because
                                            I’m here to follow my dreams and inspire other people to follow their dreams,
                                            too.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-5 mb-4">Licenses</h5>
                            <div class="accordion" id="accordionFaq3">
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingOne2">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2"
                                            aria-expanded="false" aria-controls="collapseOne2">
                                            What are the differences between the licenses on the website?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseOne2" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne2" data-bs-parent="#accordionFaq3">
                                        <div class="accordion-body text-sm opacity-8">
                                            We’re constantly trying to express ourselves and actualize our dreams. If you
                                            have
                                            the opportunity to play this game of life you need to appreciate every moment. A
                                            lot
                                            of people don’t appreciate the moment until it’s passed.
                                            The time is now for it to be okay to be great.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingTwo2">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                            aria-expanded="false" aria-controls="collapseTwo2">
                                            Can I use a premium product in an open source project?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseTwo2" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo2" data-bs-parent="#accordionFaq3">
                                        <div class="accordion-body text-sm opacity-8">
                                            People in this world shun people for being great. For being a bright color. For
                                            standing out. But the time is now to be okay to be the greatest you. Would you
                                            believe in what you believe in, if you were the only one who believed it?
                                            As we live, our hearts turn colder.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingThree2">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2"
                                            aria-expanded="false" aria-controls="collapseThree2">
                                            Can I use my Freelancer/Startup License on an alias domain?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseThree2" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree2" data-bs-parent="#accordionFaq3">
                                        <div class="accordion-body text-sm opacity-8">
                                            Cause pain is what we go through as we become older. We get insulted by others,
                                            lose
                                            trust for those others. We get back stabbed by friends. It becomes harder for us
                                            to
                                            give others a hand. We get our heart broken by people we love, even that we give
                                            them all we have. Then we lose family over time. What else could rust the heart
                                            more
                                            over time? Blackgold.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h6 class="accordion-header" id="headingFour2">
                                        <button class="accordion-button border-bottom font-weight-bold text-start"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour2"
                                            aria-expanded="false" aria-controls="collapseFour2">
                                            Can I use my Freelancer/Startup License on an alias domain?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h6>
                                    <div id="collapseFour2" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour2" data-bs-parent="#accordionFaq3">
                                        <div class="accordion-body text-sm opacity-8">
                                            Cause pain is what we go through as we become older. We get insulted by others,
                                            lose
                                            trust for those others. We get back stabbed by friends. It becomes harder for us
                                            to
                                            give others a hand. We get our heart broken by people we love, even that we give
                                            them all we have. Then we lose family over time. What else could rust the heart
                                            more
                                            over time? Blackgold.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.footers.auth.footer')
@endsection
